(function($){"use strict";$(".search-open-btn").on("click",function(){$(".search__popup").addClass("search-opened");});$(".search-close-btn").on("click",function(){$(".search__popup").removeClass("search-opened");});$(".job-form-open-btn").on("click",function(){$(".job__form").slideToggle("job__form");});$('.tp-custom-accordion .accordion-items').on("click",function(){$(this).addClass('tp-faq-active').siblings().removeClass('tp-faq-active');});var windowOn=$(window)
windowOn.on('load',function(){$('#loading').fadeOut(500);});if($('.tp-main-menu nav > ul > li.has-dropdown > a').length){$('.tp-main-menu nav > ul > li.has-dropdown > a').append('<i class="fal fa-angle-down"></i>');}
windowOn.on('scroll',function(){var scroll=windowOn.scrollTop();if(scroll<500){$('.scroll-to-target').removeClass('open');}else{$('.scroll-to-target').addClass('open');}});if($('.scroll-to-target').length){$(".scroll-to-target").on('click',function(){var target=$(this).attr('data-target');$('html, body').animate({scrollTop:$(target).offset().top},1000);});}
if($('.scroll-to-target-2').length){$(".scroll-to-target-2").on('click',function(){var target=$(this).attr('data-target');$('html, body').animate({scrollTop:$(target).offset().top},1000);});}
function smoothSctollTop(){$('.smooth a').on('click',function(event){var target=$(this.getAttribute('href'));if(target.length){event.preventDefault();$('html, body').stop().animate({scrollTop:target.offset().top-150},1000);}});}
smoothSctollTop();windowOn.on('load',function(){$("#loading").fadeOut(500);});windowOn.on('scroll',function(){var scroll=windowOn.scrollTop();if(scroll<400){$("#header-sticky").removeClass("header-sticky");}else{$("#header-sticky").addClass("header-sticky");}});$('#mobile-menu').meanmenu({meanMenuContainer:'.mobile-menu',meanScreenWidth:"992",meanExpand:['<i class="fal fa-plus"></i>'],});$('#mobile-menu-2').meanmenu({meanMenuContainer:'.mobile-menu',meanScreenWidth:"6000",meanExpand:['<i class="fal fa-plus"></i>'],});$(window).on('load',function(){$('#preloader').delay(350).fadeOut('slow');$('body').delay(350).css({'overflow':'visible'});})
$(".it-menu-bar").on("click",function(){$(".itoffcanvas").addClass("opened");$(".body-overlay").addClass("apply");});$(".close-btn").on("click",function(){$(".itoffcanvas").removeClass("opened");$(".body-overlay").removeClass("apply");});$(".body-overlay").on("click",function(){$(".itoffcanvas").removeClass("opened");$(".body-overlay").removeClass("apply");});$(".popup-video").magnificPopup({type:"iframe",});$('.popup-image').magnificPopup({type:'image',gallery:{enabled:true}});new WOW().init();$("[data-background").each(function(){$(this).css("background-image","url( "+$(this).attr("data-background")+"  )");});$("[data-width]").each(function(){$(this).css("width",$(this).attr("data-width"));});$("[data-bg-color]").each(function(){$(this).css("background-color",$(this).attr("data-bg-color"));});$('.counter').counterUp({delay:10,time:1000});const projectswiper=new Swiper('.project__slider-active',{loop:true,slidesPerView:4,autoplay:true,breakpoints:{'1600':{slidesPerView:4,},'1400':{slidesPerView:3,},'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".project-slider-dots",clickable:true,},});const project2swiper=new Swiper('.project-2__slider-active',{loop:true,slidesPerView:4,autoplay:true,breakpoints:{'1600':{slidesPerView:4,},'1400':{slidesPerView:3,},'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".blue-slider-dots",clickable:true,},});const team2swiper=new Swiper('.team-2__slider-active',{loop:true,slidesPerView:4,spaceBetween:30,autoplay:true,breakpoints:{'1200':{slidesPerView:4,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".blue-slider-dots",clickable:true,},});const teamswiper=new Swiper('.team__slider-active',{loop:true,slidesPerView:3,autoplay:true,spaceBetween:30,breakpoints:{'1200':{slidesPerView:3,},'992':{slidesPerView:2,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".team-slider-dots",clickable:true,},});const testimonial3swiper=new Swiper('.testimonial-3__slider-active',{loop:true,slidesPerView:2,autoplay:true,spaceBetween:30,breakpoints:{'1200':{slidesPerView:2,},'992':{slidesPerView:2,},'768':{slidesPerView:1,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},});const testimonialswiper=new Swiper('.testimonial__slider-active',{loop:true,slidesPerView:2,spaceBetween:30,autoplay:true,breakpoints:{'1200':{slidesPerView:2,},'992':{slidesPerView:2,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".testimonial-slider-dots",clickable:true,},});const brand3swiper=new Swiper('.brand-3__slider-active',{loop:true,slidesPerView:5,spaceBetween:30,autoplay:true,breakpoints:{'1600':{slidesPerView:5,},'1400':{slidesPerView:5,},'1200':{slidesPerView:5,},'992':{slidesPerView:4,},'768':{slidesPerView:3,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},});const brand2swiper=new Swiper('.brand-2__slider-active',{loop:true,slidesPerView:4,autoplay:true,spaceBetween:30,breakpoints:{'1600':{slidesPerView:6,},'1400':{slidesPerView:5,},'1200':{slidesPerView:4,},'992':{slidesPerView:4,},'768':{slidesPerView:3,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},});const brandswiper=new Swiper('.brand__slider-active',{loop:true,slidesPerView:3,autoplay:true,spaceBetween:30,breakpoints:{'1200':{slidesPerView:3,},'992':{slidesPerView:2,},'768':{slidesPerView:3,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},});const featureswiper=new Swiper('.feature__slider-active',{loop:true,slidesPerView:4,spaceBetween:30,autoplay:false,breakpoints:{'1200':{slidesPerView:4,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},pagination:{el:".gradient-slider-dots",clickable:true,},});const testimonial2swiper=new Swiper('.testimonial-2__slider-active',{loop:true,slidesPerView:3,spaceBetween:30,autoplay:true,breakpoints:{'1400':{slidesPerView:3,},'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".gradient-slider-dots-2",clickable:true,},});const blogswiper=new Swiper('.blog__slider-active',{loop:true,slidesPerView:3,spaceBetween:30,autoplay:true,breakpoints:{'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".blog-slider-dots",clickable:true,},});const blog2swiper=new Swiper('.blog-2__slider-active',{loop:true,slidesPerView:3,autoplay:true,spaceBetween:30,breakpoints:{'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},pagination:{el:".gradient-slider-dots-2",clickable:true,},});$('.slider-active').slick({dots:true,infinite:true,fade:true,arrows:false,autoplay:true,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:992,settings:{arrows:false,}},{breakpoint:768,settings:{arrows:false,}},{breakpoint:480,settings:{arrows:false,}}]});if($(".beforeAfter").length>0){$('.beforeAfter').beforeAfter({movable:true,clickMove:true,position:50,separatorColor:'#fafafa',bulletColor:'#fafafa',onMoveStart:function(e){console.log(event.target);},onMoving:function(){console.log(event.target);},onMoveEnd:function(){console.log(event.target);},});}
$('.popup-image').magnificPopup({type:'image',gallery:{enabled:true}});$('#showlogin').on('click',function(){$('#checkout-login').slideToggle(900);});$('#showcoupon').on('click',function(){$('#checkout_coupon').slideToggle(900);});$('#cbox').on('click',function(){$('#cbox_info').slideToggle(900);});$('#ship-box').on('click',function(){$('#ship-box-info').slideToggle(1000);});$(".popup-video").magnificPopup({type:"iframe",});$('.grid').imagesLoaded(function(){var $grid=$('.grid').isotope({itemSelector:'.grid-item',percentPosition:true,masonry:{columnWidth:'.grid-item',},});$('.masonary-menu').on('click','button',function(){var filterValue=$(this).attr('data-filter');$grid.isotope({filter:filterValue,animationOptions:{duration:100,easing:"linear",queue:true}});});$('.masonary-menu button').on('click',function(event){$(this).siblings('.active').removeClass('active');$(this).addClass('active');event.preventDefault();});});$(".tp-search-box").on("click",function(){$(".search-wrapper").toggleClass("search-open");});$("body > *:not(header)").on("click",function(){$(".search-wrapper").removeClass("search-open");});$(".accordion-items").on("click",function(){$(".accordion-items").toggleClass("open");});$(".accordion-items").on("click",function(){$(".accordion-items").removeClass("open");});if($("#tp-copyright__lang-toggle").length>0){window.addEventListener('click',function(e){if(document.getElementById('tp-copyright__lang-toggle').contains(e.target)){$(".tp-copyright__lang-submenu").toggleClass("open");}
else{$(".tp-copyright__lang-submenu").removeClass("open");}});}
if($("#header-bottom__lang-toggle").length>0){window.addEventListener('click',function(e){if(document.getElementById('header-bottom__lang-toggle').contains(e.target)){$(".header-bottom__lang-submenu").toggleClass("open");}
else{$(".header-bottom__lang-submenu").removeClass("open");}});}
$('.cart-minus').on('click',function(){var $input=$(this).parent().find('input');var count=Number($input.val())-1;count=count<1?1:count;$input.val(count);$input.change();return false;});$('.cart-plus').on('click',function(){var $input=$(this).parent().find('input');$input.val(Number($input.val())+1);$input.change();return false;});if($("#slider-range").length){$("#slider-range").slider({range:true,min:0,max:500,values:[75,300],slide:function(event,ui){$("#amount").val("$"+ui.values[0]+" - $"+ui.values[1]);}});$("#amount").val("$"+$("#slider-range").slider("values",0)+
" - $"+$("#slider-range").slider("values",1));$('#filter-btn').on('click',function(){$('.filter-widget').slideToggle(1000);});}
$('select').niceSelect();if(jQuery(".wavify-item").length>0){$(".wavify-item").each(function(){var e=(Math.random()*(.1-.3)+.3).toFixed(2),i=$(this).data("wavify-background")?$(this).data("wavify-background"):"#fff",n=$(this).data("wavify-height")?$(this).data("wavify-height"):80,s=$(this).data("wavify-bones")?$(this).data("wavify-bones"):3,r=$(this).data("wavify-amplitude")?$(this).data("wavify-amplitude"):60;e=$(this).data("wavify-speed")?$(this).data("wavify-speed"):e,$(this).find("path").wavify({height:n,bones:s,amplitude:r,color:i,speed:e})})}
const tilt=$('.js-tilt').tilt({maxTilt:10,perspective:1000,easing:"cubic-bezier(.03,.98,.52,.999)",scale:1,speed:300,transition:true,disableAxis:null,reset:true,glare:false,maxGlare:1});$('.tp-btn-hover').on('mouseenter',function(e){var parentOffset=$(this).offset(),relX=e.pageX-parentOffset.left,relY=e.pageY-parentOffset.top;$(this).find('b').css({top:relY,left:relX})})
$('.tp-btn-hover').on('mouseout',function(e){var parentOffset=$(this).offset(),relX=e.pageX-parentOffset.left,relY=e.pageY-parentOffset.top;$(this).find('b').css({top:relY,left:relX})});$(".job-form-open-btn").on("click",function(){$(".job__form").slideToggle("job__form");});$('#my-btn').on('click',function(){$(this).slideToggle(900);$('#show').slideDown(900);});if($('#smooth-wrapper').length>0){gsap.registerPlugin(ScrollSmoother,ScrollTrigger);let smoother=ScrollSmoother.create({wrapper:'#smooth-wrapper',content:'#smooth-content',smooth:1,effects:true})}
if($('.title-anim').length>0){let splitTitleLines=gsap.utils.toArray(".title-anim");splitTitleLines.forEach(splitTextLine=>{const tl=gsap.timeline({scrollTrigger:{trigger:splitTextLine,start:'top 90%',end:'bottom 60%',scrub:false,markers:false,toggleActions:'play none none none'}});const itemSplitted=new SplitText(splitTextLine,{type:"words, lines"});gsap.set(splitTextLine,{perspective:300});itemSplitted.split({type:"lines"})
tl.from(itemSplitted.lines,{duration:1,delay:0.3,opacity:0,rotationX:-60,force3D:true,transformOrigin:"top center -50",stagger:0.2});});}
if($('.char-anim').length>0){let char_come=gsap.utils.toArray(".char-anim");char_come.forEach(splitTextLine=>{const tl=gsap.timeline({scrollTrigger:{trigger:splitTextLine,start:'top 90%',end:'bottom 60%',scrub:false,markers:false,toggleActions:'play none none none'}});const itemSplitted=new SplitText(splitTextLine,{type:"chars, words"});gsap.set(splitTextLine,{perspective:300});itemSplitted.split({type:"chars, words"})
tl.from(itemSplitted.chars,{duration:1,x:100,autoAlpha:0,stagger:0.05});});}
if($('.char-anim-2').length>0){let char_come=gsap.utils.toArray(".char-anim-2");char_come.forEach(splitTextLine=>{const tl=gsap.timeline({scrollTrigger:{trigger:splitTextLine,start:'top 90%',end:'bottom 60%',scrub:false,markers:false,toggleActions:'play none none none'}});const itemSplitted=new SplitText(splitTextLine,{type:"chars, words"});gsap.set(splitTextLine,{perspective:300});itemSplitted.split({type:"chars, words"})
tl.from(itemSplitted.chars,{duration:1.2,opacity:0,scale:0,y:60,rotationX:180,transformOrigin:"0% 30% -30%",stagger:0.02});});}
if(typeof($.fn.knob)!='undefined'){$('.knob').each(function(){var $this=$(this),knobVal=$this.attr('data-rel');$this.knob({'draw':function(){$(this.i).val(this.cv+'%')}});$this.appear(function(){$({value:0}).animate({value:knobVal},{duration:2000,easing:'swing',step:function(){$this.val(Math.ceil(this.value)).trigger('change');}});},{accX:0,accY:-150});});}})(jQuery);