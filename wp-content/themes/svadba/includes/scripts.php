<?php

add_action( 'wp_enqueue_scripts', function () {
    $ver = 1;

    wp_enqueue_style( 'font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], $ver );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/dist/front/carousel/assets/owl.carousel.css', [], $ver );
    wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/dist/front/carousel/assets/owl.theme.default.min.css', [], $ver );
    wp_enqueue_style( 'front', get_template_directory_uri() . '/dist/front/css/style.css', [], $ver );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', false, $ver, true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/dist/front/carousel/owl.carousel.min.js', [], $ver,  true);
    wp_enqueue_script('sliders-pack', get_template_directory_uri() . '/dist/front/js/sliders-pack.js', [], $ver,  true);


    if (is_front_page() || is_page_template('page_templates/contacts.php')) {
        wp_enqueue_script('owl', get_template_directory_uri() . '/dist/front/js/owl.js', [], $ver,  true);
    }
    elseif (is_singular('post')) {
        wp_enqueue_script('sticky-blog', get_template_directory_uri() . '/dist/front/js/sticky-blog.js', [], $ver,  true);
    }

    if (!is_404()) {
        wp_enqueue_script('front', get_template_directory_uri() . '/dist/front/js/main.js', [], $ver,  true);
    }

    wp_enqueue_script('front-backImage', get_template_directory_uri() . '/dist/front/js/backImage.js', [], $ver,  true);
}, 10010 );
