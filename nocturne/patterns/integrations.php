<?php
/**
 * Title: Integrations — Your Stack
 * Slug: nocturne/integrations
 * Categories: nocturne, nocturne-pages
 * Description: Centered serif heading over a responsive grid of glass integration tiles with light monogram marks.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-integrations","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-integrations">
	<!-- wp:html -->
	<style>
		.noct-integrations .head{max-width:720px;margin-inline:auto;text-align:center}
		.noct-integrations h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2.1rem,4.6vw,3.4rem);line-height:1.06;margin:1.3rem 0 0}
		.noct-integrations .grid{display:grid;grid-template-columns:repeat(5,1fr);gap:1rem;margin-top:3.5rem}
		.noct-integrations .tile{display:flex;flex-direction:column;align-items:flex-start;gap:1rem;padding:1.5rem 1.4rem;border-radius:1.15rem;background:rgba(255,255,255,.025);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.05);transition:transform .5s var(--ease),border-color .5s var(--ease),background .5s var(--ease)}
		.noct-integrations .tile:hover{transform:translateY(-6px);border-color:rgba(231,194,125,.45);background:rgba(255,255,255,.045)}
		.noct-integrations .tile .mark{width:34px;height:34px;color:var(--muted);transition:color .5s var(--ease)}
		.noct-integrations .tile:hover .mark{color:var(--gold)}
		.noct-integrations .tile .mark svg{width:100%;height:100%;display:block}
		.noct-integrations .tile .name{font-size:.92rem;font-weight:600;color:var(--text)}
		.noct-integrations .note{text-align:center;margin-top:2.4rem;font-family:"Space Mono",monospace;font-size:.78rem;letter-spacing:.04em}
		@media(max-width:1000px){.noct-integrations .grid{grid-template-columns:repeat(3,1fr)}}
		@media(max-width:782px){.noct-integrations .grid{grid-template-columns:repeat(2,1fr)}}
		@media(max-width:440px){.noct-integrations .grid{grid-template-columns:1fr}}
	</style>
	<div class="nocturne-wrap">
		<div class="head nocturne-reveal">
			<span class="nocturne-eyebrow">Connects to your stack</span>
			<h2>Plays nicely with <span class="nocturne-gold-text">everything</span>.</h2>
		</div>
		<div class="grid nocturne-reveal" data-stagger="90">
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><circle cx="12" cy="12" r="2.4"/><g stroke-linecap="round"><path d="M12 3v4.2"/><path d="M12 16.8V21"/><path d="M3 12h4.2"/><path d="M16.8 12H21"/><path d="M5.6 5.6l3 3"/><path d="M15.4 15.4l3 3"/><path d="M18.4 5.6l-3 3"/><path d="M8.6 15.4l-3 3"/></g></svg></span>
				<span class="name">Snowflake</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M12 3l7.5 4.3v9L12 20.6 4.5 16.3v-9z" stroke-linejoin="round"/><path d="M12 12v8.6"/><path d="M12 12L4.5 7.3"/><path d="M12 12l7.5-4.7"/></svg></span>
				<span class="name">BigQuery</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><ellipse cx="12" cy="6" rx="7" ry="3"/><path d="M5 6v6c0 1.66 3.13 3 7 3s7-1.34 7-3V6" stroke-linecap="round"/><path d="M5 12v6c0 1.66 3.13 3 7 3s7-1.34 7-3v-6" stroke-linecap="round"/></svg></span>
				<span class="name">Postgres</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"><path d="M12 2.5l8.5 4.9v9.2L12 21.5 3.5 16.6V7.4z"/><path d="M8.4 9.3l3.6 2.1 3.6-2.1"/><path d="M12 11.4v4.4"/></svg></span>
				<span class="name">dbt</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><circle cx="6.5" cy="8" r="2.2"/><circle cx="17.5" cy="16" r="2.2"/><path d="M8.7 8h5.3a3 3 0 0 1 3 3v2.8" stroke-linecap="round"/></svg></span>
				<span class="name">Segment</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><rect x="4" y="6" width="16" height="12" rx="2.5"/><path d="M4 10h16" stroke-linecap="round"/><path d="M8 14h4" stroke-linecap="round"/></svg></span>
				<span class="name">Stripe</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"><path d="M9 4v10.5a2.5 2.5 0 1 1-2.5-2.5H9"/><path d="M9 8h6.5a2.5 2.5 0 1 0-2.5-2.5V8"/><path d="M15 12h2.5a2.5 2.5 0 1 1-2.5 2.5V12"/></svg></span>
				<span class="name">Kafka</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"><path d="M10.5 13.5L7 17a2.5 2.5 0 1 1-2.2-3.7"/><path d="M13.2 12.2l3.3-3.4a2.5 2.5 0 1 1 2.2 3.7"/><path d="M13.5 6.8L10.2 10a2.5 2.5 0 1 1-1.4-4.2"/><path d="M10.8 17.2l3.3-3.2a2.5 2.5 0 1 1 1.4 4.2"/></svg></span>
				<span class="name">Slack</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 8.5L6 12l3.5 3.5"/><path d="M14.5 8.5L18 12l-3.5 3.5"/><path d="M13 6l-2 12"/></svg></span>
				<span class="name">Webhooks</span>
			</div>
			<div class="tile">
				<span class="mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17V9l4 5 4-9 4 12 4-6"/></svg></span>
				<span class="name">Amplitude</span>
			</div>
		</div>
		<p class="note nocturne-muted nocturne-reveal">+ 60 more via our API &amp; webhooks</p>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
