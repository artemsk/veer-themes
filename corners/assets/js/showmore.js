$('.pagination-button').click(function(event) {
        event.preventDefault();
        
        $('.show-more').addClass('animated').addClass('bounceOutDown');
        
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
        }, 300);
});