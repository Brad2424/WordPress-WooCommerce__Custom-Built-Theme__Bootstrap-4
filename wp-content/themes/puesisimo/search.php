<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="flex-grow-1 mt-56"><!-- div for main content to push footer to bottom -->

    <div class="container">
        <div class="row">
        
            <div class="col-8 ">
                <h2><?php wp_title(); ?></h2>

                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                        
                <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; else: ?>

                <h3 class="text-center display-4 mt-5">
                <?php _e('Sorry, no content matches your search' ); ?>
                </h3>

                <?php endif ?>
            </div>

            <div class="d-none d-md-block ml-auto">
                <?php get_sidebar(); ?>
            </div>

        </div><!-- ./row -->
    </div><!-- ./container -->

</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>
