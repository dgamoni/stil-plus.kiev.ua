<?php
if( class_exists( 'WPBakeryShortCode_VC_Tab' ) ):

/**
 *
 */
class misscomposerImPosttypelayout {
	/**
	 *
	 */
	public static function im_posttypelayout( $atts, $content = null, $code = null ) {
		$posttypes = array(
			__( 'Posts', MISS_ADMIN_TEXTDOMAIN ) => 'post',
			__( 'News', MISS_ADMIN_TEXTDOMAIN ) => 'news',
			__( 'Portfolio', MISS_ADMIN_TEXTDOMAIN ) => 'portfolio',
			__( 'Staff', MISS_ADMIN_TEXTDOMAIN ) => 'staff',
			__( 'Testimonials', MISS_ADMIN_TEXTDOMAIN ) => 'testimonials',
		);
		$classes = array(
			__( 'Grid', MISS_ADMIN_TEXTDOMAIN ) => 'grid',
			__( 'Grid Carousel', MISS_ADMIN_TEXTDOMAIN ) => 'grid carousel',
			__( 'List', MISS_ADMIN_TEXTDOMAIN ) => 'list',
		);
		$entries = get_categories( 'orderby=name&hide_empty=0' );
		foreach( $entries as $key => $entry ) {
			$categories[$entry->name] = $entry->term_id;
		}

		$entries = get_terms('portfolio_category','orderby=name&hide_empty=0');
		foreach($entries as $key => $entry) {
			$portfolio_categories[$entry->name] = $entry->slug;
		}

		if( $atts == 'generator' ) {
			return array(
				'name' => __( 'Posts/Pages Layout', MISS_ADMIN_TEXTDOMAIN ),
				'base' => 'im_posttypelayout',
				'icon' => 'im-icon-grid-5',
				'category' => __('Theme Short-Codes', MISS_ADMIN_TEXTDOMAIN ),
				'params' => array(
					array(
						'heading' => __( 'Caption <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'Here you can add section title (leave blank to hide).', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'caption',
						'type' => 'textfield',
						'value' => '',
					),
					array(
						'heading' => __( 'Tagline <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'Here you can add section tagline that will appears right from section title.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'tagline',
						'type' => 'textfield',
						'value' => '',
					),
					array(
						'heading' => __('Post types', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __('Select post types to populate items from.', MISS_ADMIN_TEXTDOMAIN),
						'param_name' => 'posttype',
						'type' => 'dropdown',
						'value' => $posttypes,
					),
					array(
						'heading' => __( 'Layout Type', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'Select layout type.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'class',
						'type' => 'dropdown',
						'value' => $classes,
					),
					array(
						'heading' => __( 'Number of Columns', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'Set number of columns in a row.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'column',
						'min' => 1,
						'max' => 4,
						'step' => 1,
						'unit' => __( 'columns', MISS_ADMIN_TEXTDOMAIN ),
						'type' => 'range',
						'dependency' => array(
							'element' => 'class', 
							'value' => array('grid', 'grid carousel')
						),
					),
					array(
						'heading' => __( 'Number of Posts', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'Select the number of posts you wish to have displayed on each page.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'showposts',
						'min' => 1,
						'value' => 5,
						'max' => 40,
						'step' => 1,
						'unit' => __( 'posts', MISS_ADMIN_TEXTDOMAIN ),
						'type' => 'range',
					),
					array(
						'heading' => __( 'Offset Posts <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'This will skip a number of posts at the beginning.<br /><br />Useful if you are using multiple blog shortcodes on the same page.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'offset',
						'min' => 0,
						'value' => 0,
						'max' => 40,
						'step' => 1,
						'unit' => __( 'posts', MISS_ADMIN_TEXTDOMAIN ),
						'type' => 'range',
					),
					array(
						'heading' => __('Disable Post Elements <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'You can hide certain elements from displaying here.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'disable',
						'type' => 'checkbox',
						'value' => array(
							__('Disable Post Image', MISS_ADMIN_TEXTDOMAIN ) => 'image',
							__('Disable Post Title', MISS_ADMIN_TEXTDOMAIN ) => 'title',
							__('Disable Post Content', MISS_ADMIN_TEXTDOMAIN ) => 'content',
							__('Disable Post Meta', MISS_ADMIN_TEXTDOMAIN ) => 'meta',
							__('Disable Read More', MISS_ADMIN_TEXTDOMAIN ) => 'more',
						),
					),
					array(
						'heading' => __('Posts Categories', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'By default shortcode will pushing recent posts from all categories.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'category_in',
						'type' => 'checkbox',
						'value' => $categories,
						'dependency' => array(
							'element' => 'posttype', 
							'value' => array( 'post' )
						),
					),
					array(
						'heading' => __('Portfolio Categories', MISS_ADMIN_TEXTDOMAIN ),
						'description' => __( 'By default shortcode will pushing recent work from all categories.', MISS_ADMIN_TEXTDOMAIN ),
						'param_name' => 'portfolio_terms',
						'type' => 'checkbox',
						'value' => $portfolio_categories,
						'dependency' => array(
							'element' => 'posttype', 
							'value' => array( 'portfolio' )
						),
					),
		            array(
		                "type" => "dropdown",
		                "heading" => __( "Viewport Animation", MISS_ADMIN_TEXTDOMAIN ),
		                "param_name" => "animation",
		                "value" => miss_js_composer_css_animation(),
		                "description" => __( "Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed. NOT RECOMMENDED FOR CAROUSEL", MISS_ADMIN_TEXTDOMAIN )
		            ),
				)
			);
		}
		
		global $post, $wp_rewrite, $wp_query, $irish_framework_params;

		$defaults = array(
			'caption' => '',
			'tagline' => '',
			'posttype' => 'post',
			'class' => 'grid',
			'column' => '',
			'showposts' => '',
			'offset' => '',
			'disable' => '',
			'category_in' => '',
			'portfolio_terms' => '',
			'animation' => '',
		);

		extract( shortcode_atts( $defaults, $atts ) );

		$out = '';

        if($animation != '') {
            $animation = ' im-animate-element ' . $animation . ' ';
        } 

		$posttype = ( array_search( $posttype, $posttypes ) != false ) ? $posttype : 'post';
		$class = ( array_search( $class, $classes ) != false ) ? $class : 'grid';
		$category_in = ( !empty($category_in) && $posttype == 'post' ) ? explode(",", trim( $category_in )) : '';

		$query_args = array(
			'post_type' => $posttype,
			'showposts' => $showposts,
			'category__in' => $category_in,
			'offset' => $offset,
			'nopaging' => 0,
			'ignore_sticky_posts' => 1
		);

		if ( !empty($portfolio_terms) && $posttype == 'portfolio' ) {
			$taxonomy = 'portfolio_category';
			$term = ( explode( ",", trim( $portfolio_terms ) ) ) ? explode( ",", trim( $portfolio_terms ) ) : $portfolio_terms;
			$query_args['taxonomy'] = 'portfolio_category';
			$query_args['tax_query'] = array(
				array(
					'taxonomy' => 'portfolio_category',
					'field' => 'slug',
					'terms' => $term
				)
			);
		} else {
			$taxonomy = '';
			$portfolio_terms = '';
		}

		if( is_front_page() ) {
			$_layout = ( miss_get_setting( 'homepage_layout' ) ) ? miss_get_setting( 'homepage_layout' ) : 'full_width';
			$images = ( $_layout == 'full_width' ? 'images' : ( $_layout == 'left_sidebar' ? 'small_sidebar_images' : 'big_sidebar_images' ) );
		} elseif ( $wp_query->get_queried_object() ) {
			$post_obj = $wp_query->get_queried_object();
			$_layout = get_post_meta( $post_obj->ID, '_layout', true );
			$template = get_post_meta( $post_obj->ID, '_wp_page_template', true );
			$images = ( $_layout == 'full_width' ? 'images' : ( $_layout == 'left_sidebar' ? 'small_sidebar_images' : 'big_sidebar_images' ) );
		} else {
			$_layout = 'full_width';
			$images = 'images';
		}

		$sc_post_query = new WP_Query();
		$sc_post_query->query( $query_args );

		if( $sc_post_query->have_posts() ) {

			$img_sizes = $irish_framework_params->layout[$images];

			$width = '';
			$height = '';

			if( $class == 'list' ) {
				$column_class = 'span12 column';
				$excerpt_lenth = 180;
				$width = $img_sizes['small_post_list'][0];
				$height = $img_sizes['small_post_list'][1];
			} else {
				$column = ( $column > 0 || $column < 4 ) ? $column : 4;
				switch( $column ) {
					case 1:
						$column_class = 'span12 column';
						$excerpt_lenth = 400;
						$width = $img_sizes['blog_layout1'][0];
						$height = $img_sizes['blog_layout1'][1];
						break;
					case 2:
						$column_class = 'span6 column';
						$excerpt_lenth = 150;
						$width = $img_sizes['blog_layout3'][0];
						$height = $img_sizes['blog_layout3'][1];
						break;
					case 3:
						$column_class = 'span4 column';
						$excerpt_lenth = 138;
						$width = $img_sizes['blog_layout4'][0];
						$height = $img_sizes['blog_layout4'][1];
						break;
					case 4:
						$column_class = 'span3 column';
						$excerpt_lenth = 115;
						$width = $img_sizes['blog_layout5'][0];
						$height = $img_sizes['blog_layout5'][1];
						break;
					default:
						$column_class = 'span3 column';
						$excerpt_lenth = 115;
						$width = $img_sizes['blog_layout5'][0];
						$height = $img_sizes['blog_layout5'][1];
						break;
				}
			}
			$img_class = 'image';
			$filter_args = array( 'width' => $width, 'height' => $height, 'img_class' => $img_class, 'link_class' => 'sc_image_load', 'preload' => true, 'disable' => $disable, 'column' => $column, 'type' => $posttype, 'shortcode' => true, 'echo' => false );

			if ( $class == 'grid carousel') {
				$carousel_item_start = '<li class="embedded">';
				$carousel_item_end = '</li><!-- /.embedded -->';
			} else {
				$carousel_item_start = '';
				$carousel_item_end = '';
			}

			$spans_in_row = $column;
			$span_walk = 0;
			$row_walk = 1;
			$row_delimeter = '</div><!-- /.row-fluid --> ' . $carousel_item_end . $carousel_item_start . '<div class="row-fluid">';

			$out .= $carousel_item_start . '<div class="row-fluid">';
			while( $sc_post_query->have_posts() ) {
				$sc_post_query->the_post();

				if ( ($spans_in_row * $row_walk) == $span_walk ) {
					$out .= $row_delimeter;
				} else {
					$out .= '';
				}
				if ( ($spans_in_row * $row_walk) == $span_walk ) {
					$row_walk++;
				}
				$span_walk++;

				if ( $posttype == 'staff' ) {
					$excerpt_lenth = 9999;
					$filter_args['no_link'] = true;
					$staff_out = '<div class="clearboth"></div>';
					$sociable_pages = get_post_meta( get_the_id( ), 'sociable' );
					foreach ( $sociable_pages[0] as $key => $value ) {
						//$out .= $key ;
						if ( ( $key != '#' ) and ( $key != 'keys' ) ) {
							$staff_out .= '<a class="sociable_icon" href="' . $value['link'] . '"><i class="fs-icon-' . $value['icon'] . '"></i></a>';
						}
					}
				} else {
					$staff_out = '';
				}

				$out .= '<div class="' . $column_class . $animation . '">';
				$out .= miss_before_post_sc( $filter_args );
				$out .= '<div class="content">';
				$out .= '<div class="post_excerpt">';
				if( strpos( $disable, 'content' ) === false ) {
					$out .= miss_excerpt( get_the_excerpt(), $excerpt_lenth, THEME_ELLIPSIS );
					if( ( !empty( $disable ) && strpos( $disable, 'more' ) === false ) || empty( $disable ) ) {
						$out .= miss_full_read_more();
					}
					$out .= $staff_out;
				}
				$out .= '</div><!-- /.post_excerpt -->';
				$out .= '</div><!-- /.content -->';
				$out .= '</div><!-- /.' . $column_class . ' -->';

			}; //while
			$out .= '</div><!-- /.row-fluid -->' . $carousel_item_end;

		} // if( $sc_post_query->have_posts() )
		$out_caption = '';
		if($caption != ''){
			$out_caption .= '					<div class="blog_header">';
			$out_caption .= '						<h4 class="pull-left caption">';
			$out_caption .= '							' . $caption;
			$out_caption .= '						</h4>';
			$out_caption .= '						<h6 class="pull-left tagline">';
			$out_caption .= '							' . $tagline;
			$out_caption .= '						</h6>';
			$out_caption .= '						<div class="clearboth">';
			$out_caption .= '						</div>';
			$out_caption .= '					</div><!-- /.blog_header-->';
		}
		if ( $class == 'grid carousel') {
			$out = '
			<div class="flex_slideshow_container arrows_top">
			<div class="flexslider">
			<ul class="slides">
			' . $out . '
			</ul>
			</div>
			</div>
			';
		}

		$out = '<div class="sc_layout ' .  $class . ' ' . $posttype . '">' . $out_caption . $out . '</div><!-- /.sc_layout ' .  $class . '-->';

		return $out;
	}

	/**
	 *
	 */
	public static function _options( $method ) {
		return self::$method('generator');
	}
}

endif;
?>