<?php

namespace About\Service;

use Application\Entity\MetaKeyword;
use Application\Entity\PageAboutMetaKeywordLink;

interface PageAboutMetaKeywordRepositoryInterface
{
    public function findKeywordList(): PageAboutMetaKeyword;
}

