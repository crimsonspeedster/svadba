<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'block-social',
        'title' => 'Social',
        'fields' => [
            [
                'key' => 'block-social_lang',
                'label' => 'Show on this lang',
                'name' => 'social__lang',
                'type' => 'select',
                'choices' => [],
                'allow_null' => 1,
                'multiple' => 0,
                'required' => 0,
                'ui' => 1,
                'return_format' => 'value',
                'ajax' => 0,
            ],
            [
                'key' => 'block-social-repeater',
                'label' => 'Social',
                'name' => 'repeater',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'block-social-repeater_image',
                        'name' => 'image_id',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'block-social-repeater_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                    ],
                ],
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/social',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;