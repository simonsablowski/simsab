function loadLibrary(url, callback) {
	var script = document.createElement('script');
	script.src = url;
	
	var head = document.getElementsByTagName('head')[0];
	var done = false;
	
	script.onload = script.onreadystatechange = function() {
		if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
			done = true;
			
			callback();
			
			script.onload = script.onreadystatechange = null;
			head.removeChild(script);
		}
	};
	
	head.appendChild(script);
}

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

function updateTagList() {
	$('.tag').each(function(i, element) {
		$(element).show();
		var items = $(element).parents('.tags').siblings('.items').children(':visible');
		var count = filterItemsByTag(items, getTagFromElement(element), false).length;
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
		
		updateTagList();
		event.preventDefault();
	});
	
	updateTagList();
}

function initializeExpandableElements() {
	$('.expandable').hide();
	$('.details').show();
	
	$('.expand, .collapse').click(function(event) {
		$(this).toggleClass('expand').toggleClass('collapse');
		$(this).parent().siblings('.expandable').slideToggle(400);
		event.preventDefault();
	});
}

function initializeSections() {
	$('.section').hide();
	
	var url = document.location.toString();
	if (url.match('#')) {
		$('.section #' + url.split('#')[1]).parents('.section').show();
		toggleMenuItems();
	} else {
		$('.section:first').show();
		toggleMenuItems();
	}
	
	$('#header .menu .item a').filter(function() {
		return this.href.match('#');
	}).click(function(event) {
		$('.section:visible').hide();
		$('.section #' + $(this).attr('href').split('#')[1]).parents('.section').fadeIn(400);
		toggleMenuItems();
		event.preventDefault();
		window.location = $(this).attr('href');
		window.scrollTo(0, 0);
	});
}

function toggleMenuItems() {
	$('#header .menu .item a').removeClass('active').addClass('inactive');
	$('#header .menu .item a[href*="' + $('.section:visible .title').attr('id') + '"]').removeClass('inactive').addClass('active');
}

loadLibrary('http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', function() {
	$(document).ready(function() {
		initializeExternalLinks();
		initializeTagElements();
		initializeExpandableElements();
		initializeSections();
	});
});