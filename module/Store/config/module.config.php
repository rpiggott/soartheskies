<?php
namespace Store;

use Store\Service\Factory\PageStoreRepositoryFactory;
use Store\Service\PageStoreRepository;
use Store\Service\PageStoreRepositoryInterface;
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
        ],
        'aliases' => [
            PageStoreRepositoryInterface::class => PageStoreRepository::class,
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
