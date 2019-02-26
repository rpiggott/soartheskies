<?php

namespace Pricing\Service\Factory;

use Doctrine\ORM\EntityManager;
use Pricing\Service\PagePricingRepository;
use Psr\Container\ContainerInterface;

class PagePricingRepositoryFactory
{
    public function __invoke(ContainerInterface $container): PagePricingRepository
    {
        $entityManager = $container->get(EntityManager::class);

        return new PagePricingRepository($entityManager);
    }
}

