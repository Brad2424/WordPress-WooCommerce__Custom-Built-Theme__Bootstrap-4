<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="flex-grow-1 mt-56"><!-- div for main content to push footer to bottom -->

    <div class="container">
        <div class="row">

            <!-- 1st column -->
            <div class="text-center col-xs-12 col-sm-8 col-lg-9 col-xl-10">

                    <h3>Oops, something went wrong.</h3>
                    <h5>No content was found.</h5>
                    <p>Error: index</p>

            </div> <!-- /.1st col -->

            <!-- 2nd column -->
            <div class="col-sm-4 col-lg-3 col-xl-2">
                <?php get_sidebar(); ?>
            </div>

        </div> <!-- ./row -->
    </div> <!-- ./container-->

</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>
