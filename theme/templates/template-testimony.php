<?php
/**
 * Testimonials Loop
 *
 * Template Name: Testimony - List
 * @package IrishMiss
 * @package Startup
 */
get_header();

global $irish_framework_params;

$list_layout = Array(
	'blog_layout' => 'blog_layout7',
	'main_class' => 'post_list blog_layout7',
	'post_class' => 'post_list_module',
	'content_class' => 'post_list_content',
	'img_class' => 'post_list_image has_preview'
);

$irish_framework_params->layout['blog'] = $list_layout;
?>
<div class="page-wrap" class="clearfix">
	<div id="main">
<?php
$tagline = get_post_meta( get_the_ID(), 'app_pagetagline', true );
$post_type = "partners";
$posts = get_posts( $args );
$paged = miss_get_page_query();
$cat = get_post_meta( get_the_ID(), 'portfolio_term', true );
$args = array(
    'post_type' => 'testimony',
    'paged' => $paged
);
$wp_query = new WP_Query();
$wp_query->query( $args );
global $wp_query;
get_template_part( 'loop', 'loop' );
?>
	</div>
	<?php miss_after_main(); ?>
</div>
<?php
get_footer();
?>