<?php  get_header() ?>

	<div id="content">
		<div class="padder">

			<?php  do_action( 'bp_before_member_plugin_template' ) ?>

			<div id="item-header">
				<?php  locate_template( array( 'members/single/member-header.php' ), true ) ?>
			</div>

			<div id="item-nav">
				<div class="item-list-tabs no-ajax" id="object-nav">
					<ul>
						<?php  bp_get_displayed_user_nav() ?>

						<?php  do_action( 'bp_members_directory_member_types' ) ?>
					</ul>
				</div>
			</div>

			<div id="item-body" class="clearfix">

				<div class="item-list-tabs no-ajax" id="subnav">
					<ul>
						<?php  bp_get_options_nav() ?>
					</ul>
				</div>

				<?php  do_action( 'bp_template_content' ) ?>

				<?php  do_action( 'bp_directory_members_content' ) ?>

			</div><!-- #item-body -->

			<?php  do_action( 'bp_after_member_plugin_template' ) ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php  locate_template( array( 'sidebar.php' ), true ) ?>

	<?php  do_action( 'bp_after_member_plugin_template' ) ?>

<?php  get_footer() ?>
