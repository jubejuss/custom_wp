<?php
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
        <article class="post">
<?php if ( has_post_thumbnail() ) { ?>
    <div class="small-thumbnail">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
    </div>
<?php } ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<p class="post-meta"><?php the_time( 'j. F Y' ); ?> | <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
			| <?php
				$categories = get_the_category();
				$comma      = ', ';
				$output     = '';
				
				if ( $categories ) {
					foreach ( $categories as $category ) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
					}
					echo trim( $output, $comma );
				} ?>
            </p>
			<?php /* the_post_thumbnail();  liikus single PHP faili */ ?>
            <p>
				<?php echo get_the_excerpt() ?>
                <a href="<?php the_permalink() ?>">Read more &raquo</a>
            </p>
        </article>
	
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
/* otsib sidebar.php sisu mis on default wordpressis - kui vaja ainult ühte sidebari siis aitab sellest ka / näidatakse esilehel */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<ul id="sidebar-widgets">
	<?php get_sidebar(); ?>
	</ul>
	<?php endif; ?>
<?php
/* laeb footeri */
get_footer();
?>