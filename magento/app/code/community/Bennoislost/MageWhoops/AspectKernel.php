<?php

use Go\Core\AspectContainer;
use Go\Core\AspectKernel;

class Bennoislost_MageWhoops_AspectKernel
    extends AspectKernel
{
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new Bennoislost_MageWhoops_Aspects_ErrorHandler);
        $container->registerAspect(new Bennoislost_MageWhoops_Aspects_ExceptionHandler);
    }
}
