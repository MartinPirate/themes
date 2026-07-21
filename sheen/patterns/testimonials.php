<?php
/**
 * Title: Testimonials — Slider
 * Slug: sheen/testimonials
 * Categories: sheen, sheen-pages
 * Description: Auto-rotating testimonial slider with prev/next controls.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"align":"full","className":"sheen-section-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-section-light has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","className":"sheen-eyebrow sheen-reveal","textColor":"primary","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
	<p class="sheen-eyebrow sheen-reveal has-text-align-center has-primary-color has-text-color" style="margin-bottom:0.5rem">Loved by locals</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"sheen-reveal","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center sheen-reveal" style="margin-bottom:var(--wp--preset--spacing--60)">What our clients say</h2>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<div class="sheen-slider sheen-reveal" style="max-width:760px;margin-inline:auto;text-align:center">
		<div class="sheen-slide">
			<p style="font-size:1.5rem;line-height:1.5;font-family:var(--wp--preset--font-family--display);font-weight:500;color:#0B1F3A">“They turned our chaotic 3-bed into a showroom in two hours. The team was punctual, kind, and thorough. We've booked them every fortnight since.”</p>
			<p style="color:#FF5A47;font-weight:600;margin:.75rem 0 0">Danielle R. — Austin, TX</p>
		</div>
		<div class="sheen-slide">
			<p style="font-size:1.5rem;line-height:1.5;font-family:var(--wp--preset--font-family--display);font-weight:500;color:#0B1F3A">“Best cleaning service I've used, hands down. Booking took a minute and the results were spotless. Worth every penny.”</p>
			<p style="color:#FF5A47;font-weight:600;margin:.75rem 0 0">Marcus T. — Denver, CO</p>
		</div>
		<div class="sheen-slide">
			<p style="font-size:1.5rem;line-height:1.5;font-family:var(--wp--preset--font-family--display);font-weight:500;color:#0B1F3A">“Our office has never looked better and the team works around our schedule perfectly. Reliable, professional, and genuinely nice people.”</p>
			<p style="color:#FF5A47;font-weight:600;margin:.75rem 0 0">Priya S. — Seattle, WA</p>
		</div>
		<div class="sheen-slider-nav">
			<button class="sheen-prev" aria-label="Previous testimonial">‹</button>
			<button class="sheen-next" aria-label="Next testimonial">›</button>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
