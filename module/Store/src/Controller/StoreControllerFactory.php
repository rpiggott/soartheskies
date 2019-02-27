<?php

namespace Store\Controller;

use Store\Service\PageStoreRepositoryInterface;
use Psr\Container\ContainerInterface;

class StoreControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageStoreRepository = $container->get(PageStoreRepositoryInterface::class);

        return new StoreController($pageStoreRepository);
    }
}
