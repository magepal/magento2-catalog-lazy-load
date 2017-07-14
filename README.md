## Catalog Images Lazy Load for Magento2
Reduce loading time by Loading images on demand and save server resources.
###Benefits
Lazy Load extension for Magento 2 only load images within the customer viewpoint and automotically load relivant images as the customer scrolls

####1 - Installation  Gmail Smtp App
##### Manual Installation
Install Gmail Smtp App for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/MagePal/CatalogLazyLoad
 * Copy the content from the unzip folder
 * Flush cache


#####Using Composer

```
composer require magepal/magento2-cataloglazyload
```

####2 -  Enable Gmail Smtp App
 * php -f bin/magento module:enable --clear-static-content MagePal_CatalogLazyLoad
 * php -f bin/magento setup:upgrade

####3 - Config Gmail Smtp App
Log into your Magento Admin, then goto Stores -> Configuration -> Advanced -> System -> Gmail/Google Apps SMTP Pro and enter your email credentials

## Preview
![image](https://cloud.githubusercontent.com/assets/1415141/18802388/7302402a-81b6-11e6-8c19-7a7f01be8743.png)
