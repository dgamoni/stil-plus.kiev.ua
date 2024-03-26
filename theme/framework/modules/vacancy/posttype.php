<?php
/**
 * Vacancy Post Type
 *
 * @package MissFramework
 */
register_post_type('vacancy', array(
	'labels' => array(
		'name' => _x('Vacancy', 'post type general name', MISS_ADMIN_TEXTDOMAIN ),
		'singular_name' => _x('Vacancy', 'post type singular name', MISS_ADMIN_TEXTDOMAIN ),
		'add_new' => _x('Open Position', 'vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'add_new_item' => __('Open Vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'edit_item' => __('Edit Vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'new_item' => __('Open New Vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'view_item' => __('View Vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'search_items' => __('Search Vacancy', MISS_ADMIN_TEXTDOMAIN ),
		'not_found' =>  __('No job found', MISS_ADMIN_TEXTDOMAIN ),
		'not_found_in_trash' => __('No job found in the trash', MISS_ADMIN_TEXTDOMAIN ), 
		'parent_item_colon' => ''
	),
	'singular_label' => __('Job', MISS_ADMIN_TEXTDOMAIN ),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => true,
	'rewrite' => array( 'slug' => MISS_REWRITE_VACANCIES, 'with_front' => false ),
	'query_var' => true,
	'has_archive' => true,
	'supports' => array( 'title', 'editor', 'thumbnail' )
));
?>