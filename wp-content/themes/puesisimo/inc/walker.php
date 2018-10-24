<?php 

/*
    ==================================================
    Colection of Walker Classes
    ==================================================
*/

/*
        The wordpress function wp_nav_menu() creates the below output.
        The methods of the walker class which access these specific elemenst are noted beside them below.
		
		<div class="menu-container">
			<ul> // set in wp_nav_menu() method


				<li><a><span> 		start_el()
					
					<ul> 				start_lvl()

					<li><a><span> 		start_el()

					</ul> 				end_lvl()

				</li> 				end_el()
					
				<li><a>Link</a></li>
				<li><a>Link</a></li>
				<li><a>Link</a></li>
				
			</ul> // end_lvl()

		</div>
		
	*/

class Walker_Nav_Primary extends Walker_Nav_Menu {
    
    function start_lvl( &$output, $depth = 0, $args =[] ){ //ul element
		$submenu = ($depth > 0) ? 'sub-menu' : '';
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu $submenu depth_$depth\">\n";
		//var_dump($args);
    }

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span elements
		
		// var_dump($output);
		// var_dump($item);
		// var_dump($depth);
		// var_dump($args);
		// var_dump($id);
		
		$indent = ( $depth ) ? str_repeat("\t",$depth) : '';
		
		$li_attributes = '';
		$class_names = $value = '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'custom-active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'rounded';
		$classes[] = 'nav-item'; // will need to change this is if you a dropdown. Can add it manually in dashboard for each menu item
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-submenu';
		}
		
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		
		// this is for a dropdown menu
		//$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		if( $depth > 0 ){
			$attributes .= 'class="dropdown-item"';
		} else {
			$attributes .= ($item->current) ? 'class="nav-link custom-active rounded"' : 'class="nav-link"';
		}
		
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
		$item_output .= $args->after;
		
		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}



    // function end_lvl( &$output, $depth = 0, $args = array() ) {
	// 	$indent = str_repeat( '\t', $depth );
	// 	$output .= "$indent</ul>\n";
	// }

	// function end_el( &$output, $item, $depth = 0, $args = array() ) {
	// 	$output .= "</li>\n";
	// }


}
