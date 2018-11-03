<?php
/**
 * Catalog Lazy Load Image
 *
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\CatalogLazyLoad\Plugin\Block\Product;

class ImagePlugin
{
    /** @var \MagePal\CatalogLazyLoad\Helper\Data */
    protected $helper;

    /**
     * @param \MagePal\CatalogLazyLoad\Helper\Data $helper
     */
    public function __construct(
        \MagePal\CatalogLazyLoad\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    public function afterToHtml(\Magento\Catalog\Block\Product\Image $subject, $result)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $find = ['img class="'];
            $replace = ['img class="lazy swatch-option-loading '];
            return str_replace($find, $replace, $result);
        }

        return $result;
    }

    public function beforeToHtml(\Magento\Catalog\Block\Product\Image $subject)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $customAttributes = trim($subject->getCustomAttributes() . ' data-original="' . $subject->getImageUrl() . '"');

            //$subject->setImageUrl('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC');
            $subject->setImageUrl('');
            $subject->setCustomAttributes($customAttributes);
        }

        return [$subject];
    }
}
