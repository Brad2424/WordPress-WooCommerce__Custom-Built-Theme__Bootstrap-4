<?php
/*
    ==================================================
    Add stylesheets and scripts
    ==================================================
*/
function addStylesAndScripts() {
    //libraries and dependencies
    wp_enqueue_script('popperJS-CDN', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jQuery-CDN'), '', true);
    wp_enqueue_script('bootstrapJS-CDN', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jQuery-CDN'), '', true);

    //custom scripts and stylsheets
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
    wp_enqueue_script('custom-JS', get_template_directory_uri() . '/js/main.js', array('popperJS-CDN', 'bootstrapJS-CDN'), '', true);
}
add_action( 'wp_enqueue_scripts', 'addStylesAndScripts' );

?>