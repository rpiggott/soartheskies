<?php

namespace Photos\Service;

use Application\Entity\PagePhotosMetaDescription;

interface PagePhotosMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PagePhotosMetaDescription;
}
