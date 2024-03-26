<?php
/**
 * Register taxonomy for Vacancy
 *
 * @package MissFramework
 */
register_taxonomy('vacancy_category','testimony',array(
	'hierarchical' => true,
	'labels' => array(
		'name' => _x( 'Vacancy Categories', 'taxonomy general name', MISS_ADMIN_TEXTDOMAIN ),
		'singular_name' => _x( 'Vacancy Category', 'taxonomy singular name', MISS_ADMIN_TEXTDOMAIN ),
		'search_items' =>  __( 'Search Categories', MISS_ADMIN_TEXTDOMAIN ),
		'popular_items' => __( 'Popular Categories', MISS_ADMIN_TEXTDOMAIN ),
		'miss_items' => __( 'All Categories', MISS_ADMIN_TEXTDOMAIN ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Vacancy Category', MISS_ADMIN_TEXTDOMAIN ), 
		'update_item' => __( 'Update Vacancy Category', MISS_ADMIN_TEXTDOMAIN ),
		'add_new_item' => __( 'Add New Vacancy Category', MISS_ADMIN_TEXTDOMAIN ),
		'new_item_name' => __( 'New Vacancy Category Name', MISS_ADMIN_TEXTDOMAIN ),
		'separate_items_with_commas' => __( 'Separate Vacancy category with commas', MISS_ADMIN_TEXTDOMAIN ),
		'add_or_remove_items' => __( 'Add or remove vacancy category', MISS_ADMIN_TEXTDOMAIN ),
		'choose_from_most_used' => __( 'Choose from the most used vacancy category', MISS_ADMIN_TEXTDOMAIN )
	),
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
));
?>
