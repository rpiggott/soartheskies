<?php

namespace Pricing\Service;

use Application\Entity\PagePricing;

interface PagePricingRepositoryInterface
{
    public function findLatestEntry(): PagePricing;
}

