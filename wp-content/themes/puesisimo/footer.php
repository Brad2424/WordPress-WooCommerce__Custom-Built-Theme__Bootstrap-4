        <!-- <footer class="border-top border-dark">
            This is my footer
            <?php 
                // wp_nav_menu([
                //     'theme_location' => 'secondary',
                //     'container'=>'nav',
                //     'menu_class'=>'navbar',
                // ]); 
            ?>

            <span>COPYRIGHT <?php echo date('Y'); ?></span>
        </footer> -->

      <footer class="container pt-4 pt-md-5 border-top border-dark">
            <div class="row justify-content-around">
                <div class="mx-2">
                    <h5>Shop</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="mx-2">
                    <h5>Latest News</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="mx-2">
                    <h5>Site Navigation</h5>
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'container'=>false,
                            'menu_class'=>'list-unstyled text-small',
                        ]); 
                    ?>
                </div>
            </div>
            <div class="col-12 text-center">
                <img class="mb-2" src="" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; <?php echo date('Y'); ?></small>
            </div>
      </footer>

<?php wp_footer(); ?>
    
</body>
</html>