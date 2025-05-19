<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'template-home',
        'title' => 'Home page',
        'fields' => [
            [
                'key' => 'template-home_tab-common',
                'label' => 'Common',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_common-link',
                'name' => 'common__link',
                'label' => 'Link',
                'type' => 'link',
                'return_format' => 'array',
                'required' => 0,
            ],
            [
                'key' => 'template-home_tab-ideal',
                'label' => 'Ideal',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_ideal-condition',
                'label' => 'Enable block?',
                'name' => 'ideal__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_ideal-text--left',
                'name' => 'ideal__text_left',
                'label' => 'Text (left)',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_ideal-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_ideal-text--right',
                'name' => 'ideal__text_right',
                'label' => 'Text (right)',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_ideal-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_tab-organization',
                'label' => 'Organization',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_organization-condition',
                'label' => 'Enable block?',
                'name' => 'organization__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_organization-description',
                'name' => 'organization__description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_organization-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_organization-link',
                'name' => 'organization__link',
                'label' => 'Link',
                'type' => 'link',
                'return_format' => 'array',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_organization-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_organization-images',
                'label' => 'Images',
                'name' => 'organization__images',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 3,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_organization-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_organization-images_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'template-home_organization-images_position',
                        'label' => 'Image position',
                        'name' => 'image_position',
                        'type' => 'select',
                        'choices' => [
                            'top' => 'Top',
                            'middle' => 'Middle',
                            'bottom' => 'Bottom',
                        ],
                        'allow_null' => 0,
                        'multiple' => 0,
                        'required' => 1,
                        'default_value' => 'top',
                        'ui' => 1,
                        'return_format' => 'value',
                        'ajax' => 0,
                    ],
                ],
            ],
            [
                'key' => 'template-home_tab-trust',
                'label' => 'Trust',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_trust-condition',
                'label' => 'Enable block?',
                'name' => 'trust__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_trust-title',
                'name' => 'trust__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_trust-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_trust-images',
                'label' => 'Images',
                'name' => 'trust__images',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 2,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_trust-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_trust-images_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'template-home_trust-image--right',
                'name' => 'trust__image_right',
                'label' => 'Image right',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_trust-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_trust-reasons',
                'label' => 'Reasons',
                'name' => 'trust__reasons',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 3,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_trust-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_trust-reasons_title',
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'template-home_trust-reasons_description',
                        'name' => 'description',
                        'label' => 'Description',
                        'type' => 'textarea',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'template-home_trust-link',
                'name' => 'trust__link',
                'label' => 'Link',
                'type' => 'link',
                'return_format' => 'array',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_trust-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_tab-result',
                'label' => 'Result',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_result-condition',
                'label' => 'Enable block?',
                'name' => 'result__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_result-title',
                'name' => 'result__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_result-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_result-block_with_arrow',
                'name' => 'result__block_with_arrow',
                'label' => 'Title for block with arrow',
                'type' => 'text',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_result-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_result-images',
                'label' => 'Images',
                'name' => 'result__images',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_result-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_result-images_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'template-home_tab-questions',
                'label' => 'Questions',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_questions-condition',
                'label' => 'Enable block?',
                'name' => 'questions__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_questions-title',
                'name' => 'questions__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_questions-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_questions-description',
                'name' => 'questions__description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_questions-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_questions-repeater',
                'label' => 'Repeater',
                'name' => 'questions__repeater',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_questions-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_questions-repeater_title',
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'key' => 'template-home_questions-repeater_description',
                        'name' => 'description',
                        'label' => 'Description',
                        'type' => 'wysiwyg',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'template-home_tab-wave',
                'label' => 'Wave',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_wave-condition',
                'label' => 'Enable block?',
                'name' => 'wave__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_wave-repeater',
                'label' => 'Repeater',
                'name' => 'wave__repeater',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_wave-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'template-home_wave-repeater_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'template-home_wave-repeater_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'template-home_tab-contact',
                'label' => 'Contact',
                'type' => 'tab',
            ],
            [
                'key' => 'template-home_contact-condition',
                'label' => 'Enable block?',
                'name' => 'contact__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'template-home_contact-title',
                'name' => 'contact__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_contact-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_contact-description',
                'name' => 'contact__description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_contact-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
            [
                'key' => 'template-home_questions-form_id',
                'label' => 'Form Id',
                'name' => 'contact__form_id',
                'type' => 'post_object',
                'post_type' => ['wpcf7_contact_form'],
                'multiple' => false,
                'return_format' => 'id',
                'required' => 1,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'template-home_contact-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page_templates/home.php',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;