<?php
if ( have_posts() ) while ( have_posts() ) : the_post();
  $_page_content = get_the_content();
  $out = '';
?>
<!-- Content Area -->
  <div class="single_module <?php echo get_post_type(); ?>">
    <div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="single_content <?php echo get_post_type(); ?>">
        <?php miss_before_post(); ?>
        <div class="page_content">
          <?php the_content(); ?>

          <?php
          //[slide slide_type="embedded"]<iframe src="http://player.vimeo.com/video/56477894?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="300" height="169" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>[/slide]

            $slides = get_post_meta( get_the_ID(), 'slideshow' ) ? get_post_meta( get_the_ID(), 'slideshow' ) : false;
            if ( $slides && is_array( $slides ) && count( $slides ) > 0 ) {
              $out .= '[slider]';
              unset( $slides[0]['#'] );
              unset( $slides[0]['slider_keys'] );
              
              foreach( $slides[0] as $slide_key => $slide ) {
                  if ( $slide['source'] == 'default' ) {
                    $out .= '[slide slide_type="image"]' . $slide['slider_url'] . "[/slide]\n";
                  } else if ( $slide['source'] == 'youtube' ) {
                    $out .= '[slide slide_type="embedded"]<iframe class="video" src="' . $slide['slider_url'] . '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="300" height="169" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>' . "[/slide]\n";
                  } else if ( $slide['source'] == 'vimeo' ) {
                    $atts = 'title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff';
                    if ( isset($slide['autoplay']) && $slide['autoplay'] == 1 ) {
                      $atts .= '&amp;autoplay=1';
                    }

                    $slide['slider_url'] = str_replace( array('http://vimeo.com/', 'https://vimeo.com/'), array('http://player.vimeo.com/video/', 'http://player.vimeo.com/video/'), $slide['slider_url'] );
                    $out .= '[slide slide_type="embedded"]<iframe class="video" src="' . $slide['slider_url'] . '?' . $atts . '" width="300" height="169" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>' . "[/slide]\n";
                  }
              }
              $out .= '[/slider]';
            }
            echo do_shortcode( $out );


            $images = new miss_gallery_attachments( $limit = 999, $order = 'ASC', $post_id = get_the_ID() );
            if ( count( $images->get_media() ) > 1 ) {
              echo '<div class="row-fluid media-images ' . get_post_type() . '"><div class="span12">';
              foreach ( $images->get_media() as $image ) {
                $double_resolution = (miss_get_setting('hires') == 'enabled') ? true : false;
                if ( $double_resolution == true ) {
                  $width = 340;
                  $height = 244;
                } else {
                  $width = 170;
                  $height = 122;
                }
                $thumb = miss_wp_image( $image->guid, $width, $height );
                echo '<div class="single_post_image has_preview small-single-image"><a href="' . $image->guid . '"><img src="' . $thumb . '" /></a>
                <div class="preview_info_wrap"><a rel="prettyPhoto" href="' . $image->guid . '" title="" class="one_column_blog"></a><a class="controls img single" href="' . $image->guid . '" rel="prettyPhoto[portfolio]"><i class="im-icon-zoom-in"></i></a> <!-- /.controls --></div>
                </div>';
              }
              echo '</div></div>';
            }
          ?>

          <div class="clearboth"></div>
          <?php wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) ); ?>
          <?php edit_post_link( __( 'Edit entry', MISS_TEXTDOMAIN ), '<div class="edit_link">', '</div>' ); ?>
          </div><!-- .entry -->
         <div class="clearboth"></div>
       <?php miss_after_entry(); ?>

      </div><!-- .single_content -->
    </div><!-- #page-## -->
  </div><!-- .single_module -->
<!-- / Content Area -->
  <?php miss_after_post(); ?>
<?php endwhile; ?>