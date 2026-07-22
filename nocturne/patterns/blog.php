<?php
/**
 * Title: Blog Teaser
 * Slug: nocturne/blog
 * Categories: nocturne, nocturne-pages
 * Description: Three-up grid of glass article cards with mono category tags that lift on hover.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-blog","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-blog">
	<!-- wp:html -->
	<style>
		.noct-blog .head{text-align:center;max-width:660px;margin-inline:auto}
		.noct-blog h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2rem,4.6vw,3.1rem);line-height:1.06;margin:1.1rem 0 0}
		.noct-blog .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.4rem;margin-top:3rem}
		.noct-blog .card{display:flex;flex-direction:column;padding:1.8rem 1.6rem;border-radius:var(--radius);background:rgba(255,255,255,.03);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.06);transition:transform .5s var(--ease),border-color .5s var(--ease),background .5s var(--ease)}
		.noct-blog .card:hover{transform:translateY(-6px);border-color:var(--hairline-2);background:rgba(255,255,255,.05)}
		.noct-blog .tag{font-family:"Space Mono",monospace;font-size:.68rem;letter-spacing:.18em;text-transform:uppercase;color:var(--gold)}
		.noct-blog h3{font-family:"Fraunces",serif;font-weight:500;font-size:1.32rem;line-height:1.22;margin:1rem 0 0}
		.noct-blog .excerpt{color:var(--muted);font-size:.95rem;line-height:1.6;margin:.7rem 0 0}
		.noct-blog .meta{margin-top:auto;padding-top:1.6rem;font-family:"Space Mono",monospace;font-size:.7rem;letter-spacing:.06em;color:#6a7080}
		@media(max-width:782px){.noct-blog .grid{grid-template-columns:1fr}}
	</style>
	<div class="nocturne-wrap nocturne-reveal">
		<div class="head">
			<span class="nocturne-eyebrow">From the blog</span>
			<h2>Ideas on <span class="nocturne-gold-text">data</span> &amp; product.</h2>
		</div>
		<div class="grid" data-stagger="90">
			<article class="card">
				<span class="tag">Engineering</span>
				<h3>Why warehouse-native analytics wins</h3>
				<p class="excerpt">Querying data where it already lives kills the sync tax — and the trust problems that come with a second copy.</p>
				<div class="meta">6 min read · Aug 2026</div>
			</article>
			<article class="card">
				<span class="tag">Product</span>
				<h3>Designing metrics people trust</h3>
				<p class="excerpt">A good metric is legible, owned and versioned. Here's how we keep definitions honest as teams scale.</p>
				<div class="meta">6 min read · Aug 2026</div>
			</article>
			<article class="card">
				<span class="tag">Guides</span>
				<h3>From events to answers in 5 minutes</h3>
				<p class="excerpt">Connect a warehouse, ask a plain-English question, and ship your first funnel before your coffee cools.</p>
				<div class="meta">6 min read · Aug 2026</div>
			</article>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
