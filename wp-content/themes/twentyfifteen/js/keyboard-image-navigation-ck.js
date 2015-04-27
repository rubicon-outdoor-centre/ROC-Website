/**
 * Twenty Fifteen keyboard support for image navigation.
 */(function(e){e(document).on("keydown.twentyfifteen",function(t){var n=!1;t.which===37?n=e(".nav-previous a").attr("href"):t.which===39&&(n=e(".nav-next a").attr("href"));n&&!e("textarea, input").is(":focus")&&(window.location=n)})})(jQuery);