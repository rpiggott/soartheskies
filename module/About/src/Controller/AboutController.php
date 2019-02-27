<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use About\Service\PageAboutMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController
{
    /** @var PageAboutRepositoryInterface */
    private $pageAboutRepository;

    /** @var PageAboutMetaDescriptionRepositoryInterface */
    private $pageAboutMetaDescriptionRepository;

    public function __construct(
        PageAboutRepositoryInterface $pageAboutRepository,
        PageAboutMetaDescriptionRepositoryInterface $pageAboutMetaDescriptionRepository
    )
    {
        $this->pageAboutRepository = $pageAboutRepository;
        $this->pageAboutMetaDescriptionRepository = $pageAboutMetaDescriptionRepository;
    }

    public function aboutAction()
    {
        return new ViewModel([
            'content' => $this->pageAboutRepository->findLatestEntry(),
            'metaDescription' => $this->pageAboutMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}

