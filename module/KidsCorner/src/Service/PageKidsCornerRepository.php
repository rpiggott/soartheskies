<?php

namespace KidsCorner\Service;

use Application\Entity\PageKidsCorner;
use Doctrine\ORM\EntityManager;

class PageKidsCornerRepository implements PageKidsCornerRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageKidsCorner
    {
        $repository = $this->entityManager->getRepository(PageKidsCorner::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
