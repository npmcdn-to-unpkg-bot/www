<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/nabc/public_html/templates/rt_xenon/blueprints/styles/navigation.yaml',
    'modified' => 1453474406,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation styles for the Xenon theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(0, 0, 0, 0)'
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