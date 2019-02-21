<?php

namespace Home\Service;

use Application\Entity\PageHome;

interface PageHomeRepositoryInterface
{
    public function findLatestEntry(): PageHome;
}
