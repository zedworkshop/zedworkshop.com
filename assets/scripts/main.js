!function(e){/**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */
e.fn.visible=function(i){var n=e(this),o=e(window),t=o.scrollTop(),c=t+o.height(),r=n.offset().top,s=r+n.height(),u=i===!0?s:r,f=i===!0?r:s;return c>=f&&u>=t}}(jQuery),$(document).ready(function(){!function(e,i){function n(i,n){var n=e(n),o=n.closest(".row");n.length&&n.visible(!0)&&(o.addClass("visible"),t.splice(i,1))}var o=e(i),t=e(".home-work figure");setTimeout(function(){t.each(n)},500),o.on("scroll resize",function(){t.each(n)})}(jQuery,window)});