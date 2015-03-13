(function($) {

    /**
     * Copyright 2012, Digital Fusion
     * Licensed under the MIT license.
     * http://teamdf.com/jquery-plugins/license/
     *
     * @author Sam Sehnert
     * @desc A small plugin that checks whether elements are within
     *     the user visible viewport of a web browser.
     *     only accounts for vertical position, not horizontal.
     */

    $.fn.visible = function(partial) {

        var $t = $(this),
            $w = $(window),
            viewTop = $w.scrollTop(),
            viewBottom = viewTop + $w.height(),
            _top = $t.offset().top,
            _bottom = _top + $t.height(),
            compareTop = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;

        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

    };

})(jQuery);




$(document).ready(function() {

    // $('.home-work img').click(function() {

    //     var $row = $(this).closest('.row');

    //     if (!$row.hasClass('active')) {
    //         $row.addClass('active');
    //     } else {
    //         $row.removeClass('active');
    //     }

    // });
    //

    (function($, window, undefined) {

        var $win = $(window);
        var $modules = $('.home-work figure');

        setTimeout(function() {
        	$modules.each(makeVisible);
        }, 500);

        $win.on('scroll resize', function(ev) {
            $modules.each(makeVisible);
        });

        function makeVisible(i, el) {
            var el = $(el);
            var row = el.closest('.row');
            if (el.length && el.visible(true)) {
                row.addClass('visible');
                $modules.splice(i, 1);
            }
        }

    })(jQuery, window);


});
