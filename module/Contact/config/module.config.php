<?php

namespace Contact;

use Contact\Service\Factory\PageContactRepositoryFactory;
use Contact\Service\Factory\PageContactMetaDescriptionRepositoryFactory;
use Contact\Service\PageContactRepository;
use Contact\Service\PageContactMetaDescriptionRepository;
use Contact\Service\PageContactRepositoryInterface;
use Contact\Service\PageContactMetaDescriptionRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'contact-contact' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/contact',
                    'defaults' => [
                        'controller'    => Controller\ContactController::class,
                        'action'        => 'contact',
                    ],
                ],
            ],

        ],
    ],
    'service_manager' => [
        'factories' => [
            PageContactRepository::class => PageContactRepositoryFactory::class,
            PageContactMetaDescriptionRepository::class => PageContactMetaDescriptionRepositoryFactory::class,
        ],
        'aliases' => [
            PageContactRepositoryInterface::class => PageContactRepository::class,
            PageContactMetaDescriptionRepositoryInterface::class => PageContactMetaDescriptionRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Contact' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\ContactController::class => Controller\ContactControllerFactory::class,

        ],
    ],
];
