<?php

namespace Support\Controller;

use Support\Service\PageSupportRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SupportController extends AbstractActionController
{
    /** @var PageSupportRepositoryInterface */
    private $pageSupportRepository;

    public function __construct(PageSupportRepositoryInterface $pageSupportRepository)
    {
        $this->pageSupportRepository = $pageSupportRepository;
    }

    public function supportAction()
    {
        return new ViewModel([
            'entry' => $this->pageSupportRepository->findLatestEntry(),
        ]);
    }
}
