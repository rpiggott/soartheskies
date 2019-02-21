<?php
namespace Contact;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\ContactController::class => InvokableFactory::class,
        ],
    ],
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
    'view_manager' => [
        'template_path_stack' => [
            'Contact' => __DIR__ . '/../view',
        ],
    ],
];
