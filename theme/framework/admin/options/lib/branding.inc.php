<?php
/**
 * Branding
 * @since 1.5
 */
$option_tabs['miss_branding_tab'] = array( 'class' => 'branding', 'title' => __( 'Branding', MISS_ADMIN_TEXTDOMAIN ) );
$option_store = Array(
	array(
		'name' => array( 'miss_branding_tab' => $option_tabs ),
		'class'=> 'branding',
		'icon' => 'icon-branding.png',
		'type' => 'tab_start'
	),


		array(
			'name' => __( 'Rounded borders', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will enable rounded borders for primary elements and blocks.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'enable_border_radius',
			'options' => array( 'true' => __( 'Enable rounded borders', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Full width header', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will stretch header to 90% of screen width.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'enable_fullwidth_header',
			'options' => array( 'true' => __( 'Enable fullwidth header', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Full width content', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will stretch content to 90% of screen width.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'enable_fullwidth',
			'options' => array( 'true' => __( 'Enable fullwidth content', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Extra header', MISS_ADMIN_TEXTDOMAIN ),
			'toggle_class' => 'extra_header_toggle',
			'type' => 'toggle_start'
		),
			array(
				'name' => __( 'Extra header', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'This option will enable extra header region at the website top.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'enable_extra_header',
				'options' => array( 'true' => __( 'Enable Extra Header', MISS_ADMIN_TEXTDOMAIN ) ),
				'type' => 'checkbox'
			),

			array(
			 	'name' => __( 'Extra header text', MISS_ADMIN_TEXTDOMAIN ),
			 	'desc' => __( 'This will display in your header.<br /> We recommend you to leave your contacts, such as phone or address here.', MISS_ADMIN_TEXTDOMAIN ),
			 	'id' => 'extra_header_text',
			 	'htmlspecialchars' => true,
			 	'type' => 'text'
			),	

			array(
				'name' => __( 'Extra header features', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Select items for extra header section.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'extra_header',
				'options' => array(
					'text'     => __( 'Display extra text (edit text above)', MISS_ADMIN_TEXTDOMAIN ),
					'menu'     => __( 'Display menu (edit Appearance / Menu)', MISS_ADMIN_TEXTDOMAIN ),
					'date'     => __( 'Display current date', MISS_ADMIN_TEXTDOMAIN ),
					'lang'     => __( 'Display language dropdown', MISS_ADMIN_TEXTDOMAIN ),
					'sociable' => __( 'Display social icons (edit Theme Options / Sociable)', MISS_ADMIN_TEXTDOMAIN ),
					'login'    => __( 'Display login link (edit Theme Options / Pages)', MISS_ADMIN_TEXTDOMAIN ),
					'store'    => __( 'Display shop link (edit Theme Options / Store)', MISS_ADMIN_TEXTDOMAIN ),
					'checkout' => __( 'Display checkout link (edit Theme Options / Store)', MISS_ADMIN_TEXTDOMAIN ),
					'subscribe'=> __( 'Display subscribe link (edit Theme Options / Pages)', MISS_ADMIN_TEXTDOMAIN ),
				),

				'type' => 'checkbox'
			),

			array(
				'name' => __( 'Date format', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Specify date format.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'extra_date_format',
				'default' => 'F jS, Y',
				'options' => array( 
					'F j, Y' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('F j, Y') ),
					'F jS, Y' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('F j, Y') ),
					'F j' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('F j') ),
					'm/d/y' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('m/d/y') ),
					'd/m/y' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('d/m/y') ),
					'F' => sprintf( __( '%1$s (only month)', MISS_ADMIN_TEXTDOMAIN ), date('F') ),
					'F jS' => sprintf( __( '%1$s', MISS_ADMIN_TEXTDOMAIN ), date('F jS') ),
				),
				'type' => 'select'
			),
			array(
				'name' => __( 'Languages', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'This option may help you create language switcher for extra header.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'extra_header_langs',
				'type' => 'extra_header_langs'
			),

		array(
			'type' => 'toggle_end'
		),

		array(
			'name' => __( 'Menu settings', MISS_ADMIN_TEXTDOMAIN ),
			'toggle_class' => 'menu_toggle',
			'type' => 'toggle_start'
		),

			array(
				'name' => __( 'Menu logo', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'This option will add logo right to primary menu.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'add_menu_logo',
				'options' => array( 'true' => __( 'Add logo to menu', MISS_ADMIN_TEXTDOMAIN ) ),
				'type' => 'checkbox'
			),

			array(
				'name' => __( 'Menu centering', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Check this option to align center menu items.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'centered_menu',
				'options' => array( 'true' => __( 'Enable menu centering', MISS_ADMIN_TEXTDOMAIN ) ),
				'type' => 'checkbox'
			),

			array(
				'name' => __( 'Menu order', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Specify primary menu order vertically. You may reorder menu.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'header_order',
				'default' => 'menu_header',
				'options' => array(
					'menu_header' => THEME_ADMIN_ASSETS_URI . '/images/columns/menu/menu_position2.png',
					'header_menu' => THEME_ADMIN_ASSETS_URI . '/images/columns/menu/menu_position1.png',
				),
				'type' => 'layout'
			),


			array(
				'name' => __( 'Menu height', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'You can specify custom menu height (in pixels).<br />Example: 60.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'menu_height',
				'default' => '60',
				'min' => 1,
				'max' => 940,
				'step' => 1,
				'unit' => 'px',
				'type' => 'range'
			),

		array(
			'type' => 'toggle_end'
		),

		array(
			'name' => __( 'Sticky menu options', MISS_ADMIN_TEXTDOMAIN ),
			'type' => 'toggle_start'
		),
			array(
				'name' => __( 'Sticky menu', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Main menu holds on the top and fixed when you scrolling the page.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'enable_fixed_menu',
				'options' => array( 'true' => __( 'Enable Sticky Menu', MISS_ADMIN_TEXTDOMAIN ) ),
				'type' => 'checkbox'
			),

			array(
				'name' => __( 'Menu opacity', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'You may specify sticky menu transparency.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'menu_opacity',
				'default' => '0.9',
				'type' => 'range',
				'unit' => '%',
				'min' => 0.1,
				'max' => 1,
				'step' => 0.1
			),

			// array(
			// 	'name' => __( 'Sticky logo height', MISS_ADMIN_TEXTDOMAIN ),
			// 	'desc' => __( 'Enter menu logo height in pixels.', MISS_ADMIN_TEXTDOMAIN ),
			// 	'id' => 'logo_sticky_height',
			// 	'default' => '32',
			// 	'type' => 'numeral'
			// ),
			array(
				'name' => __( 'Sticky offset', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Enter scroll offset when menu will appears.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'sticky_offset',
				'default' => '200',
				'type' => 'numeral'
			),
			array(
				'name' => __( 'Hide subs', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'This option may hide menu drop-downs on scroll.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'sticky_hide_subs',
				'options' => array( 'true' => __( 'Hide drop-down for sticky menu', MISS_ADMIN_TEXTDOMAIN ) ),
				'type' => 'checkbox'
			),

		array(
			'type' => 'toggle_end'
		),

		array(
			'name' => __( 'Logo settings', MISS_ADMIN_TEXTDOMAIN ),
			'toggle_class' => 'menu_toggle',
			'type' => 'toggle_start'
		),

			array(
				'name' => __( 'Logo type', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'You can choose whether you wish to display a custom logo or your site title.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'display_logo',
				'options' => array(
					'true' => __( 'Custom image logo', MISS_ADMIN_TEXTDOMAIN ),
					'' => sprintf( __( 'Display site title <small><a href="%1$s" target="_blank">(click here to edit site title)</a></small>', MISS_ADMIN_TEXTDOMAIN ), esc_url( get_option('siteurl') . '/wp-admin/options-general.php' ) )
				),
				'type' => 'radio'
			),
			array(
				'name' => __( 'Custom image logo', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Upload an image to use as your logo.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'logo_url',
				'type' => 'upload'
			),

			array(
				'name' => __( 'Logo height', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Enter logo height in pixels.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'logo_height',
				'default' => '48',
				'type' => 'numeral'
			),

			array(
				'name' => __( 'Custom footer logo', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Upload an image to use as your footer logo for widget area. Please use high resolutions fot Retina ready devices.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'retina_footer_logo_url',
				'type' => 'upload'
			),

			array(
				'name' => __( 'Login logo', MISS_ADMIN_TEXTDOMAIN ),
				'desc' => __( 'Upload image for WordPress login page.', MISS_ADMIN_TEXTDOMAIN ),
				'id' => 'login_logo_url',
				'type' => 'upload'
			),

		array(
			'type' => 'toggle_end'
		),

		array(
			'name' => __( 'Header order', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Specify header layout order.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'header_layout',
			'default' => 'logo_content_contacts',
			'options' => array( 
				'logo_content_contacts' => __( 'Logo / Custom content / Contacts', MISS_ADMIN_TEXTDOMAIN ),
				'logo_content' => __( 'Logo / Custom content', MISS_ADMIN_TEXTDOMAIN ),
				'logo' => __( 'Only centered logo', MISS_ADMIN_TEXTDOMAIN ),
			),
			'type' => 'select'
		),

		array(
			'name' => __( 'Header height', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'You can specify custom header height (in pixels).<br />Example: 120', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'header_height',
			'default' => '120',
			'min' => 1,
			'max' => 940,
			'step' => 1,
			'unit' => 'px',
			'type' => 'range'
		),

		array(
			'name' => __( 'Header description', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Enter header custom text.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'header_site_description',
			'default' => '',
			'type' => 'textarea'
		),

		array(
			'name' => __( 'Custom favicon', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload your favicon.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'favicon_url',
			'type' => 'upload'
		),
		array(
			'name' => __( 'Apple touch icon', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Upload website icon for Apple platform.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'apple_icon',
			'type' => 'upload'
		),

		array(
			'name' => __( 'Header company location', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will add company location in site header. Leave blank to remove.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'extra_header_company_location',
			'htmlspecialchars' => true,
			'type' => 'text'
		),	

		array(
			'name' => __( 'Header phone', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will add phone number in site header. Leave blank to remove.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'extra_header_phone',
			'htmlspecialchars' => true,
			'type' => 'text'
		),	

		array(
			'name' => __( 'Header email', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'This option will add email address in site header. Leave blank to remove.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'extra_header_email',

			'htmlspecialchars' => true,
			'type' => 'text'
		),	

	array(
		'type' => 'tab_end'
	),

);