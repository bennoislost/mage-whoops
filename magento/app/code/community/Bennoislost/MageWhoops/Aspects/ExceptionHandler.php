<?php

use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\After;

class Bennoislost_MageWhoops_Aspects_ExceptionHandler
    implements \Go\Aop\Aspect
{
    /**
     * @param MethodInvocation $invocation Invocation
     *
     * @After("execution(public Mage_Core_Exception->__construct(*))")
     */
    public function registerExceptionHandler($invocation)
    {
        $run = new Whoops\Run;
        $run->pushHandler(new Whoops\Handler\PrettyPageHandler);
        $handler = Whoops\Run::EXCEPTION_HANDLER;
        ob_start();
        $run->$handler($invocation->getThis());
        ob_get_clean();
        die();
    }
}
