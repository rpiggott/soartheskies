<?php

namespace Store\Controller;

use Store\Service\PageStoreRepositoryInterface;
use Store\Service\PageStoreMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StoreController extends AbstractActionController
{
    /** @var PageStoreRepositoryInterface */
    private $pageStoreRepository;

    /** @var PageStoreMetaDescriptionRepositoryInterface */
    private $pageStoreMetaDescriptionRepository;

    public function __construct(
        PageStoreRepositoryInterface $pageStoreRepository,
        PageStoreMetaDescriptionRepositoryInterface $pageStoreMetaDescriptionRepository
    )
    {
        $this->pageStoreRepository = $pageStoreRepository;
        $this->pageStoreMetaDescriptionRepository = $pageStoreMetaDescriptionRepository;
    }

    public function storeAction()
    {
        return new ViewModel([
            'content' => $this->pageStoreRepository->findLatestEntry(),
            'metaDescription' => $this->pageStoreMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
