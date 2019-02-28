<?php

namespace Search\Service;

use Application\Entity\PageSearchMetaDescription;

interface PageSearchMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageSearchMetaDescription;
}

