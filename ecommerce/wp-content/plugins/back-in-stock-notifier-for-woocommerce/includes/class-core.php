<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('CWG_Instock_Core')) {

    class CWG_Instock_Core {

        protected $process_mail;

        public function __construct() {
            add_action('plugins_loaded', array($this, 'initialize'));
            add_action('woocommerce_product_set_stock_status', array($this, 'action_based_on_stock_status'), 999, 3);
            add_action('woocommerce_variation_set_stock_status', array($this, 'action_based_on_stock_status'), 999, 3);
            add_action('cwginstock_trigger_status', array($this, 'trigger_instock_status'), 999, 3);
            add_action('cwg_instock_mail_send_as_copy', array($this, 'send_subscription_copy_to_recipients'), 10, 3);
            add_action('cwg_instock_mail_sent_success', array($this, 'recount_subscribers_upon_instock'), 99);
            add_action('cwg_instock_bulk_status_action', array($this, 'recount_subscribers_upon_bulk_action'), 99, 2);
            add_filter('cwginstock_trigger_status_variation', array($this, 'alter_data_when_sync_variation_stock'), 99, 2);
            add_filter('cwginstock_replace_shortcode', array($this, 'replace_shortcode_with_parameters'), 10, 2);
        }

        public function initialize() {
            $this->process_mail = new CWG_Instock_Mail_Process();
        }

        public function action_based_on_stock_status($id, $stockstatus, $obj = '') {

            if ($stockstatus == 'instock') {
                do_action('cwginstock_trigger_status', $id, $stockstatus, $obj);
            }
        }

        public function trigger_instock_status($id, $stockstatus, $obj) {
            //perform action or trigger dispatch process
            if (!$obj) {
                $obj = wc_get_product($id);
            }

            if ($obj->is_type('variation') || $obj->is_type('variable')) {
                $main_obj = $obj->is_type('variable') ? new CWG_Instock_API($id, 0) : new CWG_Instock_API(0, $id, '', 0);
                $get_posts = apply_filters('cwginstock_trigger_status_variation', $main_obj->get_list_of_subscribers(), $id);

                if (is_array($get_posts) && !empty($get_posts)) {
                    foreach ($get_posts as $each_id) {
                        $this->process_mail->push_to_queue($each_id);
                        $logger = new CWG_Instock_Logger('info', "Subscribed Stock $each_id Found for Variation $id");
                        $logger->record_log();
                    }
                    $this->process_mail->save()->dispatch();
                    $total = count($get_posts);
                    $logger = new CWG_Instock_Logger('info', "Variation $id Instock Background Process started - Total: $total");
                    $logger->record_log();
                }
            } else {
                //for simple
                $main_obj = new CWG_Instock_API($id, 0);
                $get_posts = apply_filters('cwginstock_trigger_status_product', $main_obj->get_list_of_subscribers(), $id);
                if (is_array($get_posts) && !empty($get_posts)) {
                    foreach ($get_posts as $each_id) {
                        $this->process_mail->push_to_queue($each_id);
                    }
                    $this->process_mail->save()->dispatch();
                    $total = count($get_posts);
                    $logger = new CWG_Instock_Logger('info', "Instock Background Process started - Total: $total");
                    $logger->record_log();
                }
            }
        }

        public function alter_data_when_sync_variation_stock($get_data, $id) {
            $object = wc_get_product($id);
            if ($object->is_type('variable') && $object->child_is_in_stock()) {
                $count = $object->get_children(); //if variable product contain one variation some theme has consider as variable product id instead of variation
                $count = count($count); //somecase it yields fatal error when call directly in if condition
                if ($count > 1) {
                    $get_data = array();
                }
            }
            return $get_data;
        }

        public function send_subscription_copy_to_recipients($to, $subject, $message) {
            $get_option = get_option('cwginstocksettings');
            $check_copy_enabled = isset($get_option['enable_copy_subscription']) && $get_option['enable_copy_subscription'] == '1' ? true : false;
            if ($check_copy_enabled) {
                $get_recipients = isset($get_option['subscription_copy_recipients']) && !empty($get_option['subscription_copy_recipients']) ? $get_option['subscription_copy_recipients'] : false;
                if ($get_recipients) {
                    $explode_data = explode(',', $get_recipients);
                    if (is_array($explode_data) && !empty($explode_data)) {
                        foreach ($explode_data as $each_mail) {
                            $mailer = WC()->mailer();
                            $sendmail = $mailer->send($each_mail, $subject, $message);
                        }
                    }
                }
            }
        }

        public function recount_subscribers_upon_instock($subscriber_id) {
            $obj = new CWG_Instock_API();
            $get_product_id = get_post_meta($subscriber_id, 'cwginstock_product_id', true);
            if ($get_product_id) {
                $get_count = $obj->get_subscribers_count($get_product_id, 'cwg_subscribed');
                update_post_meta($get_product_id, 'cwg_total_subscribers', $get_count);
            }
        }

        public function recount_subscribers_upon_bulk_action($subscriber_id, $status) {
            $this->recount_subscribers_upon_instock($subscriber_id);
        }

        public function replace_shortcode_with_parameters($content, $subscriber_id) {
            //return $content;
            $obj = new CWG_Instock_API();
            $prefix = '{product_image=';
            $suffix = '}';
            $get_the_shortcode_content = $obj->get_match_based_on_prefix_suffix($content, $prefix, $suffix);
            if (is_array($get_the_shortcode_content) && !empty($get_the_shortcode_content)) {
                //exits
                foreach ($get_the_shortcode_content as $each_parameters) {
                    $explode_data = explode('x', $each_parameters); //if param value contain something like widthxheight(ex 300x200)
                    $count = count($explode_data);
                    $shortcode = $prefix . $each_parameters . $suffix;
                    $each_parameters = $count > 1 ? array((int) $explode_data[0], (int) $explode_data[1]) : $each_parameters;
                    $replace_shortcode = $obj->get_product_image($subscriber_id, $each_parameters);
                    $content = str_replace($shortcode, $replace_shortcode, $content);
                }
            }
            return $content;
        }

    }

    new CWG_Instock_Core();
}