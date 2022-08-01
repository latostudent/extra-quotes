<?php

/**
 *
 * @since 0.0.1
 * @package lato_extra_quotes
 *
 * @wordpress-plugin
 * Plugin Name:     Extra Quotes
 * Description:     Te permite agregar citas adicionales de tus entradas.
 * Version:         0.0.1
 * Author:          Carlos La Torre
 * Author URI:      https://latodev.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     lato_extra_quotes
 * Domain Path:     /lang
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access not permitted.' );
}

if ( ! class_exists( 'lato_extra_quotes' ) ) {

	/*
	 * main lato_extra_quotes class
	 *
	 * @class lato_extra_quotes
	 * @since 0.0.1
	 */
	class lato_extra_quotes {

		/*
		 * lato_extra_quotes plugin version
		 *
		 * @var string
		 */
		public $version = '4.7.5';

		/**
		 * The single instance of the class.
		 *
		 * @var lato_extra_quotes
		 * @since 0.0.1
		 */
		protected static $instance = null;

		/**
		 * Main lato_extra_quotes instance.
		 *
		 * @since 0.0.1
		 * @static
		 * @return lato_extra_quotes - main instance.
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * lato_extra_quotes class constructor.
		 */
		public function __construct() {
			$this->load_plugin_textdomain();
			$this->define_constants();
			$this->includes();
			$this->define_actions();
		}

		public function load_plugin_textdomain() {
			load_plugin_textdomain( 'lato-link-repair', false, basename( dirname( __FILE__ ) ) . '/lang/' );
		}

		/**
		 * Cargar archivos del directorio includes
		 */
		public function includes() {

			require_once __DIR__ . '/includes/includes.php';
			require_once __DIR__ . '/includes/meta-field.php';
			require_once __DIR__ . '/includes/register-shortcode.php';
		}

		/**
		 * Directorio del plugin
		 *
		 * @return string
		 */
		public function plugin_path() {
			return untrailingslashit( plugin_dir_path( __FILE__ ) );
		}


		/**
		 * Define lato_extra_quotes constants
		 */
		private function define_constants() {
			define( 'LATO_EXTRA_QUOTES_PLUGIN_FILE', __FILE__ );
			define( 'LATO_EXTRA_QUOTES_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
			define( 'LATO_EXTRA_QUOTES_VERSION', $this->version );
			define( 'LATO_EXTRA_QUOTES_PATH', $this->plugin_path() );
		}

		/**
		 * Define lato_extra_quotes actions
		 */
		public function define_actions() {
			//
		}

		/**
		 * Define lato_extra_quotes menus
		 */
		public function define_menus() {
            //
		}
	}

	$lato_extra_quotes = new lato_extra_quotes();
}
