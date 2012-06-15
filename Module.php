<?php

namespace ChosenModule;

use Zend\ModuleManager\ModuleManager,
Zend\EventManager\StaticEventManager,
Zend\Module\Consumer\AutoloaderProvider,
Zend\Registry
;
    
class Module
{
    /**
     * Configure Navigation
     */
    public function onBootstrap($e)
    {
        $app              = $e->getParam('application'); // grab Application from Bootstrap event
        $serviceManager   = $app->getServiceManager();
        $di               = $serviceManager->get('Di');
        $view             = $serviceManager->get('Zend\View\Renderer\PhpRenderer');
        
        /**
         * TODO: register plugin
         */

    }
    public function getAutoloaderConfig()
    {
        return array(
                'Zend\Loader\ClassMapAutoloader' => array(
                        __DIR__ . '/autoload_classmap.php',
                ),
                'Zend\Loader\StandardAutoloader' => array(
                        'namespaces' => array(
                                __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                        ),
                ),
        );
    }
    
}
