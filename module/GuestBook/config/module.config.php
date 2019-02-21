<?php
namespace GuestBook;

use Zend\ServiceManager\Factory\InvokableFactory;

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
    'view_manager' => [
        'template_path_stack' => [
            'GuestBook' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\GuestBookController::class => InvokableFactory::class,
        ],
    ],
];
