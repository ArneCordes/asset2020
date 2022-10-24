(function($) {
  $(function() {
    $('html').toggleClass('no-js js');

    // Collapsible header
    $(window).scroll(function() {
      if($(this).scrollTop() > 10) {
        $('.page-header').addClass('page-header--collapsed');
      } else {
        $('.page-header').removeClass('page-header--collapsed');
      }
    }).trigger('scroll');

    $('.page-header__nav-toggle').click(function() {
      $('.page-header').toggleClass('page-header--collapsed');
    });

    // CSS animations
    $('[data-css-animate]').each(function() {
      $(this).cssAnimate();
    });

  });
})(jQuery);
