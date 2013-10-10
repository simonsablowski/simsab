function initializeExternalLinks() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).addClass('external');
	
	$('a.external').click(function(event) {
		open(this.href);
		event.preventDefault();
	});
}

function getTagFromElement(element) {
	return $(element).attr('class').split(/\s+/).filter(function(className) {
		return className != 'tag';
	})[0];
}

function filterItemsByTag(items, tag, neighbours) {
	neighbours = typeof neighbours !== 'undefined' ? neighbours : true;
	return items.filter(function(i, item) {
		return $(item).hasClass(tag) || (neighbours && $(item).prev().hasClass(tag));
	});
}

function initializeTagCounters() {
	$('.tag').each(function(i, element) {
		$(element).show();
		var items = $(element).parents('.tags').siblings('.items').children(':visible');
		var count = filterItemsByTag(items, getTagFromElement(element), false).length;
		var name = $(this).text();
		var position = name.indexOf(' (');
		var appendix = ' (' + count + ')';
		name = position == -1 ? name + appendix : name.substring(0, position) + appendix;
		$(element).children('a').text(name);
		if (count == 0) {
			$(element).hide();
		}
	});
}

function initializeTagElements() {
	$('.tag a').click(function(event) {
		$(this).toggleClass('active').toggleClass('inactive');
		
		if ($(this).hasClass('active')) {
			var items = $(this).parents('.tags').siblings('.items').children(':visible');
			items.hide();
			var tag = getTagFromElement($(this).parent());
			filterItemsByTag(items, tag).fadeIn(400);
		} else {
			$('.tag a').removeClass('active').addClass('inactive');
			$(this).parents('.tags').siblings('.items').children(':hidden').fadeIn(400);
		}
		
		initializeTagCounters();
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
		$('.section a[name*="' + url.split('#')[1] + '"]').parents('.section').show();
		initializeTogglingMenuItems();
	} else {
		$('.section:first').show();
		initializeTogglingMenuItems();
	}
	
	$('#menu .item a').filter(function() {
		return this.href.match('#');
	}).click(function(event) {
		$('.section:visible').hide();
		$('.section a[name*="' + $(this).attr('href').split('#')[1] + '"]').parents('.section').fadeIn(400);
		initializeTogglingMenuItems();
	});
}

function initializeTogglingMenuItems() {
	$('#menu .item a').removeClass('active').addClass('inactive');
	$('#menu .item a[href*="' + $('.section:visible a').attr('name') + '"]').removeClass('inactive').addClass('active');
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
	initializeTagCounters();
	initializeTagElements();
	initializeExpandableElements();
	initializeTogglingSections();
	initializeTogglingMenuItems();
	initializeIeFix();
});