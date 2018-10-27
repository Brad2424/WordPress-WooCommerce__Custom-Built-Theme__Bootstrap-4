<nav class="navbar navbar-expand-lg justify-content-between navbar-dark bg-dark fixed-top">
    
    <a class="navbar-brand" href="#">
    <img class="d-inline-block align-top" src="<?php echo get_template_directory_uri(  ) . '/images/logo.png' ?>" alt="Puesano Logo"
    width="125" height="30">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
        <?php 
            wp_nav_menu([
                'theme_location'=>'primary', 
                'container'=>false,
                'menu_class'=>'navbar-nav', //ul element
                'walker'=>new Walker_Nav_Primary(),
                ]);
        ?>
    <div>
    <?php get_search_form(); ?>
    </div>
    </div>
</nav>
    


