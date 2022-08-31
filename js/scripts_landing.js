$(document).ready(function() {
    (function() {
        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    }
    )();
    $('#main-nav').sidr();
    $('#fullpage').fullpage({
        'verticalCentered': true,
        'easing': 'easeInOutCirc',
        'css3': false,
        'scrollingSpeed': 900,
        'slidesNavigation': true,
        'slidesNavPosition': 'bottom',
        'easingcss3': 'ease',
        'navigation': true,
        'anchors': ['Home', 'Features', 'About'],
        'navigationPosition': 'left'
    });
    $('.screenshots-content, .clients-content').css('height', $(window).height());
    $(document).mouseup(function(e) {
        if ($(".sidr-open ")[0]) {
            var container = $("#sidr");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $.sidr('close', 'sidr');
            }
        }
    });
    $('.sidr ul li a').on('click tap', function() {
        $.sidr('close', 'sidr');
    });
});