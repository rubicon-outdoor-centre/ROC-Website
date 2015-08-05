window.wp=window.wp||{},function(e,t,n){t.updates={},t.updates.ajaxNonce=window._wpUpdatesSettings.ajax_nonce,t.updates.l10n=window._wpUpdatesSettings.l10n,t.updates.shouldRequestFilesystemCredentials=null,t.updates.filesystemCredentials={ftp:{host:null,username:null,password:null,connectionType:null},ssh:{publicKey:null,privateKey:null}},t.updates.updateLock=!1,t.updates.updateDoneSuccessfully=!1,t.updates.updateQueue=[],t.updates.$elToReturnFocusToFromCredentialsModal=null,t.updates.decrementCount=function(t){var n,r,i=e("#wp-admin-bar-updates .ab-label"),s=e('a[href="update-core.php"] .update-plugins'),o=e("#menu-plugins");if(n=i.text(),n=parseInt(n,10)-1,!(0>n||isNaN(n))&&(e("#wp-admin-bar-updates .ab-item").removeAttr("title"),i.text(n),s.each(function(e,t){t.className=t.className.replace(/count-\d+/,"count-"+n)}),s.removeAttr("title"),s.find(".update-count").text(n),"plugin"===t)){if(r=o.find(".plugin-count").eq(0).text(),r=parseInt(r,10)-1,0>r||isNaN(r))return;o.find(".plugin-count").text(r),o.find(".update-plugins").each(function(e,t){t.className=t.className.replace(/count-\d+/,"count-"+r)}),r>0?e(".subsubsub .upgrade .count").text("("+r+")"):e(".subsubsub .upgrade").remove()}},t.updates.updatePlugin=function(r,i){var s,o;if("plugins"===n||"plugins-network"===n?s=e('[data-slug="'+i+'"]').next().find(".update-message"):"plugin-install"===n&&(s=e(".plugin-card-"+i).find(".update-now"),o=s.data("name"),s.attr("aria-label",t.updates.l10n.updatingLabel.replace("%s",o))),s.addClass("updating-message"),s.html()!==t.updates.l10n.updating&&s.data("originaltext",s.html()),s.text(t.updates.l10n.updating),t.a11y.speak(t.updates.l10n.updatingMsg),t.updates.updateLock)return void t.updates.updateQueue.push({type:"update-plugin",data:{plugin:r,slug:i}});t.updates.updateLock=!0;var u={_ajax_nonce:t.updates.ajaxNonce,plugin:r,slug:i,username:t.updates.filesystemCredentials.ftp.username,password:t.updates.filesystemCredentials.ftp.password,hostname:t.updates.filesystemCredentials.ftp.hostname,connection_type:t.updates.filesystemCredentials.ftp.connectionType,public_key:t.updates.filesystemCredentials.ssh.publicKey,private_key:t.updates.filesystemCredentials.ssh.privateKey};t.ajax.post("update-plugin",u).done(t.updates.updateSuccess).fail(t.updates.updateError)},t.updates.updateSuccess=function(r){var i,s,o,u;"plugins"===n||"plugins-network"===n?(o=e('[data-slug="'+r.slug+'"]').first(),i=o.next().find(".update-message"),o.addClass("updated").removeClass("update"),u=o.find(".plugin-version-author-uri").html().replace(r.oldVersion,r.newVersion),o.find(".plugin-version-author-uri").html(u),o.next().addClass("updated")):"plugin-install"===n&&(i=e(".plugin-card-"+r.slug).find(".update-now"),i.addClass("button-disabled"),s=i.data("name"),i.attr("aria-label",t.updates.l10n.updatedLabel.replace("%s",s))),i.removeClass("updating-message").addClass("updated-message"),i.text(t.updates.l10n.updated),t.a11y.speak(t.updates.l10n.updatedMsg),t.updates.decrementCount("plugin"),t.updates.updateDoneSuccessfully=!0,t.updates.updateLock=!1,e(document).trigger("wp-plugin-update-success",r),t.updates.queueChecker()},t.updates.updateError=function(r){var i,s;return t.updates.updateDoneSuccessfully=!1,r.errorCode&&"unable_to_connect_to_filesystem"==r.errorCode&&t.updates.shouldRequestFilesystemCredentials?void t.updates.credentialError(r,"update-plugin"):("plugins"===n||"plugins-network"===n?i=e('[data-slug="'+r.slug+'"]').next().find(".update-message"):"plugin-install"===n&&(i=e(".plugin-card-"+r.slug).find(".update-now"),s=i.data("name"),i.attr("aria-label",t.updates.l10n.updateFailedLabel.replace("%s",s))),i.removeClass("updating-message"),i.html(t.updates.l10n.updateFailed+": "+r.error),t.a11y.speak(t.updates.l10n.updateFailed),t.updates.updateLock=!1,e(document).trigger("wp-plugin-update-error",r),void t.updates.queueChecker())},t.updates.showErrorInCredentialsForm=function(t){var n=e(".notification-dialog");n.find(".error").remove(),n.find("h3").after('<div class="error">'+t+"</div>")},t.updates.credentialError=function(e,n){t.updates.updateQueue.push({type:n,data:{plugin:e.plugin,slug:e.slug}}),t.updates.showErrorInCredentialsForm(e.error),t.updates.requestFilesystemCredentials()},t.updates.queueChecker=function(){if(!(t.updates.updateLock||t.updates.updateQueue.length<=0)){var e=t.updates.updateQueue.shift();t.updates.updatePlugin(e.data.plugin,e.data.slug)}},t.updates.requestFilesystemCredentials=function(r){t.updates.updateDoneSuccessfully===!1&&("plugin-install"===n&&r&&(t.updates.$elToReturnFocusToFromCredentialsModal=e(r.target)),t.updates.updateLock=!0,t.updates.requestForCredentialsModalOpen())},t.updates.keydown=function(n){27===n.keyCode?t.updates.requestForCredentialsModalCancel():9===n.keyCode&&("upgrade"!==n.target.id||n.shiftKey?"hostname"===n.target.id&&n.shiftKey&&(e("#upgrade").focus(),n.preventDefault()):(e("#hostname").focus(),n.preventDefault()))},t.updates.requestForCredentialsModalOpen=function(){var n=e("#request-filesystem-credentials-dialog");e("body").addClass("modal-open"),n.show(),n.find("input:enabled:first").focus(),n.keydown(t.updates.keydown)},t.updates.requestForCredentialsModalClose=function(){e("#request-filesystem-credentials-dialog").hide(),e("body").removeClass("modal-open"),t.updates.$elToReturnFocusToFromCredentialsModal.focus()},t.updates.requestForCredentialsModalCancel=function(){var r,i;(t.updates.updateLock!==!1||0!==t.updates.updateQueue.length)&&(r=t.updates.updateQueue[0].data.slug,t.updates.updateLock=!1,t.updates.updateQueue=[],t.updates.requestForCredentialsModalClose(),"plugins"===n||"plugins-network"===n?i=e('[data-slug="'+r+'"]').next().find(".update-message"):"plugin-install"===n&&(i=e(".plugin-card-"+r).find(".update-now")),i.removeClass("updating-message"),i.html(i.data("originaltext")),t.a11y.speak(t.updates.l10n.updateCancel))},t.updates.beforeunload=function(){return t.updates.updateLock?t.updates.l10n.beforeunload:void 0},e(document).ready(function(){t.updates.shouldRequestFilesystemCredentials=e("#request-filesystem-credentials-dialog").length<=0?!1:!0,e("#request-filesystem-credentials-dialog form").on("submit",function(){return t.updates.filesystemCredentials.ftp.hostname=e("#hostname").val(),t.updates.filesystemCredentials.ftp.username=e("#username").val(),t.updates.filesystemCredentials.ftp.password=e("#password").val(),t.updates.filesystemCredentials.ftp.connectionType=e('input[name="connection_type"]:checked').val(),t.updates.filesystemCredentials.ssh.publicKey=e("#public_key").val(),t.updates.filesystemCredentials.ssh.privateKey=e("#private_key").val(),t.updates.requestForCredentialsModalClose(),t.updates.updateLock=!1,t.updates.queueChecker(),!1}),e('#request-filesystem-credentials-dialog [data-js-action="close"], .notification-dialog-background').on("click",function(){t.updates.requestForCredentialsModalCancel()}),e('#request-filesystem-credentials-dialog input[name="connection_type"]').on("change",function(){e(this).parents("form").find("#private_key, #public_key").parents("label").toggle("ssh"==e(this).val())}).change(),e(".plugin-update-tr").on("click",".update-link",function(n){n.preventDefault(),t.updates.shouldRequestFilesystemCredentials&&!t.updates.updateLock&&t.updates.requestFilesystemCredentials(n);var r=e(n.target).parents(".plugin-update-tr");t.updates.$elToReturnFocusToFromCredentialsModal=e("#"+r.data("slug")).find(".check-column input"),t.updates.updatePlugin(r.data("plugin"),r.data("slug"))}),e(".plugin-card").on("click",".update-now",function(n){n.preventDefault();var r=e(n.target);t.updates.shouldRequestFilesystemCredentials&&!t.updates.updateLock&&t.updates.requestFilesystemCredentials(n),t.updates.updatePlugin(r.data("plugin"),r.data("slug"))}),e("#plugin_update_from_iframe").on("click",function(t){var n,r;n=window.parent==window?null:window.parent,e.support.postMessage=!!window.postMessage,e.support.postMessage!==!1&&null!==n&&-1===window.parent.location.pathname.indexOf("update-core.php")&&(t.preventDefault(),r={action:"updatePlugin",slug:e(this).data("slug")},n.postMessage(JSON.stringify(r),window.location.origin))})}),e(window).on("message",function(r){var i,s=r.originalEvent,o=document.location,u=o.protocol+"//"+o.hostname;if(s.origin===u&&(i=e.parseJSON(s.data),"undefined"!=typeof i.action))switch(i.action){case"decrementUpdateCount":t.updates.decrementCount(i.upgradeType);break;case"updatePlugin":tb_remove(),"plugins"===n||"plugins-network"===n?(e("#"+i.slug).find(".check-column input").focus(),e('.plugin-update-tr[data-slug="'+i.slug+'"]').find(".update-link").trigger("click")):"plugin-install"===n&&(e(".plugin-card-"+i.slug).find("h4 a").focus(),e(".plugin-card-"+i.slug).find('[data-slug="'+i.slug+'"]').trigger("click"))}}),e(window).on("beforeunload",t.updates.beforeunload)}(jQuery,window.wp,window.pagenow,window.ajaxurl);