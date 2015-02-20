
var s = skrollr.init({forceHeight: false});

function turningOnOffParallax() {
    
    var heroBottom = $('.bolshaya-main-content').offset().top;
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    if (docViewBottom >= heroBottom && docViewTop <= heroBottom) {
        $('.intro').css('position', 'fixed');
        $('.intro').css('width', '100%');
        $('.bolshaya-main-content').css('position', 'relative');
        $('.bolshaya-main-content').css('top', heroBottom);
    } else {
        var s = skrollr.init({forceHeight: false}).destroy();
        $('.intro').removeAttr('style').removeAttr('data-top').removeAttr('data-top-bottom');
        $('.intro').removeClass('skrollable').removeClass('skrollable-after');   
        var s = skrollr.init({forceHeight: false});
    }
}

$(window).ready(turningOnOffParallax);
//$(window).resize(turningOnOffParallax);
