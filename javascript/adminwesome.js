;(function($) {
	$(function() {

		// Instantiate the absolute caption element.

		$('body').append("<div id='cms-menu-captionwesome'></div>");
		var element = $('div#cms-menu-captionwesome');
		element.toggleClass('caption');

		$.entwine('ss', function($) {

			// Display the caption for the menu.

			$('div#cms-menu ul.cms-menu-list li:not(.children)').entwine({
				onmouseenter: function() {
					element.hide();
					var caption = $(this).find('div.captionawesome-description').first();
					if(caption.length) {
						var top = $(this).offset().top;
						var left = $(this).width();
						element.css({top: top, left: left, right: 'auto'});
						element.html(caption.html());
						element.stop(true).fadeIn();
					}
					else {
						element.stop(true).fadeOut();
					}
				}
			});

			// Hide the caption.

			$('div#cms-menu ul.cms-menu-list').entwine({
				onmouseleave: function() {
					element.stop(true).fadeOut();
				}
			});
		});
	});
})(jQuery);
