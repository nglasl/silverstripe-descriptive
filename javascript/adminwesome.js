;(function($) {
	$(function() {

		// Instantiate the absolute caption element.

		$('body').append("<div id='cms-menu-captionwesome'></div>");
		var element = $('div#cms-menu-captionwesome');
		element.toggleClass('caption');

		// Remove the titles from menus.

		$.each($('div#cms-menu ul.cms-menu-list li, div.cms-content-header-tabs ul li'), function(index, tab) {
			$(tab).removeAttr('title');
			$(tab).children().removeAttr('title');
		});

		$.entwine('ss', function($) {

			// Display the caption for the left menu.

			$('div#cms-menu ul.cms-menu-list li:not(.children)').entwine({
				onmouseenter: function() {
					element.hide();
					var caption = $(this).find('div.captionawesome-description').first();
					if(caption.length) {
						element.removeClass('top');
						element.addClass('left');
						var top = $(this).offset().top;
						var left = $(this).width();
						element.css({top: top, left: left, right: 'auto'});
						element.html(caption.html());
						element.fadeIn();
					}
					else {
						element.stop(true).fadeOut();
					}
				}
			});

			// Display the caption for the top menu.

			/*$('div.cms-content-header-tabs ul li').entwine({
				onmouseenter: function() {
					element.hide();
					element.html('');
					element.removeClass('left');
					element.addClass('top');
					var top = $(this).height();
					var right = ($(window).width() - ($(this).offset().left + $(this).outerWidth()));
					element.css({top: top, left: 'auto', right: right});
					element.fadeIn();
				}
			});*/

			// Hide the caption.

			$('div#cms-menu ul.cms-menu-list li.children > a').entwine({
				onmouseenter: function() {
					element.stop(true).fadeOut();
				}
			});
			$('div#cms-menu ul.cms-menu-list, div.cms-content-header-tabs ul').entwine({
				onmouseleave: function() {
					element.stop(true).fadeOut();
				}
			});
		});
	});
})(jQuery);
