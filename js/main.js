(function($) {

// Smooth Scroll

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 500);
            return false;
        }
    }
});

// Back to Top

var $top = $('.section__back-to-top');

$top.hover(
    function() {
        
    },
    function() {
        
    }
);

})(jQuery);