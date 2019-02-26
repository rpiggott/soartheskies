<?php

namespace Photos\Service\Factory;

use Doctrine\ORM\EntityManager;
use Photos\Service\PagePhotosRepository;
use Psr\Container\ContainerInterface;

class PagePhotosRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PagePhotosRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PagePhotosRepository($entityManager);
    }
}

