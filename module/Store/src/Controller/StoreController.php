<?php

namespace Store\Controller;

use Store\Service\PageStoreRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StoreController extends AbstractActionController
{
    /** @var PageStoreRepositoryInterface */
    private $pageStoreRepository;

    public function __construct(PageStoreRepositoryInterface $pageStoreRepository)
    {
        $this->pageStoreRepository = $pageStoreRepository;
    }

    public function storeAction()
    {
        return new ViewModel([
            'entry' => $this->pageStoreRepository->findLatestEntry(),
        ]);
    }
}
