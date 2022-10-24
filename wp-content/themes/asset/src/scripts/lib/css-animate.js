(function($) {
  $.fn.cssAnimate = function(options) {
    var settings = $.extend({onAnimate: null}, options);
    var $el = $(this);
    var animateId = generateHash();
    $el.data('animate-id', animateId);

    registerBreakpoint(ScreenMD, function() {
      initAnimations($el, settings);
    }, function() {
      removeAnimations($el);
    });
  };

  function initAnimations($el, settings) {
    $el.addClass('css-animate');
    var animateId = $el.data('animate-id');

    $(window).on('scroll.cssAnimate-' + animateId, function() {
      if($el.isInViewport()) {
        $el.addClass('css-animate--start');
        $(window).off('scroll.cssAnimate-' + animateId);
        if(settings.onAnimate) {
          settings.onAnimate();
        }
      }
    });

    $(window).trigger('scroll.cssAnimate-' + animateId);
  }

  function removeAnimations($el) {
    $el.removeClass('css-animate');
    var animateId = $el.data('animate-id');
    $(window).off('scroll.cssAnimate-' + animateId);
  }

  function generateHash() {
    return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  }
})(jQuery);
