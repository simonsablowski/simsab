function initializeExternalLinks() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).addClass('external');
	
	$('a.external').click(function(event) {
		open(this.href);
		event.preventDefault();
	});
}

function initializeExpandableElements() {
	$('.expandable').hide();
	
	$('.expand, .collapse').click(function(event) {
		$(this).toggleClass('expand').toggleClass('collapse');
		$(this).parent().siblings('.expandable').slideToggle(400);
		event.preventDefault();
	});
}

function initializeTogglingSections() {
	$('.section').hide();
	
	var url = document.location.toString();
	if (url.match('#')) {
		$('.section h2 a[href*="#' + url.split('#')[1] + '"]').parents('.section').show();
	} else {
		$('.section:first').show();
	}
	
	$('a').not('.expand, .collapse, .external').filter(function() {
		return this.href.match('#');
	}).click(function(event) {
		$('.section:visible').hide();
		$('.section h2 a[href*="' + $(this).attr('href') + '"]').parents('.section').fadeIn(400);
	});
}

function initializeIeFix() {
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
}

$(document).ready(function() {
	initializeExternalLinks();
	initializeExpandableElements();
	initializeTogglingSections();
	initializeIeFix();
});