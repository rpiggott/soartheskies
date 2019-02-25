<?php

namespace GuestBook;

use GuestBook\Service\Factory\PageGuestBookRepositoryFactory;
use GuestBook\Service\PageGuestBookRepository;
use GuestBook\Service\PageGuestBookRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'guestbook-guestbook' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/guest-book',
                    'defaults' => [
                        'controller'    => Controller\GuestBookController::class,
                        'action'        => 'guestbook',
                    ],
                ],
            ],

        ],
    ],
    'service_manager' => [
        'factories' => [
            PageGuestBookRepository::class => PageGuestBookRepositoryFactory::class,
        ],
        'aliases' => [
            PageGuestBookRepositoryInterface::class => PageGuestBookRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'GuestBook' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\GuestBookController::class => Controller\GuestBookControllerFactory::class,
        ],
    ],
];
