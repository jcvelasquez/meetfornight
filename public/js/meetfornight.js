




/******RANGE******/

$(document).ready(function($) {




      $(".range-example").asRange({
        range: true,
        limit: false

      });

      // setup the repeater
      /*$('.repeater').repeater({
        show: function () {
          $(this).slideDown();
        },
        hide: function (deleteElement) {
          if(confirm('Are you sure you want to delete this element?')) {
              $(this).slideUp(deleteElement);
          }
        },
        isFirstItemUndeletable: true
      });*/

      $(".rango-perfil").asRange({
        range: false,
        limit: false
      });

      $('#sexo').on('change', function(){

        console.log("test")

      })

});





/******TOOLTIPS*****/
/*
$(function () {

  $('[data-toggle="tooltip"]').tooltip()

})
*/


/*****GALERÍA IMAGENES PEQUEÑAS*****/

function showImage(imgName) {

   var curImage = document.getElementById('currentImg');

   var thePath = 'img/galeria/';

   var theSource = thePath + imgName;

   curImage.src = theSource;

}

function nombre(imgName2){

  var curImage = document.getElementById('currentImg2');

   var thePath = 'img/galeria/';

   var theSource = thePath + imgName2;

   curImage.href = theSource;

}



/*****FORMULARIO ANIMADO OCULTAR Y MOSTRAR******/

function mostrarFormulario() {

      document.getElementById('form-consultor').style.display = 'block';

      document.getElementById('consultor').style.display = 'none';

}



function ocultarFormulario() {

      document.getElementById('form-consultor').style.display = 'none';

      document.getElementById('consultor').style.display = 'block';

}



/******MODAL******/

//$('#aviso-importante').modal('show')



/****Dropdown****/

//$('.dropdown-toggle').dropdown()


// jquery.repeater version 1.2.1
// https://github.com/DubFriend/jquery.repeater
// (MIT) 09-10-2016
// Brian Detering <BDeterin@gmail.com> (http://www.briandetering.net/)
!function(a){"use strict";var b=function(a){return a},c=function(b){return a.isArray(b)},d=function(a){return!c(a)&&a instanceof Object},e=function(b,c){return a.inArray(c,b)},f=function(a,b){return e(a,b)!==-1},g=function(a,b){for(var c in a)a.hasOwnProperty(c)&&b(a[c],c,a)},h=function(a){return a[a.length-1]},i=function(a){return Array.prototype.slice.call(a)},j=function(){var a={};return g(i(arguments),function(b){g(b,function(b,c){a[c]=b})}),a},k=function(a,b){var c=[];return g(a,function(a,d,e){c.push(b(a,d,e))}),c},l=function(a,b,c){var d={};return g(a,function(a,e,f){e=c?c(e,a):e,d[e]=b(a,e,f)}),d},m=function(a,b,d){return c(a)?k(a,b):l(a,b,d)},n=function(a,b){return m(a,function(a){return a[b]})},o=function(a,b){var d;return c(a)?(d=[],g(a,function(a,c,e){b(a,c,e)&&d.push(a)})):(d={},g(a,function(a,c,e){b(a,c,e)&&(d[c]=a)})),d},p=function(a,b,c){return m(a,function(a,d){return a[b].apply(a,c||[])})},q=function(a){a=a||{};var b={};return a.publish=function(a,c){g(b[a],function(a){a(c)})},a.subscribe=function(a,c){b[a]=b[a]||[],b[a].push(c)},a.unsubscribe=function(a){g(b,function(b){var c=e(b,a);c!==-1&&b.splice(c,1)})},a};!function(a){var b=function(a,b){var c=q(),d=a.$;return c.getType=function(){throw'implement me (return type. "text", "radio", etc.)'},c.$=function(a){return a?d.find(a):d},c.disable=function(){c.$().prop("disabled",!0),c.publish("isEnabled",!1)},c.enable=function(){c.$().prop("disabled",!1),c.publish("isEnabled",!0)},b.equalTo=function(a,b){return a===b},b.publishChange=function(){var a;return function(d,e){var f=c.get();b.equalTo(f,a)||c.publish("change",{e:d,domElement:e}),a=f}}(),c},i=function(a,c){var d=b(a,c);return d.get=function(){return d.$().val()},d.set=function(a){d.$().val(a)},d.clear=function(){d.set("")},c.buildSetter=function(a){return function(b){a.call(d,b)}},d},j=function(a,b){a=c(a)?a:[a],b=c(b)?b:[b];var d=!0;return a.length!==b.length?d=!1:g(a,function(a){f(b,a)||(d=!1)}),d},k=function(a){var b={},c=i(a,b);return c.getType=function(){return"button"},c.$().on("change",function(a){b.publishChange(a,this)}),c},l=function(b){var d={},e=i(b,d);return e.getType=function(){return"checkbox"},e.get=function(){var b=[];return e.$().filter(":checked").each(function(){b.push(a(this).val())}),b},e.set=function(b){b=c(b)?b:[b],e.$().each(function(){a(this).prop("checked",!1)}),g(b,function(a){e.$().filter('[value="'+a+'"]').prop("checked",!0)})},d.equalTo=j,e.$().change(function(a){d.publishChange(a,this)}),e},m=function(a){var b={},c=x(a,b);return c.getType=function(){return"email"},c},n=function(c){var d={},e=b(c,d);return e.getType=function(){return"file"},e.get=function(){return h(e.$().val().split("\\"))},e.clear=function(){this.$().each(function(){a(this).wrap("<form>").closest("form").get(0).reset(),a(this).unwrap()})},e.$().change(function(a){d.publishChange(a,this)}),e},o=function(a){var b={},c=i(a,b);return c.getType=function(){return"hidden"},c.$().change(function(a){b.publishChange(a,this)}),c},r=function(c){var d={},e=b(c,d);return e.getType=function(){return"file[multiple]"},e.get=function(){var a,b=e.$().get(0).files||[],c=[];for(a=0;a<(b.length||0);a+=1)c.push(b[a].name);return c},e.clear=function(){this.$().each(function(){a(this).wrap("<form>").closest("form").get(0).reset(),a(this).unwrap()})},e.$().change(function(a){d.publishChange(a,this)}),e},s=function(a){var b={},d=i(a,b);return d.getType=function(){return"select[multiple]"},d.get=function(){return d.$().val()||[]},d.set=function(a){d.$().val(""===a?[]:c(a)?a:[a])},b.equalTo=j,d.$().change(function(a){b.publishChange(a,this)}),d},t=function(a){var b={},c=x(a,b);return c.getType=function(){return"password"},c},u=function(b){var c={},d=i(b,c);return d.getType=function(){return"radio"},d.get=function(){return d.$().filter(":checked").val()||null},d.set=function(b){b?d.$().filter('[value="'+b+'"]').prop("checked",!0):d.$().each(function(){a(this).prop("checked",!1)})},d.$().change(function(a){c.publishChange(a,this)}),d},v=function(a){var b={},c=i(a,b);return c.getType=function(){return"range"},c.$().change(function(a){b.publishChange(a,this)}),c},w=function(a){var b={},c=i(a,b);return c.getType=function(){return"select"},c.$().change(function(a){b.publishChange(a,this)}),c},x=function(a){var b={},c=i(a,b);return c.getType=function(){return"text"},c.$().on("change keyup keydown",function(a){b.publishChange(a,this)}),c},y=function(a){var b={},c=i(a,b);return c.getType=function(){return"textarea"},c.$().on("change keyup keydown",function(a){b.publishChange(a,this)}),c},z=function(a){var b={},c=x(a,b);return c.getType=function(){return"url"},c},A=function(b){var c={},f=b.$,h=b.constructorOverride||{button:k,text:x,url:z,email:m,password:t,range:v,textarea:y,select:w,"select[multiple]":s,radio:u,checkbox:l,file:n,"file[multiple]":r,hidden:o},i=function(b,e){var g=d(e)?e:f.find(e);g.each(function(){var d=a(this).attr("name");c[d]=h[b]({$:a(this)})})},j=function(b,i){var j=[],k=d(i)?i:f.find(i);d(i)?c[k.attr("name")]=h[b]({$:k}):(k.each(function(){e(j,a(this).attr("name"))===-1&&j.push(a(this).attr("name"))}),g(j,function(a){c[a]=h[b]({$:f.find('input[name="'+a+'"]')})}))};return f.is("input, select, textarea")?f.is('input[type="button"], button, input[type="submit"]')?i("button",f):f.is("textarea")?i("textarea",f):f.is('input[type="text"]')||f.is("input")&&!f.attr("type")?i("text",f):f.is('input[type="password"]')?i("password",f):f.is('input[type="email"]')?i("email",f):f.is('input[type="url"]')?i("url",f):f.is('input[type="range"]')?i("range",f):f.is("select")?f.is("[multiple]")?i("select[multiple]",f):i("select",f):f.is('input[type="file"]')?f.is("[multiple]")?i("file[multiple]",f):i("file",f):f.is('input[type="hidden"]')?i("hidden",f):f.is('input[type="radio"]')?j("radio",f):f.is('input[type="checkbox"]')?j("checkbox",f):i("text",f):(i("button",'input[type="button"], button, input[type="submit"]'),i("text",'input[type="text"]'),i("password",'input[type="password"]'),i("email",'input[type="email"]'),i("url",'input[type="url"]'),i("range",'input[type="range"]'),i("textarea","textarea"),i("select","select:not([multiple])"),i("select[multiple]","select[multiple]"),i("file",'input[type="file"]:not([multiple])'),i("file[multiple]",'input[type="file"][multiple]'),i("hidden",'input[type="hidden"]'),j("radio",'input[type="radio"]'),j("checkbox",'input[type="checkbox"]')),c};a.fn.inputVal=function(b){var c=a(this),d=A({$:c});return c.is("input, textarea, select")?"undefined"==typeof b?d[c.attr("name")].get():(d[c.attr("name")].set(b),c):"undefined"==typeof b?p(d,"get"):(g(b,function(a,b){d[b].set(a)}),c)},a.fn.inputOnChange=function(b){var c=a(this),d=A({$:c});return g(d,function(a){a.subscribe("change",function(a){b.call(a.domElement,a.e)})}),c},a.fn.inputDisable=function(){var b=a(this);return p(A({$:b}),"disable"),b},a.fn.inputEnable=function(){var b=a(this);return p(A({$:b}),"enable"),b},a.fn.inputClear=function(){var b=a(this);return p(A({$:b}),"clear"),b}}(jQuery),a.fn.repeaterVal=function(){var b=function(a){var b=[];return g(a,function(a,c){var d=[];"undefined"!==c&&(d.push(c.match(/^[^\[]*/)[0]),d=d.concat(m(c.match(/\[[^\]]*\]/g),function(a){return a.replace(/[\[\]]/g,"")})),b.push({val:a,key:d}))}),b},c=function(a){if(1===a.length&&(0===a[0].key.length||1===a[0].key.length&&!a[0].key[0]))return a[0].val;g(a,function(a){a.head=a.key.shift()});var b,d=function(){var b={};return g(a,function(a){b[a.head]||(b[a.head]=[]),b[a.head].push(a)}),b}();return/^[0-9]+$/.test(a[0].head)?(b=[],g(d,function(a){b.push(c(a))})):(b={},g(d,function(a,d){b[d]=c(a)})),b};return c(b(a(this).inputVal()))},a.fn.repeater=function(c){c=c||{};var d;return a(this).each(function(){var e=a(this),f=c.show||function(){a(this).show()},i=c.hide||function(a){a()},k=e.find("[data-repeater-list]").first(),l=function(b,c){return b.filter(function(){return!c||0===a(this).closest(n(c,"selector").join(",")).length})},p=function(){return l(k.find("[data-repeater-item]"),c.repeaters)},q=k.find("[data-repeater-item]").first().clone().hide(),r=l(l(a(this).find("[data-repeater-item]"),c.repeaters).first().find("[data-repeater-delete]"),c.repeaters);c.isFirstItemUndeletable&&r&&r.remove();var s=function(){var a=k.data("repeater-list");return c.$parent?c.$parent.data("item-name")+"["+a+"]":a},t=function(b){c.repeaters&&b.each(function(){var b=a(this);g(c.repeaters,function(a){b.find(a.selector).repeater(j(a,{$parent:b}))})})},u=function(a,b,c){a&&g(a,function(a){c.call(b.find(a.selector)[0],a)})},v=function(b,c,d){b.each(function(b){var e=a(this);e.data("item-name",c+"["+b+"]"),l(e.find("[name]"),d).each(function(){var f=a(this),g=f.attr("name").match(/\[[^\]]+\]/g),i=g?h(g).replace(/\[|\]/g,""):f.attr("name"),j=c+"["+b+"]["+i+"]"+(f.is(":checkbox")||f.attr("multiple")?"[]":"");f.attr("name",j),u(d,e,function(d){var e=a(this);v(l(e.find("[data-repeater-item]"),d.repeaters||[]),c+"["+b+"]["+e.find("[data-repeater-list]").first().data("repeater-list")+"]",d.repeaters)})})}),k.find("input[name][checked]").removeAttr("checked").prop("checked",!0)};v(p(),s(),c.repeaters),t(p()),c.initEmpty&&p().remove(),c.ready&&c.ready(function(){v(p(),s(),c.repeaters)});var w=function(){var d=function(e,f,h){if(f||c.defaultValues){var i={};l(e.find("[name]"),h).each(function(){var b=a(this).attr("name").match(/\[([^\]]*)(\]|\]\[\])$/)[1];i[b]=a(this).attr("name")}),e.inputVal(m(o(f||c.defaultValues,function(a,b){return i[b]}),b,function(a){return i[a]}))}u(h,e,function(b){var c=a(this);l(c.find("[data-repeater-item]"),b.repeaters).each(function(){var e=c.find("[data-repeater-list]").data("repeater-list");if(f&&f[e]){var h=a(this).clone();c.find("[data-repeater-item]").remove(),g(f[e],function(a){var e=h.clone();d(e,a,b.repeaters||[]),c.find("[data-repeater-list]").append(e)})}else d(a(this),b.defaultValues,b.repeaters||[])})})};return function(b,e){k.append(b),v(p(),s(),c.repeaters),b.find("[name]").each(function(){a(this).inputClear()}),d(b,e||c.defaultValues,c.repeaters)}}(),x=function(a){var b=q.clone();w(b,a),c.repeaters&&t(b),f.call(b.get(0))};d=function(a){p().remove(),g(a,x)},l(e.find("[data-repeater-create]"),c.repeaters).click(function(){x()}),k.on("click","[data-repeater-delete]",function(){var b=a(this).closest("[data-repeater-item]").get(0);i.call(b,function(){a(b).remove(),v(p(),s(),c.repeaters)})})}),this.setList=d,this}}(jQuery);
// ==================================================
// fancyBox v3.4.2
//
// Licensed GPLv3 for open source use
// or fancyBox Commercial License for commercial use
//
// http://fancyapps.com/fancybox/
// Copyright 2018 fancyApps
//
// ==================================================
!function(t,e,n,o){"use strict";function a(t,e){var o,a,i,s=[],r=0;t&&t.isDefaultPrevented()||(t.preventDefault(),e=e||{},t&&t.data&&(e=p(t.data.options,e)),o=e.$target||n(t.currentTarget).trigger("blur"),i=n.fancybox.getInstance(),i&&i.$trigger&&i.$trigger.is(o)||(e.selector?s=n(e.selector):(a=o.attr("data-fancybox")||"",a?(s=t.data?t.data.items:[],s=s.length?s.filter('[data-fancybox="'+a+'"]'):n('[data-fancybox="'+a+'"]')):s=[o]),r=n(s).index(o),r<0&&(r=0),i=n.fancybox.open(s,e,r),i.$trigger=o))}if(t.console=t.console||{info:function(t){}},n){if(n.fn.fancybox)return void console.info("fancyBox already initialized");var i={closeExisting:!1,loop:!1,gutter:50,keyboard:!0,arrows:!0,infobar:!0,smallBtn:"auto",toolbar:"auto",buttons:["zoom","slideShow","thumbs","close"],idleTime:3,protect:!1,modal:!1,image:{preload:!1},ajax:{settings:{data:{fancybox:!0}}},iframe:{tpl:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen allow="fullscreen autoplay" src=""></iframe>',preload:!0,css:{},attr:{scrolling:"auto"}},video:{tpl:'<video class="fancybox-video" controls controlsList="nodownload"><source src="{{src}}" type="{{format}}" />Your browser doesn\'t support HTML5 video</video>',format:"",autoStart:!0},defaultType:"image",animationEffect:"zoom",animationDuration:366,zoomOpacity:"auto",transitionEffect:"fade",transitionDuration:366,slideClass:"",baseClass:"",baseTpl:'<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"></div></div></div>',spinnerTpl:'<div class="fancybox-loading"></div>',errorTpl:'<div class="fancybox-error"><p>{{ERROR}}</p></div>',btnTpl:{download:'<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',zoom:'<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',close:'<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',arrowLeft:'<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',arrowRight:'<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',smallBtn:'<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>'},parentEl:"body",hideScrollbar:!0,autoFocus:!0,backFocus:!0,trapFocus:!0,fullScreen:{autoStart:!1},touch:{vertical:!0,momentum:!0},hash:null,media:{},slideShow:{autoStart:!1,speed:3e3},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"},wheel:"auto",onInit:n.noop,beforeLoad:n.noop,afterLoad:n.noop,beforeShow:n.noop,afterShow:n.noop,beforeClose:n.noop,afterClose:n.noop,onActivate:n.noop,onDeactivate:n.noop,clickContent:function(t,e){return"image"===t.type&&"zoom"},clickSlide:"close",clickOutside:"close",dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1,mobile:{idleTime:!1,clickContent:function(t,e){return"image"===t.type&&"toggleControls"},clickSlide:function(t,e){return"image"===t.type?"toggleControls":"close"},dblclickContent:function(t,e){return"image"===t.type&&"zoom"},dblclickSlide:function(t,e){return"image"===t.type&&"zoom"}},lang:"en",i18n:{en:{CLOSE:"Close",NEXT:"Next",PREV:"Previous",ERROR:"The requested content cannot be loaded. <br/> Please try again later.",PLAY_START:"Start slideshow",PLAY_STOP:"Pause slideshow",FULL_SCREEN:"Full screen",THUMBS:"Thumbnails",DOWNLOAD:"Download",SHARE:"Share",ZOOM:"Zoom"},de:{CLOSE:"Schliessen",NEXT:"Weiter",PREV:"Zurück",ERROR:"Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es später nochmal.",PLAY_START:"Diaschau starten",PLAY_STOP:"Diaschau beenden",FULL_SCREEN:"Vollbild",THUMBS:"Vorschaubilder",DOWNLOAD:"Herunterladen",SHARE:"Teilen",ZOOM:"Maßstab"}}},s=n(t),r=n(e),c=0,l=function(t){return t&&t.hasOwnProperty&&t instanceof n},d=function(){return t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.oRequestAnimationFrame||function(e){return t.setTimeout(e,1e3/60)}}(),u=function(){var t,n=e.createElement("fakeelement"),a={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in a)if(n.style[t]!==o)return a[t];return"transitionend"}(),f=function(t){return t&&t.length&&t[0].offsetHeight},p=function(t,e){var o=n.extend(!0,{},t,e);return n.each(e,function(t,e){n.isArray(e)&&(o[t]=e)}),o},h=function(o){for(var a,i=o[0],s=i.getBoundingClientRect(),r=[],c=n(t).height(),l=n(e).scrollTop(),d=s.top+l,u=l-d,f=d+s.height-(l+c);null!==i.parentElement;)"hidden"!==n(i.parentElement).css("overflow")&&"auto"!==n(i.parentElement).css("overflow")||r.push(i.parentElement.getBoundingClientRect()),i=i.parentElement;return a=r.every(function(t){var e=Math.min(s.right,t.right)-Math.max(s.left,t.left),n=Math.min(s.bottom,t.bottom)-Math.max(s.top,t.top);return e>0&&n>0}),!a||l>d+s.height||d>l+c?0:u>0?100-100*u/s.height:f>0?100-100*f/s.height:100},g=function(t,e,o){var a=this;a.opts=p({index:o},n.fancybox.defaults),n.isPlainObject(e)&&(a.opts=p(a.opts,e)),n.fancybox.isMobile&&(a.opts=p(a.opts,a.opts.mobile)),a.id=a.opts.id||++c,a.currIndex=parseInt(a.opts.index,10)||0,a.prevIndex=null,a.prevPos=null,a.currPos=0,a.firstRun=!0,a.group=[],a.slides={},a.addContent(t),a.group.length&&a.init()};n.extend(g.prototype,{init:function(){var o,a,i=this,s=i.group[i.currIndex],r=s.opts;r.closeExisting&&n.fancybox.close(!0),n("body").addClass("fancybox-active"),!n.fancybox.getInstance()&&r.hideScrollbar!==!1&&!n.fancybox.isMobile&&e.body.scrollHeight>t.innerHeight&&(n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:'+(t.innerWidth-e.documentElement.clientWidth)+"px;}</style>"),n("body").addClass("compensate-for-scrollbar")),a="",n.each(r.buttons,function(t,e){a+=r.btnTpl[e]||""}),o=n(i.translate(i,r.baseTpl.replace("{{buttons}}",a).replace("{{arrows}}",r.btnTpl.arrowLeft+r.btnTpl.arrowRight))).attr("id","fancybox-container-"+i.id).addClass(r.baseClass).data("FancyBox",i).appendTo(r.parentEl),i.$refs={container:o},["bg","inner","infobar","toolbar","stage","caption","navigation"].forEach(function(t){i.$refs[t]=o.find(".fancybox-"+t)}),i.trigger("onInit"),i.activate(),i.jumpTo(i.currIndex)},translate:function(t,e){var n=t.opts.i18n[t.opts.lang];return e.replace(/\{\{(\w+)\}\}/g,function(t,e){var a=n[e];return a===o?t:a})},addContent:function(t){var e,a=this,i=n.makeArray(t);n.each(i,function(t,e){var i,s,r,c,l,d={},u={};n.isPlainObject(e)?(d=e,u=e.opts||e):"object"===n.type(e)&&n(e).length?(i=n(e),u=i.data()||{},u=n.extend(!0,{},u,u.options),u.$orig=i,d.src=a.opts.src||u.src||i.attr("href"),d.type||d.src||(d.type="inline",d.src=e)):d={type:"html",src:e+""},d.opts=n.extend(!0,{},a.opts,u),n.isArray(u.buttons)&&(d.opts.buttons=u.buttons),n.fancybox.isMobile&&d.opts.mobile&&(d.opts=p(d.opts,d.opts.mobile)),s=d.type||d.opts.type,c=d.src||"",!s&&c&&((r=c.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i))?(s="video",d.opts.video.format||(d.opts.video.format="video/"+("ogv"===r[1]?"ogg":r[1]))):c.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)?s="image":c.match(/\.(pdf)((\?|#).*)?$/i)?s="iframe":"#"===c.charAt(0)&&(s="inline")),s?d.type=s:a.trigger("objectNeedsType",d),d.contentType||(d.contentType=n.inArray(d.type,["html","inline","ajax"])>-1?"html":d.type),d.index=a.group.length,"auto"==d.opts.smallBtn&&(d.opts.smallBtn=n.inArray(d.type,["html","inline","ajax"])>-1),"auto"===d.opts.toolbar&&(d.opts.toolbar=!d.opts.smallBtn),d.opts.$trigger&&d.index===a.opts.index&&(d.opts.$thumb=d.opts.$trigger.find("img:first"),d.opts.$thumb.length&&(d.opts.$orig=d.opts.$trigger)),d.opts.$thumb&&d.opts.$thumb.length||!d.opts.$orig||(d.opts.$thumb=d.opts.$orig.find("img:first")),"function"===n.type(d.opts.caption)&&(d.opts.caption=d.opts.caption.apply(e,[a,d])),"function"===n.type(a.opts.caption)&&(d.opts.caption=a.opts.caption.apply(e,[a,d])),d.opts.caption instanceof n||(d.opts.caption=d.opts.caption===o?"":d.opts.caption+""),"ajax"===d.type&&(l=c.split(/\s+/,2),l.length>1&&(d.src=l.shift(),d.opts.filter=l.shift())),d.opts.modal&&(d.opts=n.extend(!0,d.opts,{trapFocus:!0,infobar:0,toolbar:0,smallBtn:0,keyboard:0,slideShow:0,fullScreen:0,thumbs:0,touch:0,clickContent:!1,clickSlide:!1,clickOutside:!1,dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1})),a.group.push(d)}),Object.keys(a.slides).length&&(a.updateControls(),e=a.Thumbs,e&&e.isActive&&(e.create(),e.focus()))},addEvents:function(){var e=this;e.removeEvents(),e.$refs.container.on("click.fb-close","[data-fancybox-close]",function(t){t.stopPropagation(),t.preventDefault(),e.close(t)}).on("touchstart.fb-prev click.fb-prev","[data-fancybox-prev]",function(t){t.stopPropagation(),t.preventDefault(),e.previous()}).on("touchstart.fb-next click.fb-next","[data-fancybox-next]",function(t){t.stopPropagation(),t.preventDefault(),e.next()}).on("click.fb","[data-fancybox-zoom]",function(t){e[e.isScaledDown()?"scaleToActual":"scaleToFit"]()}),s.on("orientationchange.fb resize.fb",function(t){t&&t.originalEvent&&"resize"===t.originalEvent.type?d(function(){e.update()}):(e.current&&"iframe"===e.current.type&&e.$refs.stage.hide(),setTimeout(function(){e.$refs.stage.show(),e.update()},n.fancybox.isMobile?600:250))}),r.on("keydown.fb",function(t){var o=n.fancybox?n.fancybox.getInstance():null,a=o.current,i=t.keyCode||t.which;if(9==i)return void(a.opts.trapFocus&&e.focus(t));if(!(!a.opts.keyboard||t.ctrlKey||t.altKey||t.shiftKey||n(t.target).is("input")||n(t.target).is("textarea")))return 8===i||27===i?(t.preventDefault(),void e.close(t)):37===i||38===i?(t.preventDefault(),void e.previous()):39===i||40===i?(t.preventDefault(),void e.next()):void e.trigger("afterKeydown",t,i)}),e.group[e.currIndex].opts.idleTime&&(e.idleSecondsCounter=0,r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle",function(t){e.idleSecondsCounter=0,e.isIdle&&e.showControls(),e.isIdle=!1}),e.idleInterval=t.setInterval(function(){e.idleSecondsCounter++,e.idleSecondsCounter>=e.group[e.currIndex].opts.idleTime&&!e.isDragging&&(e.isIdle=!0,e.idleSecondsCounter=0,e.hideControls())},1e3))},removeEvents:function(){var e=this;s.off("orientationchange.fb resize.fb"),r.off("keydown.fb .fb-idle"),this.$refs.container.off(".fb-close .fb-prev .fb-next"),e.idleInterval&&(t.clearInterval(e.idleInterval),e.idleInterval=null)},previous:function(t){return this.jumpTo(this.currPos-1,t)},next:function(t){return this.jumpTo(this.currPos+1,t)},jumpTo:function(t,e){var a,i,s,r,c,l,u,p,h=this,g=h.group.length;if(!(h.isDragging||h.isClosing||h.isAnimating&&h.firstRun)){if(t=parseInt(t,10),s=h.current?h.current.opts.loop:h.opts.loop,!s&&(t<0||t>=g))return!1;if(a=h.firstRun=!Object.keys(h.slides).length,c=h.current,h.prevIndex=h.currIndex,h.prevPos=h.currPos,r=h.createSlide(t),g>1&&((s||r.index<g-1)&&h.createSlide(t+1),(s||r.index>0)&&h.createSlide(t-1)),h.current=r,h.currIndex=r.index,h.currPos=r.pos,h.trigger("beforeShow",a),h.updateControls(),r.forcedDuration=o,n.isNumeric(e)?r.forcedDuration=e:e=r.opts[a?"animationDuration":"transitionDuration"],e=parseInt(e,10),i=h.isMoved(c),r.$slide.addClass("fancybox-slide--current"),a)return r.opts.animationEffect&&e&&h.$refs.container.css("transition-duration",e+"ms"),h.$refs.container.addClass("fancybox-is-open").trigger("focus"),h.loadSlide(r),void h.preload("image");l=n.fancybox.getTranslate(c.$slide),u=n.fancybox.getTranslate(h.$refs.stage),n.each(h.slides,function(t,e){n.fancybox.stop(e.$slide,!0)}),c.pos!==r.pos&&(c.isComplete=!1,c.$slide.removeClass("fancybox-slide--complete fancybox-slide--current")),i?(p=l.left-(c.pos*l.width+c.pos*c.opts.gutter),n.each(h.slides,function(t,o){var a=o.pos*l.width+o.pos*o.opts.gutter;n.fancybox.setTranslate(o.$slide,{top:0,left:a+p-u.left}),o.pos!==r.pos&&o.$slide.addClass("fancybox-slide--"+(o.pos>r.pos?"next":"previous")),f(o.$slide),d(function(){n.fancybox.animate(o.$slide,{top:0,left:(o.pos-r.pos)*l.width+(o.pos-r.pos)*o.opts.gutter},e,function(){o.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"),o.pos===h.currPos&&h.complete()})})})):(r.$slide.parent().children().removeAttr("style"),e&&r.opts.transitionEffect&&n.fancybox.animate(c.$slide,"fancybox-animated fancybox-slide--"+(c.pos>r.pos?"next":"previous")+" fancybox-fx-"+r.opts.transitionEffect,e,null,!1)),r.isLoaded?h.revealContent(r):h.loadSlide(r),h.preload("image")}},createSlide:function(t){var e,o,a=this;return o=t%a.group.length,o=o<0?a.group.length+o:o,!a.slides[t]&&a.group[o]&&(e=n('<div class="fancybox-slide"></div>').appendTo(a.$refs.stage),a.slides[t]=n.extend(!0,{},a.group[o],{pos:t,$slide:e,isLoaded:!1}),a.updateSlide(a.slides[t])),a.slides[t]},scaleToActual:function(t,e,a){var i,s,r,c,l,d=this,u=d.current,f=u.$content,p=n.fancybox.getTranslate(u.$slide).width,h=n.fancybox.getTranslate(u.$slide).height,g=u.width,b=u.height;!d.isAnimating&&f&&"image"==u.type&&u.isLoaded&&!u.hasError&&(n.fancybox.stop(f),d.isAnimating=!0,t=t===o?.5*p:t,e=e===o?.5*h:e,i=n.fancybox.getTranslate(f),i.top-=n.fancybox.getTranslate(u.$slide).top,i.left-=n.fancybox.getTranslate(u.$slide).left,c=g/i.width,l=b/i.height,s=.5*p-.5*g,r=.5*h-.5*b,g>p&&(s=i.left*c-(t*c-t),s>0&&(s=0),s<p-g&&(s=p-g)),b>h&&(r=i.top*l-(e*l-e),r>0&&(r=0),r<h-b&&(r=h-b)),d.updateCursor(g,b),n.fancybox.animate(f,{top:r,left:s,scaleX:c,scaleY:l},a||330,function(){d.isAnimating=!1}),d.SlideShow&&d.SlideShow.isActive&&d.SlideShow.stop())},scaleToFit:function(t){var e,o=this,a=o.current,i=a.$content;!o.isAnimating&&i&&"image"==a.type&&a.isLoaded&&!a.hasError&&(n.fancybox.stop(i),o.isAnimating=!0,e=o.getFitPos(a),o.updateCursor(e.width,e.height),n.fancybox.animate(i,{top:e.top,left:e.left,scaleX:e.width/i.width(),scaleY:e.height/i.height()},t||330,function(){o.isAnimating=!1}))},getFitPos:function(t){var e,o,a,i,s=this,r=t.$content,c=t.$slide,l=t.width||t.opts.width,d=t.height||t.opts.height,u={};return!!(t.isLoaded&&r&&r.length)&&(e=n.fancybox.getTranslate(s.$refs.stage).width,o=n.fancybox.getTranslate(s.$refs.stage).height,e-=parseFloat(c.css("paddingLeft"))+parseFloat(c.css("paddingRight"))+parseFloat(r.css("marginLeft"))+parseFloat(r.css("marginRight")),o-=parseFloat(c.css("paddingTop"))+parseFloat(c.css("paddingBottom"))+parseFloat(r.css("marginTop"))+parseFloat(r.css("marginBottom")),l&&d||(l=e,d=o),a=Math.min(1,e/l,o/d),l=a*l,d=a*d,l>e-.5&&(l=e),d>o-.5&&(d=o),"image"===t.type?(u.top=Math.floor(.5*(o-d))+parseFloat(c.css("paddingTop")),u.left=Math.floor(.5*(e-l))+parseFloat(c.css("paddingLeft"))):"video"===t.contentType&&(i=t.opts.width&&t.opts.height?l/d:t.opts.ratio||16/9,d>l/i?d=l/i:l>d*i&&(l=d*i)),u.width=l,u.height=d,u)},update:function(){var t=this;n.each(t.slides,function(e,n){t.updateSlide(n)})},updateSlide:function(t){var e=this,o=t&&t.$content,a=t.width||t.opts.width,i=t.height||t.opts.height,s=t.$slide;o&&(a||i||"video"===t.contentType)&&!t.hasError&&(n.fancybox.stop(o),n.fancybox.setTranslate(o,e.getFitPos(t)),t.pos===e.currPos&&(e.isAnimating=!1,e.updateCursor())),s.length&&(s.trigger("refresh"),e.$refs.toolbar.toggleClass("compensate-for-scrollbar",s.get(0).scrollHeight>s.get(0).clientHeight)),e.trigger("onUpdate",t)},centerSlide:function(t,e){var a,i,s=this;s.current&&(a=Math.round(t.$slide.width()),i=t.pos-s.current.pos,n.fancybox.animate(t.$slide,{top:0,left:i*a+i*t.opts.gutter,opacity:1},e===o?0:e,function(){t.$slide.siblings().removeAttr("style").removeClass("fancybox-slide--previous fancybox-slide--next"),t.isComplete||s.complete()},!1))},isMoved:function(t){var e,o,a=t||this.current;return!!a&&(o=n.fancybox.getTranslate(this.$refs.stage),e=n.fancybox.getTranslate(a.$slide),(Math.abs(e.top-o.top)>0||Math.abs(e.left-o.left)>0)&&!a.$slide.hasClass("fancybox-animated"))},updateCursor:function(t,e){var o,a=this,i=a.current,s=a.$refs.container;i&&!a.isClosing&&a.Guestures&&(s.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),o=a.isZoomable(),s.toggleClass("fancybox-is-zoomable",o),n("[data-fancybox-zoom]").prop("disabled",!o),a.canPan(t,e)?s.addClass("fancybox-can-pan"):o&&("zoom"===i.opts.clickContent||n.isFunction(i.opts.clickContent)&&"zoom"==i.opts.clickContent(i))?s.addClass("fancybox-can-zoomIn"):i.opts.touch&&(i.opts.touch.vertical||a.group.length>1)&&"video"!==i.contentType&&s.addClass("fancybox-can-swipe"))},isZoomable:function(){var t,e=this,n=e.current;if(n&&!e.isClosing&&"image"===n.type&&!n.hasError){if(!n.isLoaded)return!0;if(t=e.getFitPos(n),n.width>t.width||n.height>t.height)return!0}return!1},isScaledDown:function(t,e){var a=this,i=!1,s=a.current,r=s.$content;return t!==o&&e!==o?i=t<s.width&&e<s.height:r&&(i=n.fancybox.getTranslate(r),i=i.width<s.width&&i.height<s.height),i},canPan:function(t,e){var a,i,s=this,r=!1,c=s.current;return"image"===c.type&&(a=c.$content)&&!c.hasError&&(r=s.getFitPos(c),i=t!==o&&e!==o?{width:t,height:e}:n.fancybox.getTranslate(a),r=Math.abs(i.width-r.width)>1.5||Math.abs(i.height-r.height)>1.5),r},loadSlide:function(t){var e,o,a,i=this;if(!t.isLoading&&!t.isLoaded){if(t.isLoading=!0,i.trigger("beforeLoad",t)===!1)return t.isLoading=!1,!1;switch(e=t.type,o=t.$slide,o.off("refresh").trigger("onReset").addClass(t.opts.slideClass),e){case"image":i.setImage(t);break;case"iframe":i.setIframe(t);break;case"html":i.setContent(t,t.src||t.content);break;case"video":i.setContent(t,t.opts.video.tpl.replace("{{src}}",t.src).replace("{{format}}",t.opts.videoFormat||t.opts.video.format));break;case"inline":n(t.src).length?i.setContent(t,n(t.src)):i.setError(t);break;case"ajax":i.showLoading(t),a=n.ajax(n.extend({},t.opts.ajax.settings,{url:t.src,success:function(e,n){"success"===n&&i.setContent(t,e)},error:function(e,n){e&&"abort"!==n&&i.setError(t)}})),o.one("onReset",function(){a.abort()});break;default:i.setError(t)}return!0}},setImage:function(e){var o,a,i,s,r,c=this,l=e.opts.srcset||e.opts.image.srcset;if(d(function(){d(function(){var t=e.$image;c.isClosing||!e.isLoading||t&&t.length&&t[0].complete||e.hasError||c.showLoading(e)})}),l){s=t.devicePixelRatio||1,r=t.innerWidth*s,i=l.split(",").map(function(t){var e={};return t.trim().split(/\s+/).forEach(function(t,n){var o=parseInt(t.substring(0,t.length-1),10);return 0===n?e.url=t:void(o&&(e.value=o,e.postfix=t[t.length-1]))}),e}),i.sort(function(t,e){return t.value-e.value});for(var u=0;u<i.length;u++){var f=i[u];if("w"===f.postfix&&f.value>=r||"x"===f.postfix&&f.value>=s){a=f;break}}!a&&i.length&&(a=i[i.length-1]),a&&(e.src=a.url,e.width&&e.height&&"w"==a.postfix&&(e.height=e.width/e.height*a.value,e.width=a.value),e.opts.srcset=l)}e.$content=n('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide.addClass("fancybox-slide--image")),o=e.opts.thumb||!(!e.opts.$thumb||!e.opts.$thumb.length)&&e.opts.$thumb.attr("src"),e.opts.preload!==!1&&e.opts.width&&e.opts.height&&o&&(e.width=e.opts.width,e.height=e.opts.height,e.$ghost=n("<img />").one("error",function(){n(this).remove(),e.$ghost=null}).one("load",function(){c.afterLoad(e)}).addClass("fancybox-image").appendTo(e.$content).attr("src",o)),c.setBigImage(e)},setBigImage:function(t){var e=this,o=n("<img />");t.$image=o.one("error",function(){e.setError(t)}).one("load",function(){var n;t.$ghost||(e.resolveImageSlideSize(t,this.naturalWidth,this.naturalHeight),e.afterLoad(t)),e.isClosing||(t.opts.srcset&&(n=t.opts.sizes,n&&"auto"!==n||(n=(t.width/t.height>1&&s.width()/s.height()>1?"100":Math.round(t.width/t.height*100))+"vw"),o.attr("sizes",n).attr("srcset",t.opts.srcset)),t.$ghost&&setTimeout(function(){t.$ghost&&!e.isClosing&&t.$ghost.hide()},Math.min(300,Math.max(1e3,t.height/1600))),e.hideLoading(t))}).addClass("fancybox-image").attr("src",t.src).appendTo(t.$content),(o[0].complete||"complete"==o[0].readyState)&&o[0].naturalWidth&&o[0].naturalHeight?o.trigger("load"):o[0].error&&o.trigger("error")},resolveImageSlideSize:function(t,e,n){var o=parseInt(t.opts.width,10),a=parseInt(t.opts.height,10);t.width=e,t.height=n,o>0&&(t.width=o,t.height=Math.floor(o*n/e)),a>0&&(t.width=Math.floor(a*e/n),t.height=a)},setIframe:function(t){var e,a=this,i=t.opts.iframe,s=t.$slide;t.$content=n('<div class="fancybox-content'+(i.preload?" fancybox-is-hidden":"")+'"></div>').css(i.css).appendTo(s),s.addClass("fancybox-slide--"+t.contentType),t.$iframe=e=n(i.tpl.replace(/\{rnd\}/g,(new Date).getTime())).attr(i.attr).appendTo(t.$content),i.preload?(a.showLoading(t),e.on("load.fb error.fb",function(e){this.isReady=1,t.$slide.trigger("refresh"),a.afterLoad(t)}),s.on("refresh.fb",function(){var n,a,r=t.$content,c=i.css.width,l=i.css.height;if(1===e[0].isReady){try{n=e.contents(),a=n.find("body")}catch(t){}a&&a.length&&a.children().length&&(s.css("overflow","visible"),r.css({width:"100%","max-width":"100%",height:"9999px"}),c===o&&(c=Math.ceil(Math.max(a[0].clientWidth,a.outerWidth(!0)))),r.css("width",c?c:"").css("max-width",""),l===o&&(l=Math.ceil(Math.max(a[0].clientHeight,a.outerHeight(!0)))),r.css("height",l?l:""),s.css("overflow","auto")),r.removeClass("fancybox-is-hidden")}})):this.afterLoad(t),e.attr("src",t.src),s.one("onReset",function(){try{n(this).find("iframe").hide().unbind().attr("src","//about:blank")}catch(t){}n(this).off("refresh.fb").empty(),t.isLoaded=!1,t.isRevealed=!1})},setContent:function(t,e){var o=this;o.isClosing||(o.hideLoading(t),t.$content&&n.fancybox.stop(t.$content),t.$slide.empty(),l(e)&&e.parent().length?(e.hasClass("fancybox-content")&&e.parent(".fancybox-slide--html").trigger("onReset"),t.$placeholder=n("<div>").hide().insertAfter(e),e.css("display","inline-block")):t.hasError||("string"===n.type(e)&&(e=n("<div>").append(n.trim(e)).contents()),t.opts.filter&&(e=n("<div>").html(e).find(t.opts.filter))),t.$slide.one("onReset",function(){n(this).find("video,audio").trigger("pause"),t.$placeholder&&(t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(),t.$placeholder=null),t.$smallBtn&&(t.$smallBtn.remove(),t.$smallBtn=null),t.hasError||(n(this).empty(),t.isLoaded=!1,t.isRevealed=!1)}),n(e).appendTo(t.$slide),n(e).is("video,audio")&&(n(e).addClass("fancybox-video"),n(e).wrap("<div></div>"),t.contentType="video",t.opts.width=t.opts.width||n(e).attr("width"),t.opts.height=t.opts.height||n(e).attr("height")),t.$content=t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(),t.$content.siblings().hide(),t.$content.length||(t.$content=t.$slide.wrapInner("<div></div>").children().first()),t.$content.addClass("fancybox-content"),t.$slide.addClass("fancybox-slide--"+t.contentType),this.afterLoad(t))},setError:function(t){t.hasError=!0,t.$slide.trigger("onReset").removeClass("fancybox-slide--"+t.contentType).addClass("fancybox-slide--error"),t.contentType="html",this.setContent(t,this.translate(t,t.opts.errorTpl)),t.pos===this.currPos&&(this.isAnimating=!1)},showLoading:function(t){var e=this;t=t||e.current,t&&!t.$spinner&&(t.$spinner=n(e.translate(e,e.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn())},hideLoading:function(t){var e=this;t=t||e.current,t&&t.$spinner&&(t.$spinner.stop().remove(),delete t.$spinner)},afterLoad:function(t){var e=this;e.isClosing||(t.isLoading=!1,t.isLoaded=!0,e.trigger("afterLoad",t),e.hideLoading(t),t.pos===e.currPos&&e.updateCursor(),!t.opts.smallBtn||t.$smallBtn&&t.$smallBtn.length||(t.$smallBtn=n(e.translate(t,t.opts.btnTpl.smallBtn)).appendTo(t.$content)),t.opts.protect&&t.$content&&!t.hasError&&(t.$content.on("contextmenu.fb",function(t){return 2==t.button&&t.preventDefault(),!0}),"image"===t.type&&n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),e.revealContent(t))},revealContent:function(t){var e,a,i,s,r=this,c=t.$slide,l=!1,d=!1,u=r.isMoved(t),f=t.isRevealed;return t.isRevealed=!0,e=t.opts[r.firstRun?"animationEffect":"transitionEffect"],i=t.opts[r.firstRun?"animationDuration":"transitionDuration"],i=parseInt(t.forcedDuration===o?i:t.forcedDuration,10),t.pos===r.currPos&&(t.isComplete||(r.isAnimating=!0)),!u&&t.pos===r.currPos&&i||(e=!1),"zoom"===e&&(t.pos===r.currPos&&i&&"image"===t.type&&!t.hasError&&(d=r.getThumbPos(t))?l=r.getFitPos(t):e="fade"),"zoom"===e?(l.scaleX=l.width/d.width,l.scaleY=l.height/d.height,s=t.opts.zoomOpacity,"auto"==s&&(s=Math.abs(t.width/t.height-d.width/d.height)>.1),s&&(d.opacity=.1,l.opacity=1),n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"),d),void n.fancybox.animate(t.$content,l,i,function(){r.isAnimating=!1,r.complete()})):(r.updateSlide(t),e?(n.fancybox.stop(c),a="fancybox-animated fancybox-slide--"+(t.pos>=r.prevPos?"next":"previous")+" fancybox-fx-"+e,c.removeClass("fancybox-slide--current").addClass(a),t.$content.removeClass("fancybox-is-hidden"),c.hide().show(0),void n.fancybox.animate(c,"fancybox-slide--current",i,function(){c.removeClass(a).removeAttr("style"),t.pos===r.currPos&&r.complete()},!0)):(t.$content.removeClass("fancybox-is-hidden"),void(f||!u||"image"!==t.type||t.hasError||t.$content.hide().fadeIn("fast"))))},getThumbPos:function(t){var n,o=this,a=!1,i=t.opts.$thumb,s=i&&i.length&&i[0].ownerDocument===e?i.offset():0;return s&&h(i)>=10&&(n=o.$refs.stage.offset(),a={top:s.top-n.top+parseFloat(i.css("border-top-width")||0),left:s.left-n.left+parseFloat(i.css("border-left-width")||0),width:i.width(),height:i.height(),scaleX:1,scaleY:1}),a},complete:function(){var t,e=this,o=e.current,a={};!e.isMoved()&&o.isLoaded&&(o.isComplete||(o.isComplete=!0,o.$slide.siblings().trigger("onReset"),e.preload("inline"),f(o.$slide),o.$slide.addClass("fancybox-slide--complete"),n.each(e.slides,function(t,o){o.pos>=e.currPos-1&&o.pos<=e.currPos+1?a[o.pos]=o:o&&(n.fancybox.stop(o.$slide),o.$slide.off().remove())}),e.slides=a),e.isAnimating=!1,e.updateCursor(),e.trigger("afterShow"),o.opts.video.autoStart&&o.$slide.find("video,audio").filter(":visible:first").trigger("play").on("ended",n.proxy(e.next,e)),o.opts.autoFocus&&"html"===o.contentType&&(t=o.$content.find("input[autofocus]:enabled:visible:first"),t.length?t.trigger("focus"):e.focus(null,!0)),o.$slide.scrollTop(0).scrollLeft(0))},preload:function(t){var e=this,n=e.slides[e.currPos+1],o=e.slides[e.currPos-1];o&&o.type===t&&e.loadSlide(o),n&&n.type===t&&e.loadSlide(n)},focus:function(t,o){var a,i,s=this,r=["a[href]","area[href]",'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',"select:not([disabled]):not([aria-hidden])","textarea:not([disabled]):not([aria-hidden])","button:not([disabled]):not([aria-hidden])","iframe","object","embed","[contenteditable]",'[tabindex]:not([tabindex^="-"])'].join(",");s.isClosing||(a=!t&&s.current&&s.current.isComplete?s.current.$slide.find("*:visible"+(o?":not(.fancybox-close-small)":"")):s.$refs.container.find("*:visible"),a=a.filter(r).filter(function(){return"hidden"!==n(this).css("visibility")&&!n(this).hasClass("disabled")}),a.length?(i=a.index(e.activeElement),t&&t.shiftKey?(i<0||0==i)&&(t.preventDefault(),a.eq(a.length-1).trigger("focus")):(i<0||i==a.length-1)&&(t&&t.preventDefault(),a.eq(0).trigger("focus"))):s.$refs.container.trigger("focus"))},activate:function(){var t=this;n(".fancybox-container").each(function(){var e=n(this).data("FancyBox");e&&e.id!==t.id&&!e.isClosing&&(e.trigger("onDeactivate"),e.removeEvents(),e.isVisible=!1)}),t.isVisible=!0,(t.current||t.isIdle)&&(t.update(),t.updateControls()),t.trigger("onActivate"),t.addEvents()},close:function(t,e){var o,a,i,s,r,c,l,p=this,h=p.current,g=function(){p.cleanUp(t)};return!p.isClosing&&(p.isClosing=!0,p.trigger("beforeClose",t)===!1?(p.isClosing=!1,d(function(){p.update()}),!1):(p.removeEvents(),i=h.$content,o=h.opts.animationEffect,a=n.isNumeric(e)?e:o?h.opts.animationDuration:0,h.$slide.off(u).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),h.$slide.siblings().trigger("onReset").remove(),a&&p.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"),p.hideLoading(h),p.hideControls(),p.updateCursor(),"zoom"!==o||t!==!0&&i&&a&&"image"===h.type&&!h.hasError&&(l=p.getThumbPos(h))||(o="fade"),"zoom"===o?(n.fancybox.stop(i),s=n.fancybox.getTranslate(i),c={top:s.top,left:s.left,scaleX:s.width/l.width,scaleY:s.height/l.height,width:l.width,height:l.height},r=h.opts.zoomOpacity,"auto"==r&&(r=Math.abs(h.width/h.height-l.width/l.height)>.1),r&&(l.opacity=0),n.fancybox.setTranslate(i,c),f(i),n.fancybox.animate(i,l,a,g),!0):(o&&a?t===!0?setTimeout(g,a):n.fancybox.animate(h.$slide.removeClass("fancybox-slide--current"),"fancybox-animated fancybox-slide--previous fancybox-fx-"+o,a,g):g(),!0)))},cleanUp:function(e){var o,a,i,s=this,r=s.current.opts.$orig;s.current.$slide.trigger("onReset"),s.$refs.container.empty().remove(),s.trigger("afterClose",e),s.current.opts.backFocus&&(r&&r.length&&r.is(":visible")||(r=s.$trigger),r&&r.length&&(a=t.scrollX,i=t.scrollY,r.trigger("focus"),n("html, body").scrollTop(i).scrollLeft(a))),s.current=null,o=n.fancybox.getInstance(),o?o.activate():(n("body").removeClass("fancybox-active compensate-for-scrollbar"),n("#fancybox-style-noscroll").remove())},trigger:function(t,e){var o,a=Array.prototype.slice.call(arguments,1),i=this,s=e&&e.opts?e:i.current;return s?a.unshift(s):s=i,a.unshift(i),n.isFunction(s.opts[t])&&(o=s.opts[t].apply(s,a)),o===!1?o:void("afterClose"!==t&&i.$refs?i.$refs.container.trigger(t+".fb",a):r.trigger(t+".fb",a))},updateControls:function(){var t=this,o=t.current,a=o.index,i=o.opts.caption,s=t.$refs.container,r=t.$refs.caption;o.$slide.trigger("refresh"),t.$caption=i&&i.length?r.html(i):null,t.isHiddenControls||t.isIdle||t.showControls(),s.find("[data-fancybox-count]").html(t.group.length),s.find("[data-fancybox-index]").html(a+1),s.find("[data-fancybox-prev]").prop("disabled",!o.opts.loop&&a<=0),s.find("[data-fancybox-next]").prop("disabled",!o.opts.loop&&a>=t.group.length-1),"image"===o.type?s.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href",o.opts.image.src||o.src).show():o.opts.toolbar&&s.find("[data-fancybox-download],[data-fancybox-zoom]").hide(),n(e.activeElement).is(":hidden,[disabled]")&&t.$refs.container.trigger("focus")},hideControls:function(){this.isHiddenControls=!0,this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav")},showControls:function(){var t=this,e=t.current?t.current.opts:t.opts,n=t.$refs.container;t.isHiddenControls=!1,
t.idleSecondsCounter=0,n.toggleClass("fancybox-show-toolbar",!(!e.toolbar||!e.buttons)).toggleClass("fancybox-show-infobar",!!(e.infobar&&t.group.length>1)).toggleClass("fancybox-show-caption",!!t.$caption).toggleClass("fancybox-show-nav",!!(e.arrows&&t.group.length>1)).toggleClass("fancybox-is-modal",!!e.modal)},toggleControls:function(){this.isHiddenControls?this.showControls():this.hideControls()}}),n.fancybox={version:"3.4.2",defaults:i,getInstance:function(t){var e=n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),o=Array.prototype.slice.call(arguments,1);return e instanceof g&&("string"===n.type(t)?e[t].apply(e,o):"function"===n.type(t)&&t.apply(e,o),e)},open:function(t,e,n){return new g(t,e,n)},close:function(t){var e=this.getInstance();e&&(e.close(),t===!0&&this.close(t))},destroy:function(){this.close(!0),r.add("body").off("click.fb-start","**")},isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),use3d:function(){var n=e.createElement("div");return t.getComputedStyle&&t.getComputedStyle(n)&&t.getComputedStyle(n).getPropertyValue("transform")&&!(e.documentMode&&e.documentMode<11)}(),getTranslate:function(t){var e;return!(!t||!t.length)&&(e=t[0].getBoundingClientRect(),{top:e.top||0,left:e.left||0,width:e.width,height:e.height,opacity:parseFloat(t.css("opacity"))})},setTranslate:function(t,e){var n="",a={};if(t&&e)return e.left===o&&e.top===o||(n=(e.left===o?t.position().left:e.left)+"px, "+(e.top===o?t.position().top:e.top)+"px",n=this.use3d?"translate3d("+n+", 0px)":"translate("+n+")"),e.scaleX!==o&&e.scaleY!==o?n+=" scale("+e.scaleX+", "+e.scaleY+")":e.scaleX!==o&&(n+=" scaleX("+e.scaleX+")"),n.length&&(a.transform=n),e.opacity!==o&&(a.opacity=e.opacity),e.width!==o&&(a.width=e.width),e.height!==o&&(a.height=e.height),t.css(a)},animate:function(t,e,a,i,s){var r,c=this,l=!1;n.isFunction(a)&&(i=a,a=null),n.isPlainObject(e)||t.removeAttr("style"),c.stop(t),t.on(u,function(o){(!o||!o.originalEvent||t.is(o.originalEvent.target)&&"z-index"!=o.originalEvent.propertyName)&&(c.stop(t),l&&c.setTranslate(t,l),n.isNumeric(a)&&t.css("transition-duration",""),n.isPlainObject(e)?s===!1&&t.removeAttr("style"):s!==!0&&t.removeClass(e),n.isFunction(i)&&i(o))}),n.isNumeric(a)&&t.css("transition-duration",a+"ms"),n.isPlainObject(e)?(e.scaleX!==o&&e.scaleY!==o&&(r=n.fancybox.getTranslate(t),l=n.extend({},e,{width:r.width*e.scaleX,height:r.height*e.scaleY,scaleX:1,scaleY:1}),delete e.width,delete e.height,t.parent().hasClass("fancybox-slide--image")&&t.parent().addClass("fancybox-is-scaling")),n.fancybox.setTranslate(t,e)):t.addClass(e),t.data("timer",setTimeout(function(){t.trigger("transitionend")},a+16))},stop:function(t,e){t&&t.length&&(clearTimeout(t.data("timer")),e&&t.trigger(u),t.off(u).css("transition-duration",""),t.parent().removeClass("fancybox-is-scaling"))}},n.fn.fancybox=function(t){var e;return t=t||{},e=t.selector||!1,e?n("body").off("click.fb-start",e).on("click.fb-start",e,{options:t},a):this.off("click.fb-start").on("click.fb-start",{items:this,options:t},a),this},r.on("click.fb-start","[data-fancybox]",a),r.on("click.fb-start","[data-fancybox-trigger]",function(t){n('[data-fancybox="'+n(this).attr("data-fancybox-trigger")+'"]').eq(n(this).attr("data-fancybox-index")||0).trigger("click.fb-start",{$trigger:n(this)})}),function(){var t=".fancybox-button",e="fancybox-focus",o=null;r.on("mousedown mouseup focus blur",t,function(a){switch(a.type){case"mousedown":o=n(this);break;case"mouseup":o=null;break;case"focusin":n(t).removeClass(e),n(this).is(o)||n(this).is("[disabled]")||n(this).addClass(e);break;case"focusout":n(t).removeClass(e)}})}()}}(window,document,jQuery),function(t){"use strict";var e={youtube:{matcher:/(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,params:{autoplay:1,autohide:1,fs:1,rel:0,hd:1,wmode:"transparent",enablejsapi:1,html5:1},paramPlace:8,type:"iframe",url:"//www.youtube-nocookie.com/embed/$4",thumb:"//img.youtube.com/vi/$4/hqdefault.jpg"},vimeo:{matcher:/^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,params:{autoplay:1,hd:1,show_title:1,show_byline:1,show_portrait:0,fullscreen:1},paramPlace:3,type:"iframe",url:"//player.vimeo.com/video/$2"},instagram:{matcher:/(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,type:"image",url:"//$1/p/$2/media/?size=l"},gmap_place:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/?ll="+(t[9]?t[9]+"&z="+Math.floor(t[10])+(t[12]?t[12].replace(/^\//,"&"):""):t[12]+"").replace(/\?/,"&")+"&output="+(t[12]&&t[12].indexOf("layer=c")>0?"svembed":"embed")}},gmap_search:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/maps?q="+t[5].replace("query=","q=").replace("api=1","")+"&output=embed"}}},n=function(e,n,o){if(e)return o=o||"","object"===t.type(o)&&(o=t.param(o,!0)),t.each(n,function(t,n){e=e.replace("$"+t,n||"")}),o.length&&(e+=(e.indexOf("?")>0?"&":"?")+o),e};t(document).on("objectNeedsType.fb",function(o,a,i){var s,r,c,l,d,u,f,p=i.src||"",h=!1;s=t.extend(!0,{},e,i.opts.media),t.each(s,function(e,o){if(c=p.match(o.matcher)){if(h=o.type,f=e,u={},o.paramPlace&&c[o.paramPlace]){d=c[o.paramPlace],"?"==d[0]&&(d=d.substring(1)),d=d.split("&");for(var a=0;a<d.length;++a){var s=d[a].split("=",2);2==s.length&&(u[s[0]]=decodeURIComponent(s[1].replace(/\+/g," ")))}}return l=t.extend(!0,{},o.params,i.opts[e],u),p="function"===t.type(o.url)?o.url.call(this,c,l,i):n(o.url,c,l),r="function"===t.type(o.thumb)?o.thumb.call(this,c,l,i):n(o.thumb,c),"youtube"===e?p=p.replace(/&t=((\d+)m)?(\d+)s/,function(t,e,n,o){return"&start="+((n?60*parseInt(n,10):0)+parseInt(o,10))}):"vimeo"===e&&(p=p.replace("&%23","#")),!1}}),h?(i.opts.thumb||i.opts.$thumb&&i.opts.$thumb.length||(i.opts.thumb=r),"iframe"===h&&(i.opts=t.extend(!0,i.opts,{iframe:{preload:!1,attr:{scrolling:"no"}}})),t.extend(i,{type:h,src:p,origSrc:i.src,contentSource:f,contentType:"image"===h?"image":"gmap_place"==f||"gmap_search"==f?"map":"video"})):p&&(i.type=i.opts.defaultType)});var o={youtube:{src:"https://www.youtube.com/iframe_api",class:"YT",loading:!1,loaded:!1},vimeo:{src:"https://player.vimeo.com/api/player.js",class:"Vimeo",loading:!1,loaded:!1},load:function(t){var e,n=this;return this[t].loaded?void setTimeout(function(){n.done(t)}):void(this[t].loading||(this[t].loading=!0,e=document.createElement("script"),e.type="text/javascript",e.src=this[t].src,"youtube"===t?window.onYouTubeIframeAPIReady=function(){n[t].loaded=!0,n.done(t)}:e.onload=function(){n[t].loaded=!0,n.done(t)},document.body.appendChild(e)))},done:function(e){var n,o,a;"youtube"===e&&delete window.onYouTubeIframeAPIReady,n=t.fancybox.getInstance(),n&&(o=n.current.$content.find("iframe"),"youtube"===e&&void 0!==YT&&YT?a=new YT.Player(o.attr("id"),{events:{onStateChange:function(t){0==t.data&&n.next()}}}):"vimeo"===e&&void 0!==Vimeo&&Vimeo&&(a=new Vimeo.Player(o),a.on("ended",function(){n.next()})))}};t(document).on({"afterShow.fb":function(t,e,n){e.group.length>1&&("youtube"===n.contentSource||"vimeo"===n.contentSource)&&o.load(n.contentSource)}})}(jQuery),function(t,e,n){"use strict";var o=function(){return t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.oRequestAnimationFrame||function(e){return t.setTimeout(e,1e3/60)}}(),a=function(){return t.cancelAnimationFrame||t.webkitCancelAnimationFrame||t.mozCancelAnimationFrame||t.oCancelAnimationFrame||function(e){t.clearTimeout(e)}}(),i=function(e){var n=[];e=e.originalEvent||e||t.e,e=e.touches&&e.touches.length?e.touches:e.changedTouches&&e.changedTouches.length?e.changedTouches:[e];for(var o in e)e[o].pageX?n.push({x:e[o].pageX,y:e[o].pageY}):e[o].clientX&&n.push({x:e[o].clientX,y:e[o].clientY});return n},s=function(t,e,n){return e&&t?"x"===n?t.x-e.x:"y"===n?t.y-e.y:Math.sqrt(Math.pow(t.x-e.x,2)+Math.pow(t.y-e.y,2)):0},r=function(t){if(t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio')||n.isFunction(t.get(0).onclick)||t.data("selectable"))return!0;for(var e=0,o=t[0].attributes,a=o.length;e<a;e++)if("data-fancybox-"===o[e].nodeName.substr(0,14))return!0;return!1},c=function(e){var n=t.getComputedStyle(e)["overflow-y"],o=t.getComputedStyle(e)["overflow-x"],a=("scroll"===n||"auto"===n)&&e.scrollHeight>e.clientHeight,i=("scroll"===o||"auto"===o)&&e.scrollWidth>e.clientWidth;return a||i},l=function(t){for(var e=!1;;){if(e=c(t.get(0)))break;if(t=t.parent(),!t.length||t.hasClass("fancybox-stage")||t.is("body"))break}return e},d=function(t){var e=this;e.instance=t,e.$bg=t.$refs.bg,e.$stage=t.$refs.stage,e.$container=t.$refs.container,e.destroy(),e.$container.on("touchstart.fb.touch mousedown.fb.touch",n.proxy(e,"ontouchstart"))};d.prototype.destroy=function(){this.$container.off(".fb.touch")},d.prototype.ontouchstart=function(o){var a=this,c=n(o.target),d=a.instance,u=d.current,f=u.$slide,p=u.$content,h="touchstart"==o.type;if(h&&a.$container.off("mousedown.fb.touch"),(!o.originalEvent||2!=o.originalEvent.button)&&f.length&&c.length&&!r(c)&&!r(c.parent())&&(c.is("img")||!(o.originalEvent.clientX>c[0].clientWidth+c.offset().left))){if(!u||d.isAnimating||d.isClosing)return o.stopPropagation(),void o.preventDefault();if(a.realPoints=a.startPoints=i(o),a.startPoints.length){if(u.touch&&o.stopPropagation(),a.startEvent=o,a.canTap=!u.$slide.hasClass("fancybox-animated"),a.$target=c,a.$content=p,a.opts=u.opts.touch,a.isPanning=!1,a.isSwiping=!1,a.isZooming=!1,a.isScrolling=!1,a.canPan=d.canPan(),a.startTime=(new Date).getTime(),a.distanceX=a.distanceY=a.distance=0,a.canvasWidth=Math.round(f[0].clientWidth),a.canvasHeight=Math.round(f[0].clientHeight),a.contentLastPos=null,a.contentStartPos=n.fancybox.getTranslate(a.$content)||{top:0,left:0},a.sliderStartPos=a.sliderLastPos||n.fancybox.getTranslate(f),a.stagePos=n.fancybox.getTranslate(d.$refs.stage),a.sliderStartPos.top-=a.stagePos.top,a.sliderStartPos.left-=a.stagePos.left,a.contentStartPos.top-=a.stagePos.top,a.contentStartPos.left-=a.stagePos.left,n(e).off(".fb.touch").on(h?"touchend.fb.touch touchcancel.fb.touch":"mouseup.fb.touch mouseleave.fb.touch",n.proxy(a,"ontouchend")).on(h?"touchmove.fb.touch":"mousemove.fb.touch",n.proxy(a,"ontouchmove")),n.fancybox.isMobile&&e.addEventListener("scroll",a.onscroll,!0),!a.opts&&!a.canPan||!c.is(a.$stage)&&!a.$stage.find(c).length)return void(c.is(".fancybox-image")&&o.preventDefault());a.isScrollable=l(c)||l(c.parent()),n.fancybox.isMobile&&a.isScrollable||o.preventDefault(),(1===a.startPoints.length||u.hasError)&&(a.canPan?(n.fancybox.stop(a.$content),a.isPanning=!0):a.isSwiping=!0,a.$container.addClass("fancybox-is-grabbing")),2===a.startPoints.length&&"image"===u.type&&(u.isLoaded||u.$ghost)&&(a.canTap=!1,a.isSwiping=!1,a.isPanning=!1,a.isZooming=!0,n.fancybox.stop(a.$content),a.centerPointStartX=.5*(a.startPoints[0].x+a.startPoints[1].x)-n(t).scrollLeft(),a.centerPointStartY=.5*(a.startPoints[0].y+a.startPoints[1].y)-n(t).scrollTop(),a.percentageOfImageAtPinchPointX=(a.centerPointStartX-a.contentStartPos.left)/a.contentStartPos.width,a.percentageOfImageAtPinchPointY=(a.centerPointStartY-a.contentStartPos.top)/a.contentStartPos.height,a.startDistanceBetweenFingers=s(a.startPoints[0],a.startPoints[1]))}}},d.prototype.onscroll=function(t){var n=this;n.isScrolling=!0,e.removeEventListener("scroll",n.onscroll,!0)},d.prototype.ontouchmove=function(t){var e=this;return void 0!==t.originalEvent.buttons&&0===t.originalEvent.buttons?void e.ontouchend(t):e.isScrolling?void(e.canTap=!1):(e.newPoints=i(t),void((e.opts||e.canPan)&&e.newPoints.length&&e.newPoints.length&&(e.isSwiping&&e.isSwiping===!0||t.preventDefault(),e.distanceX=s(e.newPoints[0],e.startPoints[0],"x"),e.distanceY=s(e.newPoints[0],e.startPoints[0],"y"),e.distance=s(e.newPoints[0],e.startPoints[0]),e.distance>0&&(e.isSwiping?e.onSwipe(t):e.isPanning?e.onPan():e.isZooming&&e.onZoom()))))},d.prototype.onSwipe=function(e){var i,s=this,r=s.instance,c=s.isSwiping,l=s.sliderStartPos.left||0;if(c!==!0)"x"==c&&(s.distanceX>0&&(s.instance.group.length<2||0===s.instance.current.index&&!s.instance.current.opts.loop)?l+=Math.pow(s.distanceX,.8):s.distanceX<0&&(s.instance.group.length<2||s.instance.current.index===s.instance.group.length-1&&!s.instance.current.opts.loop)?l-=Math.pow(-s.distanceX,.8):l+=s.distanceX),s.sliderLastPos={top:"x"==c?0:s.sliderStartPos.top+s.distanceY,left:l},s.requestId&&(a(s.requestId),s.requestId=null),s.requestId=o(function(){s.sliderLastPos&&(n.each(s.instance.slides,function(t,e){var o=e.pos-s.instance.currPos;n.fancybox.setTranslate(e.$slide,{top:s.sliderLastPos.top,left:s.sliderLastPos.left+o*s.canvasWidth+o*e.opts.gutter})}),s.$container.addClass("fancybox-is-sliding"))});else if(Math.abs(s.distance)>10){if(s.canTap=!1,r.group.length<2&&s.opts.vertical?s.isSwiping="y":r.isDragging||s.opts.vertical===!1||"auto"===s.opts.vertical&&n(t).width()>800?s.isSwiping="x":(i=Math.abs(180*Math.atan2(s.distanceY,s.distanceX)/Math.PI),s.isSwiping=i>45&&i<135?"y":"x"),"y"===s.isSwiping&&n.fancybox.isMobile&&s.isScrollable)return void(s.isScrolling=!0);r.isDragging=s.isSwiping,s.startPoints=s.newPoints,n.each(r.slides,function(t,e){var o,a;n.fancybox.stop(e.$slide),o=n.fancybox.getTranslate(e.$slide),a=n.fancybox.getTranslate(r.$refs.stage),e.$slide.removeAttr("style").removeClass("fancybox-animated").removeClass(function(t,e){return(e.match(/(^|\s)fancybox-fx-\S+/g)||[]).join(" ")}),e.pos===r.current.pos&&(s.sliderStartPos.left=o.left-a.left),n.fancybox.setTranslate(e.$slide,{top:o.top-a.top,left:o.left-a.left})}),r.SlideShow&&r.SlideShow.isActive&&r.SlideShow.stop()}},d.prototype.onPan=function(){var t=this;return s(t.newPoints[0],t.realPoints[0])<(n.fancybox.isMobile?10:5)?void(t.startPoints=t.newPoints):(t.canTap=!1,t.contentLastPos=t.limitMovement(),t.requestId&&(a(t.requestId),t.requestId=null),void(t.requestId=o(function(){n.fancybox.setTranslate(t.$content,t.contentLastPos)})))},d.prototype.limitMovement=function(){var t,e,n,o,a,i,s=this,r=s.canvasWidth,c=s.canvasHeight,l=s.distanceX,d=s.distanceY,u=s.contentStartPos,f=u.left,p=u.top,h=u.width,g=u.height;return a=h>r?f+l:f,i=p+d,t=Math.max(0,.5*r-.5*h),e=Math.max(0,.5*c-.5*g),n=Math.min(r-h,.5*r-.5*h),o=Math.min(c-g,.5*c-.5*g),l>0&&a>t&&(a=t-1+Math.pow(-t+f+l,.8)||0),l<0&&a<n&&(a=n+1-Math.pow(n-f-l,.8)||0),d>0&&i>e&&(i=e-1+Math.pow(-e+p+d,.8)||0),d<0&&i<o&&(i=o+1-Math.pow(o-p-d,.8)||0),{top:i,left:a}},d.prototype.limitPosition=function(t,e,n,o){var a=this,i=a.canvasWidth,s=a.canvasHeight;return n>i?(t=t>0?0:t,t=t<i-n?i-n:t):t=Math.max(0,i/2-n/2),o>s?(e=e>0?0:e,e=e<s-o?s-o:e):e=Math.max(0,s/2-o/2),{top:e,left:t}},d.prototype.onZoom=function(){var e=this,i=e.contentStartPos,r=i.width,c=i.height,l=i.left,d=i.top,u=s(e.newPoints[0],e.newPoints[1]),f=u/e.startDistanceBetweenFingers,p=Math.floor(r*f),h=Math.floor(c*f),g=(r-p)*e.percentageOfImageAtPinchPointX,b=(c-h)*e.percentageOfImageAtPinchPointY,m=(e.newPoints[0].x+e.newPoints[1].x)/2-n(t).scrollLeft(),v=(e.newPoints[0].y+e.newPoints[1].y)/2-n(t).scrollTop(),y=m-e.centerPointStartX,x=v-e.centerPointStartY,w=l+(g+y),$=d+(b+x),S={top:$,left:w,scaleX:f,scaleY:f};e.canTap=!1,e.newWidth=p,e.newHeight=h,e.contentLastPos=S,e.requestId&&(a(e.requestId),e.requestId=null),e.requestId=o(function(){n.fancybox.setTranslate(e.$content,e.contentLastPos)})},d.prototype.ontouchend=function(t){var o=this,s=o.isSwiping,r=o.isPanning,c=o.isZooming,l=o.isScrolling;return o.endPoints=i(t),o.dMs=Math.max((new Date).getTime()-o.startTime,1),o.$container.removeClass("fancybox-is-grabbing"),n(e).off(".fb.touch"),e.removeEventListener("scroll",o.onscroll,!0),o.requestId&&(a(o.requestId),o.requestId=null),o.isSwiping=!1,o.isPanning=!1,o.isZooming=!1,o.isScrolling=!1,o.instance.isDragging=!1,o.canTap?o.onTap(t):(o.speed=100,o.velocityX=o.distanceX/o.dMs*.5,o.velocityY=o.distanceY/o.dMs*.5,void(r?o.endPanning():c?o.endZooming():o.endSwiping(s,l)))},d.prototype.endSwiping=function(t,e){var o=this,a=!1,i=o.instance.group.length,s=Math.abs(o.velocityX),r=Math.abs(o.distanceX),c="x"==t&&i>1&&(o.dMs>130&&r>10||r>50),l=Math.abs(s*o.canvasWidth/o.canvasWidth)>.8?366:500;o.sliderLastPos=null,"y"==t&&!e&&Math.abs(o.distanceY)>50?(n.fancybox.animate(o.instance.current.$slide,{top:o.sliderStartPos.top+o.distanceY+150*o.velocityY,opacity:0},200),a=o.instance.close(!0,200)):c&&o.distanceX>0?a=o.instance.previous(l):c&&o.distanceX<0&&(a=o.instance.next(l)),a!==!1||"x"!=t&&"y"!=t||o.instance.centerSlide(o.instance.current,150),o.$container.removeClass("fancybox-is-sliding")},d.prototype.endPanning=function(){var t,e,o,a=this;a.contentLastPos&&(a.opts.momentum===!1||a.dMs>350?(t=a.contentLastPos.left,e=a.contentLastPos.top):(t=a.contentLastPos.left+500*a.velocityX,e=a.contentLastPos.top+500*a.velocityY),o=a.limitPosition(t,e,a.contentStartPos.width,a.contentStartPos.height),o.width=a.contentStartPos.width,o.height=a.contentStartPos.height,n.fancybox.animate(a.$content,o,330))},d.prototype.endZooming=function(){var t,e,o,a,i=this,s=i.instance.current,r=i.newWidth,c=i.newHeight;i.contentLastPos&&(t=i.contentLastPos.left,e=i.contentLastPos.top,a={top:e,left:t,width:r,height:c,scaleX:1,scaleY:1},n.fancybox.setTranslate(i.$content,a),r<i.canvasWidth&&c<i.canvasHeight?i.instance.scaleToFit(150):r>s.width||c>s.height?i.instance.scaleToActual(i.centerPointStartX,i.centerPointStartY,150):(o=i.limitPosition(t,e,r,c),n.fancybox.setTranslate(i.$content,n.fancybox.getTranslate(i.$content)),n.fancybox.animate(i.$content,o,150)))},d.prototype.onTap=function(e){var o,a=this,s=n(e.target),r=a.instance,c=r.current,l=e&&i(e)||a.startPoints,d=l[0]?l[0].x-n(t).scrollLeft()-a.stagePos.left:0,u=l[0]?l[0].y-n(t).scrollTop()-a.stagePos.top:0,f=function(t){var o=c.opts[t];if(n.isFunction(o)&&(o=o.apply(r,[c,e])),o)switch(o){case"close":r.close(a.startEvent);break;case"toggleControls":r.toggleControls(!0);break;case"next":r.next();break;case"nextOrClose":r.group.length>1?r.next():r.close(a.startEvent);break;case"zoom":"image"==c.type&&(c.isLoaded||c.$ghost)&&(r.canPan()?r.scaleToFit():r.isScaledDown()?r.scaleToActual(d,u):r.group.length<2&&r.close(a.startEvent))}};if((!e.originalEvent||2!=e.originalEvent.button)&&(s.is("img")||!(d>s[0].clientWidth+s.offset().left))){if(s.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))o="Outside";else if(s.is(".fancybox-slide"))o="Slide";else{if(!r.current.$content||!r.current.$content.find(s).addBack().filter(s).length)return;o="Content"}if(a.tapped){if(clearTimeout(a.tapped),a.tapped=null,Math.abs(d-a.tapX)>50||Math.abs(u-a.tapY)>50)return this;f("dblclick"+o)}else a.tapX=d,a.tapY=u,c.opts["dblclick"+o]&&c.opts["dblclick"+o]!==c.opts["click"+o]?a.tapped=setTimeout(function(){a.tapped=null,f("click"+o)},500):f("click"+o);return this}},n(e).on("onActivate.fb",function(t,e){e&&!e.Guestures&&(e.Guestures=new d(e))})}(window,document,jQuery),function(t,e){"use strict";e.extend(!0,e.fancybox.defaults,{btnTpl:{slideShow:'<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>'},slideShow:{autoStart:!1,speed:3e3,progress:!0}});var n=function(t){this.instance=t,this.init()};e.extend(n.prototype,{timer:null,isActive:!1,$button:null,init:function(){var t=this,n=t.instance,o=n.group[n.currIndex].opts.slideShow;t.$button=n.$refs.toolbar.find("[data-fancybox-play]").on("click",function(){t.toggle()}),n.group.length<2||!o?t.$button.hide():o.progress&&(t.$progress=e('<div class="fancybox-progress"></div>').appendTo(n.$refs.inner))},set:function(t){var n=this,o=n.instance,a=o.current;a&&(t===!0||a.opts.loop||o.currIndex<o.group.length-1)?n.isActive&&"video"!==a.contentType&&(n.$progress&&e.fancybox.animate(n.$progress.show(),{scaleX:1},a.opts.slideShow.speed),n.timer=setTimeout(function(){o.jumpTo((o.currIndex+1)%o.group.length)},a.opts.slideShow.speed)):(n.stop(),o.idleSecondsCounter=0,o.showControls())},clear:function(){var t=this;clearTimeout(t.timer),t.timer=null,t.$progress&&t.$progress.removeAttr("style").hide()},start:function(){var t=this,e=t.instance.current;e&&(t.$button.attr("title",e.opts.i18n[e.opts.lang].PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),t.isActive=!0,e.isComplete&&t.set(!0),t.instance.trigger("onSlideShowChange",!0))},stop:function(){var t=this,e=t.instance.current;t.clear(),t.$button.attr("title",e.opts.i18n[e.opts.lang].PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"),t.isActive=!1,t.instance.trigger("onSlideShowChange",!1),t.$progress&&t.$progress.removeAttr("style").hide()},toggle:function(){var t=this;t.isActive?t.stop():t.start()}}),e(t).on({"onInit.fb":function(t,e){e&&!e.SlideShow&&(e.SlideShow=new n(e))},"beforeShow.fb":function(t,e,n,o){var a=e&&e.SlideShow;o?a&&n.opts.slideShow.autoStart&&a.start():a&&a.isActive&&a.clear()},"afterShow.fb":function(t,e,n){var o=e&&e.SlideShow;o&&o.isActive&&o.set()},"afterKeydown.fb":function(n,o,a,i,s){var r=o&&o.SlideShow;!r||!a.opts.slideShow||80!==s&&32!==s||e(t.activeElement).is("button,a,input")||(i.preventDefault(),r.toggle())},"beforeClose.fb onDeactivate.fb":function(t,e){var n=e&&e.SlideShow;n&&n.stop()}}),e(t).on("visibilitychange",function(){var n=e.fancybox.getInstance(),o=n&&n.SlideShow;o&&o.isActive&&(t.hidden?o.clear():o.set())})}(document,jQuery),function(t,e){"use strict";var n=function(){for(var e=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],n={},o=0;o<e.length;o++){var a=e[o];if(a&&a[1]in t){for(var i=0;i<a.length;i++)n[e[0][i]]=a[i];return n}}return!1}();if(n){var o={request:function(e){e=e||t.documentElement,e[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)},exit:function(){t[n.exitFullscreen]()},toggle:function(e){e=e||t.documentElement,this.isFullscreen()?this.exit():this.request(e)},isFullscreen:function(){return Boolean(t[n.fullscreenElement])},enabled:function(){return Boolean(t[n.fullscreenEnabled])}};e.extend(!0,e.fancybox.defaults,{btnTpl:{fullScreen:'<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>'},fullScreen:{autoStart:!1}}),e(t).on(n.fullscreenchange,function(){var t=o.isFullscreen(),n=e.fancybox.getInstance();n&&(n.current&&"image"===n.current.type&&n.isAnimating&&(n.current.$content.css("transition","none"),n.isAnimating=!1,n.update(!0,!0,0)),n.trigger("onFullscreenChange",t),n.$refs.container.toggleClass("fancybox-is-fullscreen",t),n.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter",!t).toggleClass("fancybox-button--fsexit",t))})}e(t).on({"onInit.fb":function(t,e){var a;return n?void(e&&e.group[e.currIndex].opts.fullScreen?(a=e.$refs.container,a.on("click.fb-fullscreen","[data-fancybox-fullscreen]",function(t){t.stopPropagation(),t.preventDefault(),o.toggle()}),e.opts.fullScreen&&e.opts.fullScreen.autoStart===!0&&o.request(),e.FullScreen=o):e&&e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()):void e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove()},"afterKeydown.fb":function(t,e,n,o,a){e&&e.FullScreen&&70===a&&(o.preventDefault(),e.FullScreen.toggle())},"beforeClose.fb":function(t,e){e&&e.FullScreen&&e.$refs.container.hasClass("fancybox-is-fullscreen")&&o.exit()}})}(document,jQuery),function(t,e){"use strict";var n="fancybox-thumbs",o=n+"-active";e.fancybox.defaults=e.extend(!0,{btnTpl:{thumbs:'<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>'},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"}},e.fancybox.defaults);var a=function(t){this.init(t)};e.extend(a.prototype,{$button:null,$grid:null,$list:null,isVisible:!1,isActive:!1,init:function(t){var e,n,o=this;o.instance=t,t.Thumbs=o,o.opts=t.group[t.currIndex].opts.thumbs,e=t.group[0],e=e.opts.thumb||!(!e.opts.$thumb||!e.opts.$thumb.length)&&e.opts.$thumb.attr("src"),t.group.length>1&&(n=t.group[1],n=n.opts.thumb||!(!n.opts.$thumb||!n.opts.$thumb.length)&&n.opts.$thumb.attr("src")),o.$button=t.$refs.toolbar.find("[data-fancybox-thumbs]"),o.opts&&e&&n?(o.$button.show().on("click",function(){o.toggle()}),o.isActive=!0):o.$button.hide()},create:function(){var t,o=this,a=o.instance,i=o.opts.parentEl,s=[];o.$grid||(o.$grid=e('<div class="'+n+" "+n+"-"+o.opts.axis+'"></div>').appendTo(a.$refs.container.find(i).addBack().filter(i)),o.$grid.on("click","a",function(){a.jumpTo(e(this).attr("data-index"))})),o.$list||(o.$list=e('<div class="'+n+'__list">').appendTo(o.$grid)),e.each(a.group,function(e,n){t=n.opts.thumb||(n.opts.$thumb?n.opts.$thumb.attr("src"):null),t||"image"!==n.type||(t=n.src),s.push('<a href="javascript:;" tabindex="0" data-index="'+e+'"'+(t&&t.length?' style="background-image:url('+t+')"':"")+"></a>")}),o.$list[0].innerHTML=s.join(""),"x"===o.opts.axis&&o.$list.width(parseInt(o.$grid.css("padding-right"),10)+a.group.length*o.$list.children().eq(0).outerWidth(!0))},focus:function(t){var e,n,a=this,i=a.$list,s=a.$grid;a.instance.current&&(e=i.children().removeClass(o).filter('[data-index="'+a.instance.current.index+'"]').addClass(o),n=e.position(),"y"===a.opts.axis&&(n.top<0||n.top>i.height()-e.outerHeight())?i.stop().animate({scrollTop:i.scrollTop()+n.top},t):"x"===a.opts.axis&&(n.left<s.scrollLeft()||n.left>s.scrollLeft()+(s.width()-e.outerWidth()))&&i.parent().stop().animate({scrollLeft:n.left},t))},update:function(){var t=this;t.instance.$refs.container.toggleClass("fancybox-show-thumbs",this.isVisible),t.isVisible?(t.$grid||t.create(),t.instance.trigger("onThumbsShow"),t.focus(0)):t.$grid&&t.instance.trigger("onThumbsHide"),t.instance.update()},hide:function(){this.isVisible=!1,this.update()},show:function(){this.isVisible=!0,this.update()},toggle:function(){this.isVisible=!this.isVisible,this.update()}}),e(t).on({"onInit.fb":function(t,e){var n;e&&!e.Thumbs&&(n=new a(e),n.isActive&&n.opts.autoStart===!0&&n.show())},"beforeShow.fb":function(t,e,n,o){var a=e&&e.Thumbs;a&&a.isVisible&&a.focus(o?0:250)},"afterKeydown.fb":function(t,e,n,o,a){var i=e&&e.Thumbs;i&&i.isActive&&71===a&&(o.preventDefault(),i.toggle())},"beforeClose.fb":function(t,e){var n=e&&e.Thumbs;n&&n.isVisible&&n.opts.hideOnClose!==!1&&n.$grid.hide()}})}(document,jQuery),function(t,e){"use strict";function n(t){var e={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"};return String(t).replace(/[&<>"'`=\/]/g,function(t){return e[t]})}e.extend(!0,e.fancybox.defaults,{btnTpl:{share:'<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>'},share:{url:function(t,e){return!t.currentHash&&"inline"!==e.type&&"html"!==e.type&&(e.origSrc||e.src)||window.location},tpl:'<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>'}}),e(t).on("click","[data-fancybox-share]",function(){var t,o,a=e.fancybox.getInstance(),i=a.current||null;i&&("function"===e.type(i.opts.share.url)&&(t=i.opts.share.url.apply(i,[a,i])),o=i.opts.share.tpl.replace(/\{\{media\}\}/g,"image"===i.type?encodeURIComponent(i.src):"").replace(/\{\{url\}\}/g,encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g,n(t)).replace(/\{\{descr\}\}/g,a.$caption?encodeURIComponent(a.$caption.text()):""),e.fancybox.open({src:a.translate(a,o),type:"html",opts:{touch:!1,animationEffect:!1,afterLoad:function(t,e){a.$refs.container.one("beforeClose.fb",function(){t.close(null,0)}),e.$content.find(".fancybox-share__button").click(function(){return window.open(this.href,"Share","width=550, height=450"),!1})},mobile:{autoFocus:!1}}}))})}(document,jQuery),function(t,e,n){"use strict";function o(){var e=t.location.hash.substr(1),n=e.split("-"),o=n.length>1&&/^\+?\d+$/.test(n[n.length-1])?parseInt(n.pop(-1),10)||1:1,a=n.join("-");return{hash:e,index:o<1?1:o,gallery:a}}function a(t){""!==t.gallery&&n("[data-fancybox='"+n.escapeSelector(t.gallery)+"']").eq(t.index-1).focus().trigger("click.fb-start")}function i(t){var e,n;return!!t&&(e=t.current?t.current.opts:t.opts,n=e.hash||(e.$orig?e.$orig.data("fancybox")||e.$orig.data("fancybox-trigger"):""),""!==n&&n)}n.escapeSelector||(n.escapeSelector=function(t){var e=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,n=function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t};return(t+"").replace(e,n)}),n(function(){n.fancybox.defaults.hash!==!1&&(n(e).on({"onInit.fb":function(t,e){var n,a;e.group[e.currIndex].opts.hash!==!1&&(n=o(),a=i(e),a&&n.gallery&&a==n.gallery&&(e.currIndex=n.index-1))},"beforeShow.fb":function(n,o,a,s){var r;a&&a.opts.hash!==!1&&(r=i(o),r&&(o.currentHash=r+(o.group.length>1?"-"+(a.index+1):""),
t.location.hash!=="#"+o.currentHash&&(s&&!o.origHash&&(o.origHash=t.location.hash),o.hashTimer&&clearTimeout(o.hashTimer),o.hashTimer=setTimeout(function(){"replaceState"in t.history?(t.history[s?"pushState":"replaceState"]({},e.title,t.location.pathname+t.location.search+"#"+o.currentHash),s&&(o.hasCreatedHistory=!0)):t.location.hash=o.currentHash,o.hashTimer=null},300))))},"beforeClose.fb":function(n,o,a){a.opts.hash!==!1&&(clearTimeout(o.hashTimer),o.currentHash&&o.hasCreatedHistory?t.history.back():o.currentHash&&("replaceState"in t.history?t.history.replaceState({},e.title,t.location.pathname+t.location.search+(o.origHash||"")):t.location.hash=o.origHash),o.currentHash=null)}}),n(t).on("hashchange.fb",function(){var t=o(),e=null;n.each(n(".fancybox-container").get().reverse(),function(t,o){var a=n(o).data("FancyBox");if(a&&a.currentHash)return e=a,!1}),e?e.currentHash===t.gallery+"-"+t.index||1===t.index&&e.currentHash==t.gallery||(e.currentHash=null,e.close()):""!==t.gallery&&a(t)}),setTimeout(function(){n.fancybox.getInstance()||a(o())},50))})}(window,document,jQuery),function(t,e){"use strict";var n=(new Date).getTime();e(t).on({"onInit.fb":function(t,e,o){e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll",function(t){var o=e.current,a=(new Date).getTime();e.group.length<2||o.opts.wheel===!1||"auto"===o.opts.wheel&&"image"!==o.type||(t.preventDefault(),t.stopPropagation(),o.$slide.hasClass("fancybox-animated")||(t=t.originalEvent||t,a-n<250||(n=a,e[(-t.deltaY||-t.deltaX||t.wheelDelta||-t.detail)<0?"next":"previous"]())))})}})}(document,jQuery);
/*!
 * SmartWizard v4.3.1
 * The awesome jQuery step wizard plugin with Bootstrap support
 * http://www.techlaboratory.net/smartwizard
 *
 * Created by Dipu Raj
 * http://dipuraj.me
 *
 * Licensed under the terms of the MIT License
 * https://github.com/techlab/SmartWizard/blob/master/LICENSE
 */
!function(t,s,e,n){"use strict";function i(s,e){this.options=t.extend(!0,{},o,e),this.main=t(s),this.nav=this.main.children("ul"),this.steps=t("li > a",this.nav),this.container=this.main.children("div"),this.pages=this.container.children("div"),this.current_index=null,this.options.toolbarSettings.toolbarButtonPosition="right"===this.options.toolbarSettings.toolbarButtonPosition?"end":this.options.toolbarSettings.toolbarButtonPosition,this.options.toolbarSettings.toolbarButtonPosition="left"===this.options.toolbarSettings.toolbarButtonPosition?"start":this.options.toolbarSettings.toolbarButtonPosition,this.options.theme=null===this.options.theme||""===this.options.theme?"default":this.options.theme,this.init()}var o={selected:0,keyNavigation:!0,autoAdjustHeight:!0,cycleSteps:!1,backButtonSupport:!0,useURLhash:!0,showStepURLhash:!0,lang:{next:"Next",previous:"Previous"},toolbarSettings:{toolbarPosition:"bottom",toolbarButtonPosition:"end",showNextButton:!0,showPreviousButton:!0,toolbarExtraButtons:[]},anchorSettings:{anchorClickable:!0,enableAllAnchors:!1,markDoneStep:!0,markAllPreviousStepsAsDone:!0,removeDoneStepOnNavigateBack:!1,enableAnchorOnDoneStep:!0},contentURL:null,contentCache:!0,ajaxSettings:{},disabledSteps:[],errorSteps:[],hiddenSteps:[],theme:"default",transitionEffect:"none",transitionSpeed:"400"};t.extend(i.prototype,{init:function(){this._setElements(),this._setToolbar(),this._setEvents();var e=this.options.selected;if(this.options.useURLhash){var n=s.location.hash;if(n&&n.length>0){var i=t("a[href*='"+n+"']",this.nav);if(i.length>0){var o=this.steps.index(i);e=o>=0?o:e}}}e>0&&this.options.anchorSettings.markDoneStep&&this.options.anchorSettings.markAllPreviousStepsAsDone&&this.steps.eq(e).parent("li").prevAll().addClass("done"),this._showStep(e)},_setElements:function(){this.main.addClass("sw-main sw-theme-"+this.options.theme),this.nav.addClass("nav nav-tabs step-anchor").children("li").addClass("nav-item").children("a").addClass("nav-link"),this.options.anchorSettings.enableAllAnchors!==!1&&this.options.anchorSettings.anchorClickable!==!1&&this.steps.parent("li").addClass("clickable"),this.container.addClass("sw-container tab-content"),this.pages.addClass("tab-pane step-content");var s=this;return this.options.disabledSteps&&this.options.disabledSteps.length>0&&t.each(this.options.disabledSteps,function(t,e){s.steps.eq(e).parent("li").addClass("disabled")}),this.options.errorSteps&&this.options.errorSteps.length>0&&t.each(this.options.errorSteps,function(t,e){s.steps.eq(e).parent("li").addClass("danger")}),this.options.hiddenSteps&&this.options.hiddenSteps.length>0&&t.each(this.options.hiddenSteps,function(t,e){s.steps.eq(e).parent("li").addClass("hidden")}),!0},_setToolbar:function(){if("none"===this.options.toolbarSettings.toolbarPosition)return!0;var s=this.options.toolbarSettings.showNextButton!==!1?t("<button></button>").text(this.options.lang.next).addClass("btn btn-secondary sw-btn-next").attr("type","button"):null,e=this.options.toolbarSettings.showPreviousButton!==!1?t("<button></button>").text(this.options.lang.previous).addClass("btn btn-secondary sw-btn-prev").attr("type","button"):null,n=t("<div></div>").addClass("btn-group mr-2 sw-btn-group").attr("role","group").append(e,s),i=null;this.options.toolbarSettings.toolbarExtraButtons&&this.options.toolbarSettings.toolbarExtraButtons.length>0&&(i=t("<div></div>").addClass("btn-group mr-2 sw-btn-group-extra").attr("role","group"),t.each(this.options.toolbarSettings.toolbarExtraButtons,function(t,s){i.append(s.clone(!0))}));var o,a;switch(this.options.toolbarSettings.toolbarPosition){case"top":o=t("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-top justify-content-"+this.options.toolbarSettings.toolbarButtonPosition),o.append(n),"start"===this.options.toolbarSettings.toolbarButtonPosition?o.prepend(i):o.append(i),this.container.before(o);break;case"bottom":a=t("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition),a.append(n),"start"===this.options.toolbarSettings.toolbarButtonPosition?a.prepend(i):a.append(i),this.container.after(a);break;case"both":o=t("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-top justify-content-"+this.options.toolbarSettings.toolbarButtonPosition),o.append(n),"start"===this.options.toolbarSettings.toolbarButtonPosition?o.prepend(i):o.append(i),this.container.before(o),a=t("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition),a.append(n.clone(!0)),null!==i&&("start"===this.options.toolbarSettings.toolbarButtonPosition?a.prepend(i.clone(!0)):a.append(i.clone(!0))),this.container.after(a);break;default:a=t("<div></div>").addClass("btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-"+this.options.toolbarSettings.toolbarButtonPosition),a.append(n),this.options.toolbarSettings.toolbarButtonPosition,a.append(i),this.container.after(a)}return!0},_setEvents:function(){var n=this;return t(this.steps).on("click",function(t){if(t.preventDefault(),n.options.anchorSettings.anchorClickable===!1)return!0;var s=n.steps.index(this);if(n.options.anchorSettings.enableAnchorOnDoneStep===!1&&n.steps.eq(s).parent("li").hasClass("done"))return!0;s!==n.current_index&&(n.options.anchorSettings.enableAllAnchors!==!1&&n.options.anchorSettings.anchorClickable!==!1?n._showStep(s):n.steps.eq(s).parent("li").hasClass("done")&&n._showStep(s))}),t(".sw-btn-next",this.main).on("click",function(t){t.preventDefault(),n._showNext()}),t(".sw-btn-prev",this.main).on("click",function(t){t.preventDefault(),n._showPrevious()}),this.options.keyNavigation&&t(e).keyup(function(t){n._keyNav(t)}),this.options.backButtonSupport&&t(s).on("hashchange",function(e){if(!n.options.useURLhash)return!0;if(s.location.hash){var i=t("a[href*='"+s.location.hash+"']",n.nav);i&&i.length>0&&(e.preventDefault(),n._showStep(n.steps.index(i)))}}),!0},_showNext:function(){for(var t=this.current_index+1,s=t;s<this.steps.length;s++)if(!this.steps.eq(s).parent("li").hasClass("disabled")&&!this.steps.eq(s).parent("li").hasClass("hidden")){t=s;break}if(this.steps.length<=t){if(!this.options.cycleSteps)return!1;t=0}return this._showStep(t),!0},_showPrevious:function(){for(var t=this.current_index-1,s=t;s>=0;s--)if(!this.steps.eq(s).parent("li").hasClass("disabled")&&!this.steps.eq(s).parent("li").hasClass("hidden")){t=s;break}if(0>t){if(!this.options.cycleSteps)return!1;t=this.steps.length-1}return this._showStep(t),!0},_showStep:function(t){return!!this.steps.eq(t)&&(t!=this.current_index&&(!this.steps.eq(t).parent("li").hasClass("disabled")&&!this.steps.eq(t).parent("li").hasClass("hidden")&&(this._loadStepContent(t),!0)))},_loadStepContent:function(s){var e=this,n=this.steps.eq(this.current_index),i="",o=this.steps.eq(s),a=o.data("content-url")&&o.data("content-url").length>0?o.data("content-url"):this.options.contentURL;if(null!==this.current_index&&this.current_index!==s&&(i=this.current_index<s?"forward":"backward"),null!==this.current_index&&this._triggerEvent("leaveStep",[n,this.current_index,i])===!1)return!1;if(!(a&&a.length>0)||o.data("has-content")&&this.options.contentCache)this._transitPage(s);else{var r=o.length>0?t(o.attr("href"),this.main):null,h=t.extend(!0,{},{url:a,type:"POST",data:{step_number:s},dataType:"text",beforeSend:function(){e._loader("show")},error:function(s,n,i){e._loader("hide"),t.error(i)},success:function(t){t&&t.length>0&&(o.data("has-content",!0),r.html(t)),e._loader("hide"),e._transitPage(s)}},this.options.ajaxSettings);t.ajax(h)}return!0},_transitPage:function(s){var e=this,n=this.steps.eq(this.current_index),i=n.length>0?t(n.attr("href"),this.main):null,o=this.steps.eq(s),a=o.length>0?t(o.attr("href"),this.main):null,r="";null!==this.current_index&&this.current_index!==s&&(r=this.current_index<s?"forward":"backward");var h="middle";return 0===s?h="first":s===this.steps.length-1&&(h="final"),this.options.transitionEffect=this.options.transitionEffect.toLowerCase(),this.pages.finish(),"slide"===this.options.transitionEffect?i&&i.length>0?i.slideUp("fast",this.options.transitionEasing,function(){a.slideDown(e.options.transitionSpeed,e.options.transitionEasing)}):a.slideDown(this.options.transitionSpeed,this.options.transitionEasing):"fade"===this.options.transitionEffect?i&&i.length>0?i.fadeOut("fast",this.options.transitionEasing,function(){a.fadeIn("fast",e.options.transitionEasing,function(){t(this).show()})}):a.fadeIn(this.options.transitionSpeed,this.options.transitionEasing,function(){t(this).show()}):(i&&i.length>0&&i.hide(),a.show()),this._setURLHash(o.attr("href")),this._setAnchor(s),this._setButtons(s),this._fixHeight(s),this.current_index=s,this._triggerEvent("showStep",[o,this.current_index,r,h]),!0},_setAnchor:function(t){return this.steps.eq(this.current_index).parent("li").removeClass("active"),this.options.anchorSettings.markDoneStep!==!1&&null!==this.current_index&&(this.steps.eq(this.current_index).parent("li").addClass("done"),this.options.anchorSettings.removeDoneStepOnNavigateBack!==!1&&this.steps.eq(t).parent("li").nextAll().removeClass("done")),this.steps.eq(t).parent("li").removeClass("done").addClass("active"),!0},_setButtons:function(s){return this.options.cycleSteps||(0>=s?t(".sw-btn-prev",this.main).addClass("disabled"):t(".sw-btn-prev",this.main).removeClass("disabled"),this.steps.length-1<=s?t(".sw-btn-next",this.main).addClass("disabled"):t(".sw-btn-next",this.main).removeClass("disabled")),!0},_keyNav:function(t){var s=this;switch(t.which){case 37:s._showPrevious(),t.preventDefault();break;case 39:s._showNext(),t.preventDefault();break;default:return}},_fixHeight:function(s){if(this.options.autoAdjustHeight){var e=this.steps.eq(s).length>0?t(this.steps.eq(s).attr("href"),this.main):null;this.container.finish().animate({minHeight:e.outerHeight()},this.options.transitionSpeed,function(){})}return!0},_triggerEvent:function(s,e){var n=t.Event(s);return this.main.trigger(n,e),!n.isDefaultPrevented()&&n.result},_setURLHash:function(t){this.options.showStepURLhash&&s.location.hash!==t&&(s.location.hash=t)},_loader:function(t){switch(t){case"show":this.main.addClass("sw-loading");break;case"hide":this.main.removeClass("sw-loading");break;default:this.main.toggleClass("sw-loading")}},theme:function(t){if(this.options.theme===t)return!1;this.main.removeClass("sw-theme-"+this.options.theme),this.options.theme=t,this.main.addClass("sw-theme-"+this.options.theme),this._triggerEvent("themeChanged",[this.options.theme])},next:function(){this._showNext()},prev:function(){this._showPrevious()},reset:function(){if(this._triggerEvent("beginReset")===!1)return!1;this.container.stop(!0),this.pages.stop(!0),this.pages.hide(),this.current_index=null,this._setURLHash(this.steps.eq(this.options.selected).attr("href")),t(".sw-toolbar",this.main).remove(),this.steps.removeClass(),this.steps.parents("li").removeClass(),this.steps.data("has-content",!1),this.init(),this._triggerEvent("endReset")},stepState:function(s,e){s=t.isArray(s)?s:[s];var n=t.grep(this.steps,function(e,n){return t.inArray(n,s)!==-1});if(n&&n.length>0)switch(e){case"disable":t(n).parents("li").addClass("disabled");break;case"enable":t(n).parents("li").removeClass("disabled");break;case"hide":t(n).parents("li").addClass("hidden");break;case"show":t(n).parents("li").removeClass("hidden");break;case"error-on":t(n).parents("li").addClass("danger");break;case"error-off":t(n).parents("li").removeClass("danger")}}}),t.fn.smartWizard=function(s){var e,n=arguments;return void 0===s||"object"==typeof s?this.each(function(){t.data(this,"smartWizard")||t.data(this,"smartWizard",new i(this,s))}):"string"==typeof s&&"_"!==s[0]&&"init"!==s?(e=t.data(this[0],"smartWizard"),"destroy"===s&&t.data(this,"smartWizard",null),e instanceof i&&"function"==typeof e[s]?e[s].apply(e,Array.prototype.slice.call(n,1)):this):void 0}}(jQuery,window,document);
/**
* asRange v0.3.4
* https://github.com/amazingSurge/jquery-asRange
*
* Copyright (c) amazingSurge
* Released under the LGPL-3.0 license
*/
(function(global, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (typeof exports !== 'undefined') {
    factory(require('jquery'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery);
    global.jqueryAsRangeEs = mod.exports;
  }
})(this, function(_jquery) {
  'use strict';

  var _jquery2 = _interopRequireDefault(_jquery);

  function _interopRequireDefault(obj) {
    return obj && obj.__esModule
      ? obj
      : {
          default: obj
        };
  }

  var _typeof =
    typeof Symbol === 'function' && typeof Symbol.iterator === 'symbol'
      ? function(obj) {
          return typeof obj;
        }
      : function(obj) {
          return obj &&
          typeof Symbol === 'function' &&
          obj.constructor === Symbol &&
          obj !== Symbol.prototype
            ? 'symbol'
            : typeof obj;
        };

  function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError('Cannot call a class as a function');
    }
  }

  var _createClass = (function() {
    function defineProperties(target, props) {
      for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ('value' in descriptor) descriptor.writable = true;
        Object.defineProperty(target, descriptor.key, descriptor);
      }
    }

    return function(Constructor, protoProps, staticProps) {
      if (protoProps) defineProperties(Constructor.prototype, protoProps);
      if (staticProps) defineProperties(Constructor, staticProps);
      return Constructor;
    };
  })();

  var DEFAULTS = {
    namespace: 'asRange',
    skin: null,
    max: 100,
    min: 0,
    value: null,
    step: 10,
    limit: true,
    range: false,
    direction: 'h', // 'v' or 'h'
    keyboard: true,
    replaceFirst: false, // false, 'inherit', {'inherit': 'default'}
    tip: true,
    scale: true,
    format: function format(value) {
      return value;
    }
  };

  function getEventObject(event) {
    var e = event.originalEvent;
    if (e.touches && e.touches.length && e.touches[0]) {
      e = e.touches[0];
    }

    return e;
  }

  var Pointer = (function() {
    function Pointer($element, id, parent) {
      _classCallCheck(this, Pointer);

      this.$element = $element;
      this.uid = id;
      this.parent = parent;
      this.options = _jquery2.default.extend(true, {}, this.parent.options);
      this.direction = this.options.direction;
      this.value = null;
      this.classes = {
        active: this.parent.namespace + '-pointer_active'
      };
    }

    _createClass(Pointer, [
      {
        key: 'mousedown',
        value: function mousedown(event) {
          var axis = this.parent.direction.axis;
          var position = this.parent.direction.position;
          var offset = this.parent.$wrap.offset();

          this.$element.trigger(this.parent.namespace + '::moveStart', this);

          this.data = {};
          this.data.start = event[axis];
          this.data.position = event[axis] - offset[position];

          var value = this.parent.getValueFromPosition(this.data.position);
          this.set(value);

          _jquery2.default.each(this.parent.pointer, function(i, p) {
            p.deactive();
          });

          this.active();

          this.mousemove = function(event) {
            var eventObj = getEventObject(event);
            var value = this.parent.getValueFromPosition(
              this.data.position +
                (eventObj[axis] || this.data.start) -
                this.data.start
            );
            this.set(value);

            event.preventDefault();
            return false;
          };
          this.mouseup = function() {
            (0, _jquery2.default)(document).off(
              '.asRange mousemove.asRange touchend.asRange mouseup.asRange touchcancel.asRange'
            );
            this.$element.trigger(this.parent.namespace + '::moveEnd', this);
            return false;
          };

          (0, _jquery2.default)(document)
            .on(
              'touchmove.asRange mousemove.asRange',
              _jquery2.default.proxy(this.mousemove, this)
            )
            .on(
              'touchend.asRange mouseup.asRange',
              _jquery2.default.proxy(this.mouseup, this)
            );
          return false;
        }
      },
      {
        key: 'active',
        value: function active() {
          this.$element.addClass(this.classes.active);
        }
      },
      {
        key: 'deactive',
        value: function deactive() {
          this.$element.removeClass(this.classes.active);
        }
      },
      {
        key: 'set',
        value: function set(value) {
          if (this.value === value) {
            return;
          }

          if (this.parent.step) {
            value = this.matchStep(value);
          }
          if (this.options.limit === true) {
            value = this.matchLimit(value);
          } else {
            if (value <= this.parent.min) {
              value = this.parent.min;
            }
            if (value >= this.parent.max) {
              value = this.parent.max;
            }
          }
          this.value = value;

          this.updatePosition();
          this.$element.focus();

          this.$element.trigger(this.parent.namespace + '::move', this);
        }
      },
      {
        key: 'updatePosition',
        value: function updatePosition() {
          var position = {};

          position[this.parent.direction.position] = this.getPercent() + '%';
          this.$element.css(position);
        }
      },
      {
        key: 'getPercent',
        value: function getPercent() {
          return (this.value - this.parent.min) / this.parent.interval * 100;
        }
      },
      {
        key: 'get',
        value: function get() {
          return this.value;
        }
      },
      {
        key: 'matchStep',
        value: function matchStep(value) {
          var step = this.parent.step;
          var decimal = step.toString().split('.')[1];

          value = Math.round(value / step) * step;

          if (decimal) {
            value = value.toFixed(decimal.length);
          }

          return parseFloat(value);
        }
      },
      {
        key: 'matchLimit',
        value: function matchLimit(value) {
          var left = void 0;
          var right = void 0;
          var pointer = this.parent.pointer;

          if (this.uid === 1) {
            left = this.parent.min;
          } else {
            left = pointer[this.uid - 2].value;
          }

          if (pointer[this.uid] && pointer[this.uid].value !== null) {
            right = pointer[this.uid].value;
          } else {
            right = this.parent.max;
          }

          if (value <= left) {
            value = left;
          }
          if (value >= right) {
            value = right;
          }
          return value;
        }
      },
      {
        key: 'destroy',
        value: function destroy() {
          this.$element.off('.asRange');
          this.$element.remove();
        }
      }
    ]);

    return Pointer;
  })();

  var scale = {
    defaults: {
      scale: {
        valuesNumber: 3,
        gap: 1,
        grid: 5
      }
    },
    init: function init(instance) {
      var opts = _jquery2.default.extend(
        {},
        this.defaults,
        instance.options.scale
      );
      var scale = opts.scale;
      scale.values = [];
      scale.values.push(instance.min);
      var part = (instance.max - instance.min) / (scale.valuesNumber - 1);
      for (var j = 1; j <= scale.valuesNumber - 2; j++) {
        scale.values.push(part * j);
      }
      scale.values.push(instance.max);
      var classes = {
        scale: instance.namespace + '-scale',
        lines: instance.namespace + '-scale-lines',
        grid: instance.namespace + '-scale-grid',
        inlineGrid: instance.namespace + '-scale-inlineGrid',
        values: instance.namespace + '-scale-values'
      };

      var len = scale.values.length;
      var num =
        ((scale.grid - 1) * (scale.gap + 1) + scale.gap) * (len - 1) + len;
      var perOfGrid = 100 / (num - 1);
      var perOfValue = 100 / (len - 1);

      this.$scale = (0, _jquery2.default)('<div></div>').addClass(
        classes.scale
      );
      this.$lines = (0, _jquery2.default)('<ul></ul>').addClass(classes.lines);
      this.$values = (0, _jquery2.default)('<ul></ul>').addClass(
        classes.values
      );

      for (var i = 0; i < num; i++) {
        var $list = void 0;
        if (i === 0 || i === num || i % ((num - 1) / (len - 1)) === 0) {
          $list = (0, _jquery2.default)(
            '<li class="' + classes.grid + '"></li>'
          );
        } else if (i % scale.grid === 0) {
          $list = (0, _jquery2.default)(
            '<li class="' + classes.inlineGrid + '"></li>'
          );
        } else {
          $list = (0, _jquery2.default)('<li></li>');
        }

        // position scale
        $list
          .css({
            left: perOfGrid * i + '%'
          })
          .appendTo(this.$lines);
      }

      for (var v = 0; v < len; v++) {
        // position value
        (0, _jquery2.default)('<li><span>' + scale.values[v] + '</span></li>')
          .css({
            left: perOfValue * v + '%'
          })
          .appendTo(this.$values);
      }

      this.$lines.add(this.$values).appendTo(this.$scale);
      this.$scale.appendTo(instance.$wrap);
    },
    update: function update(instance) {
      this.$scale.remove();
      this.init(instance);
    }
  };

  var selected = {
    defaults: {},
    init: function init(instance) {
      var _this = this;

      this.$arrow = (0, _jquery2.default)('<span></span>').appendTo(
        instance.$wrap
      );
      this.$arrow.addClass(instance.namespace + '-selected');

      if (instance.options.range === false) {
        instance.p1.$element.on(instance.namespace + '::move', function(
          e,
          pointer
        ) {
          _this.$arrow.css({
            left: 0,
            width: pointer.getPercent() + '%'
          });
        });
      }

      if (instance.options.range === true) {
        var onUpdate = function onUpdate() {
          var width = instance.p2.getPercent() - instance.p1.getPercent();
          var left = void 0;
          if (width >= 0) {
            left = instance.p1.getPercent();
          } else {
            width = -width;
            left = instance.p2.getPercent();
          }
          _this.$arrow.css({
            left: left + '%',
            width: width + '%'
          });
        };
        instance.p1.$element.on(instance.namespace + '::move', onUpdate);
        instance.p2.$element.on(instance.namespace + '::move', onUpdate);
      }
    }
  };

  var tip = {
    defaults: {
      active: 'always' // 'always' 'onMove'
    },
    init: function init(instance) {
      var that = this;
      var opts = _jquery2.default.extend(
        {},
        this.defaults,
        instance.options.tip
      );

      this.opts = opts;
      this.classes = {
        tip: instance.namespace + '-tip',
        show: instance.namespace + '-tip-show'
      };
      _jquery2.default.each(instance.pointer, function(i, p) {
        var $tip = (0, _jquery2.default)('<span></span>').appendTo(
          instance.pointer[i].$element
        );

        $tip.addClass(that.classes.tip);
        if (that.opts.active === 'onMove') {
          $tip.css({
            display: 'none'
          });
          p.$element
            .on(instance.namespace + '::moveEnd', function() {
              that.hide($tip);
              return false;
            })
            .on(instance.namespace + '::moveStart', function() {
              that.show($tip);
              return false;
            });
        }
        p.$element.on(instance.namespace + '::move', function() {
          var value = void 0;
          if (instance.options.range) {
            value = instance.get()[i];
          } else {
            value = instance.get();
          }
          if (typeof instance.options.format === 'function') {
            if (instance.options.replaceFirst && typeof value !== 'number') {
              if (typeof instance.options.replaceFirst === 'string') {
                value = instance.options.replaceFirst;
              }
              if (_typeof(instance.options.replaceFirst) === 'object') {
                for (var key in instance.options.replaceFirst) {
                  if (
                    Object.hasOwnProperty(instance.options.replaceFirst, key)
                  ) {
                    value = instance.options.replaceFirst[key];
                  }
                }
              }
            } else {
              value = instance.options.format(value);
            }
          }
          $tip.text(value);
          return false;
        });
      });
    },
    show: function show($tip) {
      $tip.addClass(this.classes.show);
      $tip.css({
        display: 'block'
      });
    },
    hide: function hide($tip) {
      $tip.removeClass(this.classes.show);
      $tip.css({
        display: 'none'
      });
    }
  };

  var keyboard = function keyboard() {
    var $doc = (0, _jquery2.default)(document);

    $doc.on('asRange::ready', function(event, instance) {
      var step = void 0;

      var keyboard = {
        keys: {
          UP: 38,
          DOWN: 40,
          LEFT: 37,
          RIGHT: 39,
          RETURN: 13,
          ESCAPE: 27,
          BACKSPACE: 8,
          SPACE: 32
        },
        map: {},
        bound: false,
        press: function press(e) {
          /* eslint consistent-return: "off"*/
          var key = e.keyCode || e.which;
          if (key in keyboard.map && typeof keyboard.map[key] === 'function') {
            keyboard.map[key](e);
            return false;
          }
        },
        attach: function attach(map) {
          var key = void 0;
          var up = void 0;
          for (key in map) {
            if (map.hasOwnProperty(key)) {
              up = key.toUpperCase();
              if (up in keyboard.keys) {
                keyboard.map[keyboard.keys[up]] = map[key];
              } else {
                keyboard.map[up] = map[key];
              }
            }
          }
          if (!keyboard.bound) {
            keyboard.bound = true;
            $doc.bind('keydown', keyboard.press);
          }
        },
        detach: function detach() {
          keyboard.bound = false;
          keyboard.map = {};
          $doc.unbind('keydown', keyboard.press);
        }
      };

      if (instance.options.keyboard === true) {
        _jquery2.default.each(instance.pointer, function(i, p) {
          if (instance.options.step) {
            step = instance.options.step;
          } else {
            step = 1;
          }
          var left = function left() {
            var value = p.value;
            p.set(value - step);
          };
          var right = function right() {
            var value = p.value;
            p.set(value + step);
          };
          p.$element
            .attr('tabindex', '0')
            .on('focus', function() {
              keyboard.attach({
                left: left,
                right: right
              });
              return false;
            })
            .on('blur', function() {
              keyboard.detach();
              return false;
            });
        });
      }
    });
  };

  var components = {};

  /**
   * Plugin constructor
   **/

  var asRange = (function() {
    function asRange(element, options) {
      var _this2 = this;

      _classCallCheck(this, asRange);

      var metas = {};
      this.element = element;
      this.$element = (0, _jquery2.default)(element);

      if (this.$element.is('input')) {
        var value = this.$element.val();

        if (typeof value === 'string') {
          metas.value = value.split(',');
        }

        _jquery2.default.each(['min', 'max', 'step'], function(index, key) {
          var val = parseFloat(_this2.$element.attr(key));
          if (!isNaN(val)) {
            metas[key] = val;
          }
        });

        this.$element.css({
          display: 'none'
        });
        this.$wrap = (0, _jquery2.default)('<div></div>');
        this.$element.after(this.$wrap);
      } else {
        this.$wrap = this.$element;
      }

      this.options = _jquery2.default.extend(
        {},
        DEFAULTS,
        options,
        this.$element.data(),
        metas
      );
      this.namespace = this.options.namespace;
      this.components = _jquery2.default.extend(true, {}, components);
      if (this.options.range) {
        this.options.replaceFirst = false;
      }

      // public properties
      this.value = this.options.value;
      if (this.value === null) {
        this.value = this.options.min;
      }

      if (!this.options.range) {
        if (_jquery2.default.isArray(this.value)) {
          this.value = this.value[0];
        }
      } else if (!_jquery2.default.isArray(this.value)) {
        this.value = [this.value, this.value];
      } else if (this.value.length === 1) {
        this.value[1] = this.value[0];
      }

      this.min = this.options.min;
      this.max = this.options.max;
      this.step = this.options.step;
      this.interval = this.max - this.min;

      // flag
      this.initialized = false;
      this.updating = false;
      this.disabled = false;

      if (this.options.direction === 'v') {
        this.direction = {
          axis: 'pageY',
          position: 'top'
        };
      } else {
        this.direction = {
          axis: 'pageX',
          position: 'left'
        };
      }

      this.$wrap.addClass(this.namespace);

      if (this.options.skin) {
        this.$wrap.addClass(this.namespace + '_' + this.options.skin);
      }

      if (this.max < this.min || this.step >= this.interval) {
        throw new Error('error options about max min step');
      }

      this.init();
    }

    _createClass(
      asRange,
      [
        {
          key: 'init',
          value: function init() {
            this.$wrap.append('<div class="' + this.namespace + '-bar" />');

            // build pointers
            this.buildPointers();

            // initial components
            this.components.selected.init(this);

            if (this.options.tip !== false) {
              this.components.tip.init(this);
            }
            if (this.options.scale !== false) {
              this.components.scale.init(this);
            }

            // initial pointer value
            this.set(this.value);

            // Bind events
            this.bindEvents();

            this._trigger('ready');
            this.initialized = true;
          }
        },
        {
          key: '_trigger',
          value: function _trigger(eventType) {
            for (
              var _len = arguments.length,
                params = Array(_len > 1 ? _len - 1 : 0),
                _key = 1;
              _key < _len;
              _key++
            ) {
              params[_key - 1] = arguments[_key];
            }

            var data = [this].concat(params);

            // event
            this.$element.trigger(this.namespace + '::' + eventType, data);

            // callback
            eventType = eventType.replace(/\b\w+\b/g, function(word) {
              return word.substring(0, 1).toUpperCase() + word.substring(1);
            });
            var onFunction = 'on' + eventType;

            if (typeof this.options[onFunction] === 'function') {
              this.options[onFunction].apply(this, params);
            }
          }
        },
        {
          key: 'buildPointers',
          value: function buildPointers() {
            this.pointer = [];
            var pointerCount = 1;
            if (this.options.range) {
              pointerCount = 2;
            }
            for (var i = 1; i <= pointerCount; i++) {
              var $pointer = (0, _jquery2.default)(
                '<div class="' +
                  this.namespace +
                  '-pointer ' +
                  this.namespace +
                  '-pointer-' +
                  i +
                  '"></div>'
              ).appendTo(this.$wrap);
              var p = new Pointer($pointer, i, this);
              this.pointer.push(p);
            }

            // alias of pointer
            this.p1 = this.pointer[0];

            if (this.options.range) {
              this.p2 = this.pointer[1];
            }
          }
        },
        {
          key: 'bindEvents',
          value: function bindEvents() {
            var _this3 = this;

            var that = this;
            this.$wrap.on('touchstart.asRange mousedown.asRange', function(
              event
            ) {
              /* eslint consistent-return: "off"*/
              if (that.disabled === true) {
                return;
              }
              event = getEventObject(event);
              var rightclick = event.which
                ? event.which === 3
                : event.button === 2;
              if (rightclick) {
                return false;
              }

              var offset = that.$wrap.offset();
              var start =
                event[that.direction.axis] - offset[that.direction.position];
              var p = that.getAdjacentPointer(start);

              p.mousedown(event);
              return false;
            });

            if (this.$element.is('input')) {
              this.$element.on(this.namespace + '::change', function() {
                var value = _this3.get();
                _this3.$element.val(value);
              });
            }

            _jquery2.default.each(this.pointer, function(i, p) {
              p.$element.on(_this3.namespace + '::move', function() {
                that.value = that.get();
                if (!that.initialized || that.updating) {
                  return false;
                }
                that._trigger('change', that.value);
                return false;
              });
            });
          }
        },
        {
          key: 'getValueFromPosition',
          value: function getValueFromPosition(px) {
            if (px > 0) {
              return this.min + px / this.getLength() * this.interval;
            }
            return 0;
          }
        },
        {
          key: 'getAdjacentPointer',
          value: function getAdjacentPointer(start) {
            var value = this.getValueFromPosition(start);
            if (this.options.range) {
              var p1 = this.p1.value;
              var p2 = this.p2.value;
              var diff = Math.abs(p1 - p2);
              if (p1 <= p2) {
                if (value > p1 + diff / 2) {
                  return this.p2;
                }
                return this.p1;
              }

              if (value > p2 + diff / 2) {
                return this.p1;
              }

              return this.p2;
            }
            return this.p1;
          }
        },
        {
          key: 'getLength',
          value: function getLength() {
            if (this.options.direction === 'v') {
              return this.$wrap.height();
            }
            return this.$wrap.width();
          }
        },
        {
          key: 'update',
          value: function update(options) {
            var _this4 = this;

            this.updating = true;
            _jquery2.default.each(
              ['max', 'min', 'step', 'limit', 'value'],
              function(key, value) {
                if (options[value]) {
                  _this4[value] = options[value];
                }
              }
            );
            if (options.max || options.min) {
              this.setInterval(options.min, options.max);
            }

            if (!options.value) {
              this.value = options.min;
            }

            _jquery2.default.each(this.components, function(key, value) {
              if (typeof value.update === 'function') {
                value.update(_this4);
              }
            });

            this.set(this.value);

            this._trigger('update');

            this.updating = false;
          }
        },
        {
          key: 'get',
          value: function get() {
            var value = [];

            _jquery2.default.each(this.pointer, function(i, p) {
              value[i] = p.get();
            });

            if (this.options.range) {
              return value;
            }

            if (value[0] === this.options.min) {
              if (typeof this.options.replaceFirst === 'string') {
                value[0] = this.options.replaceFirst;
              }
              if (_typeof(this.options.replaceFirst) === 'object') {
                for (var key in this.options.replaceFirst) {
                  if (Object.hasOwnProperty(this.options.replaceFirst, key)) {
                    value[0] = key;
                  }
                }
              }
            }

            return value[0];
          }
        },
        {
          key: 'set',
          value: function set(value) {
            if (this.options.range) {
              if (typeof value === 'number') {
                value = [value];
              }
              if (!_jquery2.default.isArray(value)) {
                return;
              }
              _jquery2.default.each(this.pointer, function(i, p) {
                p.set(value[i]);
              });
            } else {
              this.p1.set(value);
            }

            this.value = value;
          }
        },
        {
          key: 'val',
          value: function val(value) {
            if (value) {
              this.set(value);
              return this;
            }
            return this.get();
          }
        },
        {
          key: 'setInterval',
          value: function setInterval(start, end) {
            this.min = start;
            this.max = end;
            this.interval = end - start;
          }
        },
        {
          key: 'enable',
          value: function enable() {
            this.disabled = false;
            this.$wrap.removeClass(this.namespace + '_disabled');

            this._trigger('enable');
            return this;
          }
        },
        {
          key: 'disable',
          value: function disable() {
            this.disabled = true;
            this.$wrap.addClass(this.namespace + '_disabled');

            this._trigger('disable');
            return this;
          }
        },
        {
          key: 'destroy',
          value: function destroy() {
            _jquery2.default.each(this.pointer, function(i, p) {
              p.destroy();
            });
            this.$wrap.destroy();

            this._trigger('destroy');
          }
        }
      ],
      [
        {
          key: 'registerComponent',
          value: function registerComponent(component, methods) {
            components[component] = methods;
          }
        },
        {
          key: 'setDefaults',
          value: function setDefaults(options) {
            _jquery2.default.extend(
              DEFAULTS,
              _jquery2.default.isPlainObject(options) && options
            );
          }
        }
      ]
    );

    return asRange;
  })();

  asRange.registerComponent('scale', scale);
  asRange.registerComponent('selected', selected);
  asRange.registerComponent('tip', tip);
  keyboard();

  var info = {
    version: '0.3.4'
  };

  var NAMESPACE = 'asRange';
  var OtherAsRange = _jquery2.default.fn.asRange;

  function jQueryAsRange(options) {
    for (
      var _len2 = arguments.length,
        args = Array(_len2 > 1 ? _len2 - 1 : 0),
        _key2 = 1;
      _key2 < _len2;
      _key2++
    ) {
      args[_key2 - 1] = arguments[_key2];
    }

    if (typeof options === 'string') {
      var method = options;

      if (/^_/.test(method)) {
        return false;
      } else if (
        /^(get)$/.test(method) ||
        (method === 'val' && args.length === 0)
      ) {
        var instance = this.first().data(NAMESPACE);
        if (instance && typeof instance[method] === 'function') {
          return instance[method].apply(instance, args);
        }
      } else {
        return this.each(function() {
          var instance = _jquery2.default.data(this, NAMESPACE);
          if (instance && typeof instance[method] === 'function') {
            instance[method].apply(instance, args);
          }
        });
      }
    }

    return this.each(function() {
      if (!(0, _jquery2.default)(this).data(NAMESPACE)) {
        (0, _jquery2.default)(this).data(NAMESPACE, new asRange(this, options));
      }
    });
  }

  _jquery2.default.fn.asRange = jQueryAsRange;

  _jquery2.default.asRange = _jquery2.default.extend(
    {
      setDefaults: asRange.setDefaults,
      noConflict: function noConflict() {
        _jquery2.default.fn.asRange = OtherAsRange;
        return jQueryAsRange;
      }
    },
    info
  );
});

/*! jQuery Validation Plugin - v1.16.0 - 12/2/2016
 * http://jqueryvalidation.org/
 * Copyright (c) 2016 JÃ¶rn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){a.extend(a.fn,{validate:function(b){if(!this.length)return void(b&&b.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."));var c=a.data(this[0],"validator");return c?c:(this.attr("novalidate","novalidate"),c=new a.validator(b,this[0]),a.data(this[0],"validator",c),c.settings.onsubmit&&(this.on("click.validate",":submit",function(b){c.settings.submitHandler&&(c.submitButton=b.target),a(this).hasClass("cancel")&&(c.cancelSubmit=!0),void 0!==a(this).attr("formnovalidate")&&(c.cancelSubmit=!0)}),this.on("submit.validate",function(b){function d(){var d,e;return!c.settings.submitHandler||(c.submitButton&&(d=a("<input type='hidden'/>").attr("name",c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)),e=c.settings.submitHandler.call(c,c.currentForm,b),c.submitButton&&d.remove(),void 0!==e&&e)}return c.settings.debug&&b.preventDefault(),c.cancelSubmit?(c.cancelSubmit=!1,d()):c.form()?c.pendingRequest?(c.formSubmitted=!0,!1):d():(c.focusInvalid(),!1)})),c)},valid:function(){var b,c,d;return a(this[0]).is("form")?b=this.validate().form():(d=[],b=!0,c=a(this[0].form).validate(),this.each(function(){b=c.element(this)&&b,b||(d=d.concat(c.errorList))}),c.errorList=d),b},rules:function(b,c){var d,e,f,g,h,i,j=this[0];if(null!=j&&null!=j.form){if(b)switch(d=a.data(j.form,"validator").settings,e=d.rules,f=a.validator.staticRules(j),b){case"add":a.extend(f,a.validator.normalizeRule(c)),delete f.messages,e[j.name]=f,c.messages&&(d.messages[j.name]=a.extend(d.messages[j.name],c.messages));break;case"remove":return c?(i={},a.each(c.split(/\s/),function(b,c){i[c]=f[c],delete f[c],"required"===c&&a(j).removeAttr("aria-required")}),i):(delete e[j.name],f)}return g=a.validator.normalizeRules(a.extend({},a.validator.classRules(j),a.validator.attributeRules(j),a.validator.dataRules(j),a.validator.staticRules(j)),j),g.required&&(h=g.required,delete g.required,g=a.extend({required:h},g),a(j).attr("aria-required","true")),g.remote&&(h=g.remote,delete g.remote,g=a.extend(g,{remote:h})),g}}}),a.extend(a.expr.pseudos||a.expr[":"],{blank:function(b){return!a.trim(""+a(b).val())},filled:function(b){var c=a(b).val();return null!==c&&!!a.trim(""+c)},unchecked:function(b){return!a(b).prop("checked")}}),a.validator=function(b,c){this.settings=a.extend(!0,{},a.validator.defaults,b),this.currentForm=c,this.init()},a.validator.format=function(b,c){return 1===arguments.length?function(){var c=a.makeArray(arguments);return c.unshift(b),a.validator.format.apply(this,c)}:void 0===c?b:(arguments.length>2&&c.constructor!==Array&&(c=a.makeArray(arguments).slice(1)),c.constructor!==Array&&(c=[c]),a.each(c,function(a,c){b=b.replace(new RegExp("\\{"+a+"\\}","g"),function(){return c})}),b)},a.extend(a.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",pendingClass:"pending",validClass:"valid",errorElement:"label",focusCleanup:!1,focusInvalid:!0,errorContainer:a([]),errorLabelContainer:a([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(a){this.lastActive=a,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,a,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(a)))},onfocusout:function(a){this.checkable(a)||!(a.name in this.submitted)&&this.optional(a)||this.element(a)},onkeyup:function(b,c){var d=[16,17,18,20,35,36,37,38,39,40,45,144,225];9===c.which&&""===this.elementValue(b)||a.inArray(c.keyCode,d)!==-1||(b.name in this.submitted||b.name in this.invalid)&&this.element(b)},onclick:function(a){a.name in this.submitted?this.element(a):a.parentNode.name in this.submitted&&this.element(a.parentNode)},highlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).addClass(c).removeClass(d):a(b).addClass(c).removeClass(d)},unhighlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).removeClass(c).addClass(d):a(b).removeClass(c).addClass(d)}},setDefaults:function(b){a.extend(a.validator.defaults,b)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",equalTo:"Please enter the same value again.",maxlength:a.validator.format("Please enter no more than {0} characters."),minlength:a.validator.format("Please enter at least {0} characters."),rangelength:a.validator.format("Please enter a value between {0} and {1} characters long."),range:a.validator.format("Please enter a value between {0} and {1}."),max:a.validator.format("Please enter a value less than or equal to {0}."),min:a.validator.format("Please enter a value greater than or equal to {0}."),step:a.validator.format("Please enter a multiple of {0}.")},autoCreateRanges:!1,prototype:{init:function(){function b(b){!this.form&&this.hasAttribute("contenteditable")&&(this.form=a(this).closest("form")[0]);var c=a.data(this.form,"validator"),d="on"+b.type.replace(/^validate/,""),e=c.settings;e[d]&&!a(this).is(e.ignore)&&e[d].call(c,this,b)}this.labelContainer=a(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||a(this.currentForm),this.containers=a(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var c,d=this.groups={};a.each(this.settings.groups,function(b,c){"string"==typeof c&&(c=c.split(/\s/)),a.each(c,function(a,c){d[c]=b})}),c=this.settings.rules,a.each(c,function(b,d){c[b]=a.validator.normalizeRule(d)}),a(this.currentForm).on("focusin.validate focusout.validate keyup.validate",":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']",b).on("click.validate","select, option, [type='radio'], [type='checkbox']",b),this.settings.invalidHandler&&a(this.currentForm).on("invalid-form.validate",this.settings.invalidHandler),a(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required","true")},form:function(){return this.checkForm(),a.extend(this.submitted,this.errorMap),this.invalid=a.extend({},this.errorMap),this.valid()||a(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var a=0,b=this.currentElements=this.elements();b[a];a++)this.check(b[a]);return this.valid()},element:function(b){var c,d,e=this.clean(b),f=this.validationTargetFor(e),g=this,h=!0;return void 0===f?delete this.invalid[e.name]:(this.prepareElement(f),this.currentElements=a(f),d=this.groups[f.name],d&&a.each(this.groups,function(a,b){b===d&&a!==f.name&&(e=g.validationTargetFor(g.clean(g.findByName(a))),e&&e.name in g.invalid&&(g.currentElements.push(e),h=g.check(e)&&h))}),c=this.check(f)!==!1,h=h&&c,c?this.invalid[f.name]=!1:this.invalid[f.name]=!0,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),a(b).attr("aria-invalid",!c)),h},showErrors:function(b){if(b){var c=this;a.extend(this.errorMap,b),this.errorList=a.map(this.errorMap,function(a,b){return{message:a,element:c.findByName(b)[0]}}),this.successList=a.grep(this.successList,function(a){return!(a.name in b)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){a.fn.resetForm&&a(this.currentForm).resetForm(),this.invalid={},this.submitted={},this.prepareForm(),this.hideErrors();var b=this.elements().removeData("previousValue").removeAttr("aria-invalid");this.resetElements(b)},resetElements:function(a){var b;if(this.settings.unhighlight)for(b=0;a[b];b++)this.settings.unhighlight.call(this,a[b],this.settings.errorClass,""),this.findByName(a[b].name).removeClass(this.settings.validClass);else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(a){var b,c=0;for(b in a)a[b]&&c++;return c},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(a){a.not(this.containers).text(""),this.addWrapper(a).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{a(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(b){}},findLastActive:function(){var b=this.lastActive;return b&&1===a.grep(this.errorList,function(a){return a.element.name===b.name}).length&&b},elements:function(){var b=this,c={};return a(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function(){var d=this.name||a(this).attr("name");return!d&&b.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.hasAttribute("contenteditable")&&(this.form=a(this).closest("form")[0]),!(d in c||!b.objectLength(a(this).rules()))&&(c[d]=!0,!0)})},clean:function(b){return a(b)[0]},errors:function(){var b=this.settings.errorClass.split(" ").join(".");return a(this.settings.errorElement+"."+b,this.errorContext)},resetInternals:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=a([]),this.toHide=a([])},reset:function(){this.resetInternals(),this.currentElements=a([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(a){this.reset(),this.toHide=this.errorsFor(a)},elementValue:function(b){var c,d,e=a(b),f=b.type;return"radio"===f||"checkbox"===f?this.findByName(b.name).filter(":checked").val():"number"===f&&"undefined"!=typeof b.validity?b.validity.badInput?"NaN":e.val():(c=b.hasAttribute("contenteditable")?e.text():e.val(),"file"===f?"C:\\fakepath\\"===c.substr(0,12)?c.substr(12):(d=c.lastIndexOf("/"),d>=0?c.substr(d+1):(d=c.lastIndexOf("\\"),d>=0?c.substr(d+1):c)):"string"==typeof c?c.replace(/\r/g,""):c)},check:function(b){b=this.validationTargetFor(this.clean(b));var c,d,e,f=a(b).rules(),g=a.map(f,function(a,b){return b}).length,h=!1,i=this.elementValue(b);if("function"==typeof f.normalizer){if(i=f.normalizer.call(b,i),"string"!=typeof i)throw new TypeError("The normalizer should return a string value.");delete f.normalizer}for(d in f){e={method:d,parameters:f[d]};try{if(c=a.validator.methods[d].call(this,i,b,e.parameters),"dependency-mismatch"===c&&1===g){h=!0;continue}if(h=!1,"pending"===c)return void(this.toHide=this.toHide.not(this.errorsFor(b)));if(!c)return this.formatAndAdd(b,e),!1}catch(j){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+b.id+", check the '"+e.method+"' method.",j),j instanceof TypeError&&(j.message+=".  Exception occurred when checking element "+b.id+", check the '"+e.method+"' method."),j}}if(!h)return this.objectLength(f)&&this.successList.push(b),!0},customDataMessage:function(b,c){return a(b).data("msg"+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase())||a(b).data("msg")},customMessage:function(a,b){var c=this.settings.messages[a];return c&&(c.constructor===String?c:c[b])},findDefined:function(){for(var a=0;a<arguments.length;a++)if(void 0!==arguments[a])return arguments[a]},defaultMessage:function(b,c){"string"==typeof c&&(c={method:c});var d=this.findDefined(this.customMessage(b.name,c.method),this.customDataMessage(b,c.method),!this.settings.ignoreTitle&&b.title||void 0,a.validator.messages[c.method],"<strong>Warning: No message defined for "+b.name+"</strong>"),e=/\$?\{(\d+)\}/g;return"function"==typeof d?d=d.call(this,c.parameters,b):e.test(d)&&(d=a.validator.format(d.replace(e,"{$1}"),c.parameters)),d},formatAndAdd:function(a,b){var c=this.defaultMessage(a,b);this.errorList.push({message:c,element:a,method:b.method}),this.errorMap[a.name]=c,this.submitted[a.name]=c},addWrapper:function(a){return this.settings.wrapper&&(a=a.add(a.parent(this.settings.wrapper))),a},defaultShowErrors:function(){var a,b,c;for(a=0;this.errorList[a];a++)c=this.errorList[a],this.settings.highlight&&this.settings.highlight.call(this,c.element,this.settings.errorClass,this.settings.validClass),this.showLabel(c.element,c.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(a=0;this.successList[a];a++)this.showLabel(this.successList[a]);if(this.settings.unhighlight)for(a=0,b=this.validElements();b[a];a++)this.settings.unhighlight.call(this,b[a],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return a(this.errorList).map(function(){return this.element})},showLabel:function(b,c){var d,e,f,g,h=this.errorsFor(b),i=this.idOrName(b),j=a(b).attr("aria-describedby");h.length?(h.removeClass(this.settings.validClass).addClass(this.settings.errorClass),h.html(c)):(h=a("<"+this.settings.errorElement+">").attr("id",i+"-error").addClass(this.settings.errorClass).html(c||""),d=h,this.settings.wrapper&&(d=h.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(d):this.settings.errorPlacement?this.settings.errorPlacement.call(this,d,a(b)):d.insertAfter(b),h.is("label")?h.attr("for",i):0===h.parents("label[for='"+this.escapeCssMeta(i)+"']").length&&(f=h.attr("id"),j?j.match(new RegExp("\\b"+this.escapeCssMeta(f)+"\\b"))||(j+=" "+f):j=f,a(b).attr("aria-describedby",j),e=this.groups[b.name],e&&(g=this,a.each(g.groups,function(b,c){c===e&&a("[name='"+g.escapeCssMeta(b)+"']",g.currentForm).attr("aria-describedby",h.attr("id"))})))),!c&&this.settings.success&&(h.text(""),"string"==typeof this.settings.success?h.addClass(this.settings.success):this.settings.success(h,b)),this.toShow=this.toShow.add(h)},errorsFor:function(b){var c=this.escapeCssMeta(this.idOrName(b)),d=a(b).attr("aria-describedby"),e="label[for='"+c+"'], label[for='"+c+"'] *";return d&&(e=e+", #"+this.escapeCssMeta(d).replace(/\s+/g,", #")),this.errors().filter(e)},escapeCssMeta:function(a){return a.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g,"\\$1")},idOrName:function(a){return this.groups[a.name]||(this.checkable(a)?a.name:a.id||a.name)},validationTargetFor:function(b){return this.checkable(b)&&(b=this.findByName(b.name)),a(b).not(this.settings.ignore)[0]},checkable:function(a){return/radio|checkbox/i.test(a.type)},findByName:function(b){return a(this.currentForm).find("[name='"+this.escapeCssMeta(b)+"']")},getLength:function(b,c){switch(c.nodeName.toLowerCase()){case"select":return a("option:selected",c).length;case"input":if(this.checkable(c))return this.findByName(c.name).filter(":checked").length}return b.length},depend:function(a,b){return!this.dependTypes[typeof a]||this.dependTypes[typeof a](a,b)},dependTypes:{"boolean":function(a){return a},string:function(b,c){return!!a(b,c.form).length},"function":function(a,b){return a(b)}},optional:function(b){var c=this.elementValue(b);return!a.validator.methods.required.call(this,c,b)&&"dependency-mismatch"},startRequest:function(b){this.pending[b.name]||(this.pendingRequest++,a(b).addClass(this.settings.pendingClass),this.pending[b.name]=!0)},stopRequest:function(b,c){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[b.name],a(b).removeClass(this.settings.pendingClass),c&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(a(this.currentForm).submit(),this.formSubmitted=!1):!c&&0===this.pendingRequest&&this.formSubmitted&&(a(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(b,c){return c="string"==typeof c&&c||"remote",a.data(b,"previousValue")||a.data(b,"previousValue",{old:null,valid:!0,message:this.defaultMessage(b,{method:c})})},destroy:function(){this.resetForm(),a(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur")}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(b,c){b.constructor===String?this.classRuleSettings[b]=c:a.extend(this.classRuleSettings,b)},classRules:function(b){var c={},d=a(b).attr("class");return d&&a.each(d.split(" "),function(){this in a.validator.classRuleSettings&&a.extend(c,a.validator.classRuleSettings[this])}),c},normalizeAttributeRule:function(a,b,c,d){/min|max|step/.test(c)&&(null===b||/number|range|text/.test(b))&&(d=Number(d),isNaN(d)&&(d=void 0)),d||0===d?a[c]=d:b===c&&"range"!==b&&(a[c]=!0)},attributeRules:function(b){var c,d,e={},f=a(b),g=b.getAttribute("type");for(c in a.validator.methods)"required"===c?(d=b.getAttribute(c),""===d&&(d=!0),d=!!d):d=f.attr(c),this.normalizeAttributeRule(e,g,c,d);return e.maxlength&&/-1|2147483647|524288/.test(e.maxlength)&&delete e.maxlength,e},dataRules:function(b){var c,d,e={},f=a(b),g=b.getAttribute("type");for(c in a.validator.methods)d=f.data("rule"+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase()),this.normalizeAttributeRule(e,g,c,d);return e},staticRules:function(b){var c={},d=a.data(b.form,"validator");return d.settings.rules&&(c=a.validator.normalizeRule(d.settings.rules[b.name])||{}),c},normalizeRules:function(b,c){return a.each(b,function(d,e){if(e===!1)return void delete b[d];if(e.param||e.depends){var f=!0;switch(typeof e.depends){case"string":f=!!a(e.depends,c.form).length;break;case"function":f=e.depends.call(c,c)}f?b[d]=void 0===e.param||e.param:(a.data(c.form,"validator").resetElements(a(c)),delete b[d])}}),a.each(b,function(d,e){b[d]=a.isFunction(e)&&"normalizer"!==d?e(c):e}),a.each(["minlength","maxlength"],function(){b[this]&&(b[this]=Number(b[this]))}),a.each(["rangelength","range"],function(){var c;b[this]&&(a.isArray(b[this])?b[this]=[Number(b[this][0]),Number(b[this][1])]:"string"==typeof b[this]&&(c=b[this].replace(/[\[\]]/g,"").split(/[\s,]+/),b[this]=[Number(c[0]),Number(c[1])]))}),a.validator.autoCreateRanges&&(null!=b.min&&null!=b.max&&(b.range=[b.min,b.max],delete b.min,delete b.max),null!=b.minlength&&null!=b.maxlength&&(b.rangelength=[b.minlength,b.maxlength],delete b.minlength,delete b.maxlength)),b},normalizeRule:function(b){if("string"==typeof b){var c={};a.each(b.split(/\s/),function(){c[this]=!0}),b=c}return b},addMethod:function(b,c,d){a.validator.methods[b]=c,a.validator.messages[b]=void 0!==d?d:a.validator.messages[b],c.length<3&&a.validator.addClassRules(b,a.validator.normalizeRule(b))},methods:{required:function(b,c,d){if(!this.depend(d,c))return"dependency-mismatch";if("select"===c.nodeName.toLowerCase()){var e=a(c).val();return e&&e.length>0}return this.checkable(c)?this.getLength(b,c)>0:b.length>0},email:function(a,b){return this.optional(b)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a)},url:function(a,b){return this.optional(b)||/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(a)},date:function(a,b){return this.optional(b)||!/Invalid|NaN/.test(new Date(a).toString())},dateISO:function(a,b){return this.optional(b)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a)},number:function(a,b){return this.optional(b)||/^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a)},digits:function(a,b){return this.optional(b)||/^\d+$/.test(a)},minlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e>=d},maxlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e<=d},rangelength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e>=d[0]&&e<=d[1]},min:function(a,b,c){return this.optional(b)||a>=c},max:function(a,b,c){return this.optional(b)||a<=c},range:function(a,b,c){return this.optional(b)||a>=c[0]&&a<=c[1]},step:function(b,c,d){var e,f=a(c).attr("type"),g="Step attribute on input type "+f+" is not supported.",h=["text","number","range"],i=new RegExp("\\b"+f+"\\b"),j=f&&!i.test(h.join()),k=function(a){var b=(""+a).match(/(?:\.(\d+))?$/);return b&&b[1]?b[1].length:0},l=function(a){return Math.round(a*Math.pow(10,e))},m=!0;if(j)throw new Error(g);return e=k(d),(k(b)>e||l(b)%l(d)!==0)&&(m=!1),this.optional(c)||m},equalTo:function(b,c,d){var e=a(d);return this.settings.onfocusout&&e.not(".validate-equalTo-blur").length&&e.addClass("validate-equalTo-blur").on("blur.validate-equalTo",function(){a(c).valid()}),b===e.val()},remote:function(b,c,d,e){if(this.optional(c))return"dependency-mismatch";e="string"==typeof e&&e||"remote";var f,g,h,i=this.previousValue(c,e);return this.settings.messages[c.name]||(this.settings.messages[c.name]={}),i.originalMessage=i.originalMessage||this.settings.messages[c.name][e],this.settings.messages[c.name][e]=i.message,d="string"==typeof d&&{url:d}||d,h=a.param(a.extend({data:b},d.data)),i.old===h?i.valid:(i.old=h,f=this,this.startRequest(c),g={},g[c.name]=b,a.ajax(a.extend(!0,{mode:"abort",port:"validate"+c.name,dataType:"json",data:g,context:f.currentForm,success:function(a){var d,g,h,j=a===!0||"true"===a;f.settings.messages[c.name][e]=i.originalMessage,j?(h=f.formSubmitted,f.resetInternals(),f.toHide=f.errorsFor(c),f.formSubmitted=h,f.successList.push(c),f.invalid[c.name]=!1,f.showErrors()):(d={},g=a||f.defaultMessage(c,{method:e,parameters:b}),d[c.name]=i.message=g,f.invalid[c.name]=!0,f.showErrors(d)),i.valid=j,f.stopRequest(c,j)}},d)),"pending")}}});var b,c={};return a.ajaxPrefilter?a.ajaxPrefilter(function(a,b,d){var e=a.port;"abort"===a.mode&&(c[e]&&c[e].abort(),c[e]=d)}):(b=a.ajax,a.ajax=function(d){var e=("mode"in d?d:a.ajaxSettings).mode,f=("port"in d?d:a.ajaxSettings).port;return"abort"===e?(c[f]&&c[f].abort(),c[f]=b.apply(this,arguments),c[f]):b.apply(this,arguments)}),a});
window.FontAwesomeCdnConfig = {
    autoA11y: {
      enabled: true
    },
    asyncLoading: {
      enabled: true,
    },
    reporting: {
      
      enabled: true,
      domains: "localhost, *.dev, *.test, meetfornight.test"
      
    },
    useUrl: "use.fontawesome.com",
    faCdnUrl: "https://cdn.fontawesome.com:443",
    code: "1a163d64a3"
  };
  !function(){function a(a){var b,c=[],d=document,e=d.documentElement.doScroll,f="DOMContentLoaded",g=(e?/^loaded|^c/:/^loaded|^i|^c/).test(d.readyState);g||d.addEventListener(f,b=function(){for(d.removeEventListener(f,b),g=1;b=c.shift();)b()}),g?setTimeout(a,0):c.push(a)}function b(a,b){var c=!1;return a.split(",").forEach(function(a){var d=new RegExp(a.trim().replace(".","\\.").replace("*","(.*)"));b.match(d)&&(c=!0)}),c}function c(a){"undefined"!=typeof MutationObserver&&new MutationObserver(a).observe(document,{childList:!0,subtree:!0})}function d(a){var b,c,d,e;a=a||"fa",b=document.querySelectorAll("."+a),Array.prototype.forEach.call(b,function(a){c=a.getAttribute("title"),a.setAttribute("aria-hidden","true"),d=a.nextElementSibling?!a.nextElementSibling.classList.contains("sr-only"):!0,c&&d&&(e=document.createElement("span"),e.innerHTML=c,e.classList.add("sr-only"),a.parentNode.insertBefore(e,a.nextSibling))})}!function(){"use strict";function a(a){l.push(a),1==l.length&&k()}function b(){for(;l.length;)l[0](),l.shift()}function c(a){this.a=m,this.b=void 0,this.f=[];var b=this;try{a(function(a){f(b,a)},function(a){g(b,a)})}catch(c){g(b,c)}}function d(a){return new c(function(b,c){c(a)})}function e(a){return new c(function(b){b(a)})}function f(a,b){if(a.a==m){if(b==a)throw new TypeError;var c=!1;try{var d=b&&b.then;if(null!=b&&"object"==typeof b&&"function"==typeof d)return void d.call(b,function(b){c||f(a,b),c=!0},function(b){c||g(a,b),c=!0})}catch(e){return void(c||g(a,e))}a.a=0,a.b=b,h(a)}}function g(a,b){if(a.a==m){if(b==a)throw new TypeError;a.a=1,a.b=b,h(a)}}function h(b){a(function(){if(b.a!=m)for(;b.f.length;){var a=b.f.shift(),c=a[0],d=a[1],e=a[2],a=a[3];try{0==b.a?e("function"==typeof c?c.call(void 0,b.b):b.b):1==b.a&&("function"==typeof d?e(d.call(void 0,b.b)):a(b.b))}catch(f){a(f)}}})}function i(a){return new c(function(b,c){function d(c){return function(d){g[c]=d,f+=1,f==a.length&&b(g)}}var f=0,g=[];0==a.length&&b(g);for(var h=0;h<a.length;h+=1)e(a[h]).c(d(h),c)})}function j(a){return new c(function(b,c){for(var d=0;d<a.length;d+=1)e(a[d]).c(b,c)})}var k,l=[];k=function(){setTimeout(b)};var m=2;c.prototype.g=function(a){return this.c(void 0,a)},c.prototype.c=function(a,b){var d=this;return new c(function(c,e){d.f.push([a,b,c,e]),h(d)})},window.Promise||(window.Promise=c,window.Promise.resolve=e,window.Promise.reject=d,window.Promise.race=j,window.Promise.all=i,window.Promise.prototype.then=c.prototype.c,window.Promise.prototype["catch"]=c.prototype.g)}(),function(){function a(a){this.el=a;for(var b=a.className.replace(/^\s+|\s+$/g,"").split(/\s+/),c=0;c<b.length;c++)d.call(this,b[c])}function b(a,b,c){Object.defineProperty?Object.defineProperty(a,b,{get:c}):a.__defineGetter__(b,c)}if(!("undefined"==typeof window.Element||"classList"in document.documentElement)){var c=Array.prototype,d=c.push,e=c.splice,f=c.join;a.prototype={add:function(a){this.contains(a)||(d.call(this,a),this.el.className=this.toString())},contains:function(a){return-1!=this.el.className.indexOf(a)},item:function(a){return this[a]||null},remove:function(a){if(this.contains(a)){for(var b=0;b<this.length&&this[b]!=a;b++);e.call(this,b,1),this.el.className=this.toString()}},toString:function(){return f.call(this," ")},toggle:function(a){return this.contains(a)?this.remove(a):this.add(a),this.contains(a)}},window.DOMTokenList=a,b(Element.prototype,"classList",function(){return new a(this)})}}();var e=function(a,b,c){function d(a){return g.body?a():void setTimeout(function(){d(a)})}function e(){h.addEventListener&&h.removeEventListener("load",e),h.media=c||"all"}var f,g=window.document,h=g.createElement("link");if(b)f=b;else{var i=(g.body||g.getElementsByTagName("head")[0]).childNodes;f=i[i.length-1]}var j=g.styleSheets;h.rel="stylesheet",h.href=a,h.media="only x",d(function(){f.parentNode.insertBefore(h,b?f:f.nextSibling)});var k=function(a){for(var b=h.href,c=j.length;c--;)if(j[c].href===b)return a();setTimeout(function(){k(a)})};return h.addEventListener&&h.addEventListener("load",e),h.onloadcssdefined=k,k(e),h},f=null;!function(){function a(a,b){document.addEventListener?a.addEventListener("scroll",b,!1):a.attachEvent("scroll",b)}function b(a){document.body?a():document.addEventListener?document.addEventListener("DOMContentLoaded",function b(){document.removeEventListener("DOMContentLoaded",b),a()}):document.attachEvent("onreadystatechange",function c(){"interactive"!=document.readyState&&"complete"!=document.readyState||(document.detachEvent("onreadystatechange",c),a())})}function c(a){this.a=document.createElement("div"),this.a.setAttribute("aria-hidden","true"),this.a.appendChild(document.createTextNode(a)),this.b=document.createElement("span"),this.c=document.createElement("span"),this.h=document.createElement("span"),this.f=document.createElement("span"),this.g=-1,this.b.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.c.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.f.style.cssText="max-width:none;display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;font-size:16px;",this.h.style.cssText="display:inline-block;width:200%;height:200%;font-size:16px;max-width:none;",this.b.appendChild(this.h),this.c.appendChild(this.f),this.a.appendChild(this.b),this.a.appendChild(this.c)}function d(a,b){a.a.style.cssText="max-width:none;min-width:20px;min-height:20px;display:inline-block;overflow:hidden;position:absolute;width:auto;margin:0;padding:0;top:-999px;left:-999px;white-space:nowrap;font:"+b+";"}function e(a){var b=a.a.offsetWidth,c=b+100;return a.f.style.width=c+"px",a.c.scrollLeft=c,a.b.scrollLeft=a.b.scrollWidth+100,a.g!==b?(a.g=b,!0):!1}function g(b,c){function d(){var a=f;e(a)&&a.a.parentNode&&c(a.g)}var f=b;a(b.b,d),a(b.c,d),e(b)}function h(a,b){var c=b||{};this.family=a,this.style=c.style||"normal",this.weight=c.weight||"normal",this.stretch=c.stretch||"normal"}function i(){if(null===l){var a=document.createElement("div");try{a.style.font="condensed 100px sans-serif"}catch(b){}l=""!==a.style.font}return l}function j(a,b){return[a.style,a.weight,i()?a.stretch:"","100px",b].join(" ")}var k=null,l=null,m=null;h.prototype.load=function(a,e){var f=this,h=a||"BESbswy",i=e||3e3,l=(new Date).getTime();return new Promise(function(a,e){if(null===m&&(m=!!window.FontFace),m){var n=new Promise(function(a,b){function c(){(new Date).getTime()-l>=i?b():document.fonts.load(j(f,f.family),h).then(function(b){1<=b.length?a():setTimeout(c,25)},function(){b()})}c()}),o=new Promise(function(a,b){setTimeout(b,i)});Promise.race([o,n]).then(function(){a(f)},function(){e(f)})}else b(function(){function b(){var b;(b=-1!=q&&-1!=r||-1!=q&&-1!=s||-1!=r&&-1!=s)&&((b=q!=r&&q!=s&&r!=s)||(null===k&&(b=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent),k=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))),b=k&&(q==t&&r==t&&s==t||q==u&&r==u&&s==u||q==v&&r==v&&s==v)),b=!b),b&&(w.parentNode&&w.parentNode.removeChild(w),clearTimeout(x),a(f))}function m(){if((new Date).getTime()-l>=i)w.parentNode&&w.parentNode.removeChild(w),e(f);else{var a=document.hidden;!0!==a&&void 0!==a||(q=n.a.offsetWidth,r=o.a.offsetWidth,s=p.a.offsetWidth,b()),x=setTimeout(m,50)}}var n=new c(h),o=new c(h),p=new c(h),q=-1,r=-1,s=-1,t=-1,u=-1,v=-1,w=document.createElement("div"),x=0;w.dir="ltr",d(n,j(f,"sans-serif")),d(o,j(f,"serif")),d(p,j(f,"monospace")),w.appendChild(n.a),w.appendChild(o.a),w.appendChild(p.a),document.body.appendChild(w),t=n.a.offsetWidth,u=o.a.offsetWidth,v=p.a.offsetWidth,m(),g(n,function(a){q=a,b()}),d(n,j(f,'"'+f.family+'",sans-serif')),g(o,function(a){r=a,b()}),d(o,j(f,'"'+f.family+'",serif')),g(p,function(a){s=a,b()}),d(p,j(f,'"'+f.family+'",monospace'))})})},f=h}();var g={observe:function(a,b){for(var c=b.prefix,d=function(a){var b=a.weight?"-"+a.weight:"",d=a.style?"-"+a.style:"",e=a.className?"-"+a.className:"",g=a.className?"-"+a.className+b+d:"",h=document.getElementsByTagName("html")[0].classList,i=function(a){h.add(c+e+"-"+a),h.add(c+g+"-"+a)},j=function(a){h.remove(c+e+"-"+a),h.remove(c+g+"-"+a)};i("loading"),new f(a.familyName).load(a.testString).then(function(){i("ready"),j("loading")},function(){i("failed"),j("loading")})},e=0;e<a.length;e++)d(a[e])}},h={load:function(a){var b=document.createElement("link");b.href=a,b.media="all",b.rel="stylesheet",document.getElementsByTagName("head")[0].appendChild(b)},loadAsync:function(a){e(a)}},i={load:function(a){var b=document.createElement("script"),c=document.scripts[0];b.src=a,c.parentNode.appendChild(b)}};try{if(window.FontAwesomeCdnConfig){var j=window.FontAwesomeCdnConfig,k=j.useUrl,l=j.faCdnUrl,m=j.code,n="FontAwesome",o="fa",p="ï‰€",q=d.bind(d,"fa"),r=function(){};j.autoA11y.enabled&&(a(q),c(q)),j.reporting.enabled&&b(j.reporting.domains,location.host)&&i.load(l+"/js/stats.js"),cssUrl="https://"+k+"/"+m+".css",new f(n).load(p).then(function(){var a=(window.FontAwesomeHooks||{}).loaded||r;a()},r),j.asyncLoading.enabled?h.loadAsync(cssUrl):h.load(cssUrl),g.observe([{familyName:n,testString:p}],{prefix:o+"-events-icons"})}}catch(s){}}();