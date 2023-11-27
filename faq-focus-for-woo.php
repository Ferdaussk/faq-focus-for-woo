<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bestwpdeveloper.com
 * @since             1.0
 * @package           FAQ Focus for Woo
 *
 * @wordpress-plugin
 * Plugin Name:       AAAAA1 FAQ Focus for Woo
 * Plugin URI:        https://bestwpdeveloper.com/faq-focus-for-woo/
 * Description:       Add real-time estimated shipping dates to your WooCommerce store, keeping your customers informed and satisfied with accurate delivery predictions.
 * Version:           1.0
 * Author:            Best WP Developer
 * Author URI:        https://bestwpdeveloper.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       faq-focus-for-woo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once ( plugin_dir_path(__FILE__) ) . '/inc/requires-check.php';
final class FinalQAFFWShop{
	const VERSION = '1.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		// Load translation
		add_action( 'qaffw_init', array( $this, 'qaffw_loaded_textdomain' ) );
		// qaffw_init Plugin
		add_action( 'plugins_loaded', array( $this, 'qaffw_init' ) );
		// For woocommerce install check
		if ( ! did_action( 'woocommerce/loaded' ) ) {
			add_action( 'admin_notices', 'qaffw_WooCommerce_register_required_plugins' );
			return;
		}
	}

	public function qaffw_loaded_textdomain() {
		load_plugin_textdomain( 'faq-focus-for-woo', false, basename(dirname(__FILE__)).'/languages' );
	}

	public function qaffw_init() {
		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'qaffw_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'inc/prod-ready.php' );
	}

	public function qaffw_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'faq-focus-for-woo' ),
			'<strong>' . esc_html__( 'FAQ Focus for Woo', 'faq-focus-for-woo' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'faq-focus-for-woo' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'faq-focus-for-woo') . '</p></div>', $message );
	}
}

new FinalQAFFWShop();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );