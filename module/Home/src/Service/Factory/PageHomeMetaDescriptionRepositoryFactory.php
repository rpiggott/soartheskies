<?php

namespace Home\Service\Factory;

use Doctrine\ORM\EntityManager;
use Home\Service\PageHomeMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageHomeMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageHomeMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageHomeMetaDescriptionRepository($entityManager);
    }
}
