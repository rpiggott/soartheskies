<?php

namespace Support\Service;

use Application\Entity\PageSupportMetaDescription;
use Doctrine\ORM\EntityManager;

class PageSupportMetaDescriptionRepository implements PageSupportMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageSupportMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageSupportMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}

