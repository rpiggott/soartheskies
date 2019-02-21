<?php
namespace Home;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'home-home' => [
                'type'    => 'Segment',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/',
                    'defaults' => [
                        'controller'    => Controller\HomeController::class,
                        'action'        => 'index',
                    ],
                ],
            ],

        ],
    ],
    'service_manager' => [
        'factories' => [
            'Home\Service\HomePageContent' => 'Home\Service\Factory\HomePageContentFactory',
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Home' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\HomeController::class => Controller\HomeControllerFactory::class
        ],
    ],
];
