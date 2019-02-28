<?php

namespace KidsCorner\Service;

use Application\Entity\PageKidsCornerMetaDescription;
use Doctrine\ORM\EntityManager;

class PageKidsCornerMetaDescriptionRepository implements PageKidsCornerMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageKidsCornerMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageKidsCornerMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
