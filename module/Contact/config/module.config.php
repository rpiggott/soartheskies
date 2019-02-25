<?php

namespace Contact;

use Contact\Service\Factory\PageContactRepositoryFactory;
use Contact\Service\PageContactRepository;
use Contact\Service\PageContactRepositoryInterface;
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
        ],
        'aliases' => [
            PageContactRepositoryInterface::class => PageContactRepository::class,
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
