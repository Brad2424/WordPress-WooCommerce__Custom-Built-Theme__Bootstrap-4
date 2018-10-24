<h3>Latest Blog Post</h3>
    <div class="row">
    <?php
            $args_cat = [
                'include'=>'6, 9, 10'
            ];

            $categories = get_category( $args_cat );

            foreach ($categories as $category) {
               
                $args = [
                    'type'=>'post',
                    'posts_per_page'=>1,
                    'category__in'=> $category->term_id, // can put category page id's in this array
                    'category__not_in'=> [],
                ];
                $lastBlog = new WP_Query($args);
                echo '<div class="col">';
                    if ( $lastBlog->have_posts() ) {
                        while ( $lastBlog->have_posts() ){
                            //Function the_post() checks whether the loop has started and then sets the current post by moving, each time, to the next post in the queue.
                            $lastBlog->the_post();
                            get_template_part( 'content', get_post_format() );
                        };
                    }; 
                echo '</div>';
                //need to reset whenever I use new WP_Query
                wp_reset_postdata();

            };

        ?>
    </div> ./row 
    <hr>