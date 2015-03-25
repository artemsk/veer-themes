$('.pagination-button').click(function(event) {
        event.preventDefault();
        
        var w = $('.show-more-wrapper').width();
        $('.show-more').css('background-color', '#ccc');
        $('.show-more-wrapper').animate({'padding-left': (w/2)-5, 'padding-right': (w/2)-5 }, 200);
        $('.show-more').addClass('animated').addClass('bounceOut');
        $('.show-more').html('&nbsp;');

        
        var currentPage = $(this).attr('data-page');        
        var insertDataDiv = '#showMoreData' + currentPage;
        var url = $(this).attr('href');
        
        setTimeout(function() {
            $.ajax({
                type: 'GET',
                url: url,
                success: function(results) { 
                   $(insertDataDiv).html(results);                
                },
            }); 
        }, 500);
});

$('.show-more').click(function() {
   $(this).find('a').click(); 
});