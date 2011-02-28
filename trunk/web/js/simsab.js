$(document).ready(function() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).addClass('external').click(function(e) {
		open(this.href);
		e.preventDefault();
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
	
	if ($(window).width() < 860) {
		$('link[@rel*=style][media]').each(function(i) {
			if (this.getAttribute('media') == 'screen') {
				this.disabled = true;
			} else if (this.getAttribute('media') == 'handheld') {
				this.setAttribute('media', 'screen');
				this.disabled = false;
			}
		});
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
	}).click(function(e) {
		$('#menu .item a.current').removeClass('current');
		$(this).addClass('current');
		$('.section:visible').hide();
		$('.section a[href*="' + $(this).attr('href') + '"]').parents('.section').fadeIn(400);
	});
});