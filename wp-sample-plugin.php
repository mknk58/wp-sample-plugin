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
		add_submenu_page(
			__FILE__,
			'サンプル一覧',
			'サンプル一覧',
			'manage_options',
			plugin_basename( __FILE__ ),
			array( $this, 'list_page_render' ),
			'dashicons-admin-site'
		);
		add_submenu_page(
			__FILE__,
			'サンプル登録',
			'サンプル登録',
			'manage_options',
			plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-post.php',
			array( $this, 'post_page_render' ),
			'dashicons-admin-site'
		);
	}
	/**
	* Rendaring List Page.
	*
	* @version 1.0.0
	* @since   1.0.0
	*/
	public function list_page_render(){
		require_once( plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-list.php' );
		new Sample_Plugin_List();
	}
	
	/**
	* Rendaring Post Page.
	*
	* @version 1.0.0
	* @since   1.0.0
	*/
	public function post_page_render(){
		require_once( plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-post.php' );
		new Sample_Plugin_Post();
	}
}






