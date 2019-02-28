<?php

namespace KidsCorner\Service;

use Application\Entity\PageKidsCornerMetaDescription;

interface PageKidsCornerMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageKidsCornerMetaDescription;
}

