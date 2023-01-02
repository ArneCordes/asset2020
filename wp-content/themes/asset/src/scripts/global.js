window.ScreenXS = 550;
window.ScreenSM = 768;
window.ScreenMD = 1100;
window.ScreenLG = 0;
window.ScreenXL = 1400;

(function($) {
  setVh();

  window.registerBreakpoint = function(breakpoint, trueFunction, falseFunction) {
    var $window = $(window);
    $window.resize(function() {
      if($window.width() >= breakpoint + 1) {
        trueFunction();
      } else {
        falseFunction();
      }
    });
    $window.trigger('resize');
  }

  window.debounce = function(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
  		}, wait);
  		if (immediate && !timeout) func.apply(context, args);
  	}
  }

  $.fn.isInViewport = function(offset) {
    var offset = offset || 300;
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && (elementTop + offset) < viewportBottom;
  }

  window.scrollTo = function($element, extraOffset) {
    var $adminBar = $('#wpadminbar');

    var offset = parseInt($element.offset().top);
    var scrollMargin = $element.data('scroll-margin-top');
    if(scrollMargin !== undefined) {
      scrollMargin = parseInt(scrollMargin);
      if($(window).width() < ScreenSM) {
        scrollMargin = scrollMargin - 20;
      }
      offset -= scrollMargin;
    }

    $('html, body').stop().animate({scrollTop: offset}, 1000);
  }

  function setVh() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }
})(jQuery);
