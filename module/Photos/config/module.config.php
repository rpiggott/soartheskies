<?php
namespace Photos;

use Photos\Service\Factory\PagePhotosRepositoryFactory;
use Photos\Service\Factory\PagePhotosMetaDescriptionRepositoryFactory;
use Photos\Service\PagePhotosRepository;
use Photos\Service\PagePhotosMetaDescriptionRepository;
use Photos\Service\PagePhotosRepositoryInterface;
use Photos\Service\PagePhotosMetaDescriptionRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'photos-photos' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/photo',
                    'defaults' => [
                        'controller'    => Controller\PhotosController::class,
                        'action'        => 'photos',
                    ],
                ],
            ],

        ],
    ],
    'service_manager' => [
        'factories' => [
            PagePhotosRepository::class => PagePhotosRepositoryFactory::class,
            PagePhotosMetaDescriptionRepository::class => PagePhotosMetaDescriptionRepositoryFactory::class,
        ],
        'aliases' => [
            PagePhotosRepositoryInterface::class => PagePhotosRepository::class,
            PagePhotosMetaDescriptionRepositoryInterface::class => PagePhotosMetaDescriptionRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Photos' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PhotosController::class => Controller\PhotosControllerFactory::class,
        ],
    ],
];
