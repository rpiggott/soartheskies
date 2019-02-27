<?php

namespace About\Service\Factory;

use Doctrine\ORM\EntityManager;
use About\Service\PageAboutMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageAboutMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageAboutMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageAboutMetaDescriptionRepository($entityManager);
    }
}
