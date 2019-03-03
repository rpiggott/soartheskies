<?php

namespace About\Service;

use Application\Entity\PageAboutMetaKeywordLink;

interface PageAboutMetaKeywordLinkRepositoryInterface
{
    public function findKeywordList(): PageAboutMetaKeywordLink;
}

