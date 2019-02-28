<?php

namespace Support\Service\Factory;

use Doctrine\ORM\EntityManager;
use Support\Service\PageSupportMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageSupportMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageSupportMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageSupportMetaDescriptionRepository($entityManager);
    }
}

