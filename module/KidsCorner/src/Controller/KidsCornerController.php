<?php

namespace KidsCorner\Controller;

use KidsCorner\Service\PageKidsCornerRepositoryInterface;
use KidsCorner\Service\PageKidsCornerMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class KidsCornerController extends AbstractActionController
{
    /** @var PageKidsCornerRepositoryInterface */
    private $pageKidsCornerRepository;

    /** @var PageKidsCornerMetaDescriptionRepositoryInterface */
    private $pageKidsCornerMetaDescriptionRepository;

    public function __construct(
        PageKidsCornerRepositoryInterface $pageKidsCornerRepository,
        PageKidsCornerMetaDescriptionRepositoryInterface $pageKidsCornerMetaDescriptionRepository
    )
    {
        $this->pageKidsCornerRepository = $pageKidsCornerRepository;
        $this->pageKidsCornerMetaDescriptionRepository = $pageKidsCornerMetaDescriptionRepository;
    }

    public function kidscornerAction()
    {
        return new ViewModel([
            'content' => $this->pageKidsCornerRepository->findLatestEntry(),
            'metaDescription' => $this->pageKidsCornerMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
