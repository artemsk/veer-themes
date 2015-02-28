var s;

function turningOnOffParallax(selector) {
    
    s = skrollr.init({forceHeight: false});
    
    var heroBottom = $('.bolshaya-main-content').offset().top;

    $(selector).css('position', 'fixed');
    $(selector).css('width', '100%');
    $('.bolshaya-main-content').css('position', 'relative');
    $('.bolshaya-main-content').css('top', heroBottom);
}

function introHeight(selector) {
   $(selector).css('min-height', $(window).height()); 
   $('.intro-home-content').css('margin-top', $(window).height()/4);
}

if($('.intro').length > 0) { 
    $(window).ready(turningOnOffParallax('.intro')); 
}

if($('.intro-home').length > 0) {     
    $(window).ready(introHeight('.intro-home')); 
    
    if($('.intro-home-content').height() <= 350) {
        $(window).ready(turningOnOffParallax('.intro-home')); 
    } else {
        $('.arrow-more').remove();
    }
}

$('.arrow-more').click(function() {

   $("html,body").animate({scrollTop:$(this).offset().top + 45}, 500); 
});