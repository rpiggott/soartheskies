<?php

namespace Support\Service\Factory;

use Doctrine\ORM\EntityManager;
use Support\Service\PageSupportRepository;
use Psr\Container\ContainerInterface;

class PageSupportRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageSupportRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageSupportRepository($entityManager);
    }
}

