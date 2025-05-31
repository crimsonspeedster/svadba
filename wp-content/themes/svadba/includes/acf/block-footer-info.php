<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'block-footer-info',
        'title' => 'Footer info',
        'fields' => [
            [
                'key' => 'block-footer-info_lang',
                'label' => 'Show on this lang',
                'name' => 'footer_info__lang',
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
                'key' => 'block-footer-info_image',
                'name' => 'footer_info__logo',
                'label' => 'Logo',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'block-footer-info_social',
                'label' => 'Social',
                'name' => 'footer_info__social',
                'type' => 'repeater',
                'required' => 0,
                'layout' => 'table',
                'min' => 0,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'block-footer-info_social-image',
                        'name' => 'image',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'block-footer-info_social-link',
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
                    'value' => 'acf/footer-info',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;