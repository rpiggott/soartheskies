<?php

namespace Home\Controller;

use Home\Service\PageHomeRepositoryInterface;
use Home\Service\PageHomeMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class HomeControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageHomeRepository = $container->get(PageHomeRepositoryInterface::class);
        $pageHomeMetaDescriptionRepository = $container->get(PageHomeMetaDescriptionRepositoryInterface::class);

        return new HomeController(
            $pageHomeRepository,
            $pageHomeMetaDescriptionRepository
        );
    }
}
