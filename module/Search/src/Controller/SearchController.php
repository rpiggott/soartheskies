<?php

namespace Search\Controller;

use Search\Service\PageSearchRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SearchController extends AbstractActionController
{
    /** @var PageSearchRepositoryInterface */
    private $pageSearchRepository;

    public function __construct(PageSearchRepositoryInterface $pageSearchRepository)
    {
        $this->pageSearchRepository = $pageSearchRepository;
    }

    public function searchAction()
    {
        return new ViewModel([
            'entry' => $this->pageSearchRepository->findLatestEntry(),
        ]);
    }
}
