<?php 
/**
* Class List Page
*
* @author Miku Imai
* @version 1.0.0
* @since 1.0.0
*/
class Sample_Plugin_Admin_Db{
	private $table_name;
	
	/**
	* Constructor
	*
	* @version 1.0.0
	* @since 1.0.0
	*/
	public function __construct() {
		global $wpdb;
		$this -> $table_nama = $wpdb->prefix . 'sample_plugin';
	}
	
}

