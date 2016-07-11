<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/nabc/public_html/templates/rt_xenon/blueprints/styles/font.yaml',
    'modified' => 1453474406,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Xenon theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'roboto, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'montserrat, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-promo' => [
                    'type' => 'input.fonts',
                    'label' => 'Promo Font',
                    'default' => 'montserrat, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];