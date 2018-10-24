<article <?php post_class() ?> >

    <header>
        <?php the_title( sprintf('<h3 class="entry-title" ><a href="%s">', esc_url( get_permalink())), '</a></h3>'); ?>
        <p>POSTED ON: <?php the_time( 'F j, Y' ) ?> at <?php the_time( 'g:i a' ) ?>, in <?php the_category() ?> </p>
    </header>

    <div class=row>

        <?php if ( has_post_thumbnail()): ?>
            <div class="col">
                <?php the_excerpt(); ?>
            </div>

            <div class="">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>

        <?php else: ?>

            <?php the_excerpt(); ?>
        
        <?php endif; ?>

    </div>

</article>