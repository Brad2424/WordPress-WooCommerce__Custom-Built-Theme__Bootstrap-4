<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo( 'name' ); wp_title( '|'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php //if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<?php
    // if (is_front_page()) {
    //     $extra_home_body_classes = array('testClass1', 'testClass2');
    // }
?>
<body <?php body_class(/*$extra_home_body_classes*/) ?> >

