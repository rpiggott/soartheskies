<?php

namespace Home\Service\Factory;

use Home\Service\HomePageContent;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class HomePageContentFactory
 *
 * @package Home\Service\Factory
 */
class HomePageContentFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return Survey
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var \Doctrine\ORM\EntityManager $entityManager
         */
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');

        return new HomePageContent($entityManager);
    }
}

