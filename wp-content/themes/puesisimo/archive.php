<?php  get_header(); ?>
<?php get_template_part( 'nav', 'bar' ); ?>

<div class="flex-grow-1 mt-56"><!-- div for main content to push footer to bottom -->

    <div class="container">

        <?php if ( have_posts() ): while ( have_posts() ): the_post();?>

        <?php get_template_part( 'content', 'archive' ) ?>

        <?php endwhile; else: ?>
            <h3 class="text-center display-4 mt-5"><?php _e( 'Sorry, page not found' ); ?></h3>
        <?php endif ?>

    </div><!-- ./container -->
</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>