<?php
/*
 * Plugin Name: CoCart
 * Plugin URI:  https://cocart.xyz
 * Description: CoCart is a <strong>REST API for WooCommerce</strong>. It focuses on <strong>the front-end</strong> of the store to manage the shopping cart allowing developers to build a headless store.
 * Author:      Sébastien Dumont
 * Author URI:  https://sebastiendumont.com
 * Version:     2.6.0-beta.1
 * Text Domain: cart-rest-api-for-woocommerce
 * Domain Path: /languages/
 * Requires at least: 5.2
 * Requires PHP: 7.0
 * WC requires at least: 4.0.0
 * WC tested up to: 4.4.1
 *
 * @package CoCart
 */

defined( 'ABSPATH' ) || exit;


if ( ! defined( 'COCART_FILE' ) ) {
	define( 'COCART_FILE', __FILE__ );
}

// Include the main CoCart class.
if ( ! class_exists( 'CoCart', false ) ) {
	include_once( untrailingslashit( plugin_dir_path( COCART_FILE ) ) . '/includes/class-cocart.php' );
}

/**
 * Returns the main instance of CoCart and only runs if it does not already exists.
 *
 * @since   2.1.0
 * @version 2.6.0
 * @return CoCart
 */
if ( ! function_exists( 'CoCart' ) ) {
	function CoCart() {
		return CoCart::init();
	}

	CoCart();
}
