<?php

namespace KidsCorner\Service;

use Application\Entity\PageKidsCorner;

interface PageKidsCornerRepositoryInterface
{
    public function findLatestEntry(): PageKidsCorner;
}

