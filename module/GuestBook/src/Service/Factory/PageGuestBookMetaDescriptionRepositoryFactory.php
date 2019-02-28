<?php

namespace GuestBook\Service\Factory;

use Doctrine\ORM\EntityManager;
use GuestBook\Service\PageGuestBookMetaDescriptionRepository;
use Psr\Container\ContainerInterface;

class PageGuestBookMetaDescriptionRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageGuestBookMetaDescriptionRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageGuestBookMetaDescriptionRepository($entityManager);
    }
}

