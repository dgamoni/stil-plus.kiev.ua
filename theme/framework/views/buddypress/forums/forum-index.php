<?php do_action( 'bp_before_directory_forums_content' ) ?>
<div class="buddypress forum">
	<div id="bp-content" class="forum-inner">
		<h3>
			<?php _e( 'Group Forums Directory', 'buddypress' ) ?><?php  if ( is_user_logged_in() ) : ?> &nbsp;<a class="button_link small_button bp_header_add_button" href="#new-topic" id="new-topic-button"><?php  _e( 'New Topic', 'buddypress' ) ?></a><?php  endif; ?>
		</h3>
		<div id="new-topic-post">
			<div class="divider noline"></div>
				<?php  if ( is_user_logged_in() ) : ?>

					<?php  if ( bp_has_groups( 'user_id=' . bp_loggedin_user_id() . '&type=alphabetical&max=100&per_page=100' ) ) : ?>

						<form action="" method="post" id="forum-topic-form" class="standard-form">

							<?php  do_action( 'groups_forum_new_topic_before' ) ?>

							<a name="post-new"></a>
							<h5><?php  _e( 'Post a New Topic:', 'buddypress' ) ?></h5>

							<label><?php  _e( 'Title:', 'buddypress' ) ?></label>
							<input type="text" name="topic_title" class="input-wrap" id="topic_title" value="" />

							<label><?php  _e( 'Content:', 'buddypress' ) ?></label>
							<textarea name="topic_text" id="topic_text" class="textarea input-wrap"></textarea>

							<label><?php  _e( 'Tags (comma separated):', 'buddypress' ) ?></label>
							<input type="text" name="topic_tags" id="topic_tags" class="input-wrap" value="" />

							<label><?php  _e( 'Post In Group Forum:', 'buddypress' ) ?></label>
							<select id="topic_group_id" name="topic_group_id">
								<?php  while ( bp_groups() ) : bp_the_group(); ?>
									<?php  if ( 'public' == bp_get_group_status() ) : ?>
										<option value="<?php  bp_group_id() ?>"><?php  bp_group_name() ?></option>
									<?php  endif; ?>
								<?php  endwhile; ?>
							</select>

							<?php  do_action( 'groups_forum_new_topic_after' ) ?>
							<p></p>
							<div class="submit">
								<input type="submit" name="submit_topic" id="submit" class="button_link small_button" value="<?php  _e( 'Post Topic', 'buddypress' ) ?>" />
								<input type="button" name="submit_topic_cancel" id="submit_topic_cancel" class="button_link small_button" value="<?php  _e( 'Cancel', 'buddypress' ) ?>" />
							</div>

							<?php  wp_nonce_field( 'bp_forums_new_topic' ) ?>

						</form>

					<?php  else : ?>

						<div id="message" class="info">
							<p><?php  printf( __( "You are not a member of any groups so you don't have any group forums you can post in. To start posting, first find a group that matches the topic subject you'd like to start. If this group does not exist, why not <a href='%s'>create a new group</a>? Once you have joined or created the group you can post your topic in that group's forum.", 'buddypress' ), site_url( BP_GROUPS_SLUG . '/create/' ) ) ?></p>
						</div>

					<?php  endif; ?>

				<?php  endif; ?>
			</div>

		<form action="" method="post" id="forums-directory-form" class="dir-form">

			<div id="item-nav" class="clearfix">
			  <div class="item-list-tabs no-ajax">
				<ul>
					<li class="selected" id="forums-all"><?php  printf( __( 'All Topics <span class="badge">%s</span>', 'buddypress' ), bp_get_forum_topic_count() ) ?></li>

					<?php  if ( is_user_logged_in() && bp_get_forum_topic_count_for_user( bp_loggedin_user_id() ) ) : ?>
						<li id="forums-personal"><?php printf( __( 'My Topics <span class="badge">%s</span>', 'buddypress' ), bp_get_forum_topic_count_for_user( bp_loggedin_user_id() ) ) ?></li>
					<?php  endif; ?>

					<?php  do_action( 'bp_forums_directory_group_types' ) ?>

<!-- 					<li id="forums-order-select" class="last filter">

						<?php  _e( 'Order By:', 'buddypress' ) ?>
						<select>
							<option value="active"><?php  _e( 'Last Active', 'buddypress' ) ?></option>
							<option value="popular"><?php  _e( 'Most Posts', 'buddypress' ) ?></option>
							<option value="unreplied"><?php  _e( 'Unreplied', 'buddypress' ) ?></option>

							<?php  do_action( 'bp_forums_directory_order_options' ) ?>
						</select>
					</li>
 -->				</ul>
			  </div>
			</div>

			<div id="forums-dir-list" class="forums dir-list">
				<?php  locate_template( array( 'forums/forums-loop.php' ), true ) ?>
			</div>

			<?php  do_action( 'bp_directory_forums_content' ) ?>

			<?php  wp_nonce_field( 'directory_forums', '_wpnonce-forums-filter' ) ?>

			<?php  do_action( 'bp_after_directory_forums_content' ) ?>

		</form>

	</div><!-- #content -->
</div><!-- #container -->
