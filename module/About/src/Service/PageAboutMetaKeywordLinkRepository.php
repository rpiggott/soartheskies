<?php

namespace About\Service;

use Application\Entity\MetaKeyword;
use Application\Entity\PageAboutMetaKeywordLink;

use Doctrine\ORM\EntityManager;

class PageAboutMetaKeywordLinkRepository implements PageAboutMetaKeywordLinkRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findKeywordList(): PageAboutMetaKeywordLink
    {
        $repository = $this->entityManager->getRepository(PageAboutMetaKeywordLink::class);
        $qb = $repository->createQueryBuilder('l');
        $qb->expr()->isNull('l.removeDate');

        return $qb->getQuery()->getSingleResult();
    }
}

