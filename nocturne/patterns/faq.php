<?php
/**
 * Title: FAQ Accordion
 * Slug: nocturne/faq
 * Categories: nocturne, nocturne-pages
 * Description: Narrow native details/summary accordion with hairline dividers and a rotating plus indicator.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-faq","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-faq">
	<!-- wp:html -->
	<style>
		.noct-faq .head{text-align:center;max-width:640px;margin-inline:auto}
		.noct-faq h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2rem,4.6vw,3.1rem);line-height:1.06;margin:1.1rem 0 0}
		.noct-faq .acc{max-width:760px;margin:3rem auto 0}
		.noct-faq details{border-top:1px solid var(--hairline)}
		.noct-faq details:last-child{border-bottom:1px solid var(--hairline)}
		.noct-faq summary{list-style:none;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;padding:1.5rem .25rem;font-family:"Fraunces",serif;font-weight:500;font-size:clamp(1.05rem,2vw,1.25rem);color:var(--text);transition:color .4s var(--ease)}
		.noct-faq summary::-webkit-details-marker{display:none}
		.noct-faq summary:hover{color:var(--gold)}
		.noct-faq summary .ind{position:relative;flex:0 0 auto;width:1.4rem;height:1.4rem;display:grid;place-items:center;color:var(--muted);transition:transform .5s var(--ease),color .4s var(--ease)}
		.noct-faq summary .ind::before,.noct-faq summary .ind::after{content:"";position:absolute;background:currentColor;border-radius:2px}
		.noct-faq summary .ind::before{width:1.1rem;height:1.5px}
		.noct-faq summary .ind::after{width:1.5px;height:1.1rem;transition:transform .5s var(--ease)}
		.noct-faq details[open] summary{color:var(--gold)}
		.noct-faq details[open] summary .ind{transform:rotate(135deg);color:var(--gold)}
		.noct-faq .body{overflow:hidden;color:var(--muted);font-size:1rem;line-height:1.65;padding:0 3rem 1.6rem .25rem;max-width:640px}
		@media(max-width:782px){.noct-faq .body{padding-right:.25rem}}
	</style>
	<div class="nocturne-wrap nocturne-reveal">
		<div class="head">
			<span class="nocturne-eyebrow">FAQ</span>
			<h2>Questions, <span class="nocturne-gold-text">answered</span>.</h2>
		</div>
		<div class="acc">
			<details>
				<summary>Is my data private and secure?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">Vantage is SOC 2 Type II certified with encryption in transit and at rest. Your event data is isolated per tenant, never sold, and never used to train shared models. Role-based access and audit logs come standard on every plan.</div>
			</details>
			<details>
				<summary>Is Vantage warehouse-native?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">Yes. Vantage runs directly on top of Snowflake, BigQuery, Databricks and Redshift — your data stays in your warehouse. There is no lossy copy to sync and no separate store to keep in line with your source of truth.</div>
			</details>
			<details>
				<summary>Do I need to know SQL to use it?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">No. Ask questions in plain English and Vantage builds the query, chart and cohort for you. When you do want precision, every generated query is one click away — inspect it, edit it, or save it as a reusable metric.</div>
			</details>
			<details>
				<summary>How does seat-based pricing work?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">You pay per active editor seat, billed monthly or annually. Viewers who only read dashboards are always free and unlimited. Events are metered generously, so seasonal traffic spikes never trigger a surprise invoice.</div>
			</details>
			<details>
				<summary>Can I migrate from another analytics tool?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">Absolutely. Our importer maps events, funnels and saved reports from Amplitude, Mixpanel and Heap in an afternoon. A migration specialist reviews your taxonomy so nothing is lost and your team keeps the metrics they already trust.</div>
			</details>
			<details>
				<summary>What does support and SLA coverage look like?<span class="ind" aria-hidden="true"></span></summary>
				<div class="body">Every plan includes in-app chat with a real analyst. Growth and Enterprise add a dedicated Slack channel, a named contact and a 99.9% uptime SLA with credits, plus priority response windows measured in minutes, not days.</div>
			</details>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
