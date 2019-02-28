<?php

namespace Store\Service;

use Application\Entity\PageStoreMetaDescription;
use Doctrine\ORM\EntityManager;

class PageStoreMetaDescriptionRepository implements PageStoreMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageStoreMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageStoreMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}

