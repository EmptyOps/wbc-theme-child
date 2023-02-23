<?php
/*
*	A SP WBC Theme Child Builder OceanWP class to generate UI based on the array of params recived.
*/
namespace eo\wbc_theme_child\model;

defined( 'ABSPATH' ) || exit;

NOTE: to keep it simple we are not extending this class from the system core class from the core theme builder class. but if ever required in future then we can simply create one in the submodule that we may plan for the theme base since we do not have parent theme. it may be needed only if we ever plan to create child theme for any other popular theme.
class SP_WBC_Theme_Child_Builder_OceanWP extends \eo\wbc_theme_child\model\SP_WBC_Theme_Child_Builder {

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

		parent::init();


		s: question init ma $args pass karvanu nai kidhelu hatu but function call ma usee thay chhe so check karavanu 
		self::header($args);

		self::menu($args);

		self::sidebar($args);
		
		self::left_sidebar($args);

		self::right_sidebar($args);

		self::footer($args);

	}

	public static function header($args = array()) {

		add_action('ocean_before_main', function() {

			do_action('wbc_theme_before_main', null);

		});

		parent::header($args);
	}

	public static function menu($args = array()) {

		parent::menu($args);
	}

	public static function sidebar($args = array()) {

		parent::sidebar($args);
	}

	public static function left_sidebar($args = array()) {

		parent::left_sidebar($args);
	}

	public static function right_sidebar($args = array()) {

		parent:;right_sidebar($args);
	}

	public static function footer($args = array()) {

		parent::footer($args);
	}		
}
