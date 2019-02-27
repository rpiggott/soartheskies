<?php

namespace About\Service;

use Application\Entity\PageAboutMetaDescription;

interface PageAboutMetaDescriptionRepositoryInterface
{
    public function findLatestEntry(): PageAboutMetaDescription;
}

