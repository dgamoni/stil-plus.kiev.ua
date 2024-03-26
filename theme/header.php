<?php
/**
 * Header Template
 *
 * @package IrishMiss
 * @package Startup
 */
?><!DOCTYPE html>
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php print miss_document_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <meta property="og:title" content="<?php print miss_document_title(); ?>" />
  <meta property="og:url" content="<?php if (is_home()) {print site_url();} else {print get_permalink();} ?>" />
<?php miss_head(); ?>
<?php wp_head(); ?>
<!-- toodoo-key: mvr0ZNPhNC6JXpRdy8ssd -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<script type="text/javascript">
  VK.init({apiId: 4572954, onlyWidgets: true});
</script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ru'}
</script>
</head>

<body class="<?php miss_body_class(); ?>">
  <?php if( ( miss_get_setting( 'jpreloader' ) ) ) : ?>
      <div id="jpreOverlay" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9999999;"><div id="jpreSlide" style="position: absolute; z-index: 9999999; top: 35%; left: 25%;"></div><div id="jpreLoader" style="position: absolute; z-index: 9999999; top: 50%; left: 36%;"><div id="jpreBar" style="width: 100%; height: 100%;"></div><div class="im-rogger1"></div><div class="im-rogger2"></div><div id="jprePercentage" style="position: relative; height: 100%;font-size: 14px;"></div><div id="jpreButton" style="position: relative; height: 100%; display: none;">Start!</div></div></div>
<?php endif; ?>
  <div class="page-body <?php echo ( miss_get_setting( 'layout_type' ) == "boxed" ) ? ' container' : ''; ?>  ">
<div style="float: right;">
<div class="vk-button"><div id="vk_like"></div><script type="text/javascript">VK.Widgets.Like("vk_like", {height: 20, type: "mini"});</script></div></td>
</div>
<div style="float: right; width: 7.5%;">
<div class="google-button"><g:plusone size="medium"></g:plusone></div></td>
</div>
<div style="float: right;  width: 10%;">
<div class="fb-button"><div class="fb-like" data-href="http://www.stil-plus.kiev.ua/" data-send="false" data-layout="button_count" data-width="45" data-show-faces="true"></div></div></td>
</div>

<?php miss_before_header(); ?>   
  <?php miss_header(); ?>
  <div class="page-inner" >
        <?php miss_after_header(); ?>
         <?php miss_main_content_start(); ?>

