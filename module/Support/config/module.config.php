<?php
namespace Support;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'support-support' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/support',
                    'defaults' => [
                        'controller'    => Controller\SupportController::class,
                        'action'        => 'support',
                    ],
                ],
            ],

        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Support' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\SupportController::class => InvokableFactory::class,
        ],
    ],
];
