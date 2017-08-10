<?php

Bennoislost_MageWhoops_AspectKernel::getInstance()
    ->init(array(
            'debug'        => Mage::getIsDeveloperMode(),
            'cacheDir'     => MAGENTO_ROOT . '/var/cache/bennoislost_magewhoops_aspects',
            'excludePaths' => array(
                MAGENTO_ROOT . '/vendor',
                MAGENTO_ROOT . '/../vendor'
            )
        )
    );
