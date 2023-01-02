(function($) {
  $(function() {
    // Scroll collapsed
    $(window).scroll(function() {
      if($(window).width() >= window.ScreenMD) {
        if($(this).scrollTop() > 10) {
          $('.page-header').addClass('page-header--collapsed');
        } else {
          $('.page-header').removeClass('page-header--collapsed');
        }
      }
    }).trigger('scroll');

    // Click nav toggle
    $('.page-header__nav-toggle').click(function() {
      if($(window).width() >= window.ScreenMD) {
        $('.page-header').toggleClass('page-header--collapsed');
      } else {
        $('body').toggleClass('expand-nav');
      }
    });

    registerBreakpoint(window.ScreenMD, function() {
      $('body').removeClass('expand-nav');
    }, function() {
      $('.page-header--collapsed').removeClass('page-header--collapsed');
    });
  });
})(jQuery);
