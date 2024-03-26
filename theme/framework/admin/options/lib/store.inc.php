<?php
/**
 * Store
 * @since 1.7
 */
$option_tabs['miss_store_tab'] = array('class' => 'store', 'title' => __( 'Store / Woocommerce', MISS_ADMIN_TEXTDOMAIN ));
$option_store = Array(

	array(
		'name' => array( 'miss_store_tab' => $option_tabs ),
		'class'=> 'store',
		'icon' => 'icon-store.png',
		'type' => 'tab_start'
	),
	
		array(
			'name' => __( 'Page title', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'WooCommerce home title.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_title',
			'default' => __( 'Store', MISS_ADMIN_TEXTDOMAIN ),
			'type' => 'text'
		),
		array(
			'name' => __( 'Page tagline', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Enter shop page tagline.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'product_page_tagline',
			'type' => 'text'
		),

		array(
			'name' => __( 'Header slider', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select custom slider type for Woocommerce page.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_slider',
			'options' => array(
				'layerslider' => __( 'Layer Slider', MISS_ADMIN_TEXTDOMAIN ),
				'revslider' => __( 'Slider Revolution', MISS_ADMIN_TEXTDOMAIN ),
				'expose_products' => __( 'Recent Products Expose Grid', MISS_ADMIN_TEXTDOMAIN ),
			),
			'type' => 'select'
		),

		array(
			'name' => __( 'Layer slider group', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select slides for Layer Slider.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_layerslider',
			'options' => miss_ls_slides(),
			'type' => 'select'
		),

		array(
			'name' => __( 'Revolution slider group', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select slides for Revolution Slider.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_revslider',
			'options' => miss_rev_slides(),
			'type' => 'select'
		),

		array(
			'name' => __( 'Store layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select Woocommerce / store layout type.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_layout',
			'options' => array(
				'full_width' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/1.png',
				'left_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/2.png',
				'right_sidebar' => THEME_ADMIN_ASSETS_URI . '/images/columns/home/3.png',
			),
			'type' => 'layout'
		),
		array(
			'name' => __( 'Catalog column layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select which column layout you would like to display with your woocommerce catalog.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_columns',
			'options' => array(
				'1' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/1.png',
				'2' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/2.png',
				'3' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/3.png',
				'4' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/4.png',
			),
			'type' => 'layout'
		),

		array(
			'name' => __( 'Show categories', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Check this option to display product categories below overview.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_enable_categories',
			'options' => array( 'true' => __( 'Show Categories', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Display banners', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can choose whether you wish to display banner.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_display_banner',
			'options' => array(
				'front' => __( 'Display only for store front-page', MISS_ADMIN_TEXTDOMAIN ),
				'all' => __( 'Display on all store pages', MISS_ADMIN_TEXTDOMAIN ),
				'none' => __( 'Hide banners', MISS_ADMIN_TEXTDOMAIN )
			),
			'type' => 'radio'
		),
		array(
			'name' => __( 'Store banner #1', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload store header banner #1.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_1',
			'type' => 'upload'
		),
		array(
			'name' => __( 'Store banner #1 Link', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Add banner #1 link.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_1_link',
			'type' => 'text'
		),
		array(
			'name' => __( 'Store banner #2', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload store header banner #2.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_2',
			'type' => 'upload'
		),
		array(
			'name' => __( 'Store banner #2 Link', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Add banner #2 link.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_2_link',
			'type' => 'text'
		),
		array(
			'name' => __( 'Store banner #3', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload store header banner #3.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_3',
			'type' => 'upload'
		),
		array(
			'name' => __( 'Store banner #3 Link', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Add banner #3 link.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_3_link',
			'type' => 'text'
		),
		array(
			'name' => __( 'Store banner #4', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload store header banner #4.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_4',
			'type' => 'upload'
		),
		array(
			'name' => __( 'Store banner #4 Link', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Add banner #4 link.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'store_banner_4_link',
			'type' => 'text'
		),

	array(
		'type' => 'tab_end'
	),

);
