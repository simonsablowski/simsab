$(document).ready(function() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).addClass('external');
	
	$('a.external').click(function(event) {
		open(this.href);
		event.preventDefault();
	});
	
	$('.expandable').hide();
	
	$('a.expand, a.collapse').click(function(event) {
		$(this).toggleClass('expand').toggleClass('collapse');
		$(this).parent().siblings('.expandable').slideToggle(400);
		event.preventDefault();
	});
	
	$('#photo').mouseenter(function() {
		$('#large-photo').fadeIn(400);
		$('#magnifier').fadeOut(400);
	});
	$('#large-photo').mouseleave(function() {
		$('#large-photo').fadeOut(100);
		$('#magnifier').fadeIn(100);
	});
	
	if ($.browser.msie) {
		if ($.browser.version < 7) {
			$('#menu').css('position', 'absolute');
			var menuOffset = $('#menu').position().top;
			$(window).scroll(function() {
				$('#menu').css({
					'top': menuOffset + $(window).scrollTop() + 'px'
				});
			});
		}
	}
	
	$('.section').hide();
	
	var url = document.location.toString();
	if (url.match('#')) {
		$('.section a[href*="#' + url.split('#')[1] + '"]').parents('.section').show();
	} else {
		$('.section:first').show();
	}
	
	$('#menu .item a').filter(function() {
		return this.href.match('#');
	}).click(function(event) {
		$('.section:visible').hide();
		$('.section a[href*="' + $(this).attr('href') + '"]').parents('.section').fadeIn(400);
	});
});