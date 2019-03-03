<?php
namespace About;

use About\Service\Factory\PageAboutRepositoryFactory;
use About\Service\Factory\PageAboutMetaDescriptionRepositoryFactory;
use About\Service\Factory\PageAboutMetaKeywordLinkRepositoryFactory;
use About\Service\PageAboutRepository;
use About\Service\PageAboutMetaDescriptionRepository;
use About\Service\PageAboutMetaKeywordLinkRepository;
use About\Service\PageAboutRepositoryInterface;
use About\Service\PageAboutMetaDescriptionRepositoryInterface;
use About\Service\PageAboutMetaKeywordLinkRepositoryInterface;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [

            'about-about' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/about',
                    'defaults' => [
                        'controller' => Controller\AboutController::class,
                        'action'     => 'about',
                    ],
                ],
            ],


        ],
    ],
    'service_manager' => [
        'factories' => [
            PageAboutRepository::class => PageAboutRepositoryFactory::class,
            PageAboutMetaDescriptionRepository::class => PageAboutMetaDescriptionRepositoryFactory::class,
            PageAboutMetaKeywordLinkRepository::class => PageAboutMetaKeywordLinkRepositoryFactory::class,
        ],
        'aliases' => [
            PageAboutRepositoryInterface::class => PageAboutRepository::class,
            PageAboutMetaDescriptionRepositoryInterface::class => PageAboutMetaDescriptionRepository::class,
            PageAboutMetaKeywordLinkRepositoryInterface::class => PageAboutMetaKeywordLinkRepository::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'About' => __DIR__ . '/../view',
        ],
        'template_map' => [
            'about/about' => __DIR__ . '/../view/about.pthml',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AboutController::class => Controller\AboutControllerFactory::class,
        ],
    ],
];
