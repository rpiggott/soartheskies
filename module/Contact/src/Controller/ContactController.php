<?php

namespace Contact\Controller;

use Contact\Service\PageContactRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController
{
    /** @var PageContactRepositoryInterface */
    private $pageContactRepository;

    public function __construct(PageContactRepositoryInterface $pageContactRepository)
    {
        $this->pageContactRepository = $pageContactRepository;
    }

    public function contactAction()
    {
        return new ViewModel([
            'entry' => $this->pageContactRepository->findLatestEntry(),
        ]);
    }
}
