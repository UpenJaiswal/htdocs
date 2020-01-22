<?php
/**
 * Cost of Goods for WooCommerce - General Section Settings
 *
 * @version 1.4.0
 * @since   1.0.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Cost_of_Goods_Settings_General' ) ) :

class Alg_WC_Cost_of_Goods_Settings_General extends Alg_WC_Cost_of_Goods_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		$this->id   = '';
		$this->desc = __( 'General', 'cost-of-goods-for-woocommerce' );
		parent::__construct();
	}

	/**
	 * get_order_statuses.
	 *
	 * @version 1.3.1
	 * @since   1.3.1
	 */
	function get_order_statuses() {
		$order_statuses = array();
		foreach ( wc_get_order_statuses() as $status_id => $status_title ) {
			$order_statuses[ ( 0 === strpos( $status_id, 'wc-' ) ? substr( $status_id, 3 ) : $status_id ) ] = $status_title;
		}
		return $order_statuses;
	}

	/**
	 * get_settings.
	 *
	 * @version 1.4.0
	 * @since   1.0.0
	 */
	function get_settings() {

		$orders_columns_settings = array(
			array(
				'title'    => __( 'Admin Orders List Columns', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'desc'     => __( 'This section lets you add custom columns to WooCommerce admin orders list.', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_columns_options',
			),
			array(
				'title'    => __( 'Order cost', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Add', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_columns_cost',
				'default'  => 'no',
				'type'     => 'checkbox',
			),
			array(
				'desc'     => __( 'Order statuses', 'cost-of-goods-for-woocommerce' ),
				'desc_tip' => __( 'Select order statuses to show cost.', 'cost-of-goods-for-woocommerce' ) . ' ' .
					__( 'Leave empty to show for all orders.', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_columns_cost_order_status',
				'default'  => array(),
				'type'     => 'multiselect',
				'class'    => 'chosen_select',
				'options'  => $this->get_order_statuses(),
			),
			array(
				'title'    => __( 'Order profit', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Add', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_columns_profit',
				'default'  => 'yes',
				'type'     => 'checkbox',
			),
			array(
				'desc'     => __( 'Order statuses', 'cost-of-goods-for-woocommerce' ),
				'desc_tip' => __( 'Select order statuses to show profit.', 'cost-of-goods-for-woocommerce' ) . ' ' .
					__( 'Leave empty to show for all orders.', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_columns_profit_order_status',
				'default'  => array(),
				'type'     => 'multiselect',
				'class'    => 'chosen_select',
				'options'  => $this->get_order_statuses(),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_orders_columns_options',
			),
		);

		$orders_meta_box_settings = array(
			array(
				'title'    => __( 'Admin Order Meta Box', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_cog_orders_meta_box_options',
			),
			array(
				'title'    => __( 'Order meta box', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Add', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_orders_meta_box',
				'default'  => 'yes',
				'type'     => 'checkbox',
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_orders_meta_box_options',
			),
		);

		$products_columns_settings = array(
			array(
				'title'    => __( 'Admin Products List Columns', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'desc'     => __( 'This section lets you add custom columns to WooCommerce admin products list.', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_products_columns_options',
			),
			array(
				'title'    => __( 'Product cost', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Add', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_products_columns_cost',
				'default'  => 'no',
				'type'     => 'checkbox',
			),
			array(
				'title'    => __( 'Product profit', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Add', 'cost-of-goods-for-woocommerce' ),
				'id'       => 'alg_wc_cog_products_columns_profit',
				'default'  => 'no',
				'type'     => 'checkbox',
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_products_columns_options',
			),
		);

		$reports_settings = array(
			array(
				'title'    => __( 'Reports', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_cog_orders_reports_options',
				'desc'     => apply_filters( 'alg_wc_cog_settings', '<em>' . sprintf( 'You will need %s plugin to add the reports to "%s" and "%s".',
						'<a target="_blank" href="https://wpfactory.com/item/cost-of-goods-for-woocommerce/">' .
							'Cost of Goods for WooCommerce Pro' . '</a>',
						__( 'Reports > Orders > Cost of Goods', 'cost-of-goods-for-woocommerce' ),
						__( 'Reports > Stock > Cost of Goods', 'cost-of-goods-for-woocommerce' )
					) . '</em>', 'report' ),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_orders_reports_options',
			),
		);

		return array_merge( $orders_columns_settings, $orders_meta_box_settings, $products_columns_settings, $reports_settings );
	}

}

endif;

return new Alg_WC_Cost_of_Goods_Settings_General();
