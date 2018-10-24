<nav class="flex-wrap navbar navbar-expand justify-content-center navbar-light bg-secondary">
    
    <?php if (!is_front_page()) : ?>
    <a class="navbar-brand" href="#">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Puesisimo
    </a>
    <?php endif; ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100 d-flex justify-content-center my-3" id="navbarSupportedContent">
        <?php 
            wp_nav_menu([
                'theme_location'=>'primary', 
                'container'=>false,
                'menu_class'=>'navbar-nav', //ul element
                'walker'=>new Walker_Nav_Primary(),
                ]);
        ?>

    </div>

    <?php get_search_form(); ?>
    
</nav>
    


