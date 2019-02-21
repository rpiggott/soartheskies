<?php
namespace Pricing;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [

            'pricing-pricing' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/pricing',
                    'defaults' => [
                        'controller' => Controller\PricingController::class,
                        'action'     => 'pricing',
                    ],
                ],
            ],


        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PricingController::class => InvokableFactory::class
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Pricing' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'pricing/pricing' => __DIR__ . '/../view/pricing.pthml',
        ],
    ],
];
