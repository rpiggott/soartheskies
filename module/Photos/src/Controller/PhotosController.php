<?php

namespace Photos\Controller;

use Photos\Service\PagePhotosRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PhotosController extends AbstractActionController
{
    /** @var PagePhotosRepositoryInterface */
    private $pagePhotosRepository;

    public function __construct(PagePhotosRepositoryInterface $pagePhotosRepository)
    {
        $this->pagePhotosRepository = $pagePhotosRepository;
    }

    public function photosAction()
    {
        return new ViewModel([
            'entry' => $this->pagePhotosRepository->findLatestEntry(),
        ]);
    }
}

