<?php

namespace About\Service;

use Application\Entity\PageAbout;

interface PageAboutRepositoryInterface
{
    public function findLatestEntry(): PageAbout;
}

