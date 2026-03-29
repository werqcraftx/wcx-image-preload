<?php
/**
 * Plugin Name: WCX Image Preload
 * Plugin URI: https://www.wordpress.org/wcx-image-preload
 * Description: A WordPress plugin for preloading images to improve Google Lighthouse scores, such as video posters.
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Tony Nguyen
 * Author URI: https://github.com/TonyNguyen137
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wcx-image-preload
 * Domain Path: /languages
 *
 * @package WCXImagePreload
 */

/**
 * Outputs a preload URL.
 *
 * @param string $url The image URL.
 */
function test_preload( $url ) {
	echo esc_url( $url );
}
