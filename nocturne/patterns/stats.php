<?php
/**
 * Title: Stats — Metrics Band
 * Slug: nocturne/stats
 * Categories: nocturne, nocturne-pages
 * Description: Slim glass strip of four headline metrics in serif with mono labels and hairline dividers.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-stats","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-stats">
	<!-- wp:html -->
	<style>
		.noct-stats .strip{border-radius:var(--radius);background:rgba(255,255,255,.03);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.07),0 30px 80px rgba(0,0,0,.4);padding:clamp(1.6rem,3vw,2.6rem) clamp(1rem,2vw,2rem)}
		.noct-stats .metrics{display:grid;grid-template-columns:repeat(4,1fr)}
		.noct-stats .metric{position:relative;text-align:center;padding:.4rem clamp(1rem,2vw,1.8rem)}
		.noct-stats .metric + .metric::before{content:"";position:absolute;left:0;top:50%;transform:translateY(-50%);width:1px;height:56%;background:linear-gradient(180deg,transparent,var(--hairline-2),transparent)}
		.noct-stats .num{font-family:"Fraunces",serif;font-weight:500;line-height:1;font-size:clamp(2.2rem,4.4vw,3.4rem);background:linear-gradient(180deg,var(--gold),var(--gold-deep));-webkit-background-clip:text;background-clip:text;color:transparent}
		.noct-stats .label{margin-top:.7rem;font-family:"Space Mono",monospace;font-size:.68rem;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
		@media(max-width:782px){
			.noct-stats .metrics{grid-template-columns:repeat(2,1fr);row-gap:2rem}
			.noct-stats .metric + .metric::before{display:none}
			.noct-stats .metric:nth-child(even)::before{content:"";display:block;position:absolute;left:0;top:50%;transform:translateY(-50%);width:1px;height:56%;background:linear-gradient(180deg,transparent,var(--hairline-2),transparent)}
			.noct-stats .metric:nth-child(n+3)::after{content:"";position:absolute;top:0;left:12%;right:12%;height:1px;background:linear-gradient(90deg,transparent,var(--hairline-2),transparent)}
		}
		@media(max-width:460px){
			.noct-stats .metrics{grid-template-columns:1fr;row-gap:1.8rem}
			.noct-stats .metric:nth-child(even)::before{display:none}
			.noct-stats .metric:nth-child(n+2)::after{content:"";position:absolute;top:0;left:20%;right:20%;height:1px;background:linear-gradient(90deg,transparent,var(--hairline-2),transparent)}
		}
	</style>
	<div class="nocturne-wrap">
		<div class="strip nocturne-reveal">
			<div class="metrics" data-stagger="90">
				<div class="metric">
					<div class="num">3.2B</div>
					<div class="label">Events / day</div>
				</div>
				<div class="metric">
					<div class="num">40ms</div>
					<div class="label">p95 query</div>
				</div>
				<div class="metric">
					<div class="num">99.99%</div>
					<div class="label">Uptime</div>
				</div>
				<div class="metric">
					<div class="num">12,000+</div>
					<div class="label">Teams</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
