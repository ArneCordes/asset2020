import { Fancybox } from "@fancyapps/ui";

(function($) {
  $(function() {
    $('html').toggleClass('no-js js');

    $('.page-footer__scroll').click(function(e) {
      e.preventDefault();
      scrollTo($('body'));
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
