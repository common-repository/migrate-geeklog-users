<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Migrate Geeklog Users
Description: A plugin to migrate users from Geeklog to WordPress.
Author: Ramlal Solanki
Author URI: https://about.me/ramlal
Version: 1.0
*/
//to add custom page in admin section
add_action('admin_menu', 'migrate_Geeklog_users_plugin');
function migrate_Geeklog_users_plugin(){
	$plugins_url = plugin_dir_url( __FILE__ ) . 'images/Geeklog.jpg' ;
	add_menu_page( 'Migrate Geeklog Users', 'Migrate Geeklog Users', 'manage_options', 'migrate-Geeklog-users-plugin', 'migrate_Geeklog_users_init', $plugins_url );
}

function migrate_Geeklog_users_init(){
	require plugin_dir_path( __FILE__ ) . 'migrate_Geeklog_users.php';
}
?>