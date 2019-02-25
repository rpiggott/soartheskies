<?php

namespace GuestBook\Controller;

use GuestBook\Service\PageGuestBookRepositoryInterface;
use Psr\Container\ContainerInterface;

class GuestBookControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $pageGuestBookRepository = $container->get(PageGuestBookRepositoryInterface::class);

        return new GuestBookController($pageGuestBookRepository);
    }
}

