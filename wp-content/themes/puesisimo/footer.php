<footer class="container-fluid">
    This is my footer
    <?php wp_nav_menu([
        'theme_location' => 'secondary',
        'container'=>'nav',
        'menu_class'=>'navbar',
    ]); 
    ?>

    <span>COPYRIGHT <?php echo date('Y'); ?></span>
</footer>

<?php wp_footer(); ?>
    
</body>
</html>