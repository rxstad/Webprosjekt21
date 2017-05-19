
$(function() {
    var scrolldiv = $("#header_menu");
     h = $(header).height();

    $(window).scroll(function() {
        if($(this).scrollTop() > h ) { 
                $(scrolldiv).css('background', '#fff');
            }
        else {
            $(scrolldiv).css('background', 'transparent'); 
        }
    })
});