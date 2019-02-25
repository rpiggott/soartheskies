<?php

namespace Contact\Service\Factory;

use Doctrine\ORM\EntityManager;
use Contact\Service\PageContactRepository;
use Psr\Container\ContainerInterface;

class PageContactRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageContactRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageContactRepository($entityManager);
    }
}
