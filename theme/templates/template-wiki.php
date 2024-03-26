<?php 
/**
 * Template Name: Wiki
 *
 * @package IrishMiss
 * @package Startup
 */
global $post, $page_exclusions;
get_header(); ?>
<section class="wikiPage">
<div class="container">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			/*
			 * List subpages even if on a subpage 
			 */
			if( $post->post_parent ) {
				$children = wp_list_pages( 'sort_column=post_title&sort_column=post_title&exclude=$page_exclusions&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1&link_after=<span></span>' );
			} else {
				$children = wp_list_pages( 'sort_column=post_title&sort_column=post_title&exclude=$page_exclusions&title_li=&child_of=' . $post->ID . '&echo=0&depth=1&link_after=<span></span>' );
			}
			if ( $children ) : ?>
			<div class="row-fluid">
				<div class="span9">
					<div class="single_module">
						<div class="single_content">
							<div class="page_content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) ); ?>
								<?php edit_post_link( __( 'Edit', MISS_TEXTDOMAIN ), '<div class="edit_link">', '</div>' ); ?>
							</div><!-- /.post_excerpt-->
						</div><!-- /.single_content-->
					</div><!-- /.single_module-->
				</div>
				<div class="span3 sidebar featured_tabs_frame">
					<div class="widget">
						<div class="widget_categories">
							<ul class="featured_tabs"><?php echo $children; ?></ul>
						</div>
					</div>
				</div>
			</div><!-- .featured_tabs_container -->
			<div class="clearboth"></div>
			<?php endif; ?>
	</div><!-- #post-## -->
<?php endwhile; ?>
</div><!-- #container -->
</section>
<?php get_footer(); ?>