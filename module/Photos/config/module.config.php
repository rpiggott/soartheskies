<?php
namespace Photos;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'photos-photos' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/photo',
                    'defaults' => [
                        'controller'    => Controller\PhotosController::class,
                        'action'        => 'photos',
                    ],
                ],
            ],

        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Photos' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PhotosController::class => InvokableFactory::class,
        ],
    ],
];
