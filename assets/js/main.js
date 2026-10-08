/*
 * Hash navigation.
 *
 * The page consists of sections (home, legal notice, privacy policy) of which
 * only one is visible at a time, and anchors within the home section.
 *
 *   #legal-notice, #privacy-policy  show that section, scrolled to the top
 *   #focus, #services, ...          show the home section, scrolled to the anchor
 *   anything else                   show the home section, scrolled to the top
 *
 * Scrolling within the visible section is animated; switching sections jumps.
 */
(function () {
	'use strict';

	var DURATION = 750;
	var baseTitle = document.title;
	var homeSection = document.getElementById('home-section');
	var animation = null;

	function easeInOutCubic(t) {
		return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
	}

	function scrollToY(y, smooth) {
		var startY = window.scrollY;
		var distance = y - startY;
		var start = Date.now();

		if (animation) cancelAnimationFrame(animation);

		if (!smooth) {
			window.scrollTo(0, y);
			return;
		}

		(function step() {
			var t = Date.now() - start;

			if (t >= DURATION) {
				window.scrollTo(0, y);
				animation = null;
			} else {
				window.scrollTo(0, startY + distance * easeInOutCubic(t / DURATION));
				animation = requestAnimationFrame(step);
			}
		})();
	}

	function currentHash() {
		var hash = location.hash.substring(1).toLowerCase();
		return /^[a-z0-9-]+$/.test(hash) ? hash : '';
	}

	function resolve(hash) {
		var anchor = hash && document.querySelector('[data-anchor="' + hash + '"]');
		var section = hash && document.getElementById(hash + '-section');

		if (anchor) return { section: anchor.closest('main > section'), anchor: anchor };
		if (section) return { section: section, anchor: null };
		return { section: homeSection, anchor: null };
	}

	function activate(section) {
		var sections = document.querySelectorAll('main > section');
		var changed = section.hidden;

		for (var i = 0; i < sections.length; i++) {
			sections[i].hidden = sections[i] !== section;
		}

		document.title = section.dataset.title ? section.dataset.title + ' - ' + baseTitle : baseTitle;

		return changed;
	}

	function navigate(smooth) {
		var hash = currentHash();
		var target = resolve(hash);
		var changed = activate(target.section);
		var y = target.anchor ? target.anchor.getBoundingClientRect().top + window.scrollY : 0;

		if (hash === 'home' || (hash && target.section === homeSection && !target.anchor)) {
			history.replaceState(null, '', location.pathname + location.search);
		}

		scrollToY(y, smooth && !changed);
	}

	if ('scrollRestoration' in history) history.scrollRestoration = 'manual';

	window.addEventListener('hashchange', function () {
		navigate(true);
	});

	// Clicking a link to the current hash does not fire hashchange, so scroll again explicitly.
	document.addEventListener('click', function (event) {
		var link = event.target.closest('a[href^="#"]');

		if (link && link.hash === location.hash) {
			event.preventDefault();
			navigate(true);
		}
	});

	navigate(false);

	// Images above an anchor may change its position while loading.
	window.addEventListener('load', function () {
		if (currentHash()) navigate(false);
	});
})();
