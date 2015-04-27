/* global screenReaderText *//**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */(function(e){function m(){if(955>n.width()){v.attr("aria-expanded","false");d.attr("aria-expanded","false");v.attr("aria-controls","secondary")}else{v.removeAttr("aria-expanded");d.removeAttr("aria-expanded");v.removeAttr("aria-controls")}}function g(){u=n.width();if(955>u){s=o=!1;r.removeAttr("style")}}function y(){var e=n.scrollTop();if(955>u)return;h=r.height();a=n.height();c=t.height();if(h+i>a)if(e>f){if(s){s=!1;l=r.offset().top>0?r.offset().top-i:0;r.attr("style","top: "+l+"px;")}else if(!o&&e+a>h+r.offset().top&&h+i<c){o=!0;r.attr("style","position: fixed; bottom: 0;")}}else if(e<f){if(o){o=!1;l=r.offset().top>0?r.offset().top-i:0;r.attr("style","top: "+l+"px;")}else if(!s&&e+i<r.offset().top){s=!0;r.attr("style","position: fixed;")}}else{s=o=!1;l=r.offset().top>0?r.offset().top-i:0;r.attr("style","top: "+l+"px;")}else if(!s){s=!0;r.attr("style","position: fixed;")}f=e}function b(){g();y()}var t,n,r,i,s=!1,o=!1,u,a,f=0,l=0,c,h,p,d,v;e(".main-navigation .menu-item-has-children > a").after('<button class="dropdown-toggle" aria-expanded="false">'+screenReaderText.expand+"</button>");e(".main-navigation .current-menu-ancestor > button").addClass("toggle-on");e(".main-navigation .current-menu-ancestor > .sub-menu").addClass("toggled-on");e(".dropdown-toggle").click(function(t){var n=e(this);t.preventDefault();n.toggleClass("toggle-on");n.next(".children, .sub-menu").toggleClass("toggled-on");n.attr("aria-expanded",n.attr("aria-expanded")==="false"?"true":"false");n.html(n.html()===screenReaderText.expand?screenReaderText.collapse:screenReaderText.expand)});d=e("#secondary");v=e(".site-branding").find(".secondary-toggle");(function(){var t,n,r;if(!d||!v)return;t=d.find(".nav-menu");n=d.find("#widget-area");r=d.find("#social-navigation");if(!n.length&&!r.length&&(!t||!t.children().length)){v.hide();return}v.on("click.twentyfifteen",function(){d.toggleClass("toggled-on");d.trigger("resize");e(this).toggleClass("toggled-on");if(e(this,d).hasClass("toggled-on")){e(this).attr("aria-expanded","true");d.attr("aria-expanded","true")}else{e(this).attr("aria-expanded","false");d.attr("aria-expanded","false")}})})();e(document).ready(function(){t=e(document.body);n=e(window);r=e("#sidebar").first();i=t.is(".admin-bar")?e("#wpadminbar").height():0;n.on("scroll.twentyfifteen",y).on("load.twentyfifteen",m).on("resize.twentyfifteen",function(){clearTimeout(p);p=setTimeout(b,500);m()});r.on("click.twentyfifteen keydown.twentyfifteen","button",b);b();for(var s=1;s<6;s++)setTimeout(b,100*s)})})(jQuery);