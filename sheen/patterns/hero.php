<?php
/**
 * Title: Hero — Cleaning (Video)
 * Slug: sheen/hero-cleaning
 * Categories: sheen, sheen-pages, banner
 * Description: Full-viewport hero with a looping video background, gradient overlay, word-reveal headline, dual CTA, and a floating discount badge.
 *
 * @package Sheen
 */
$video  = esc_url( get_theme_file_uri( 'assets/videos/hero.mp4' ) );
$poster = esc_url( get_theme_file_uri( 'assets/images/cleaning/hero-team.jpg' ) );
?>
<!-- wp:group {"align":"full","className":"sheen-hero sheen-hero--video","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-hero sheen-hero--video has-ink-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:html -->
	<div class="sheen-hero-video">
		<video autoplay muted loop playsinline preload="auto" poster="<?php echo $poster; ?>">
			<source src="<?php echo $video; ?>" type="video/mp4">
		</video>
	</div>
	<div class="sheen-hero-overlay"></div>
	<!-- /wp:html -->

	<!-- wp:group {"align":"wide","className":"sheen-hero-content","layout":{"type":"constrained","contentSize":"760px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide sheen-hero-content">
		<!-- wp:paragraph {"className":"sheen-eyebrow","style":{"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"secondary"} -->
		<p class="sheen-eyebrow has-secondary-color has-text-color" style="margin-bottom:1rem">The best clean in town</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"sheen-splitwords","style":{"typography":{"fontSize":"clamp(3rem, 7vw, 5.5rem)","lineHeight":"1.0"}},"textColor":"base"} -->
		<h1 class="wp-block-heading sheen-splitwords has-base-color has-text-color" style="font-size:clamp(3rem, 7vw, 5.5rem);line-height:1.0">Sparkling homes,<br>zero effort from you</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem"},"color":{"text":"#DCE6F0"},"spacing":{"margin":{"top":"1.25rem","bottom":"2rem"}}}} -->
		<p class="has-text-color" style="color:#DCE6F0;margin-top:1.25rem;margin-bottom:2rem;font-size:1.2rem;max-width:560px">Trusted, insured cleaners for homes and offices. Book online in under a minute and come home to a place that shines.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"1rem"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#booking">Get a Free Quote</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"color":"#5A7290","width":"1px"},"color":{"background":"transparent"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-background has-border-color wp-element-button" style="border-color:#5A7290;border-width:1px;background-color:transparent" href="/services">View Services</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"2.5rem"},"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group" style="margin-top:2.5rem">
			<!-- wp:paragraph {"style":{"color":{"text":"#DCE6F0"},"typography":{"fontSize":"0.9rem"}}} -->
			<p class="has-text-color" style="color:#DCE6F0;font-size:0.9rem">★★★★★ &nbsp;4.9/5 from 600+ homes</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#DCE6F0"},"typography":{"fontSize":"0.9rem"}}} -->
			<p class="has-text-color" style="color:#DCE6F0;font-size:0.9rem">✓ Fully insured &nbsp; ✓ Satisfaction guaranteed</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="sheen-hero-badge" aria-hidden="false"><span>30%</span><small>Off 1st clean</small></div>
	<div class="sheen-scroll-cue" aria-hidden="true"><span></span></div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
