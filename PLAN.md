# Sheen — A Multi-Niche Service Web Product (Two Tracks)

> Product name: **Sheen** (theme slug: `sheen`). Flagship niche: **cleaning services**. Market: **US**.
> Demo brand for the cleaning niche: **SparkleWave Cleaning**.
> **Track A:** one custom WordPress block theme → many niches via style variations → wins gigs AND sells as a product.
> **Track B:** a bespoke Three.js immersive showpiece (car-detailing) → the portfolio flex.
> **Both tracks ship light + dark modes.**

---

## 0. Two build tracks (read this first)

The car-detailing reference (Integral Labs, #threejs) is an **immersive Three.js/WebGL** site — real-time 3D, not images. That aesthetic is **not** achievable inside a WordPress block theme without breaking the "client edits everything, no code" promise. So we run two separate tracks, on purpose:

| | **Track A — WordPress theme** | **Track B — Three.js showpiece** |
|---|---|---|
| Stack | FSE block theme (`theme.json` + blocks) | Next.js + React Three Fiber (`@react-three/fiber` + `drei`) + GSAP/Framer Motion + Tailwind |
| Niches | Cleaning (flagship) + car-detailing "premium dark" variation + more | Car-detailing immersive experience |
| Editable by client | ✅ Site Editor, no code | ❌ developer-maintained (bespoke code) |
| Sells as | Repeatable product (ThemeForest / DFY) | High-end custom builds, portfolio flex |
| Light/dark | Native — style variations + toggle (easy) | Custom — swap scene bg, materials, lighting (real work) |
| Role | Pays the bills, wins gigs | The "you built *that*?" wow factor |

**Three.js note:** Three.js is the *3D layer*, not the whole framework. Track B = Next.js/React for layout + nav + type, with Three.js rendering the immersive scene on top.

Track A is the priority (wins the active gig). Track B follows once A ships.

---

## 1. The thesis (why we're building, not buying)

Every free cleaning theme looks like the same recycled 2015 demo. Premium ones (Avada, etc.) cost money and still look templated. So we build **one custom Full-Site-Editing (FSE) block theme** with a bold, vibrant identity, architected from day one to reskin into multiple service niches with a single click.

**This single asset does three jobs:**
1. **Wins this gig** — a real WordPress demo link in the proposal (cleaning niche).
2. **Wins the next gigs** — reskin to car detailing, commercial cleaning, landscaping, etc.
3. **Becomes a product** — list on ThemeForest / sell as done-for-you ($39–69 each, or per-build service).

**Why a block (FSE) theme specifically:** the theme is mostly `theme.json` (colors, fonts, spacing) + block-template HTML. The client edits ALL text, prices, and sections in the WordPress Site Editor with zero code — which directly answers the brief's "no hard-coded text, my team can update prices" requirement. The architecture *is* the deliverable.

---

## 2. Target gig (the brief we're satisfying)

Freelance job: "Vibrant WordPress Cleaning Website" — bold/vibrant 4-page cleaning company site.

**Required, mapped to how we deliver it:**
| Brief requirement | How the theme delivers |
|---|---|
| Bold, vibrant, energetic, whitespace | `theme.json` palette + type scale; generous spacing presets |
| 4 pages: Home, About, Services, Contact/Booking | Block templates, one per page |
| Mobile-first, fully responsive | Block layout + fluid typography; test at phone/tablet/desktop |
| Booking/quote form (name, address, date, service type, notes) | Form plugin, on-page confirm + email notification |
| Basic on-site SEO (keywords, permalinks, headings) | SEO plugin + clean H1–H3 structure + content pack |
| GA + Search Console ready | Header hooks / plugin fields for tracking codes |
| Easy back-end editing, no hard-coded text | FSE — everything editable in Site Editor |
| Hand-off doc / Loom | Short edit guide + form-submissions walkthrough |

---

## 3. Tech decisions (locked unless flagged)

- **Theme type:** FSE block theme (`theme.json` + `templates/*.html` + `parts/*.html` + `patterns/*.php`).
- **Scaffold with:** official **Create Block Theme** plugin (generates + exports the theme cleanly). Fallback: Underscores `_s`.
- **No page builder required** — native block editor keeps it fast, light, and client-editable. (Elementor optional later if a niche needs it; avoid coupling the product to it.)
- **Multi-niche mechanism:** `theme.json` **style variations** (`/styles/*.json`) — each niche = one palette+type preset, one-click swap. Cleaning = default.
- **Light + dark modes:** each niche ships a light and a dark style variation (e.g. `cleaning-light.json` / `cleaning-dark.json`), with a front-end toggle. Native to block themes, low cost.
- **Form:** Fluent Forms (free) — clean UI, conditional fields, on-page confirmation, email notification. Fallback: Contact Form 7.
- **SEO:** RankMath (free) — meta, permalinks, sitemap, GA/Search Console fields.
- **Design/build editor:** native Site Editor; hand-code `theme.json` + patterns in the repo for version control.

---

## 4. Theme architecture

```
vibrant/
├── style.css              # theme header (name, version, etc.)
├── theme.json             # global settings + DEFAULT (cleaning) style
├── functions.php          # enqueue, pattern registration, form/SEO hooks
├── templates/             # full-page block templates
│   ├── index.html
│   ├── front-page.html    # Home
│   ├── page-about.html
│   ├── page-services.html
│   └── page-contact.html  # Contact / Booking
├── parts/                 # header, footer, cta
│   ├── header.html
│   └── footer.html
├── patterns/              # reusable sections (hero, service-cards, testimonial, booking-cta)
│   ├── hero.php
│   ├── service-cards.php
│   ├── stats.php
│   ├── testimonials.php
│   └── booking-cta.php
├── styles/                # STYLE VARIATIONS = the niches
│   ├── cleaning.json      # (default, mirrors theme.json)
│   ├── car-detailing.json
│   └── commercial.json
└── assets/                # images, icons, fonts
```

**Multi-niche = swap `styles/*.json`.** Same templates + patterns, different color/type identity per niche.

---

## 5. Design direction — "bold & vibrant"

Vibrancy is won in the palette + type, not in a canned demo.

**Cleaning (flagship) palette (draft — refine in build):**
- Primary: energetic teal / aqua `#0FBFB4`
- Accent: bright lime or sunny yellow `#C7F000` / `#FFD23F`
- Ink: deep navy `#0B1F3A` for contrast + confidence
- Base: white `#FFFFFF` + soft mist `#F4FBFA` for whitespace that breathes
- Signal: warm coral `#FF5A5F` for CTAs / booking buttons

**Type:** confident display sans for headings (e.g. Poppins / Space Grotesk / Sora), clean readable body (Inter). Fluid scale so it's punchy on desktop, tidy on mobile.

**Car-detailing variation (draft):** black base, electric blue `#2E6BFF` + chrome/graphite accents — premium, high-contrast.

---

## 6. Pages & sections (content skeleton)

- **Home** — hero (headline + booking CTA), trust bar, services grid, why-us/stats, testimonials, booking CTA band, footer.
- **About** — story, values, team, service-area, CTA.
- **Services** — service cards (editable name/price/description each), process steps, CTA.
- **Contact / Booking** — booking form (name, address, preferred date, service type dropdown, special notes) + confirmation + email notify; hours, phone, map, service area.

---

## 7. SEO plan (a launch deliverable)

- Keyword targets per page (e.g. "house cleaning Nairobi", "office cleaning services", "car detailing near me").
- One `<h1>` per page, logical H2/H3, keyword-aware but natural.
- Clean permalinks (`/services/`, `/contact/`).
- Meta title + description per page (RankMath).
- Alt text on all images.
- GA4 + Search Console verification fields wired and ready for the client's codes.

---

## 8. Hosting / demo plan (free)

- **Build + demo:** **InstaWP** — instant real WordPress, live shareable link for the proposal.
- **Persist if it lands:** migrate to **InfinityFree** (free PHP+MySQL, stable link) OR rebuild on the client's hosting (the actual deliverable).
- **Version control:** theme lives here in `vibrant-theme/` (git), pushed into WP via Create Block Theme export / direct upload.

---

## 9. Phases & milestones

### TRACK A — WordPress theme

**Phase 1 — Flagship theme + gig sample (goal: demo link)**
- [ ] Scaffold block theme (Create Block Theme) on InstaWP
- [ ] `theme.json`: cleaning palette, type scale, spacing
- [ ] Cleaning **light + dark** style variations + front-end toggle
- [ ] Build patterns: hero, service-cards, stats, testimonials, booking-cta
- [ ] Assemble 4 page templates
- [ ] Fluent Forms booking form (fields + confirm + email) — test end-to-end
- [ ] RankMath SEO + content pack (copy, meta, alts)
- [ ] Responsive QA (phone/tablet/desktop)
- [ ] Publish demo link → drop into proposal
- _Est: a few focused days_

**Phase 2 — Prove multi-niche**
- [ ] Add car-detailing "premium dark" style variation (light + dark)
- [ ] Swap-test: same theme, new niche in one click
- [ ] Second demo link (detailing)

**Phase 3 — Productize**
- [ ] Polish, docs, license
- [ ] Hand-off doc + Loom template
- [ ] Package for ThemeForest / done-for-you offer

### TRACK B — Three.js immersive showpiece (after Track A ships)

**Phase B1 — Scaffold**
- [ ] Next.js + `@react-three/fiber` + `@react-three/drei` + Tailwind + GSAP/Framer Motion
- [ ] Dark immersive hero scene (car-detailing theme), thin/light type, minimal nav

**Phase B2 — Experience**
- [ ] Scroll-driven 3D sections, subtle motion, video/reflective materials
- [ ] Light + dark modes (swap scene bg, materials, lighting)

**Phase B3 — Ship**
- [ ] Deploy free to **Vercel** (this is exactly what Vercel is for) → live portfolio link

---

## 10. Deliverables (match the brief exactly)

- [ ] Fully functional WordPress site (4 pages) on hosting, matching mockups
- [ ] Booking/quote form tested end-to-end
- [ ] Keyword-optimized titles, H1–H3, alt tags at launch
- [ ] Hand-off doc / short Loom: how to edit pages + view form submissions

---

## 11. Decisions & open questions

- [x] **Market:** US (US copy, tone, SEO keywords, phone/address formats)
- [x] **Demo brand (cleaning niche):** SparkleWave Cleaning
- [x] **Final product/theme name:** **Sheen** (theme slug `sheen`)
- [ ] **Images:** all invented for the sample — sourcing high-quality free stock (Unsplash / Pexels, license-free for commercial demo use)

---

## 12. Next action

Scaffold Phase 1: spin up InstaWP, install Create Block Theme, and lay down `theme.json` + the hero pattern. Start the moment the open questions above are answered.
