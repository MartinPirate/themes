<?php
/**
 * Title: Features — Bento Grid
 * Slug: nocturne/features
 * Categories: nocturne, nocturne-pages
 * Description: Asymmetric bento grid of glass feature cards with an Ask-AI input mock for the Vantage analytics platform.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-features","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-features">
	<!-- wp:html -->
	<style>
		.noct-features .head{text-align:center;max-width:720px;margin-inline:auto}
		.noct-features h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2.2rem,4.6vw,3.6rem);line-height:1.05;margin:1.4rem 0 0}
		.noct-features .sub{color:var(--muted);font-size:clamp(1rem,1.4vw,1.15rem);line-height:1.6;max-width:560px;margin:1.2rem auto 0}
		/* bento grid */
		.noct-features .bento{display:grid;grid-template-columns:repeat(3,1fr);grid-auto-rows:minmax(190px,auto);gap:1.1rem;margin-top:3.4rem}
		.noct-features .fcard{position:relative;display:flex;flex-direction:column;gap:.85rem;padding:1.7rem 1.6rem;border-radius:var(--radius);background:rgba(255,255,255,.035);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.06),0 30px 70px rgba(0,0,0,.35);overflow:hidden;transition:transform .5s var(--ease),border-color .5s var(--ease),background .5s var(--ease)}
		.noct-features .fcard::before{content:"";position:absolute;inset:0;border-radius:inherit;padding:1px;background:linear-gradient(180deg,rgba(255,255,255,.14),rgba(255,255,255,0) 40%);-webkit-mask:linear-gradient(#000 0 0) content-box,linear-gradient(#000 0 0);-webkit-mask-composite:xor;mask-composite:exclude;pointer-events:none;opacity:.7}
		.noct-features .fcard:hover{transform:translateY(-6px);border-color:var(--hairline-2);background:rgba(255,255,255,.05)}
		.noct-features .fcard .ic{width:42px;height:42px;display:grid;place-items:center;border-radius:12px;background:rgba(231,194,125,.09);border:1px solid rgba(231,194,125,.18);color:var(--gold)}
		.noct-features .fcard .ic svg{width:22px;height:22px}
		.noct-features .fcard h3{font-family:"Fraunces",serif;font-weight:500;font-size:1.3rem;line-height:1.2;margin:0}
		.noct-features .fcard p{color:var(--muted);font-size:.92rem;line-height:1.55;margin:0}
		/* asymmetric spans */
		.noct-features .fcard.lg{grid-column:span 2;grid-row:span 2}
		.noct-features .fcard.tall{grid-row:span 2}
		/* ask-ai mock inside large card */
		.noct-features .ask{margin-top:auto;display:flex;flex-direction:column;gap:.9rem}
		.noct-features .ask-input{display:flex;align-items:center;gap:.7rem;padding:.55rem .55rem .55rem 1.05rem;border-radius:999px;background:rgba(255,255,255,.04);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.05)}
		.noct-features .ask-input .ph{flex:1;color:#7f8593;font-size:.92rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
		.noct-features .ask-send{flex:none;width:34px;height:34px;border-radius:999px;display:grid;place-items:center;color:#0b0c10;background:linear-gradient(180deg,var(--gold),var(--gold-deep));box-shadow:0 6px 18px rgba(201,155,78,.35)}
		.noct-features .ask-send svg{width:16px;height:16px}
		.noct-features .insight{display:flex;gap:.7rem;align-items:flex-start;padding:.85rem 1rem;border-radius:1rem;background:rgba(41,183,158,.06);border:1px solid rgba(41,183,158,.16)}
		.noct-features .insight .spark{flex:none;color:var(--teal);margin-top:.1rem}
		.noct-features .insight .spark svg{width:16px;height:16px}
		.noct-features .insight p{color:var(--text);font-size:.9rem;line-height:1.5}
		.noct-features .insight b{color:var(--teal);font-weight:600}
		@media(max-width:781px){
			.noct-features .bento{grid-template-columns:1fr;grid-auto-rows:auto}
			.noct-features .fcard.lg,.noct-features .fcard.tall{grid-column:span 1;grid-row:span 1}
		}
	</style>
	<div class="nocturne-wrap">
		<div class="head nocturne-reveal">
			<span class="nocturne-eyebrow">One workspace</span>
			<h2>Answers, not just <span class="nocturne-gold-text">dashboards</span>.</h2>
			<p class="sub">Everything your team needs to understand product behaviour lives in one place — no SQL, no spreadsheet gymnastics, no waiting on the data team.</p>
		</div>

		<div class="bento nocturne-reveal" data-stagger="90">
			<!-- Large: Ask in plain English -->
			<article class="fcard lg">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
				</div>
				<h3>Ask in plain English</h3>
				<p>Type a question the way you'd ask a colleague. Vantage writes the query, runs it against your warehouse, and returns the answer with a chart you can trust.</p>
				<div class="ask" aria-hidden="true">
					<div class="ask-input">
						<span class="ph">Why did signups drop last week?</span>
						<span class="ask-send">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="13 6 19 12 13 18"/></svg>
						</span>
					</div>
					<div class="insight">
						<span class="spark">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v4M12 17v4M5 12H1M23 12h-4M6.3 6.3 3.5 3.5M20.5 20.5l-2.8-2.8M17.7 6.3l2.8-2.8M3.5 20.5l2.8-2.8"/></svg>
						</span>
						<p><b>Insight:</b> Mobile signups fell 18% after Tuesday's iOS release — the OAuth callback errored for 1 in 5 users.</p>
					</div>
				</div>
			</article>

			<!-- Funnels & retention (tall) -->
			<article class="fcard tall">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 4h18l-7 8v6l-4 2v-8L3 4z"/></svg>
				</div>
				<h3>Funnels &amp; retention</h3>
				<p>Build multi-step funnels and cohort retention curves in seconds, then watch where users stall — step by step, week by week.</p>
			</article>

			<!-- Auto-surfaced anomalies -->
			<article class="fcard">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15l5-6 4 4 4-7 5 9"/><path d="M10.3 3.3a1.5 1.5 0 0 1 2.6 0l-.4-.7"/></svg>
				</div>
				<h3>Auto-surfaced anomalies</h3>
				<p>Vantage watches every metric and pings you the moment something breaks trend — before it shows up in the board deck.</p>
			</article>

			<!-- Warehouse-native -->
			<article class="fcard">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.66 3.58 3 8 3s8-1.34 8-3V5"/><path d="M4 11v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/></svg>
				</div>
				<h3>Warehouse-native</h3>
				<p>Query Snowflake, BigQuery or Postgres in place. No copies, no reverse-ETL — your data never leaves your warehouse.</p>
			</article>

			<!-- Cohorts & segments -->
			<article class="fcard">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="9" r="4"/><path d="M17 8a4 4 0 0 1 0 8"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M21 20c0-2.4-1.4-4.5-3.5-5.4"/></svg>
				</div>
				<h3>Cohorts &amp; segments</h3>
				<p>Slice users by any trait or behaviour, save the segment once, and reuse it across every chart and report you build.</p>
			</article>

			<!-- Shareable reports -->
			<article class="fcard">
				<div class="ic" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.6" y1="10.6" x2="15.4" y2="6.4"/><line x1="8.6" y1="13.4" x2="15.4" y2="17.6"/></svg>
				</div>
				<h3>Shareable reports</h3>
				<p>Send a live link, schedule a Slack digest, or embed a board anywhere — always current, never a stale screenshot.</p>
			</article>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
