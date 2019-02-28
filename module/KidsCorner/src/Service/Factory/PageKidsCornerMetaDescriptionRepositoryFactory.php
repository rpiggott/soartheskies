<?php

namespace KidsCorner\Service\Factory;

use Doctrine\ORM\EntityManager;
use KidsCorner\Service\PageKidsCornerMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageKidsCornerMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageKidsCornerMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageKidsCornerMetaDescriptionRepository($entityManager);
    }
}
