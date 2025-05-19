<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'part-header',
        'title' => 'Header and footer',
        'fields' => [
            [
                'key' => 'part-header_tab',
                'label' => 'Header',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'part-header_image',
                'name' => 'header__bg_id',
                'label' => 'Image',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'part-header_title',
                'name' => 'header__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 0,
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;