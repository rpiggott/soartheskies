<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\MvcEvent;

class LayoutRouteInjectionListener
{
    public function __invoke(MvcEvent $event)
    {
        $controller = $event->getTarget();
        $routeMatch = $event->getRouteMatch();
        $layout = $controller->layout();
        $layout->route = $routeMatch->getMatchedRouteName();
    }
}

