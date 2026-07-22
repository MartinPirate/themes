<?php
/**
 * Title: Pricing — Tiers
 * Slug: nocturne/pricing
 * Categories: nocturne, nocturne-pages
 * Description: Three glass pricing tiers with a CSS-only monthly/annual toggle, a highlighted Pro plan and gold check feature lists.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-pricing","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-pricing">
	<!-- wp:html -->
	<style>
		.noct-pricing{text-align:center}
		.noct-pricing .head{max-width:720px;margin-inline:auto}
		.noct-pricing h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2.2rem,5vw,3.6rem);line-height:1.05;margin:1.4rem 0 0}
		.noct-pricing .sub{color:var(--muted);font-size:clamp(1rem,1.5vw,1.2rem);line-height:1.6;max-width:560px;margin:1.2rem auto 0}

		/* toggle (CSS-only via hidden checkbox) */
		.noct-pricing .toggle-in{position:absolute;opacity:0;pointer-events:none}
		.noct-pricing .toggle{display:inline-flex;align-items:center;gap:.5rem;margin-top:2.4rem}
		.noct-pricing .switch{position:relative;display:inline-flex;padding:.28rem;border-radius:999px;background:rgba(255,255,255,.04);border:1px solid var(--hairline);cursor:pointer;user-select:none}
		.noct-pricing .switch span{position:relative;z-index:2;font-family:"Space Mono",monospace;font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);padding:.5rem 1.1rem;border-radius:999px;transition:color .5s var(--ease)}
		.noct-pricing .switch .knob{position:absolute;z-index:1;top:.28rem;left:.28rem;width:calc(50% - .28rem);height:calc(100% - .56rem);border-radius:999px;background:linear-gradient(180deg,rgba(231,194,125,.18),rgba(201,155,78,.14));border:1px solid rgba(231,194,125,.28);transition:transform .5s var(--ease)}
		.noct-pricing .switch .lbl-m{color:var(--gold)}
		.noct-pricing .toggle-in:checked ~ .head .switch .knob{transform:translateX(100%)}
		.noct-pricing .toggle-in:checked ~ .head .switch .lbl-m{color:var(--muted)}
		.noct-pricing .toggle-in:checked ~ .head .switch .lbl-a{color:var(--gold)}
		.noct-pricing .hint{margin-top:.9rem;font-family:"Space Mono",monospace;font-size:.7rem;letter-spacing:.08em;text-transform:uppercase;color:#6a7080}
		.noct-pricing .hint b{color:var(--teal)}

		/* price swap */
		.noct-pricing .price .annual{display:none}
		.noct-pricing .toggle-in:checked ~ .grid .price .monthly{display:none}
		.noct-pricing .toggle-in:checked ~ .grid .price .annual{display:inline}

		/* grid */
		.noct-pricing .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem;margin-top:3.4rem;text-align:left;align-items:start}
		.noct-pricing .card{position:relative;border-radius:var(--radius);padding:2rem 1.7rem;background:linear-gradient(180deg,rgba(255,255,255,.045),rgba(255,255,255,.015));border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.06),0 30px 80px rgba(0,0,0,.4);transition:transform .6s var(--ease),border-color .6s var(--ease)}
		.noct-pricing .card:hover{transform:translateY(-6px)}
		.noct-pricing .card.pop{border-color:rgba(231,194,125,.4);box-shadow:inset 0 1px 0 rgba(255,255,255,.08),0 0 0 1px rgba(231,194,125,.22),0 40px 100px rgba(0,0,0,.55);transform:scale(1.045)}
		.noct-pricing .card.pop:hover{transform:scale(1.045) translateY(-6px)}
		.noct-pricing .badge{position:absolute;top:1.5rem;right:1.5rem;font-family:"Space Mono",monospace;font-size:.62rem;letter-spacing:.12em;text-transform:uppercase;color:var(--gold);background:rgba(231,194,125,.1);border:1px solid rgba(231,194,125,.3);padding:.32rem .7rem;border-radius:999px}
		.noct-pricing .tier{font-family:"Space Mono",monospace;font-size:.74rem;letter-spacing:.14em;text-transform:uppercase;color:var(--gold)}
		.noct-pricing .desc{color:var(--muted);font-size:.92rem;line-height:1.5;margin:.5rem 0 0;min-height:2.7em}
		.noct-pricing .price{display:flex;align-items:baseline;gap:.35rem;margin:1.6rem 0 .1rem;font-family:"Fraunces",serif;font-weight:500}
		.noct-pricing .price .amt{font-size:clamp(2.6rem,4.5vw,3.4rem);line-height:1}
		.noct-pricing .per{font-family:"Space Mono",monospace;font-size:.68rem;letter-spacing:.06em;text-transform:uppercase;color:#6a7080}
		.noct-pricing .card .nocturne-btn,.noct-pricing .card .nocturne-btn--ghost{width:100%;justify-content:center;margin:1.5rem 0 .3rem}
		.noct-pricing ul{list-style:none;margin:1.5rem 0 0;padding:1.5rem 0 0;border-top:1px solid var(--hairline);display:flex;flex-direction:column;gap:.85rem}
		.noct-pricing li{display:flex;align-items:flex-start;gap:.7rem;font-size:.92rem;line-height:1.4;color:var(--text)}
		.noct-pricing li svg{flex:0 0 auto;width:18px;height:18px;margin-top:.05rem;color:var(--gold)}

		@media(max-width:900px){
			.noct-pricing .grid{grid-template-columns:1fr;max-width:420px;margin-inline:auto}
			.noct-pricing .card.pop,.noct-pricing .card.pop:hover{transform:none}
			.noct-pricing .card.pop:hover{transform:translateY(-6px)}
		}
	</style>
	<div class="nocturne-wrap nocturne-reveal">
		<input type="checkbox" id="noct-billing" class="toggle-in">

		<div class="head">
			<span class="nocturne-eyebrow">Pricing</span>
			<h2>Simple pricing that <span class="nocturne-gold-text">scales</span> with you.</h2>
			<p class="sub">Start free, upgrade when the insights pay for themselves. Every plan includes the full Vantage query engine.</p>
			<div class="toggle">
				<label class="switch" for="noct-billing">
					<span class="knob" aria-hidden="true"></span>
					<span class="lbl-m">Monthly</span>
					<span class="lbl-a">Annual</span>
				</label>
			</div>
			<p class="hint">Annual billing — <b>2 months free</b></p>
		</div>

		<div class="grid" data-stagger="90">
			<!-- Starter -->
			<div class="card">
				<div class="tier">Starter</div>
				<p class="desc">For side projects and first experiments.</p>
				<div class="price">
					<span class="amt">$0</span>
					<span class="per">forever</span>
				</div>
				<span class="per">1 seat · 10k events / mo</span>
				<a class="nocturne-btn nocturne-btn--ghost" href="/signup/">Start free</a>
				<ul>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Up to 10k events / month</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Core dashboards &amp; funnels</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>7-day data retention</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Community support</li>
				</ul>
			</div>

			<!-- Pro (highlighted) -->
			<div class="card pop">
				<div class="badge">Most popular</div>
				<div class="tier">Pro</div>
				<p class="desc">For teams shipping on real data every week.</p>
				<div class="price">
					<span class="amt"><span class="monthly">$49</span><span class="annual">$39</span></span>
					<span class="per">/ mo</span>
				</div>
				<span class="per">per seat · 1M events / mo</span>
				<a class="nocturne-btn" href="/signup/" data-magnetic>Start free <span class="ico" aria-hidden="true">↗</span></a>
				<ul>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Everything in Starter</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Up to 1M events / month</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Ask AI — natural-language queries</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Retention &amp; cohort analysis</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Unlimited dashboards</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>90-day retention · priority support</li>
				</ul>
			</div>

			<!-- Scale -->
			<div class="card">
				<div class="tier">Scale</div>
				<p class="desc">For growing teams with serious data volume.</p>
				<div class="price">
					<span class="amt"><span class="monthly">$199</span><span class="annual">$159</span></span>
					<span class="per">/ mo</span>
				</div>
				<span class="per">per seat · 25M events / mo</span>
				<a class="nocturne-btn nocturne-btn--ghost" href="/contact/">Contact sales</a>
				<ul>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Everything in Pro</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Up to 25M events / month</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>SSO / SAML &amp; audit logs</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Custom data residency</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Unlimited retention</li>
					<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>Dedicated success manager</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
