<?php
/*
Theme Name:         Wiki
Beschreibung:       Hier werden alle Funktionen des Themes aufgeführt
Version:            0.5
Author:             Yannick Bach
*/

 // Funktion zur Einfügung eines Eigenen Logos im Headerbereich //
 // Quelle: https://developer.wordpress.org/themes/functionality/custom-logo/
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
// Quelle: https://codex.wordpress.org/Widgetizing_Themes
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


// Funktion für die Breadcrumb Navigation
// Quelle: https://blog.kulturbanause.de/2011/08/wordpress-breadcrumb-navigation-ohne-plugin/
function nav_breadcrumb() {

 $delimiter = '&raquo;';
 $home = 'Startseite';
 $before = '<span class="current-page">';
 $after = '</span>';

 if ( !is_home() && !is_front_page() || is_paged() ) {

 echo '<nav class="breadcrumb">Sie sind hier:';

 global $post;
 $homeLink = get_bloginfo('url');
 echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

 if ( is_category()) {
 global $wp_query;
 $cat_obj = $wp_query->get_queried_object();
 $thisCat = $cat_obj->term_id;
 $thisCat = get_category($thisCat);
 $parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
 echo $before . single_cat_title('', false) . $after;

 } elseif ( is_day() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('d') . $after;

 } elseif ( is_month() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('F') . $after;

 } elseif ( is_year() ) {
 echo $before . get_the_time('Y') . $after;

 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo $before . get_the_title() . $after;
 }

 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 echo $before . $post_type->labels->singular_name . $after;


 } elseif ( is_attachment() ) {
 $parent = get_post($post->post_parent);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;

 } elseif ( is_page() && !$post->post_parent ) {
 echo $before . get_the_title() . $after;

 } elseif ( is_page() && $post->post_parent ) {
 $parent_id = $post->post_parent;
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;

 } elseif ( is_search() ) {
 echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;

 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_404() ) {
 echo $before . 'Fehler 404' . $after;
 }

 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
 echo ': ' . __('Seite') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }

 echo '</nav>';

 }
}



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
