<?php

namespace Support\Service;

use Application\Entity\PageSupport;

interface PageSupportRepositoryInterface
{
    public function findLatestEntry(): PageSupport;
}

