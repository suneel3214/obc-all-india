(()=>{function e(o){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(o)}!function(o){"use strict";o(document).on("click","a[data-theme]",(function(){o("head link#theme").attr("href",o(this).data("theme")),o(this).toggleClass("active").siblings().removeClass("active")})),o(document).on("click",'[data-bs-toggle="collapse"]',(function(){o(this).toggleClass("active").siblings().removeClass("active")})),o(document).on("click",".fullscreen-button",(function(){o("html").addClass("fullscreen-button"),void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen?document.documentElement.requestFullScreen?document.documentElement.requestFullScreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullScreen?document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):document.documentElement.msRequestFullscreen&&document.documentElement.msRequestFullscreen():(o("html").removeClass("fullscreen-button"),document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen())})),o(window).on("load",(function(e){o("#global-loader").fadeOut("slow")})),o(window).on("scroll",(function(e){o(this).scrollTop()>0?o("#back-to-top").fadeIn("slow"):o("#back-to-top").fadeOut("slow")})),o(document).on("click","#back-to-top",(function(e){return o("html").animate({scrollTop:0},0),!1})),o(".cover-image").each((function(){var n=o(this).attr("data-bs-image-src");"undefined"!==e(n)&&!1!==n&&o(this).css("background","url("+n+") center center")})),o((function(){o(".add").on("click",(function(){var e=o(this).closest("div").find(".qty"),n=parseInt(e.val());isNaN(n)||e.val(n+1)})),o(".minus").on("click",(function(){var e=o(this).closest("div").find(".qty"),n=parseInt(e.val());!isNaN(n)&&n>0&&e.val(n-1)}))})),o(".chart-circle").length&&o(".chart-circle").each((function(){var e=o(this);e.circleProgress({fill:{color:e.attr("data-bs-color")},size:e.height(),startAngle:-Math.PI/4*2,emptyFill:"rgba(119, 119, 142, 0.2)",lineCap:"round"})})),o(".modal-effect").on("click",(function(e){e.preventDefault();var n=o(this).attr("data-bs-effect");o("#modaldemo8").addClass(n)})),o("#modaldemo8").on("hidden.bs.modal",(function(e){o(this).removeClass((function(e,o){return(o.match(/(^|\s)effect-\S+/g)||[]).join(" ")}))}));var n="div.card";[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map((function(e){return new bootstrap.Tooltip(e)})),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map((function(e){return new bootstrap.Popover(e)}));o(document).on("click",'[data-bs-toggle="card-remove"]',(function(e){return o(this).closest(n).remove(),e.preventDefault(),!1})),o(document).on("click",'[data-bs-toggle="card-collapse"]',(function(e){return o(this).closest(n).toggleClass("card-collapsed"),e.preventDefault(),!1})),o(document).on("click",'[data-bs-toggle="card-fullscreen"]',(function(e){return o(this).closest(n).toggleClass("card-fullscreen").removeClass("card-collapsed"),e.preventDefault(),!1})),o(document).on("change",".file-browserinput",(function(){var e=o(this),n=e.get(0).files?e.get(0).files.length:1,r=e.val().replace(/\\/g,"/").replace(/.*\//,"");e.trigger("fileselect",[n,r])})),o(".file-browserinput").on("fileselect",(function(e,n,r){var l=o(this).parents(".input-group").find(":text"),d=n>1?n+" files selected":r;l.length?l.val(d):d&&alert(d)})),o(".layout-setting").on("click",(function(e){document?o("body").toggleClass("dark-mode"):(o("body").removeClass("dark-mode"),o("body").addClass("light-mode"))})),o(document).on("click","a[data-sidetheme]",(function(){o("head link#sidemenu-theme").attr("href",o(this).data("sidetheme"))})),o(".default-menu").on("click",(function(){o("body").addClass("menu1"),o("body").removeClass("menu2"),o("body").removeClass("menu3"),document.body.clientWidth>=767&&o("body").removeClass("sidenav-toggled")})),o(".sideicon-menu").on("click",(function(){o("body").addClass("menu3"),o("body").removeClass("menu2"),o("body").removeClass("menu1"),jQuery(document).ready((function(e){var o=function(){var o=document.body.clientWidth;o<768?e("body").removeClass("sidenav-toggled"):o>=767&&e("body").addClass("sidenav-toggled")};e(window).resize((function(){o()})),o()}))})),o(".icontext-menu").on("click",(function(){o("body").addClass("menu2"),o("body").removeClass("menu1"),o("body").removeClass("menu3"),jQuery(document).ready((function(e){var o=function(){var o=document.body.clientWidth;o<768?e("body").removeClass("sidenav-toggled"):o>=767&&e("body").addClass("sidenav-toggled")};e(window).resize((function(){o()})),o()}))})),o("#background-left1").on("click",(function(){return o("body").addClass("light-mode"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-mode"),o("body").removeClass("color-header"),o("body").removeClass("dark-header"),o("body").removeClass("dark-menu"),o("body").removeClass("gradient-menu"),o("body").removeClass("gradient-header"),o("body").removeClass("color-menu"),!1})),o("#background-left2").on("click",(function(){return o("body").addClass("dark-mode"),o("body").removeClass("light-mode"),o("body").removeClass("light-menu"),o("body").removeClass("color-menu"),o("body").removeClass("dark-header"),o("body").removeClass("color-header"),o("body").removeClass("light-header"),o("body").removeClass("dark-menu"),o("body").removeClass("light-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("gradient-menu"),!1})),o("#background1").on("click",(function(){return o("body").addClass("light-header"),o("body").removeClass("color-header"),o("body").removeClass("dark-header"),o("body").removeClass("gradient-header"),!1})),o("#background2").on("click",(function(){return o("body").addClass("color-header"),o("body").removeClass("light-header"),o("body").removeClass("dark-header"),o("body").removeClass("gradient-header"),!1})),o("#background3").on("click",(function(){return o("body").addClass("dark-header"),o("body").removeClass("color-header"),o("body").removeClass("light-header"),o("body").removeClass("gradient-header"),!1})),o("#background11").on("click",(function(){return o("body").addClass("gradient-header"),o("body").removeClass("dark-header"),o("body").removeClass("color-header"),o("body").removeClass("light-header"),!1})),o("#background4").on("click",(function(){return o("body").addClass("light-menu"),o("body").removeClass("color-menu"),o("body").removeClass("dark-menu"),o("body").removeClass("gradient-menu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("color-hormenu"),!1})),o("#background5").on("click",(function(){return o("body").addClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("dark-menu"),o("body").removeClass("gradient-menu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("color-hormenu"),!1})),o("#background6").on("click",(function(){return o("body").addClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("dark-hormenu"),!1})),o("#background10").on("click",(function(){return o("body").addClass("gradient-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("dark-menu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("dark-hormenu"),!1})),o("#background7").on("click",(function(){return o("body").addClass("light-hormenu"),o("body").removeClass("color-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background8").on("click",(function(){return o("body").addClass("color-hormenu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background9").on("click",(function(){return o("body").addClass("dark-hormenu"),o("body").removeClass("color-hormenu"),o("body").removeClass("light-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background13").on("click",(function(){return o("body").addClass("gradient-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("color-hormenu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background14").on("click",(function(){return o("body").addClass("layout-fullwidth"),o("body").removeClass("layout-boxed"),o("body").removeClass("light-hormenu"),o("body").removeClass("color-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background15").on("click",(function(){return o("body").addClass("layout-boxed"),o("body").removeClass("layout-fullwidth"),o("body").removeClass("color-hormenu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background16").on("click",(function(){return o("body").addClass("fixed-layout"),o("body").removeClass("scrollable-layout"),o("body").removeClass("light-hormenu"),o("body").removeClass("color-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1})),o("#background17").on("click",(function(){return o("body").addClass("scrollable-layout"),o("body").removeClass("fixed-layout"),o("body").removeClass("color-hormenu"),o("body").removeClass("light-hormenu"),o("body").removeClass("dark-hormenu"),o("body").removeClass("gradient-hormenu"),o("body").removeClass("dark-menu"),o("body").removeClass("color-menu"),o("body").removeClass("light-menu"),o("body").removeClass("gradient-menu"),!1}))}(jQuery)})();