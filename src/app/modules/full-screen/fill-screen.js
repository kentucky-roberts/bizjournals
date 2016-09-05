// Smarter window resize event firing
(function($, sr) {

    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function(func, threshold, execAsap) {
        var timeout;

        return function debounced() {
            var obj = this, args = arguments;
            function delayed() {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null;
            }

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    // smartresize
    jQuery.fn[sr] = function(fn) {
        return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
    };

})(jQuery, 'smartresize');

// Set close gradient classes on form panels
function updatePanelClasses() {
    var panels = $('.panel');
    //  var nextButton = $('.quiz-next');
    var newIndex = $('.panel-collapse').index($('.panel-collapse.in'));

    //drop old close-classes
    panels.removeClass('active');
    panels.removeClass(function(idx, css) {
        return (css.match(/(^|\s)close-\d+/g) || []).join(' ');
    });

    //add active to current panel
    panels.eq(newIndex).addClass('active');

    // add close-# classes to control gradient fade
    panels.each(function(panelIndex) {
        $(this).addClass("close-" + Math.abs(panelIndex - newIndex));
    });
}

$(document).ready(function() {
        var progressHeight = 20;

        function quizInit() {
            var panels = $('.panel');
            var vwidth = $(window).width();
            console.log(vwidth);
            if (vwidth < 768) {
                var panelheight = 0;
                var vheight = window.innerHeight;
                console.log(vheight);
            } else {
                var panelheight = 0;
                var vheight = $(window).height();
            }
            var bodyheight = vheight - (panels.length * panelheight) + panelheight;
            var progressCenter = (panels.length) / 2 * progressHeight;

            // Set the height of the panel to fil the screen, assuming a 10 pixel ribbon
            $('.panel-body').height(bodyheight);

            // Center the indicators
            $('.progress-indicators').css("margin-top", "-" + progressCenter + "px");
        }

        quizInit();
        updatePanelClasses();

        $(window).smartresize(function() {
            quizInit();
        });

});