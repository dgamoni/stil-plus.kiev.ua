<?php 
/**
 * Template Name: Feature Tour
 *
 * @package IrishMiss
 * @package Startup
 */
global $post, $page_exclusions;
get_header(); ?>
<div class="page-wrap">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<?php
			/*
			 * List subpages even if on a subpage 
			 */
			if( $post->post_parent ) {
				$children = wp_list_pages( 'sort_column=menu_order&exclude=$page_exclusions&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1&link_after=<span></span>' );
			} else {
				$children = wp_list_pages( 'sort_column=menu_order&exclude=$page_exclusions&title_li=&child_of=' . $post->ID . '&echo=0&depth=1&link_after=<span></span>' );
			}
			if ( $children ) : ?>
			<div class="featured_tabs_container">
				<div class="featured_tabs_frame">
					<ul class="featured_tabs"><?php echo $children; ?></ul>
				</div>
				<div class="featured_tabs_content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) ); ?>
					<?php edit_post_link( __( 'Edit', MISS_TEXTDOMAIN ), '<div class="edit_link">', '</div>' ); ?>
				</div>
			</div><!-- .featured_tabs_container -->
			<div class="clearboth"></div>
			<?php endif; ?>
		</div><!-- .entry -->
	</div><!-- #post-## -->
<?php endwhile; ?>
		<div class="clearboth"></div>
</div><!-- #main -->
<?php get_footer(); ?>