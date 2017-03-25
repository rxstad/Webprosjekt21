	 $(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 1) {
        $('#top_menu_fadein').fadeIn();
    } else {
        $('#top_menu_fadein').fadeOut();
    }

});