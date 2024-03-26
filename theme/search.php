<?php
/**
 * Search Template
 *
 * @package IrishMiss
 * @package Startup
 */
global $irish_framework_params;
get_header();

get_search_form();

echo '
<!-- Content Area -->
  <div class="row-fluid">
';
$span_walk = 1;
$row_walk = 1;
$spans_in_row = 2;

if ( have_posts() ) while ( have_posts() ) : the_post();

echo '
  <div class="loop_module search span6">
    <div id="post-' . get_the_ID() . '">
      <div class="loop_content search">
';
        miss_post_image();
        miss_post_title();
echo '
        <div class="post_excerpt">
';
          if (miss_get_setting('review') == 'enable') {
            echo the_score($post->ID); 
          }
         
         the_excerpt();
         miss_read_more_link(get_permalink());
echo '
          <div class="clearboth"></div>
';
          wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) );
          edit_post_link( __( 'Edit entry', MISS_TEXTDOMAIN ), '<div class="edit_link">', '</div>' );
echo '
          </div><!-- .entry -->
         <div class="clearboth"></div>
';
       miss_after_entry();
echo '
      </div><!-- .loop_content.search .span6 -->
    </div><!-- #post-## -->
  </div><!-- .loop_module.search -->
';
	if ( ($spans_in_row * $row_walk) == $span_walk ) {
		echo '</div><!-- /.row-fluid --> <div class="row-fluid">';
	} else {
		echo '';
	}
	if ( ($spans_in_row * $row_walk) == $span_walk ) {
		$row_walk++;
	}
	$span_walk++;
endwhile;
echo '
  </div><!-- .row-fluid -->
<!-- / Content Area -->
';


get_footer();
?>