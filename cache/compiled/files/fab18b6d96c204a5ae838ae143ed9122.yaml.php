<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/sean/user/themes/sean/blueprints/home.yaml',
    'modified' => 1468546639,
    'data' => [
        'title' => 'Homepage',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'feature' => [
                            'type' => 'tab',
                            'title' => 'Page Content',
                            'ordering@' => 1,
                            'fields' => [
                                'header.homehero' => [
                                    'name' => 'Hero',
                                    'type' => 'section',
                                    'title' => 'Hero Section',
                                    'text' => 'Only add one item to this field!',
                                    'underline' => true,
                                    'fields' => [
                                        'header.homeHeroList' => [
                                            'name' => 'Home Hero List',
                                            'type' => 'list',
                                            'fields' => [
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Hero Title'
                                                ],
                                                '.subtitle' => [
                                                    'type' => 'text',
                                                    'label' => 'Hero Sub-title'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.subheadingSection' => [
                                    'name' => 'Sub-Heading',
                                    'type' => 'section',
                                    'title' => 'Sub Heading Section',
                                    'text' => 'Only add one item to this field!',
                                    'underline' => true,
                                    'fields' => [
                                        'header.subheadingList' => [
                                            'name' => 'Sub Heading List',
                                            'type' => 'list',
                                            'fields' => [
                                                '.copy' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Sub-Heading Copy'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.featured' => [
                                    'name' => 'Featured-Service',
                                    'type' => 'section',
                                    'title' => 'Featured Service/Loan',
                                    'text' => 'Only add one item to this field!',
                                    'underline' => true,
                                    'fields' => [
                                        'header.featuredService' => [
                                            'name' => 'Featured Title',
                                            'type' => 'list',
                                            'fields' => [
                                                '.title' => [
                                                    'name' => 'Title',
                                                    'type' => 'text',
                                                    'label' => 'Title'
                                                ],
                                                '.copy' => [
                                                    'name' => 'Copy',
                                                    'type' => 'textarea',
                                                    'label' => 'Copy'
                                                ],
                                                '.buttonText' => [
                                                    'name' => 'Button-Text',
                                                    'type' => 'text',
                                                    'label' => 'Button Text'
                                                ],
                                                '.buttonLink' => [
                                                    'name' => 'Button-URL',
                                                    'type' => 'pages',
                                                    'label' => 'Button Link'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.serviceGridSection' => [
                                    'name' => 'Service Grid',
                                    'type' => 'section',
                                    'title' => 'Services Grid',
                                    'text' => 'Add as many services as needed',
                                    'underline' => true,
                                    'fields' => [
                                        'header.serviceList' => [
                                            'name' => 'Service List',
                                            'type' => 'list',
                                            'fields' => [
                                                '.serviceImage' => [
                                                    'name' => 'Service Image',
                                                    'type' => 'pagemediaselect'
                                                ],
                                                '.serviceTitle' => [
                                                    'name' => 'Service Title',
                                                    'type' => 'text',
                                                    'label' => 'Service Title'
                                                ],
                                                '.serviceLink' => [
                                                    'name' => 'Service Link',
                                                    'type' => 'text',
                                                    'label' => 'Link text'
                                                ],
                                                '.serviceLinkURL' => [
                                                    'name' => 'Service Link url',
                                                    'type' => 'pages',
                                                    'label' => 'Link url'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
