<?php

namespace KidsCorner\Controller;

use KidsCorner\Service\PageKidsCornerRepositoryInterface;
use KidsCorner\Service\PageKidsCornerMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class KidsCornerControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageKidsCornerRepository = $container->get(PageKidsCornerRepositoryInterface::class);
        $pageKidsCornerMetaDescriptionRepository = $container->get(PageKidsCornerMetaDescriptionRepositoryInterface::class);

        return new KidsCornerController(
            $pageKidsCornerRepository,
            $pageKidsCornerMetaDescriptionRepository
        );
    }
}

