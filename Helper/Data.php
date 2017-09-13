<?php

/**
 * Catalog Lazy Load Image
 *
 * Copyright © 2017 MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagePal\CatalogLazyLoad\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    const XML_PATH_ACTIVE = 'cataloglazyload/general/active';
    const XML_SKIP_AMOUNT = 'cataloglazyload/general/skip_amount';

    static $ignoreLazyLoad = 0;


    /**
     * If enabled
     *
     * @return bool
     */
    public function isEnabled() {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ACTIVE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Ignore first x amount
     *
     * @return int
     */
    public function getSkipAmount(){
        return $this->scopeConfig->getValue(self::XML_SKIP_AMOUNT, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Check ignore amount
     *
     * @return bool
     */
    public function applyLazyLoad(){
        if(self::$ignoreLazyLoad < $this->getSkipAmount() * 2){
            self::$ignoreLazyLoad++;
            return false;
        }

        return true;
    }

}
