<?php

namespace Store\Service;

use Application\Entity\PageStoreMetaDescription;

interface PageStoreMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageStoreMetaDescription;
}

