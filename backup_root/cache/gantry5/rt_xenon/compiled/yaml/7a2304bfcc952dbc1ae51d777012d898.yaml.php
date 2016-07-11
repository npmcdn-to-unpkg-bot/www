<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/nabc/public_html/templates/rt_xenon/blueprints/styles/overlay.yaml',
    'modified' => 1453474406,
    'data' => [
        'name' => 'Overlay Styles',
        'description' => 'Overlay styles for the Xenon theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#01a3d1'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
