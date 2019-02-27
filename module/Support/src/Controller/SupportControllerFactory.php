<?php

namespace Support\Controller;

use Support\Service\PageSupportRepositoryInterface;
use Psr\Container\ContainerInterface;

class SupportControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageSupportRepository = $container->get(PageSupportRepositoryInterface::class);

        return new SupportController($pageSupportRepository);
    }
}

