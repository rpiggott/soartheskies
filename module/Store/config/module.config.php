<?php
namespace Store;

use Store\Service\Factory\PageStoreRepositoryFactory;
use Store\Service\Factory\PageStoreMetaDescriptionRepositoryFactory;
use Store\Service\PageStoreRepository;
use Store\Service\PageStoreMetaDescriptionRepository;
use Store\Service\PageStoreRepositoryInterface;
use Store\Service\PageStoreMetaDescriptionRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'store-store' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/store',
                    'defaults' => [
                        'controller' => Controller\StoreController::class,
                        'action'     => 'store',
                    ],
                ],
            ],


        ],
    ],
    'service_manager' => [
        'factories' => [
            PageStoreRepository::class => PageStoreRepositoryFactory::class,
            PageStoreMetaDescriptionRepository::class => PageStoreMetaDescriptionRepositoryFactory::class,
        ],
        'aliases' => [
            PageStoreRepositoryInterface::class => PageStoreRepository::class,
            PageStoreMetaDescriptionRepositoryInterface::class => PageStoreMetaDescriptionRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Store' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'store/store' => __DIR__ . '/../view/store.pthml',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\StoreController::class => Controller\StoreControllerFactory::class,
        ],
    ],
];
