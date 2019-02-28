<?php

namespace Contact\Service\Factory;

use Doctrine\ORM\EntityManager;
use Contact\Service\PageContactMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageContactMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageContactMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageContactMetaDescriptionRepository($entityManager);
    }
}

