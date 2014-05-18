<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package loulou
 */

/**
 * Register Socail Menu
 */
add_action( 'init', 'social_register_nav_menus' );

function social_register_nav_menus() {
	register_nav_menu( 'social', __( 'Social', 'loulou' ) );
}

//Shorcode

function google_maps_shortcode( $atts ) {
	return '
		<div class="map-wrapper">
			<div id="map_canvas"></div>
		</div>';
}
add_shortcode( 'google_maps', 'google_maps_shortcode' );