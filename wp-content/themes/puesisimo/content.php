<article <?php post_class() ?> >

    <header>
        <?php the_title( sprintf('<h3 class="entry-title" ><a href="%s">', esc_url( get_permalink())), '</a></h3>'); ?>
        <p>POSTED ON: <?php the_time( 'F j, Y' ) ?> at <?php the_time( 'g:i a' ) ?>, in <?php the_category() ?> </p>
    </header>

    <div class="row">
        <?php if ( has_post_thumbnail()) {
                echo '<div class="col-sm-4">';
                echo the_post_thumbnail('thumbnail');
                echo '</div>';
                echo '<div class="col-sm-8"><p>';
                echo the_content();
                echo '</p></div>';
                } else {
                    echo '<div class="col"><p>';
                    echo the_content();
                    echo '</p></div>';
                };
        ?>
    </div> <!-- ./row -->

</article>