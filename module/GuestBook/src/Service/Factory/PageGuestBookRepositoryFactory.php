<?php

namespace GuestBook\Service\Factory;

use Doctrine\ORM\EntityManager;
use GuestBook\Service\PageGuestBookRepository;
use Psr\Container\ContainerInterface;

class PageGuestBookRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PageGuestBookRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PageGuestBookRepository($entityManager);
    }
}
