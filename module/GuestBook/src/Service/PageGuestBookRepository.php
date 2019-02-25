<?php

namespace GuestBook\Service;

use Application\Entity\PageGuestBook;
use Doctrine\ORM\EntityManager;

class PageGuestBookRepository implements PageGuestBookRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageGuestBook
    {
        $repository = $this->entityManager->getRepository(PageGuestBook::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults( 1 );

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
