<?php
/**
 * Title: Work Carousel
 * Slug: sheen/carousel
 * Categories: sheen, sheen-pages
 * Description: Full-width autoplaying image carousel showcasing recent work.
 *
 * @package Sheen
 */
$base = get_theme_file_uri( 'assets/images/cleaning/' );
$slides = array(
	array( 'team-orange.jpg',    'A team you can trust',   'Vetted, uniformed pros on every job.' ),
	array( 'mopping-dining.jpg', 'Spotless interiors',     'Kitchens and living spaces, top to bottom.' ),
	array( 'cleaner-uniform.jpg','Detail that shows',      'The little things done right, every visit.' ),
	array( 'crew-equipment.jpg', 'Ready for anything',     'Move-ins, move-outs and deep cleans.' ),
	array( 'woman-mopping.jpg',  'Eco-friendly, always',   'Safe products for kids, pets and the planet.' ),
);
?>
<!-- wp:group {"align":"full","className":"sheen-section-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-section-light has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center","className":"sheen-eyebrow sheen-reveal","textColor":"primary","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
	<p class="sheen-eyebrow sheen-reveal has-text-align-center has-primary-color has-text-color" style="margin-bottom:0.5rem">Our recent work</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","className":"sheen-reveal","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading has-text-align-center sheen-reveal" style="margin-bottom:var(--wp--preset--spacing--60)">See the SparkleWave difference</h2>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<div class="alignwide sheen-carousel sheen-reveal">
		<div class="sheen-carousel-track">
			<?php foreach ( $slides as $s ) : ?>
			<div class="sheen-carousel-slide">
				<img src="<?php echo esc_url( $base . $s[0] ); ?>" alt="<?php echo esc_attr( $s[1] ); ?>" loading="lazy" />
				<div class="sheen-carousel-cap">
					<h3><?php echo esc_html( $s[1] ); ?></h3>
					<p><?php echo esc_html( $s[2] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<button class="sheen-carousel-prev" aria-label="Previous slide">‹</button>
		<button class="sheen-carousel-next" aria-label="Next slide">›</button>
		<div class="sheen-carousel-dots"></div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
