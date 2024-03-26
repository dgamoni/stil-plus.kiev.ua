<?php
/**
 *
 */

class IrishMissW_HotUpdates_Widget extends WP_Widget {
    
	/**
	 *
	 */
    function IrishMissW_HotUpdates_Widget() {
		$widget_ops = array( 'classname' => 'miss_hot_updates_widget', 'description' => __( 'Widget display 3 tabs with popular, recent posts and comments.', MISS_ADMIN_TEXTDOMAIN ) );
		$control_ops = array( 'width' => 250, 'height' => 200 );
		$this->WP_Widget( 'hotupdates', sprintf( __( '%1$s - Popular, Recent Post and Recent Comments', MISS_ADMIN_TEXTDOMAIN ), THEME_NAME ), $widget_ops, $control_ops );
    }

	/**
	 *
	 */
    function widget($args, $instance) {
		global $wpdb, $irish_framework_params;
		$prefix = MISS_PREFIX;
		
		extract( $args );
		$out = '';
		if ( !$popular_number = (int) $instance['popular_number'] )
			$popular_number = 3;
		else if ( $popular_number < 1 )
			$popular_number = 1;
		else if ( $popular_number > 15 )
			$popular_number = 15;
			
		if ( !$recent_number = (int) $instance['recent_number'] )
			$recent_number = 3;
		else if ( $recent_number < 1 )
			$recent_number = 1;
		else if ( $recent_number > 15 )
			$recent_number = 15;
			
		if ( !$comments_number = (int) $instance['comments_number'] )
			$comments_number = 3;
		else if ( $comments_number < 1 )
			$comments_number = 1;
		else if ( $comments_number > 15 )
			$comments_number = 15;
			
		$datastore = Array(
			'popular' => Array(
				'title' => __( 'Popular', MISS_TEXTDOMAIN ),
				'data' => Array()
			),
			'recent' => Array(
				'title' => __( 'Recent', MISS_TEXTDOMAIN ),
				'data' => Array()
			),
			'comments' => Array(
				'icon' => 'fa-icon-comment',
				'data' => Array()
			)
		);
		echo $before_widget;
		
		$count = ( !empty( $count ) ) ? trim( $count ) : '3';
		$disable_thumb = $instance['disable_thumb'] ? '1' : '0';
		$popular_query = new WP_Query(array(
			'showposts' => $popular_number,
			'nopaging' => 0,
			'orderby'=> 'comment_count',
			'post_status' => 'publish',
			'category__not_in' => array( miss_exclude_category_string( $minus = false )),
			'ignore_sticky_posts' => 1
		));
		$i = 0;
		while ( $popular_query->have_posts() ) {
			$popular_query->the_post();
			$i++;
			if( !$disable_thumb ) {
				$widget_thumb_img = $irish_framework_params->layout['big_sidebar_images']['small_post_list'];
				$datastore['popular']['data'][$i]['image'] = miss_get_post_image(array(
						'width' => $widget_thumb_img[0],
						'height' => $widget_thumb_img[1],
						'img_class' => 'image',
						'preload' => false,
						'placeholder' => true,
						'echo' => false,
						'wp_resize' => ( miss_get_setting( 'image_resize_type' ) == 'wordpress' ? true : false )
					));
			} else {
				$widget_thumb_img = array('', '' );
			}
			$datastore['popular']['data'][$i]['url'] = esc_url( get_permalink() );
			$datastore['popular']['data'][$i]['title'] = get_the_title( );
			$datastore['popular']['data'][$i]['content'] = miss_excerpt( get_the_excerpt(), 40, THEME_ELLIPSIS );
		}



		$recent_query = new WP_Query(array(
			'showposts' => $recent_number,
			'nopaging' => 0,
			'orderby'=> 'post_date',
			'post_status' => 'publish',
			'category__not_in' => array( miss_exclude_category_string( $minus = false )),
			'ignore_sticky_posts' => 1
		));
		$i = 0;
		while ( $recent_query->have_posts() ) {
			$recent_query->the_post();
			$i++;
			if( !$disable_thumb ) {
				$widget_thumb_img = $irish_framework_params->layout['big_sidebar_images']['small_post_list'];
				$datastore['recent']['data'][$i]['image'] = miss_get_post_image(array(
						'width' => $widget_thumb_img[0],
						'height' => $widget_thumb_img[1],
						'img_class' => 'image',
						'preload' => false,
						'placeholder' => true,
						'echo' => false,
						'wp_resize' => ( miss_get_setting( 'image_resize_type' ) == 'wordpress' ? true : false )
					));
			} else {
				$widget_thumb_img = array('', '' );
			}
			$datastore['recent']['data'][$i]['url'] = esc_url( get_permalink() );
			$datastore['recent']['data'][$i]['title'] = get_the_title();
			$datastore['recent']['data'][$i]['content'] = miss_excerpt( get_the_excerpt(), 40, THEME_ELLIPSIS );
			$datastore['recent']['data'][$i]['d'] = get_the_date('d');
			$datastore['recent']['data'][$i]['M'] = get_the_date('M');
		}
		$comments = get_comments(array('number' => $comments_number, 'status' => 'approve' ));
		foreach( $comments as $comment ) {
			$i++;
			$datastore['comments']['data'][$i] = Array(
				'content' => $comment->comment_content,
				'post_id' => $comment->comment_post_ID,
				'url' => get_permalink( $comment->comment_post_ID ),
				'title' => get_the_title( $comment->comment_post_ID ),
			);
		}
		$out .= '<ul class="hot_updates_tabs">';
		$i = 0;
		foreach( $datastore as $key => $items ) {
			$class = ($i == 0) ? ' current' : '';
			//			print_r($items);
			$out .= '<li>';
			$out .= '<a class="' . $class . '" data-target="hotupdates_' . $key . '">';
			$out .= ( isset( $items['icon'] ) ) ? '<i class="' . $items['icon'] . '"></i> ' : '';
			$out .= ( isset( $items['title'] ) ) ? $items['title'] : '';
			$out .= '</a>';
			$out .= '</li>';
			$i++;
		}
		$out .= '<div class="clearboth"></div>';
		$out .= '</ul>';
		$out .= '<div class="hot_updates">';
		$out .= '<div class="wrap">';
		foreach( $datastore as $key => $items ) {
			$out .= '<ul class="post_list small_post_list tabbed hotupdates_' . $key . '">';
			foreach( $items['data'] as $id => $item ) {
				if ( isset($item['content']) && !empty($item['content']) ) {
					$out .= '<li class="post_list_module">';
					$out .= ( isset( $item['image'] ) && !empty( $item['image'] ) ) ? $item['image'] : '';
					$out .= ( isset( $item['title'] ) && !empty( $item['title'] ) ) ? '<h4 class="post_title"><a rel="bookmark" href="' . esc_url( $item['url'] ) . '" title="' . esc_attr( $item['title'] ) . '">' . $item['title'] . '</a></h4>' : '';
					$out .= '<div class="post_content">';
					$out .= ( isset( $item['content'] ) && !empty( $item['content'] ) ) ? $item['content'] : '';
					$out .= '</div>';
					$out .= '<div class="clearboth"></div>';
					$out .= '</li>';
				}
			}
			$out .= '</ul>';
		}
		$out .= '</div><!-- /.wrap -->';
		$out .= '</div><!-- /.hot_updates -->';
		echo $out;
		echo $after_widget;
    }

	/**
	 *
	 */
    function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['popular_number'] = (int) $new_instance['popular_number'];
		$instance['recent_number'] = (int) $new_instance['recent_number'];
		$instance['comments_number'] = (int) $new_instance['comments_number'];
		$instance['disable_thumb'] = !empty($new_instance['disable_thumb']) ? 1 : 0;
        return $instance;
    }

	/**
	 *
	 */
    function form($instance) {
		$disable_thumb = isset( $instance['disable_thumb'] ) ? (bool) $instance['disable_thumb'] : false;
		if ( !isset($instance['popular_number']) || !$popular_number = (int) $instance['popular_number'] )
			$popular_number = 3;

		if ( !isset($instance['recent_number']) || !$recent_number = (int) $instance['recent_number'] )
			$recent_number = 3;

		if ( !isset($instance['comments_number']) || !$comments_number = (int) $instance['comments_number'] )
			$comments_number = 3;
		?>

		<p><label for="<?php echo $this->get_field_id('popular_number'); ?>"><?php _e( "Enter the number of popular posts:", MISS_ADMIN_TEXTDOMAIN ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('popular_number'); ?>" name="<?php echo $this->get_field_name('popular_number'); ?>" type="text" value="<?php echo $popular_number; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('recent_number'); ?>"><?php _e( "Enter the number of recent posts:", MISS_ADMIN_TEXTDOMAIN ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('recent_number'); ?>" name="<?php echo $this->get_field_name('recent_number'); ?>" type="text" value="<?php echo $recent_number; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('comments_number'); ?>"><?php _e( "Enter the number of comments:", MISS_ADMIN_TEXTDOMAIN ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('comments_number'); ?>" name="<?php echo $this->get_field_name('comments_number'); ?>" type="text" value="<?php echo $comments_number; ?>" /></p>
		
		<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('disable_thumb'); ?>" name="<?php echo $this->get_field_name('disable_thumb'); ?>"<?php checked( $disable_thumb ); ?> />
		<label for="<?php echo $this->get_field_id('disable_thumb'); ?>"><?php _e( 'Disable Post Thumbnail', MISS_ADMIN_TEXTDOMAIN ); ?></label></p>

        <?php
    }

}

?>
