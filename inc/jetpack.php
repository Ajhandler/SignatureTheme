<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Signature
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function signature_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'signature_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function signature_jetpack_setup
add_action( 'after_setup_theme', 'signature_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function signature_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function signature_infinite_scroll_render
