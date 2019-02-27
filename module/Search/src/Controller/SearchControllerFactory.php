<?php

namespace Search\Controller;

use Search\Service\PageSearchRepositoryInterface;
use Psr\Container\ContainerInterface;

class SearchControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageSearchRepository = $container->get(PageSearchRepositoryInterface::class);

        return new SearchController($pageSearchRepository);
    }
}

