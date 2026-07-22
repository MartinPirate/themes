<?php
/**
 * Title: CTA — Final
 * Slug: nocturne/cta
 * Categories: nocturne, nocturne-pages
 * Description: Final call to action inside a double-bezel glass panel with a soft gold radial glow.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-cta","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-cta">
	<!-- wp:html -->
	<style>
		.noct-cta .nocturne-shell{position:relative;max-width:960px;margin-inline:auto;padding:.55rem;border-radius:2rem;background:rgba(255,255,255,.04);border:1px solid var(--hairline);box-shadow:0 60px 140px rgba(0,0,0,.55),inset 0 1px 0 rgba(255,255,255,.08)}
		.noct-cta .nocturne-core{position:relative;overflow:hidden;border-radius:1.6rem;border:1px solid var(--hairline);background:linear-gradient(180deg,#0E1017,#0A0B10);padding:clamp(3rem,7vw,5.5rem) clamp(1.5rem,5vw,4rem);text-align:center}
		.noct-cta .glow{position:absolute;top:-30%;left:50%;transform:translateX(-50%);width:640px;height:640px;max-width:120%;background:radial-gradient(circle,rgba(231,194,125,.22),rgba(231,194,125,.06) 40%,transparent 70%);filter:blur(20px);pointer-events:none;z-index:0}
		.noct-cta .inner{position:relative;z-index:1;max-width:640px;margin-inline:auto}
		.noct-cta h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(2.4rem,6vw,4rem);line-height:1.03;margin:1.3rem 0 0}
		.noct-cta .sub{color:var(--muted);font-size:clamp(1.02rem,1.6vw,1.2rem);line-height:1.6;max-width:520px;margin:1.4rem auto 0}
		.noct-cta .cta{display:flex;gap:.9rem;justify-content:center;flex-wrap:wrap;margin-top:2.4rem}
		.noct-cta .trust{margin-top:1.6rem;color:#6a7080;font-family:"Space Mono",monospace;font-size:.72rem;letter-spacing:.12em;text-transform:uppercase}
	</style>
	<div class="nocturne-wrap nocturne-reveal">
		<div class="nocturne-shell">
			<div class="nocturne-core">
				<div class="glow" aria-hidden="true"></div>
				<div class="inner">
					<span class="nocturne-eyebrow">Get started</span>
					<h2>Start seeing <span class="nocturne-gold-text">clearly</span>.</h2>
					<p class="sub">Connect your warehouse and ask your first question in minutes. No fragile dashboards, no data team ticket queue — just answers your whole team can trust.</p>
					<div class="cta">
						<a class="nocturne-btn" href="/signup/" data-magnetic>Start free <span class="ico" aria-hidden="true">↗</span></a>
						<a class="nocturne-btn nocturne-btn--ghost" href="/contact/">Talk to sales</a>
					</div>
					<p class="trust">No credit card · 2-minute setup</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
