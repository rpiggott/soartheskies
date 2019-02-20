<?php

namespace Home\Service;

use Application\src\Entities\PageHome as EntityPageHome;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query;

class HomePageContent implements HomePageContentInterface
{

    /**
     * Home Page Content
     *
     * @throws \PDOException
     */
    public function homePageContent()
    {
        try {

            $content = null;

            $result = $this->entityManager->createQueryBuilder()
                                          ->from(
                                             'Application\Entity\PageHome',
                                             'p'
                                          )
                                          ->select('p.content')
                                          ->orderBy(
                                             'p.effectiveDate',
                                             'DESC'
                                          )
                                          ->setMaxResults('1');

            $result->where('p.effectiveDate <= CURRENT_TIMESTAMP()');

            $results = $result->getQuery()
                              ->getSingleResult();

            return new ViewModel([
                'content' => $results['content']
            ]);

        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
