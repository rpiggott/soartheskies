<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Home\Controller;

use Home\Service\HomePageContent;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

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

        // Render the view template
        return new ViewModel([
          'content' => Home\Service\HomePageContent
        ]);

    }
}

