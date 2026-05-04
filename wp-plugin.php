<?php
/**
 * Plugin Name: Martn Plugin
 * Description: A custom WordPress plugin for post view counting and additional features.
 * Version: 1.0
 * Author: martn-astr
 */

// Autoload includes
require_once plugin_dir_path( __FILE__ ) . 'includes/class-martn-plugin.php';

// Initialize the plugin
function martn_plugin_init() {
    new Martn_Plugin();
}
add_action( 'plugins_loaded', 'martn_plugin_init' );
?>