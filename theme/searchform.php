<form method="get" class="search-form" action="<?php echo home_url(); ?>/">
	<div class="row-fluid relative">
		<fieldset>
			<input type="text" name="s" class="span12 search-input" onfocus="if(this.value=='<?php _e( 'To search type and hit enter', MISS_TEXTDOMAIN ); ?>')this.value='';" data-onblur="if(this.value=='')this.value='<?php _e( 'To search type and hit enter', MISS_TEXTDOMAIN ); ?>';" value="<?php _e( 'To search type and hit enter', MISS_TEXTDOMAIN ); ?>" speech x-webkit-speech onwebkitspeechchange="this.value=='';" />
			<i class="fa-icon-search add_to_last textfield im-has_icon_colour"></i>
		</fieldset>
	</div>
</form>
