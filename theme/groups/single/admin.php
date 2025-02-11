<div class="bp-sub-tabs no-ajax">
	<ul>
		<?php  bp_group_admin_tabs(); ?>
	</ul>
</div><!-- .item-list-tabs -->
<p>&nbsp;</p>
<form action="<?php  bp_group_admin_form_action() ?>" name="group-settings-form" id="group-settings-form" class="standard-form" method="post" enctype="multipart/form-data">

<?php  do_action( 'bp_before_group_admin_content' ) ?>

<?php  /* Edit Group Details */ ?>
<?php  if ( bp_is_group_admin_screen( 'edit-details' ) ) : ?>

	<?php  do_action( 'bp_before_group_details_admin' ); ?>

	<label for="group-name"><h4><span><?php  _e( 'Group Name', 'buddypress' ) ?></span></h4></label>
	<input type="text" name="group-name" id="group-name" class="input-wrap" value="<?php  bp_group_name() ?>" />
	<label for="group-name">* <?php  _e( 'Required', 'buddypress' ) ?></label>
	<p>&nbsp;</p>
	<label for="group-desc"><h4><span><?php  _e( 'Group Description', 'buddypress' ) ?></span></h4></label>
	<textarea name="group-desc" id="group-desc" class="textarea input-wrap"><?php  bp_group_description_editable() ?></textarea>
	<label for="group-desc">* <?php  _e( 'Required', 'buddypress' ) ?></label>

	<?php  do_action( 'groups_custom_group_fields_editable' ) ?>

		<label for="group-notifiy-members"><h4><span><?php  _e( 'Notify group members of changes via email', 'buddypress' ); ?></span></h4></label>
		<div class="radio">
		<input type="radio" name="group-notify-members" value="1" /> <?php  _e( 'Yes', 'buddypress' ); ?>&nbsp;
		<input type="radio" name="group-notify-members" value="0" checked="checked" /> <?php  _e( 'No', 'buddypress' ); ?>&nbsp;
		</div>
	<p>&nbsp;</p>

	<?php  do_action( 'bp_after_group_details_admin' ); ?>

	<p><input type="submit" value="<?php  _e( 'Save Changes', 'buddypress' ) ?> &rarr;" id="save" name="save" class="button_link small_button bp_header_add_button" /></p>
	<?php  wp_nonce_field( 'groups_edit_group_details' ) ?>

<?php  endif; ?>

<?php  /* Manage Group Settings */ ?>
<?php  if ( bp_is_group_admin_screen( 'group-settings' ) ) : ?>

	<?php  do_action( 'bp_before_group_settings_admin' ); ?>

	<?php  if ( function_exists('bp_wire_install') ) : ?>

		<div class="checkbox">
			<label><input type="checkbox" name="group-show-wire" id="group-show-wire" value="1"<?php  bp_group_show_wire_setting() ?>/> <?php  _e( 'Enable comment wire', 'buddypress' ) ?></label>
		</div>

	<?php  endif; ?>

	<?php  if ( function_exists('bp_forums_is_installed_correctly') ) : ?>

		<?php  if ( bp_forums_is_installed_correctly() ) : ?>

			<div class="checkbox">
				<label><input type="checkbox" name="group-show-forum" id="group-show-forum" value="1"<?php  bp_group_show_forum_setting() ?> /> <?php  _e( 'Enable discussion forum', 'buddypress' ) ?></label>
			</div>

		<?php  endif; ?>

	<?php  endif; ?>

	<hr />

	<h4><?php  _e( 'Privacy Options', 'buddypress' ); ?></h4>

	<div class="radio">
		<label>
			<input type="radio" name="group-status" value="public"<?php  bp_group_show_status_setting('public') ?> />
			<strong><?php  _e( 'This is a public group', 'buddypress' ) ?></strong>
			<ul>
				<li><?php  _e( 'Any site member can join this group.', 'buddypress' ) ?></li>
				<li><?php  _e( 'This group will be listed in the groups directory and in search results.', 'buddypress' ) ?></li>
				<li><?php  _e( 'Group content and activity will be visible to any site member.', 'buddypress' ) ?></li>
			</ul>
		</label>

		<label>
			<input type="radio" name="group-status" value="private"<?php  bp_group_show_status_setting('private') ?> />
			<strong><?php  _e( 'This is a private group', 'buddypress' ) ?></strong>
			<ul>
				<li><?php  _e( 'Only users who request membership and are accepted can join the group.', 'buddypress' ) ?></li>
				<li><?php  _e( 'This group will be listed in the groups directory and in search results.', 'buddypress' ) ?></li>
				<li><?php  _e( 'Group content and activity will only be visible to members of the group.', 'buddypress' ) ?></li>
			</ul>
		</label>

		<label>
			<input type="radio" name="group-status" value="hidden"<?php  bp_group_show_status_setting('hidden') ?> />
			<strong><?php  _e( 'This is a hidden group', 'buddypress' ) ?></strong>
			<ul>
				<li><?php  _e( 'Only users who are invited can join the group.', 'buddypress' ) ?></li>
				<li><?php  _e( 'This group will not be listed in the groups directory or search results.', 'buddypress' ) ?></li>
				<li><?php  _e( 'Group content and activity will only be visible to members of the group.', 'buddypress' ) ?></li>
			</ul>
		</label>
	</div>

	<?php  do_action( 'bp_after_group_settings_admin' ); ?>

	<p><input type="submit" value="<?php  _e( 'Save Changes', 'buddypress' ) ?> &rarr;" id="save" name="save" class="button_link small_button bp_header_add_button" /></p>
	<?php  wp_nonce_field( 'groups_edit_group_settings' ) ?>

<?php  endif; ?>

<?php  /* Group Avatar Settings */ ?>
<?php  if ( bp_is_group_admin_screen( 'group-avatar' ) ) : ?>

	<?php  if ( 'upload-image' == bp_get_avatar_admin_step() ) : ?>

			<p><?php  _e("Upload an image to use as an avatar for this group. The image will be shown on the main group page, and in search results.", 'buddypress') ?></p>

			<p>
				<input type="file" name="file" id="file" />
				<input type="submit" name="upload" id="upload" value="<?php  _e( 'Upload Image', 'buddypress' ) ?>" />
				<input type="hidden" name="action" id="action" value="bp_avatar_upload" />
			</p>

			<?php  if ( bp_get_group_has_avatar() ) : ?>
				<p><?php  _e( "If you'd like to remove the existing avatar but not upload a new one, please use the delete avatar button.", 'buddypress' ) ?></p>

				<div class="generic-button" id="delete-group-avatar-button">
					<a class="btn1" href="<?php  bp_group_avatar_delete_link() ?>" title="<?php  _e( 'Delete Avatar', 'buddypress' ) ?>"><?php  _e( 'Delete Avatar', 'buddypress' ) ?></a>
				</div>
			<?php  endif; ?>

			<?php  wp_nonce_field( 'bp_avatar_upload' ) ?>

	<?php  endif; ?>

	<?php  if ( 'crop-image' == bp_get_avatar_admin_step() ) : ?>

		<h3><?php  _e( 'Crop Avatar', 'buddypress' ) ?></h3>

		<img src="<?php  bp_avatar_to_crop() ?>" id="avatar-to-crop" class="avatar" alt="<?php  _e( 'Avatar to crop', 'buddypress' ) ?>" />

		<div id="avatar-crop-pane">
			<img src="<?php  bp_avatar_to_crop() ?>" id="avatar-crop-preview" class="avatar" alt="<?php  _e( 'Avatar preview', 'buddypress' ) ?>" />
		</div>

		<input type="submit" name="avatar-crop-submit" id="avatar-crop-submit" value="<?php  _e( 'Crop Image', 'buddypress' ) ?>" class="button_link small_button" />

		<input type="hidden" name="image_src" id="image_src" value="<?php  bp_avatar_to_crop_src() ?>" />
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />

		<?php  wp_nonce_field( 'bp_avatar_cropstore' ) ?>

	<?php  endif; ?>

<?php  endif; ?>

<?php  /* Manage Group Members */ ?>

<?php  if ( bp_is_group_admin_screen( 'manage-members' ) ) : ?>

	<?php  do_action( 'bp_before_group_manage_members_admin' ); ?>
	
	<div class="bp-widget manage-group manage-group-admins">
	
		<h4 class="manage-group-title"><span><?php  _e( 'Administrators', 'buddypress' ); ?></span></h4>

		<?php  if ( bp_has_members( '&include='. bp_group_admin_ids() ) ) : ?>
		
		<ul id="admins-list" class="item-list dir-list single-line>">
			
			<?php  while ( bp_members() ) : bp_the_member(); ?>
			<li>
			
				<div class="item-header">
					<div class="item-avatar">
						<?php  echo bp_core_fetch_avatar( array( 'item_id' => bp_get_member_user_id(), 'type' => 'thumb', 'width' => 50, 'height' => 50, 'alt' => __( 'Profile picture of %s', 'buddypress' ) ) ); ?>
					</div><!-- .item-avatar -->
					<div class="item-title">
						<a href="<?php  bp_member_permalink(); ?>"> <?php  bp_member_name(); ?></a>
					</div><!-- .item-title -->
				</div><!-- .item-header -->
				
				<div class="item-action">
					<a class="button_link small_button" href="<?php  bp_group_member_demote_link( bp_get_member_user_id() ) ?>"><?php  _e( 'Downgrade to Member', 'buddypress' ) ?></a>
				</div><!-- .item-action -->
	
			</li>
			<?php  endwhile; ?>
		
		</ul>
		
		<p>&nbsp;</p>
		
		<?php  endif; ?>

	</div><!-- .manage-group -->
	
	<?php  if ( bp_group_has_moderators() ) : ?>
	
	<div class="bp-widget manage-group manage-group-mods">
		
		<h4 class="manage-group-title"><span><?php  _e( 'Moderators', 'buddypress' ) ?></span></h4>		
			
		<?php  if ( bp_has_members( '&include=' . bp_group_mod_ids() ) ) : ?>
			<ul id="mods-list" class="item-list dir-list">
				
				<?php  while ( bp_members() ) : bp_the_member(); ?>					
				<li>
					<div class="item-header">
						<div class="item-avatar">
							<?php  echo bp_core_fetch_avatar( array( 'item_id' => bp_get_member_user_id(), 'type' => 'thumb', 'width' => 50, 'height' => 50, 'alt' => __( 'Profile picture of %s', 'buddypress' ) ) ) ?>
						</div><!-- .item-avatar -->
						<div class="item-title">
							<a href="<?php  bp_member_permalink(); ?>"> <?php  bp_member_name(); ?></a>
						</div><!-- .item-title -->
					</div><!-- .item-header -->
					
					<div class="item-action">
						<a href="<?php  bp_group_member_promote_admin_link( array( 'user_id' => bp_get_member_user_id() ) ) ?>" class="button confirm mod-promote-to-admin" title="<?php  _e( 'Promote to Admin', 'buddypress' ); ?>"><?php  _e( 'Promote to Admin', 'buddypress' ); ?></a>
						<a class="button confirm mod-demote-to-member" href="<?php  bp_group_member_demote_link( bp_get_member_user_id() ) ?>"><?php  _e( 'Downgrade to Member', 'buddypress' ) ?></a>	
					</div><!-- .item-action -->
				</li>	
				<?php  endwhile; ?>			

			</ul>

			<p>&nbsp;</p>
			
		<?php  endif; ?>
		
	</div><!-- .manage-group -->
	
	<?php  endif ?>

	<div class="bp-widget manage-group manage-group-members">
	
		<h4 class="manage-group-title"><span><?php  _e("Members", "buddypress"); ?></span></h4>

		<?php  if ( bp_group_has_members( 'per_page=15&exclude_banned=false' ) ) : ?>

			<?php  if ( bp_group_member_needs_pagination() ) : ?>

			<div class="pagination bp-pagination no-ajax">

				<h4 id="member-count" class="pag-count"><span>
					<?php  bp_group_member_pagination_count() ?>
				</span></h4>

				<div id="member-admin-pagination" class="pagination-links">
					<?php  bp_group_member_admin_pagination() ?>
				</div>

			</div><!-- .bp-pagination -->

			<?php  endif; ?>

		<ul id="members-list" class="item-list dir-list single-line">
			<?php  while ( bp_group_members() ) : bp_group_the_member(); ?>

			<li class="<?php  bp_group_member_css_class(); ?>">

				<div class="item-header">
				
					<div class="item-avatar">
						<?php  bp_group_member_avatar_mini() ?>
					</div>
				
					<div class="item-title">
						<?php  bp_group_member_link() ?>
						<?php  if ( bp_get_group_member_is_banned() ) _e( '(banned)', 'buddypress'); ?>
					</div>
					
				</div><!-- .item-header -->

				<div class="item-action">

					<?php  if ( bp_get_group_member_is_banned() ) : ?>

						<a href="<?php  bp_group_member_unban_link() ?>" class="button confirm member-unban" title="<?php  _e( 'Unban this member', 'buddypress' ) ?>"><?php  _e( 'Remove Ban', 'buddypress' ); ?></a>

					<?php  else : ?>

						<a href="<?php  bp_group_member_ban_link() ?>" class="button confirm member-ban" title="<?php  _e( 'Kick and ban this member', 'buddypress' ); ?>"><?php  _e( 'Kick &amp; Ban', 'buddypress' ); ?></a>
						<a href="<?php  bp_group_member_promote_mod_link() ?>" class="button confirm member-promote-to-mod" title="<?php  _e( 'Promote to Mod', 'buddypress' ); ?>"><?php  _e( 'Promote to Mod', 'buddypress' ); ?></a>
						<a href="<?php  bp_group_member_promote_admin_link() ?>" class="button confirm member-promote-to-admin" title="<?php  _e( 'Promote to Admin', 'buddypress' ); ?>"><?php  _e( 'Promote to Admin', 'buddypress' ); ?></a>

					<?php  endif; ?>

						<a href="<?php  bp_group_member_remove_link() ?>" class="button confirm" title="<?php  _e( 'Remove this member', 'buddypress' ); ?>"><?php  _e( 'Remove from group', 'buddypress' ); ?></a>

					<?php  do_action( 'bp_group_manage_members_admin_item' ); ?>

				</div><!-- .item-action -->
			</li>

			<?php  endwhile; ?>
		
		</ul>
		<p>&nbsp;</p>

		<?php  else: ?>

			<div id="message" class="info_box">
				<p><?php  _e( 'This group has no members.', 'buddypress' ); ?></p>
			</div>

		<?php  endif; ?>

	</div><!-- .manage-group -->

	<?php  do_action( 'bp_after_group_manage_members_admin' ); ?>

<?php  endif; ?>

<?php  do_action( 'groups_custom_edit_steps' ) // Allow plugins to add custom group edit screens ?>

<?php  /* Delete Group Option */ ?>
<?php  if ( bp_is_group_admin_screen( 'delete-group' ) ) : ?>

	<?php  do_action( 'bp_before_group_delete_admin' ); ?>

	<div id="message" class="warning_box">
		<p><?php  _e( 'WARNING: Deleting this group will completely remove ALL content associated with it. There is no way back, please be careful with this option.', 'buddypress' ); ?></p>
	</div>

	<input class="pull-left" type="checkbox" name="delete-group-understand" id="delete-group-understand" value="1" onclick="if(this.checked) { document.getElementById('delete-group-button').disabled = ''; } else { document.getElementById('delete-group-button').disabled = 'disabled'; }" />&nbsp;
	<label for="delete-group-understand" class="pull-left"><?php  _e( 'I understand the consequences of deleting this group.', 'buddypress' ); ?></label>

	<?php  do_action( 'bp_after_group_delete_admin' ); ?>

	<div class="divider small"></div>
	<div class="submit">
		<input type="submit" disabled="disabled" value="<?php  _e( 'Delete Group', 'buddypress' ) ?>" id="delete-group-button" name="delete-group-button" />
	</div>

	<input type="hidden" name="group-id" id="group-id" value="<?php  bp_group_id() ?>" />

	<?php  wp_nonce_field( 'groups_delete_group' ) ?>

<?php  endif; ?>

<?php  /* This is important, don't forget it */ ?>
<input type="hidden" name="group-id" id="group-id" value="<?php  bp_group_id() ?>" />

<?php  do_action( 'bp_after_group_admin_content' ) ?>

</form>

