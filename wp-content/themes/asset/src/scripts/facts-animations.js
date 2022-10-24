(function($) {
  var isAnimated = false,
      $animEls;

  $(function() {
    registerBreakpoint(ScreenMD, function() {
      initFactsAnimations();
    }, function() {
      removeFactsAnimations();
    });
  });

  function initFactsAnimations() {
    if(!isAnimated) {
      if(!$animEls || typeof($animEls) === undefined) {
        $animEls = $('.facts');
        $animEls.addClass('animate');
        $animEls.each(function() {
          $(this).find('[data-count]').text(0);
        });
      }

      $(window).on('scroll.factsAnimations', function() {
        $animEls.not('.facts--animation').each(function() {
          var $el = $(this);
          if($el.isInViewport()) {
            $el.addClass('facts--animation');
            if($el.hasClass('facts')) {
              $el.countUp({timeout: 0});
            }
          }
        });
      });

      isAnimated = true;
    }
  }

  function removeFactsAnimations() {
    if(isAnimated) {
      $animEls.removeClass('animate');
      $(window).off('scroll.factsAnimations');
      isAnimated = false;
    }
  }
})(jQuery);
