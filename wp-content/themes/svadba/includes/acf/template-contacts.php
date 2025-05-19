<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'template-contacts',
        'title' => 'Contacts page',
        'fields' => [
            [
                'key' => 'template-contacts_tab-contacts',
                'label' => 'Contacts',
                'type' => 'tab',
            ],
            [
                'key' => 'template-contacts_contacts-repeater',
                'label' => 'Repeater',
                'name' => 'contacts__repeater',
                'type' => 'repeater',
                'required' => 1,
                'layout' => 'table',
                'min' => 1,
                'max' => 0,
                'sub_fields' => [
                    [
                        'key' => 'template-contacts_contacts-repeater_condition',
                        'label' => 'Is link?',
                        'name' => 'is_link',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                    ],
                    [
                        'key' => 'template-contacts_contacts-repeater_image',
                        'name' => 'icon',
                        'label' => 'Icon',
                        'type' => 'image',
                        'return_format' => 'id',
                        'required' => 1,
                    ],
                    [
                        'key' => 'template-contacts_contacts-repeater_text',
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'template-contacts_contacts-repeater_condition',
                                    'operator' => '==',
                                    'value' => '0',
                                ),
                            ),
                        ),
                    ],
                    [
                        'key' => 'template-contacts_contacts-repeater_link',
                        'name' => 'link',
                        'label' => 'Link',
                        'type' => 'link',
                        'return_format' => 'array',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'template-contacts_contacts-repeater_condition',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                    ],
                ],
            ],
            [
                'key' => 'template-contacts_tab-map',
                'label' => 'Map',
                'type' => 'tab',
            ],
            [
                'key' => 'template-contacts_map-iframe',
                'name' => 'map__iframe',
                'label' => 'Iframe',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'template-contacts_tab-form',
                'label' => 'Form',
                'type' => 'tab',
            ],

            [
                'key' => 'template-contacts_form-title',
                'name' => 'form__title',
                'label' => 'Title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'key' => 'template-contacts_form-description',
                'name' => 'form__description',
                'label' => 'Description',
                'type' => 'textarea',
                'required' => 0,
            ],
            [
                'key' => 'template-contacts_form-image',
                'name' => 'form__image',
                'label' => 'Image',
                'type' => 'image',
                'return_format' => 'id',
                'required' => 1,
            ],
            [
                'key' => 'template-contacts_form-id',
                'label' => 'Form Id',
                'name' => 'form__form_id',
                'type' => 'post_object',
                'post_type' => ['wpcf7_contact_form'],
                'multiple' => false,
                'return_format' => 'id',
                'required' => 1,
            ],
        ],
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page_templates/contacts.php',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'label_placement' => 'top',
        'active' => true,
    ));

endif;