<?php
// Actions
add_action('init', function () {
    if (!function_exists('pll__')) {
        function pll__($text, $domain = 'default') {
            return $text;
        }
    }

    if (!function_exists('pll_e')) {
        function pll_e($text, $domain = 'default') {
            echo $text;
        }
    }

    $post_types = [];
    $post_taxonomies = [];

    if (!empty($post_types)) {
        foreach ($post_types as $post_type => $post_type_data) {
            register_post_type($post_type, $post_type_data);
        }
    }

    if (!empty($post_taxonomies)) {
        foreach ($post_taxonomies as $post_taxonomy => $post_taxonomy_data) {
            register_taxonomy($post_taxonomy, $post_taxonomy_data['post_types'], $post_taxonomy_data['args']);
        }
    }
});
add_action('after_setup_theme', function () {
    add_image_size('large', 1100, '', true);
    add_image_size('medium', 700, '', true);
    add_image_size('small', 300, '', true);

    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'svadba'),
    ));

    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Theme settings',
            'menu_title'    => 'Theme settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
});
add_action('widgets_init', function () {
    register_sidebar([
        'name'          => 'Footer column 1',
        'id'            => 'footer-column-1',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);

    register_sidebar([
        'name'          => 'Footer column 2',
        'id'            => 'footer-column-2',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);

    register_sidebar([
        'name'          => 'Footer column 3',
        'id'            => 'footer-column-3',
        'description'   => '',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ]);
});


// Filters
add_filter('the_generator', function () {
    return '';
});
add_filter('script_loader_src', 'remove_wp_version_strings');
add_filter('style_loader_src', 'remove_wp_version_strings');
add_filter('wpseo_metabox_prio', function () {
    return 'low';
});
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}, 1, 3);
add_filter('nav_menu_link_attributes', function ($classes, $item, $args) {
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }

    return $classes;
}, 1, 3);
add_filter('wpseo_breadcrumb_links', function ($links) {
    $front_page_id = get_option('page_on_front');

    foreach ($links as &$link) {
        if (isset($link['id']) && $link['id'] == $front_page_id) {
            $link['text'] = get_the_title($front_page_id);
            break;
        }
    }

    return $links;
});
add_filter('acf/load_field', function ($field) {
    $array_compare = [
        'block-phones_lang',
        'block-social_lang',
        'block-footer-info_lang',
        'block-contacts_lang',
    ];

    if (in_array($field['key'], $array_compare)) {
        $langs = [];

        if (function_exists('pll_the_languages')) {
            $pll_langs = pll_the_languages(['raw' => 1]);

            if (!empty($pll_langs)) {
                foreach ($pll_langs as $slug => $lang) {
                    $langs[$slug] = $lang['name'];
                }
            }
        }

        $field['choices'] = $langs;
    }

    return $field;
});
