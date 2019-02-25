<?php

namespace Contact\Service;

use Application\Entity\PageContact;

interface PageContactRepositoryInterface
{
    public function findLatestEntry(): PageContact;
}

