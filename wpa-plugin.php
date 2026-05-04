<?php
/**
 * Plugin Name: Martn Blog Styling + Views
 * Description: Elementor Free helper: view counter, meta shortcodes, and theme CSS for blog layout.
 * Version: 1.0.0
 * Author: martn-astr
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-martn-plugin.php';

add_action( 'plugins_loaded', static function () {
	new Martn_Plugin();
} );
