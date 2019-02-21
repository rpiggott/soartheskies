<?php

namespace Home\Controller;

use Home\Service\PageHomeRepositoryInterface;
use Psr\Container\ContainerInterface;

class HomeControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageHomeRepository = $container->get(PageHomeRepositoryInterface::class);

        return new HomeController($pageHomeRepository);
    }
}
