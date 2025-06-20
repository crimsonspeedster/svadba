<?php

if( function_exists('acf_add_local_field_group') ) {
    acf_add_local_field_group(array(
        'key' => 'acf_theme_settings',
        'title' => 'Theme settings',
        'fields' => [
            [
                'key' => 'acf_theme_settings-tab-common',
                'label' => 'Common',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'acf_theme_settings_common-header_logo',
                'name' => 'common__header_logo',
                'label' => 'Header logo (for light)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'acf_theme_settings_common-header_logo--dark',
                'name' => 'common__header_logo_dark',
                'label' => 'Header logo (for dark)',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'acf_theme_settings_common-footer_bg',
                'name' => 'common__footer_bg',
                'label' => 'Footer bg',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'acf_theme_settings_common-header-social',
                'label' => 'Header social',
                'name' => 'common__header_social',
                'type' => 'repeater',
                'required' => 0,
                'layout' => 'table',
                'min' => 0,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'acf_theme_settings_common-header-social_image',
                        'name' => 'image',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'acf_theme_settings_common-header-social_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'acf_theme_settings_common-header-contacts',
                'label' => 'Header contacts',
                'name' => 'common__contacts',
                'type' => 'repeater',
                'required' => 0,
                'layout' => 'table',
                'min' => 0,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'acf_theme_settings_common-header-contacts_image',
                        'name' => 'image',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'acf_theme_settings_common-header-contacts_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'acf_theme_settings_tab-wave',
                'label' => 'Wave',
                'type' => 'tab',
            ],
            [
                'key' => 'acf_theme_settings_wave-condition',
                'label' => 'Enable block?',
                'name' => 'wave__condition',
                'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
            ],
            [
                'key' => 'acf_theme_settings_wave-repeater',
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
                            'field' => 'acf_theme_settings_wave-condition',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'sub_fields' => [
                    [
                        'key' => 'acf_theme_settings_wave-repeater_image',
                        'name' => 'image_id',
                        'label' => 'Image',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'acf_theme_settings_wave-repeater_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                    ],
                ],
            ],
            [
                'key' => 'acf_theme_settings-tab-error',
                'label' => '404',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'key' => 'acf_theme_settings_error-header_bg',
                'name' => 'error__header_bg',
                'label' => 'BG for header',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'acf_theme_settings_error-description',
                'name' => 'error__description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'required' => 0,
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
    ));
}