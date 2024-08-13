(function ($) {
    'use strict';

    $('.add_wish_list_modal').on('click', function (e) {
        alert("test wishlist");
        e.preventDefault();
        var This  = $(this);
        var Liked = This.hasClass('liked') ? true : false;
        var Url   =  $('#FavoritesDelete').attr('href') ;
        var Messages = $('.flash_msg');
        var favoritesCount = $('.favoritesCount');
        var favourites_list = $('#favourites_list');
        Messages.empty();
    
        $.ajax({
            url: Url,
            type: 'get',
            dataType: 'json',
            data: {'product': This.data('slug'), '_token': $('meta[name="_token"]').attr('content')},
            success: function (res) {
                if (res.status === true) {
                    
                    
                    $('#FavouritModalLabel').modal('hide');
                    favoritesCount.html(res.data.count);
                    
                    favourites_list.html(res.data.favourites);
                }
                alert(res.message);
                // return;
            },
            error: function (e) {
                if (e.status === 401) {
                    window.location.href = $('#LoginUrl').attr('href');
                }
                Messages.append('<div class="fl fl_red">' + e.responseJSON.message + '</div>');
                $('.fl').slideDown(300);
                setTimeout(function () {
                    $('.fl').slideUp(300);
                }, 3000);
                alert(e.responseJSON.message.errors);
            }
        });
    });

   

})(jQuery);


