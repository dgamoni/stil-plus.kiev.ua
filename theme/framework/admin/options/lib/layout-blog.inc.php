<?php
/**
 * Blog Layout
 * @since 1.5
 */

$option_tabs['miss_blog_tab'] = array('class' => 'layout', 'title' => __( 'Blog Layout', MISS_ADMIN_TEXTDOMAIN ));
$option_store = Array(
	array(
		'name' => array( 'miss_blog_tab' => $option_tabs ),
		'class'=> 'layout',
		'icon' => 'icon-layout.png',
		'type' => 'tab_start'
	),
	
		array(
			'name' => __( 'Blog title', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Enter custom title for Blog here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'blog_title',
			'default' =>  __( 'Blog', MISS_ADMIN_TEXTDOMAIN ),
			'toggle_class' => 'blog_title',
			'type' => 'text'
		),

		array(
			'name' => __( 'Blog Page Layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You have ability to choose between a left, right, or no sidebar layout for your blog (and other pages), feel free to choose wherever you like.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'blog_page_layout',
			'options' => array(
				'full_width' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/1.png',
				'left_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/2.png',
				'right_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/3.png',
			),
			'default' => 'right_sidebar',
			'type' => 'layout'
		),

		array(
			'name' => __( 'Blog home layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Your blog posts will use the layout you select here.<br /><br />If you want an image to display in the layout then do not forget to set your featured image when editing your posts.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'blog_layout',
			'options' => array(
				'blog_layout1' => THEME_ADMIN_ASSETS_URI . '/images/columns/blog/1.png',
				'blog_layout2' => THEME_ADMIN_ASSETS_URI . '/images/columns/blog/2.png',
				'blog_layout3' => THEME_ADMIN_ASSETS_URI . '/images/columns/blog/3.png',
				'blog_layout4' => THEME_ADMIN_ASSETS_URI . '/images/columns/blog/4.png',
				'blog_layout5' => THEME_ADMIN_ASSETS_URI . '/images/columns/blog/5.png'
			),
			'type' => 'layout'
		),

		array(
			'name' => __( 'Pagination mode', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Please specify pagination mode for your blog posts and custom posts index.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'pagination_type',
			'default' => 'manual',
			'options' => array( 
				'manual' => __( 'Use classic pagination', MISS_ADMIN_TEXTDOMAIN ),
				'auto' => __( 'Load posts automatically where latest reached', MISS_ADMIN_TEXTDOMAIN ),
				// 'semi' => __( 'Use Load More button', MISS_ADMIN_TEXTDOMAIN )
			),
			'type' => 'radio'
		),

		array(
			'name' => __( 'Exclude categories', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose certain categories to exclude from your blog page.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'exclude_categories',
			'target' => 'cat',
			'type' => 'multidropdown'
		),
		array(
			'name' => __( 'Popular &amp; related posts', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default a popular / related posts module will display on your posts.  You can choose how to display it or disable it here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'post_like_module',
			'options' => array( 
				'tab' => __( 'Display in a Tabbed Layout', MISS_ADMIN_TEXTDOMAIN ),
				'column' => __( 'Display in a Column Layout', MISS_ADMIN_TEXTDOMAIN ),
				'disable' => __( 'Disable Popular &amp; Related Posts Module', MISS_ADMIN_TEXTDOMAIN )
			),
			'type' => 'radio'
		),
		array(
			'name' => __( 'Comments &amp; trackbacks', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose whether you want your comments and trackbacks bundled together or separated in tabs.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'post_comment_styles',
			'options' => array( 
				'tab' => __( 'Display single tabs', MISS_ADMIN_TEXTDOMAIN ),
				'list' => __( 'Display together in a list', MISS_ADMIN_TEXTDOMAIN )
			),
			'type' => 'radio'
		),
		array(
			'name' => __( 'Display full blog posts', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default blog posts will be displayed as excerpts.<br /><br />Checking this will display the full content of your post.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'display_full',
			'options' => array( 'true' => __( 'Display Full Blog Posts on Blog Index Page', MISS_ADMIN_TEXTDOMAIN ) ), 
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Disable author information', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default an about the author module will display when viewing your posts. You can disable it here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_post_author',
			'options' => array( 'true' => __( 'Disable the About Author Module', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Disable read more buttons', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Check this to disable read more buttons.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_readmore_button',
			'options' => array( 'true' => __( 'Hide "Read More" Button', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Disable post navigation', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default your posts will display links at the bottom to blog nearest posts. Check this to disable those links.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_post_nav',
			'options' => array( 'true' => __( 'Disable Post Navigation Module', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Disable social bookmarks', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default a social bookmarks module will display when viewing your posts.<br /><br />You can choose to disable it here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'social_bookmarks',
			'options' => array( 'true' => __( 'Disable the Social Bookmarks Module', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Animation', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Turn on CSS3 transitions. You may specify animation effect.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'blog_layout_animation',
			'default' => '',
			'type' => 'select',
			'target'=> 'css_animation',
			'shortcode_dont_multiply' => true,
			'shortcode_optional_wrap' => false
		),

		array(
			'name' => __( 'URL shortening', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose to have certain links automatically use the bit.ly URL shortening service.<br /><br />For example the social icons on each post will use bit.ly URLs when this is checked.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'url_shortening',
			'options' => array( 'true' => __( 'Enable bit.ly URL Shortening', MISS_ADMIN_TEXTDOMAIN ) ),
			'toggle' => 'toggle_true',
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'bit.ly Login', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Input the Username for your bit.ly account here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'bitly_login',
			'toggle_class' => 'url_shortening_true',
			'type' => 'text'
		),
		array(
			'name' => __( 'bit.ly API Key', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Input the API key for your bit.ly account here.<br /><br />You can find this by logging in at bit.ly and navigating to your settings page.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'bitly_api',
			'toggle_class' => 'url_shortening_true',
			'type' => 'text'
		),
		array(
			'name' => __( 'Disable meta options', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'The post meta will display under the title on your blog page.<br /><br />You can choose sections to disable here.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_meta_options',
			'options' => array(
				'author_meta' => 'Disable author meta',
				'date_meta' => 'Disable date meta',
				/*
				'posted_title_meta' => 'Disable Date "Posted" Label',
				*/
				'comments_meta' => 'Disable comments meta',
				'categories_meta' => 'Disable categories meta',
				'tags_meta' => 'Disable tags meta'
			),
			'type' => 'checkbox'
		),
	
	array(
		'type' => 'tab_end'
	)

);