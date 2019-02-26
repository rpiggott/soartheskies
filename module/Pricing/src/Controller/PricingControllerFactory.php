<?php

namespace Pricing\Controller;

use Pricing\Service\PagePricingRepositoryInterface;
use Psr\Container\ContainerInterface;

class PricingControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pagePricingRepository = $container->get(PagePricingRepositoryInterface::class);

        return new PricingController($pagePricingRepository);
    }
}

