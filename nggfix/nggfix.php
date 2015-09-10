<?php
/*
Plugin Name: NextGEN Gallery Cyrillic FIX
Plugin URI: 
Description: Заменяет вводимые русские буквы на латинские
Version: 1.0.9
Author: Андрей Чуйко
Author URI: 
License: 
License URI: 
*/

add_action( 'admin_enqueue_scripts', 'ngf_enqueue_scripts', 2000 );

function ngf_enqueue_scripts() {
	$plugin = get_plugin_data( __FILE__, false, false );
	wp_register_script( 'nggfix', plugin_dir_url( __FILE__ ) . 'nggfix.js', array( 'jquery' ), $plugin[ 'Version' ] );
	wp_enqueue_script( 'nggfix' );
}

