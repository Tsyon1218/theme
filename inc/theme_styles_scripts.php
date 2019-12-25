<?php

$myPersonalinfo_theme_info = wp_get_theme();
define( 'myPersonalinfo_THEME_VERSION', ( WP_DEBUG ) ? time() : $myPersonalinfo_theme_info->get( 'Version' ) );

function myPersonalinfo_enqueue_scripts() {
	
	/*=== CSS====*/
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css',null,'v4.2.1');	
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css' );	
	wp_enqueue_style('linearicons', get_template_directory_uri().'/assets/css/linearicons.css');		
	wp_enqueue_style('myPersonalinfo-editor', get_template_directory_uri().'/assets/css/style-editor.css',null,myPersonalinfo_THEME_VERSION);	
	/*===Theme CSS====*/

	wp_enqueue_style('myPersonalinfo-style', get_stylesheet_uri());
	wp_enqueue_style('myPersonalinfo-edit', get_template_directory_uri().'/assets/css/edit.css',null,myPersonalinfo_THEME_VERSION);
	wp_enqueue_style('myPersonalinfo-menu', get_template_directory_uri().'/assets/css/menu.css',null,myPersonalinfo_THEME_VERSION);
	wp_enqueue_style('myPersonalinfo-main', get_template_directory_uri().'/assets/css/main.css',null,myPersonalinfo_THEME_VERSION);	
	wp_enqueue_style('myPersonalinfo-settings', get_template_directory_uri().'/assets/css/settings.css',null,myPersonalinfo_THEME_VERSION);	
	wp_enqueue_style('myPersonalinfo-custom', get_template_directory_uri().'/assets/css/custom.css',null,myPersonalinfo_THEME_VERSION);
	wp_enqueue_style('myPersonalinfo-tut', get_template_directory_uri().'/assets/css/tut.css',null,myPersonalinfo_THEME_VERSION);
	/*=== Js====*/
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'),'v4.2.1',true);
	wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.js', array('jquery'),'1.13.0',true);				
	wp_enqueue_script( 'myPersonalinfo-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), myPersonalinfo_THEME_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'myPersonalinfo_enqueue_scripts' );

function myPersonalinfo_block_editor_styles() {
	wp_enqueue_style( 'myPersonalinfo-block-editor-styles', get_template_directory_uri() . '/block-editor.css', null,myPersonalinfo_THEME_VERSION);
}
add_action( 'enqueue_block_editor_assets', 'myPersonalinfo_block_editor_styles' );
