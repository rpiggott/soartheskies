<?php
namespace Search;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'search-search' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/search',
                    'defaults' => [
                        'controller'    => Controller\SearchController::class,
                        'action'        => 'search',
                    ],
                ],
            ],

        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Search' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\SearchController::class => InvokableFactory::class,
        ],
    ],
];
