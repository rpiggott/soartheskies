<?php
namespace KidsCorner;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'kidscorner-kidscorner' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/kids-corner',
                    'defaults' => [
                        'controller'    => Controller\KidsCornerController::class,
                        'action'        => 'kidscorner',
                    ],
                ],
            ],
        ],

    ],
    'view_manager' => [
        'template_path_stack' => [
            'KidsCorner' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\KidsCornerController::class => InvokableFactory::class,
        ],
    ],
];
