<?php

namespace Search\Service;

use Application\Entity\PageSearch;

interface PageSearchRepositoryInterface
{
    public function findLatestEntry(): PageSearch;
}

