<?php 
    /*
        Template Name: Shop Initial
    */
    //adding a template name links it to the wp dashboard as a page template option
?>

<?php
    get_header();
    get_template_part( 'nav', 'bar' );
 ?>

<div class="flex-grow-1 mt-56"><!-- div for main content to push footer to bottom -->
    <div class="container">
        <h2>Welcome to the Shop(custom page generated from page-10.php not index.php)</h2>
    </div>
</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>