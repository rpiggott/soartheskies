<?php

namespace GuestBook\Service;

use Application\Entity\PageGuestBookMetaDescription;
use Doctrine\ORM\EntityManager;

class PageGuestBookMetaDescriptionRepository implements PageGuestBookMetaDescriptionRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageGuestBookMetaDescription
    {
        $repository = $this->entityManager->getRepository(PageGuestBookMetaDescription::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
