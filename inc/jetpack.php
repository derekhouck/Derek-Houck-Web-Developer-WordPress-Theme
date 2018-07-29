<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Derek Houck Web Design
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function derek_houck_web_design_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'derek_houck_web_design_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function derek_houck_web_design_jetpack_setup
add_action( 'after_setup_theme', 'derek_houck_web_design_jetpack_setup' );

function derek_houck_web_design_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function derek_houck_web_design_infinite_scroll_render