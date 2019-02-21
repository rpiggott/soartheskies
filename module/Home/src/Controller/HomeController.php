<?php

namespace Home\Controller;

use Home\Service\PageHomeRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HomeController extends AbstractActionController
{
    /** @var PageHomeRepositoryInterface */
    private $pageHomeRepository;

    public function __construct(PageHomeRepositoryInterface $pageHomeRepository)
    {
        $this->pageHomeRepository = $pageHomeRepository;
    }

    public function indexAction()
    {
        return new ViewModel([
            'entry' => $this->pageHomeRepository->findLatestEntry(),
        ]);
    }
}
