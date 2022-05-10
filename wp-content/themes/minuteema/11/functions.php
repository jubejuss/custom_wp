<?php
 
 /* custom_theme_assets  */
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
  /* registreerida menyy  */
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

 /* registreerida wp-list-pages pages.php s  alammenüü jaoks */

function get_the_top_ancestor_id() {
	global $post;
	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	} else {
		return $post->ID;
	}
}

/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 100, 100, true );
	add_image_size( 'single-post-image', 250, 250, true );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
