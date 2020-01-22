<?php
/**
 * Cost of Goods for WooCommerce - Functions
 *
 * @version 1.4.0
 * @since   1.4.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'alg_wc_cog_get_table_html' ) ) {
	/**
	 * alg_wc_cog_get_table_html.
	 *
	 * @version 1.4.0
	 * @since   1.0.0
	 */
	function alg_wc_cog_get_table_html( $data, $args = array() ) {
		$args = array_merge( array(
			'table_class'        => '',
			'table_style'        => '',
			'row_styles'         => '',
			'table_heading_type' => 'horizontal',
			'columns_classes'    => array(),
			'columns_styles'     => array(),
		), $args );
		$html = '';
		$html .= '<table' . ( '' == $args['table_class']  ? '' : ' class="' . $args['table_class'] . '"' ) .
			( '' == $args['table_style']  ? '' : ' style="' . $args['table_style'] . '"' ) . '>';
		$html .= '<tbody>';
		$row_styles = ( '' == $args['row_styles'] ? '' : ' style="' . $args['row_styles']  . '"' );
		foreach( $data as $row_number => $row ) {
			$html .= '<tr' . $row_styles . '>';
			foreach( $row as $column_number => $value ) {
				$th_or_td     = ( ( 0 === $row_number && 'horizontal' === $args['table_heading_type'] ) || ( 0 === $column_number && 'vertical' === $args['table_heading_type'] ) ?
					'th' : 'td' );
				$column_class = ( isset( $args['columns_classes'][ $column_number ] ) ? ' class="' . $args['columns_classes'][ $column_number ] . '"' : '' );
				$column_style = ( isset( $args['columns_styles'][ $column_number ] )  ? ' style="' . $args['columns_styles'][ $column_number ]  . '"' : '' );
				$html .= '<' . $th_or_td . $column_class . $column_style . '>';
				$html .= $value;
				$html .= '</' . $th_or_td . '>';
			}
			$html .= '</tr>';
		}
		$html .= '</tbody>';
		$html .= '</table>';
		return $html;
	}
}
