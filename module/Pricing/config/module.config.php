<?php

namespace Pricing;

use Pricing\Service\Factory\PagePricingRepositoryFactory;
use Pricing\Service\PagePricingRepository;
use Pricing\Service\PagePricingRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

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
    'service_manager' => [
        'factories' => [
            PagePricingRepository::class => PagePricingRepositoryFactory::class,
        ],
        'aliases' => [
            PagePricingRepositoryInterface::class => PagePricingRepository::class,
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
    'controllers' => [
        'factories' => [
            Controller\PricingController::class => Controller\PricingControllerFactory::class,
        ],
    ],
];
