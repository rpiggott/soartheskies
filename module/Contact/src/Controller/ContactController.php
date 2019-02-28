<?php

namespace Contact\Controller;

use Contact\Service\PageContactRepositoryInterface;
use Contact\Service\PageContactMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController
{
    /** @var PageContactRepositoryInterface */
    private $pageContactRepository;

    /** @var PageContactMetaDescriptionRepositoryInterface */
    private $pageContactMetaDescriptionRepository;

    public function __construct(
        PageContactRepositoryInterface $pageContactRepository,
        PageContactMetaDescriptionRepositoryInterface $pageContactMetaDescriptionRepository
    )
    {
        $this->pageContactRepository = $pageContactRepository;
        $this->pageContactMetaDescriptionRepository = $pageContactMetaDescriptionRepository;
    }

    public function contactAction()
    {
        return new ViewModel([
            'content' => $this->pageContactRepository->findLatestEntry(),
            'metaDescription' => $this->pageContactMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
