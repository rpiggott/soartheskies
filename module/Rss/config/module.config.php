<?php
namespace Rss;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'rss-rss' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/rss',
                    'defaults' => [
                        'controller' => Controller\RssController::class,
                        'action'     => 'rss',
                    ],
                ],
            ],


        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\RssController::class => InvokableFactory::class
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Rss' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'rss/rss' => __DIR__ . '/../view/rss.pthml',
        ],
    ],
];
