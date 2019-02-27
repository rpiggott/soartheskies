<?php

namespace Store\Service;

use Application\Entity\PageStore;

interface PageStoreRepositoryInterface
{
    public function findLatestEntry(): PageStore;
}

