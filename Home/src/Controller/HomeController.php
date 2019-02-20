<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Home\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\PageHome;

class HomeController extends AbstractActionController
{

  /**
   * Entity manager.
   * @var Doctrine\ORM\EntityManager
   */
  private $entityManager;

  // Constructor method is used to inject dependencies to the controller.
  public function __construct($entityManager)
  {
    $this->entityManager = $entityManager;
  }

    public function indexAction()
    {

        // Get Home Page Content
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

        // Render the view template
        return new ViewModel([
          'content' => $results['content']
        ]);

    }
}

