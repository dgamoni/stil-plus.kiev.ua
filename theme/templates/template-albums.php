<?php
/**
 * Template Name: Gallery / Albums Template
 *
 * @package IrishMiss
 * @package Startup
 */
global $irish_framework_params;
get_header();

$layout = new miss_page_layout($layout = miss_page_layout(), $location = 'views/loops', $template = 'albums' );
$layout->set_row_class('row');
$layout->miss_render_page_layout();
get_footer();
?>