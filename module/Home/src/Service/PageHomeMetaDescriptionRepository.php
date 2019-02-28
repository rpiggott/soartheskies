<?php

namespace Home\Service;

use Application\Entity\PageHomeMetaDescription;
use Doctrine\ORM\EntityManager;

class PageHomeMetaDescriptionRepository implements PageHomeMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageHomeMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageHomeMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}

