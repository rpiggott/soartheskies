<?php
namespace Store;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'store-store' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/store',
                    'defaults' => [
                        'controller' => Controller\StoreController::class,
                        'action'     => 'store',
                    ],
                ],
            ],


        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\StoreController::class => InvokableFactory::class
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Store' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'store/store' => __DIR__ . '/../view/store.pthml',
        ],
    ],
];
