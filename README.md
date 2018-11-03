<a href="https://www.magepal.com" title="Magento 2 Extensions" ><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" alt="Magento2 Extension" /></a>

## Catalog Images Lazy Load for Magento2

[![Total Downloads](https://poser.pugx.org/magepal/magento2-cataloglazyload/downloads)](https://packagist.org/packages/magepal/magento2-cataloglazyload)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-cataloglazyload/v/stable)](https://packagist.org/packages/magepal/magento2-cataloglazyload)

Like most e-commerce site by default Magento loads, all products images on page load, which can lead to your site becoming extremely slow on mobile or other devices as your customer browser tries to download all images which they may not even view or see. 

Our free Lazy Loading extension for Magento 2 highly improves your page loading time and Google Page Ranking by only loading product images as the user scrolls. Images are only requested and download from your server once that photo is needed and the user is about to scroll to that item. Fully integrated with default Magento 2 functionality, our lazy loading functionality is applied to product listing pages, search pages, and product detail pages to enhance the load of related, up-sell and cross-sell products as needed.

Having a good user experience is crucial to the success of your online store and improving your page loading time will lead to better conversion, improved SEO score, and page ranking.

Reduce load time by Loading images on-demand while saving server resources, bandwidth and improving your users' experience.

Need faster load time? Improve your pagespeed with our [HTML Minifier for Magento2](https://www.magepal.com/magento2/extensions/html-minifier.html)

![magento2 lazy load images](https://image.ibb.co/bYO7DH/Catalog_Images_Lazy_Load_for_Magento2.gif)


### Benefits
Lazy Load extension for Magento 2 only load images within the customer viewpoint and automatically load relevant images as the customer scrolls

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

Magento Extensions
---
[Custom SMTP](https://www.magepal.com/magento2/extensions/custom-smtp.html) | [Google Tag Manager](https://www.magepal.com/magento2/extensions/google-tag-manager.html) | [Enhanced E-commerce](https://www.magepal.com/magento2/extensions/enhanced-ecommerce-for-google-tag-manager.html) | [Reindex](https://www.magepal.com/magento2/extensions/reindex.html) | [Custom Shipping Method](https://www.magepal.com/magento2/extensions/custom-shipping-rates-for-magento-2.html) | [Preview Order Confirmation](https://www.magepal.com/magento2/extensions/preview-order-confirmation-page-for-magento-2.html) | [Guest to Customer](https://www.magepal.com/magento2/extensions/guest-to-customer.html) | [Admin Form Fields Manager](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html) | [Customer Dashboard Links Manager](https://www.magepal.com/magento2/extensions/customer-dashboard-links-manager-for-magento-2.html) | [Lazy Loader](https://www.magepal.com/magento2/extensions/lazy-load.html) | [Order Confirmation Page Miscellaneous Scripts](https://www.magepal.com/magento2/extensions/order-confirmation-miscellaneous-scripts-for-magento-2.html)

© MagePal LLC. | [www.magepal.com](https:/www.magepal.com)
