<?php

/*
    ==================================================
    Add stylesheets and scripts
    ==================================================
*/
function addStylesAndScripts() {
    //first deregister the jquery version that comes with wp
    wp_deregister_script('jquery');
    //libraries and dependencies
    wp_enqueue_script('jQuery-CDN', 'https://code.jquery.com/jquery-3.3.1.slim.js', array(), '', true);
    wp_enqueue_script('popperJS-CDN', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jQuery-CDN'), '', true);
    wp_enqueue_script('bootstrapJS-CDN', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jQuery-CDN'), '', true);

    //custom scripts and stylsheets
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
    wp_enqueue_script('custom-JS', get_template_directory_uri() . '/js/main.js', array('popperJS-CDN', 'bootstrapJS-CDN'), '', true);
}
add_action( 'wp_enqueue_scripts', 'addStylesAndScripts' );

/*
    ==================================================
    Activate Menus and customize li class
    ==================================================
*/
function registerThemeMenus() {

	register_nav_menus(
		array(
            'primary' 	=> 'Primary Nav',
            'secondary' 	=> 'Footer Nav',		
		)
	);

}
add_action( 'init', 'registerThemeMenus' );

// /**
//  * Filter the CSS class for a nav menu based on a condition.
//  *
//  * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
//  * @param object $item    The current menu item.
//  * @return array (maybe) modified nav menu class.
//  */
// function wpdocs_special_nav_class( $classes, $item ) {
//     $classes[] = "nav-item";
//     return $classes;
// }
// add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

/*
    ==================================================
    Theme Support Functions
    ==================================================
*/
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );//this is for featured images
//add_theme_support( 'post-formats', ['video'] ); //if going to use, must create the template in theme for these formats, then for example use using if (has_post_type('video')), then get_template_part('content', 'video') to get content-video.php
add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
add_theme_support( "title-tag" );

/*
    ==================================================
    Sidebar function
    ==================================================
*/
function widgetSetup() {

    register_sidebar( [
        'name' => 'Sidebar',
        'id' => 'sidebar_1',
        'class' => 'custom', // wordpress automatically makes this "$name-$class" i.e "sidebar-custom"
        'description' => 'standard sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => "</li>\n",
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => "</h2>\n",
         ] );
}
add_action( 'widgets_init', 'widgetSetup' );

/*
    ==================================================
    Include walker.php file
    ==================================================
*/

require get_template_directory() . '/inc/walker.php';

/*
    ==================================================
    Filter functions
    ==================================================
*/

function setExcerptLength ($length) {
    return 40;
}
add_filter( 'excerpt_length', 'setExcerptLength', 999);
