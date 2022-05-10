<?php
 
/**
Template Name: page-template leht
 */

get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
	<?php the_content() ?>
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
 
get_footer();
 
?>