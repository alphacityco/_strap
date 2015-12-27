<?php
/**
 * Plugin Name: span
 * Description: Un ejemplo de shortcode
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function span_shortcode( $atts, $content = null ) {
	$span_atts = shortcode_atts( array(
		'id' => '',
		'long' => '',
		'lat' => '',
		'zoom' => '',
		'class' => 'glyphicon glyphicon-map-marker super-indice',
	), $atts );
	//$span_map = '<span id="'. esc_attr( $span_atts['id'] ) .'" class="'.$span_atts['class'] .'"."  data-lat="'. esc_attr( $span_atts['lat'] )'"
	//		        . ' data-long='".esc_attr ( $span_atts['long'] ) ."'.'>';
	$span_map  = '<span id="'.esc_attr($span_atts['id']).'"'.
		     ' class="'.$span_atts['class'].'"'.
	             ' data-lat="'.esc_attr($span_atts['lat']).'"'.
	             ' data-long="'.esc_attr($span_atts['long']).'"'.
	             ' data-zoom="'.esc_attr($span_atts['zoom']).'"';	
	$span_map .= $content;
	$span_map .= '></span>';
	return $span_map;
}
add_shortcode( 'span_map', 'span_shortcode' );
