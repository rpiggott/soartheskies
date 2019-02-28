<?php

namespace Home\Service;

use Application\Entity\PageHomeMetaDescription;

interface PageHomeMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageHomeMetaDescription;
}

