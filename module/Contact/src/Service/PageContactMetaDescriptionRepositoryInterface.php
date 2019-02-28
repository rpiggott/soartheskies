<?php

namespace Contact\Service;

use Application\Entity\PageContactMetaDescription;

interface PageContactMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageContactMetaDescription;
}
