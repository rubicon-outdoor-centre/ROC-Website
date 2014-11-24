tinymce.PluginManager.add("wpview",function(e){function t(e){return n(e,"wpview-wrap")}function n(e,t){for(;e&&e.parentNode;){if(e.className&&-1!==(" "+e.className+" ").indexOf(" "+t+" "))return e;e=e.parentNode}return!1}function r(n){return(n=t(n))?window.decodeURIComponent(e.dom.getAttrib(n,"data-wpview-text")||""):""}function i(n,r){return n=t(n),n?(e.dom.setAttrib(n,"data-wpview-text",window.encodeURIComponent(r||"")),!0):!1}function s(e){e.stopPropagation()}function o(t,n){var r=t?"before":"after",i=t?0:1;l(),e.selection.setCursorLocation(e.dom.select(".wpview-selection-"+r,n)[0],i),e.nodeChanged()}function u(t,n,r){var i=e.dom,s=i.create("p");w.ie&&w.ie<11||(s.innerHTML='<br data-mce-bogus="1">'),n?t.parentNode.insertBefore(s,t):i.insertAfter(s,t),l(),n&&r===E.ENTER?o(n,t):e.selection.setCursorLocation(s,0),e.nodeChanged()}function a(t){e.undoManager.transact(function(){u(t),e.dom.remove(t)})}function f(t){var n,i=e.dom;t&&t!==p&&(e.getBody().focus(),l(),p=t,i.setAttrib(t,"data-mce-selected",1),n=i.create("div",{"class":"wpview-clipboard",contenteditable:"true"},r(t)),e.dom.select(".wpview-body",t)[0].appendChild(n),i.bind(n,"beforedeactivate focusin focusout",s),i.bind(p,"beforedeactivate focusin focusout",s),C?e.selection.select(n):e.selection.select(n,!0),e.nodeChanged(),e.fire("wpview-selected",t))}function l(){var t,n=e.dom;p&&(t=e.dom.select(".wpview-clipboard",p)[0],n.unbind(t),n.remove(t),n.unbind(p,"beforedeactivate focusin focusout click mouseup",s),n.setAttrib(p,"data-mce-selected",null)),p=null}function c(e){return e.replace(/<div[^>]+data-wpview-text=\"([^"]+)"[^>]*>[\s\S]+?wpview-selection-after[^>]+>(?:&nbsp;|\u00a0)*<\/p><\/div>/g,"$1")}function h(e){return 47>=e&&e!==E.SPACEBAR&&e!==E.ENTER&&e!==E.DELETE&&e!==E.BACKSPACE&&(37>e||e>40)||e>=224||e>=144&&150>=e||e>=91&&93>=e||e>=112&&135>=e}var p,d,v,m,g,y,b,w=tinymce.Env,E=tinymce.util.VK,S=tinymce.dom.TreeWalker,x=!1,T=!0,N=function(){return!1},C=/iPad|iPod|iPhone/.test(navigator.userAgent);return"undefined"!=typeof wp&&wp.mce?(e.on("BeforeAddUndo",function(e){e.lastLevel&&c(e.level.content)===c(e.lastLevel.content)&&e.preventDefault()}),e.on("BeforeSetContent",function(t){var n;t.content&&(p&&a(p),n=e.selection.getNode(),(!t.content.match(/^\s*(https?:\/\/[^\s"]+)\s*$/i)||"P"===n.nodeName&&n.parentNode===e.getBody()&&e.dom.isEmpty(n))&&(t.content=wp.mce.views.toViews(t.content)))}),e.on("SetContent",function(){wp.mce.views.render()}),e.on("click",function(n){var r,i=n.clientX,s=n.clientY,u=e.getBody(),a=u.getBoundingClientRect(),f=u.firstChild,l=f.getBoundingClientRect(),c=u.lastChild,h=c.getBoundingClientRect();s<l.top&&(r=t(f))?(o(!0,r),n.preventDefault()):s>h.bottom&&(r=t(c))?(o(!1,r),n.preventDefault()):tinymce.each(e.dom.select(".wpview-wrap"),function(e){var t=e.getBoundingClientRect();return s>=t.top&&s<=t.bottom?void (i<a.left?(o(!0,e),n.preventDefault()):i>a.right&&(o(!1,e),n.preventDefault())):void 0})}),e.on("init",function(){var n=!1,r=e.selection,i=window.MutationObserver||window.WebKitMutationObserver;e.on("BeforeSetContent",function(){var n,i,s=t(r.getNode());s&&(!s.nextSibling||t(s.nextSibling)?(i=e.getDoc().createTextNode(""),e.dom.insertAfter(i,s)):(n=new S(s.nextSibling,s.nextSibling),i=n.next()),r.select(i),r.collapse(!0))}),e.dom.bind(e.getDoc(),"touchmove",function(){n=!0}),e.on("mousedown mouseup click touchend",function(r){var i=t(r.target);if(T=!1,i){if(r.stopImmediatePropagation(),r.preventDefault(),!("touchend"!==r.type&&"mousedown"!==r.type||r.metaKey||r.ctrlKey)){if(e.dom.hasClass(r.target,"edit"))return wp.mce.views.edit(i),e.focus(),!1;if(e.dom.hasClass(r.target,"remove"))return a(i),!1}return"touchend"===r.type&&n?n=!1:f(i),!1}("touchend"===r.type||"mousedown"===r.type)&&l(),"touchend"===r.type&&n&&(n=!1)},!0),i&&(new i(function(){e.fire("wp-body-class-change")})).observe(e.getBody(),{attributes:!0,attributeFilter:["class"]})}),e.on("PreProcess",function(t){tinymce.each(e.dom.select("div[data-wpview-text]",t.node),function(e){e.textContent=e.innerText=" "})}),e.on("PostProcess",function(e){e.content&&(e.content=e.content.replace(/<div [^>]*?data-wpview-text="([^"]*)"[^>]*>[\s\S]*?<\/div>/g,function(e,t){return t?"<p>"+window.decodeURIComponent(t)+"</p>":""}))}),e.on("keydown",function(n){var r,i,s,c,d,m,g,y=n.keyCode,b=e.dom,w=e.selection;if(p){if((n.metaKey||n.ctrlKey)&&y!==E.BACKSPACE&&86!==y||y>=112&&123>=y)return void ((n.metaKey||n.ctrlKey)&&88===y&&(x=p));if(i=t(w.getNode()),i!==p)return void l();y===E.LEFT?(o(!0,i),n.preventDefault()):y===E.UP?(i.previousSibling?t(i.previousSibling)?o(!0,i.previousSibling):(l(),w.select(i.previousSibling,!0),w.collapse()):o(!0,i),n.preventDefault()):y===E.RIGHT?(o(!1,i),n.preventDefault()):y===E.DOWN?(i.nextSibling?t(i.nextSibling)?o(!1,i.nextSibling):(l(),w.setCursorLocation(i.nextSibling,0)):o(!1,i),n.preventDefault()):h(y)||(a(p),(y===E.ENTER||y===E.DELETE||y===E.BACKSPACE)&&n.preventDefault())}else{if(n.metaKey||n.ctrlKey||y>=112&&123>=y)return;if(r=w.getNode(),v=r,i=t(r),w.isCollapsed()||(d=w.getRng(),(i=t(d.endContainer))?(m=d.cloneRange(),w.select(i.previousSibling,!0),w.collapse(),g=w.getRng(),m.setEnd(g.endContainer,g.endOffset),w.setRng(m)):(i=t(d.startContainer))&&(m=d.cloneRange(),m.setStart(i.nextSibling,0),w.setRng(m))),!i)return void (n.keyCode===E.BACKSPACE&&(e.dom.isEmpty(r)?(i=t(r.previousSibling))&&(o(!1,i),e.dom.remove(r),n.preventDefault()):(d=w.getRng())&&0===d.startOffset&&0===d.endOffset&&(i=t(r.previousSibling))&&(o(!1,i),n.preventDefault())));if(!(s=b.hasClass(i,"wpview-selection-before"))&&!(c=b.hasClass(i,"wpview-selection-after")))return;if(h(y))return;c&&y===E.UP||s&&y===E.BACKSPACE?(i.previousSibling?t(i.previousSibling)?o(!1,i.previousSibling):b.isEmpty(i.previousSibling)&&y===E.BACKSPACE?b.remove(i.previousSibling):(w.select(i.previousSibling,!0),w.collapse()):o(!0,i),n.preventDefault()):!c||y!==E.DOWN&&y!==E.RIGHT?!s||y!==E.UP&&y!==E.LEFT?s&&y===E.DOWN?(i.nextSibling?t(i.nextSibling)?o(!0,i.nextSibling):w.setCursorLocation(i.nextSibling,0):o(!1,i),n.preventDefault()):c&&y===E.LEFT||s&&y===E.RIGHT?(f(i),n.preventDefault()):c&&y===E.BACKSPACE?(a(i),n.preventDefault()):c?u(i):s&&u(i,!0,y):(i.previousSibling&&(t(i.previousSibling)?o(y===E.UP,i.previousSibling):(w.select(i.previousSibling,!0),w.collapse())),n.preventDefault()):(i.nextSibling&&(t(i.nextSibling)?o(y===E.RIGHT,i.nextSibling):w.setCursorLocation(i.nextSibling,0)),n.preventDefault()),y===E.ENTER&&n.preventDefault()}}),e.on("keyup",function(){x&&(a(x),x=!1)}),e.on("focus",function(){var n;g=!0,e.dom.addClass(e.getBody(),"has-focus"),T&&(n=t(e.getBody().firstChild))&&o(!0,n),T=!1}),e.on("blur",function(){g=!1,e.dom.removeClass(e.getBody(),"has-focus")}),e.on("NodeChange",function(r){var i=e.dom,s=e.dom.select(".wpview-wrap"),u=r.element.className,a=t(r.element),f=v;if(v=!1,clearInterval(d),tinymce.each(s,function(e){e.className&&(e.className=e.className.replace(/ ?\bwpview-(?:selection-before|selection-after|cursor-hide)\b/g,""))}),g&&a)if("wpview-selection-before"!==u&&"wpview-selection-after"!==u||!e.selection.isCollapsed())n(r.element,"wpview-clipboard")||m||(l(),m++,o(!0,a));else{if(m=0,l(),f===a.previousSibling)return void o(!0,a);if(f===a.nextSibling)return void o(!1,a);i.addClass(a,u),d=setInterval(function(){i.hasClass(a,"wpview-cursor-hide")?i.removeClass(a,"wpview-cursor-hide"):i.addClass(a,"wpview-cursor-hide")},500)}}),e.on("BeforeExecCommand",function(){var n,r=e.selection.getNode();r&&((b="wpview-selection-before"===r.className)||"wpview-selection-after"===r.className)&&(n=t(r))&&(u(n,b),y=n)}),e.on("ExecCommand",function(){var t,n;p&&(t=p,l(),f(t)),y&&(n=y[b?"previousSibling":"nextSibling"],n&&"P"===n.nodeName&&e.dom.isEmpty(n)&&(e.dom.remove(n),o(b,y)),y=!1)}),e.on("ResolveName",function(n){e.dom.hasClass(n.target,"wpview-wrap")?(n.name=e.dom.getAttrib(n.target,"data-wpview-type")||"wpview",n.stopPropagation()):t(n.target)&&(n.preventDefault(),n.stopPropagation())}),{getViewText:r,setViewText:i,getView:t}):{getViewText:N,setViewText:N,getView:N}});