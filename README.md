## Catalog Images Lazy Load for Magento2
Reduce loading time by Loading images on demand and save server resources.
### Benefits
Lazy Load extension for Magento 2 only load images within the customer viewpoint and automotically load relivant images as the customer scrolls

#### 1 - Installation Lazy Load for Magento2
##### Manual Installation
To install Lazy Load for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/MagePal/CatalogLazyLoad
 * Copy the content from the unzip folder
 * Flush cache


##### Using Composer

```
composer require magepal/magento2-cataloglazyload
```

#### 2 -  Enable Lazy Load for Magento2
 * php -f bin/magento module:enable --clear-static-content MagePal_CatalogLazyLoad
 * php -f bin/magento setup:upgrade

#### 3 - Config Lazy Load for Magento2
Log into your Magento Admin, then goto Stores -> Configuration -> MagePal -> Catalog Lazy Load

## Preview
![magento2 lazy load images](https://user-images.githubusercontent.com/1415141/28195477-6a774b46-6818-11e7-8010-6bcaa33c0c9f.jpg)

----

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.
