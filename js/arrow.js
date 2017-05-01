$(document).ready(function() {
  
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $('.arrow').addClass('fade');
    } else{
      $('.arrow').removeClass('fade');
    }
  })
});