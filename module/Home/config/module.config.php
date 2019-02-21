<?php

namespace Home;

use Home\Service\Factory\PageHomeRepositoryFactory;
use Home\Service\PageHomeRepository;
use Home\Service\PageHomeRepositoryInterface;
use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [

            'home-home' => [
                'type' => Literal::class,
                'options' => [
                    // Change this to something specific to your module
                    'route' => '/',
                    'defaults' => [
                        'controller' => Controller\HomeController::class,
                        'action' => 'index',
                    ],
                ],
            ],

        ],
    ],
    'service_manager' => [
        'factories' => [
            PageHomeRepository::class => PageHomeRepositoryFactory::class,
        ],
        'aliases' => [
            PageHomeRepositoryInterface::class => PageHomeRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Home' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\HomeController::class => Controller\HomeControllerFactory::class,
        ],
    ],
];
