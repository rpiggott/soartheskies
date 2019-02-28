<?php

namespace Home\Controller;

use Home\Service\PageHomeRepositoryInterface;
use Home\Service\PageHomeMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    /** @var PageHomeRepositoryInterface */
    private $pageHomeRepository;

    /** @var PageHomeMetaDescriptionRepositoryInterface */
    private $pageHomeMetaDescriptionRepository;

    public function __construct(
        PageHomeRepositoryInterface $pageHomeRepository,
        PageHomeMetaDescriptionRepositoryInterface $pageHomeMetaDescriptionRepository
    )
    {
        $this->pageHomeRepository = $pageHomeRepository;
        $this->pageHomeMetaDescriptionRepository = $pageHomeMetaDescriptionRepository;
    }

    public function indexAction()
    {
        return new ViewModel([
            'content' => $this->pageHomeRepository->findLatestEntry(),
            'metaDescription' => $this->pageHomeMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
