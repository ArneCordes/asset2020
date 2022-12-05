import { Fancybox } from "@fancyapps/ui";

(function($) {
  $(function() {
    $('html').toggleClass('no-js js');

    $('.page-footer__scroll').click(function(e) {
      e.preventDefault();
      scrollTo($('body'));
    });

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

    Fancybox.bind('.single-slider__item:not(.swiper-slide-duplicate) .single-slider__link', {
      groupAll: true
    });
  });
})(jQuery);
