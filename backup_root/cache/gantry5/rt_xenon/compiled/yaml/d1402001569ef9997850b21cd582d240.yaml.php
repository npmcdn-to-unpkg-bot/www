<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/nabc/public_html/templates/rt_xenon/particles/gridcontent.yaml',
    'modified' => 1453474406,
    'data' => [
        'name' => 'Grid Content',
        'description' => 'Display Grid Content.',
        'type' => 'particle',
        'icon' => 'fa-table',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Grid Content particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'readmore' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Text',
                    'description' => 'Specify the readmore text.',
                    'placeholder' => 'Enter readmore text'
                ],
                'readmorelink' => [
                    'type' => 'input.text',
                    'label' => 'Readmore Link',
                    'description' => 'Specify the readmore link address.'
                ],
                'readmoreclass' => [
                    'type' => 'select.select',
                    'label' => 'Readmore Style',
                    'description' => 'Style for the readmore button.',
                    'default' => 'button-3',
                    'options' => [
                        'button-2' => 'Button 2',
                        'button-3' => 'Button 3',
                        'button-4' => 'Button 4'
                    ]
                ],
                'cols' => [
                    'type' => 'select.select',
                    'label' => 'Grid Column',
                    'description' => 'Select the grid column amount',
                    'placeholder' => 'Select...',
                    'default' => 'g-gridcontent-2cols',
                    'options' => [
                        'g-gridcontent-1cols' => '1 Column',
                        'g-gridcontent-2cols' => '2 Columns',
                        'g-gridcontent-3cols' => '3 Columns',
                        'g-gridcontent-4cols' => '4 Columns',
                        'g-gridcontent-5cols' => '5 Columns',
                        'g-gridcontent-6cols' => '6 Columns'
                    ]
                ],
                'gridcontentitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.img' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the desired image.'
                        ],
                        '.textstyle' => [
                            'type' => 'select.select',
                            'label' => 'Title Class',
                            'description' => 'Choose the Title Style.',
                            'default' => 'g-gridcontent-title-style-1',
                            'options' => [
                                'g-gridcontent-title-style-1' => 'Style 1',
                                'g-gridcontent-title-style-2' => 'Style 2',
                                'g-gridcontent-title-style-3' => 'Style 3',
                                'g-gridcontent-title-style-4' => 'Style 4'
                            ]
                        ],
                        '.text1' => [
                            'type' => 'input.text',
                            'label' => 'SubTitle'
                        ],
                        '.text2' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ],
                        '.linktarget' => [
                            'type' => 'select.selectize',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.linkclass' => [
                            'type' => 'select.select',
                            'label' => 'Link Button Style',
                            'description' => 'Style for the Link Button.',
                            'default' => 'button-3',
                            'options' => [
                                'arrow' => 'Arrow',
                                'button-2' => 'Button 2',
                                'button-3' => 'Button 3',
                                'button-4' => 'Button 4'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
