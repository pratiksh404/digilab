<?php

// Static Loading Image
// Vertical Lazy Load Image
if (!function_exists('verticalLazyLoadImg')) {
    function verticalLazyLoadImg()
    {
        return url(asset('img/static/vertical.gif'));
    }
}

// Horizontal Lazy Load Image
if (!function_exists('horizontalLazyLoadImg')) {
    function horizontalLazyLoadImg()
    {
        return url(asset('img/static/horizontal.gif'));
    }
}
