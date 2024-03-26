<?php

$service_box = array(
	'title' => 'Service Options',
	'id' => 'miss_service_meta_box',
	'pages' => array( 'service' ),
	'callback' => '',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
	/**
	 * Deprecated
	 * @since 1.5
	 */
		array(
			"name" => __( 'Default Icon', MISS_ADMIN_TEXTDOMAIN ),
			"desc" => __( 'The service icon you would like to use for current service.', MISS_ADMIN_TEXTDOMAIN ),
			"id" => "_service_default",
			"button" => "Insert Image",
			"default" => '',
			"type" => "Upload",
		),

		array(
			"name" => __( 'Selected Icon <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
			"desc" => __( 'Service icon for selected / active image.', MISS_ADMIN_TEXTDOMAIN ),
			"id" => "_service_active",
			"button" => "Insert Image",
			"default" => '',
			"type" => "Upload",
		),
		array(
			'name' => __( 'Custom Sidebar', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( "Select the custom sidebar that you'd like to be displayed on this page.<br /><br />Note:  You will need to first create a custom sidebar under the &quot;Sidebar&quot; tab in your theme's option panel before it will show up here.", MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_custom_sidebar',
			'target' => 'custom_sidebars',
			'type' => 'select'
		),
		array(
			'name' => __( 'Link to post <small>(optional)</small>', MISS_ADMIN_TEXTDOMAIN ),
			'desc' => __( "Check this option if you'd like the portfolio gallery image to link to the portfolio post instead of the jQuery lightbox image pop-up effect.", MISS_ADMIN_TEXTDOMAIN ),
			'id' => '_post',
			"options" => array( "true" => "Check to have the portfolio gallery image link to the portfolio post" ),
			'default' => '',
			'type' => 'checkbox'
		),
	)
);
return array(
	'load' => true,
	'options' => $service_box
);

?>
