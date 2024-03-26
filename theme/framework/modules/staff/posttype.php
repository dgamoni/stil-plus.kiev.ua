<?php
/**
 * Staff Post Type
 *
 * @package MissFramework
 */
register_post_type('staff', array(
	'labels' => array(
		'name' => _x('Staff', 'post type general name', MISS_ADMIN_TEXTDOMAIN ),
		'singular_name' => _x('Staff', 'post type singular name', MISS_ADMIN_TEXTDOMAIN ),
		'add_new' => _x('Add New', 'service', MISS_ADMIN_TEXTDOMAIN ),
		'add_new_item' => __('Add New Employee', MISS_ADMIN_TEXTDOMAIN ),
		'edit_item' => __('Edit Employee', MISS_ADMIN_TEXTDOMAIN ),
		'new_item' => __('New Employee', MISS_ADMIN_TEXTDOMAIN ),
		'view_item' => __('View Employee', MISS_ADMIN_TEXTDOMAIN ),
		'search_items' => __('Search Employee', MISS_ADMIN_TEXTDOMAIN ),
		'not_found' =>  __('No Employee found', MISS_ADMIN_TEXTDOMAIN ),
		'not_found_in_trash' => __('No Employee found in Trash', MISS_ADMIN_TEXTDOMAIN ), 
		'parent_item_colon' => ''
	),
	'singular_label' => __('Employee', MISS_ADMIN_TEXTDOMAIN ),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'menu_icon' => THEME_ADMIN_ASSETS_URI . '/images/staff.png',
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => array( 'with_front' => false ),
	'query_var' => false,
	'supports' => array( 'title', 'editor', 'thumbnail' )
));
?>