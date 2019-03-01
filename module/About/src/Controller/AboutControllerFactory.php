<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use About\Service\PageAboutMetaDescriptionRepositoryInterface;
use About\Service\PageAboutMetaKeywordRepositoryInterface;
use Psr\Container\ContainerInterface;

class AboutControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageAboutRepository = $container->get(PageAboutRepositoryInterface::class);
        $pageAboutMetaDescriptionRepository = $container->get(PageAboutMetaDescriptionRepositoryInterface::class);
        $pageAboutMetaKeywordRepository = $container->get(PageAboutMetaKeywordRepositoryInterface::class);

        return new AboutController(
            $pageAboutRepository,
            $pageAboutMetaDescriptionRepository,
            $pageAboutMetaKeywordRepository
        );
    }
}

