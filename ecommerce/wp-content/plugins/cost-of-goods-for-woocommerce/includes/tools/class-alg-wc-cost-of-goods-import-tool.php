<?php
/**
 * Cost of Goods for WooCommerce - Import Tool Class
 *
 * @version 1.4.0
 * @since   1.1.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Cost_of_Goods_Import_Tool' ) ) :

class Alg_WC_Cost_of_Goods_Import_Tool {

	/**
	 * Constructor.
	 *
	 * @version 1.1.0
	 * @since   1.1.0
	 */
	function __construct() {
		add_action( 'admin_menu', array( $this, 'create_import_tool' ) );
	}

	/**
	 * create_import_tool.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function create_import_tool() {
		add_submenu_page(
			'tools.php',
			__( 'Import Costs', 'cost-of-goods-for-woocommerce' ),
			__( 'Import Costs', 'cost-of-goods-for-woocommerce' ),
			'manage_woocommerce',
			'import-costs',
			array( $this, 'import_tool' )
		);
	}

	/**
	 * import_tool.
	 *
	 * @version 1.4.0
	 * @since   1.0.0
	 * @todo    [dev] use `wc_get_products()`
	 * @todo    [dev] better description here and in settings
	 * @todo    [dev] notice after import
	 * @todo    [feature] add "import from file" option (CSV, XML etc.) (#12169)
	 * @todo    [feature] (maybe) import order items meta
	 */
	function import_tool() {
		$perform_import = ( isset( $_POST['alg_wc_cog_import'] ) );
		$key            = get_option( 'alg_wc_cog_tool_key', '_wc_cog_cost' );
		$table_data     = array();
		$products       = array();
		$table_data[]   = array(
			__( 'Product ID', 'cost-of-goods-for-woocommerce' ),
			__( 'Product Title', 'cost-of-goods-for-woocommerce' ),
			sprintf( __( 'Source %s', 'cost-of-goods-for-woocommerce' ),      '<code>' . $key . '</code>' ),
			sprintf( __( 'Destination %s', 'cost-of-goods-for-woocommerce' ), '<code>' . '_alg_wc_cog_cost' . '</code>' ),
		);
		$args           = array(
			'post_type'      => array( 'product', 'product_variation' ),
			'post_status'    => 'any',
			'posts_per_page' => -1,
			'orderby'        => 'ID',
			'order'          => 'ASC',
			'fields'         => 'ids',
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			foreach ( $loop->posts as $post_id ) {
				$source_cost = get_post_meta( $post_id, $key, true );
				if ( $perform_import ) {
					update_post_meta( $post_id, '_alg_wc_cog_cost', $source_cost );
				}
				$destination_cost = get_post_meta( $post_id, '_alg_wc_cog_cost', true );
				$table_data[] = array( $post_id, get_the_title( $post_id ), $source_cost, $destination_cost );
			}
		}
		$button_form = '<form method="post" action="">' .
				'<input type="submit" name="alg_wc_cog_import" class="button-primary" value="' . __( 'Import', 'cost-of-goods-for-woocommerce' ) . '"' .
					' onclick="return confirm(\'' . __( 'Are you sure?', 'cost-of-goods-for-woocommerce' ) . '\')">' .
			'</form>';
		$html = '<div class="wrap">' .
			'<h1>' . __( 'Costs Import', 'cost-of-goods-for-woocommerce' ) . '</h1>' .
			'<p>' . __( 'Import products costs to "Cost of Goods for WooCommerce" plugin.', 'cost-of-goods-for-woocommerce' ) . ' ' .
				sprintf( __( 'Tool\'s options can be set in %s.', 'cost-of-goods-for-woocommerce' ),
					'<a href="' . admin_url( 'admin.php?page=wc-settings&tab=alg_wc_cost_of_goods' ) . '">' . __( 'plugin settings', 'cost-of-goods-for-woocommerce' ) . '</a>'
				) . '</p>' .
			'<p>' . $button_form . '</p>' .
			'<p>' . alg_wc_cog_get_table_html( $table_data, array( 'table_heading_type' => 'horizontal', 'table_class' => 'widefat striped' ) ) . '</p>' .
		'</div>';
		echo $html;
	}

}

endif;

return new Alg_WC_Cost_of_Goods_Import_Tool();
