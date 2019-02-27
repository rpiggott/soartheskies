<?php

namespace About\Service;

use Application\Entity\PageAboutMetaDescription;
use Doctrine\ORM\EntityManager;

class PageAboutMetaDescriptionRepository implements PageAboutMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageAboutMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageAboutMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
