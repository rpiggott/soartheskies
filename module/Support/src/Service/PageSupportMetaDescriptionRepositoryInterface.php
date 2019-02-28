<?php

namespace Support\Service;

use Application\Entity\PageSupportMetaDescription;

interface PageSupportMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageSupportMetaDescription;
}

