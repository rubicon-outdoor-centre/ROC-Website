tinymce.PluginManager.add("wpeditimage",function(e){function t(t){return t.replace(/(?:<p>)?\[(?:wp_)?caption([^\]]+)\]([\s\S]+?)\[\/(?:wp_)?caption\](?:<\/p>)?/g,function(t,n,r){var i,s,o,u,a,f,l=tinymce.trim;return i=n.match(/id=['"]([^'"]*)['"] ?/),i&&(n=n.replace(i[0],"")),s=n.match(/align=['"]([^'"]*)['"] ?/),s&&(n=n.replace(s[0],"")),o=n.match(/class=['"]([^'"]*)['"] ?/),o&&(n=n.replace(o[0],"")),f=n.match(/width=['"]([0-9]*)['"] ?/),f&&(n=n.replace(f[0],"")),r=l(r),a=r.match(/((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)([\s\S]*)/i),a&&a[2]?(u=l(a[2]),a=l(a[1])):(u=l(n).replace(/caption=['"]/,"").replace(/['"]$/,""),a=r),i=i&&i[1]?i[1].replace(/[<>&]+/g,""):"",s=s&&s[1]?s[1]:"alignnone",o=o&&o[1]?" "+o[1].replace(/[<>&]+/g,""):"",!f&&a&&(f=a.match(/width=['"]([0-9]*)['"]/)),f&&f[1]&&(f=f[1]),f&&u?(f=parseInt(f,10),e.getParam("wpeditimage_html5_captions")||(f+=10),'<div class="mceTemp"><dl id="'+i+'" class="wp-caption '+s+o+'" style="width: '+f+'px"><dt class="wp-caption-dt">'+a+'</dt><dd class="wp-caption-dd">'+u+"</dd></dl></div>"):r})}function n(e){return e.replace(/<div (?:id="attachment_|class="mceTemp)[^>]*>([\s\S]+?)<\/div>/g,function(e,t){var n="";return-1===t.indexOf("<img ")?(n=t.match(/<dd [^>]+>([\s\S]+?)<\/dd>/i),n&&n[1]?"<p>"+n[1]+"</p>":""):(n=t.replace(/\s*<dl ([^>]+)>\s*<dt [^>]+>([\s\S]+?)<\/dt>\s*<dd [^>]+>([\s\S]*?)<\/dd>\s*<\/dl>\s*/gi,function(e,t,n,r){var i,s,o,u;return u=n.match(/width="([0-9]*)"/),u=u&&u[1]?u[1]:"",u&&r?(i=t.match(/id="([^"]*)"/),i=i&&i[1]?i[1]:"",s=t.match(/class="([^"]*)"/),s=s&&s[1]?s[1]:"",o=s.match(/align[a-z]+/i)||"alignnone",s=s.replace(/wp-caption ?|align[a-z]+ ?/gi,""),s&&(s=' class="'+s+'"'),r=r.replace(/\r\n|\r/g,"\n").replace(/<[a-zA-Z0-9]+( [^<>]+)?>/g,function(e){return e.replace(/[\r\n\t]+/," ")}),r=r.replace(/\s*\n\s*/g,"<br />"),'[caption id="'+i+'" align="'+o+'" width="'+u+'"'+s+"]"+n+" "+r+"[/caption]"):n}),-1===n.indexOf("[caption")&&(n=t.replace(/[\s\S]*?((?:<a [^>]+>)?<img [^>]+>(?:<\/a>)?)(<p>[\s\S]*<\/p>)?[\s\S]*/gi,"<p>$1</p>$2")),n)})}function r(t){var n,r,i,s,o,u,a,f,l=[],c=e.dom,h=/^\d+$/;return i={attachment_id:!1,size:"custom",caption:"",align:"none",extraClasses:"",link:!1,linkUrl:"",linkClassName:"",linkTargetBlank:!1,linkRel:"",title:""},i.url=c.getAttrib(t,"src"),i.alt=c.getAttrib(t,"alt"),i.title=c.getAttrib(t,"title"),a=c.getAttrib(t,"width"),f=c.getAttrib(t,"height"),(!h.test(a)||parseInt(a,10)<1)&&(a=t.naturalWidth||t.width),(!h.test(f)||parseInt(f,10)<1)&&(f=t.naturalHeight||t.height),i.customWidth=i.width=a,i.customHeight=i.height=f,n=tinymce.explode(t.className," "),r=[],tinymce.each(n,function(e){/^wp-image/.test(e)?i.attachment_id=parseInt(e.replace("wp-image-",""),10):/^align/.test(e)?i.align=e.replace("align",""):/^size/.test(e)?i.size=e.replace("size-",""):r.push(e)}),i.extraClasses=r.join(" "),s=c.getParents(t,".wp-caption"),s.length&&(s=s[0],n=s.className.split(" "),tinymce.each(n,function(e){/^align/.test(e)?i.align=e.replace("align",""):e&&"wp-caption"!==e&&l.push(e)}),i.captionClassName=l.join(" "),o=c.select("dd.wp-caption-dd",s),o.length&&(o=o[0],i.caption=e.serializer.serialize(o).replace(/<br[^>]*>/g,"$&\n").replace(/^<p>/,"").replace(/<\/p>$/,""))),t.parentNode&&"A"===t.parentNode.nodeName&&(u=t.parentNode,i.linkUrl=c.getAttrib(u,"href"),i.linkTargetBlank="_blank"===c.getAttrib(u,"target")?!0:!1,i.linkRel=c.getAttrib(u,"rel"),i.linkClassName=u.className),i}function i(e){return e&&(!!e.textContent||!!e.innerText)}function s(t){return!t||-1===t.indexOf("<")&&-1===t.indexOf(">")?t:(d||(d=new tinymce.html.Serializer({},e.schema)),d.serialize(e.parser.parse(t,{forced_root_block:!1})))}function o(t,n){var r,o,u,a,l,c,h,p,d,v,m,g,y,b,w,E,S=e.dom;r=tinymce.explode(n.extraClasses," "),r||(r=[]),n.caption||r.push("align"+n.align),n.attachment_id&&(r.push("wp-image-"+n.attachment_id),n.size&&"custom"!==n.size&&r.push("size-"+n.size)),b=n.width,w=n.height,"custom"===n.size&&(b=n.customWidth,w=n.customHeight),g={src:n.url,width:b||null,height:w||null,alt:n.alt,title:n.title||null,"class":r.join(" ")||null},S.setAttribs(t,g),y={href:n.linkUrl,rel:n.linkRel||null,target:n.linkTargetBlank?"_blank":null,"class":n.linkClassName||null},t.parentNode&&"A"===t.parentNode.nodeName&&!i(t.parentNode)?n.linkUrl?S.setAttribs(t.parentNode,y):S.remove(t.parentNode,!0):n.linkUrl&&((h=S.getParent(t,"a"))&&S.insertAfter(t,h),h=S.create("a",y),t.parentNode.insertBefore(h,t),h.appendChild(t)),p=e.dom.getParent(t,".mceTemp"),u=t.parentNode&&"A"===t.parentNode.nodeName&&!i(t.parentNode)?t.parentNode:t,n.caption?(n.caption=s(n.caption),m=n.attachment_id?"attachment_"+n.attachment_id:null,E="align"+(n.align||"none"),o="wp-caption "+E,n.captionClassName&&(o+=" "+n.captionClassName.replace(/[<>&]+/g,"")),e.getParam("wpeditimage_html5_captions")||(b=parseInt(b,10),b+=10),p?(v=S.select("dl.wp-caption",p),v.length&&S.setAttribs(v,{id:m,"class":o,style:"width: "+b+"px"}),d=S.select(".wp-caption-dd",p),d.length&&S.setHTML(d[0],n.caption)):(m=m?'id="'+m+'" ':"",a="<dl "+m+'class="'+o+'" style="width: '+b+'px"><dt class="wp-caption-dt">'+S.getOuterHTML(u)+'</dt><dd class="wp-caption-dd">'+n.caption+"</dd></dl>",(l=S.getParent(u,"p"))?(c=S.create("div",{"class":"mceTemp"},a),l.parentNode.insertBefore(c,l),S.remove(u),S.isEmpty(l)&&S.remove(l)):S.setOuterHTML(u,'<div class="mceTemp">'+a+"</div>"))):p&&(l=S.create("p"),p.parentNode.insertBefore(l,p),l.appendChild(u),S.remove(p)),wp.media.events&&wp.media.events.trigger("editor:image-update",{editor:e,metadata:n,image:t}),e.nodeChanged(),f(t)}function u(t){var n,i,s;return"undefined"!=typeof wp&&wp.media?(s=r(t),wp.media.events.trigger("editor:image-edit",{editor:e,metadata:s,image:t}),n=wp.media({frame:"image",state:"image-details",metadata:s}),wp.media.events.trigger("editor:frame-create",{frame:n}),i=function(r){e.focus(),e.undoManager.transact(function(){o(t,r)}),n.detach()},n.state("image-details").on("update",i),n.state("replace-image").on("replace",i),n.on("close",function(){e.focus(),n.detach(),m=!1}),void n.open()):void e.execCommand("mceImage")}function a(t){var n;"DIV"===t.nodeName&&e.dom.hasClass(t,"mceTemp")?n=t:("IMG"===t.nodeName||"DT"===t.nodeName||"A"===t.nodeName)&&(n=e.dom.getParent(t,"div.mceTemp")),n?(e.selection.select(n.nextSibling?n.nextSibling:n.previousSibling?n.previousSibling:n.parentNode),e.selection.collapse(!0),e.dom.remove(n)):e.dom.remove(t),l(),e.nodeChanged(),e.undoManager.add()}function f(t){var n,r,i,s,o=e.dom;l(),t&&"IMG"===t.nodeName&&!c(t)&&(o.setAttrib(t,"data-wp-imgselect",1),n=o.getRect(t),r='<i class="dashicons dashicons-edit edit" data-mce-bogus="all"></i><i class="dashicons dashicons-no-alt remove" data-mce-bogus="all"></i>',i=o.create("p",{id:"wp-image-toolbar","data-mce-bogus":"all",contenteditable:!1},r),s=e.rtl?n.x+n.w-82:n.x,e.getBody().appendChild(i),o.setStyles(i,{top:n.y,left:s}),v=!0)}function l(){var t=e.dom.get("wp-image-toolbar");t&&e.dom.remove(t),e.dom.setAttrib(e.dom.select("img[data-wp-imgselect]"),"data-wp-imgselect",null),m=!1,v=!1}function c(t){var n=e.dom;return n.hasClass(t,"mceItem")||n.getAttrib(t,"data-mce-placeholder")||n.getAttrib(t,"data-mce-object")?!0:!1}function h(e){return e&&"I"===e.nodeName&&"wp-image-toolbar"===e.parentNode.id}function p(t){var n,r=t.target,i=e.dom;t.button&&t.button>1||(h(r)?(n=i.select("img[data-wp-imgselect]")[0],n&&(e.selection.select(n),i.hasClass(r,"remove")?a(n):i.hasClass(r,"edit")&&(m||(u(n),m=!0))),t.preventDefault()):"IMG"!==r.nodeName||e.dom.getAttrib(r,"data-wp-imgselect")||c(r)?"IMG"!==r.nodeName&&l():f(r))}var d,v=!1,m=!1;return"ontouchend"in document&&e.on("click",function(e){var t=e.target;m&&"IMG"===t.nodeName&&e.preventDefault(),h(t)&&(e.preventDefault(),e.stopPropagation())}),e.on("mouseup touchend",p),e.on("init",function(){var t=e.dom,n=e.getParam("wpeditimage_html5_captions")?"html5-captions":"html4-captions";t.addClass(e.getBody(),n),e.on("wpLoadImageForm",function(t){if(!e.getParam("wpeditimage_disable_captions")){var n={type:"textbox",flex:1,name:"caption",minHeight:60,multiline:!0,scroll:!0,label:"Image caption"};t.data.splice(t.data.length-1,0,n)}}),e.on("wpNewImageRefresh",function(e){var n,r;(n=t.getParent(e.node,"dl.wp-caption"))&&(n.style.width||(r=parseInt(e.node.clientWidth,10)+10,r=r?r+"px":"50%",t.setStyle(n,"width",r)))}),e.on("wpImageFormSubmit",function(n){var r,i,o,u,a,f=n.imgData.data,l=n.imgData.node,c=n.imgData.caption,h="",p="",d="";return f.id="__wp-temp-img-id",n.imgData.cancel=!0,f.style||(f.style=null),f.src?(c&&(c=c.replace(/\r\n|\r/g,"\n").replace(/<\/?[a-zA-Z0-9]+( [^<>]+)?>/g,function(e){return e.replace(/[\r\n\t]+/," ")}),c=c.replace(/(<br[^>]*>)\s*\n\s*/g,"$1").replace(/\s*\n\s*/g,"<br />"),c=s(c)),l?(a=l.id||null,t.setAttribs(l,f),r=t.getParent(l,"dl.wp-caption"),c?r?(i=t.select("dd.wp-caption-dd",r)[0])&&(i.innerHTML=c):(l.className&&(h=l.className.match(/wp-image-([0-9]+)/),p=l.className.match(/align(left|right|center|none)/)),p?(p=p[0],l.className=l.className.replace(/align(left|right|center|none)/g,"")):p="alignnone",p=' class="wp-caption '+p+'"',h&&(h=' id="attachment_'+h[1]+'"'),d=f.width||l.clientWidth,d&&(d=parseInt(d,10),e.getParam("wpeditimage_html5_captions")||(d+=10),d=' style="width: '+d+'px"'),l.parentNode&&"A"===l.parentNode.nodeName?(u=t.getOuterHTML(l.parentNode),o=l.parentNode):(u=t.getOuterHTML(l),o=l),u="<dl "+h+p+d+'><dt class="wp-caption-dt">'+u+'</dt><dd class="wp-caption-dd">'+c+"</dd></dl>",(i=t.getParent(l,"p"))?(r=t.create("div",{"class":"mceTemp"},u),t.insertAfter(r,i),e.selection.select(r),e.nodeChanged(),t.remove(o),t.isEmpty(i)&&t.remove(i)):e.selection.setContent('<div class="mceTemp">'+u+"</div>")):r&&(u=t.getOuterHTML("A"===l.parentNode.nodeName?l.parentNode:l),i=t.create("p",{},u),t.insertAfter(i,r.parentNode),e.selection.select(i),e.nodeChanged(),t.remove(r.parentNode))):(u=t.createHTML("img",f),c?(o=e.selection.getNode(),f.width&&(d=parseInt(f.width,10),e.getParam("wpeditimage_html5_captions")||(d+=10),d=' style="width: '+d+'px"'),u='<dl class="wp-caption alignnone"'+d+'><dt class="wp-caption-dt">'+u+'</dt><dd class="wp-caption-dd">'+c+"</dd></dl>",i="P"===o.nodeName?o:t.getParent(o,"p"),i&&"P"===i.nodeName?(r=t.create("div",{"class":"mceTemp"},u),i.parentNode.insertBefore(r,i),e.selection.select(r),e.nodeChanged(),t.isEmpty(i)&&t.remove(i)):e.selection.setContent('<div class="mceTemp">'+u+"</div>")):e.selection.setContent(u)),l=t.get("__wp-temp-img-id"),t.setAttrib(l,"id",a),void (n.imgData.node=l)):void (l&&(t.remove((r=t.getParent(l,"div.mceTemp"))?r:"A"===l.parentNode.nodeName?l.parentNode:l),e.nodeChanged()))}),e.on("wpLoadImageData",function(n){var r,i=n.imgData.data,s=n.imgData.node;(r=t.getParent(s,"dl.wp-caption"))&&(r=t.select("dd.wp-caption-dd",r)[0],r&&(i.caption=e.serializer.serialize(r).replace(/<br[^>]*>/g,"$&\n").replace(/^<p>/,"").replace(/<\/p>$/,"")))}),t.bind(e.getDoc(),"dragstart",function(n){var r=e.selection.getNode();"IMG"===r.nodeName&&t.getParent(r,".wp-caption")&&n.preventDefault(),l()}),tinymce.Env.ie&&tinymce.Env.ie>10&&(t.bind(e.getBody(),"mscontrolselect",function(n){"IMG"===n.target.nodeName&&t.getParent(n.target,".wp-caption")?e.getBody().focus():"DL"===n.target.nodeName&&t.hasClass(n.target,"wp-caption")&&n.target.focus()}),e.on("click",function(n){"IMG"===n.target.nodeName&&t.getAttrib(n.target,"data-wp-imgselect")&&t.getParent(n.target,"dl.wp-caption")&&e.getBody().focus()}))}),e.on("ObjectResized",function(t){var n=t.target;"IMG"===n.nodeName&&e.undoManager.transact(function(){var r,i,s=e.dom;n.className=n.className.replace(/\bsize-[^ ]+/,""),(r=s.getParent(n,".wp-caption"))&&(i=t.width||s.getAttrib(n,"width"),i&&(i=parseInt(i,10),e.getParam("wpeditimage_html5_captions")||(i+=10),s.setStyle(r,"width",i+"px"))),f(n)})}),e.on("BeforeExecCommand",function(t){var n,r,i,s,o=t.command,u=e.dom;"mceInsertContent"===o?(n=u.getParent(e.selection.getNode(),"div.mceTemp"))&&(r=u.create("p"),u.insertAfter(r,n),e.selection.setCursorLocation(r,0),e.nodeChanged()):("JustifyLeft"===o||"JustifyRight"===o||"JustifyCenter"===o)&&(n=e.selection.getNode(),s=o.substr(7).toLowerCase(),s="align"+s,i=u.getParent(n,"dl.wp-caption"),l(),i&&(u.hasClass(i,s)?(u.removeClass(i,s),u.addClass(i,"alignnone")):(i.className=i.className.replace(/align[^ ]+/g,""),u.addClass(i,s)),"IMG"===n.nodeName&&e.nodeChanged(),t.preventDefault()),"IMG"===n.nodeName&&(u.hasClass(n,s)?u.addClass(n,"alignnone"):u.removeClass(n,"alignnone")))}),e.on("keydown",function(t){var n,r,i,s,o=e.selection,u=t.keyCode,f=e.dom,c=tinymce.util.VK;if(u===c.ENTER)n=o.getNode(),r=f.getParent(n,"div.mceTemp"),r&&(f.events.cancel(t),tinymce.each(f.select("dt, dd",r),function(e){f.isEmpty(e)&&f.remove(e)}),s=tinymce.Env.ie&&tinymce.Env.ie<11?"":'<br data-mce-bogus="1" />',i=f.create("p",null,s),"DD"===n.nodeName?f.insertAfter(i,r):r.parentNode.insertBefore(i,r),e.nodeChanged(),o.setCursorLocation(i,0));else if(u===c.DELETE||u===c.BACKSPACE){if(n=o.getNode(),"DIV"===n.nodeName&&f.hasClass(n,"mceTemp")?r=n:("IMG"===n.nodeName||"DT"===n.nodeName||"A"===n.nodeName)&&(r=f.getParent(n,"div.mceTemp")),r)return f.events.cancel(t),a(n),!1;l()}if(v){if(t.ctrlKey||t.metaKey||t.altKey||48>u&&u!==c.SPACEBAR)return;l()}}),e.on("mousedown",function(e){h(e.target)?tinymce.Env.ie&&e.preventDefault():"IMG"!==e.target.nodeName&&l()}),e.on("BeforeAddUndo",function(e){e.level.content=e.level.content.replace(/ data-wp-imgselect="1"/g,"")}),tinymce.Env.gecko&&e.on("undo redo",function(){"IMG"===e.selection.getNode().nodeName&&e.selection.collapse()}),e.on("cut wpview-selected",function(){l()}),e.wpSetImgCaption=function(e){return t(e)},e.wpGetImgCaption=function(e){return n(e)},e.on("BeforeSetContent",function(t){"raw"!==t.format&&(t.content=e.wpSetImgCaption(t.content))}),e.on("PostProcess",function(t){t.get&&(t.content=e.wpGetImgCaption(t.content),t.content=t.content.replace(/ data-wp-imgselect="1"/g,""))}),{_do_shcode:t,_get_shcode:n}});