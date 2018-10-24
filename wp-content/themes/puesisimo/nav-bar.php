<nav class="navbar navbar-expand-lg justify-content-between navbar-light bg-secondary fixed-top">
    
    <?php if (!is_front_page()) : ?>
    <a class="navbar-brand" href="#">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Puesisimo
    </a>
    <?php endif; ?>

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
    


