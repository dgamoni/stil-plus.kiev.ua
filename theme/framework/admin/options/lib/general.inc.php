<?php
/**
 * General
 * @since 1.5
 */
$option_tabs['miss_generalsettings_tab'] = array('class' => 'general', 'title' => __( 'General', MISS_ADMIN_TEXTDOMAIN ));
$option_store = Array(
	array(
		'name' => array( 'miss_generalsettings_tab' => $option_tabs ),
		'class'=> 'general',
		'icon' => 'icon-general.png',
		'type' => 'tab_start'
	),
		array(
			'name' => __('Responsive layout', MISS_ADMIN_TEXTDOMAIN),
			'desc' => __('This option making theme "responsive" or adaptive to be compatible with mobile devices such as iPhone, iPad, Android, Blackberry and respond to your users needs. By default this option enabled.',MISS_ADMIN_TEXTDOMAIN),
			'id' => 'responsive',
			'help' => '<img align="right" src="' . THEME_ADMIN_ASSETS_URI . '/images/icons/adaptive.png" alt="Adaptive Layout" />' . __('Responsive web design is an approach to web design in which a site is crafted to provide an optimal viewing experience easy reading and navigation with a minimum of resizing, panning, and scrolling across a wide range of devices.', MISS_ADMIN_TEXTDOMAIN ),
			'options' => array(
				'enabled' => __('Enable', MISS_ADMIN_TEXTDOMAIN),
				'disabled' => __('Disable', MISS_ADMIN_TEXTDOMAIN)
			),
			'default' => 'enabled',
			'type' => 'radio'
		),

		array(
			'name' => __('Retina', MISS_ADMIN_TEXTDOMAIN),
			'desc' => __('This option making sites compatible with retina-technology screens (high quality and high resolution screens) with one click. Users of latest Apple devices will appreciate the picture quality.',MISS_ADMIN_TEXTDOMAIN),
			'id' => 'hires',
			'options' => array(
				'enabled' => __('Enable', MISS_ADMIN_TEXTDOMAIN),
				'disabled' => __('Disable', MISS_ADMIN_TEXTDOMAIN)
			),
			'default' => 'disabled',
			'type' => 'radio'
		),

		array(
			'name' => __('Layout type', MISS_ADMIN_TEXTDOMAIN),
			'desc' => __('Choose between flexible (picture will adjust and take the full width of the screen) and boxed (not flexible) layout type.',MISS_ADMIN_TEXTDOMAIN),
			'help' => '<img hspace="10px" src="' . THEME_ADMIN_ASSETS_URI . '/images/icons/layout_type.png" alt="Layout Type" /><br />' . __( 'You can try layout on our demo site <a href="http://radiostation.wp.irishmiss.com">www.radiostation.wp.irishmiss.com</a>.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'layout_type',

			'options' => array(
				'flexible' => THEME_ADMIN_ASSETS_URI . '/images/columns/boxed/full.png',
				'boxed' => THEME_ADMIN_ASSETS_URI . '/images/columns/boxed/boxed.png',
			),
			'default' => 'flexible',
			'type' => 'layout'
		),

		array(
			'name' => __( 'Disable search button', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'By default primary navigation contain search button.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_searchbox',
			'options' => array( 'true' => __( 'Disable search button', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Enable preloader', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Check this option to enable page preloader script.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'jpreloader',
			'options' => array( 'true' => __( 'Enable preloader', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Disable page title', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Check this option to hide H1 page caption from all pages.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_page_caption',
			'options' => array( 'true' => __( 'Disable page caption globally', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Disable breadcrumbs', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Breadcrumbs allows users to keep track of their locations within pages or posts. Here you can disable breadcrumbs from site.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_breadcrumbs',
			'options' => array( 'true' => __( 'Disable breadcrumbs globally', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Breadcrumbs delimiter', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Define breadcrumbs delimiter to separate each location.<br />Example:<br /><br /><code>/ > - &rarr; , :: >></code>', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'breadcrumb_delimiter',
			'help' => __('Example: Blog / Category / Post <br />On example you can see two delimiters "/". Default delimiter is "/" and anytime you can change it by editing this option.', MISS_ADMIN_TEXTDOMAIN ), 
			'htmlentities' => true,
			'type' => 'text'
		),

		array(
			'name' => __( 'Latest tweets', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option enable or disable latest tweets carousel displaying mode.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'disable_tweets',
			'options' => array( 'true' => __( 'Disable tweets carousel', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Shortcode generator', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select post types for shortcode generator.', MISS_ADMIN_TEXTDOMAIN ),
			// 'default' => array('page','post','portfolio','news','vacancy','staff'),
			'id' => 'shortcode_generator_type',
			'options' => get_post_types(),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Analytics / Zopim', MISS_ADMIN_TEXTDOMAIN ),
			'desc' =>  __( 'Paste Analytics code or Zopim widget code here.', MISS_ADMIN_TEXTDOMAIN ),
			'help' => '<img align="left" hspace="10px" src="' . THEME_ADMIN_ASSETS_URI . '/images/icons/analytics.png" alt="Google Analytics" />' . __( 'The Google Analytics tracking code collects visitor data for your web property, and returns that data to Analytics where you can see it in reports. When you add a new web property to your Analytics account, Analytics generates the tracking code snippet that you need to add to the pages whose data you want to collect.<br /><br />Get your tracking code <a href="http://analytics.google.com/" target="_BLANK">here</a>', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'analytics_code',
			'type' => 'textarea'
		),
		array(
			'name' => __( 'Custom CSS', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Place for custom styles. This option may customise any style of the website. <br />Example:<br /><br /><code>.logo a { color: blue; }</code>', MISS_ADMIN_TEXTDOMAIN ),
			'help' => __( 'Requires some skills. Example:<br /><br /><code>.logo a { color: blue; }</code><br /><br />If you are having problems styling something then ask on the support forum and we will be with you shortly.', MISS_ADMIN_TEXTDOMAIN ),
			'toggle_class' => 'custom_css',
			'id' => 'custom_css',
			'type' => 'textarea'
		),
		array(
			'name' => __( 'Custom JavaScript', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Place for custom javascript. Required some skills.', MISS_ADMIN_TEXTDOMAIN ),
			'help' => __( 'Requires Javascript skills. Code Example:<br /><br /><code>alert ("Hello World!")</code><br />', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'custom_js',
			'toggle_class' => 'custom_js',
			'type' => 'textarea'
		),
		
	array(
		'type' => 'tab_end'
	),

);