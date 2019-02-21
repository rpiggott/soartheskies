<?php
namespace About;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'about-about' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/about',
                    'defaults' => [
                        'controller' => Controller\AboutController::class,
                        'action'     => 'about',
                    ],
                ],
            ],


        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AboutController::class => InvokableFactory::class
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'About' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'about/about' => __DIR__ . '/../view/about.pthml',
        ],
    ],
];
