<?php

namespace Search\Controller;

use Search\Service\PageSearchRepositoryInterface;
use Search\Service\PageSearchMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SearchController extends AbstractActionController
{
    /** @var PageSearchRepositoryInterface */
    private $pageSearchRepository;

    /** @var PageSearchMetaDescriptionRepositoryInterface */
    private $pageSearchMetaDescriptionRepository;

    public function __construct(
        PageSearchRepositoryInterface $pageSearchRepository,
        PageSearchMetaDescriptionRepositoryInterface $pageSearchMetaDescriptionRepository
    )
    {
        $this->pageSearchRepository = $pageSearchRepository;
        $this->pageSearchMetaDescriptionRepository = $pageSearchMetaDescriptionRepository;
    }

    public function searchAction()
    {
        return new ViewModel([
            'content' => $this->pageSearchRepository->findLatestEntry(),
            'metaDescription' => $this->pageSearchMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
