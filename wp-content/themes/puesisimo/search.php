<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="container">
    <div class="row">
        <div class="col-8 m-auto">

            <?php if ( have_posts() ): while ( have_posts() ):
                       
            the_post();
            get_template_part( 'content', 'search' );

            endwhile; else: ?>
            <h3 class="text-center display-4 mt-5"><?php _e('Sorry, no posts match your critera' ); ?></h3>
            <?php endif ?>

        </div>
    </div>
</div> <!-- /.container for everything -->

<?php get_footer(); ?>
