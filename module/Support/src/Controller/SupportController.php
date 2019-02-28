<?php

namespace Support\Controller;

use Support\Service\PageSupportRepositoryInterface;
use Support\Service\PageSupportMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SupportController extends AbstractActionController
{
    /** @var PageSupportRepositoryInterface */
    private $pageSupportRepository;

    /** @var PageSupportMetaDescriptionRepositoryInterface */
    private $pageSupportMetaDescriptionRepository;

    public function __construct(
        PageSupportRepositoryInterface $pageSupportRepository,
        PageSupportMetaDescriptionRepositoryInterface $pageSupportMetaDescriptionRepository
    )
    {
        $this->pageSupportRepository = $pageSupportRepository;
        $this->pageSupportMetaDescriptionRepository = $pageSupportMetaDescriptionRepository;
    }

    public function supportAction()
    {
        return new ViewModel([
            'content' => $this->pageSupportRepository->findLatestEntry(),
            'metaDescription' => $this->pageSupportMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}
