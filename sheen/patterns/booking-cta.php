<?php
/**
 * Title: Booking CTA (Long)
 * Slug: sheen/booking-cta
 * Categories: sheen, sheen-pages, call-to-action
 * Description: Tall, full-width call-to-action band with copy, benefits, and a quick-quote card.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"booking","className":"sheen-cta-long","style":{"color":{"gradient":"linear-gradient(120deg, #FF5A47 0%, #FF8A3D 60%, #FFB03D 100%)"}},"layout":{"type":"constrained"}} -->
<section id="booking" class="wp-block-group alignfull sheen-cta-long has-background" style="background:linear-gradient(120deg, #FF5A47 0%, #FF8A3D 60%, #FFB03D 100%)">
	<!-- wp:html -->
	<div class="alignwide sheen-cta-grid">
		<div class="sheen-cta-copy">
			<p class="sheen-cta-eyebrow">Ready when you are</p>
			<h2>Book a spotless clean<br>in 60 seconds</h2>
			<p class="sheen-cta-sub">Tell us about your space and get an instant, no-obligation quote — plus 30% off your first clean. No contracts, no pressure, ever.</p>
			<ul class="sheen-cta-list">
				<li>✓ Free, instant online quote</li>
				<li>✓ Vetted, insured &amp; bonded pros</li>
				<li>✓ 100% happiness guarantee — we re-clean free</li>
				<li>✓ Flexible scheduling, cancel anytime</li>
			</ul>
			<div class="sheen-cta-actions">
				<a class="sheen-cta-btn-dark" href="/contact">Get My Free Quote</a>
				<a class="sheen-cta-btn-ghost" href="tel:+15558880000">📞 (555) 888-0000</a>
			</div>
			<p class="sheen-cta-trust">★★★★★ Rated 4.9/5 by 600+ happy households</p>
		</div>

		<div class="sheen-cta-card">
			<h3>Get your quote</h3>
			<label>Full name<input type="text" placeholder="Jane Doe" /></label>
			<label>Service<select class="sheen-select2"><option value="">Choose a service…</option><option>Home Cleaning</option><option>Office Cleaning</option><option>Deep Clean</option><option>Move In / Move Out</option><option>Carpet &amp; Upholstery</option><option>Window Cleaning</option></select></label>
			<label>Preferred date<input type="text" class="sheen-datepicker" placeholder="Select a date" readonly /></label>
			<a class="sheen-cta-card-btn" href="/contact">See my price →</a>
			<p class="sheen-cta-card-note">No spam. No card required.</p>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
