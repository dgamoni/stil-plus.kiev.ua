<?php  do_action( 'bp_before_profile_edit_content' ) ?>

<?php  if ( bp_has_profile( 'profile_group_id=' . bp_get_current_profile_group_id() ) ) : while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

<form action="<?php  bp_the_profile_group_edit_form_action() ?>" method="post" id="profile-edit-form" class="standard-form <?php  bp_the_profile_group_slug() ?>">

	<?php  do_action( 'bp_before_profile_field_content' ) ?>

		<h4><?php  printf( __( "Editing '%s' Profile Group", "buddypress" ), bp_get_the_profile_group_name() ); ?></h4>

		<ul class="button-nav">
			<?php  bp_profile_group_tabs(); ?>
		</ul>

		<div class="clear"></div>

		<?php  while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

			<div<?php  bp_field_css_class( 'editfield' ) ?>>

				<?php  if ( 'textbox' == bp_get_the_profile_field_type() ) : ?>

					<label for="<?php  bp_the_profile_field_input_name() ?>"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></label>
					<input type="text" name="<?php  bp_the_profile_field_input_name() ?>" id="<?php  bp_the_profile_field_input_name() ?>" class="input-wrap" value="<?php  bp_the_profile_field_edit_value() ?>" />

				<?php  endif; ?>

				<?php  if ( 'textarea' == bp_get_the_profile_field_type() ) : ?>

					<label for="<?php  bp_the_profile_field_input_name() ?>"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></label>
					<textarea rows="5" cols="40" class="textarea input-wrap" name="<?php  bp_the_profile_field_input_name() ?>" id="<?php  bp_the_profile_field_input_name() ?>"><?php  bp_the_profile_field_edit_value() ?></textarea>

				<?php  endif; ?>

				<?php  if ( 'selectbox' == bp_get_the_profile_field_type() ) : ?>

					<label for="<?php  bp_the_profile_field_input_name() ?>"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></label>
					<select name="<?php  bp_the_profile_field_input_name() ?>" id="<?php  bp_the_profile_field_input_name() ?>">
						<?php  bp_the_profile_field_options() ?>
					</select>

				<?php  endif; ?>

				<?php  if ( 'multiselectbox' == bp_get_the_profile_field_type() ) : ?>

					<label for="<?php  bp_the_profile_field_input_name() ?>"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></label>
					<select name="<?php  bp_the_profile_field_input_name() ?>" id="<?php  bp_the_profile_field_input_name() ?>" multiple="multiple">
						<?php  bp_the_profile_field_options() ?>
					</select>

				<?php  endif; ?>

				<?php  if ( 'radio' == bp_get_the_profile_field_type() ) : ?>

					<div class="radio">
						<span class="label"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></span>

						<?php  bp_the_profile_field_options() ?>

						<?php  if ( !bp_get_the_profile_field_is_required() ) : ?>
							<a class="clear-value" href="javascript:clear( '<?php  bp_the_profile_field_input_name() ?>' );"><?php  _e( 'Clear', 'buddypress' ) ?></a>
						<?php  endif; ?>
					</div>

				<?php  endif; ?>

				<?php  if ( 'checkbox' == bp_get_the_profile_field_type() ) : ?>

					<div class="checkbox">
						<span class="label"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></span>

						<?php  bp_the_profile_field_options() ?>
					</div>

				<?php  endif; ?>

				<?php  if ( 'datebox' == bp_get_the_profile_field_type() ) : ?>

					<div class="datebox">
						<label for="<?php  bp_the_profile_field_input_name() ?>_day"><?php  bp_the_profile_field_name() ?> <?php  if ( bp_get_the_profile_field_is_required() ) : ?><?php  _e( '(required)', 'buddypress' ) ?><?php  endif; ?></label>

						<select name="<?php  bp_the_profile_field_input_name() ?>_day" id="<?php  bp_the_profile_field_input_name() ?>_day">
							<?php  bp_the_profile_field_options( 'type=day' ) ?>
						</select>

						<select name="<?php  bp_the_profile_field_input_name() ?>_month" id="<?php  bp_the_profile_field_input_name() ?>_month">
							<?php  bp_the_profile_field_options( 'type=month' ) ?>
						</select>

						<select name="<?php  bp_the_profile_field_input_name() ?>_year" id="<?php  bp_the_profile_field_input_name() ?>_year">
							<?php  bp_the_profile_field_options( 'type=year' ) ?>
						</select>
					</div>

				<?php  endif; ?>

				<?php  do_action( 'bp_custom_profile_edit_fields' ) ?>

				<p class="description"><?php  bp_the_profile_field_description() ?></p>
			</div>

		<?php  endwhile; ?>

	<?php  do_action( 'bp_after_profile_field_content' ) ?>

	<div class="submit">
		<input type="submit" name="profile-group-edit-submit" id="profile-group-edit-submit" class="button_link small_button" value="<?php  _e( 'Save Changes', 'buddypress' ) ?> " />
	</div>

	<input type="hidden" name="field_ids" id="field_ids" value="<?php  bp_the_profile_group_field_ids() ?>" />
	<?php  wp_nonce_field( 'bp_xprofile_edit' ) ?>

</form>

<?php  endwhile; endif; ?>

<?php  do_action( 'bp_after_profile_edit_content' ) ?>
