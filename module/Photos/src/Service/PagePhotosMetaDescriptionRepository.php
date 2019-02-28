<?php

namespace Photos\Service;

use Application\Entity\PagePhotosMetaDescription;
use Doctrine\ORM\EntityManager;

class PagePhotosMetaDescriptionRepository implements PagePhotosMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PagePhotosMetaDescription
    {
        $repository = $this->entityManager->getRepository(PagePhotosMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
