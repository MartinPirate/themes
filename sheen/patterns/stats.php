<?php
/**
 * Title: Stats — Animated counters
 * Slug: sheen/stats
 * Categories: sheen, sheen-pages
 * Description: Four animated stat counters on a navy band.
 *
 * @package Sheen
 */
?>
<!-- wp:group {"align":"full","className":"sheen-stats","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"gradient":"linear-gradient(135deg, #0B1F3A 0%, #123056 60%, #0B1F3A 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull sheen-stats has-background" style="background:linear-gradient(135deg, #0B1F3A 0%, #123056 60%, #0B1F3A 100%);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:html -->
	<div class="alignwide" style="display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center;color:#fff">
		<div class="sheen-stat sheen-reveal">
			<div class="sheen-stat-num"><span data-count="12" data-suffix="+">0</span></div>
			<p style="color:#C7D4E2;margin:.4rem 0 0">Years in business</p>
		</div>
		<div class="sheen-stat sheen-reveal">
			<div class="sheen-stat-num"><span data-count="8000" data-suffix="+">0</span></div>
			<p style="color:#C7D4E2;margin:.4rem 0 0">Cleans completed</p>
		</div>
		<div class="sheen-stat sheen-reveal">
			<div class="sheen-stat-num"><span data-count="600" data-suffix="+">0</span></div>
			<p style="color:#C7D4E2;margin:.4rem 0 0">Happy households</p>
		</div>
		<div class="sheen-stat sheen-reveal">
			<div class="sheen-stat-num"><span data-count="4.9">0</span></div>
			<p style="color:#C7D4E2;margin:.4rem 0 0">Average rating</p>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
