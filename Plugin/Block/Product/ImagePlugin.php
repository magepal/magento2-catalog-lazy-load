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
     * @param ProductImage $subject
     * @param string $result
     * @return string
     */
    public function afterToHtml(ProductImage $subject, $result)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {

            // re-encode characters that DOMDocument doesn't like
            $result = mb_convert_encoding($result, 'HTML-ENTITIES', "UTF-8");

            // HTML is too messy to manipulate by string replacement only, let's parse it
            $dom = new \DOMDocument();
            $dom->loadHTML($result, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            // there could be more than one <img> for rollovers or whatever...
            $images = $dom->getElementsByTagName('img');
            /** @var $img \DOMElement */
            foreach($images as $img) {
                // need swatch-option-loading for the typical spinning load icon
                $classes = $img->getAttribute('class');
                if (!preg_match('/(?<=^|\s)swatch-option-loading(?=$|\s)/', $classes)) {
                    $classes .= ' swatch-option-loading';
                    $img->setAttribute('class', $classes);
                }

                // data-mage-init safely loads JavaScript library
                $init = json_decode($img->getAttribute('data-mage-init') ?: '{}', true);
                $init = array_merge($init, ['MagePalLazyLoad' => '']);
                $img->setAttribute('data-mage-init', json_encode($init));

                // src attribute will be set by JS library eventually
                $img->setAttribute('data-original', $img->getAttribute('src'));
                $img->removeAttribute('src');
            }

            // saveHTML() preserves whitespace between elements but rewrites tags in a compact way
            $result = $dom->saveHTML();
        }
        return $result;
    }
}
