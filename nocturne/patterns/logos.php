<?php
/**
 * Title: Logo Cloud
 * Slug: nocturne/logos
 * Categories: nocturne, nocturne-pages
 * Description: Compact trust bar with a mono label and a row of text wordmarks that light up on hover.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-logos","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-logos">
	<!-- wp:html -->
	<style>
		.noct-logos{padding-block:3rem}
		.noct-logos .lbl{text-align:center;font-family:"Space Mono",monospace;font-size:.72rem;letter-spacing:.22em;text-transform:uppercase;color:var(--muted);opacity:.75}
		.noct-logos .row{display:flex;flex-wrap:wrap;justify-content:center;align-items:center;gap:2.2rem 3rem;margin-top:1.8rem}
		.noct-logos .mark{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(1.15rem,2.4vw,1.5rem);letter-spacing:.06em;color:var(--muted);opacity:.55;transition:opacity .5s var(--ease),color .5s var(--ease)}
		.noct-logos .mark:hover{opacity:1;color:var(--gold)}
		@media(max-width:782px){.noct-logos .row{gap:1.6rem 2rem}}
	</style>
	<div class="nocturne-wrap nocturne-reveal">
		<p class="lbl">Trusted by product teams at</p>
		<div class="row">
			<span class="mark">Northwind</span>
			<span class="mark">Cobalt</span>
			<span class="mark">Orbit</span>
			<span class="mark">Halcyon</span>
			<span class="mark">Vertex</span>
			<span class="mark">Nimbus</span>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
