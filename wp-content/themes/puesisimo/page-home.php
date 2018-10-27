<?php get_header(); ?>
<?php get_template_part( 'nav', 'bar' );?>

<div class="flex-grow-1 d-flex flex-column mt-56"><!-- div for main content to push footer to bottom -->

    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col bg-secondary p-3 d-flex justify-content-center align-items-center">
                <h3 class="h1 m-0 mr-4 ali">Next Shipment Arrives 4th/May</h3>
                <button class="btn btn-info btn-lg font-weight-bold">Pre-Order Now</button>
            </div>

        </div>

        <div class="row text-center" >
            <div class="col">
                <img class="mw-100 " src="wp-content\themes\puesisimo\images\logo.png" alt="Puesano Logo"
                style="height: 150px;">
                <p>"Maybe can put slogan here"</p>
            </div>
        </div>
        
        <div class="row">
            <?php $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
            
            <div class="col-12 col-md-8" style="background-image: url(<?php echo $urlImg; ?>); background-size: 100% 100%; min-height: 600px;">
            <h3>Can put some text here or maybe make it a carousel</h3>
            </div>
        
            <div class="col-12 col-md-4 d-flex flex-column align-items-center">
                <?php get_sidebar(); ?>
            </div>

        </div>

    </div><!-- ./container-->

</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>
