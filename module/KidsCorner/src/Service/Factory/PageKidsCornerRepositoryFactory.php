<?php

namespace KidsCorner\Service\Factory;

use Doctrine\ORM\EntityManager;
use KidsCorner\Service\PageKidsCornerRepository;
use Psr\Container\ContainerInterface;

class PageKidsCornerRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageKidsCornerRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageKidsCornerRepository($entityManager);
    }
}

