
$(".menu_scroll").click(function(event){
    event.preventDefault();
    $("html,body").animate({scrollTop:$(this.hash).offset().top - 100}, 500);
});

var rememberAboveHeight;

$(".fold-header").click(function() { 
    if($(this).height() <= 100) {
        $("html,body").animate({scrollTop:0}, 350);
        $(this).animate({height:"500px"},500);
        
        if(rememberAboveHeight == undefined) { rememberAboveHeight = $(".above-header").height(); }
        $(".above-header").animate({marginTop:0-rememberAboveHeight},500);
        
        //$(".yellow_line_top").animate({marginTop:"293px"},500);
        $(".arrow_div").animate({marginTop:"270px"},500);
        $('.yellow_line_top_container').css('position','relative');
        $('.yellow_line_top_container').css('top','0px');
        $('#topchevron').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    } else {
        $(this).animate({height:"30px"},500);
        $(".above-header").animate({marginTop:"0px"},500);
        //$(".yellow_line_top").animate({marginTop:"23px"},500);
        $(".arrow_div").animate({marginTop:"0px"},500);
        $('.yellow_line_top_container').css('position','');
        $('.yellow_line_top_container').css('top','');
        $('#topchevron').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    }
});


$(".sidebar-menu").click(function(event) {
    event.stopPropagation(event);
    $(".sidebar").show().animate({left:"0px"},250);
    $(".overlay").show();
    $(".overlay").animate({opacity:"0.74902"},250);
});

$('.overlay').click(function() {
    $(".sidebar").animate({left:"-270px"},250);
    setTimeout(function() {
           $(".overlay").animate({opacity:"0"},250);
           $(".overlay").hide();
           $(".sidebar").hide();
        }, 250);
});

$(".contact-form button").click(function() {
    $(".contact-form").addClass('animated').addClass('bounceOutLeft');
    setTimeout(function() {
        $(".contact-form").hide();
            $(".contact-form-2").removeClass('hidden').addClass('animated').addClass('bounceInRight');
        }, 350);
});

//;

$(document).ready(function() { 
    if ($(".events-veer-message-center").show().length > 0) {
        $(".events-veer-message-center").addClass('animated').addClass('flipInX');

        setTimeout(function() {
         $(".events-veer-message-center").removeClass('flipInX').addClass('flipOutX');
        }, 5000);
    }
});

$('.corners-post-lists').hover(function() {
   $(this).find('a').addClass('link-hovered');
   $(this).find('img:not(.not-hovering-image)').css('opacity', '0.9');
}, function() {
   $(this).find('a').removeClass('link-hovered');
   $(this).find('img:not(.not-hovering-image)').css('opacity', '1');
});

$('.social-button a').click(function(e) {
    e.preventDefault();
    var loc = $(this).attr('href');
    window.open(loc, '', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=1');
});

if($('.corners-post-6-img').length > 0) { 
$('.corners-post-6-img').css('min-height', $(window).height()); 
}

/*$('img').ready(function() {
    $('img').css('opacity','0');
    setTimeout(function() {
         $('img').addClass('fade-corners').css('opacity','1');
     },1);
    setTimeout(function() {
         $('img').removeClass('fade-corners');
     },300);
});*/