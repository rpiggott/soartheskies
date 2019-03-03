<?php

namespace About\Controller;

use About\Service\PageAboutRepositoryInterface;
use About\Service\PageAboutMetaDescriptionRepositoryInterface;
use About\Service\PageAboutMetaKeywordLinkRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController
{
    /** @var PageAboutRepositoryInterface */
    private $pageAboutRepository;

    /** @var PageAboutMetaDescriptionRepositoryInterface */
    private $pageAboutMetaDescriptionRepository;

    /** @var PageAboutMetaKeywordLinkRepositoryInterface */
    private $pageAboutMetaKeywordLinkRepository;

    public function __construct(
        PageAboutRepositoryInterface $pageAboutRepository,
        PageAboutMetaDescriptionRepositoryInterface $pageAboutMetaDescriptionRepository,
        PageAboutMetaKeywordLinkRepositoryInterface $pageAboutMetaKeywordLinkRepository
    )
    {
        $this->pageAboutRepository = $pageAboutRepository;
        $this->pageAboutMetaDescriptionRepository = $pageAboutMetaDescriptionRepository;
        $this->pageAboutMetaKeywordLinkRepository = $pageAboutMetaKeywordLinkRepository;
    }

    public function aboutAction()
    {
        return new ViewModel([
            'content' => $this->pageAboutRepository->findLatestEntry(),
            'metaDescription' => $this->pageAboutMetaDescriptionRepository->findLatestEntry(),
            'metaKeyword' => $this->pageAboutMetaKeywordLinkRepository->findKeywordList(),
        ]);
    }
}
