<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use Psr\Container\ContainerInterface;

class AboutControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageAboutRepository = $container->get(PageAboutRepositoryInterface::class);

        return new AboutController($pageAboutRepository);
    }
}

