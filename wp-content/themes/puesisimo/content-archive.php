<article <?php post_class() ?> >

    <header>
        <?php the_title( sprintf('<h3 class="entry-title" ><a href="%s">', esc_url( get_permalink())), '</a></h3>'); ?>
        <p>
            POSTED ON: <?php the_time( 'F j, Y' ) ?> at <?php the_time( 'g:i a' ) ?>
            <?php if(!is_category()) :?>, in <?php the_category() ?><?php endif ?>
        </p>
    
    </header>

    <div class="row">

        <?php if ( has_post_thumbnail()) : ?>

            <div class="col-sm-8">
                <p><?php the_content(); ?></p>
            </div>

            <div class="col-sm-4">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>

        <?php else :?> 

            <div class="col">
                <p><?php the_content(); ?></p>
            </div>

        <?php endif ?>

    </div><!-- ./row -->

</article>