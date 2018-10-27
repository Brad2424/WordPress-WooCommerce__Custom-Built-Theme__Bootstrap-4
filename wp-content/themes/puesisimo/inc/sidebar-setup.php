<?php
/*  =======================
    Sidebar function
    =======================
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

?>