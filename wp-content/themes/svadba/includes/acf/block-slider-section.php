<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'block-slider-section',
        'title' => 'Slider section',
        'fields' => [
            [
                'key' => 'block-slider-section_title',
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'block-slider-section_pretitle',
                'name' => 'pretitle',
                'label' => 'Pretitle',
                'type' => 'text',
                'required' => 0,
            ],
            [
                'key' => 'block-slider-section_description',
                'name' => 'description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 0,
            ],
            [
                'key' => 'block-slider-section-repeater',
                'label' => 'Repeater',
                'name' => 'repeater',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'block-slider-section-repeater_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
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
                    'value' => 'acf/slider-section',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;