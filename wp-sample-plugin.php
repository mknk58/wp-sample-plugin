<?php
/*
Plugin Name: WordPress Sample Plugin
Plugin URI: https://github.com/mknk58/wp-sample-plugin
Description: WordPress Plugin sample build.
Version: 1.0.0
Author: Miku Imai
Author URI: https://github.com/mknk58/wp-sample-plugin
License: GPLv2 or leter
*/

new Sample_Plugin();

class Sample_Plugin {
	/**
	* Constructor
	*
	* @version 1.0.0
	* @since 1.0.0
	*/
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	* Add admin menus.
	*
	* @version 1.0.0
	* @since 1.0.0
	*/
	public function admin_menu() {
		add_menu_page(
			'サンプルA',
			'sample-plugin',
			'manage_options',
			plugin_basename( __FILE__ ),
			array( $this, 'list_page_render' ),
			'dashicons-admin-site'
		);
	}
}
