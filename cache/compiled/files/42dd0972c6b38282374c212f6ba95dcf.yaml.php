<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/sean/user/themes/sean/blueprints.yaml',
    'modified' => 1468513376,
    'data' => [
        'name' => 'Sean Cragg',
        'version' => '1.0.0-beta',
        'enabled' => true,
        'description' => 'Main Theme for Sean Cragg',
        'icon' => 'empire',
        'author' => [
            'name' => 'Joe Hochgreve',
            'email' => 'jhochgreve@gmail.com',
            'url' => 'joehochgreve.website'
        ],
        'homepage' => 'joehochgreve.website',
        'keywords' => 'Sean, Cragg, theme, mortgage, fast, responsive, html5, css3',
        'bugs' => 'jhochgreve@gmail.com',
        'license' => 'GNU LGPLv3',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
