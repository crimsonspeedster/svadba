<?php

add_filter('block_categories_all', function ($categories) {
    return array_merge(
        array(
            array(
                'slug' => 'svadba',
                'title' => 'Svadba',
            ),
        ),
        $categories,
    );
});

if (function_exists('acf_register_block_type')) {
    $blocks_path = get_template_directory() . '/includes/acf_blocks';
    $blocks_path_uri = get_template_directory_uri() . '/includes/acf_blocks';

    acf_register_block_type(array(
        'name'              => 'footer-info',
        'title'             => 'Footer Info',
        'description'       => 'Footer Info',
        'render_template'   => $blocks_path . '/footer-info/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/footer-info/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'contacts',
        'title'             => 'Contacts',
        'description'       => 'Contacts',
        'render_template'   => $blocks_path . '/contacts/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/contacts/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'two-col-with-image',
        'title'             => 'Two col with image',
        'description'       => 'Two col with image',
        'render_template'   => $blocks_path . '/two-col-with-image/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/two-col-with-image/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'reasons',
        'title'             => 'Reasons',
        'description'       => 'Reasons',
        'render_template'   => $blocks_path . '/reasons/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/reasons/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'images-row',
        'title'             => 'Images row',
        'description'       => 'Images row',
        'render_template'   => $blocks_path . '/images-row/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/images-row/image.png'
                )
            )
        ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'slider-section',
        'title'             => 'Slider section',
        'description'       => 'Slider section',
        'render_template'   => $blocks_path . '/slider-section/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/slider-section/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'langs-dropdown',
        'title'             => 'Langs dropdown',
        'description'       => 'Langs dropdown',
        'render_template'   => $blocks_path . '/langs-dropdown/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/langs-dropdown/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'phones',
        'title'             => 'Phones',
        'description'       => 'Phones',
        'render_template'   => $blocks_path . '/phones/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'show',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/phones/image.png'
                )
            )
        ),
    ));

    acf_register_block_type(array(
        'name'              => 'social',
        'title'             => 'Social',
        'description'       => 'Social',
        'render_template'   => $blocks_path . '/social/render.php',
        'category'          => 'svadba',
        'icon'              => 'admin-comments',
        'mode'              => 'edit',
        'example' => array(
            'attributes' => array(
                'mode' => 'show',
                'data' => array(
                    'is_preview' => true,
                    'preview_image' => $blocks_path_uri . '/social/image.png'
                )
            )
        ),
    ));
}