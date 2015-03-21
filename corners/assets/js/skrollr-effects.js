var s;

function turningOnOffParallax(selector) {
    
    if($(window).width() <= 1400) {
        s = skrollr.init({forceHeight: false});

        var heroBottom = $('.bolshaya-main-content').offset().top;

        $(selector).css('position', 'fixed');
        $(selector).css('width', $(window).width());
        $('.bolshaya-main-content').css('position', 'relative');
        $('.bolshaya-main-content').css('top', heroBottom);
    } else {
         $(selector).css('max-width', $(window).width() + (30));
    }
}

function introHeight(selector, height) { 
   $(selector).css('min-height', height + 'px'); 
   $('.intro-home-content').css('margin-top', (height/4) + 'px');
   
   $('.fixed-header').css('background-color', 'rgba(255,255,255,0)');
   $('.sidebar-menu').css('color', '#666');
}

if($('.intro').length > 0) { 
    $(window).ready(turningOnOffParallax('.intro')); 
}

if($('.intro-home').length > 0) {     
    $(window).ready(introHeight('.intro-home', $(window).height())); 
    
    if($('.intro-home-content').height() <= 350) {
        $(window).ready(turningOnOffParallax('.intro-home')); 
    } else {
        $('.arrow-more').remove();
    }
}

if($('.intro-home-small').length > 0) {    
    $(window).ready(introHeight('.intro-home-small', $('.intro-home-small').attr('data-min-height'))); 
    $(window).ready(turningOnOffParallax('.intro-home-small')); 
}

$('.arrow-more').click(function() {

   $("html,body").animate({scrollTop:$(this).offset().top + 50}, 500); 
});