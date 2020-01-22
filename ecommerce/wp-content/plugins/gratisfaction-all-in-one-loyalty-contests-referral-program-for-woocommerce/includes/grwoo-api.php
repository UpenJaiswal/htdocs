<?php

if( ! defined('ABSPATH'))
    exit;

class Grwoo_API extends WP_REST_Controller
{
    public function register_apis()
    {
        register_rest_route('grwoo/v1', '/setSettings', array(
            array(
                'methods'               =>  WP_REST_Server::EDITABLE,
                'callback'              =>  array($this, 'set_settings'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));

        register_rest_route('grwoo/v1', '/getuserroles', array(
            'methods' => 'POST',
            'callback'=>  array($this, 'getuserroles'),
            'permission_callback'   =>  array($this, 'check_api_permission'),
            'args'                  =>  array()
        ));

        register_rest_route('grwoo/v1', '/getversion', array(
            'methods' => 'POST',
            'callback'=>  array($this, 'getversion'),
            'permission_callback'   =>  array($this, 'check_api_permission'),
            'args'                  =>  array()
        ));

        register_rest_route('grwoo/v1', '/getPage', array(
            array(
                'methods'               =>  WP_REST_Server::READABLE,
                'callback'              =>  array($this, 'get_page'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
        register_rest_route('grwoo/v1', '/addPage', array(
            array(
                'methods'               =>  WP_REST_Server::CREATABLE,
                'callback'              =>  array($this, 'add_page'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
        register_rest_route('grwoo/v1', '/editPage', array(
            array(
                'methods'               =>  WP_REST_Server::EDITABLE,
                'callback'              =>  array($this, 'edit_page'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
        register_rest_route('grwoo/v1', '/deletePage', array(
            array(
                'methods'               =>  WP_REST_Server::EDITABLE,
                'callback'              =>  array($this, 'delete_page'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
        register_rest_route('grwoo/v1', '/verifyUser', array(
            array(
                'methods'               =>  'POST',
                'callback'              =>  array($this, 'verify_user'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
        register_rest_route('grwoo/v1', '/verifyReviewEnabled', array(
            array(
                'methods'               =>  'POST',
                'callback'              =>  array($this, 'verify_review_enabled'),
                'permission_callback'   =>  array($this, 'check_api_permission'),
                'args'                  =>  array()
            )
        ));
    }

    public function getversion($request)
    {
        try {
            $version = '';
            if (class_exists('GR_Connect')) {
                $version = GR_Connect::$_plugin_version;
            }

            $data = array('error' => 0, 'plugin_version' => $version);
        } catch (Exception $e) {
            $data['error'] = 1;
            $data['msg'] = $e->getMessage();
        }
        return new WP_REST_Response($data, 200);
    }

    public function check_api_permission($request)
    {
        if (strpos($request->get_header('user_agent'), 'Appsmav') === false) {
            return false;
        } else {
            $payload = get_option('grconnect_payload', 0);
            $post_payload = sanitize_text_field($_POST['payload']);

            if (empty($_POST['payload']) || $payload != $post_payload) {
                return false;
            }
        }
        return true;
    }

    public function getuserroles($request)
    {
        try
        {
            global $wp_roles;

            $user_roles = $wp_roles->get_names();
            $data = array(
                'error' => 0,
                'user_roles' => !empty($user_roles) ? $user_roles : array()
            );
        }
        catch(Exception $e)
        {
            $data['error'] = 1;
            $data['msg']   = "Something went wrong";
        }
        return new WP_REST_Response($data, 200);
    }

    public function set_settings($request)
    {
        $data   =   array('error' => 0);
        $data['review_enabled'] = (get_option('woocommerce_enable_reviews', 0) === 'yes') ? 'yes' : 'no';

        try
        {
            if(empty($_POST['data']))
                throw new Exception('No config to set');

            if(empty($_POST['data']) || !is_array($_POST['data']))
                throw new Exception('Invalid config to set');

            $config         =	$_POST['data'];
            $app_config     =   gr_get_app_config();

            if(!empty($app_config) && is_array($app_config))
                $config     =   array_merge($app_config, $config);

            $config['date_updated'] =   time();

            if(gr_set_app_config($config) == FALSE)
                throw new Exception(__('Config file is not created'));

            //$data['config'] =   $config;
            $data['msg']    =   __('Settings updated successfully');
        }
        catch(Exception $e)
        {
            $data['error']  =   1;
            $data['msg']    =   $e->getMessage();
        }

        $data['plugin_version'] = GR_Connect::$_plugin_version;

        return new WP_REST_Response($data, 200);
    }
	
	

    public function get_page($request)
    {
        $data = array('error' => 0);

        try
        {
            if (empty($_POST['id'])) {
                throw new Exception('Invalid Page');
            }

            $id_post = sanitize_text_field($_POST['id']);
            if (!get_post_status($id_post)) {
                throw new Exception('Invalid Page');
            }

            $page = get_post($id_post);
            if(is_wp_error($page)) {
                throw new Exception('cannot_update_page'. $page->get_error_message());
            }

            $data['error']	= 0;
            $data['id'] 	= $page->ID;
            $data['url'] 	= get_permalink($id);
            $data['is_embed_landing_url'] = get_post_meta(get_the_ID(), 'is_embed_landing_url');
            $data['msg']	= 'Success';
        }
        catch(Exception $e)
        {
            $data['error']          =   1;
            $data['error_message']  =   $e->getMessage();
        }

        return new WP_REST_Response($data, 200);
    }

    public function add_page($request)
    {
        $data   =   array('error' => 0);

        try
        {
            if (empty($_POST['title'])) {
                throw new Exception('Invalid Title');
            }

            if (empty($_POST['content'])) {
                throw new Exception('Invalid Content');
            }

            $new_page = array(
                'post_title'   => sanitize_text_field($_POST['title']),
                'post_content' => sanitize_text_field($_POST['content']),
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'meta_input'   => array(
                    'is_embed_landing_url' => 1
                )
            );

            $id = wp_insert_post( $new_page, $wp_error = false );

            if(is_wp_error($id)) {
                throw new Exception('cannot_create_page'. $id->get_error_message());
            }

            $data['error'] = 0;
            $data['id']    = $id;
            $data['url']   = get_permalink($id);
            $data['msg']   = 'Success';
        }
        catch(Exception $e)
        {
            $data['error']         = 1;
            $data['error_message'] = $e->getMessage();
        }

        return new WP_REST_Response($data, 200);
    }

    public function edit_page($request)
    {
        $data = array('error' => 0);

        try
        {
            if (isset($_POST['title']) && empty($_POST['title']) && !isset($_POST['publish'])) {
                throw new Exception('Invalid Title');
            }

            if (empty($_POST['id'])) {
                throw new Exception('Invalid Page');
            }

            $params['ID'] = sanitize_text_field($_POST['id']);
            if (!get_post_status($params['ID'])) {
                throw new Exception('Invalid Page');
            }

            if (isset($_POST['publish']))
            {
                $publish_status = sanitize_text_field($_POST['publish']);
                $params['post_status'] = ($publish_status == 1) ? 'publish' : 'draft';
                update_post_meta($params['ID'], 'is_embed_landing_url', $publish_status);
            }
            else
            {
                $params['post_title'] = sanitize_text_field($_POST['title']);
            }

            $id = wp_update_post( $params, $wp_error = true );

            if(is_wp_error($id))
                throw new Exception('cannot_update_page'. $id->get_error_message());

            $page_info = get_post($id);

            $data['error'] = 0;
            $data['id']    = $page_info->ID;
            $data['title'] = $page_info->post_title;
            $data['url']   = get_permalink($page_info->ID);
            $data['msg']   = 'Success';
        }
        catch(Exception $e)
        {
            $data['error']         = 1;
            $data['error_message'] = $e->getMessage();
        }

        return new WP_REST_Response($data, 200);
    }

    public function delete_page($request)
    {
        $data   =   array('error' => 0);

        try
        {
            if (empty($_POST['id'])) {
                throw new Exception('Invalid Page');
            }

            $id_page = sanitize_text_field($_POST['id']);
            if (!get_post_status($id_page)) {
                throw new Exception('Invalid Page');
            }

            if(!wp_delete_post($id_page, true)) {
                throw new Exception('cannot_delete_page');
            }

            $data['error'] = 0;
            $data['msg']   = 'Success';
        }
        catch(Exception $e)
        {
            $data['error']         = 1;
            $data['error_message'] = $e->getMessage();
        }

        return new WP_REST_Response($data, 200);
    }

    public function verify_user($request)
    {
        $data['error'] = 1;
        $data['msg']   = 'No User Exist';

        try
        {
            if (empty($_POST['verify_user'])) {
                throw new Exception('Invalid Email');
            }

            if (class_exists('GR_Connect')) {
                $data['plugin_version'] = GR_Connect::$_plugin_version;
            }

            $email = sanitize_email( $_POST['verify_user'] );
            $user = get_user_by('email', $email);

            if (!empty($user))
            {
                $data['error'] = 0;
                $data['msg'] = 'User Exist';
                $data['name'] = $user->first_name . ' ' . $user->last_name;
                $data['id'] = $user->ID;
            }

        }
        catch(Exception $e)
        {
            $data['error']         = 1;
            $data['error_message'] = $e->getMessage();
        }

        return new WP_REST_Response($data, 200);
    }

    public function verify_review_enabled($request)
    {
        try
        {
            $data['error'] = 0;
            $data['msg']   = get_option('woocommerce_enable_reviews', 'no');
            if (class_exists('GR_Connect')) {
                $data['plugin_version'] = GR_Connect::$_plugin_version;
            }
        }
        catch(Exception $e) {
            $data['error'] = 1;
            $data['msg']   = 'Invalid';
        }

        return new WP_REST_Response($data, 200);
    }

}
