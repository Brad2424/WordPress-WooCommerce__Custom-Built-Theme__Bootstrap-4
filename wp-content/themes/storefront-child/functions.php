<?php
// With Storefront, you do not need to enqueue any of the parent theme style files with PHP from the theme’s 
// functions.php file or @import these into the child themes style.css file as the main parent Storefront
// theme does this for you.

// The functions.php in your child theme is loaded before the parent theme’s functions.php. If a function in the parent theme is pluggable, it allows you to copy a function from the parent theme into the child theme’s functions.php and have it replace the one in your parent theme. The only requirement is that the parent theme’s function is pluggable, which basically means it is wrapped in a conditional if statement e.g:

//     if (!function_exists("parent_function_name")) {
//           parent_function_name() {
//                ...
//           } 
//     }
//     If the parent theme function is pluggable, you can copy it to the child theme functions.php and modify the function to your liking.


?>