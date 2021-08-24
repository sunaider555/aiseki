/**
 * bxSlider v4.2.12
 * Copyright 2013-2015 Steven Wanderski
 * Written while drinking Belgian ales and listening to jazz
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */

(function(a){var b={mode:"horizontal",slideSelector:"",infiniteLoop:true,hideControlOnEnd:false,speed:500,easing:null,slideMargin:0,startSlide:0,randomStart:false,captions:false,ticker:false,tickerHover:false,adaptiveHeight:false,adaptiveHeightSpeed:500,video:false,useCSS:true,preloadImages:"visible",responsive:true,slideZIndex:50,wrapperClass:"bx-wrapper",touchEnabled:true,swipeThreshold:50,oneToOneTouch:true,preventDefaultSwipeX:true,preventDefaultSwipeY:false,ariaLive:true,ariaHidden:true,keyboardEnabled:false,pager:true,pagerType:"full",pagerShortSeparator:" / ",pagerSelector:null,buildPager:null,pagerCustom:null,controls:true,nextText:"Next",prevText:"Prev",nextSelector:null,prevSelector:null,autoControls:false,startText:"Start",stopText:"Stop",autoControlsCombine:false,autoControlsSelector:null,auto:false,pause:4000,autoStart:true,autoDirection:"next",stopAutoOnClick:false,autoHover:false,autoDelay:0,autoSlideForOnePage:false,minSlides:1,maxSlides:1,moveSlides:0,slideWidth:0,shrinkItems:false,onSliderLoad:function(){return true},onSlideBefore:function(){return true},onSlideAfter:function(){return true},onSlideNext:function(){return true},onSlidePrev:function(){return true},onSliderResize:function(){return true},onAutoChange:function(){return true}};a.fn.bxSlider=function(t){if(this.length===0){return this}if(this.length>1){this.each(function(){a(this).bxSlider(t)});return this}var h={},L=this,N=a(window).width(),Q=a(window).height();if(a(L).data("bxSlider")){return}var F=function(){if(a(L).data("bxSlider")){return}h.settings=a.extend({},b,t);h.settings.slideWidth=parseInt(h.settings.slideWidth);h.children=L.children(h.settings.slideSelector);if(h.children.length<h.settings.minSlides){h.settings.minSlides=h.children.length}if(h.children.length<h.settings.maxSlides){h.settings.maxSlides=h.children.length}if(h.settings.randomStart){h.settings.startSlide=Math.floor(Math.random()*h.children.length)}h.active={index:h.settings.startSlide};h.carousel=h.settings.minSlides>1||h.settings.maxSlides>1?true:false;if(h.carousel){h.settings.preloadImages="all"}h.minThreshold=(h.settings.minSlides*h.settings.slideWidth)+((h.settings.minSlides-1)*h.settings.slideMargin);h.maxThreshold=(h.settings.maxSlides*h.settings.slideWidth)+((h.settings.maxSlides-1)*h.settings.slideMargin);h.working=false;h.controls={};h.interval=null;h.animProp=h.settings.mode==="vertical"?"top":"left";h.usingCSS=h.settings.useCSS&&h.settings.mode!=="fade"&&(function(){var Z=document.createElement("div"),Y=["WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var X=0;X<Y.length;X++){if(Z.style[Y[X]]!==undefined){h.cssPrefix=Y[X].replace("Perspective","").toLowerCase();h.animProp="-"+h.cssPrefix+"-transform";return true}}return false}());if(h.settings.mode==="vertical"){h.settings.maxSlides=h.settings.minSlides}L.data("origStyle",L.attr("style"));L.children(h.settings.slideSelector).each(function(){a(this).data("origStyle",a(this).attr("style"))});l()};var l=function(){var X=h.children.eq(h.settings.startSlide);L.wrap('<div class="'+h.settings.wrapperClass+'"><div class="bx-viewport"></div></div>');h.viewport=L.parent();if(h.settings.ariaLive&&!h.settings.ticker){h.viewport.attr("aria-live","polite")}h.loader=a('<div class="bx-loading" />');h.viewport.prepend(h.loader);L.css({width:h.settings.mode==="horizontal"?(h.children.length*1000+215)+"%":"auto",position:"relative"});if(h.usingCSS&&h.settings.easing){L.css("-"+h.cssPrefix+"-transition-timing-function",h.settings.easing)}else{if(!h.settings.easing){h.settings.easing="swing"}}h.viewport.css({width:"100%",overflow:"hidden",position:"relative"});h.viewport.parent().css({maxWidth:P()});h.children.css({"float":h.settings.mode==="horizontal"?"left":"none",listStyle:"none",position:"relative"});h.children.css("width",G());if(h.settings.mode==="horizontal"&&h.settings.slideMargin>0){h.children.css("marginRight",h.settings.slideMargin)}if(h.settings.mode==="vertical"&&h.settings.slideMargin>0){h.children.css("marginBottom",h.settings.slideMargin)}if(h.settings.mode==="fade"){h.children.css({position:"absolute",zIndex:0,display:"none"});h.children.eq(h.settings.startSlide).css({zIndex:h.settings.slideZIndex,display:"block"})}h.controls.el=a('<div class="bx-controls" />');if(h.settings.captions){C()}h.active.last=h.settings.startSlide===y()-1;if(h.settings.video){L.fitVids()}if(h.settings.preloadImages==="all"||h.settings.ticker){X=h.children}if(!h.settings.ticker){if(h.settings.controls){j()}if(h.settings.auto&&h.settings.autoControls){O()}if(h.settings.pager){T()}if(h.settings.controls||h.settings.autoControls||h.settings.pager){h.viewport.after(h.controls.el)}}else{h.settings.pager=false}c(X,u)};var c=function(X,aa){var Z=X.find('img:not([src=""]), iframe').length,Y=0;if(Z===0){aa();return}X.find('img:not([src=""]), iframe').each(function(){a(this).one("load error",function(){if(++Y===Z){aa()}}).each(function(){if(this.complete||this.src==""){a(this).trigger("load")}})})};var u=function(){if(h.settings.infiniteLoop&&h.settings.mode!=="fade"&&!h.settings.ticker){var Z=h.settings.mode==="vertical"?h.settings.minSlides:h.settings.maxSlides,Y=h.children.slice(0,Z).clone(true).addClass("bx-clone"),X=h.children.slice(-Z).clone(true).addClass("bx-clone");if(h.settings.ariaHidden){Y.attr("aria-hidden",true);X.attr("aria-hidden",true)}L.append(Y).prepend(X)}h.loader.remove();g();if(h.settings.mode==="vertical"){h.settings.adaptiveHeight=true}h.viewport.height(n());L.redrawSlider();h.settings.onSliderLoad.call(L,h.active.index);h.initialized=true;if(h.settings.responsive){a(window).bind("resize",m)}if(h.settings.auto&&h.settings.autoStart&&(y()>1||h.settings.autoSlideForOnePage)){d()}if(h.settings.ticker){J()}if(h.settings.pager){W(h.settings.startSlide)}if(h.settings.controls){k()}if(h.settings.touchEnabled&&!h.settings.ticker){e()}if(h.settings.keyboardEnabled&&!h.settings.ticker){a(document).keydown(w)}};var n=function(){var X=0;var Z=a();if(h.settings.mode!=="vertical"&&!h.settings.adaptiveHeight){Z=h.children}else{if(!h.carousel){Z=h.children.eq(h.active.index)}else{var Y=h.settings.moveSlides===1?h.active.index:h.active.index*r();Z=h.children.eq(Y);for(i=1;i<=h.settings.maxSlides-1;i++){if(Y+i>=h.children.length){Z=Z.add(h.children.eq(i-1))}else{Z=Z.add(h.children.eq(Y+i))}}}}if(h.settings.mode==="vertical"){Z.each(function(aa){X+=a(this).outerHeight()});if(h.settings.slideMargin>0){X+=h.settings.slideMargin*(h.settings.minSlides-1)}}else{X=Math.max.apply(Math,Z.map(function(){return a(this).outerHeight(false)}).get())}if(h.viewport.css("box-sizing")==="border-box"){X+=parseFloat(h.viewport.css("padding-top"))+parseFloat(h.viewport.css("padding-bottom"))+parseFloat(h.viewport.css("border-top-width"))+parseFloat(h.viewport.css("border-bottom-width"))}else{if(h.viewport.css("box-sizing")==="padding-box"){X+=parseFloat(h.viewport.css("padding-top"))+parseFloat(h.viewport.css("padding-bottom"))}}return X};var P=function(){var X="100%";if(h.settings.slideWidth>0){if(h.settings.mode==="horizontal"){X=(h.settings.maxSlides*h.settings.slideWidth)+((h.settings.maxSlides-1)*h.settings.slideMargin)}else{X=h.settings.slideWidth}}return X};var G=function(){var Y=h.settings.slideWidth,X=h.viewport.width();if(h.settings.slideWidth===0||(h.settings.slideWidth>X&&!h.carousel)||h.settings.mode==="vertical"){Y=X}else{if(h.settings.maxSlides>1&&h.settings.mode==="horizontal"){if(X>h.maxThreshold){return Y}else{if(X<h.minThreshold){Y=(X-(h.settings.slideMargin*(h.settings.minSlides-1)))/h.settings.minSlides}else{if(h.settings.shrinkItems){Y=Math.floor((X+h.settings.slideMargin)/(Math.ceil((X+h.settings.slideMargin)/(Y+h.settings.slideMargin)))-h.settings.slideMargin)}}}}}return Y};var D=function(){var Y=1,X=null;if(h.settings.mode==="horizontal"&&h.settings.slideWidth>0){if(h.viewport.width()<h.minThreshold){Y=h.settings.minSlides}else{if(h.viewport.width()>h.maxThreshold){Y=h.settings.maxSlides}else{X=h.children.first().width()+h.settings.slideMargin;Y=Math.floor((h.viewport.width()+h.settings.slideMargin)/X)||1}}}else{if(h.settings.mode==="vertical"){Y=h.settings.minSlides}}return Y};var y=function(){var Y=0,Z=0,X=0;if(h.settings.moveSlides>0){if(h.settings.infiniteLoop){Y=Math.ceil(h.children.length/r())}else{while(Z<h.children.length){++Y;Z=X+D();X+=h.settings.moveSlides<=D()?h.settings.moveSlides:D()}return X}}else{Y=Math.ceil(h.children.length/D())}return Y};var r=function(){if(h.settings.moveSlides>0&&h.settings.moveSlides<=D()){return h.settings.moveSlides}return D()};var g=function(){var X,Z,Y;if(h.children.length>h.settings.maxSlides&&h.active.last&&!h.settings.infiniteLoop){if(h.settings.mode==="horizontal"){Z=h.children.last();X=Z.position();E(-(X.left-(h.viewport.width()-Z.outerWidth())),"reset",0)}else{if(h.settings.mode==="vertical"){Y=h.children.length-h.settings.minSlides;X=h.children.eq(Y).position();E(-X.top,"reset",0)}}}else{X=h.children.eq(h.active.index*r()).position();if(h.active.index===y()-1){h.active.last=true}if(X!==undefined){if(h.settings.mode==="horizontal"){E(-X.left,"reset",0)}else{if(h.settings.mode==="vertical"){E(-X.top,"reset",0)}}}}};var E=function(Z,Y,aa,ac){var X,ab;if(h.usingCSS){ab=h.settings.mode==="vertical"?"translate3d(0, "+Z+"px, 0)":"translate3d("+Z+"px, 0, 0)";L.css("-"+h.cssPrefix+"-transition-duration",aa/1000+"s");if(Y==="slide"){L.css(h.animProp,ab);if(aa!==0){L.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(ad){if(!a(ad.target).is(L)){return}L.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");p()})}else{p()}}else{if(Y==="reset"){L.css(h.animProp,ab)}else{if(Y==="ticker"){L.css("-"+h.cssPrefix+"-transition-timing-function","linear");L.css(h.animProp,ab);if(aa!==0){L.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",function(ad){if(!a(ad.target).is(L)){return}L.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd");E(ac.resetValue,"reset",0);x()})}else{E(ac.resetValue,"reset",0);x()}}}}}else{X={};X[h.animProp]=Z;if(Y==="slide"){L.animate(X,aa,h.settings.easing,function(){p()})}else{if(Y==="reset"){L.css(h.animProp,Z)}else{if(Y==="ticker"){L.animate(X,aa,"linear",function(){E(ac.resetValue,"reset",0);x()})}}}}};var s=function(){var aa="",X="",Z=y();for(var Y=0;Y<Z;Y++){X="";if(h.settings.buildPager&&a.isFunction(h.settings.buildPager)||h.settings.pagerCustom){X=h.settings.buildPager(Y);h.pagerEl.addClass("bx-custom-pager")}else{X=Y+1;h.pagerEl.addClass("bx-default-pager")}aa+='<div class="bx-pager-item"><a href="" data-slide-index="'+Y+'" class="bx-pager-link">'+X+"</a></div>"}h.pagerEl.html(aa)};var T=function(){if(!h.settings.pagerCustom){h.pagerEl=a('<div class="bx-pager" />');if(h.settings.pagerSelector){a(h.settings.pagerSelector).html(h.pagerEl)}else{h.controls.el.addClass("bx-has-pager").append(h.pagerEl)}s()}else{h.pagerEl=a(h.settings.pagerCustom)}h.pagerEl.on("click touchend","a",A)};var j=function(){h.controls.next=a('<a class="bx-next" href="">'+h.settings.nextText+"</a>");h.controls.prev=a('<a class="bx-prev" href="">'+h.settings.prevText+"</a>");h.controls.next.bind("click touchend",f);h.controls.prev.bind("click touchend",S);if(h.settings.nextSelector){a(h.settings.nextSelector).append(h.controls.next)}if(h.settings.prevSelector){a(h.settings.prevSelector).append(h.controls.prev)}if(!h.settings.nextSelector&&!h.settings.prevSelector){h.controls.directionEl=a('<div class="bx-controls-direction" />');h.controls.directionEl.append(h.controls.prev).append(h.controls.next);h.controls.el.addClass("bx-has-controls-direction").append(h.controls.directionEl)}};var O=function(){h.controls.start=a('<div class="bx-controls-auto-item"><a class="bx-start" href="">'+h.settings.startText+"</a></div>");h.controls.stop=a('<div class="bx-controls-auto-item"><a class="bx-stop" href="">'+h.settings.stopText+"</a></div>");h.controls.autoEl=a('<div class="bx-controls-auto" />');h.controls.autoEl.on("click",".bx-start",z);h.controls.autoEl.on("click",".bx-stop",U);if(h.settings.autoControlsCombine){h.controls.autoEl.append(h.controls.start)}else{h.controls.autoEl.append(h.controls.start).append(h.controls.stop)}if(h.settings.autoControlsSelector){a(h.settings.autoControlsSelector).html(h.controls.autoEl)}else{h.controls.el.addClass("bx-has-controls-auto").append(h.controls.autoEl)}K(h.settings.autoStart?"stop":"start")};var C=function(){h.children.each(function(X){var Y=a(this).find("img:first").attr("title");if(Y!==undefined&&(""+Y).length){a(this).append('<div class="bx-caption"><span>'+Y+"</span></div>")}})};var f=function(X){X.preventDefault();if(h.controls.el.hasClass("disabled")){return}if(h.settings.auto&&h.settings.stopAutoOnClick){L.stopAuto()}L.goToNextSlide()};var S=function(X){X.preventDefault();if(h.controls.el.hasClass("disabled")){return}if(h.settings.auto&&h.settings.stopAutoOnClick){L.stopAuto()}L.goToPrevSlide()};var z=function(X){L.startAuto();X.preventDefault()};var U=function(X){L.stopAuto();X.preventDefault()};var A=function(Z){var Y,X;Z.preventDefault();if(h.controls.el.hasClass("disabled")){return}if(h.settings.auto&&h.settings.stopAutoOnClick){L.stopAuto()}Y=a(Z.currentTarget);if(Y.attr("data-slide-index")!==undefined){X=parseInt(Y.attr("data-slide-index"));if(X!==h.active.index){L.goToSlide(X)}}};var W=function(Y){var X=h.children.length;if(h.settings.pagerType==="short"){if(h.settings.maxSlides>1){X=Math.ceil(h.children.length/h.settings.maxSlides)}h.pagerEl.html((Y+1)+h.settings.pagerShortSeparator+X);return}h.pagerEl.find("a").removeClass("active");h.pagerEl.each(function(Z,aa){a(aa).find("a").eq(Y).addClass("active")})};var p=function(){if(h.settings.infiniteLoop){var X="";if(h.active.index===0){X=h.children.eq(0).position()}else{if(h.active.index===y()-1&&h.carousel){X=h.children.eq((y()-1)*r()).position()}else{if(h.active.index===h.children.length-1){X=h.children.eq(h.children.length-1).position()}}}if(X){if(h.settings.mode==="horizontal"){E(-X.left,"reset",0)}else{if(h.settings.mode==="vertical"){E(-X.top,"reset",0)}}}}h.working=false;h.settings.onSlideAfter.call(L,h.children.eq(h.active.index),h.oldIndex,h.active.index)};var K=function(X){if(h.settings.autoControlsCombine){h.controls.autoEl.html(h.controls[X])}else{h.controls.autoEl.find("a").removeClass("active");h.controls.autoEl.find("a:not(.bx-"+X+")").addClass("active")}};var k=function(){if(y()===1){h.controls.prev.addClass("disabled");h.controls.next.addClass("disabled")}else{if(!h.settings.infiniteLoop&&h.settings.hideControlOnEnd){if(h.active.index===0){h.controls.prev.addClass("disabled");h.controls.next.removeClass("disabled")}else{if(h.active.index===y()-1){h.controls.next.addClass("disabled");h.controls.prev.removeClass("disabled")}else{h.controls.prev.removeClass("disabled");h.controls.next.removeClass("disabled")}}}}};var o=function(){L.startAuto()};var q=function(){L.stopAuto()};var d=function(){if(h.settings.autoDelay>0){var X=setTimeout(L.startAuto,h.settings.autoDelay)}else{L.startAuto();a(window).focus(o).blur(q)}if(h.settings.autoHover){L.hover(function(){if(h.interval){L.stopAuto(true);h.autoPaused=true}},function(){if(h.autoPaused){L.startAuto(true);h.autoPaused=null}})}};var J=function(){var Y=0,Z,X,ad,ae,ac,af,ab,aa;if(h.settings.autoDirection==="next"){L.append(h.children.clone().addClass("bx-clone"))}else{L.prepend(h.children.clone().addClass("bx-clone"));Z=h.children.first().position();Y=h.settings.mode==="horizontal"?-Z.left:-Z.top}E(Y,"reset",0);h.settings.pager=false;h.settings.controls=false;h.settings.autoControls=false;if(h.settings.tickerHover){if(h.usingCSS){ae=h.settings.mode==="horizontal"?4:5;h.viewport.hover(function(){X=L.css("-"+h.cssPrefix+"-transform");ad=parseFloat(X.split(",")[ae]);E(ad,"reset",0)},function(){aa=0;h.children.each(function(ag){aa+=h.settings.mode==="horizontal"?a(this).outerWidth(true):a(this).outerHeight(true)});ac=h.settings.speed/aa;af=h.settings.mode==="horizontal"?"left":"top";ab=ac*(aa-(Math.abs(parseInt(ad))));x(ab)})}else{h.viewport.hover(function(){L.stop()},function(){aa=0;h.children.each(function(ag){aa+=h.settings.mode==="horizontal"?a(this).outerWidth(true):a(this).outerHeight(true)});ac=h.settings.speed/aa;af=h.settings.mode==="horizontal"?"left":"top";ab=ac*(aa-(Math.abs(parseInt(L.css(af)))));x(ab)})}}x()};var x=function(ad){var ab=ad?ad:h.settings.speed,X={left:0,top:0},aa={left:0,top:0},Z,Y,ac;if(h.settings.autoDirection==="next"){X=L.find(".bx-clone").first().position()}else{aa=h.children.first().position()}Z=h.settings.mode==="horizontal"?-X.left:-X.top;Y=h.settings.mode==="horizontal"?-aa.left:-aa.top;ac={resetValue:Y};E(Z,"ticker",ab,ac)};var V=function(Y){var aa=a(window),X={top:aa.scrollTop(),left:aa.scrollLeft()},Z=Y.offset();X.right=X.left+aa.width();X.bottom=X.top+aa.height();Z.right=Z.left+Y.outerWidth();Z.bottom=Z.top+Y.outerHeight();return(!(X.right<Z.left||X.left>Z.right||X.bottom<Z.top||X.top>Z.bottom))};var w=function(ab){var Z=document.activeElement.tagName.toLowerCase(),Y="input|textarea",aa=new RegExp(Z,["i"]),X=aa.exec(Y);if(X==null&&V(L)){if(ab.keyCode===39){f(ab);return false}else{if(ab.keyCode===37){S(ab);return false}}}};var e=function(){h.touch={start:{x:0,y:0},end:{x:0,y:0}};h.viewport.bind("touchstart MSPointerDown pointerdown",I);h.viewport.on("click",".bxslider a",function(X){if(h.viewport.hasClass("click-disabled")){X.preventDefault();h.viewport.removeClass("click-disabled")}})};var I=function(Y){h.controls.el.addClass("disabled");if(h.working){Y.preventDefault();h.controls.el.removeClass("disabled")}else{h.touch.originalPos=L.position();var Z=Y.originalEvent,X=(typeof Z.changedTouches!=="undefined")?Z.changedTouches:[Z];h.touch.start.x=X[0].pageX;h.touch.start.y=X[0].pageY;if(h.viewport.get(0).setPointerCapture){h.pointerId=Z.pointerId;h.viewport.get(0).setPointerCapture(h.pointerId)}h.viewport.bind("touchmove MSPointerMove pointermove",M);h.viewport.bind("touchend MSPointerUp pointerup",B);h.viewport.bind("MSPointerCancel pointercancel",R)}};var R=function(X){E(h.touch.originalPos.left,"reset",0);h.controls.el.removeClass("disabled");h.viewport.unbind("MSPointerCancel pointercancel",R);h.viewport.unbind("touchmove MSPointerMove pointermove",M);h.viewport.unbind("touchend MSPointerUp pointerup",B);if(h.viewport.get(0).releasePointerCapture){h.viewport.get(0).releasePointerCapture(h.pointerId)}};var M=function(Z){var ad=Z.originalEvent,Y=(typeof ad.changedTouches!=="undefined")?ad.changedTouches:[ad],aa=Math.abs(Y[0].pageX-h.touch.start.x),ac=Math.abs(Y[0].pageY-h.touch.start.y),X=0,ab=0;if((aa*3)>ac&&h.settings.preventDefaultSwipeX){Z.preventDefault()}else{if((ac*3)>aa&&h.settings.preventDefaultSwipeY){Z.preventDefault()}}if(h.settings.mode!=="fade"&&h.settings.oneToOneTouch){if(h.settings.mode==="horizontal"){ab=Y[0].pageX-h.touch.start.x;X=h.touch.originalPos.left+ab}else{ab=Y[0].pageY-h.touch.start.y;X=h.touch.originalPos.top+ab}E(X,"reset",0)}};var B=function(Z){h.viewport.unbind("touchmove MSPointerMove pointermove",M);h.controls.el.removeClass("disabled");var ab=Z.originalEvent,Y=(typeof ab.changedTouches!=="undefined")?ab.changedTouches:[ab],X=0,aa=0;h.touch.end.x=Y[0].pageX;h.touch.end.y=Y[0].pageY;if(h.settings.mode==="fade"){aa=Math.abs(h.touch.start.x-h.touch.end.x);if(aa>=h.settings.swipeThreshold){if(h.touch.start.x>h.touch.end.x){L.goToNextSlide()}else{L.goToPrevSlide()}L.stopAuto()}}else{if(h.settings.mode==="horizontal"){aa=h.touch.end.x-h.touch.start.x;X=h.touch.originalPos.left}else{aa=h.touch.end.y-h.touch.start.y;X=h.touch.originalPos.top}if(!h.settings.infiniteLoop&&((h.active.index===0&&aa>0)||(h.active.last&&aa<0))){E(X,"reset",200)}else{if(Math.abs(aa)>=h.settings.swipeThreshold){if(aa<0){L.goToNextSlide()}else{L.goToPrevSlide()}L.stopAuto()}else{E(X,"reset",200)}}}h.viewport.unbind("touchend MSPointerUp pointerup",B);if(h.viewport.get(0).releasePointerCapture){h.viewport.get(0).releasePointerCapture(h.pointerId)}};var m=function(Y){if(!h.initialized){return}if(h.working){window.setTimeout(m,10)}else{var X=a(window).width(),Z=a(window).height();if(N!==X||Q!==Z){N=X;Q=Z;L.redrawSlider();h.settings.onSliderResize.call(L,h.active.index)}}};var v=function(Y){var X=D();if(h.settings.ariaHidden&&!h.settings.ticker){h.children.attr("aria-hidden","true");h.children.slice(Y,Y+X).attr("aria-hidden","false")}};var H=function(X){if(X<0){if(h.settings.infiniteLoop){return y()-1}else{return h.active.index}}else{if(X>=y()){if(h.settings.infiniteLoop){return 0}else{return h.active.index}}else{return X}}};L.goToSlide=function(ab,ae){var ad=true,ac=0,aa={left:0,top:0},X=null,Z,ag,af,Y;h.oldIndex=h.active.index;h.active.index=H(ab);if(h.working||h.active.index===h.oldIndex){return}h.working=true;ad=h.settings.onSlideBefore.call(L,h.children.eq(h.active.index),h.oldIndex,h.active.index);if(typeof(ad)!=="undefined"&&!ad){h.active.index=h.oldIndex;h.working=false;return}if(ae==="next"){if(!h.settings.onSlideNext.call(L,h.children.eq(h.active.index),h.oldIndex,h.active.index)){ad=false}}else{if(ae==="prev"){if(!h.settings.onSlidePrev.call(L,h.children.eq(h.active.index),h.oldIndex,h.active.index)){ad=false}}}h.active.last=h.active.index>=y()-1;if(h.settings.pager||h.settings.pagerCustom){W(h.active.index)}if(h.settings.controls){k()}if(h.settings.mode==="fade"){if(h.settings.adaptiveHeight&&h.viewport.height()!==n()){h.viewport.animate({height:n()},h.settings.adaptiveHeightSpeed)}h.children.filter(":visible").fadeOut(h.settings.speed).css({zIndex:0});h.children.eq(h.active.index).css("zIndex",h.settings.slideZIndex+1).fadeIn(h.settings.speed,function(){a(this).css("zIndex",h.settings.slideZIndex);p()})}else{if(h.settings.adaptiveHeight&&h.viewport.height()!==n()){h.viewport.animate({height:n()},h.settings.adaptiveHeightSpeed)}if(!h.settings.infiniteLoop&&h.carousel&&h.active.last){if(h.settings.mode==="horizontal"){X=h.children.eq(h.children.length-1);aa=X.position();ac=h.viewport.width()-X.outerWidth()}else{Z=h.children.length-h.settings.minSlides;aa=h.children.eq(Z).position()}}else{if(h.carousel&&h.active.last&&ae==="prev"){ag=h.settings.moveSlides===1?h.settings.maxSlides-r():((y()-1)*r())-(h.children.length-h.settings.maxSlides);X=L.children(".bx-clone").eq(ag);aa=X.position()}else{if(ae==="next"&&h.active.index===0){aa=L.find("> .bx-clone").eq(h.settings.maxSlides).position();h.active.last=false}else{if(ab>=0){Y=ab*parseInt(r());aa=h.children.eq(Y).position()}}}}if(typeof(aa)!=="undefined"){af=h.settings.mode==="horizontal"?-(aa.left-ac):-aa.top;E(af,"slide",h.settings.speed)}h.working=false}if(h.settings.ariaHidden){v(h.active.index*r())}};L.goToNextSlide=function(){if(!h.settings.infiniteLoop&&h.active.last){return}if(h.working==true){return}var X=parseInt(h.active.index)+1;L.goToSlide(X,"next")};L.goToPrevSlide=function(){if(!h.settings.infiniteLoop&&h.active.index===0){return}if(h.working==true){return}var X=parseInt(h.active.index)-1;L.goToSlide(X,"prev")};L.startAuto=function(X){if(h.interval){return}h.interval=setInterval(function(){if(h.settings.autoDirection==="next"){L.goToNextSlide()}else{L.goToPrevSlide()}},h.settings.pause);h.settings.onAutoChange.call(L,true);if(h.settings.autoControls&&X!==true){K("stop")}};L.stopAuto=function(X){if(!h.interval){return}clearInterval(h.interval);h.interval=null;h.settings.onAutoChange.call(L,false);if(h.settings.autoControls&&X!==true){K("start")}};L.getCurrentSlide=function(){return h.active.index};L.getCurrentSlideElement=function(){return h.children.eq(h.active.index)};L.getSlideElement=function(X){return h.children.eq(X)};L.getSlideCount=function(){return h.children.length};L.isWorking=function(){return h.working};L.redrawSlider=function(){h.children.add(L.find(".bx-clone")).outerWidth(G());h.viewport.css("height",n());if(!h.settings.ticker){g()}if(h.active.last){h.active.index=y()-1}if(h.active.index>=y()){h.active.last=true}if(h.settings.pager&&!h.settings.pagerCustom){s();W(h.active.index)}if(h.settings.ariaHidden){v(h.active.index*r())}};L.destroySlider=function(){if(!h.initialized){return}h.initialized=false;a(".bx-clone",this).remove();h.children.each(function(){if(a(this).data("origStyle")!==undefined){a(this).attr("style",a(this).data("origStyle"))}else{a(this).removeAttr("style")}});if(a(this).data("origStyle")!==undefined){this.attr("style",a(this).data("origStyle"))}else{a(this).removeAttr("style")}a(this).unwrap().unwrap();if(h.controls.el){h.controls.el.remove()}if(h.controls.next){h.controls.next.remove()}if(h.controls.prev){h.controls.prev.remove()}if(h.pagerEl&&h.settings.controls&&!h.settings.pagerCustom){h.pagerEl.remove()}a(".bx-caption",this).remove();if(h.controls.autoEl){h.controls.autoEl.remove()}clearInterval(h.interval);if(h.settings.responsive){a(window).unbind("resize",m)}if(h.settings.keyboardEnabled){a(document).unbind("keydown",w)}a(this).removeData("bxSlider");a(window).off("blur",q).off("focus",o)};L.reloadSlider=function(X){if(X!==undefined){t=X}L.destroySlider();F();a(L).data("bxSlider",this)};F();a(L).data("bxSlider",this);return this}})(jQuery);
