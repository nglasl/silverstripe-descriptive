;(function($) {
	$(function() {

		// Instantiate the absolute caption element.

		$('body').append("<div id='cms-menu-captionwesome'></div>");
		var element = $('div#cms-menu-captionwesome');
		element.toggleClass('caption');
		var show;

		$.entwine('ss', function($) {

			// Display the caption for the menu.

			$('div#cms-menu ul.cms-menu-list li').entwine({
				onmouseenter: function() {
					clearTimeout(show);
					element.hide();
					var caption = $(this).find('div.captionawesome-description').first();
					if(caption.length) {
						var top = $(this).offset().top;
						var left = $(this).width();
						element.css({top: top, left: left, right: 'auto'});
						element.html(caption.html());
						show = setTimeout(function() {
							element.fadeIn(250);
						}, 250);
					}
				}
			});

			// Hide the caption.

			$('div#cms-menu ul.cms-menu-list').entwine({
				onmouseleave: function() {
					clearTimeout(show);
					element.stop(true).fadeOut(250);
				}
			});
		});
	});
})(jQuery);
