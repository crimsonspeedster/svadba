<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'block-two-col-with-image',
        'title' => 'Two col with image',
        'fields' => [
            [
                'key' => 'block-two-col-with-image_select',
                'label' => 'Image position',
                'name' => 'image_position',
                'type' => 'select',
                'choices' => [
                    'left' => 'Left',
                    'right' => 'Right',
                ],
                'allow_null' => 0,
                'multiple' => 0,
                'required' => 1,
                'default_value' => 'left',
                'ui' => 1,
                'return_format' => 'value',
                'ajax' => 0,
            ],
            [
                'key' => 'block-two-col-with-image_image',
                'name' => 'image_id',
                'label' => 'Image',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'block-two-col-with-image_description',
                'name' => 'description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 1,
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/two-col-with-image',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;