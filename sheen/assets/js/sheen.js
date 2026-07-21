/**
 * Sheen theme — motion layer.
 * - Three.js animated hero field (brand-colored floating spheres, mouse parallax)
 * - GSAP + ScrollTrigger scroll reveals + parallax
 * - Animated stat counters
 * - Testimonial slider
 * - Dark-mode toggle
 *
 * All effects no-op gracefully when their target/library is absent or when the
 * visitor prefers reduced motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------------------------------------------------------------------
	 * 1. Three.js hero field
	 * ------------------------------------------------------------------- */
	function initHero3D() {
		var canvas = document.getElementById('sheen-hero-canvas');
		if (!canvas || typeof THREE === 'undefined' || reduceMotion) return;

		var wrap = canvas.parentElement;
		var w = wrap.clientWidth;
		var h = wrap.clientHeight;

		var scene = new THREE.Scene();
		var camera = new THREE.PerspectiveCamera(60, w / h, 0.1, 100);
		camera.position.z = 18;

		var renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true, powerPreference: 'low-power' });
		renderer.setPixelRatio(1);
		renderer.setSize(w, h, false);

		// Lights
		scene.add(new THREE.AmbientLight(0xffffff, 0.65));
		var key = new THREE.DirectionalLight(0xffffff, 0.9);
		key.position.set(6, 10, 8);
		scene.add(key);

		// Brand-colored floating spheres ("bubbles").
		var palette = [0x12b7a8, 0xff5a47, 0xffd23f, 0xffffff, 0x2ea6d6];
		var group = new THREE.Group();
		var COUNT = 20;
		var spheres = [];
		for (var i = 0; i < COUNT; i++) {
			var r = 0.3 + Math.random() * 0.85;
			var geo = new THREE.SphereGeometry(r, 16, 16);
			var mat = new THREE.MeshStandardMaterial({
				color: palette[i % palette.length],
				roughness: 0.35,
				metalness: 0.1,
				transparent: true,
				opacity: 0.5
			});
			var m = new THREE.Mesh(geo, mat);
			m.position.set(
				(Math.random() - 0.5) * 34,
				(Math.random() - 0.5) * 22,
				(Math.random() - 0.5) * 14
			);
			m.userData.sp = 0.15 + Math.random() * 0.4;   // drift speed
			m.userData.ph = Math.random() * Math.PI * 2;   // phase
			spheres.push(m);
			group.add(m);
		}
		scene.add(group);

		var mouseX = 0, mouseY = 0;
		wrap.addEventListener('pointermove', function (e) {
			var rect = wrap.getBoundingClientRect();
			mouseX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
			mouseY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
		});

		// Only render while the hero is on screen — avoids burning CPU on the
		// whole page and keeps scrolling smooth.
		var visible = true;
		if ('IntersectionObserver' in window) {
			new IntersectionObserver(function (entries) {
				visible = entries[0].isIntersecting;
				if (visible) requestAnimationFrame(animate);
			}, { threshold: 0 }).observe(wrap);
		}

		// Throttle to ~30fps so the render loop leaves the main thread room to breathe.
		var t = 0, running = false, last = 0, FRAME = 1000 / 30;
		function animate(now) {
			if (running && !visible) { running = false; return; }
			running = true;
			if (visible) requestAnimationFrame(animate);
			now = now || 0;
			if (now - last < FRAME) return;
			last = now;
			t += 0.02;
			for (var i = 0; i < spheres.length; i++) {
				var m = spheres[i];
				m.position.y += Math.sin(t + m.userData.ph) * 0.02 * m.userData.sp;
				m.position.x += Math.cos(t + m.userData.ph) * 0.016 * m.userData.sp;
				m.rotation.y += 0.006;
			}
			group.rotation.y += (mouseX * 0.25 - group.rotation.y) * 0.06;
			group.rotation.x += (mouseY * 0.15 - group.rotation.x) * 0.06;
			renderer.render(scene, camera);
		}
		requestAnimationFrame(animate);

		window.addEventListener('resize', function () {
			w = wrap.clientWidth; h = wrap.clientHeight;
			camera.aspect = w / h; camera.updateProjectionMatrix();
			renderer.setSize(w, h, false);
		});
	}

	/* ---------------------------------------------------------------------
	 * 2. Scroll reveals + parallax (GSAP / ScrollTrigger)
	 * ------------------------------------------------------------------- */
	function initReveals() {
		var els = document.querySelectorAll('[data-reveal], .sheen-reveal');
		if (reduceMotion || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
			// Ensure everything is visible if we can't animate.
			els.forEach(function (el) { el.style.opacity = 1; el.style.transform = 'none'; });
			return;
		}
		gsap.registerPlugin(ScrollTrigger);

		els.forEach(function (el) {
			var delay = parseFloat(el.getAttribute('data-reveal-delay') || '0');
			gsap.fromTo(el,
				{ opacity: 0, y: 40 },
				{
					opacity: 1, y: 0, duration: 0.8, delay: delay, ease: 'power3.out',
					scrollTrigger: { trigger: el, start: 'top 90%' }
				}
			);
		});

		// Failsafe: nothing may stay invisible. If a trigger never fires (busy
		// main thread, layout quirk), force the element visible after 2s.
		setTimeout(function () {
			els.forEach(function (el) {
				if (parseFloat(getComputedStyle(el).opacity) < 0.5) {
					el.style.opacity = 1;
					el.style.transform = 'none';
				}
			});
		}, 2000);

		// Subtle parallax on [data-parallax] (speed via attribute, default 0.2).
		document.querySelectorAll('[data-parallax]').forEach(function (el) {
			var speed = parseFloat(el.getAttribute('data-parallax') || '0.2');
			gsap.to(el, {
				yPercent: -speed * 100,
				ease: 'none',
				scrollTrigger: { trigger: el, start: 'top bottom', end: 'bottom top', scrub: true }
			});
		});
	}

	/* ---------------------------------------------------------------------
	 * 3. Animated counters
	 * ------------------------------------------------------------------- */
	function initCounters() {
		var nums = document.querySelectorAll('[data-count]');
		if (!nums.length) return;

		function run(el) {
			var target = parseFloat(el.getAttribute('data-count'));
			var suffix = el.getAttribute('data-suffix') || '';
			var dur = 1600, start = null;
			function step(ts) {
				if (!start) start = ts;
				var p = Math.min((ts - start) / dur, 1);
				var eased = 1 - Math.pow(1 - p, 3);
				var val = target * eased;
				el.textContent = (target % 1 === 0 ? Math.round(val) : val.toFixed(1)) + suffix;
				if (p < 1) requestAnimationFrame(step);
			}
			requestAnimationFrame(step);
		}

		if (reduceMotion || typeof ScrollTrigger === 'undefined') {
			nums.forEach(function (el) {
				el.textContent = el.getAttribute('data-count') + (el.getAttribute('data-suffix') || '');
			});
			return;
		}
		nums.forEach(function (el) {
			ScrollTrigger.create({ trigger: el, start: 'top 90%', once: true, onEnter: function () { run(el); } });
		});
	}

	/* ---------------------------------------------------------------------
	 * 4. Testimonial slider (any .sheen-slider with .sheen-slide children)
	 * ------------------------------------------------------------------- */
	function initSliders() {
		document.querySelectorAll('.sheen-slider').forEach(function (slider) {
			var slides = slider.querySelectorAll('.sheen-slide');
			if (slides.length < 2) return;
			var idx = 0;
			slides.forEach(function (s, i) { s.style.display = i === 0 ? '' : 'none'; });

			function go(n) {
				slides[idx].style.display = 'none';
				idx = (n + slides.length) % slides.length;
				slides[idx].style.display = '';
				if (typeof gsap !== 'undefined' && !reduceMotion) {
					gsap.fromTo(slides[idx], { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5 });
				}
			}
			var prev = slider.querySelector('.sheen-prev');
			var next = slider.querySelector('.sheen-next');
			if (prev) prev.addEventListener('click', function () { go(idx - 1); });
			if (next) next.addEventListener('click', function () { go(idx + 1); });
			if (!reduceMotion) setInterval(function () { go(idx + 1); }, 6000);
		});
	}

	/* ---------------------------------------------------------------------
	 * 5. Dark-mode toggle (flips data-theme on <html>, persisted)
	 * ------------------------------------------------------------------- */
	function initDarkToggle() {
		var btn = document.querySelector('.sheen-theme-toggle');
		if (!btn) return;
		var root = document.documentElement;
		var saved = null;
		try { saved = localStorage.getItem('sheen-theme'); } catch (e) {}
		if (saved) root.setAttribute('data-theme', saved);
		btn.addEventListener('click', function () {
			var now = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
			root.setAttribute('data-theme', now);
			try { localStorage.setItem('sheen-theme', now); } catch (e) {}
		});
	}

	/* ---------------------------------------------------------------------
	 * 6. Lenis smooth momentum scroll (synced with GSAP ScrollTrigger)
	 * ------------------------------------------------------------------- */
	function initLenis() {
		if (reduceMotion || typeof Lenis === 'undefined') return;
		var lenis = new Lenis({ duration: 1.1, smoothWheel: true });
		if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
			lenis.on('scroll', ScrollTrigger.update);
			gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
			gsap.ticker.lagSmoothing(0);
		} else {
			function raf(t) { lenis.raf(t); requestAnimationFrame(raf); }
			requestAnimationFrame(raf);
		}
		// Smooth-scroll in-page anchor links.
		document.querySelectorAll('a[href^="#"]').forEach(function (a) {
			a.addEventListener('click', function (e) {
				var id = a.getAttribute('href');
				if (id.length > 1) {
					var t = document.querySelector(id);
					if (t) { e.preventDefault(); lenis.scrollTo(t, { offset: -80 }); }
				}
			});
		});
		window.__sheenLenis = lenis;
	}

	/* ---------------------------------------------------------------------
	 * 7. Preloader — brand mark + bar, then reveal
	 * ------------------------------------------------------------------- */
	function initPreloader() {
		var pre = document.querySelector('.sheen-preloader');
		if (!pre) return;
		function done() {
			pre.classList.add('is-hidden');
			setTimeout(function () { if (pre.parentNode) pre.parentNode.removeChild(pre); }, 700);
		}
		if (reduceMotion) { done(); return; }
		// Minimum on-screen time so it reads as intentional, not a flash.
		var start = performance.now ? performance.now() : 0;
		window.addEventListener('load', function () {
			var elapsed = (performance.now ? performance.now() : 0) - start;
			setTimeout(done, Math.max(0, 900 - elapsed));
		});
		// Hard fallback in case 'load' never fires.
		setTimeout(done, 3500);
	}

	/* ---------------------------------------------------------------------
	 * 8. Custom cursor + magnetic buttons (desktop, fine-pointer only)
	 * ------------------------------------------------------------------- */
	function initCursor() {
		var ring = document.querySelector('.sheen-cursor');
		var dot = document.querySelector('.sheen-cursor-dot');
		var finePointer = window.matchMedia && window.matchMedia('(pointer: fine)').matches;
		if (!ring || !dot || !finePointer || reduceMotion) {
			if (ring) ring.remove(); if (dot) dot.remove();
			return;
		}
		document.documentElement.classList.add('sheen-has-cursor');
		var rx = 0, ry = 0, dx = 0, dy = 0;
		document.addEventListener('pointermove', function (e) {
			dx = e.clientX; dy = e.clientY;
			dot.style.transform = 'translate(' + (dx - 3) + 'px,' + (dy - 3) + 'px)';
		});
		function loop() {
			rx += (dx - rx) * 0.18; ry += (dy - ry) * 0.18;
			ring.style.transform = 'translate(' + (rx - 18) + 'px,' + (ry - 18) + 'px)';
			requestAnimationFrame(loop);
		}
		loop();

		// Hover state + magnetic pull on interactive elements.
		var magnets = document.querySelectorAll('a, button, .wp-element-button, .sheen-btn');
		magnets.forEach(function (el) {
			el.addEventListener('pointerenter', function () { ring.classList.add('is-active'); });
			el.addEventListener('pointerleave', function () {
				ring.classList.remove('is-active');
				el.style.transform = '';
			});
			el.addEventListener('pointermove', function (e) {
				var r = el.getBoundingClientRect();
				var mx = e.clientX - (r.left + r.width / 2);
				var my = e.clientY - (r.top + r.height / 2);
				el.style.transform = 'translate(' + mx * 0.18 + 'px,' + my * 0.28 + 'px)';
			});
		});
	}

	/* ---------------------------------------------------------------------
	 * 9. Word-by-word text reveal (SplitText-style) on .sheen-splitwords
	 * ------------------------------------------------------------------- */
	function initSplitText() {
		var heads = document.querySelectorAll('.sheen-splitwords');
		if (!heads.length) return;
		if (reduceMotion || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
			heads.forEach(function (el) { el.style.opacity = 1; }); // never leave hidden
			return;
		}

		heads.forEach(function (el) {
			if (el.dataset.split) return;
			el.dataset.split = '1';
			// Wrap each word in a masked span (preserve <br>).
			var html = el.innerHTML.split('<br>').map(function (line) {
				return line.trim().split(/\s+/).map(function (w) {
					return '<span class="sheen-word"><span>' + w + '</span></span>';
				}).join(' ');
			}).join('<br>');
			el.innerHTML = html;
			var inners = el.querySelectorAll('.sheen-word > span');
			gsap.set(el, { opacity: 1 });
			gsap.fromTo(inners,
				{ yPercent: 120 },
				{
					yPercent: 0, duration: 0.9, ease: 'power4.out', stagger: 0.06,
					scrollTrigger: { trigger: el, start: 'top 88%' }
				}
			);
		});
	}

	/* ---------------------------------------------------------------------
	 * 10. Header shrink on scroll
	 * ------------------------------------------------------------------- */
	function initHeaderShrink() {
		var header = document.querySelector('.sheen-header');
		if (!header) return;
		function onScroll() {
			if (window.scrollY > 40) header.classList.add('is-scrolled');
			else header.classList.remove('is-scrolled');
		}
		onScroll();
		window.addEventListener('scroll', onScroll, { passive: true });
	}

	/* ---------------------------------------------------------------------
	 * 11. Image carousel (.sheen-carousel) — autoplay, dots, prev/next, swipe
	 * ------------------------------------------------------------------- */
	function initCarousel() {
		document.querySelectorAll('.sheen-carousel').forEach(function (car) {
			var track = car.querySelector('.sheen-carousel-track');
			var slides = car.querySelectorAll('.sheen-carousel-slide');
			if (!track || slides.length < 2) return;
			var n = slides.length, idx = 0, timer = null;
			var dotsWrap = car.querySelector('.sheen-carousel-dots');
			var dots = [];
			if (dotsWrap) {
				for (var i = 0; i < n; i++) {
					(function (i) {
						var b = document.createElement('button');
						b.className = 'sheen-dot';
						b.setAttribute('aria-label', 'Go to slide ' + (i + 1));
						b.addEventListener('click', function () { go(i); rearm(); });
						dotsWrap.appendChild(b);
						dots.push(b);
					})(i);
				}
			}
			function update() {
				track.style.transform = 'translateX(-' + (idx * 100) + '%)';
				dots.forEach(function (d, i) { d.classList.toggle('is-active', i === idx); });
			}
			function go(x) { idx = (x + n) % n; update(); }
			function rearm() { if (timer) { clearInterval(timer); arm(); } }
			function arm() { if (!reduceMotion) timer = setInterval(function () { go(idx + 1); }, 4500); }
			var prev = car.querySelector('.sheen-carousel-prev');
			var next = car.querySelector('.sheen-carousel-next');
			if (prev) prev.addEventListener('click', function () { go(idx - 1); rearm(); });
			if (next) next.addEventListener('click', function () { go(idx + 1); rearm(); });
			// Touch swipe
			var sx = 0;
			car.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; }, { passive: true });
			car.addEventListener('touchend', function (e) {
				var dx = e.changedTouches[0].clientX - sx;
				if (Math.abs(dx) > 40) { go(idx + (dx < 0 ? 1 : -1)); rearm(); }
			});
			car.addEventListener('pointerenter', function () { if (timer) clearInterval(timer); });
			car.addEventListener('pointerleave', arm);
			update(); arm();
		});
	}

	/* ---------------------------------------------------------------------
	 * 12. Scroll progress bar
	 * ------------------------------------------------------------------- */
	function initProgress() {
		var bar = document.querySelector('.sheen-progress');
		if (!bar) return;
		function upd() {
			var h = document.documentElement.scrollHeight - window.innerHeight;
			bar.style.transform = 'scaleX(' + (h > 0 ? Math.min(window.scrollY / h, 1) : 0) + ')';
		}
		upd();
		window.addEventListener('scroll', upd, { passive: true });
		window.addEventListener('resize', upd);
	}

	/* ---------------------------------------------------------------------
	 * 13. Enhanced form controls — flatpickr datepicker + Select2 dropdown
	 * ------------------------------------------------------------------- */
	function initForms() {
		// Datepicker
		if (typeof flatpickr !== 'undefined') {
			flatpickr('.sheen-datepicker', {
				minDate: 'today',
				dateFormat: 'M j, Y',
				disableMobile: true,
				monthSelectorType: 'static'
			});
		}
		// Select2 (needs jQuery)
		var jq = window.jQuery;
		if (jq && jq.fn && jq.fn.select2) {
			jq('.sheen-select2').each(function () {
				jq(this).select2({
					width: '100%',
					minimumResultsForSearch: Infinity, // no search box for short lists
					dropdownParent: jq(this).closest('.sheen-cta-card, form, body').first()
				});
			});
		}
	}

	function boot() {
		initPreloader();
		initLenis();
		initForms();
		initHero3D();
		initSplitText();
		initReveals();
		initCounters();
		initSliders();
		initCarousel();
		initProgress();
		initDarkToggle();
		initCursor();
		initHeaderShrink();
	}
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}
})();
