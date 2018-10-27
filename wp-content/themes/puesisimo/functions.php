<?php

/*
    Add stylesheets and scripts
*/
require_once get_template_directory() . '/inc/scripts.php';

/*
    Activate Menus and customize li class
*/
require_once get_template_directory() . '/inc/menus.php';

/*
    Theme Support Functions
*/
require_once get_template_directory() . '/inc/theme-support.php';

/*
    Sidebar function
*/
require_once get_template_directory() . '/inc/sidebar-setup.php';

/*
    Include walker.php file
*/
require_once get_template_directory() . '/inc/walker.php';

/*
    Filter functions
*/
require_once get_template_directory() . '/inc/added-filters.php';