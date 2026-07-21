<?php
/**
 * Title: Pricing — Three tiers
 * Slug: sheen/pricing
 * Categories: sheen, sheen-pages
 * Description: Three pricing cards with a featured middle tier.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"align":"full","className":"sheen-section-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-section-light has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","className":"sheen-eyebrow sheen-reveal","textColor":"primary","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
	<p class="sheen-eyebrow sheen-reveal has-text-align-center has-primary-color has-text-color" style="margin-bottom:0.5rem">Simple pricing</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"sheen-reveal","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center sheen-reveal" style="margin-bottom:var(--wp--preset--spacing--60)">Plans that fit your home</h2>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<div class="alignwide sheen-pricing-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;align-items:stretch">
		<div class="sheen-price-card sheen-reveal" style="padding:2rem;background:#fff">
			<h3 style="font-family:var(--wp--preset--font-family--display);margin:0 0 .25rem">Refresh</h3>
			<p style="color:#5A6B7B;margin:0 0 1rem">Perfect for regular upkeep</p>
			<div class="sheen-price-amount" style="color:#0B1F3A">$89<span style="font-size:1rem;color:#5A6B7B;font-family:var(--wp--preset--font-family--body);font-weight:400">/visit</span></div>
			<ul style="list-style:none;padding:0;margin:1.25rem 0;display:grid;gap:.6rem;color:#0B1F3A">
				<li>✓ Up to 2 bedrooms</li><li>✓ Kitchen &amp; bathrooms</li><li>✓ Dusting &amp; floors</li><li>✓ Eco products</li>
			</ul>
			<a class="sheen-btn sheen-btn-dark" href="#booking">Choose Refresh</a>
		</div>
		<div class="sheen-price-card is-featured sheen-reveal" style="padding:2.25rem 2rem;background:#fff;position:relative">
			<span style="position:absolute;top:-14px;left:50%;transform:translateX(-50%);background:#FF5A47;color:#fff;font-size:.75rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;padding:.35rem .9rem;border-radius:999px">Most popular</span>
			<h3 style="font-family:var(--wp--preset--font-family--display);margin:0 0 .25rem">Deep Clean</h3>
			<p style="color:#5A6B7B;margin:0 0 1rem">Top-to-bottom, every corner</p>
			<div class="sheen-price-amount" style="color:#FF5A47">$149<span style="font-size:1rem;color:#5A6B7B;font-family:var(--wp--preset--font-family--body);font-weight:400">/visit</span></div>
			<ul style="list-style:none;padding:0;margin:1.25rem 0;display:grid;gap:.6rem;color:#0B1F3A">
				<li>✓ Up to 4 bedrooms</li><li>✓ Inside appliances</li><li>✓ Baseboards &amp; windows</li><li>✓ Priority scheduling</li>
			</ul>
			<a class="sheen-btn sheen-btn-primary" href="#booking">Choose Deep Clean</a>
		</div>
		<div class="sheen-price-card sheen-reveal" style="padding:2rem;background:#fff">
			<h3 style="font-family:var(--wp--preset--font-family--display);margin:0 0 .25rem">Move In/Out</h3>
			<p style="color:#5A6B7B;margin:0 0 1rem">Get the deposit back</p>
			<div class="sheen-price-amount" style="color:#0B1F3A">$229<span style="font-size:1rem;color:#5A6B7B;font-family:var(--wp--preset--font-family--body);font-weight:400">/visit</span></div>
			<ul style="list-style:none;padding:0;margin:1.25rem 0;display:grid;gap:.6rem;color:#0B1F3A">
				<li>✓ Whole property</li><li>✓ Inside cabinets</li><li>✓ Wall spot-cleaning</li><li>✓ Landlord-ready checklist</li>
			</ul>
			<a class="sheen-btn sheen-btn-dark" href="#booking">Choose Move In/Out</a>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
