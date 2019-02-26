<?php

namespace Photos\Service;

use Application\Entity\PagePhotos;

interface PagePhotosRepositoryInterface
{
    public function findLatestEntry(): PagePhotos;
}
