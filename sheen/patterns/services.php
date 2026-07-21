<?php
/**
 * Title: Services — Cards
 * Slug: sheen/services-cards
 * Categories: sheen, sheen-pages
 * Description: Section header plus a three-card grid of services with image, title, copy, and CTA.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"align":"full","className":"sheen-services","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-services has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","textTransform":"uppercase","letterSpacing":"0.18em","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"primary"} -->
	<p class="has-text-align-center has-primary-color has-text-color" style="margin-bottom:0.5rem;font-size:0.85rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase">Our Services</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:0.75rem">Cleaning we do brilliantly</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"}},"textColor":"muted","spacing":{"margin":{"bottom":"var:preset|spacing|60"}}} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:1.1rem">Pick one or bundle them all — every visit is done by the same vetted, insured team.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"className":"is-style-lift","style":{"border":{"radius":"22px","color":"#E3EAF1","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"1.75rem","left":"0","right":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column is-style-lift has-base-background-color has-background has-border-color" style="border-color:#E3EAF1;border-width:1px;border-radius:22px;padding-top:0;padding-right:0;padding-bottom:1.75rem;padding-left:0">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"22px","topRight":"22px"}}}} -->
			<figure class="wp-block-image size-large" style="border-top-left-radius:22px;border-top-right-radius:22px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cleaning/mopping-dining.jpg' ) ); ?>" alt="HuBei-Cleaning team deep-cleaning a home" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-left:1.5rem;padding-right:1.5rem">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.25rem;margin-bottom:0.5rem">Home Cleaning</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Kitchens, baths, floors, and dusting — a top-to-bottom refresh on the schedule that suits you.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600"><a href="/services">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-lift","style":{"border":{"radius":"22px","color":"#E3EAF1","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"1.75rem","left":"0","right":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column is-style-lift has-base-background-color has-background has-border-color" style="border-color:#E3EAF1;border-width:1px;border-radius:22px;padding-top:0;padding-right:0;padding-bottom:1.75rem;padding-left:0">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"22px","topRight":"22px"}}}} -->
			<figure class="wp-block-image size-large" style="border-top-left-radius:22px;border-top-right-radius:22px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cleaning/cleaner-uniform.jpg' ) ); ?>" alt="HuBei-Cleaning cleaner in uniform at an office" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-left:1.5rem;padding-right:1.5rem">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.25rem;margin-bottom:0.5rem">Office Cleaning</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Keep your workspace spotless and your team healthy with reliable daytime or after-hours service.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600"><a href="/services">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"is-style-lift","style":{"border":{"radius":"22px","color":"#E3EAF1","width":"1px"},"spacing":{"padding":{"top":"0","bottom":"1.75rem","left":"0","right":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column is-style-lift has-base-background-color has-background has-border-color" style="border-color:#E3EAF1;border-width:1px;border-radius:22px;padding-top:0;padding-right:0;padding-bottom:1.75rem;padding-left:0">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","style":{"border":{"radius":{"topLeft":"22px","topRight":"22px"}}}} -->
			<figure class="wp-block-image size-large" style="border-top-left-radius:22px;border-top-right-radius:22px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cleaning/crew-equipment.jpg' ) ); ?>" alt="HuBei-Cleaning crew arriving with cleaning equipment" style="aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-left:1.5rem;padding-right:1.5rem">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"1.25rem","bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:1.25rem;margin-bottom:0.5rem">Move-In / Move-Out</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"muted"} -->
				<p class="has-muted-color has-text-color">Handing back keys or settling in? We make the whole place spotless so you get your deposit and peace of mind.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-weight:600"><a href="/services">Learn more →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
