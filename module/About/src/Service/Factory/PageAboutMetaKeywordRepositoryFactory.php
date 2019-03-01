<?php

namespace About\Service\Factory;

use Doctrine\ORM\EntityManager;
use About\Service\PageAboutMetaKeywordRepository;
use Psr\Container\ContainerInterface;

class PageAboutMetaKeywordRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageAboutMetaKeywordRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageAboutMetaKeywordRepository($entityManager);
    }
}
