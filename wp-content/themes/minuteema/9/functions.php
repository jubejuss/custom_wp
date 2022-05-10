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