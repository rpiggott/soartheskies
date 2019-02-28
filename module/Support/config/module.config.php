<?php

namespace Support;

use Support\Service\Factory\PageSupportRepositoryFactory;
use Support\Service\Factory\PageSupportMetaDescriptionRepositoryFactory;
use Support\Service\PageSupportRepository;
use Support\Service\PageSupportMetaDescriptionRepository;
use Support\Service\PageSupportRepositoryInterface;
use Support\Service\PageSupportMetaDescriptionRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

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
    'service_manager' => [
        'factories' => [
            PageSupportRepository::class => PageSupportRepositoryFactory::class,
            PageSupportMetaDescriptionRepository::class => PageSupportMetaDescriptionRepositoryFactory::class,
        ],
        'aliases' => [
            PageSupportRepositoryInterface::class => PageSupportRepository::class,
            PageSupportMetaDescriptionRepositoryInterface::class => PageSupportMetaDescriptionRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Support' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\SupportController::class => Controller\SupportControllerFactory::class,
        ],
    ],
];
