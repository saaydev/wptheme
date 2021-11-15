<?php
define("ASSETS", get_template_directory_uri() . "/assets/");
define("IMG", ASSETS . "/img/");

// add_filter('show_admin_bar', '__return_false'); # отключить админ панель

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', function(){
	
	wp_enqueue_style('styles-theme', ASSETS . 'app.css');
	wp_enqueue_script('scripts-theme', ASSETS . 'app.js', [], 1, true );

	wp_deregister_script( 'jquery-core' );

	wp_localize_script('scripts-theme', 'wp_variables', [
		'ajax' 			=> admin_url('admin-ajax.php'),
		'site_assets' 	=> get_stylesheet_directory_uri(),
	]);

});

add_action('after_setup_theme', function(){
	register_nav_menus([
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	]);
});

include_once "inc/post_type.php";
include_once "inc/ajax.php";
include_once "inc/customizer.php";
