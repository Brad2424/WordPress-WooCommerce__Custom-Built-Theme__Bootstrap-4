<?php
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

?>