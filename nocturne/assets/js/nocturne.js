/* Nocturne — motion layer. IntersectionObserver reveals (no scroll listeners),
   Lenis smooth scroll, magnetic buttons, custom cursor + progress bar. */
(function () {
	'use strict';
	var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---- Lenis smooth scroll (drives GSAP-free reveals via IO) ---- */
	if (window.Lenis && !reduce) {
		var lenis = new Lenis({ duration: 1.1, easing: function (t) { return 1 - Math.pow(1 - t, 3); }, smoothWheel: true });
		function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
		requestAnimationFrame(raf);
		document.documentElement.classList.add('lenis');
	}

	/* ---- Scroll reveals via IntersectionObserver ---- */
	function observe(selector) {
		var els = document.querySelectorAll(selector);
		if (!('IntersectionObserver' in window) || reduce) {
			els.forEach(function (el) { el.classList.add('is-in'); });
			return;
		}
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (e) {
				if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
			});
		}, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
		els.forEach(function (el) { io.observe(el); });
	}
	observe('.nocturne-reveal');
	observe('[data-stagger]');

	/* Stagger children with incremental transition-delay */
	document.querySelectorAll('[data-stagger]').forEach(function (group) {
		var step = parseFloat(group.getAttribute('data-stagger')) || 90;
		Array.prototype.forEach.call(group.children, function (child, i) {
			child.style.transitionDelay = (i * step) + 'ms';
		});
	});

	/* ---- Progress bar ---- */
	var bar = document.querySelector('.nocturne-progress');
	if (bar) {
		var tick = function () {
			var h = document.documentElement.scrollHeight - window.innerHeight;
			bar.style.width = (h > 0 ? (window.scrollY / h) * 100 : 0) + '%';
		};
		window.addEventListener('scroll', tick, { passive: true });
		tick();
	}

	/* ---- Custom cursor + magnetic buttons (desktop, pointer:fine) ---- */
	var fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
	var cursor = document.querySelector('.nocturne-cursor');
	if (fine && cursor && !reduce) {
		var cx = 0, cy = 0, tx = 0, ty = 0;
		window.addEventListener('mousemove', function (e) { tx = e.clientX; ty = e.clientY; cursor.classList.add('is-on'); });
		(function loop() {
			cx += (tx - cx) * 0.18; cy += (ty - cy) * 0.18;
			cursor.style.transform = 'translate(' + cx + 'px,' + cy + 'px) translate(-50%,-50%)';
			requestAnimationFrame(loop);
		})();
		document.querySelectorAll('a, button, .nocturne-btn, [data-magnetic]').forEach(function (el) {
			el.addEventListener('mouseenter', function () { cursor.classList.add('is-hover'); });
			el.addEventListener('mouseleave', function () { cursor.classList.remove('is-hover'); el.style.transform = ''; });
		});
		document.querySelectorAll('[data-magnetic], .nocturne-btn').forEach(function (el) {
			el.addEventListener('mousemove', function (e) {
				var r = el.getBoundingClientRect();
				var mx = e.clientX - (r.left + r.width / 2);
				var my = e.clientY - (r.top + r.height / 2);
				el.style.transform = 'translate(' + mx * 0.18 + 'px,' + my * 0.28 + 'px)';
			});
		});
	}

	/* ---- Subtle orb parallax (GPU transforms only) ---- */
	if (!reduce) {
		var orbs = document.querySelectorAll('.nocturne-orb');
		window.addEventListener('scroll', function () {
			var y = window.scrollY;
			orbs.forEach(function (orb, i) {
				orb.style.transform = 'translateY(' + (y * (0.04 + i * 0.03)) + 'px)';
			});
		}, { passive: true });
	}
})();

/* ---- Mobile menu toggle ---- */
(function () {
	var burger = document.querySelector('.nocturne-burger');
	if (!burger) return;
	burger.addEventListener('click', function () {
		var open = document.body.classList.toggle('nav-open');
		burger.setAttribute('aria-expanded', open ? 'true' : 'false');
	});
	document.querySelectorAll('.nocturne-mobile a').forEach(function (a) {
		a.addEventListener('click', function () { document.body.classList.remove('nav-open'); });
	});
})();
