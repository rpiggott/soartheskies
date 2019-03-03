<?php

namespace About\Service\Factory;

use Doctrine\ORM\EntityManager;
use About\Service\PageAboutMetaKeywordLinkRepository;
use Psr\Container\ContainerInterface;

class PageAboutMetaKeywordLinkRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageAboutMetaKeywordLinkRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageAboutMetaKeywordLinkRepository($entityManager);
    }
}
