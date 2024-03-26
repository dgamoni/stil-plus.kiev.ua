<?php
/**
 * Partners
 * @since 1.5
 */

$option_tabs['miss_footer_tab'] = array('class' => 'footer', 'title' => __( 'Footer', MISS_ADMIN_TEXTDOMAIN ));
$option_store = Array(
	array(
		'name' => array( 'miss_footer_tab' => $option_tabs ),
		'class'=> 'footer',
		'icon' => 'icon-footer.png',
		'type' => 'tab_start'
	),
	
		array(
			'name' => __( 'Footer column layout', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Select which column layout you would like to display with your footer.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'footer_columns',
			'options' => array(
				'1' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/1.png',
				'2' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/2.png',
				'3' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/3.png',
				'4' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/4.png',
				'6' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/6.png',
				'third_twothird'				=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/third_twothird.png',
				'fourth_threefourth'			=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/fourth_threefourth.png',
				'fourth_fourth_half'			=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/fourth_fourth_half.png',
				'sixth_fivesixth'				=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/sixth_fivesixth.png',
				'third_sixth_sixth_sixth_sixth' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/third_sixth_sixth_sixth_sixth.png',
				'half_sixth_sixth_sixth' 		=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/half_sixth_sixth_sixth.png',
				'twothird_third' 				=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/twothird_third.png',
				'threefourth_fourth' 			=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/threefourth_fourth.png',
				'half_fourth_fourth' 			=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/half_fourth_fourth.png',
				'fivesixth_sixth' 				=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/fivesixth_sixth.png',
				'sixth_sixth_sixth_sixth_third' => THEME_ADMIN_ASSETS_URI . '/images/columns/footer/sixth_sixth_sixth_sixth_third.png',
				'sixth_sixth_sixth_half' 		=> THEME_ADMIN_ASSETS_URI . '/images/columns/footer/sixth_sixth_sixth_half.png'
			),
			'type' => 'layout'
		),
		array(
			'name' => __( 'Disable footer widgets', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Check this if you do not wish to display any widgets with your footer.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'footer_disable',
			'options' => array( 'true' => __( 'Disable all widgets in footer', MISS_ADMIN_TEXTDOMAIN ) ),
			'type' => 'checkbox'
		),

		array(
			'name' => __( 'Footer contacts caption', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Specify title for footer contacts block. Caption will be displayed above footer contacts text.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'footer_title',
			'default' => 'Contact Info',
			'htmlspecialchars' => false,
			'type' => 'text'
		),

		array(
			'name' => __( 'Footer contacts text', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Enter contact information here. Contacts will be displayed bottom left your website footer.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'footer_contacts',
			'default' => '5 Cromac Avenue, Belfast, Northern Ireland<br />Phone: (305) 555-4446   Fax: (305) 555-4447<br />E-Mail: johndoe@yourdomain.com Web: http://www.yourdomain.com',
			'htmlspecialchars' => false,
			'type' => 'textarea'
		),
		
		array(
			'name' => __( 'Copyrights', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( 'Enter copyrights for footer right.', MISS_ADMIN_TEXTDOMAIN ),
			'id' => 'footer_text',
			'default' => '',
			'htmlspecialchars' => true,
			'type' => 'text'
		),
	
	array(
		'type' => 'tab_end'
	),
);
