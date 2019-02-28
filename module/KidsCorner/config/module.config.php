<?php
namespace KidsCorner;

use KidsCorner\Service\Factory\PageKidsCornerRepositoryFactory;
use KidsCorner\Service\Factory\PageKidsCornerMetaDescriptionRepositoryFactory;
use KidsCorner\Service\PageKidsCornerRepository;
use KidsCorner\Service\PageKidsCornerMetaDescriptionRepository;
use KidsCorner\Service\PageKidsCornerRepositoryInterface;
use KidsCorner\Service\PageKidsCornerMetaDescriptionRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'kidscorner-kidscorner' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/kids-corner',
                    'defaults' => [
                        'controller'    => Controller\KidsCornerController::class,
                        'action'        => 'kidscorner',
                    ],
                ],
            ],
        ],

    ],
    'service_manager' => [
        'factories' => [
            PageKidsCornerRepository::class => PageKidsCornerRepositoryFactory::class,
            PageKidsCornerMetaDescriptionRepository::class => PageKidsCornerMetaDescriptionRepositoryFactory::class,
        ],
        'aliases' => [
            PageKidsCornerRepositoryInterface::class => PageKidsCornerRepository::class,
            PageKidsCornerMetaDescriptionRepositoryInterface::class => PageKidsCornerMetaDescriptionRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'KidsCorner' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\KidsCornerController::class => Controller\KidsCornerControllerFactory::class,
        ],
    ],
];
