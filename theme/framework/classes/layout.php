<?php
if ( !ABSPATH ) {
    header('HTTP/1.1 403 Forbidden');
    die( __('Accedd Denied', MISS_TEXTDOMAIN) );
}

/**
 * Flexible Layout Build
 * package miss
 *
 * @since 1.6
 */
class miss_page_layout {
	protected $layout;
	protected $location;
	protected $type;
	protected $row_class;
	protected $template;
	protected $template_part;
	function __construct( $layout = 'right_sidebar', $location = 'views/containers', $type = 'content', $template = 'single' ) {
		$this->layout = $layout;
		$this->location = $location;
		$this->type = $type;
		$this->template = $template;
		$this->row_class = "row-fluid";
		$this->template_part = FRAMEWORK_DIRECTORY . '/' . $this->location . '/' . $this->type;
		if ( !file_exists( THEME_DIR . '/' . $this->template_part . '-' . $this->template . '.php' ) ) {
				$this->template = 'default';
		}
	}
	private function local_content() {
		echo '<div class="span9 primary_content '. miss_get_setting('blog_layout') .'">';
		get_template_part( $this->template_part, $this->template, $this->template );
		echo'</div>';
	}
	private function local_sidebar() {
		echo '<div class="span3 sidebar'. ( miss_get_setting( 'enable_fixed_sidebar' ) ? ' sticky' : '' ) .'">';
		get_sidebar();
		echo '</div>';
	}
	function set_row_class( $class = 'row-fluid' ) {
		$this->row_class = $class;
	}
	function miss_render_page_layout() {
		echo '<div class="' . $this->row_class . '">';
		if ( $this->layout == 'full_width' ) {
			echo '<div class="span12 primary_content '. miss_get_setting('blog_layout') .'">';
			get_template_part( $this->template_part, $this->template, $this->template );
			echo'</div>';
		} else {
			if ( $this->layout == 'left_sidebar' ) {
							$this->local_sidebar();
							$this->local_content();
			} else {
							$this->local_content();
							$this->local_sidebar();
			}
		}
		echo '</div>';
	}
}
?>
