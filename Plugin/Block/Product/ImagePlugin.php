<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\CatalogLazyLoad\Plugin\Block\Product;

use Closure;
use Magento\Catalog\Block\Product\Image;
use MagePal\CatalogLazyLoad\Helper\Data;

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
     * @param string $result
     * @return string
     */
    public function afterToHtml(Image $subject, $result)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {

            $result = preg_replace_callback(
                '#<img(?:\s+[-\w]+=(?:"[^"]*"|\'[^\']*\'))+\s*/>#mu',
                function ($matches) {
                    $img = (string) $matches[0];
                    $search = [' src="'];
                    $replace = [' data-original="'];

                    if (strpos($img, 'class=') === false) {
                        $search[] = '/>';
                        $replace[] = ' class="swatch-option-loading" />';
                    } else {
                        $search[] = ' class="';
                        $replace[] = ' class="swatch-option-loading ';
                    }

                    if (strpos($img, 'data-mage-init=') === false) {
                        $search[] = '/>';
                        $replace[] = ' data-mage-init=\'{"MagePalLazyLoad":{}}\' />';
                    } else {
                        $search[] = ' data-mage-init=\'{';
                        $replace[] = ' data-mage-init=\'{"MagePalLazyLoad":{},';
                    }

                    return str_replace($search, $replace, $img);
                },
                $result
            );
        }

        return $result;
    }
}

