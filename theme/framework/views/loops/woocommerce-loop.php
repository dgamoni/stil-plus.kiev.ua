<!-- Content Area -->
  <div class="loop_module products">
    <div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="loop_content products">
        <?php  miss_before_entry(); ?>
        <div class="post_excerpt">
          <?php 
            woocommerce_content();
           ?>
          <div class="clearboth"></div>
            <?php wp_link_pages( array( 'before' => '<div class="page_link">' . __( 'Pages:', MISS_TEXTDOMAIN ), 'after' => '</div>' ) ); ?>
          </div><!-- .entry -->
         <div class="clearboth"></div>
      </div><!-- .loop_content.products -->
    </div><!-- #page-## -->
  </div><!-- .loop_module.products -->
<!-- / Content Area -->
