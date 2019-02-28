<?php

namespace Search\Service;

use Application\Entity\PageSearchMetaDescription;
use Doctrine\ORM\EntityManager;

class PageSearchMetaDescriptionRepository implements PageSearchMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageSearchMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageSearchMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
