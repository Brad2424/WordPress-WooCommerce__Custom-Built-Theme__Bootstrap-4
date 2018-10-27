<?php
/*
    ==================================================
    Theme Support Functions
    ==================================================
*/
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );//this is for featured images
//add_theme_support( 'post-formats', ['video', 'aside', 'image' etc. etc.] ); //if going to use, must create the template in theme for these formats, then for example use if (has_post_type('video')), then get_template_part('content', 'video') to get content-video.php
add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
add_theme_support( "title-tag" );

?>