<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/sean/user/plugins/smartypants/blueprints.yaml',
    'modified' => 1468606133,
    'data' => [
        'name' => 'Smartypants',
        'version' => '2.5.0',
        'description' => 'The **Smartypants** plugin performs smart typography transforms on quotes',
        'icon' => 'quote-left',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-smartypants',
        'keywords' => 'smartypants, plugin, quotes, typography',
        'bugs' => 'https://github.com/getgrav/grav-plugin-smartypants/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'enabled_in_admin' => [
                    'type' => 'toggle',
                    'label' => 'Enable in admin',
                    'highlight' => 0,
                    'default' => 0,
                    'help' => 'Should Smartypants plugin work in the admin during content preview',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twig_filter' => [
                    'type' => 'toggle',
                    'label' => 'Twig filter',
                    'highlight' => 1,
                    'default' => 1,
                    'help' => 'Load the Twig filter to be availble in Twig templates',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'process_title' => [
                    'type' => 'toggle',
                    'label' => 'Process titles',
                    'highlight' => 0,
                    'default' => 0,
                    'help' => 'Process page titles for Smartypants content',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'process_content' => [
                    'type' => 'toggle',
                    'label' => 'Process content',
                    'highlight' => 1,
                    'default' => 1,
                    'help' => 'Process page content for Smartypants content',
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'options' => [
                    'type' => 'text',
                    'label' => 'Options',
                    'size' => 'large',
                    'placeholder' => 'SmartyPants Options',
                    'help' => 'See the docs for documentation: https://github.com/michelf/php-smartypants'
                ],
                'overrides' => [
                    'type' => 'section',
                    'title' => 'Overrides',
                    'fields' => [
                        'dq_open' => [
                            'type' => 'text',
                            'label' => 'Double quote open',
                            'size' => 'small',
                            'placeholder' => '&amp;#8220;',
                            'help' => 'Custom HTML string for double quote open'
                        ],
                        'dq_close' => [
                            'type' => 'text',
                            'label' => 'Double quote close',
                            'size' => 'small',
                            'placeholder' => '&amp;#8221;',
                            'help' => 'Custom HTML string for double quote close'
                        ],
                        'sq_open' => [
                            'type' => 'text',
                            'label' => 'Single quote open',
                            'size' => 'small',
                            'placeholder' => '&amp;#8216;',
                            'help' => 'Custom HTML string for single quote open'
                        ],
                        'sq_close' => [
                            'type' => 'text',
                            'label' => 'Single quote close / apostrophe',
                            'size' => 'small',
                            'placeholder' => '&amp;#8217;',
                            'help' => 'Custom HTML string for single quote close and apostrophe'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
