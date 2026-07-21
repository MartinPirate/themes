<?php
/**
 * Title: Contact & Booking Form
 * Slug: sheen/contact-form
 * Categories: sheen, sheen-pages
 * Description: Two-column booking/quote form with brand datepicker + select, alongside contact details.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"align":"full","className":"sheen-section-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-section-light has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:html -->
	<div class="alignwide sheen-contact-grid">
		<div class="sheen-contact-formwrap sheen-reveal">
			<p class="sheen-eyebrow" style="color:#FF5A47;margin:0 0 .5rem">Request a quote</p>
			<h2 style="font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-.02em;margin:0 0 1.5rem;font-size:clamp(1.9rem,3.5vw,2.6rem)">Book your clean</h2>
			<form class="sheen-form" onsubmit="return false;">
				<div class="sheen-form-row">
					<label>Full name<input type="text" placeholder="Jane Doe" required></label>
					<label>Email<input type="email" placeholder="you@email.com" required></label>
				</div>
				<div class="sheen-form-row">
					<label>Phone<input type="tel" placeholder="(555) 000-0000"></label>
					<label>Service<select class="sheen-select2"><option value="">Choose a service…</option><option>Home Cleaning</option><option>Office Cleaning</option><option>Deep Clean</option><option>Move In / Move Out</option><option>Carpet &amp; Upholstery</option><option>Window Cleaning</option></select></label>
				</div>
				<div class="sheen-form-row">
					<label>Address<input type="text" placeholder="123 Main St, City"></label>
					<label>Preferred date<input type="text" class="sheen-datepicker" placeholder="Select a date" readonly></label>
				</div>
				<label>Special notes<textarea rows="4" placeholder="Pets, parking, areas to focus on…"></textarea></label>
				<button type="submit" class="sheen-form-submit">Get my free quote →</button>
				<p class="sheen-form-note">We'll reply within 1 business hour. No spam, ever.</p>
			</form>
		</div>

		<aside class="sheen-contact-aside sheen-reveal">
			<h3>Talk to a human</h3>
			<p>Prefer to chat? We're friendly and fast.</p>
			<ul class="sheen-contact-list">
				<li><span>📞</span><a href="tel:+15558880000">(555) 888-0000</a></li>
				<li><span>✉</span><a href="mailto:hello@sparklewave.com">hello@sparklewave.com</a></li>
				<li><span>📍</span>123 Sparkle Ave, Suite 100</li>
				<li><span>🕒</span>Mon–Sat, 8:00 AM – 6:00 PM</li>
			</ul>
			<div class="sheen-contact-badges">
				<span>🛡️ Insured &amp; bonded</span>
				<span>⭐ 4.9/5 rated</span>
				<span>🔁 Re-clean guarantee</span>
			</div>
		</aside>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
