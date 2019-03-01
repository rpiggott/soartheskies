<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use About\Service\PageAboutMetaDescriptionRepositoryInterface;
use About\Service\PageAboutMetaKeywordRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController
{
    /** @var PageAboutRepositoryInterface */
    private $pageAboutRepository;

    /** @var PageAboutMetaDescriptionRepositoryInterface */
    private $pageAboutMetaDescriptionRepository;

    /** @var PageAboutMetaKeywordRepositoryInterface */
    private $pageAboutMetaKeywordRepository;

    public function __construct(
        PageAboutRepositoryInterface $pageAboutRepository,
        PageAboutMetaDescriptionRepositoryInterface $pageAboutMetaDescriptionRepository,
        PageAboutMetaKeywordRepositoryInterface $pageAboutMetaKeywordRepository
    )
    {
        $this->pageAboutRepository = $pageAboutRepository;
        $this->pageAboutMetaDescriptionRepository = $pageAboutMetaDescriptionRepository;
        $this->pageAboutMetaKeywordRepository = $pageAboutMetaKeywordRepository;
    }

    public function aboutAction()
    {
        return new ViewModel([
            'content' => $this->pageAboutRepository->findLatestEntry(),
            'metaDescription' => $this->pageAboutMetaDescriptionRepository->findLatestEntry(),
            'metaKeyword' => $this->pageAboutMetaKeywordRepository->findKeywordList(),
        ]);
    }
}

