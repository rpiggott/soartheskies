<?php

namespace Sitemap;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'router' => [
        'routes' => [

            'sitemap-sitemap' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/sitemap',
                    'defaults' => [
                        'controller'    => Controller\SitemapController::class,
                        'action'        => 'sitemap',
                    ],
                ],

            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Sitemap' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\SitemapController::class => InvokableFactory::class,
        ],
    ],
];
