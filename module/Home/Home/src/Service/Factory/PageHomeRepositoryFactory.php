<?php

namespace Home\Service\Factory;

use Doctrine\ORM\EntityManager;
use Home\Service\PageHomeRepository;
use Psr\Container\ContainerInterface;

class PageHomeRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageHomeRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageHomeRepository($entityManager);
    }
}

