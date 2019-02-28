<?php

namespace Contact\Controller;

use Contact\Service\PageContactRepositoryInterface;
use Contact\Service\PageContactMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class ContactControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageContactRepository = $container->get(PageContactRepositoryInterface::class);
        $pageContactMetaDescriptionRepository = $container->get(PageContactMetaDescriptionRepositoryInterface::class);

        return new ContactController(
            $pageContactRepository,
            $pageContactMetaDescriptionRepository
        );
    }
}
