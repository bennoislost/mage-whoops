# Mage Whoops

Filp Whoops integration for errors & exceptions for Magento 1

## Install

Update consuming projects autoload paths

```
"autoload": {
    "psr-0": {
        "": [
            "magento/app",
            "magento/app/code/local",
            "magento/app/code/community",
            "magento/app/code/core",
            "magento/lib"
        ]
    }
}
```

Add bootstrap patch to `Mage.php` **after** Magento Composer installer patch.

```
/** BENNOISLOST_WHOOPS_PATCH */
require_once 'Bennoislost/MageWhoops/init.php';
/** BENNOISLOST_WHOOPS_PATCH */
```
