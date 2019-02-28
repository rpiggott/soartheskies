<?php

namespace Store\Controller;

use Store\Service\PageStoreRepositoryInterface;
use Store\Service\PageStoreMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class StoreControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageStoreRepository = $container->get(PageStoreRepositoryInterface::class);
        $pageStoreMetaDescriptionRepository = $container->get(PageStoreMetaDescriptionRepositoryInterface::class);

        return new StoreController(
            $pageStoreRepository,
            $pageStoreMetaDescriptionRepository
        );
    }
}
