<?php
/**
 * Cost of Goods for WooCommerce - Tools Section Settings
 *
 * @version 1.4.0
 * @since   1.4.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Cost_of_Goods_Settings_Tools' ) ) :

class Alg_WC_Cost_of_Goods_Settings_Tools extends Alg_WC_Cost_of_Goods_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.4.0
	 * @since   1.4.0
	 */
	function __construct() {
		$this->id   = 'tools';
		$this->desc = __( 'Tools', 'cost-of-goods-for-woocommerce' );
		parent::__construct();
	}

	/**
	 * get_settings.
	 *
	 * @version 1.4.0
	 * @since   1.4.0
	 * @todo    [dev] better descriptions
	 */
	function get_settings() {
		return array(
			array(
				'title'    => __( 'Bulk Edit Costs Tool', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'desc'     => sprintf( __( 'Bulk Edit tool is in %s.', 'cost-of-goods-for-woocommerce' ),
					'<a href="' . admin_url( 'tools.php?page=bulk-edit-costs' ) . '">' . __( 'Tools > Bulk Edit Costs', 'cost-of-goods-for-woocommerce' ) . '</a>' ),
				'id'       => 'alg_wc_cog_bulk_edit_tool_options',
			),
			array(
				'title'    => __( 'Search products', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'select',
				'class'    => 'chosen_select',
				'id'       => 'alg_wc_cog_bulk_edit_tool_search_method',
				'default'  => 'title',
				'options'  => array(
					'title' => __( 'Search by title', 'cost-of-goods-for-woocommerce' ),
					'all'   => __( 'Search all', 'cost-of-goods-for-woocommerce' ),
				),
			),
			array(
				'title'    => __( 'Edit prices', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Enable', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_cog_bulk_edit_tool_edit_prices',
				'default'  => 'no',
			),
			array(
				'title'    => __( 'Manage stock', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Enable', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_cog_bulk_edit_tool_manage_stock',
				'default'  => 'no',
			),
			array(
				'title'    => __( 'Stock update method', 'cost-of-goods-for-woocommerce' ),
				'desc_tip' => __( 'Ignored unless "Manage stock" checkbox is enabled above.', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'select',
				'class'    => 'chosen_select',
				'id'       => 'alg_wc_cog_bulk_edit_tool_manage_stock_method',
				'default'  => 'meta',
				'options'  => array(
					'meta' => __( 'Update product meta', 'cost-of-goods-for-woocommerce' ),
					'func' => __( 'Use product functions', 'cost-of-goods-for-woocommerce' ),
				),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_bulk_edit_tool_options',
			),
			array(
				'title'    => __( 'Import Costs Tool', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'desc'     => sprintf( __( 'Import tool is in %s.', 'cost-of-goods-for-woocommerce' ),
					'<a href="' . admin_url( 'tools.php?page=import-costs' ) . '">' . __( 'Tools > Import Costs', 'cost-of-goods-for-woocommerce' ) . '</a>' ),
				'id'       => 'alg_wc_cog_import_tool_options',
			),
			array(
				'title'    => __( 'Key to import from', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'text',
				'id'       => 'alg_wc_cog_tool_key',
				'default'  => '_wc_cog_cost',
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_import_tool_options',
			),
			array(
				'title'    => __( 'Orders Tools', 'cost-of-goods-for-woocommerce' ),
				'type'     => 'title',
				'id'       => 'alg_wc_cog_orders_tools_options',
			),
			array(
				'title'    => __( 'Recalculate orders cost and profit for all orders', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Recalculate', 'cost-of-goods-for-woocommerce' ),
				'desc_tip' => __( 'Set items costs in all orders (overriding previous costs).', 'cost-of-goods-for-woocommerce' ) . ' ' .
					__( 'Enable the checkbox and save changes to run the tool.', 'cost-of-goods-for-woocommerce' ) .
					apply_filters( 'alg_wc_cog_settings', '<br>' . sprintf( 'You will need %s plugin to use this tool.',
						'<a target="_blank" href="https://wpfactory.com/item/cost-of-goods-for-woocommerce/">' .
							'Cost of Goods for WooCommerce Pro' . '</a>' ) ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_cog_recalculate_orders_cost_and_profit_all',
				'default'  => 'no',
				'custom_attributes' => apply_filters( 'alg_wc_cog_settings', array( 'disabled' => 'disabled' ) ),
			),
			array(
				'title'    => __( 'Recalculate orders cost and profit for orders with no costs', 'cost-of-goods-for-woocommerce' ),
				'desc'     => __( 'Recalculate', 'cost-of-goods-for-woocommerce' ),
				'desc_tip' => __( 'Set items costs in orders that do not have costs set.', 'cost-of-goods-for-woocommerce' ) . ' ' .
					__( 'Enable the checkbox and save changes to run the tool.', 'cost-of-goods-for-woocommerce' ) .
					apply_filters( 'alg_wc_cog_settings', '<br>' . sprintf( 'You will need %s plugin to use this tool.',
						'<a target="_blank" href="https://wpfactory.com/item/cost-of-goods-for-woocommerce/">' .
							'Cost of Goods for WooCommerce Pro' . '</a>' ) ),
				'type'     => 'checkbox',
				'id'       => 'alg_wc_cog_recalculate_orders_cost_and_profit_no_costs',
				'default'  => 'no',
				'custom_attributes' => apply_filters( 'alg_wc_cog_settings', array( 'disabled' => 'disabled' ) ),
			),
			array(
				'type'     => 'sectionend',
				'id'       => 'alg_wc_cog_orders_tools_options',
			),
		);
	}

}

endif;

return new Alg_WC_Cost_of_Goods_Settings_Tools();
