<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="container">
    <div class="row">
        <div class="col-8 m-auto">

            <?php if ( have_posts() ): while ( have_posts() ): ?>

            <?php the_post(); ?>
            <h1><?php the_title(); ?> - page.php</h1>
            <?php the_content(); ?>

            <?php endwhile; else: ?>
            <h3 class="text-center display-4 mt-5"><?php _e( 'Sorry, page not found' ); ?></h3>
            <?php endif ?>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div> <!-- /.container for everything -->

<?php get_footer(); ?>