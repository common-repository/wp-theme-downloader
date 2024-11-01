<?php
/**
 * Plugin Name: WP Theme Download – Easiest Plugin for WordPress Theme Download
 * Version:     1.0.0
 * Plugin URI:  https://wordpress.org/support/plugin/wp-theme-downloader/
 * Author:      Bhupender Singh
 * Author URI:  http://www.spraynt.com/
 * Text Domain: wp-theme-downloader
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: Download any themes ZIP files directly from your admin dashboard without using FTP by just one click!.
 *
 * Compatible with WordPress 4.6 through 5.0.3+.
 *
 * =>> Read the accompanying readme.txt file for instructions and documentation.
 * =>> Also, visit the plugin's homepage for additional information and updates.
 * =>> Or visit: https://wordpress.org/support/plugin/wp-theme-downloader/
 *
 * @package Wp_Theme_Downloader
 * @author  Bhupender Singh
 * @version 1.0.0
 */

/*
	Copyright (c) 2013-2018 by BhupenderSingh

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

defined( 'ABSPATH' ) or die();

if ( ! class_exists( 'b2s_WpThemeDownloader' ) ) :

if ( ! defined( 'WP_THEME_DOWNLOADER_PATH' ) ) {
	define( 'WP_THEME_DOWNLOADER_PATH', dirname( __FILE__ ) );
}

if ( ! defined( 'WP_THEME_DOWNLOADER_URL' ) ) {
	define( 'WP_THEME_DOWNLOADER_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WP_THEME_DOWNLOADER_PREFIX' ) ) {
	define( 'WP_THEME_DOWNLOADER_PREFIX', 'wptd_' );
}


class b2s_WpThemeDownloader {

	/**
	 * Returns version of the plugin.
	 *
	 * @since 1.0
	 */
	public static function version() {
		return '1.0.0';
	}

	/**
	 * Prevent instantiation.
	 *
	 * @since 1.0
	 */
	private function __construct() {}

	/**
	 * Prevent unserializing an instance.
	 *
	 * @since 1.0
	 */
	private function __wakeup() {}

	/**
	 * Initializes the plugin.
	 */
	public static function init() {
		// Require a few needed files
		require_once( WP_THEME_DOWNLOADER_PATH . '/includes/class-wp-theme-downloader.php' );
		add_action( 'plugins_loaded', array( __CLASS__, 'do_init' ) );
	}

	/**
	 * Performs actual initialization tasks.
	 *
	 * @since 1.5
	 */
	public static function do_init() {
		// Load textdomain.
		load_plugin_textdomain( 'wp-theme-downloader' );

	}

} // end b2s_WpThemeDownloader


b2s_WpThemeDownloader::init();

endif; // end if !class_exists()
