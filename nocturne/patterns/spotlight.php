<?php
/**
 * Title: Spotlight — Alternating Features
 * Slug: nocturne/spotlight
 * Categories: nocturne, nocturne-pages
 * Description: Two alternating feature rows pairing serif copy with glass product mocks — an AI chat answer and a live funnel.
 *
 * @package Nocturne
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-spotlight","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-spotlight">
	<!-- wp:html -->
	<style>
		.noct-spotlight .rows{display:flex;flex-direction:column;gap:clamp(4rem,8vw,7rem)}
		.noct-spotlight .row{display:grid;grid-template-columns:1fr 1fr;gap:clamp(2rem,5vw,5rem);align-items:center}
		.noct-spotlight .row .copy{order:1}
		.noct-spotlight .row .visual{order:2}
		.noct-spotlight .row.is-reversed .copy{order:2}
		.noct-spotlight .row.is-reversed .visual{order:1}
		.noct-spotlight .copy h2{font-family:"Fraunces",serif;font-weight:500;font-size:clamp(1.9rem,3.4vw,2.9rem);line-height:1.08;margin:1.1rem 0 0}
		.noct-spotlight .copy p{margin:1.15rem 0 0;max-width:34ch}
		.noct-spotlight .learn{display:inline-flex;align-items:center;gap:.5rem;margin-top:1.6rem;font-family:"Space Mono",monospace;font-size:.82rem;letter-spacing:.02em;color:var(--gold);text-decoration:none;transition:gap .5s var(--ease),color .5s var(--ease)}
		.noct-spotlight .learn:hover{gap:.85rem;color:var(--gold-deep)}
		.noct-spotlight .learn .arw{transition:transform .5s var(--ease)}
		.noct-spotlight .learn:hover .arw{transform:translateX(3px)}
		/* glass visual shell */
		.noct-spotlight .glass{position:relative;border-radius:var(--radius);padding:1.4rem;background:rgba(255,255,255,.04);border:1px solid var(--hairline);box-shadow:inset 0 1px 0 rgba(255,255,255,.08),0 40px 100px rgba(0,0,0,.5);backdrop-filter:blur(6px)}
		.noct-spotlight .glass::before{content:"";position:absolute;inset:0;border-radius:inherit;background:linear-gradient(160deg,rgba(255,255,255,.05),transparent 45%);pointer-events:none}
		/* --- Row 1: AI chat mock --- */
		.noct-spotlight .chat{display:flex;flex-direction:column;gap:1rem}
		.noct-spotlight .bubble{align-self:flex-end;max-width:82%;background:rgba(110,92,240,.14);border:1px solid rgba(110,92,240,.32);color:var(--text);padding:.75rem 1rem;border-radius:1.1rem 1.1rem .35rem 1.1rem;font-size:.9rem;line-height:1.45}
		.noct-spotlight .answer{background:rgba(255,255,255,.02);border:1px solid var(--hairline);border-radius:1.1rem 1.1rem 1.1rem .35rem;padding:1.05rem 1.15rem}
		.noct-spotlight .answer .who{display:flex;align-items:center;gap:.55rem;font-family:"Space Mono",monospace;font-size:.66rem;letter-spacing:.14em;text-transform:uppercase;color:var(--gold)}
		.noct-spotlight .answer .who .spark{width:16px;height:16px;color:var(--gold)}
		.noct-spotlight .answer .lede{margin:.7rem 0 0;font-size:.9rem;line-height:1.5}
		.noct-spotlight .answer .lede b{font-family:"Fraunces",serif;font-weight:500;color:var(--gold)}
		.noct-spotlight .resulttbl{margin-top:.95rem;border:1px solid var(--hairline);border-radius:.85rem;overflow:hidden;font-size:.78rem}
		.noct-spotlight .resulttbl .tr{display:grid;grid-template-columns:1.4fr 1fr .9rem;align-items:center;gap:.6rem;padding:.5rem .8rem;border-bottom:1px solid var(--hairline)}
		.noct-spotlight .resulttbl .tr:last-child{border-bottom:0}
		.noct-spotlight .resulttbl .tr.head{color:#6f7585;font-family:"Space Mono",monospace;font-size:.6rem;letter-spacing:.12em;text-transform:uppercase;background:rgba(255,255,255,.02)}
		.noct-spotlight .resulttbl .name{color:var(--text)}
		.noct-spotlight .resulttbl .num{font-family:"Fraunces",serif;color:var(--text);text-align:right}
		.noct-spotlight .resulttbl .tr.top .num{color:var(--gold)}
		.noct-spotlight .resulttbl .bar{height:6px;border-radius:99px;background:rgba(255,255,255,.08);overflow:hidden}
		.noct-spotlight .resulttbl .bar i{display:block;height:100%;border-radius:99px;background:linear-gradient(90deg,var(--gold-deep),var(--gold))}
		/* --- Row 2: funnel mock --- */
		.noct-spotlight .funnel .fhead{display:flex;justify-content:space-between;align-items:center;color:#7f8593;font-size:.78rem;margin-bottom:1.1rem}
		.noct-spotlight .funnel .fhead b{color:var(--text);font-weight:600;font-family:"Fraunces",serif;font-size:1rem}
		.noct-spotlight .funnel .step{margin-bottom:.85rem}
		.noct-spotlight .funnel .step:last-child{margin-bottom:0}
		.noct-spotlight .funnel .slabel{display:flex;justify-content:space-between;font-size:.76rem;color:#8a90a0;margin-bottom:.35rem}
		.noct-spotlight .funnel .slabel .pct{font-family:"Space Mono",monospace;color:var(--text)}
		.noct-spotlight .funnel .track{height:38px;border-radius:.7rem;background:rgba(255,255,255,.03);border:1px solid var(--hairline);overflow:hidden}
		.noct-spotlight .funnel .track i{display:block;height:100%;border-radius:.7rem;background:linear-gradient(90deg,rgba(110,92,240,.55),rgba(231,194,125,.6))}
		@media(max-width:860px){
			.noct-spotlight .row,.noct-spotlight .row.is-reversed{grid-template-columns:1fr}
			.noct-spotlight .row .copy,.noct-spotlight .row.is-reversed .copy{order:1}
			.noct-spotlight .row .visual,.noct-spotlight .row.is-reversed .visual{order:2}
			.noct-spotlight .copy p{max-width:none}
		}
	</style>
	<div class="nocturne-wrap">
		<div class="rows">
			<!-- Row 1: text left, visual right -->
			<div class="row nocturne-reveal">
				<div class="copy">
					<span class="nocturne-eyebrow">Ask AI</span>
					<h2>Ask AI, get <span class="nocturne-gold-text">SQL-quality</span> answers</h2>
					<p class="nocturne-muted">Type a question the way you'd say it out loud. Vantage writes the query, runs it across billions of events, and hands back a real, verifiable answer — not a guess.</p>
					<a class="learn" href="/features/ask-ai/">Learn more <span class="arw" aria-hidden="true">→</span></a>
				</div>
				<div class="visual">
					<div class="glass">
						<div class="chat">
							<div class="bubble">Which campaign drove the most paid conversions?</div>
							<div class="answer">
								<div class="who">
									<svg class="spark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M6 6l2.5 2.5M15.5 15.5 18 18M18 6l-2.5 2.5M8.5 15.5 6 18"/></svg>
									Vantage AI
								</div>
								<p class="lede"><b>Spring Launch (Paid Search)</b> drove the most paid conversions last quarter — <b>4,812</b>, ahead of the next channel by 2.3×.</p>
								<div class="resulttbl">
									<div class="tr head"><span>Campaign</span><span class="num">Conversions</span><span></span></div>
									<div class="tr top"><span class="name">Spring Launch</span><span class="num">4,812</span><span class="bar"><i style="width:100%"></i></span></div>
									<div class="tr"><span class="name">Retargeting Q2</span><span class="num">2,104</span><span class="bar"><i style="width:44%"></i></span></div>
									<div class="tr"><span class="name">Brand — Search</span><span class="num">1,336</span><span class="bar"><i style="width:28%"></i></span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Row 2: visual left, text right (alternated) -->
			<div class="row is-reversed nocturne-reveal">
				<div class="copy">
					<span class="nocturne-eyebrow">Behavior</span>
					<h2>Funnels &amp; retention, <span class="nocturne-gold-text">live</span></h2>
					<p class="nocturne-muted">Watch every step where users drop off, recomputed in real time as events stream in. No nightly rebuilds, no stale dashboards — just where you're losing people, right now.</p>
					<a class="learn" href="/features/funnels/">Learn more <span class="arw" aria-hidden="true">→</span></a>
				</div>
				<div class="visual">
					<div class="glass">
						<div class="funnel">
							<div class="fhead"><b>Signup → Activation</b><span>Live · last 24h</span></div>
							<div class="step">
								<div class="slabel"><span>Visited pricing</span><span class="pct">100%</span></div>
								<div class="track"><i style="width:100%"></i></div>
							</div>
							<div class="step">
								<div class="slabel"><span>Started signup</span><span class="pct">61%</span></div>
								<div class="track"><i style="width:61%"></i></div>
							</div>
							<div class="step">
								<div class="slabel"><span>Created workspace</span><span class="pct">38%</span></div>
								<div class="track"><i style="width:38%"></i></div>
							</div>
							<div class="step">
								<div class="slabel"><span>First query run</span><span class="pct">22%</span></div>
								<div class="track"><i style="width:22%"></i></div>
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
