<?php

namespace Home\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Home\Controller\HomeController;
use Home\Service\HomePageContent as ServiceHomePageContent;

/**
 * Class HomeControllerFactory
 *
 * @package Home\Controller\Factory
 */
class HomeControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        // Instantiate the controller and inject dependencies
        return new HomeController(
            $entityManager,
            $serviceHomePageContent
        );
    }
}

