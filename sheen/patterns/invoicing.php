<?php
/**
 * Title: Invoicing feature
 * Slug: sheen/invoicing
 * Categories: sheen, sheen-pages
 * Description: Homepage section that sells transparent, professional invoicing,
 *              with a branded mock-invoice visual and a quote CTA.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sheen-invoicing","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sheen-invoicing">
	<!-- wp:html -->
	<style>
		.sheen-invoicing{padding:clamp(3.5rem,8vw,6rem) 1.5rem;background:#f4f6fb}
		.sheen-invoicing .sheen-inv-grid{max-width:1120px;margin:0 auto;display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(2rem,5vw,4rem);align-items:center}
		.sheen-invoicing .sheen-inv-eyebrow{font-weight:700;letter-spacing:.14em;text-transform:uppercase;font-size:.78rem;color:#FF5A47;margin:0 0 .9rem}
		.sheen-invoicing h2{font-family:var(--wp--preset--font-family--display,inherit);font-weight:700;letter-spacing:-.02em;line-height:1.08;font-size:clamp(1.9rem,3.6vw,2.85rem);margin:0 0 1rem;color:#0f1729}
		.sheen-invoicing .sheen-inv-sub{color:#5b6472;font-size:clamp(1rem,1.4vw,1.15rem);line-height:1.65;margin:0 0 1.5rem;max-width:34ch}
		.sheen-invoicing .sheen-inv-list{list-style:none;margin:0 0 1.9rem;padding:0;display:grid;gap:.75rem}
		.sheen-invoicing .sheen-inv-list li{display:flex;gap:.7rem;align-items:flex-start;color:#0f1729;font-weight:500}
		.sheen-invoicing .sheen-inv-list .tick{flex:none;width:1.5rem;height:1.5rem;border-radius:50%;display:grid;place-items:center;background:linear-gradient(120deg,#FF5A47,#FF8A3D);color:#fff;font-size:.8rem;font-weight:700}
		.sheen-invoicing .sheen-inv-cta{display:inline-flex;align-items:center;gap:.5rem;background:#0f1729;color:#fff;font-weight:700;text-decoration:none;padding:.95rem 1.6rem;border-radius:14px;box-shadow:0 10px 30px rgba(15,23,41,.22);transition:transform .2s ease}
		.sheen-invoicing .sheen-inv-cta:hover{transform:translateY(-2px)}
		/* mock invoice card */
		.sheen-inv-card{background:#fff;border-radius:20px;overflow:hidden;box-shadow:0 30px 70px rgba(16,23,41,.14);transform:rotate(-1.5deg);transition:transform .35s ease}
		.sheen-inv-card:hover{transform:rotate(0deg) translateY(-4px)}
		.sheen-inv-card .top{background:linear-gradient(120deg,#FF5A47 0%,#FF8A3D 60%,#FFB03D 100%);color:#fff;padding:1.4rem 1.6rem;display:flex;justify-content:space-between;align-items:flex-start}
		.sheen-inv-card .brand{font-weight:800;font-size:1.05rem;letter-spacing:-.01em}
		.sheen-inv-card .brand small{display:block;font-weight:500;opacity:.9;font-size:.68rem;margin-top:2px}
		.sheen-inv-card .doc{text-align:right}
		.sheen-inv-card .doc b{font-size:1.15rem;letter-spacing:.14em}
		.sheen-inv-card .doc span{display:block;font-size:.72rem;opacity:.95;margin-top:3px}
		.sheen-inv-card .badge{display:inline-block;margin-top:.5rem;padding:3px 9px;border-radius:999px;font-size:.62rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;background:#0fae6e;color:#fff}
		.sheen-inv-card .body{padding:1.3rem 1.6rem 1.6rem}
		.sheen-inv-card .row{display:flex;justify-content:space-between;font-size:.86rem;padding:.55rem 0;border-bottom:1px solid #eef1f6;color:#0f1729}
		.sheen-inv-card .row span:last-child{font-variant-numeric:tabular-nums;color:#5b6472}
		.sheen-inv-card .total{display:flex;justify-content:space-between;margin-top:.9rem;font-weight:800;font-size:1.1rem;color:#0f1729}
		@media (max-width:820px){
			.sheen-invoicing .sheen-inv-grid{grid-template-columns:1fr;gap:2.5rem}
			.sheen-inv-card{transform:none;max-width:420px}
			.sheen-inv-card:hover{transform:translateY(-4px)}
		}
	</style>
	<div class="sheen-inv-grid">
		<div class="sheen-inv-copy">
			<p class="sheen-inv-eyebrow">Billing, handled</p>
			<h2>Clear invoices, zero surprises</h2>
			<p class="sheen-inv-sub">Every booking comes with a clean, itemised invoice you can download as a PDF in one click. Know exactly what you’re paying for — before and after the clean.</p>
			<ul class="sheen-inv-list">
				<li><span class="tick">✓</span> Itemised line by line — no hidden fees</li>
				<li><span class="tick">✓</span> Instant, downloadable PDF receipt</li>
				<li><span class="tick">✓</span> Tax / VAT ready for your records</li>
				<li><span class="tick">✓</span> Pay your way — M-Pesa, card or bank</li>
			</ul>
			<a class="sheen-inv-cta" href="#booking">Get your quote →</a>
		</div>
		<div class="sheen-inv-card" aria-hidden="true">
			<div class="top">
				<div class="brand">HuBei-Cleaning<small>Professional cleaning services</small></div>
				<div class="doc"><b>INVOICE</b><span>INV-0042</span><span class="badge">Paid</span></div>
			</div>
			<div class="body">
				<div class="row"><span>Deep clean — 3 bedroom</span><span>$180.00</span></div>
				<div class="row"><span>Kitchen &amp; appliances</span><span>$60.00</span></div>
				<div class="row"><span>Windows (interior)</span><span>$40.00</span></div>
				<div class="total"><span>Total</span><span>$280.00</span></div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
