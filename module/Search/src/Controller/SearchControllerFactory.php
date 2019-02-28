<?php

namespace Search\Controller;

use Search\Service\PageSearchRepositoryInterface;
use Search\Service\PageSearchMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class SearchControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageSearchRepository = $container->get(PageSearchRepositoryInterface::class);
        $pageSearchMetaDescriptionRepository = $container->get(PageSearchMetaDescriptionRepositoryInterface::class);

        return new SearchController(
            $pageSearchRepository,
            $pageSearchMetaDescriptionRepository
        );
    }
}

