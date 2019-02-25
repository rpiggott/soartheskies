<?php

namespace KidsCorner\Controller;

use KidsCorner\Service\PageKidsCornerRepositoryInterface;
use Psr\Container\ContainerInterface;

class KidsCornerControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageKidsCornerRepository = $container->get(PageKidsCornerRepositoryInterface::class);

        return new KidsCornerController($pageKidsCornerRepository);
    }
}

