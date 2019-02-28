<?php

namespace GuestBook\Controller;

use GuestBook\Service\PageGuestBookRepositoryInterface;
use GuestBook\Service\PageGuestBookMetaDescriptionRepositoryInterface;
use Psr\Container\ContainerInterface;

class GuestBookControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageGuestBookRepository = $container->get(PageGuestBookRepositoryInterface::class);
        $pageGuestBookMetaDescriptionRepository = $container->get(PageGuestBookMetaDescriptionRepositoryInterface::class);

        return new GuestBookController(
            $pageGuestBookRepository,
            $pageGuestBookMetaDescriptionRepository
        );
    }
}

