<?php

use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Around;

class Bennoislost_MageWhoops_Aspects_ErrorHandler
    implements \Go\Aop\Aspect
{
    /**
     * @param MethodInvocation $invocation Invocation
     *
     * @Around("execution(public Mage_Core_Model_App->setErrorHandler(*))")
     */
    public function registerErrorHandler(MethodInvocation $invocation)
    {
        $run = new Whoops\Run;
        
        $reflection = new \ReflectionProperty(get_class($run), 'canThrowExceptions');
        $reflection->setAccessible(true);
        $reflection->setValue($run, false);
        
        $handler = new Whoops\Handler\PrettyPageHandler;
        $handler->addDataTable(
            'Magento', array(
                'Version' => Mage::getVersion()
            )
        );
        $run->pushHandler($handler);
        $run->register();
        return $this;
    }
}
