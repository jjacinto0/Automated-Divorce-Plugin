<?php
/**
 * Plugin Name
 *
 * @package           Automated Divorce
 * @author            Uniserve IT
 * @copyright         2020 Uniserve IT Hong Kong Limited
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Automated Divorce
 * Plugin URI:        https://uniserveit.com/
 * Description:       Automated Divorce
*/

/*
Automated Divorce is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Automated Divorce is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Automated Divorce. If not, see {License URI}.
*/


defined( 'ABSPATH' ) or die ('Oops, you have no access.');


class automated_divorce{

	function __construct(){
		// add_action('init', array( $this, 'custom_post_type') );


	}

	function register_front_end() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_wp' ));
	}

	function register_admin() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin' ));
		//menu
		add_action( 'admin_menu', array($this, 'add_admin_pages') );
	}

	//activate
	function activate(){
		//generate TCP
		$this->custom_post_type();
		
		//flush the rewrit rule
		flush_rewrite_rules();
	}

	//deactivate
	function deactivate(){
		//flush the rewrit rule
		flush_rewrite_rules();
	}

	//uninstall
	function uninstall(){
		//enqueue all our scripts
	}


	function custom_post_type(){
		register_post_type('ad_post', ['public'=>true, 'label' => 'Automated Divorce']);
	}


	function enqueue_wp(){
		//enque all our script
		wp_enqueue_style( 'plugin_style', plugins_url('/assets/css/style.css', __FILE__ ));
		wp_enqueue_script( 'plugin_script', plugins_url('/assets/js/script.js', __FILE__ ));
		wp_enqueue_script( 'class_script', plugins_url('/class/class_logical_form.php', __FILE__ ));
		wp_enqueue_script( 'shortcodes', plugins_url('/inc/automated-divorce-shortcodes.php', __FILE__ ));
	}

	function enqueue_admin(){
		wp_enqueue_script( 'shortcodes', plugins_url('/inc/automated-divorce-shortcodes.php', __FILE__ ));
	}

	public function add_admin_pages() {
		add_menu_page( 'Automated Plugin', 'Automated Divorce', 'manage_options', 'asdasdasd', array($this, 'admin_index'), 'dashicons-list-view' );
	}

	public function admin_index() {
		require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
	}

}





if(class_exists('automated_divorce')){
	$automated_divorce = new automated_divorce();
	$automated_divorce->register_front_end();
	$automated_divorce->register_admin();
}


//activate
// require_once plugin_dir_path(__FILE__) . 'inc/automated-divorce-plugin-activate.php';
register_activation_hook( __FILE__, array($automated_divorce, 'activate') );

//deactivate
// require_once plugin_dir_path(__FILE__) . 'inc/automated-divorce-plugin-deactivate.php';
register_deactivation_hook(__FILE__, array($automated_divorce, 'deactivate') );

//uninstall


/***********************
****   SHORTCODE    ****
************************/

//general consultation form
require_once plugin_dir_path(__FILE__) . 'class/class_logical_form.php';
function get_get_form(){
	$logicalForm = new class_logicalForm();

	return $logicalForm->general_forms();
}
add_shortcode('general_consultancy_form', 'get_get_form');


//General Consultation result
