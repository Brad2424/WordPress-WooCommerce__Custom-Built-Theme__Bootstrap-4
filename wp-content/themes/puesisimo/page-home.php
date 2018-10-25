<?php 
    get_header(); 
?>

<div class="bg-light p-3 d-flex justify-content-center align-items-center">
    <h3 class="h1 m-0 mr-4 ali">Next Shipment Arrives 4th/May</h3>
    <button class="btn btn-info btn-lg font-weight-bold">Pre-Order Now</button>
</div>

<div class="flex-grow-1 d-flex flex-column"><!-- div for main content to push footer to bottom -->

    <div class="container-fluid p-0 flex-grow-1 d-flex flex-column">
        <div class="row no-gutters flex-grow-1">

            <!-- 1st column -->
            <div class="col-12 col-md-6 order-md-2 border-left border-dark">
                <?php get_template_part( 'nav', 'home' );?>

                <div class="d-none d-md-flex flex-column align-items-center">
                    <?php get_sidebar(); ?>
                </div>
            </div><!-- ./col-->

            <!-- 2nd column -->
            <div class="col-12 col-md-6 order-md-1 flex-vert-center">
                <h1 class="text-center"><?php bloginfo( 'name' ) ?></h1>
                <h2 class="text-center">BG IMAGE, LOGO AND NAME</h2>
            </div><!-- ./col-->
        
        </div><!-- ./row-->

    </div><!-- ./container-->

</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>
