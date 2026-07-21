<?php
/**
 * Title: Why Us — Feature split
 * Slug: sheen/why-us
 * Categories: sheen, sheen-pages
 * Description: Image + checklist feature split with a parallax image.
 *
 * @package Sheen
 */
$img = esc_url( get_theme_file_uri( 'assets/images/cleaning/woman-mopping.jpg' ) );
?>
<!-- wp:group {"align":"full","className":"sheen-section-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-section-light has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:html -->
	<div class="alignwide sheen-split" style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center">
		<div class="sheen-reveal" style="border-radius:26px;overflow:hidden;box-shadow:0 30px 70px rgba(11,31,58,0.18)">
			<img src="<?php echo $img; ?>" alt="SparkleWave cleaner mopping a bright home" data-parallax="0.12" style="width:100%;height:520px;object-fit:cover;display:block"/>
		</div>
		<div>
			<p class="sheen-eyebrow sheen-reveal" style="color:#FF5A47;margin:0 0 .5rem">Why SparkleWave</p>
			<h2 class="sheen-reveal" style="font-family:var(--wp--preset--font-family--display);font-weight:700;letter-spacing:-0.02em;line-height:1.08;font-size:clamp(1.9rem,3.5vw,2.75rem);margin:0 0 1.25rem">Cleaning you can actually trust</h2>
			<ul style="list-style:none;padding:0;margin:0;display:grid;gap:1.1rem">
				<li class="sheen-reveal" style="display:flex;gap:.9rem"><span style="color:#12B7A8;font-size:1.3rem">✓</span><span><strong>Vetted, background-checked pros</strong> — the same friendly faces every visit.</span></li>
				<li class="sheen-reveal" style="display:flex;gap:.9rem"><span style="color:#12B7A8;font-size:1.3rem">✓</span><span><strong>Fully insured &amp; bonded</strong> — you're covered, always.</span></li>
				<li class="sheen-reveal" style="display:flex;gap:.9rem"><span style="color:#12B7A8;font-size:1.3rem">✓</span><span><strong>Eco-friendly products</strong> — safe for kids, pets and the planet.</span></li>
				<li class="sheen-reveal" style="display:flex;gap:.9rem"><span style="color:#12B7A8;font-size:1.3rem">✓</span><span><strong>100% happiness guarantee</strong> — we re-clean free if it's not perfect.</span></li>
			</ul>
			<div class="sheen-reveal wp-block-buttons" style="margin-top:1.75rem">
				<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#booking">Book your clean</a></div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
