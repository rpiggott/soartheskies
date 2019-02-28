<?php

namespace GuestBook\Controller;

use GuestBook\Service\PageGuestBookRepositoryInterface;
use GuestBook\Service\PageGuestBookMetaDescriptionRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GuestBookController extends AbstractActionController
{
    /** @var PageGuestBookRepositoryInterface */
    private $pageGuestBookRepository;

    /** @var PageGuestBookMetaDescriptionRepositoryInterface */
    private $pageGuestBookMetaDescriptionRepository;

    public function __construct(
        PageGuestBookRepositoryInterface $pageGuestBookRepository,
        PageGuestBookMetaDescriptionRepositoryInterface $pageGuestBookMetaDescriptionRepository
    )
    {
        $this->pageGuestBookRepository = $pageGuestBookRepository;
        $this->pageGuestBookMetaDescriptionRepository = $pageGuestBookMetaDescriptionRepository;
    }

    public function guestbookAction()
    {
        return new ViewModel([
            'content' => $this->pageGuestBookRepository->findLatestEntry(),
            'metaDescription' => $this->pageGuestBookMetaDescriptionRepository->findLatestEntry(),
        ]);
    }
}

