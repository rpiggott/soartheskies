<?php

namespace Search\Controller;

use Search\Service\PageSearchRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SearchController extends AbstractActionController
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
