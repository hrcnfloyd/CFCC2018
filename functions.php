<?php 

// Add Field visibility support for gravity forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// declare featured image support
add_theme_support( 'post-thumbnails' );

// declare header image support
$args = array(
	'default-image' => get_template_directory_uri() . '/assets/img/UnionSationBG.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Register the Main Menu
register_nav_menus( array(
	'primary' => __( 'Primary Navigation Menu', 'CFCC2018' ),
) );


function CFCC2018_widgets_init() {
// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'CFCC2018' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'CFCC2018' ),
		'before_widget' => '',
		'after_widget' => '<hr />',
		'before_title' => '<h5>',
		'after_title' => '</h5>',
	) );
}

add_action( 'widgets_init', 'CFCC2018_widgets_init' );

?>