<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController
{
    /** @var PageAboutRepositoryInterface */
    private $pageAboutRepository;

    public function __construct(PageAboutRepositoryInterface $pageAboutRepository)
    {
        $this->pageAboutRepository = $pageAboutRepository;
    }

    public function aboutAction()
    {
        return new ViewModel([
            'entry' => $this->pageAboutRepository->findLatestEntry(),
        ]);
    }
}

