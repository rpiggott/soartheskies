<?php

namespace About\Service;

use Application\Entity\MetaKeyword;
use Application\Entity\PageAboutMetaKeywordLink;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;

class PageAboutMetaKeywordRepository implements PageAboutMetaKeywordRepositoryInterface
{
    /** @var EntityManager */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findKeywordList(): PageAboutMetaKeyword
    {

        $keyword_list = null;

        $query = $this->entityManager->createQueryBuilder()
                      ->select('k.keyword')
                      ->from(
                          'Application\Entity\MetaKeyword',
                          'k'
                      )
                      ->innerJoin(
                          'Application\Entity\PageAboutMetaKeywordLink',
                          'l',
                          'WITH',
                          'k.reference = l.metaKeywordReference'
                      );

        $query->andWhere('l.removeDate is null');

        $query->orderBy('k.keyword' , 'ASC');

        $result = $query->getQuery()
                        ->getArrayResult();

        if ( is_array( $result ) && count( $result ) > '0' ) {
            foreach ( $result AS $key => $value ) {

                $keyword_list .= $value['keyword'];
                if ( $key != ( (int)count( $result ) - 1 ) ) {
                    $keyword_list .= ", ";
                }

            }
        }

        return $keyword_list;
    }
}
