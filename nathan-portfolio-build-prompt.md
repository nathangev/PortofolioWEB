# Portfolio Build Brief — Nathan (BINUS Malang)

> **How to use this file:** paste this whole document as your first message to Claude Code (or another coding agent) inside an empty project folder. Before you run it, do the three things listed in "Before you run this" below — the prompt is written assuming you've done them. Everything in `[FILL: ...]` is a real gap I could not verify myself; replace it with your actual info before or during the build. Do not let the agent invent fake data to fill these gaps.

---

## 0. Before you run this

1. Drop your real project screenshots/GIFs into `/assets/toko/`, `/assets/mbg/`, `/assets/leaf/`, `/assets/simkost/`. No stock UI kit images, no AI-generated fake screenshots standing in for real ones — if a real screenshot isn't ready yet, leave a plain labeled placeholder block instead of a fabricated one.
2. Drop one high-resolution, well-lit portrait photo (front-facing, plain-ish background, decent resolution) into `/assets/portrait.jpg`. The hero treatment below depends on this being a real photo, not an illustration.
3. Your `MBG-Smart-Logistics-FullDev` repo didn't load when I checked it — it may be private, or just not indexed yet. Make sure it's public before you link to it, or export a couple of screenshots/a short screen-recording GIF as a fallback so the case study isn't just a dead link.

---

## 1. Role

You are the frontend engineer and designer for one person's portfolio site. Act like a designer at a studio that's known for never handing two clients the same-looking site — no template, no generic "developer portfolio" defaults. Read this whole brief before writing code. Where this brief makes a specific decision, follow it exactly. Where it leaves something open, make a deliberate choice and say what you chose and why — don't default to the easiest generic option.

## 2. Who this actually is (use this, don't flatten it)

Nathan is a university student at **BINUS University, Malang campus**, in a genuinely unusual dual-track program: one half is computer science/IT (UX design, database engineering, web development), the other half is nutrition and health science (clinical nutrition, biochemistry). He is not "an aspiring full-stack developer." He is someone whose actual work sits at the intersection of software systems and food/health systems — a point-of-sale system with expiry-aware inventory, an AI routing tool for a food-delivery program, a plant-health classifier, a boarding-house database, and a piece of nutrition research that got noticed at BINUS Jakarta.

**The whole portfolio's point of view should come from that intersection.** Every generic portfolio says "I build clean, scalable, user-centered solutions." Don't write that sentence or anything that rhymes with it. Say what's actually true: this person moves between two disciplines that don't normally share a person, and his projects are evidence of that, not a claim about it.

## 3. Design direction

### 3.1 The concept: "Blueprint & Bench"

Two visual registers, both real to Nathan's actual work, used deliberately instead of blended into mush:

- **Blueprint** — engineering/software register. Cyanotype blue, thin construction lines, coordinate ticks, functional technical annotation.
- **Bench** — the health-science register. Lab-notebook paper, a clinical/muted palette, handwriting-adjacent warmth, the feel of a lined notebook page rather than a slide deck.

The site literally moves between these two as you scroll: the hero and the intro are Blueprint (dark), the case studies shift to Bench (light) as the content gets more concrete and human, and the two projects that are explicitly cross-disciplinary (MBG Logistics, the leaf classifier) get a **hybrid treatment** where both systems visibly overlay each other — that's the one moment where the metaphor becomes literal, so don't spend it anywhere else.

This is a structural decision, not a decorative one: which register a section uses tells the visitor something true about that section's content. Don't apply "Blueprint" or "Bench" styling anywhere it isn't earned by the actual content.

### 3.2 Explicitly forbidden — do not do any of these

These are the current tells of an AI-generated page. None of them are inherently bad, but none of them were chosen for this brief either, so none of them appear:

- Warm cream background (anything near `#F4F1EA`) paired with a high-contrast serif display and a terracotta/clay accent near `#D97757`.
- Near-black background with one bright acid-green or vermilion accent.
- Broadsheet layout: hairline rules, zero border-radius, dense newspaper columns.
- The SaaS-card kit: every project chopped into identical rounded cards with the same soft grey shadow and a gradient wash behind it.
- Template chrome: tracked-out ALL-CAPS eyebrow labels above every heading, meta strings joined with middle dots, a spaced em dash in labels, a monospace face slapped on small labels purely for decoration, a "→" appended to every link.
- Skill percentage bars, star ratings, or "proficiency" meters of any kind.
- A fade-and-slide-up entrance repeated on every section, or a hover-lift on every card.
- Fake testimonials. Nathan is a student — there are no client quotes, don't invent any.

If at any point what you're building could be mistaken for a template with Nathan's name swapped in, stop and revise that part.

### 3.3 Color

Six tokens, each with one job:

| Token | Hex | Role |
|---|---|---|
| `--blueprint-bg` | `#1B2A4A` | Base background for Blueprint sections (hero, intro) |
| `--blueprint-line` | `#DCE8F5` | Line art, headings, and body text on Blueprint sections |
| `--paper-bg` | `#E6E1D2` | Base background for Bench sections (case studies) |
| `--ink` | `#1E2320` | Body text and line art on Bench sections |
| `--amber` | `#C98A2E` | Engineering-register accent (Toko, SIMKOST, technical callouts) |
| `--sage` | `#6E9C87` | Health-register accent (leaf classifier, MBG, research) |

No other colors. The hybrid sections (MBG, leaf classifier) are the only places amber and sage appear together.

### 3.4 Type

Two families, two clearly different jobs — not decoration, roles:

- **Archivo** (or a comparable technical grotesk) — every heading, nav item, button, and any label that is doing real annotation work (e.g. a blueprint callout pointing at something specific and true, not a generic tag).
- **Lora** (or a comparable text serif) — all body paragraphs and case-study prose, especially in Bench sections, where it should read like something written by hand in a lab notebook rather than typeset for a slide.

Line length under ~75 characters for body copy. No all-caps labels anywhere — if something needs to stand out, use size and weight, not case.

### 3.5 Layout

One continuous vertical scroll, not a grid of interchangeable sections. A thin fixed rail on the left edge acts as a blueprint ruler: small tick marks plus the current section's name, updating as you scroll. This is a real wayfinding device, not decoration — collapse it to a slim bottom progress line on mobile rather than deleting the idea.

Each case study gets its **own layout shaped by what it actually is** — not a repeated template:

- Toko POS → dashboard/UI-heavy, screenshots front and center (it's a real running app).
- SIMKOST → ERD/schema-forward, embedded Figma frame, because this was a design-and-database exercise, not a deployed app — present that honestly as what it is.
- MBG Logistics → map/route-forward, hybrid Blueprint+Bench treatment.
- Leaf classifier → before/after image-classification layout, hybrid treatment.
- Research paper → a document/citation-style card, distinct from the software case studies.

```
ASCII sketch of the scroll, left to right = top to bottom:

 |tick  ┌───────────────────────────────┐   BLUEPRINT
 |tick  │   tilted photo-plane (§4)     │
 |tick  │   Nathan — one real sentence  │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   BLUEPRINT
 |tick  │   "the bridge" — short intro  │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   BENCH
 |tick  │   Systems I've shipped:       │
 |tick  │   Toko POS (bespoke layout)   │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   HYBRID
 |tick  │   MBG Smart Logistics         │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   HYBRID
 |tick  │   Leaf classifier             │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   BENCH
 |tick  │   Systems I've designed:      │
 |tick  │   SIMKOST (Figma embed)       │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   BENCH
 |tick  │   Research → BINUS Jakarta    │
 |tick  └───────────────────────────────┘
 |tick  ┌───────────────────────────────┐   BLUEPRINT
 |tick  │   Contact, plain              │
 |tick  └───────────────────────────────┘
```

## 4. The hero: the 3D + photo treatment

Don't attempt a photorealistic 3D face model — it's a heavy asset pipeline for a real risk of looking uncanny, and it's not actually what makes this hero good. Instead:

**Build a "blueprint scan" hero.** Take the real portrait photo, desaturate it, and duotone-map it into the Blueprint palette (`--blueprint-bg` shadows, `--blueprint-line` highlights) so it reads as if it were printed on cyanotype paper. Mount that image on a single tilted plane that behaves like a physical sheet pinned at its corners:

- On load: one deliberate motion moment — a thin scan-line sweeps down across the photo once, and the plane settles into its resting tilt. This is the *one* orchestrated animation the whole hero gets. Don't add more.
- On cursor move: the plane tilts subtly to follow the cursor (max ~8–10°) — motion that responds to something the visitor does, not a background loop.
- Around the photo, draw a handful of thin leader-lines (SVG) with small Archivo annotation labels — but the labels must be **real, specific facts pulled from his actual work**, not generic buzzwords. For example: a line to the label "11-table schema," another to "FIFO batch inventory," another to "AI route optimization," another to "clinical nutrition." No "Frontend," "Backend," "Team player."

**Two build options, pick based on how much time you want to spend:**

- *Lighter (recommended to start):* pure CSS 3D transforms driven by Framer Motion's `useMotionValue`/`useTransform` reading pointer position. No WebGL, ships fast, still reads as "3D."
- *Fuller:* `@react-three/fiber` + `@react-three/drei`, rendering the photo as a textured plane in an actual 3D scene. Only worth it if you want the plane to sit among other 3D elements (e.g. thin extruded line-art). Keep it in one isolated, lazy-loaded component so it doesn't weigh down the rest of the site, and provide the CSS-transform version as an automatic fallback for `prefers-reduced-motion` and for any device where the WebGL context fails to initialize.

## 5. Tech stack

- **Framework:** React + Vite. This is a single long-scroll site — no need for Next.js routing/SSR overhead.
- **Styling:** Tailwind CSS for layout/spacing utilities, plus a small hand-written CSS file for the things Tailwind can't express cleanly (the scan-line sweep, the duotone photo filter, the ruler rail ticks).
- **Motion:** `motion` (the current Framer Motion package) for scroll-linked reveals, the hero parallax, and case-study expand/collapse transitions.
- **3D (optional, isolated):** `@react-three/fiber` + `@react-three/drei`, only inside the hero component, dynamically imported.
- **Deployment:** Vercel, Netlify, or GitHub Pages — whichever you already have set up for the other repos.

## 6. Copy rules

- No "passionate," "lifelong learner," "detail-oriented," "team player," or any variant.
- No "Let's build something amazing together," no "Let's connect!," no exclamation-point CTAs.
- Every claim about a project must be a specific, checkable fact (a real number, a real tech choice, a real constraint that was solved), not an adjective. "FIFO-batched inventory that sells oldest stock first automatically" beats "efficient inventory management" every time.
- Buttons say exactly what happens: "View the repo," "Open the Figma file," "Read the abstract" — not "Learn more," not "Submit."
- The intro section (§3.5, "the bridge") should say plainly, in a couple of sentences, why someone is studying both of these things at once, without turning it into a mission statement. If you don't have a good one or two sentences for this, ask Nathan for the real reason rather than inventing an inspirational one.

## 7. Motion rules

One deliberate animation moment per major section, not a repeated pattern:

- Hero: the scan-line sweep on load (§4). Once.
- Case studies: reveal on scroll is fine *if* it's the same simple treatment used consistently, not a different flourish per card — or better, skip scroll-reveal entirely and let the bespoke per-project layouts (§3.5) do the visual work instead.
- The hybrid sections (MBG, leaf classifier): the one place the Blueprint and Bench line-art visibly overlay/interlock — make this the site's second "big moment," on scroll into that section.
- No hover-lift on every card. If a case study expands for more detail, that's an action-triggered transition and is fine — it's showing what changed, which is exactly what motion should do.
- Respect `prefers-reduced-motion` everywhere: static duotone photo, no scan-line, no parallax, transitions become instant or near-instant.

## 8. Project case studies

Each brief below is what to say and how to frame it — write the actual sentences yourself, following §6.

### 8.1 Toko Sumber Makmur POS — "Systems I've shipped"

Real facts to use (from the repo, don't invent additions):
- Vue 3 (Composition API) + Pinia + Vite frontend; Laravel 11 REST API backend; SQLite database.
- Built for a real constraint, not a toy: a grocery/retail store that needs to work when the internet doesn't. Offline sales queue via IndexedDB with a manual sync step.
- FIFO batch inventory — stock is grouped by intake batch and expiry date, and a sale automatically draws from the oldest batch first.
- Three-role RBAC: Owner (full access), warehouse admin (stock + stock reports only), cashier (POS + sales history only).
- A returns module that creates a new `RET-` prefixed batch to correct stock rather than editing history.
- Strict scope: 6 modules total, deliberately built to match an academic Use Case/ERD/Class/Activity/Sequence diagram set exactly, with no extra features bolted on.

Framing: don't call this "a POS app." The actual interesting engineering story is *the combination* — an offline-first sync queue and expiry-aware inventory logic working together, built under a hard constraint (matching a fixed academic diagram spec) rather than free-form scope. Link the repo: `https://github.com/nathangev/Toko_SE_Semester4`.

### 8.2 MBG Smart Logistics — hybrid section

[FILL: I'm assuming "MBG" refers to Makan Bergizi Gratis, Indonesia's national free-nutritious-meal program — school deliveries running through central kitchens (SPPG), which is exactly the kind of real routing/logistics problem an AI fastest-route tool would target, and it fits your nutrition-science side perfectly. Confirm this is right, and fill in: what the routing algorithm actually optimizes for (distance? delivery time windows? number of kitchens/schools?), what tech stack you used, and what your actual role was if this was a team project.]

Framing: this is the section where "computer science student" and "nutrition science student" stop being two separate sentences and become one project. Say plainly what problem it solves (getting food from a kitchen to a school on time) and what made the routing hard, rather than describing it as "an AI-powered logistics platform."

### 8.3 Leaf classifier (AI) — hybrid section

[FILL: what does it actually classify — species, disease, ripeness? What model/approach (CNN, transfer learning, which base model)? What dataset, and roughly how well does it perform? Is there a live demo or just a repo?]

Framing: this is a computer-vision project with a health-adjacent read: diagnosing plant health the way his clinical-nutrition coursework trains him to look for signs in a body. Don't force the metaphor into the copy explicitly — let the section placement (right next to MBG, in the hybrid register) do that work instead.

### 8.4 SIMKOST — "Systems I've designed"

Known: a Figma UI/UX design for a boarding-house (kost) management system, final project for a database lab course ("FINPRO Lab Database"). I couldn't open the Figma file to pull specifics (needs a logged-in session), so:

[FILL: what are the core screens (room listing, tenant management, payment tracking?), what does the underlying ERD look like at a high level, and what's one real UX decision you made and why.]

Framing: be upfront that this is a design-and-data-modeling exercise, not a deployed product — that's not a weakness, it's a different kind of work than Toko, and the site should say so directly ("designed and modeled, not shipped — here's the thinking") rather than implying it's a live app. Embed the Figma file: `https://www.figma.com/design/gkB6gDssRcHJO7qVmjgXiZ/FINPRO-LAB-DATABASE-SIMKOST`.

### 8.5 Research paper — "Research"

[FILL: paper title, topic, what venue/symposium at BINUS Jakarta it reached, and one sentence on the actual finding.]

Framing: present this like an abstract card — title, one-line finding, venue, link/PDF if available — in the Bench register. This is evidence of the health-science half of the identity carrying real weight, not a footnote.

## 9. Quality floor

- Responsive down to a small phone screen — the ruler rail and hybrid overlay treatments both need a working mobile fallback, not just a hidden desktop feature.
- Visible keyboard focus states on every interactive element.
- `prefers-reduced-motion` fully respected (§7).
- Real contrast-checked color pairs — text on `--blueprint-bg` and text on `--paper-bg` both need to pass a basic contrast check, don't eyeball it.

## 10. Before you call it done — self-check

Go through this list against the actual built site, not the plan:

- Could this hero belong to a different student's portfolio if you swapped the photo? If yes, it's not specific enough yet.
- Are any two project sections laid out identically? If yes, that's the card-kit tell — give them distinct layouts per §3.5.
- Is there a skill bar, a percentage, or a star rating anywhere? Delete it.
- Is there an ALL-CAPS label anywhere that isn't the ruler rail? Remove it.
- Does any sentence use "passionate," "seamless," "cutting-edge," "innovative," or "solutions"? Rewrite it as a specific fact.
- Does the hybrid section (§7) actually look different from the pure Blueprint and pure Bench sections, or did the overlay idea get lost in the build? If lost, bring it back — it's the one moment doing the most conceptual work on the page.
