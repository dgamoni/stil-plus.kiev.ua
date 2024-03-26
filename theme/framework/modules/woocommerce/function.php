<?php
/* woocomerce functions */
function miss_woocommerce_before_single_product_summary(){
	echo '<div class="row-fluid first_info">';
	echo '<div class="span5">';
	do_action( 'miss_woocommerce_before_single_product_summary' );
	echo '</div><!--.span5-->';
	echo '<div class="span7">';
}
/* woocomerce functions */
function miss_woocommerce_after_single_product_summary(){
	echo '</div><!--.span7-->';
	echo '</div><!--.row-fluid .first_info-->';
}
function miss_woocommerce_price_and_cart_holder($args=array()) {
	echo '<div class="price_and_cart_holder">';
	do_action( 'miss_woocommerce_price_and_cart_holder' );
	echo '<div class="clearboth"></div>';
	echo '</div><!--.price_and_cart_holder-->';
}

?>