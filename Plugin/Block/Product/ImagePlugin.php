<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\CatalogLazyLoad\Plugin\Block\Product;

use Magento\Catalog\Block\Product\Image;
use MagePal\CatalogLazyLoad\Helper\Data;

/**
 * Class ImagePlugin
 * @package MagePal\CatalogLazyLoad\Plugin\Block\Product
 */
class ImagePlugin
{
    /** @var Data */
    protected $helper;

    /**
     * @param Data $helper
     */
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param Image $subject
     * @param $result
     * @return mixed
     */
    public function afterToHtml(Image $subject, $result)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $find = ['img class="'];
            $replace = ['img class="lazy swatch-option-loading '];
            return str_replace($find, $replace, $result);
        }

        return $result;
    }

    /**
     * @param Image $subject
     * @return array
     */
    public function beforeToHtml(Image $subject)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $customAttributes = trim(
                $subject->getCustomAttributes() . ' data-original="' . $subject->getImageUrl() . '"'
            );

            $subject->setImageUrl('');
            $subject->setCustomAttributes($customAttributes);
        }

        return [$subject];
    }
}
