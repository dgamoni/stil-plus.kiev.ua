<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     1.6.6
 */

global $product, $woocommerce_loop;
// Ensure visibilty
if ( !$product )
	return;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
$miss_woocommerce_columns = miss_get_setting( 'store_columns' ) ? miss_get_setting( 'store_columns' ) : '3';
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', $miss_woocommerce_columns );

// Store loop count we're currently on
if ( empty( $woocommerce_loop['columns_in_row'] ) )
	$woocommerce_loop['columns_in_row'] = 1;
	
// Ensure visibilty
if ( ! $product->is_visible() )
	return;

//echo $woocommerce_loop;
// Increase loop count
$woocommerce_loop['loop']++;
?>
<div class="span<?php echo ( 12 / $woocommerce_loop['columns'] ); ?> product_item <?php
	if ( $woocommerce_loop['loop'] % $woocommerce_loop['columns'] == 0 )
		echo 'last';
	elseif ( ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 )
		echo 'first';
	?>">

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="frame">
		<div class="wrap">
			<a href="<?php the_permalink(); ?>">
				<?php
					/**
					 * woocommerce_before_shop_loop_item_title hook
					 *
					 * @hooked woocommerce_show_product_loop_sale_flash - 10
					 * @hooked woocommerce_template_loop_product_thumbnail - 10
					 */
					do_action( 'woocommerce_before_shop_loop_item_title' );
				?>
			</a>


				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<p>
				<?php
				echo miss_excerpt( get_the_excerpt(), 80, '' );
/*
				ob_start('miss_raw_excerpt');
				the_excerpt();
				ob_end_flush();
*/
				?>
				</p>







				<?php
					/**
					 * woocommerce_after_shop_loop_item_title hook
					 *
					 * @hooked woocommerce_template_loop_price - 10
					 */
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
		</div>
	</div>
	<div class="bottom_bulk_box_field">
		<div class="box row-fluid">
			<div class="span6">
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			</div>
			<div class="span6">
				<a href="<?php the_permalink(); ?>" class="button more_info_button">
					<?php echo __('More info', MISS_TEXTDOMAIN) ?>
				</a>
			</div>
		</div>
	</div>

</div>

<?php
$woocommerce_loop['columns_in_row']++;
?>