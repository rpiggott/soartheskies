<?php

namespace Photos\Service\Factory;

use Doctrine\ORM\EntityManager;
use Photos\Service\PagePhotosMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PagePhotosMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PagePhotosMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PagePhotosMetaDescriptionRepository($entityManager);
    }
}

