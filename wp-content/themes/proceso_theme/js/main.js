$(function() {
    // console.log( "ready!" );

    $('.ham_btn').on('click', function(){
        $(this).toggleClass('ham_active');
        $('.menu').toggleClass('active');
    });

    $('.menu--time').on('click', function(){
        $('.ham_btn').removeClass('ham_active');
        $('.menu').removeClass('active');
    });

    var windowWidth = $(window).width();

    $('.page-container').mousemove(function(event){
      var moveX = (($(window).width() / 2) - event.pageX) * 0.1;
      var moveY = (($(window).height() / 2) - event.pageY) * 0.1;
      // $('.page-back').css('margin-left', moveX + 'px');
      // $('.page-back').css('margin-top', moveY + 'px');
      $('.page-front').css('margin-left', -moveX + 'px');
      $('.page-front').css('margin-top', -moveY + 'px');
    });

    desktopScripts();

});

function desktopScripts() {
  if ($(window).width() >= 992) {
    console.log('More than 960');
    $(".cases-top").hover(function(){
      $(this).css("height", "60%");
      $(this).next('.cases-bottom').css("height", "40%");
    }, function(){
      $(this).css("height", "50%");
      $(this).next('.cases-bottom').css("height", "50%");
    });
    $(".cases-bottom").hover(function(){
      $(this).css("height", "60%");
      $(this).prev('.cases-top').css("height", "40%");
    }, function(){
      $(this).css("height", "50%");
      $(this).prev('.cases-top').css("height", "50%");
    });
  }
}
