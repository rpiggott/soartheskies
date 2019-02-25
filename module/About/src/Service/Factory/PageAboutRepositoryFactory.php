<?php

namespace About\Service\Factory;

use Doctrine\ORM\EntityManager;
use About\Service\PageAboutRepository;
use Psr\Container\ContainerInterface;

class PageAboutRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageAboutRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageAboutRepository($entityManager);
    }
}
