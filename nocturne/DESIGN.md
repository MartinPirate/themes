# Nocturne — pattern build spec (READ FIRST)

You are building ONE WordPress block-pattern PHP file for the **Nocturne** FSE theme:
a dark, premium, "ethereal glass" SaaS theme. Demo product = **Vantage**, an
AI-native product-analytics platform. Aim for Awwwards / Linear / Vercel-tier polish.

## File format
Start EXACTLY with this header (adjust Title/Slug/Description), then block markup:

```php
<?php
/**
 * Title: <Human Title>
 * Slug: nocturne/<slug>
 * Categories: nocturne, nocturne-pages
 * Description: <one line>
 *
 * @package Nocturne
 */
?>
```

Wrap everything in a full-width section, and put your CSS + markup inside a wp:html block
with a scoped `<style>` (scope every selector under a unique root class `.noct-<slug>` so
patterns never collide):

```
<!-- wp:group {"tagName":"section","align":"full","className":"nocturne-section noct-<slug>","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull nocturne-section noct-<slug>">
  <!-- wp:html -->
  <style> .noct-<slug> { ... } </style>
  <div class="nocturne-wrap"> ...markup... </div>
  <!-- /wp:html -->
</section>
<!-- /wp:group -->
```

## Design tokens (already defined globally — USE, never invent a new palette)
`--bg #07080B` `--panel #0F1117` `--panel-2 #161A24` `--text #ECEDF1` `--muted #9AA0AD`
`--hairline rgba(255,255,255,.08)` `--hairline-2 rgba(255,255,255,.14)`
`--gold #E7C27D` `--gold-deep #C99B4E` `--violet #6E5CF0` `--teal #29B79E`
`--ease cubic-bezier(0.32,0.72,0,1)` `--radius 1.75rem`
Fonts: headings already use **Fraunces** serif (weight 500). Body **Plus Jakarta Sans**. Mono/eyebrow **Space Mono**.

## Reuse these shared classes
- `.nocturne-wrap` — 1200px centered container (padding-inline 1.5rem). Put content in it.
- `.nocturne-eyebrow` — mono uppercase gold pill tag; place ABOVE each section heading.
- `.nocturne-gold-text` — gold gradient text; wrap ONE key word of the heading in it.
- `.nocturne-muted` — muted body text.
- `.nocturne-btn` and `.nocturne-btn.nocturne-btn--ghost` — pill buttons. Primary CTA gets a trailing `<span class="ico">↗</span>`.
- `.nocturne-reveal` — add to major blocks so they fade-up on scroll (JS handles it).
- `[data-stagger="90"]` on a grid container → its direct children stagger-reveal.
- `.nocturne-hairline` — 1px gradient divider.
- Glass cards: `class="nocturne-glass"` OR the double-bezel = outer `.nocturne-shell` wrapping inner `.nocturne-core`.

## Aesthetic rules (do not violate)
- Sections are transparent (a global mesh-glow sits behind everything). Only add a subtle panel bg if intentional.
- Macro whitespace — section padding comes from `.nocturne-section` (~9rem); don't fight it.
- Cards = glass with 1px rgba-white hairline borders, soft inset top highlight, large radius. NEVER harsh gray 1px borders or heavy black drop shadows.
- Buttons pill-shaped; primary = gold gradient; trailing arrow nested in a circular `.ico`.
- Motion uses `var(--ease)`; hovers lift/scale subtly. No `linear`/`ease-in-out`.
- Icons: ultra-light inline SVG (stroke-width 1.2–1.5, `stroke="currentColor"` `fill="none"`) or simple geometric shapes. NO emoji-as-icon, NO FontAwesome, NO thick Lucide.
- Headings: Fraunces serif, large, `clamp()`-sized. Precede with an eyebrow pill.
- Fully responsive: multi-column grids collapse to 1 column < 782px.
- Static demo content only (no PHP beyond the header). Keep copy sharp and product-specific to Vantage.

Write the finished file to `/Users/mac/workstation/themes/wordpress/nocturne/patterns/<slug>.php`.
