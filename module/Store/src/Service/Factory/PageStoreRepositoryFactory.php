<?php

namespace Store\Service\Factory;

use Doctrine\ORM\EntityManager;
use Store\Service\PageStoreRepository;
use Psr\Container\ContainerInterface;

class PageStoreRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageStoreRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageStoreRepository($entityManager);
    }
}

