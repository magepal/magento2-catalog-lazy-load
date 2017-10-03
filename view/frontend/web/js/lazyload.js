/**
 * Copyright © 2017 MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    'MagePal_CatalogLazyLoad/js/jquery.lazyload'
], function($) {

    return function(options) {
        $(function() {
            $("img.lazy").lazyload();

            $("img.lazy").one("appear", function() {
                $(this).removeClass('swatch-option-loading')
            });
        });
    };
});
