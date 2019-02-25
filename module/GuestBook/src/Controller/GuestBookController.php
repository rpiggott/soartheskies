<?php

namespace GuestBook\Controller;

use GuestBook\Service\PageGuestBookRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GuestBookController extends AbstractActionController
{
    /** @var PageGuestBookRepositoryInterface */
    private $pageGuestBookRepository;

    public function __construct(PageGuestBookRepositoryInterface $pageGuestBookRepository)
    {
        $this->pageGuestBookRepository = $pageGuestBookRepository;
    }

    public function guestbookAction()
    {
        return new ViewModel([
            'entry' => $this->pageGuestBookRepository->findLatestEntry(),
        ]);
    }
}

