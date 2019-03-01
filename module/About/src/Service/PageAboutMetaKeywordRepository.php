<?php

namespace About\Service;

use Application\Entity\MetaKeyword;
use Application\Entity\PageAboutMetaKeywordLink;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;

class PageAboutMetaKeywordRepository implements PageAboutMetaKeywordRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findKeywordList(): PageAboutMetaKeyword
    {
        $repository1 = $this->entityManager->getRepository(MetaKeyword::class);
        $repository2 = $this->entityManager->getRepository(PageAboutMetaKeywordLink::class);

        $qb = $repository1->createQueryBuilder('k');
        $qb->$repository2->createQueryBuilder('l');

        $qb->select('k.keyword')
           ->innerJoin('k.reference = l.metaKeywordReference')
           ->where('l.removeDate is null')
            ->orderBy('k.keyword', 'ASC');

        return $qb->getQuery()->getArrayResult();
    }
}
