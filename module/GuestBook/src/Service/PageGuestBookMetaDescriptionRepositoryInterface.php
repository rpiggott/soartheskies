<?php

namespace GuestBook\Service;

use Application\Entity\PageGuestBookMetaDescription;

interface PageGuestBookMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageGuestBookMetaDescription;
}
