<?php

namespace Home\Service;

use Application\Entity\PageHome;
use Doctrine\ORM\EntityManager;

class PageHomeRepository implements PageHomeRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PageHome
    {
        $repository = $this->entityManager->getRepository(PageHome::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
<<<<<<< HEAD
            ->setMaxResults(1);
=======
            ->setMaxResults( 1 );
>>>>>>> c569bdbc7fc95a69d5846a88f63bf4f29ecb5723

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
