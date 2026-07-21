<?php
/**
 * Title: Pricing — Three tiers
 * Slug: sheen/pricing
 * Categories: sheen, sheen-pages
 * Description: Three pricing cards with a featured middle tier. Native blocks — prices and features are fully editable in the editor.
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

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"className":"sheen-price-card sheen-reveal","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column sheen-price-card sheen-reveal has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.25rem">Refresh</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:1rem">Perfect for regular upkeep</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"sheen-price-amount","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h3 class="wp-block-heading sheen-price-amount" style="margin-top:0;margin-bottom:0">$89</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small","style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:0">per visit</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"1.5rem"}},"typography":{"lineHeight":"2"}}} -->
			<ul class="wp-block-list" style="margin-top:1.25rem;margin-bottom:1.5rem;line-height:2"><!-- wp:list-item --><li>Up to 2 bedrooms</li><!-- /wp:list-item --><!-- wp:list-item --><li>Kitchen &amp; bathrooms</li><!-- /wp:list-item --><!-- wp:list-item --><li>Dusting &amp; floors</li><!-- /wp:list-item --><!-- wp:list-item --><li>Eco products</li><!-- /wp:list-item --></ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ink","textColor":"base","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-base-color has-ink-background-color has-text-color has-background wp-element-button" href="#booking">Choose Refresh</a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"sheen-price-card is-featured sheen-reveal","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column sheen-price-card is-featured sheen-reveal has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
			<!-- wp:paragraph {"className":"sheen-price-badge","backgroundColor":"primary","textColor":"base","fontSize":"small","style":{"spacing":{"margin":{"top":"0","bottom":"0.75rem"},"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em","fontWeight":"700"},"border":{"radius":"999px"}}} -->
			<p class="sheen-price-badge has-base-color has-primary-background-color has-text-color has-background has-small-font-size" style="border-radius:999px;margin-top:0;margin-bottom:0.75rem;padding:0.25rem 0.75rem;font-weight:700;letter-spacing:0.06em;text-transform:uppercase">Most popular</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.25rem">Deep Clean</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:1rem">Top-to-bottom, every corner</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"sheen-price-amount","textColor":"primary","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h3 class="wp-block-heading sheen-price-amount has-primary-color has-text-color" style="margin-top:0;margin-bottom:0">$149</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small","style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:0">per visit</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"1.5rem"}},"typography":{"lineHeight":"2"}}} -->
			<ul class="wp-block-list" style="margin-top:1.25rem;margin-bottom:1.5rem;line-height:2"><!-- wp:list-item --><li>Up to 4 bedrooms</li><!-- /wp:list-item --><!-- wp:list-item --><li>Inside appliances</li><!-- /wp:list-item --><!-- wp:list-item --><li>Baseboards &amp; windows</li><!-- /wp:list-item --><!-- wp:list-item --><li>Priority scheduling</li><!-- /wp:list-item --></ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="#booking">Choose Deep Clean</a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"sheen-price-card sheen-reveal","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column sheen-price-card sheen-reveal has-base-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.25rem">Move In/Out</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:1rem">Get the deposit back</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"sheen-price-amount","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h3 class="wp-block-heading sheen-price-amount" style="margin-top:0;margin-bottom:0">$229</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","fontSize":"small","style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p class="has-muted-color has-text-color has-small-font-size" style="margin-top:0">per visit</p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"1.5rem"}},"typography":{"lineHeight":"2"}}} -->
			<ul class="wp-block-list" style="margin-top:1.25rem;margin-bottom:1.5rem;line-height:2"><!-- wp:list-item --><li>Whole property</li><!-- /wp:list-item --><!-- wp:list-item --><li>Inside cabinets</li><!-- /wp:list-item --><!-- wp:list-item --><li>Wall spot-cleaning</li><!-- /wp:list-item --><!-- wp:list-item --><li>Landlord-ready checklist</li><!-- /wp:list-item --></ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ink","textColor":"base","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-base-color has-ink-background-color has-text-color has-background wp-element-button" href="#booking">Choose Move In/Out</a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
