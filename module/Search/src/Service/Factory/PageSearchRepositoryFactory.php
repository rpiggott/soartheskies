<?php

namespace Search\Service\Factory;

use Doctrine\ORM\EntityManager;
use Search\Service\PageSearchRepository;
use Psr\Container\ContainerInterface;

class PageSearchRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageSearchRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageSearchRepository($entityManager);
    }
}

