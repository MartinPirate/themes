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
		.sheen-invoicing{padding:clamp(3.5rem,8vw,6rem) 1.5rem;background:linear-gradient(180deg,#f6f8fc 0%,#eef1f8 100%)}
		.sheen-invoicing .sheen-inv-grid{max-width:1120px;margin:0 auto;display:grid;grid-template-columns:1.02fr .98fr;gap:clamp(2rem,5vw,4.5rem);align-items:center}
		.sheen-invoicing .sheen-inv-eyebrow{font-weight:700;letter-spacing:.14em;text-transform:uppercase;font-size:.78rem;color:#FF5A47;margin:0 0 .9rem}
		.sheen-invoicing h2{font-family:var(--wp--preset--font-family--display,inherit);font-weight:700;letter-spacing:-.02em;line-height:1.08;font-size:clamp(1.9rem,3.6vw,2.85rem);margin:0 0 1rem;color:#0f1729}
		.sheen-invoicing .sheen-inv-sub{color:#5b6472;font-size:clamp(1rem,1.4vw,1.15rem);line-height:1.65;margin:0 0 1.5rem;max-width:34ch}
		.sheen-invoicing .sheen-inv-list{list-style:none;margin:0 0 1.9rem;padding:0;display:grid;gap:.75rem}
		.sheen-invoicing .sheen-inv-list li{display:flex;gap:.7rem;align-items:flex-start;color:#0f1729;font-weight:500}
		.sheen-invoicing .sheen-inv-list .tick{flex:none;width:1.5rem;height:1.5rem;border-radius:50%;display:grid;place-items:center;background:linear-gradient(120deg,#FF5A47,#FF8A3D);color:#fff;font-size:.8rem;font-weight:700}
		.sheen-invoicing .sheen-inv-cta{display:inline-flex;align-items:center;gap:.5rem;background:#0f1729;color:#fff;font-weight:700;text-decoration:none;padding:.95rem 1.6rem;border-radius:14px;box-shadow:0 10px 30px rgba(15,23,41,.22);transition:transform .2s ease}
		.sheen-invoicing .sheen-inv-cta:hover{transform:translateY(-2px)}

		/* ---- premium receipt-style invoice card ---- */
		.sheen-inv-stack{position:relative;max-width:440px;margin-inline:auto}
		.sheen-inv-stack::before{content:"";position:absolute;inset:20px -16px -20px 26px;background:#fff;border-radius:24px;box-shadow:0 24px 60px rgba(16,23,41,.10);transform:rotate(3.5deg);opacity:.55}
		.sheen-inv-card{position:relative;background:#fff;border-radius:24px;overflow:hidden;box-shadow:0 36px 84px rgba(16,23,41,.20);transform:rotate(-1.4deg);transition:transform .4s cubic-bezier(.2,.7,.2,1)}
		.sheen-inv-card:hover{transform:rotate(0) translateY(-6px)}
		.sheen-inv-accent{height:6px;background:linear-gradient(90deg,#FF5A47,#FF8A3D 55%,#FFB03D)}
		.sheen-inv-head{display:flex;align-items:flex-start;justify-content:space-between;gap:1rem;padding:1.5rem 1.65rem 1.2rem}
		.sheen-inv-id{display:flex;align-items:center;gap:.75rem}
		.sheen-inv-mark{width:2.7rem;height:2.7rem;border-radius:15px;background:linear-gradient(135deg,#FF5A47,#FFB03D);display:grid;place-items:center;color:#fff;font-weight:800;font-size:1.2rem;box-shadow:0 10px 22px rgba(255,90,71,.42)}
		.sheen-inv-brand b{display:block;font-weight:800;color:#0f1729;font-size:1rem;letter-spacing:-.01em;line-height:1.15}
		.sheen-inv-brand span{font-size:.72rem;color:#94a0b0;font-weight:500}
		.sheen-inv-doc{text-align:right}
		.sheen-inv-doc .lbl{font-size:.66rem;font-weight:800;letter-spacing:.24em;color:#c3cad6}
		.sheen-inv-doc .no{font-weight:700;color:#0f1729;font-size:.9rem;margin-top:2px;font-variant-numeric:tabular-nums}
		.sheen-inv-pill{display:inline-flex;align-items:center;gap:.35rem;margin-top:.5rem;padding:.3rem .62rem;border-radius:999px;font-size:.62rem;font-weight:800;letter-spacing:.06em;text-transform:uppercase;background:#e7f8f0;color:#0aa568}
		.sheen-inv-pill .dot{width:.42rem;height:.42rem;border-radius:50%;background:#0aa568;box-shadow:0 0 0 3px rgba(10,165,104,.18)}
		.sheen-inv-lines{padding:.3rem 1.65rem 0}
		.sheen-inv-li{display:flex;justify-content:space-between;align-items:center;padding:.62rem 0;border-bottom:1px dashed #e9edf3;font-size:.88rem;color:#0f1729}
		.sheen-inv-li .d{display:flex;align-items:center;gap:.55rem}
		.sheen-inv-li .q{font-size:.62rem;font-weight:800;color:#98a3b2;background:#f1f4f8;border-radius:6px;padding:.14rem .42rem}
		.sheen-inv-li .a{font-variant-numeric:tabular-nums;color:#5b6472;font-weight:600}
		.sheen-inv-tot{padding:.85rem 1.65rem 0}
		.sheen-inv-tot .r{display:flex;justify-content:space-between;font-size:.82rem;color:#7a8494;padding:.22rem 0}
		.sheen-inv-tot .r.grand{margin-top:.7rem;padding:.95rem 1.1rem;border-radius:16px;color:#fff;font-weight:800;font-size:.95rem;background:linear-gradient(120deg,#FF5A47 0%,#FF8A3D 100%);box-shadow:0 14px 30px rgba(255,120,60,.34)}
		.sheen-inv-tot .r.grand .amt{font-size:1.35rem;letter-spacing:-.01em;font-variant-numeric:tabular-nums}
		.sheen-inv-perf{position:relative;height:1.5rem;margin-top:1.1rem}
		.sheen-inv-perf::before,.sheen-inv-perf::after{content:"";position:absolute;top:50%;width:1.5rem;height:1.5rem;border-radius:50%;background:#eef1f8;transform:translateY(-50%)}
		.sheen-inv-perf::before{left:-.75rem}
		.sheen-inv-perf::after{right:-.75rem}
		.sheen-inv-perf .line{position:absolute;top:50%;left:1rem;right:1rem;border-top:2px dashed #dfe4ee}
		.sheen-inv-foot{display:flex;align-items:center;justify-content:space-between;gap:.6rem;padding:.15rem 1.65rem 1.55rem}
		.sheen-inv-foot .pays{display:flex;gap:.4rem}
		.sheen-inv-foot .chip{font-size:.63rem;font-weight:700;color:#5b6472;background:#f1f4f8;border-radius:8px;padding:.32rem .55rem}
		.sheen-inv-foot .meta{font-size:.7rem;color:#98a3b2;font-weight:600}

		@media (max-width:820px){
			.sheen-invoicing .sheen-inv-grid{grid-template-columns:1fr;gap:2.6rem}
			.sheen-inv-card{transform:none}
			.sheen-inv-stack::before{transform:rotate(2.5deg)}
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

		<div class="sheen-inv-stack" aria-hidden="true">
			<div class="sheen-inv-card">
				<div class="sheen-inv-accent"></div>
				<div class="sheen-inv-head">
					<div class="sheen-inv-id">
						<div class="sheen-inv-mark">H</div>
						<div class="sheen-inv-brand"><b>HuBei-Cleaning</b><span>Professional cleaning</span></div>
					</div>
					<div class="sheen-inv-doc">
						<div class="lbl">INVOICE</div>
						<div class="no">INV-0042</div>
						<div class="sheen-inv-pill"><span class="dot"></span>Paid</div>
					</div>
				</div>
				<div class="sheen-inv-lines">
					<div class="sheen-inv-li"><span class="d">Deep clean — 3 bedroom <span class="q">×1</span></span><span class="a">$180.00</span></div>
					<div class="sheen-inv-li"><span class="d">Kitchen &amp; appliances <span class="q">×1</span></span><span class="a">$60.00</span></div>
					<div class="sheen-inv-li"><span class="d">Windows — interior <span class="q">×1</span></span><span class="a">$40.00</span></div>
				</div>
				<div class="sheen-inv-tot">
					<div class="r"><span>Subtotal</span><span>$280.00</span></div>
					<div class="r"><span>VAT (0%)</span><span>$0.00</span></div>
					<div class="r grand"><span>Total due</span><span class="amt">$280.00</span></div>
				</div>
				<div class="sheen-inv-perf"><span class="line"></span></div>
				<div class="sheen-inv-foot">
					<div class="pays"><span class="chip">M-Pesa</span><span class="chip">Card</span><span class="chip">Bank</span></div>
					<div class="meta">Issued Jul 21</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
