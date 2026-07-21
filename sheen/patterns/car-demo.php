<?php
/**
 * Title: Car Detailing — Demo page
 * Slug: sheen/car-demo
 * Categories: sheen
 * Description: Self-contained dark car-detailing landing (multi-niche demo).
 *
 * @package Sheen
 */
$img = get_theme_file_uri( 'assets/images/car/' );
?>
<!-- wp:html -->
<header class="sheen-car-header">
	<div class="car-wrap">
		<div class="sheen-car-logo">Apex<span>Shine</span></div>
		<nav class="sheen-car-nav">
			<a href="#car-services">Services</a>
			<a href="#car-pricing">Pricing</a>
			<a href="#car-cta">Contact</a>
			<a class="sheen-car-btn" href="#car-cta">Book a Wash</a>
		</nav>
	</div>
</header>

<section class="sheen-car-hero">
	<img class="car-hero-bg" src="<?php echo esc_url( $img . 'car-3.jpg' ); ?>" alt="Car covered in foam at the wash">
	<div class="car-wrap">
		<p class="car-eyebrow">Premium auto care</p>
		<h1>Showroom shine,<br><span class="car-blue-text">every drive</span></h1>
		<p class="lead">Hand washes, deep interior details and ceramic coatings that make your car look better than the day you bought it. Mobile service available.</p>
		<div class="car-hero-actions">
			<a class="sheen-car-btn" href="#car-cta">Book a Wash →</a>
			<a class="sheen-car-btn-ghost" href="#car-pricing">See Packages</a>
		</div>
	</div>
</section>

<section class="sheen-car-section" id="car-services">
	<div class="car-wrap">
		<div class="sheen-car-head">
			<p class="car-eyebrow">What we do</p>
			<h2>Detailing done right</h2>
			<p>From a quick refresh to a full paint-correction package.</p>
		</div>
		<div class="sheen-car-grid">
			<div class="sheen-car-card">
				<img src="<?php echo esc_url( $img . 'car-1.jpg' ); ?>" alt="Exterior wash">
				<div class="car-card-body"><h3>Exterior Wash</h3><p>Foam bath, hand dry, tyre shine and streak-free glass.</p><span class="car-price">from $25</span></div>
			</div>
			<div class="sheen-car-card">
				<img src="<?php echo esc_url( $img . 'car-4.jpg' ); ?>" alt="Interior detail">
				<div class="car-card-body"><h3>Interior Detail</h3><p>Deep vacuum, steam clean, leather care and odour removal.</p><span class="car-price">from $69</span></div>
			</div>
			<div class="sheen-car-card">
				<img src="<?php echo esc_url( $img . 'car-5.jpg' ); ?>" alt="Ceramic coating">
				<div class="car-card-body"><h3>Ceramic Coating</h3><p>Paint correction plus a coating that lasts for years.</p><span class="car-price">from $299</span></div>
			</div>
		</div>
	</div>
</section>

<section class="sheen-car-section alt">
	<div class="car-wrap">
		<div class="sheen-car-stats">
			<div><div class="num" data-count="15000" data-suffix="+">0</div><p>Cars detailed</p></div>
			<div><div class="num" data-count="4.9">0</div><p>Average rating</p></div>
			<div><div class="num" data-count="12" data-suffix="+">0</div><p>Years in business</p></div>
			<div><div class="num" data-count="60" data-suffix="min">0</div><p>Express wash</p></div>
		</div>
	</div>
</section>

<section class="sheen-car-section" id="car-pricing">
	<div class="car-wrap">
		<div class="sheen-car-head">
			<p class="car-eyebrow">Packages</p>
			<h2>Pick your shine</h2>
			<p>Transparent pricing, no surprises. Mobile add-on available.</p>
		</div>
		<div class="sheen-car-pricing">
			<div class="sheen-car-plan">
				<h3>Express</h3><div class="amt">$25</div>
				<ul><li>Foam exterior wash</li><li>Hand dry</li><li>Tyre shine</li><li>Glass clean</li></ul>
				<a class="sheen-car-btn-ghost" href="#car-cta">Choose Express</a>
			</div>
			<div class="sheen-car-plan featured">
				<p class="car-eyebrow">Most popular</p>
				<h3>Full Detail</h3><div class="amt">$89</div>
				<ul><li>Everything in Express</li><li>Interior deep clean</li><li>Leather &amp; trim care</li><li>Wax &amp; seal</li></ul>
				<a class="sheen-car-btn" href="#car-cta">Choose Full Detail</a>
			</div>
			<div class="sheen-car-plan">
				<h3>Ceramic</h3><div class="amt">$299</div>
				<ul><li>Paint correction</li><li>Ceramic coating</li><li>Multi-year protection</li><li>Wheel coating</li></ul>
				<a class="sheen-car-btn-ghost" href="#car-cta">Choose Ceramic</a>
			</div>
		</div>
	</div>
</section>

<section class="sheen-car-section sheen-car-cta" id="car-cta">
	<div class="car-wrap">
		<p class="car-eyebrow">Ready when you are</p>
		<h2>Ready to turn heads?</h2>
		<p style="color:#AEB9CC;max-width:34rem;margin:0.75rem auto 2rem">Book online in seconds or call us — mobile detailing comes to your driveway.</p>
		<a class="sheen-car-btn" href="tel:+15558880000">📞 Book: (555) 888-0000</a>
	</div>
</section>

<footer class="sheen-car-footer">
	<div class="car-wrap">© ApexShine Auto Detailing — a Sheen theme demo (car-detailing niche).</div>
</footer>
<!-- /wp:html -->
