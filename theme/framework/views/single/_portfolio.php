<?php
    global $tagline;
?>
<div class="page-wrap clearfix">
<div id="main">
	<div id="page-tagline">
		<div class="posts-nav">
			<!-- <?php  previous_post_link('<div class="works-next">%link</div>', 'Next in category &rarr;'); ?> -->
			<!-- <?php next_post_link('<div class="works-prev">%link</div>', '&larr; Prev in category'); ?> -->
		</div>
	</div>
	<div id="l1" class="clearfix">
	<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="portfolio-item clearfix">
				<div class="work-detail-thumb">
				<?php  if( get_post_meta( get_the_ID(), 'app_embed', true ) == "" ){ ?>
				
				<div id="work-slider" class="flexslider2">
					<?php
					?>
	    			<ul class="slides has_preview">
				<?php  global $wpdb, $post;
					$slides = get_post_meta( get_the_ID( ), 'slideshow', false );
					$slides = $slides[0];
					//print_r($slides);
					$work_image = "";
				    $meta = get_post_meta( get_the_ID( ), 'app_screenshot', false );
				    if ( !is_array( $meta ) )
				    	$meta = ( array ) $meta;
				    if ( count($slides) > 0 ) {
				    	foreach ( $slides as $key => $slide ) {
				    		if (!empty($slide['slider_url']) && $key != 'slider_keys') {
				    			// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
				    			$work_image .= '<li><a href="' . $slide['slider_url'] . '" class="prettyPhoto" title="' . get_the_title() . '"><img src="' . $slide['slider_url'] . '" alt="' . get_the_title() . '" title="' . __("Enlarge", MISS_TEXTDOMAIN) . '" class="image-resize w" /></a></li>';
				    		}
				    	}
				    }
				    if ( empty( $work_image ) ) {
				    	$img = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' );
						print '<li><a class="prettyPhoto" href="' . $img[0] . '" title="' . get_the_title() . '">';
						print '<img src="' . $img[0] . '" alt="' . get_the_title() . '" title="' . __("Enlarge", MISS_TEXTDOMAIN) . '" class="image-resize w" />';
						//the_post_thumbnail('work-detail');
						print "</a></li>";
				    } else {
					    print $work_image;
					    // print "<li>";
					    // the_post_thumbnail('work-detail');
					    // print "</li>";
				    }
				    ?>
			    	</ul>
			    </div>
			    
			    <?php  } else { ?>
			    
			    <?php
		        $tag = "iframe";
			    if (get_post_meta( get_the_ID(), 'app_source', true ) == 'vimeo') {  
			        echo '<'.$tag.' src="http://player.vimeo.com/video/'.get_post_meta( get_the_ID(), 'app_embed', true ).'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"  frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';  
			    }  
			    else if (get_post_meta( get_the_ID(), 'app_source', true ) == 'youtube') {  
			        echo '<'.$tag.' src="http://www.youtube.com/embed/'.get_post_meta( get_the_ID(), 'app_embed', true ).'?rel=0&showinfo=0&modestbranding=1&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>';  
			    }  
			    else {  
			        echo get_post_meta( get_the_ID(), 'app_embed', true ); 
			    }  
			    ?>
			    <?php  } ?>
				</div>
				<div class="work-detail-description">
					<?php if (get_post_meta( get_the_ID(), 'app_work_caption', true)) : ?>
					<h3>
						<?php  print get_post_meta( get_the_ID(), 'app_work_caption', true); ?>
					</h3>
					<?php endif; ?>
					<?php if( get_post_meta( get_the_ID(), '_date', true ) != "") : ?>
						<?php _e('Date', 'framework'); ?>: <?php echo get_post_meta( get_the_ID(), '_link', true ); ?>
					<?php endif; ?>

					<!-- Featured Video -->
					<?php if( get_post_meta( get_the_ID(), '_featured_video', true ) != "") : ?>
						<?php _e('Featured Video', 'framework'); ?> <?php echo get_post_meta( get_the_ID(), '_featured_video', true ); ?>
					<?php endif; ?>

					<?php $_about = get_post_meta( get_the_ID(), '_about', true ); ?>
					<?php if( !empty ( $_about ) ) : ?>
					<!-- About -->
					<div class="about">
						<h2><?php _e('About Project', MISS_TEXTDOMAIN); ?></h2>
						<?php echo do_shortcode( $_about ); ?>
					</div>
					<?php endif; ?>

					<?php $_overview = get_post_meta( get_the_ID(), '_project_overview', true ); ?>
					<?php if( !empty ( $_overview ) ) : ?>
					<!-- Overview -->
					<div class="overview">
						<h2><?php _e('Project Overview', MISS_TEXTDOMAIN); ?></h2>
						<?php echo do_shortcode( $_overview ); ?>
					</div>
					<?php endif; ?>


					<?php if( get_post_meta( get_the_ID(), '_display_terms', true ) == "true") : ?>
					<!-- Categories -->
					<div class="taxonomy">
					<h2><?php _e('Categories', MISS_TEXTDOMAIN); ?></h2>
					<?php
						$taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_category', '', ', ', '') );
						echo $taxonomy;
					?></div>
					<?php endif; ?>

					<?php if( get_post_meta( get_the_ID(), '_link', true ) != "") { ?>
					<a class="more" href="<?php echo get_post_meta( get_the_ID(), '_link', true ); ?>" target="_blank" class="button light"><?php  _e('Visit Site', MISS_TEXTDOMAIN); ?></a><?php  } ?>
				</div>
	</div> <!-- /.portfolio-item -->
	<div class="post entry clearfix">
		<?php the_content(); ?>
	</div>	
	<?php miss_after_post(); ?>
	<?php  endwhile; endif; ?>
	</div>
</div>
	<?php miss_after_main(); ?>
</div>
<?php miss_after_page_content(); ?>

