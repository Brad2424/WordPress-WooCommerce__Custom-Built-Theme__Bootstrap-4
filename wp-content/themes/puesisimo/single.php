<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="flex-grow-1 mt-56"><!-- div for main content to push footer to bottom -->

	<div class="container">
		<div class="row">

			<!-- 1st column -->
			<div class="col-xs-12 col-md-8" col>

				<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

					<!-- Loop Content -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
						<?php if( has_post_thumbnail() ): ?>
							<div class=""><?php the_post_thumbnail('thumbnail'); ?></div>
						<?php endif; ?>
						<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
						<?php the_content(); ?>
						<hr>
						<div class="row">
							<div class="col-6 text-left"><?php previous_post_link(); ?></div>
							<div class="col-6 text-right"><?php next_post_link(); ?></div>
						</div>
					</article>

				<?php endwhile; endif; ?>
				
			</div> <!-- /.col -->
			
			<!-- 2nd column -->
			<div class="d-none d-md-inline-block col-md-4">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- /.row -->
	</div><!-- /.container -->

</div><!-- /.flex-grow-1 for main content pushing footer to bottom -->

<?php get_footer(); ?>