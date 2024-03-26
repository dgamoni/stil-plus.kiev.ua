<?php
if ( have_posts() ) while ( have_posts() ) : the_post();
  $setings = (miss_get_setting('disable_meta_options')) ? miss_get_setting('disable_meta_options') : array();
  $without_date = ( in_array('date_meta', $setings) ) ? ' without_date' : '';
  $more_clases = $without_date;
?>
<!-- Content Area -->
  <div class="single_module post-type <?php echo get_post_type(); echo $more_clases; ?>">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="single_content <?php echo get_post_type(); ?>">
        <?php miss_before_post( array( 'post_id' => get_the_ID() ) ); ?>
        <?php miss_before_entry(); ?>
        <div class="post_excerpt">
          <?php
          if (miss_get_setting('review') == 'enable') {
            echo the_score($post->ID); 
          }
          ?>

          <?php the_content(); ?>
          <div class="clearboth"></div>
          <?php wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) ); ?>
           <?php 
              $meta_out = '';

              $meta_out .= ( !in_array('categories_meta', $setings) ) ? '[post_terms taxonomy="category" text="' . __( 'Categories: ', MISS_TEXTDOMAIN ) . '"] ' : '';
              $meta_out .= ( !in_array('tags_meta', $setings) ) ? '[post_terms text=' . __( 'Tags:&nbsp;', MISS_TEXTDOMAIN ) . '] ' : '';
              $out ='<div class="post_meta after">' . $meta_out . '</div>';
              echo apply_atomic_shortcode( 'post_meta', $out );
           ?>
          <?php edit_post_link( __( 'Edit entry', MISS_TEXTDOMAIN ), '<div class="edit_link">', '</div>' ); ?>
          </div><!-- .entry -->
         <div class="clearboth"></div>
       <?php miss_after_entry(); ?>
      </div><!-- .single_content -->
    </div><!-- #post-## -->
  </div><!-- .single_module -->
  <?php //comments_template( '', true ); ?>
  <?php miss_after_post(); ?>
<!-- / Content Area -->
  <?php endwhile; ?>
  