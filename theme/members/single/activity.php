<!-- .bp-sub-tabs -->
<?php  do_action( 'bp_before_member_activity_post_form' ) ?>

<?php  if ( is_user_logged_in() && bp_is_my_profile() && ( '' == bp_current_action() || 'just-me' == bp_current_action() ) ) : ?>
	<?php  locate_template( array( 'activity/post-form.php'), true ) ?>
<?php  endif; ?>

<?php  do_action( 'bp_after_member_activity_post_form' ) ?>
<?php  do_action( 'bp_before_member_activity_content' ) ?>

<div class="divider noline"></div>
<h4><span><?php  _e("Activity",'buddypress'); ?></span></h4>

<!-- <div id="activity-filter-select">
			<select>
				<option value="-1"><?php  _e( 'No Filter', 'buddypress' ) ?></option>
				<option value="activity_update"><?php  _e( 'Show Updates', 'buddypress' ) ?></option>

				<?php  if ( 'groups' != bp_current_action() ) : ?>
					<option value="new_blog_post"><?php  _e( 'Show Blog Posts', 'buddypress' ) ?></option>
					<option value="new_blog_comment"><?php  _e( 'Show Blog Comments', 'buddypress' ) ?></option>

					<?php  if ( bp_is_active( 'friends' ) ) : ?>
						<option value="friendship_accepted,friendship_created"><?php  _e( 'Show Friendship Connections', 'buddypress' ) ?></option>
					<?php  endif; ?>
				<?php  endif; ?>

				<?php  if ( bp_is_active( 'forums' ) ) : ?>
					<option value="new_forum_topic"><?php  _e( 'Show New Forum Topics', 'buddypress' ) ?></option>
					<option value="new_forum_post"><?php  _e( 'Show Forum Replies', 'buddypress' ) ?></option>
				<?php  endif; ?>

				<?php  if ( bp_is_active( 'groups' ) ) : ?>
					<option value="created_group"><?php  _e( 'Show New Groups', 'buddypress' ) ?></option>
					<option value="joined_group"><?php  _e( 'Show New Group Memberships', 'buddypress' ) ?></option>
				<?php  endif; ?>

				<?php  do_action( 'bp_member_activity_filter_options' ) ?>
			</select>
</div>
 -->

<div class="activity">
	<?php  locate_template( array( 'activity/activity-loop.php' ), true ) ?>
</div><!-- .activity -->

<?php  do_action( 'bp_after_member_activity_content' ) ?>
