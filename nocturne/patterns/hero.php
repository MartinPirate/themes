<?php
/**
 * Title: Hero — Product
 * Slug: nocturne/hero
 * Categories: nocturne, nocturne-pages, featured
 * Description: Centered editorial hero with eyebrow, serif headline, CTAs and a floating glass analytics dashboard mock.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-hero">
	<!-- wp:html -->
	<style>
		.nocturne-hero{position:relative;padding:9.5rem 1.5rem 5rem;text-align:center;overflow:hidden}
		.nocturne-hero .inner{max-width:920px;margin-inline:auto}
		.nocturne-hero h1{font-size:clamp(2.9rem,7vw,5.6rem);line-height:1.02;margin:1.6rem 0 0;font-weight:500}
		.nocturne-hero .sub{color:var(--muted);font-size:clamp(1.05rem,1.6vw,1.3rem);line-height:1.6;max-width:620px;margin:1.6rem auto 0}
		.nocturne-hero .cta{display:flex;gap:.9rem;justify-content:center;flex-wrap:wrap;margin-top:2.4rem}
		.nocturne-hero .trust{margin-top:1.5rem;color:#6a7080;font-family:"Space Mono",monospace;font-size:.72rem;letter-spacing:.12em;text-transform:uppercase}
		/* dashboard mock */
		.nocturne-dash{max-width:1080px;margin:4.5rem auto 0;perspective:1800px}
		.nocturne-dash .tilt{transform:rotateX(14deg);transform-origin:center top;transition:transform 1.2s var(--ease)}
		.nocturne-dash.is-in .tilt{transform:rotateX(4deg)}
		.dash-shell{padding:.5rem;border-radius:1.6rem;background:rgba(255,255,255,.04);border:1px solid var(--hairline);box-shadow:0 60px 140px rgba(0,0,0,.6),0 0 0 1px rgba(231,194,125,.06)}
		.dash-core{border-radius:1.25rem;overflow:hidden;background:linear-gradient(180deg,#0E1017,#0A0B10);border:1px solid var(--hairline)}
		.dash-top{display:flex;align-items:center;gap:.5rem;padding:.9rem 1.1rem;border-bottom:1px solid var(--hairline)}
		.dash-top .dot{width:11px;height:11px;border-radius:50%;background:#2a2e39}
		.dash-top .pill{margin-left:1rem;font-family:"Space Mono",monospace;font-size:.7rem;color:#7a8090;background:rgba(255,255,255,.04);padding:.28rem .7rem;border-radius:999px;border:1px solid var(--hairline)}
		.dash-body{display:grid;grid-template-columns:180px 1fr;min-height:360px}
		.dash-nav{border-right:1px solid var(--hairline);padding:1.1rem .9rem;display:flex;flex-direction:column;gap:.35rem}
		.dash-nav .item{display:flex;align-items:center;gap:.6rem;padding:.5rem .6rem;border-radius:9px;color:#7f8593;font-size:.82rem}
		.dash-nav .item.on{background:rgba(231,194,125,.1);color:var(--gold)}
		.dash-nav .item i{width:14px;height:14px;border-radius:4px;background:currentColor;opacity:.7;display:block}
		.dash-main{padding:1.3rem 1.4rem}
		.dash-kpis{display:grid;grid-template-columns:repeat(3,1fr);gap:.8rem}
		.kpi{background:rgba(255,255,255,.02);border:1px solid var(--hairline);border-radius:14px;padding:.9rem 1rem}
		.kpi .l{color:#6f7585;font-size:.68rem;text-transform:uppercase;letter-spacing:.1em}
		.kpi .v{font-family:"Fraunces",serif;font-size:1.5rem;margin-top:.25rem}
		.kpi .d{font-size:.7rem;color:var(--teal);margin-top:.15rem}
		.dash-chart{margin-top:1rem;background:rgba(255,255,255,.02);border:1px solid var(--hairline);border-radius:16px;padding:1rem 1.1rem}
		.dash-chart .h{display:flex;justify-content:space-between;align-items:center;color:#7f8593;font-size:.78rem;margin-bottom:.4rem}
		.dash-chart .h b{color:var(--text);font-weight:600}
		@media(max-width:720px){.dash-body{grid-template-columns:1fr}.dash-nav{display:none}.dash-kpis{grid-template-columns:1fr}.nocturne-dash .tilt,.nocturne-dash.is-in .tilt{transform:none}}
	</style>
	<div class="inner nocturne-reveal">
		<span class="nocturne-eyebrow">AI-native analytics</span>
		<h1>See what your <span class="nocturne-gold-text">data</span> is hiding.</h1>
		<p class="sub">Vantage turns raw product events into clear, decision-ready insight — no SQL, no fragile dashboards to babysit. Ask in plain English, get answers you can trust.</p>
		<div class="cta">
			<a class="nocturne-btn" href="/pricing/" data-magnetic>Start free <span class="ico" aria-hidden="true">↗</span></a>
			<a class="nocturne-btn nocturne-btn--ghost" href="/features/">Watch the tour</a>
		</div>
		<p class="trust">No credit card · SOC 2 Type II · 2-minute setup</p>
	</div>

	<div class="nocturne-dash nocturne-reveal">
		<div class="tilt">
			<div class="dash-shell">
				<div class="dash-core">
					<div class="dash-top"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="pill">vantage.app / overview</span></div>
					<div class="dash-body">
						<div class="dash-nav">
							<div class="item on"><i></i> Overview</div>
							<div class="item"><i></i> Funnels</div>
							<div class="item"><i></i> Retention</div>
							<div class="item"><i></i> Segments</div>
							<div class="item"><i></i> Ask AI</div>
						</div>
						<div class="dash-main">
							<div class="dash-kpis">
								<div class="kpi"><div class="l">Active users</div><div class="v">128,402</div><div class="d">▲ 12.4% WoW</div></div>
								<div class="kpi"><div class="l">Conversion</div><div class="v">4.9%</div><div class="d">▲ 0.6 pts</div></div>
								<div class="kpi"><div class="l">Net revenue</div><div class="v">$92.1k</div><div class="d">▲ 8.2% MoM</div></div>
							</div>
							<div class="dash-chart">
								<div class="h"><b>Weekly active users</b><span>Last 12 weeks</span></div>
								<svg viewBox="0 0 640 150" preserveAspectRatio="none" style="width:100%;height:150px">
									<defs>
										<linearGradient id="ng" x1="0" y1="0" x2="0" y2="1">
											<stop offset="0%" stop-color="#E7C27D" stop-opacity="0.35"/>
											<stop offset="100%" stop-color="#E7C27D" stop-opacity="0"/>
										</linearGradient>
									</defs>
									<path d="M0,120 C60,110 90,70 150,72 C210,74 240,40 300,44 C360,48 390,80 450,66 C510,54 540,26 640,20 L640,150 L0,150 Z" fill="url(#ng)"/>
									<path d="M0,120 C60,110 90,70 150,72 C210,74 240,40 300,44 C360,48 390,80 450,66 C510,54 540,26 640,20" fill="none" stroke="#E7C27D" stroke-width="2"/>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->
