<?php

namespace Photos\Controller;

use Photos\Service\PagePhotosRepositoryInterface;
use Photos\Service\PagePhotosMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PhotosController extends AbstractActionController
{
    /** @var PagePhotosRepositoryInterface */
    private $pagePhotosRepository;

    /** @var PagePhotosMetaDescriptionRepositoryInterface */
    private $pagePhotosMetaDescriptionRepository;

    public function __construct(
        PagePhotosRepositoryInterface $pagePhotosRepository,
        PagePhotosMetaDescriptionRepositoryInterface $pagePhotosMetaDescriptionRepository
    )
    {
        $this->pagePhotosRepository = $pagePhotosRepository;
        $this->pagePhotosMetaDescriptionRepository = $pagePhotosMetaDescriptionRepository;
    }

    public function photosAction()
    {
        return new ViewModel([
            'content' => $this->pagePhotosRepository->findLatestEntry(),
            'metaDescription' => $this->pagePhotosMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}

