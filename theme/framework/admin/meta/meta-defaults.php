<?php
global $wpdb;
$meta_boxes = array(
	'title' => sprintf( __( '%1$s Page Layout', MISS_ADMIN_TEXTDOMAIN ), THEME_NAME ),
	'id' => 'miss_side_meta_box',
	'pages' => array( 'page', 'post', 'portfolio', 'news', 'service', 'partners', 'pricetable', 'tribe_events', 'events', 'vacancy' ),
	'callback' => '',
	'context' => 'side',
	'priority' => 'default',
	'fields' => array(
		array(
			'name' => __( 'Layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose between a left, right, or no sidebar layout for your page.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_layout',
			'toggle_class' => 'page_layout',
			'options' => array(
				'full_width' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/1.png',
				'left_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/fourth_threefourth.png',
				'right_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/threefourth_fourth.png',
			),
			'default' => 'right_sidebar',
			'type' => 'layout'
		),

		array(
			'name' => __( 'Page Tagline', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Tagline appears right after page title.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_page_tagline',
			'toggle_class' => 'page_tagline',
			'options' => array( 'true' => __( 'Alternative page title.', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'text'
		),

		array(
			'name' => __( 'Disable Page H1 title', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option may disable H1 page caption tag.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_disable_page_title',
			'toggle_class' => 'disable_page_title',
			'options' => array( 'true' => __( 'Disable page H1 title on this page', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Disable Breadcrumbs', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'With this option you can remove breadcrumbs from page.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_disable_breadcrumbs',
			'toggle_class' => 'disable_breadcrumbs',
			'options' => array( 'true' => __( 'Disable breadcrumbs on this page', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Remove caption margin', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option may remove page caption bottom margin.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_disable_page_title_margin',
			'toggle_class' => 'disable_page_title',
			'options' => array( 'true' => __( 'Remove caption margin', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),
		array(
			'name' => __( 'Custom Sidebar', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( "Select the custom sidebar that you'd like to be displayed on this page.<br /><br />Note:  You will need to first create a custom sidebar under the &quot;Sidebar&quot; tab in your theme's option panel before it will show up here.", MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_custom_sidebar',
			'toggle_class' => 'custom_sidebar',
			'target' => 'custom_sidebars',
			'type' => 'select'
		),

	)
);
return array(
	'load' => true,
	'options' => $meta_boxes
);

?>
