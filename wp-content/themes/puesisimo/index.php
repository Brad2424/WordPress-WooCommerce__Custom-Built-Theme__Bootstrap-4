<?php 
    get_header(); 
    get_template_part( 'nav', 'bar' );
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-lg-9 col-xl-10">
            <div class="row text-center no-gutters">

            <!-- Beginning of Loop -->
            <?php 

                $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 3, 
                    'paged' => $currentPage,
                );

                $the_query = new WP_Query( $args );

                if( $the_query->have_posts() ): $i = 0;
                    
                    while( $the_query->have_posts() ): $the_query->the_post();
                        
                            if($i==0): $column = 12; $class = ''; 
                            elseif($i > 0 && $i <= 2): $column = 6; $class = '';
                            elseif($i > 2): $column = 4; $class = '';
                            endif;

                            if( has_post_thumbnail() ):
                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
                            endif;
            ?>

            <!-- Content from loop -->
                            <div <?php post_class( "flex-vert-center col-$column $class") ?>  style="background-image: url(<?php echo $urlImg; ?>); background-size: 100% 100%; height: 250px;" >
                                <div class="">
                                <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink()) ),'</a></h1>' ); ?>
                                
                                <small><?php the_category(' '); ?></small>
                                <?php the_excerpt(); ?>
                                </div>
                            </div>

                <!-- End while in loop -->
                <?php $i++; endwhile; ?>
            </div><!-- close the nested row -->

            <div class="row">
                <div class="col-6 text-left">
                    <?php next_posts_link(__( 'Older Posts' ), $the_query->max_num_pages ); ?>
                </div>
                <div class="col-6 text-right">
                    <?php previous_posts_link(__( 'Newer Posts' )); ?>
                </div>
            </div>
            <!-- End if in loop -->
            <?php endif; wp_reset_postdata(); ?> 

        </div> <!-- /.col -->

        <div class="col-sm-4 col-lg-3 col-xl-2">
            <?php get_sidebar(); ?>
        </div>

    </div> <!-- ./row -->

</div><!-- /.container  -->

<?php get_footer(); ?>
