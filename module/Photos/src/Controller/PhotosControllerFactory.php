<?php

namespace Photos\Controller;

use Photos\Service\PagePhotosRepositoryInterface;
use Photos\Service\PagePhotosMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class PhotosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pagePhotosRepository = $container->get(PagePhotosRepositoryInterface::class);
        $pagePhotosMetaDescriptionRepository = $container->get(PagePhotosMetaDescriptionRepositoryInterface::class);

        return new PhotosController(
            $pagePhotosRepository,
            $pagePhotosMetaDescriptionRepository
        );
    }
}
