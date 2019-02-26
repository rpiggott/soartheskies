<?php

namespace Pricing\Service;

use Application\Entity\PagePricing;
use Doctrine\ORM\EntityManager;

class PagePricingRepository implements PagePricingRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PagePricing
    {
        $repository = $this->entityManager->getRepository(PagePricing::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults(1);

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
