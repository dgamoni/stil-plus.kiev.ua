<?php
/**
 * Template Name: Portfolio Template
 *
 * @package IrishMiss
 * @package Startup
 */
global $irish_framework_params;
get_header();

$layout = new miss_page_layout($layout = miss_page_layout(), $location = 'views/loops', $template = 'works' );
$layout->miss_render_page_layout();
get_footer();
?>