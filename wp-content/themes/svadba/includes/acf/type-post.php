<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'type-post',
        'title' => 'Post',
        'fields' => [
            [
                'key' => 'type-post_tab-header',
                'label' => 'Header',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'type-post_header-image',
                'name' => 'header__bg_id',
                'label' => 'Background image',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'type-post_header-date',
                'name' => 'header__date',
                'label' => 'Date',
                'type' => 'text',
                'required' => 0,
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;