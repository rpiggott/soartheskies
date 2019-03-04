<?php

namespace About\Service;

use Application\Entity\PageAboutMetaKeywordLink;
use Doctrine\ORM\EntityManager;

class PageAboutMetaKeywordLinkRepository implements PageAboutMetaKeywordLinkRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findKeywordList(): PageAboutMetaKeywordLink
    {
#        $repository = $this->entityManager->getRepository(PageAboutMetaKeywordLink::class);
#
#        $qb = $repository->createQueryBuilder('l');
#                      $qb->join('\Application\Entity\MetaKeywords' , 'k', 'WITH', 'k.reference = l.metaKeywordReference');
#                      $qb->expr()->isNull('l.removeDate');
#
#        return $qb->getQuery()->getSingleResult();

        $sql = "SELECT * FROM page_about_meta_keyword_link INNER JOIN meta_keywords USING (reference);";

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $result = $stmt->execute();

        foreach ($stmt as $row) {
            print_r( $row );
        }

    }
}

