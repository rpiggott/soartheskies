<?php

namespace Search;

use Search\Service\Factory\PageSearchRepositoryFactory;
use Search\Service\PageSearchRepository;
use Search\Service\PageSearchRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

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
    'service_manager' => [
        'factories' => [
            PageSearchRepository::class => PageSearchRepositoryFactory::class,
        ],
        'aliases' => [
            PageSearchRepositoryInterface::class => PageSearchRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Search' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\SearchController::class => Controller\SearchControllerFactory::class,
        ],
    ],
];
