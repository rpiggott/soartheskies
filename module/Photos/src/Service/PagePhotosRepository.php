<?php

namespace Photos\Service;

use Application\Entity\PagePhotos;
use Doctrine\ORM\EntityManager;

class PagePhotosRepository implements PagePhotosRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findLatestEntry(): PagePhotos
    {
        $repository = $this->entityManager->getRepository(PagePhotos::class);
        $qb = $repository->createQueryBuilder('p');
        $qb->where('p.effectiveDate <= :now')
            ->orderBy('p.effectiveDate', 'DESC')
            ->setMaxResults(1);

        $qb->setParameter('now', new \DateTime());

        return $qb->getQuery()->getSingleResult();
    }
}
