<?php

/**
 * Catalog Lazy Load Image
 *
 * Copyright © 2017 MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagePal\CatalogLazyLoad\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use MagePal\CatalogLazyLoad\Helper\Data as LazyLoadHelper;

/**
 * LazyLoad Page Block
 */
class Js extends Template {

    /**
     * LazyLoad data
     *
     * @var /MagePal\CatalogLazyLoad\Helper\Data
     */
    protected $_lazyLoadHelper = null;

    /**
     * @param Context $context
     * @param LazyLoadHelper $lazyLoadHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        LazyLoadHelper $lazyLoadHelper,
        array $data = []
    ) {
        $this->_lazyLoadHelper = $lazyLoadHelper;
        parent::__construct($context, $data);
    }

    /**
     * Render tag manager JS
     *
     * @return string
     */
    protected function _toHtml() {
        if (!$this->_lazyLoadHelper->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }

}
