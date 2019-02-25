<?php

namespace Contact\Controller;

use Contact\Service\PageContactRepositoryInterface;
use Psr\Container\ContainerInterface;

class ContactControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageContactRepository = $container->get(PageContactRepositoryInterface::class);

        return new ContactController($pageContactRepository);
    }
}
