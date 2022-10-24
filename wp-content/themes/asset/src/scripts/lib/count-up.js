;(function($, window, document, undefined) {
	"use strict";

	var pluginName = "countUp",
		defaults = {
      timeout: 0
    };

	function Plugin(element, options) {
		this.element = element;

		this.settings = $.extend( {}, defaults, options );
		this._defaults = defaults;
		this._name = pluginName;

    this.init($(this.element));
	}

	$.extend(Plugin.prototype, {
		init: function($element) {
      setTimeout(function() {
        $element.find('[data-count]').each(function() {
          var $this = $(this),
              countTo = $this.attr('data-count');

          $this.text(0);

          $({countNum: $this.text()}).animate({
            countNum: countTo
          }, {
            duration: 1500,
            easing: 'linear',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        });
      }, this.settings.timeout);
		}
	});

	$.fn[pluginName] = function(options) {
		return this.each(function() {
			if(!$.data(this, "plugin_" + pluginName)) {
				$.data(this, "plugin_" +
					pluginName, new Plugin(this, options));
			}
		});
	};
})(jQuery, window, document);
