<?php
/**
 * Comments Template
 *
 * @package IrishMiss
 * @package Radiostation
 */
	if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
		die( __( 'Please do not load this page directly.', MISS_TEXTDOMAIN ) );
	if ( !post_type_supports( get_post_type(), 'comments' ) || ( !have_comments() && !comments_open() && !pings_open() ) )
		return;
	if ( post_password_required() ) : ?>
		<h3 class="comments-header"><?php _e( 'Password Protected', MISS_TEXTDOMAIN ); ?></h3>
		<p class="alert password-protected">
			<?php _e( 'Enter the password to view comments.', MISS_TEXTDOMAIN ); ?>
		</p><!-- .alert .password-protected -->
		<?php return; ?>
	<?php endif; ?>
<?php if ( have_comments() ) : ?>
	<div id="comments">
		<?php if( apply_atomic( 'post_comment_styles', miss_get_setting( 'post_comment_styles' ) ) == 'tab' ) : ?>
			<?php miss_comment_tab(); ?>
		<?php else : ?>
			<?php miss_comment_list(); ?>
		<?php endif; ?>
	</div><!-- #comments -->
<?php endif; ?>
<?php comment_form(); ?>
<?php miss_after_comments(); ?>
