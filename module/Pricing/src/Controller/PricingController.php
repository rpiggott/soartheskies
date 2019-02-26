<?php

namespace Pricing\Controller;

use Pricing\Service\PagePricingRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PricingController extends AbstractActionController
{
    /** @var PagePricingRepositoryInterface */
    private $pagePricingRepository;

    public function __construct(PagePricingRepositoryInterface $pagePricingRepository)
    {
        $this->pagePricingRepository = $pagePricingRepository;
    }

    public function pricingAction()
    {
        return new ViewModel([
            'entry' => $this->pagePricingRepository->findLatestEntry(),
        ]);
    }
}
