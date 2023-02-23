<?php
/*
*	A SP WBC Theme Child Builder class to generate UI based on the array of params recived.
*/
namespace eo\wbc_theme_child\model;

defined( 'ABSPATH' ) || exit;

NOTE: to keep it simple we are not extending this class from the system core class from the core theme builder class. but if ever required in future then we can simply create one in the submodule that we may plan for the theme base since we do not have parent theme. it may be needed only if we ever plan to create child theme for any other popular theme.
class SP_WBC_Theme_Child_Builder {

	private static $_instance = null;

	public static function instance() {
		if ( ! isset( self::$_instance ) ) {
			self::$_instance = new self;
		}

		return self::$_instance;
	}

	private function __construct() {
		
	}

	public function init() {

		// helpers
		require_once require_once here need to add constant as defined in sp theme index class.'/application/helper/helper-WBC_THEME.php';
	}

	public static function header($args = array()) {

		add_action('wbc_theme_header', function($args) {

		}, 10, 1);

		add_action('wbc_theme_before_main', function($args) {

		}, 10, 1);
	}

	public static function menu($args = array()) {

		add_action('wbc_theme_menu', function($args) {

		}, 10, 1);
	}

	public static function sidebar($args = array()) {

		add_action('wbc_theme_sidebar', function($args) {

		}, 10, 1);
	}

	public static function left_sidebar($args = array()) {

		add_action('wbc_theme_left_sidebar', function($args) {

		}, 10, 1);
	}

	public static function right_sidebar($args = array()) {

		add_action('wbc_theme_right_sidebar', function($args) {

		}, 10, 1);
	}

	public static function footer($args = array()) {

		add_action('wbc_theme_footer', function($args) {

		}, 10, 1);
	}		
}
