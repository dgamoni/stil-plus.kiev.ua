<?php
/**
 * BuddyPress Template Blogs Index
 *
 * @package missframework
 */
global $irish_framework_params;
get_header();

$layout = new miss_page_layout($layout = miss_page_layout(), $location = 'views/buddypress/blogs', $type = 'index', $template = 'blogs' );
$layout->miss_render_page_layout();
get_footer();
?>