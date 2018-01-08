## Catalog Images Lazy Load for Magento2

[![Total Downloads](https://poser.pugx.org/magepal/magento2-cataloglazyload/downloads)](https://packagist.org/packages/magepal/magento2-cataloglazyload)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-cataloglazyload/v/stable)](https://packagist.org/packages/magepal/magento2-cataloglazyload)

Reduce loading time by Loading images on demand and save server resources.

![magento2 lazy load images](https://user-images.githubusercontent.com/1415141/34655866-0d5469e6-f3df-11e7-8f01-3790db5e5c23.gif)


### Benefits
Lazy Load extension for Magento 2 only load images within the customer viewpoint and automatically load relivant images as the customer scrolls

## Installation

#### Step 1
##### Using Composer (recommended)

```
composer require magepal/magento2-cataloglazyload
```


##### Manual Installation
To install Lazy Load for Magento2
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/MagePal/CatalogLazyLoad
 * Copy the content from the unzip folder
 * Flush cache

#### Step 2 -  Enable Lazy Load for Magento2
 * php -f bin/magento module:enable --clear-static-content MagePal_CatalogLazyLoad
 * php -f bin/magento setup:upgrade

#### Step 3 - Config Lazy Load for Magento2
Log into your Magento Admin, then goto Stores -> Configuration -> MagePal -> Catalog Lazy Load

Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magepal/magento2-cataloglazyload/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.

© MagePal LLC.
