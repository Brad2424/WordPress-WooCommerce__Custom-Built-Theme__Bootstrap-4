<?php 
    /*
        Template Name: Home
    */
    //adding a template name links it to the wp dashboard as a page template option
?>

<?php 
    get_header(); 
?>

<div class="container-fluid p-3 bg-primary">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="h1 m-0 mr-4 text-white ali">Next Shipment Arrives 4th/May</h3>
        <button class="btn btn-info btn-lg font-weight-bold">Pre-Order Now</button>
    </div>
</div>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 col-md-6 order-md-2">
            <nav>
                <?php wp_nav_menu([
                    'theme_location'=>'primary', 
                    'container'=>false,
                    'menu_class'=>'nav align-items-center flex-column', //ul element
                    'walker'=>new Walker_Nav_Primary(),
                    ]);
                ?>
            </nav>

            <div class="search-form-container text-center">
                <?php get_search_form(); ?>
            </div>

            <div class="d-none d-md-inline-block">
                <?php get_sidebar(); ?>
            </div>
        </div><!-- ./col-->

        <!-- Beginning of Carousel -->
        <div class="col-12 col-md-6 order-md-1 flex-vert-center">
                <h1 class="text-center"><?php bloginfo( 'name' ) ?></h1>
                <h2 class="text-center">BG IMAGE, LOGO AND NAME</h2>
        </div><!-- ./col-->

    
    </div><!-- ./row-->

</div><!-- /.container  -->

<?php get_footer(); ?>
