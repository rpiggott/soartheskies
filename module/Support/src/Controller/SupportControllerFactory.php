<?php

namespace Support\Controller;

use Support\Service\PageSupportRepositoryInterface;
use Support\Service\PageSupportMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class SupportControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageSupportRepository = $container->get(PageSupportRepositoryInterface::class);
        $pageSupportMetaDescriptionRepository = $container->get(PageSupportMetaDescriptionRepositoryInterface::class);

        return new SupportController(
            $pageSupportRepository,
            $pageSupportMetaDescriptionRepository
        );
    }
}

