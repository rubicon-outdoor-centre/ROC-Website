/**
 * Makes "skip to content" link work correctly in IE9, Chrome, and Opera
 * for better accessibility.
 *
 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
 */(function(){var e=navigator.userAgent.toLowerCase();(e.indexOf("webkit")>-1||e.indexOf("opera")>-1||e.indexOf("msie")>-1)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e=document.getElementById(location.hash.substring(1));if(e){/^(?:a|select|input|button|textarea)$/i.test(e.nodeName)||(e.tabIndex=-1);e.focus()}},!1)})();