/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

define([
    'jquery',
    'MagePal_CatalogLazyLoad/js/jquery.lazyload'
], function($){

    return function (options) {
        $(function () {
            $("img.lazy").lazyload();

            $("img.lazy").one("appear", function() {
                $(this).removeClass('swatch-option-loading')
            });
        });
    };
});