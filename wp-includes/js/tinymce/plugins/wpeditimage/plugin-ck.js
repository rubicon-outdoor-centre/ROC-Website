/* global tinymce */tinymce.PluginManager.add("wpeditimage",function(e){function i(t){return t.replace(/(?:<p>)?\[(?:wp_)?caption([^\]]+)\]([\s\S]+?)\[\/(?:wp_)?caption\](?:<\/p>)?/g,function(t,n,r){var i,s,o,u,a,f,l=tinymce.trim;i=n.match(/id=['"]([^'"]*)['"] ?/);i&&(n=n.replace(i[0],""));s=n.match(/align=['"]([^'"]*)['"] ?/);s&&(n=n.replace(s[0],""));o=n.match(/class=['"]([^'"]*)['"] ?/);o&&(n=n.replace(o[0],""));f=n.match(/width=['"]([0-9]*)['"] ?/);f&&(n=n.replace(f[0],""));r=l(r);a=r.match(/((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)([\s\S]*)/i);if(a&&a[2]){u=l(a[2]);a=l(a[1])}else{u=l(n).replace(/caption=['"]/,"").replace(/['"]$/,"");a=r}i=i&&i[1]?i[1].replace(/[<>&]+/g,""):"";s=s&&s[1]?s[1]:"alignnone";o=o&&o[1]?" "+o[1].replace(/[<>&]+/g,""):"";!f&&a&&(f=a.match(/width=['"]([0-9]*)['"]/));f&&f[1]&&(f=f[1]);if(!f||!u)return r;f=parseInt(f,10);e.getParam("wpeditimage_html5_captions")||(f+=10);return'<div class="mceTemp"><dl id="'+i+'" class="wp-caption '+s+o+'" style="width: '+f+'px">'+'<dt class="wp-caption-dt">'+a+'</dt><dd class="wp-caption-dd">'+u+"</dd></dl></div>"})}function s(e){return e.replace(/<div (?:id="attachment_|class="mceTemp)[^>]*>([\s\S]+?)<\/div>/g,function(e,t){var n="";if(t.indexOf("<img ")===-1){n=t.match(/<dd [^>]+>([\s\S]+?)<\/dd>/i);return n&&n[1]?"<p>"+n[1]+"</p>":""}n=t.replace(/\s*<dl ([^>]+)>\s*<dt [^>]+>([\s\S]+?)<\/dt>\s*<dd [^>]+>([\s\S]*?)<\/dd>\s*<\/dl>\s*/gi,function(e,t,n,r){var i,s,o,u;u=n.match(/width="([0-9]*)"/);u=u&&u[1]?u[1]:"";if(!u||!r)return n;i=t.match(/id="([^"]*)"/);i=i&&i[1]?i[1]:"";s=t.match(/class="([^"]*)"/);s=s&&s[1]?s[1]:"";o=s.match(/align[a-z]+/i)||"alignnone";s=s.replace(/wp-caption ?|align[a-z]+ ?/gi,"");s&&(s=' class="'+s+'"');r=r.replace(/\r\n|\r/g,"\n").replace(/<[a-zA-Z0-9]+( [^<>]+)?>/g,function(e){return e.replace(/[\r\n\t]+/," ")});r=r.replace(/\s*\n\s*/g,"<br />");return'[caption id="'+i+'" align="'+o+'" width="'+u+'"'+s+"]"+n+" "+r+"[/caption]"});n.indexOf("[caption")===-1&&(n=t.replace(/[\s\S]*?((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)(<p>[\s\S]*<\/p>)?[\s\S]*/gi,"<p>$1</p>$2"));return n})}function o(t){var n,r,i,s,o,u,a,f,l=[],c=e.dom,h=/^\d+$/;i={attachment_id:!1,size:"custom",caption:"",align:"none",extraClasses:"",link:!1,linkUrl:"",linkClassName:"",linkTargetBlank:!1,linkRel:"",title:""};i.url=c.getAttrib(t,"src");i.alt=c.getAttrib(t,"alt");i.title=c.getAttrib(t,"title");a=c.getAttrib(t,"width");f=c.getAttrib(t,"height");if(!h.test(a)||parseInt(a,10)<1)a=t.naturalWidth||t.width;if(!h.test(f)||parseInt(f,10)<1)f=t.naturalHeight||t.height;i.customWidth=i.width=a;i.customHeight=i.height=f;n=tinymce.explode(t.className," ");r=[];tinymce.each(n,function(e){/^wp-image/.test(e)?i.attachment_id=parseInt(e.replace("wp-image-",""),10):/^align/.test(e)?i.align=e.replace("align",""):/^size/.test(e)?i.size=e.replace("size-",""):r.push(e)});i.extraClasses=r.join(" ");s=c.getParents(t,".wp-caption");if(s.length){s=s[0];n=s.className.split(" ");tinymce.each(n,function(e){/^align/.test(e)?i.align=e.replace("align",""):e&&e!=="wp-caption"&&l.push(e)});i.captionClassName=l.join(" ");o=c.select("dd.wp-caption-dd",s);if(o.length){o=o[0];i.caption=e.serializer.serialize(o).replace(/<br[^>]*>/g,"$&\n").replace(/^<p>/,"").replace(/<\/p>$/,"")}}if(t.parentNode&&t.parentNode.nodeName==="A"){u=t.parentNode;i.linkUrl=c.getAttrib(u,"href");i.linkTargetBlank=c.getAttrib(u,"target")==="_blank"?!0:!1;i.linkRel=c.getAttrib(u,"rel");i.linkClassName=u.className}return i}function u(e){return e&&(!!e.textContent||!!e.innerText)}function a(n){if(!n||n.indexOf("<")===-1&&n.indexOf(">")===-1)return n;t||(t=new tinymce.html.Serializer({},e.schema));return t.serialize(e.parser.parse(n,{forced_root_block:!1}))}function f(t,n){var r,i,s,o,f,l,c,p,d,v,m,g,y,b,w,E,S=e.dom;r=tinymce.explode(n.extraClasses," ");r||(r=[]);n.caption||r.push("align"+n.align);if(n.attachment_id){r.push("wp-image-"+n.attachment_id);n.size&&n.size!=="custom"&&r.push("size-"+n.size)}b=n.width;w=n.height;if(n.size==="custom"){b=n.customWidth;w=n.customHeight}g={src:n.url,width:b||null,height:w||null,alt:n.alt,title:n.title||null,"class":r.join(" ")||null};S.setAttribs(t,g);y={href:n.linkUrl,rel:n.linkRel||null,target:n.linkTargetBlank?"_blank":null,"class":n.linkClassName||null};if(t.parentNode&&t.parentNode.nodeName==="A"&&!u(t.parentNode))n.linkUrl?S.setAttribs(t.parentNode,y):S.remove(t.parentNode,!0);else if(n.linkUrl){(c=S.getParent(t,"a"))&&S.insertAfter(t,c);c=S.create("a",y);t.parentNode.insertBefore(c,t);c.appendChild(t)}p=e.dom.getParent(t,".mceTemp");t.parentNode&&t.parentNode.nodeName==="A"&&!u(t.parentNode)?s=t.parentNode:s=t;if(n.caption){n.caption=a(n.caption);m=n.attachment_id?"attachment_"+n.attachment_id:null;E="align"+(n.align||"none");i="wp-caption "+E;n.captionClassName&&(i+=" "+n.captionClassName.replace(/[<>&]+/g,""));if(!e.getParam("wpeditimage_html5_captions")){b=parseInt(b,10);b+=10}if(p){v=S.select("dl.wp-caption",p);v.length&&S.setAttribs(v,{id:m,"class":i,style:"width: "+b+"px"});d=S.select(".wp-caption-dd",p);d.length&&S.setHTML(d[0],n.caption)}else{m=m?'id="'+m+'" ':"";o="<dl "+m+'class="'+i+'" style="width: '+b+'px">'+'<dt class="wp-caption-dt">'+S.getOuterHTML(s)+'</dt><dd class="wp-caption-dd">'+n.caption+"</dd></dl>";if(f=S.getParent(s,"p")){l=S.create("div",{"class":"mceTemp"},o);f.parentNode.insertBefore(l,f);S.remove(s);S.isEmpty(f)&&S.remove(f)}else S.setOuterHTML(s,'<div class="mceTemp">'+o+"</div>")}}else if(p){f=S.create("p");p.parentNode.insertBefore(f,p);f.appendChild(s);S.remove(p)}wp.media.events&&wp.media.events.trigger("editor:image-update",{editor:e,metadata:n,image:t});e.nodeChanged();h(t)}function l(t){var n,i,s;if(typeof wp=="undefined"||!wp.media){e.execCommand("mceImage");return}s=o(t);wp.media.events.trigger("editor:image-edit",{editor:e,metadata:s,image:t});n=wp.media({frame:"image",state:"image-details",metadata:s});wp.media.events.trigger("editor:frame-create",{frame:n});i=function(r){e.focus();e.undoManager.transact(function(){f(t,r)});n.detach()};n.state("image-details").on("update",i);n.state("replace-image").on("replace",i);n.on("close",function(){e.focus();n.detach();r=!1});n.open()}function c(t){var n;if(t.nodeName==="DIV"&&e.dom.hasClass(t,"mceTemp"))n=t;else if(t.nodeName==="IMG"||t.nodeName==="DT"||t.nodeName==="A")n=e.dom.getParent(t,"div.mceTemp");if(n){n.nextSibling?e.selection.select(n.nextSibling):n.previousSibling?e.selection.select(n.previousSibling):e.selection.select(n.parentNode);e.selection.collapse(!0);e.dom.remove(n)}else e.dom.remove(t);p();e.nodeChanged();e.undoManager.add()}function h(t){var r,i,s,o,u=e.dom;p();if(!t||t.nodeName!=="IMG"||d(t))return;u.setAttrib(t,"data-wp-imgselect",1);r=u.getRect(t);i='<i class="dashicons dashicons-edit edit" data-mce-bogus="all"></i><i class="dashicons dashicons-no-alt remove" data-mce-bogus="all"></i>';s=u.create("p",{id:"wp-image-toolbar","data-mce-bogus":"all",contenteditable:!1},i);e.rtl?o=r.x+r.w-82:o=r.x;e.getBody().appendChild(s);u.setStyles(s,{top:r.y,left:o});n=!0}function p(){var t=e.dom.get("wp-image-toolbar");t&&e.dom.remove(t);e.dom.setAttrib(e.dom.select("img[data-wp-imgselect]"),"data-wp-imgselect",null);r=!1;n=!1}function d(t){var n=e.dom;return n.hasClass(t,"mceItem")||n.getAttrib(t,"data-mce-placeholder")||n.getAttrib(t,"data-mce-object")?!0:!1}function v(e){return e&&e.nodeName==="I"&&e.parentNode.id==="wp-image-toolbar"}function m(t){var n,i=t.target,s=e.dom;if(t.button&&t.button>1)return;if(v(i)){n=s.select("img[data-wp-imgselect]")[0];if(n){e.selection.select(n);if(s.hasClass(i,"remove"))c(n);else if(s.hasClass(i,"edit")&&!r){l(n);r=!0}}t.preventDefault()}else i.nodeName==="IMG"&&!e.dom.getAttrib(i,"data-wp-imgselect")&&!d(i)?h(i):i.nodeName!=="IMG"&&p()}var t,n=!1,r=!1;"ontouchend"in document&&e.on("click",function(e){var t=e.target;r&&t.nodeName==="IMG"&&e.preventDefault();if(v(t)){e.preventDefault();e.stopPropagation()}});e.on("mouseup touchend",m);e.on("init",function(){var t=e.dom,n=e.getParam("wpeditimage_html5_captions")?"html5-captions":"html4-captions";t.addClass(e.getBody(),n);e.on("wpLoadImageForm",function(t){if(e.getParam("wpeditimage_disable_captions"))return;var n={type:"textbox",flex:1,name:"caption",minHeight:60,multiline:!0,scroll:!0,label:"Image caption"};t.data.splice(t.data.length-1,0,n)});e.on("wpNewImageRefresh",function(e){var n,r;if(n=t.getParent(e.node,"dl.wp-caption"))if(!n.style.width){r=parseInt(e.node.clientWidth,10)+10;r=r?r+"px":"50%";t.setStyle(n,"width",r)}});e.on("wpImageFormSubmit",function(n){var r=n.imgData.data,i=n.imgData.node,s=n.imgData.caption,o="",u="",f="",l,c,h,p,d;r.id="__wp-temp-img-id";n.imgData.cancel=!0;r.style||(r.style=null);if(!r.src){if(i){(l=t.getParent(i,"div.mceTemp"))?t.remove(l):i.parentNode.nodeName==="A"?t.remove(i.parentNode):t.remove(i);e.nodeChanged()}return}if(s){s=s.replace(/\r\n|\r/g,"\n").replace(/<\/?[a-zA-Z0-9]+( [^<>]+)?>/g,function(e){return e.replace(/[\r\n\t]+/," ")});s=s.replace(/(<br[^>]*>)\s*\n\s*/g,"$1").replace(/\s*\n\s*/g,"<br />");s=a(s)}if(!i){p=t.createHTML("img",r);if(s){h=e.selection.getNode();if(r.width){f=parseInt(r.width,10);e.getParam("wpeditimage_html5_captions")||(f+=10);f=' style="width: '+f+'px"'}p='<dl class="wp-caption alignnone"'+f+">"+'<dt class="wp-caption-dt">'+p+'</dt><dd class="wp-caption-dd">'+s+"</dd></dl>";h.nodeName==="P"?c=h:c=t.getParent(h,"p");if(c&&c.nodeName==="P"){l=t.create("div",{"class":"mceTemp"},p);c.parentNode.insertBefore(l,c);e.selection.select(l);e.nodeChanged();t.isEmpty(c)&&t.remove(c)}else e.selection.setContent('<div class="mceTemp">'+p+"</div>")}else e.selection.setContent(p)}else{d=i.id||null;t.setAttribs(i,r);l=t.getParent(i,"dl.wp-caption");if(s)if(l){if(c=t.select("dd.wp-caption-dd",l)[0])c.innerHTML=s}else{if(i.className){o=i.className.match(/wp-image-([0-9]+)/);u=i.className.match(/align(left|right|center|none)/)}if(u){u=u[0];i.className=i.className.replace(/align(left|right|center|none)/g,"")}else u="alignnone";u=' class="wp-caption '+u+'"';o&&(o=' id="attachment_'+o[1]+'"');f=r.width||i.clientWidth;if(f){f=parseInt(f,10);e.getParam("wpeditimage_html5_captions")||(f+=10);f=' style="width: '+f+'px"'}if(i.parentNode&&i.parentNode.nodeName==="A"){p=t.getOuterHTML(i.parentNode);h=i.parentNode}else{p=t.getOuterHTML(i);h=i}p="<dl "+o+u+f+">"+'<dt class="wp-caption-dt">'+p+'</dt><dd class="wp-caption-dd">'+s+"</dd></dl>";if(c=t.getParent(i,"p")){l=t.create("div",{"class":"mceTemp"},p);t.insertAfter(l,c);e.selection.select(l);e.nodeChanged();t.remove(h);t.isEmpty(c)&&t.remove(c)}else e.selection.setContent('<div class="mceTemp">'+p+"</div>")}else if(l){i.parentNode.nodeName==="A"?p=t.getOuterHTML(i.parentNode):p=t.getOuterHTML(i);c=t.create("p",{},p);t.insertAfter(c,l.parentNode);e.selection.select(c);e.nodeChanged();t.remove(l.parentNode)}}i=t.get("__wp-temp-img-id");t.setAttrib(i,"id",d);n.imgData.node=i});e.on("wpLoadImageData",function(n){var r,i=n.imgData.data,s=n.imgData.node;if(r=t.getParent(s,"dl.wp-caption")){r=t.select("dd.wp-caption-dd",r)[0];r&&(i.caption=e.serializer.serialize(r).replace(/<br[^>]*>/g,"$&\n").replace(/^<p>/,"").replace(/<\/p>$/,""))}});t.bind(e.getDoc(),"dragstart",function(n){var r=e.selection.getNode();r.nodeName==="IMG"&&t.getParent(r,".wp-caption")&&n.preventDefault();p()});if(tinymce.Env.ie&&tinymce.Env.ie>10){t.bind(e.getBody(),"mscontrolselect",function(n){n.target.nodeName==="IMG"&&t.getParent(n.target,".wp-caption")?e.getBody().focus():n.target.nodeName==="DL"&&t.hasClass(n.target,"wp-caption")&&n.target.focus()});e.on("click",function(n){n.target.nodeName==="IMG"&&t.getAttrib(n.target,"data-wp-imgselect")&&t.getParent(n.target,"dl.wp-caption")&&e.getBody().focus()})}});e.on("ObjectResized",function(t){var n=t.target;n.nodeName==="IMG"&&e.undoManager.transact(function(){var r,i,s=e.dom;n.className=n.className.replace(/\bsize-[^ ]+/,"");if(r=s.getParent(n,".wp-caption")){i=t.width||s.getAttrib(n,"width");if(i){i=parseInt(i,10);e.getParam("wpeditimage_html5_captions")||(i+=10);s.setStyle(r,"width",i+"px")}}h(n)})});e.on("BeforeExecCommand",function(t){var n,r,i,s,o=t.command,u=e.dom;if(o==="mceInsertContent"){if(n=u.getParent(e.selection.getNode(),"div.mceTemp")){r=u.create("p");u.insertAfter(r,n);e.selection.setCursorLocation(r,0);e.nodeChanged()}}else if(o==="JustifyLeft"||o==="JustifyRight"||o==="JustifyCenter"){n=e.selection.getNode();s=o.substr(7).toLowerCase();s="align"+s;i=u.getParent(n,"dl.wp-caption");p();if(i){if(u.hasClass(i,s)){u.removeClass(i,s);u.addClass(i,"alignnone")}else{i.className=i.className.replace(/align[^ ]+/g,"");u.addClass(i,s)}n.nodeName==="IMG"&&e.nodeChanged();t.preventDefault()}n.nodeName==="IMG"&&(u.hasClass(n,s)?u.addClass(n,"alignnone"):u.removeClass(n,"alignnone"))}});e.on("keydown",function(t){var r,i,s,o,u=e.selection,a=t.keyCode,f=e.dom,l=tinymce.util.VK;if(a===l.ENTER){r=u.getNode();i=f.getParent(r,"div.mceTemp");if(i){f.events.cancel(t);tinymce.each(f.select("dt, dd",i),function(e){f.isEmpty(e)&&f.remove(e)});o=tinymce.Env.ie&&tinymce.Env.ie<11?"":'<br data-mce-bogus="1" />';s=f.create("p",null,o);r.nodeName==="DD"?f.insertAfter(s,i):i.parentNode.insertBefore(s,i);e.nodeChanged();u.setCursorLocation(s,0)}}else if(a===l.DELETE||a===l.BACKSPACE){r=u.getNode();if(r.nodeName==="DIV"&&f.hasClass(r,"mceTemp"))i=r;else if(r.nodeName==="IMG"||r.nodeName==="DT"||r.nodeName==="A")i=f.getParent(r,"div.mceTemp");if(i){f.events.cancel(t);c(r);return!1}p()}if(n){if(t.ctrlKey||t.metaKey||t.altKey||a<48&&a!==l.SPACEBAR)return;p()}});e.on("mousedown",function(e){v(e.target)?tinymce.Env.ie&&e.preventDefault():e.target.nodeName!=="IMG"&&p()});e.on("BeforeAddUndo",function(e){e.level.content=e.level.content.replace(/ data-wp-imgselect="1"/g,"")});tinymce.Env.gecko&&e.on("undo redo",function(){e.selection.getNode().nodeName==="IMG"&&e.selection.collapse()});e.on("cut wpview-selected",function(){p()});e.wpSetImgCaption=function(e){return i(e)};e.wpGetImgCaption=function(e){return s(e)};e.on("BeforeSetContent",function(t){t.format!=="raw"&&(t.content=e.wpSetImgCaption(t.content))});e.on("PostProcess",function(t){if(t.get){t.content=e.wpGetImgCaption(t.content);t.content=t.content.replace(/ data-wp-imgselect="1"/g,"")}});return{_do_shcode:i,_get_shcode:s}});