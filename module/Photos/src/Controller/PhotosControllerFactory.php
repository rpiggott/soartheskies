<?php

namespace Photos\Controller;

use Photos\Service\PagePhotosRepositoryInterface;
use Psr\Container\ContainerInterface;

class PhotosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pagePhotosRepository = $container->get(PagePhotosRepositoryInterface::class);

        return new PhotosController($pagePhotosRepository);
    }
}
