<?php
/**
 * Title: Testimonials — Data Teams
 * Slug: nocturne/testimonials
 * Categories: nocturne, nocturne-pages
 * Description: Centered serif heading with three glass quote cards, gold star ratings and avatar footers.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-testimonials","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-testimonials">
	<!-- wp:html -->
	<style>
		.noct-testimonials .head{max-width:760px;margin-inline:auto;text-align:center}
		.noct-testimonials h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2.1rem,4.6vw,3.4rem);line-height:1.06;margin:1.3rem 0 0}
		.noct-testimonials .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:3.5rem}
		.noct-testimonials .qcard{position:relative;display:flex;flex-direction:column;gap:1.15rem;padding:1.9rem 1.7rem;border-radius:1.4rem;background:rgba(255,255,255,.035);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.06);transition:transform .5s var(--ease),border-color .5s var(--ease),background .5s var(--ease)}
		.noct-testimonials .qcard:hover{transform:translateY(-8px);border-color:var(--hairline-2);background:rgba(255,255,255,.05)}
		.noct-testimonials .stars{display:flex;gap:.28rem;color:var(--gold)}
		.noct-testimonials .stars svg{width:16px;height:16px;display:block}
		.noct-testimonials blockquote{margin:0;font-size:clamp(1.05rem,1.5vw,1.18rem);line-height:1.55;color:var(--text)}
		.noct-testimonials .foot{display:flex;align-items:center;gap:.85rem;margin-top:auto;padding-top:.4rem}
		.noct-testimonials .avatar{flex:none;width:44px;height:44px;border-radius:50%;display:grid;place-items:center;font-family:"Space Mono",monospace;font-size:.82rem;letter-spacing:.02em;color:var(--gold);background:rgba(231,194,125,.08);border:1px solid rgba(231,194,125,.45);box-shadow:0 0 0 3px rgba(231,194,125,.06)}
		.noct-testimonials .who .n{display:block;font-weight:600;font-size:.95rem}
		.noct-testimonials .who .r{display:block;color:var(--muted);font-size:.82rem;margin-top:.1rem}
		@media(max-width:782px){.noct-testimonials .grid{grid-template-columns:1fr}}
	</style>
	<div class="nocturne-wrap">
		<div class="head nocturne-reveal">
			<span class="nocturne-eyebrow">Loved by data teams</span>
			<h2>Teams ship faster when they can <span class="nocturne-gold-text">see clearly</span>.</h2>
		</div>
		<div class="grid nocturne-reveal" data-stagger="90">
			<figure class="qcard">
				<div class="stars" aria-label="5 out of 5 stars">
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
				</div>
				<blockquote>&ldquo;We killed three brittle dashboards the week we switched. Now anyone on growth just asks Vantage a question and gets a straight answer — no ticket to the data team.&rdquo;</blockquote>
				<figcaption class="foot">
					<span class="avatar" aria-hidden="true">PN</span>
					<span class="who"><span class="n">Priya Nair</span><span class="r">Head of Growth · Northwind</span></span>
				</figcaption>
			</figure>
			<figure class="qcard">
				<div class="stars" aria-label="5 out of 5 stars">
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
				</div>
				<blockquote>&ldquo;The AI actually understands our event schema. It caught a retention drop in a single cohort that we&rsquo;d have missed for weeks in SQL. Genuinely feels like a teammate.&rdquo;</blockquote>
				<figcaption class="foot">
					<span class="avatar" aria-hidden="true">MB</span>
					<span class="who"><span class="n">Marcus Bell</span><span class="r">Data Lead · Cobalt</span></span>
				</figcaption>
			</figure>
			<figure class="qcard">
				<div class="stars" aria-label="5 out of 5 stars">
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 5.9 6.5.95-4.7 4.58 1.11 6.47L12 17.9l-5.81 3.05 1.11-6.47-4.7-4.58 6.5-.95z"/></svg>
				</div>
				<blockquote>&ldquo;Setup took an afternoon, not a quarter. Every PM on my team can now self-serve funnels and segments — decisions that used to wait on a backlog now happen in the standup.&rdquo;</blockquote>
				<figcaption class="foot">
					<span class="avatar" aria-hidden="true">LF</span>
					<span class="who"><span class="n">Lena Fischer</span><span class="r">Senior PM · Orbit</span></span>
				</figcaption>
			</figure>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
