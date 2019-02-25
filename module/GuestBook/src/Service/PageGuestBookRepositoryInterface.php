<?php

namespace GuestBook\Service;

use Application\Entity\PageGuestBook;

interface PageGuestBookRepositoryInterface
{
    public function findLatestEntry(): PageGuestBook;
}

