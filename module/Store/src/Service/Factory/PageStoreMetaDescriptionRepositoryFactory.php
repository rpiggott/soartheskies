<?php

namespace Store\Service\Factory;

use Doctrine\ORM\EntityManager;
use Store\Service\PageStoreMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageStoreMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageStoreMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageStoreMetaDescriptionRepository($entityManager);
    }
}

