<?php
/**
 * Cost of Goods for WooCommerce - Admin Columns and Meta Boxes Class
 *
 * @version 1.4.0
 * @since   1.1.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Cost_of_Goods_Admin' ) ) :

class Alg_WC_Cost_of_Goods_Admin {

	/**
	 * Constructor.
	 *
	 * @version 1.4.0
	 * @since   1.1.0
	 */
	function __construct() {
		// Orders columns
		if ( 'yes' === get_option( 'alg_wc_cog_orders_columns_profit', 'yes' ) || 'yes' === get_option( 'alg_wc_cog_orders_columns_cost', 'no' ) ) {
			add_filter( 'manage_edit-shop_order_columns',               array( $this, 'add_order_columns' ), PHP_INT_MAX );
			add_action( 'manage_shop_order_posts_custom_column',        array( $this, 'render_order_columns' ), PHP_INT_MAX );
		}
		// Order meta box
		if ( 'yes' === get_option( 'alg_wc_cog_orders_meta_box', 'yes' ) ) {
			add_action( 'add_meta_boxes',                               array( $this, 'add_order_meta_box' ) );
		}
		// Products columns
		if ( 'yes' === get_option( 'alg_wc_cog_products_columns_profit', 'no' ) || 'yes' === get_option( 'alg_wc_cog_products_columns_cost', 'no' ) ) {
			add_filter( 'manage_edit-product_columns',                  array( $this, 'add_product_columns' ), PHP_INT_MAX );
			add_action( 'manage_product_posts_custom_column',           array( $this, 'render_product_columns' ), PHP_INT_MAX );
		}
	}

	/**
	 * add_order_meta_box.
	 *
	 * @version 1.4.0
	 * @since   1.4.0
	 */
	function add_order_meta_box() {
		add_meta_box( 'alg-wc-cog', __( 'Cost of Goods', 'cost-of-goods-for-woocommerce' ), array( $this, 'render_order_meta_box' ), 'shop_order', 'side' );
	}

	/**
	 * render_order_meta_box.
	 *
	 * @version 1.4.0
	 * @since   1.4.0
	 * @todo    [dev] (maybe) order total
	 * @todo    [dev] (maybe) profit percent
	 */
	function render_order_meta_box( $post ) {
		$order_id   = get_the_ID();
		$cost       = get_post_meta( $order_id, '_alg_wc_cog_order_' . 'cost',   true );
		$profit     = get_post_meta( $order_id, '_alg_wc_cog_order_' . 'profit', true );
		$table_data = array(
			array( __( 'Cost', 'cost-of-goods-for-woocommerce' ),   ( '' !== $cost   ? wc_price( $cost )   : '' ) ),
			array( __( 'Profit', 'cost-of-goods-for-woocommerce' ), ( '' !== $profit ? wc_price( $profit ) : '' ) ),
		);
		echo alg_wc_cog_get_table_html( $table_data, array( 'table_heading_type' => 'vertical', 'table_class' => 'widefat' ) );
	}

	/**
	 * add_product_columns.
	 *
	 * @version 1.1.0
	 * @since   1.0.0
	 */
	function add_product_columns( $columns ) {
		$_columns = array();
		foreach ( $columns as $column_key => $column_title ) {
			$_columns[ $column_key ] = $column_title;
			if ( 'price' === $column_key ) {
				if ( 'yes' === get_option( 'alg_wc_cog_products_columns_cost', 'no' ) ) {
					$_columns['cost'] = __( 'Cost', 'cost-of-goods-for-woocommerce' );
				}
				if ( 'yes' === get_option( 'alg_wc_cog_products_columns_profit', 'no' ) ) {
					$_columns['profit'] = __( 'Profit', 'cost-of-goods-for-woocommerce' );
				}
			}
		}
		return $_columns;
	}

	/**
	 * render_product_columns.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function render_product_columns( $column ) {
		if ( 'profit' === $column || 'cost' === $column ) {
			$product_id = get_the_ID();
			echo ( 'cost' === $column ? alg_wc_cog()->core->get_product_cost_html( $product_id ) : alg_wc_cog()->core->get_product_profit_html( $product_id ) );
		}
	}

	/**
	 * add_order_columns.
	 *
	 * @version 1.1.0
	 * @since   1.0.0
	 */
	function add_order_columns( $columns ) {
		if ( 'yes' === get_option( 'alg_wc_cog_orders_columns_cost', 'no' ) ) {
			$columns['cost'] = __( 'Cost', 'cost-of-goods-for-woocommerce' );
		}
		if ( 'yes' === get_option( 'alg_wc_cog_orders_columns_profit', 'yes' ) ) {
			$columns['profit'] = __( 'Profit', 'cost-of-goods-for-woocommerce' );
		}
		return $columns;
	}

	/**
	 * render_order_columns.
	 *
	 * @param   string $column
	 * @version 1.3.1
	 * @since   1.0.0
	 * @todo    [feature] forecasted profit `$value = $line_total * $average_profit_margin`
	 * @todo    [feature] (maybe) `if ( 0 != ( $cost = wc_get_order_item_meta( $item_id, '_alg_wc_cog_item_cost' ) ) || 0 != ( $cost = alg_wc_cog()->core->get_product_cost( $product_id ) ) ) {`
	 * @todo    [feature] (maybe) `if ( $order->get_prices_include_tax() ) { $line_total = $item['line_total'] + $item['line_tax']; }`
	 */
	function render_order_columns( $column ) {
		if ( 'profit' === $column || 'cost' === $column ) {
			$order_status = get_option( 'alg_wc_cog_orders_columns_' . $column . '_order_status', array() );
			if ( ! empty( $order_status ) && ( ! ( $order = wc_get_order() ) || ! $order->has_status( $order_status ) ) ) {
				return;
			}
			$value = get_post_meta( get_the_ID(), '_alg_wc_cog_order_' . $column, true );
			echo ( '' !== $value ? wc_price( $value ) : '' );
		}
	}

}

endif;

return new Alg_WC_Cost_of_Goods_Admin();
