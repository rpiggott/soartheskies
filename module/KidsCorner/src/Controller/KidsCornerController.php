<?php

namespace KidsCorner\Controller;

use KidsCorner\Service\PageKidsCornerRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class KidsCornerController extends AbstractActionController
{
    /** @var PageKidsCornerRepositoryInterface */
    private $pageKidsCornerRepository;

    public function __construct(PageKidsCornerRepositoryInterface $pageKidsCornerRepository)
    {
        $this->pageKidsCornerRepository = $pageKidsCornerRepository;
    }

    public function kidscornerAction()
    {
        return new ViewModel([
            'entry' => $this->pageKidsCornerRepository->findLatestEntry(),
        ]);
    }
}
