<?php
/**
 * Handles tweaks made to WooCommerce to support CoCart.
 *
 * @author   Sébastien Dumont
 * @category Classes
 * @package  CoCart\Classes
 * @since    2.1.2
 * @version  3.0.0
 * @license  GPL-2.0+
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CoCart_WooCommerce' ) ) {

	class CoCart_WooCommerce {

		/**
		 * Constructor.
		 *
		 * @access  public
		 * @since   2.1.2
		 * @version 3.0.0
		 */
		public function __construct() {
			// Removes WooCommerce filter that validates the quantity value to be an integer.
			remove_filter( 'woocommerce_stock_amount', 'intval' );

			// Validates the quantity value to be a float.
			add_filter( 'woocommerce_stock_amount', 'floatval' );

			// Force WooCommerce to accept CoCart requests when authenticating.
			add_filter( 'woocommerce_rest_is_request_to_rest_api', array( $this, 'allow_cocart_requests_wc' ) );

			// Loads cart from session.
			add_action( 'woocommerce_load_cart_from_session', array( $this, 'load_cart_from_session' ), 0 );

			// Delete user data.
			add_action( 'delete_user', array( $this, 'delete_user_data' ) );
		}

		/**
		 * Force WooCommerce to accept CoCart API requests when authenticating.
		 *
		 * @access  public
		 * @static
		 * @since   2.0.5
		 * @version 2.6.0
		 * @param   bool $request
		 * @return  bool true|$request
		 */
		public static function allow_cocart_requests_wc( $request ) {
			if ( empty( $_SERVER['REQUEST_URI'] ) ) {
				return false;
			}

			$rest_prefix = trailingslashit( rest_get_url_prefix() );
			$request_uri = esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) );

			// Check if the request is to the CoCart API endpoints.
			$cocart = ( false !== strpos( $request_uri, $rest_prefix . 'cocart/' ) );

			if ( $cocart ) {
				return true;
			}

			return $request;
		} // END allow_cocart_requests_wc()

		/**
		 * Loads guest or specific carts into session.
		 *
		 * @access  public
		 * @static
		 * @since   2.1.0
		 * @version 3.0.0
		 */
		public static function load_cart_from_session() {
			if ( ! WC()->session instanceof CoCart_Session_Handler ) {
				return;
			}

			$customer_id = strval( get_current_user_id() );

			// Load cart for guest or specific cart.
			if ( is_numeric( $customer_id ) && $customer_id < 1 ) {
				$cookie = WC()->session->get_session_cookie();

				// If cookie exists then return customer ID from it.
				if ( $cookie ) {
					$customer_id = $cookie[0];
				}

				// Check if we requested to load a specific cart.
				if ( isset( $_REQUEST['cart_key'] ) ) {
					$cart_id = $_REQUEST['cart_key'];

					// Set customer ID in session.
					$customer_id = $cart_id;
				}

				// Get cart for customer.
				$cart = WC()->session->get_cart( $customer_id );

				// Set cart for customer if not empty.
				if ( ! empty( $cart ) ) {
					WC()->session->set( 'cart', maybe_unserialize( $cart['cart'] ) );
					WC()->session->set( 'cart_totals', maybe_unserialize( $cart['cart_totals'] ) );
					WC()->session->set( 'applied_coupons', maybe_unserialize( $cart['applied_coupons'] ) );
					WC()->session->set( 'coupon_discount_totals', maybe_unserialize( $cart['coupon_discount_totals'] ) );
					WC()->session->set( 'coupon_discount_tax_totals', maybe_unserialize( $cart['coupon_discount_tax_totals'] ) );
					WC()->session->set( 'removed_cart_contents', maybe_unserialize( $cart['removed_cart_contents'] ) );

					if ( ! empty( $cart['chosen_shipping_methods'] ) ) {
						WC()->session->set( 'chosen_shipping_methods', maybe_unserialize( $cart['chosen_shipping_methods'] ) );
					}

					if ( ! empty( $cart['cart_fees'] ) ) {
						WC()->session->set( 'cart_fees', maybe_unserialize( $cart['cart_fees'] ) );
					}
				}
			}
		} // END load_cart_from_session()

		/**
		 * When a user is deleted in WordPress, delete corresponding CoCart data.
		 *
		 * @access public
		 * @since  3.0.0
		 * @param  int $user_id User ID being deleted.
		 */
		public function delete_user_data( $user_id ) {
			global $wpdb;

			// Clean up cart in session.
			$wpdb->delete(
				$wpdb->prefix . 'cocart_carts',
				array(
					'cart_key' => $user_id,
				)
			);
		} // END delete_user_data()

	} // END class

} // END if class exists.

return new CoCart_WooCommerce();
