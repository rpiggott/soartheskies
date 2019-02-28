<?php

namespace Search\Service\Factory;

use Doctrine\ORM\EntityManager;
use Search\Service\PageSearchMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageSearchMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageSearchMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageSearchMetaDescriptionRepository($entityManager);
    }
}
