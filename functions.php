<?php
/*
Theme Name:         Wiki
Beschreibung:       Hier werden alle Funktionen des Themes aufgeführt
Version:            0.3
Author:             Yannick Bach
*/

 // Funktion zur Einfügung eines Eigenen Logos im Headerbereich //
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 200,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Funktion zur Integration von Widgets im Footer //

// Ganz Links //
function footer_widget_ganz_links() {

	register_sidebar( array(
		'name'          => 'Footer Widget, ganz links',
		'id'            => 'footer_widget_ganz_links',
    'description'   => 'Hier können Sie das Widget im Footer ganz links bestimmen.',
    'before_title'  => '<b>',
    'after_title'   => '</b>',
	) );

}
add_action( 'widgets_init', 'footer_widget_ganz_links' );

// Mitte Links //

function footer_widget_mitte_links() {

	register_sidebar( array(
		'name'          => 'Footer Widget, mitte links',
		'id'            => 'footer_widget_mitte_links',
    'description'   => 'Hier können Sie das Widget im Footer mitte links bestimmen.',
    'before_title'  => '<b>',
    'after_title'   => '</b>',
	) );

}
add_action( 'widgets_init', 'footer_widget_mitte_links' );

// Mitte Rechts //

function footer_widget_mitte_rechts() {

	register_sidebar( array(
		'name'          => 'Footer Widget, mitte rechts',
		'id'            => 'footer_widget_mitte_rechts',
    'description'   => 'Hier können Sie das Widget im Footer mitte rechts bestimmen.',
    'before_title'  => '<b>',
    'after_title'   => '</b>',
	) );

}
add_action( 'widgets_init', 'footer_widget_mitte_rechts' );

// Ganz Rechts //

function footer_widget_ganz_rechts() {

	register_sidebar( array(
		'name'          => 'Footer Widget, ganz rechts',
		'id'            => 'footer_widget_ganz_rechts',
    'description'   => 'Hier können Sie das Widget im Footer ganz rechts bestimmen.',
    'before_title'  => '<b>',
    'after_title'   => '</b>',
	) );

}
add_action( 'widgets_init', 'footer_widget_ganz_rechts' );





/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
