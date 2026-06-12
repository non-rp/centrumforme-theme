# Forme — WordPress theme

Bespoke WordPress theme for **Centrum Psychoterapii Forme**, a Polish psychotherapy
center. The frontend was hand-coded as a static build and then integrated with
WordPress + ACF Pro so the whole site is editable from the admin.

> A 2022 project.
>
> Author: **Valentyn Melnychenko** — [vmel.dev](https://vmel.dev)

---

## Highlights

- **Hand-built frontend** — SCSS + vanilla JS compiled with a Gulp/Webpack pipeline
  (source in `assets/src`, output committed to `assets/dist`, so the running theme
  needs no build step).
- **Fully editable content via ACF Pro** — no hardcoded copy:
  - Custom post types `psychotherapist` and `training` (workshops & webinars).
  - `training_audience` taxonomy (teachers / parents) for filtered listings.
  - A theme **Options page** for contacts, social links, logo, footer and CF7 form IDs.
  - Per-page field groups for the front page and the recruitment page.
  - Field groups are version-controlled as **local JSON** (`acf-json/`) and auto-sync.
- **Reusable template parts** in `template-parts/components/` (cards, popups).
- **Dynamic navigation** via a custom `Walker_Nav_Menu` that emits the design's BEM
  markup, with a sensible fallback before a menu is assigned.
- **Graceful fallbacks** — templates render the original copy until the ACF fields are
  filled, so the site never looks empty.
- Forms handled by **Contact Form 7**; SVG uploads enabled.

## Requirements

- WordPress ≥ 5.9, PHP ≥ 7.4
- **Advanced Custom Fields PRO** (options page + repeaters). The theme degrades safely
  if ACF is inactive — `forme_field()` / `forme_option()` guard every call.
- **Contact Form 7** (for the contact / booking forms).

## Structure

```
functions.php                 thin bootstrap → loads /inc
inc/
  setup.php                   theme supports, nav menus, widgets
  enqueue.php                 styles & scripts (assets/dist)
  post-types.php              psychotherapist + training CPTs, taxonomy
  acf.php                     acf-json sync, options page, forme_field()/forme_option()
  class-forme-nav-walker.php  BEM nav walker + forme_nav_menu()
  template-tags.php           blog template tags
  template-functions.php      body classes, SVG support, forme_icon()
acf-json/                     ACF field groups (auto-sync)
template-parts/
  components/                 card-psychotherapist, card-training, card-webinar, popup-training
  content-*.php               blog/post parts
front-page.php                home
template-therapists.php       psychotherapist roster (CPT loop)
template-teacher-trainings.php / template-parent-trainings.php   training listings
template-therapist-recruitment.php                              recruitment page
template-news.php             "Aktualności" category listing
assets/                       frontend source (src) + compiled build (dist)
```

## Setup

1. Install **ACF Pro** and **Contact Form 7**, then activate the theme.
2. ACF field groups load automatically from `acf-json/`.
3. Create the content: add `Psychoterapeuci` and `Szkolenia` entries, and assign each
   training a `training_audience` term (`nauczyciele` / `rodzice`).
4. Fill **Ustawienia motywu** (Theme Settings): logo, phone, e-mail, social, footer,
   legal links and CF7 form IDs.
5. Create a menu and assign it to the **Primary** (and optionally **Footer**) location.
6. Set the static front page to the page using `front-page.php`.

## Frontend build

Compiled assets are committed, so a build is only needed when changing styles/scripts.
The FLS Gulp + Webpack pipeline lives in `assets/` (source in `assets/src`, config in
`assets/config`, output in `assets/dist`):

```bash
cd assets
npm install        # first time (uses --legacy-peer-deps via `npm run start`)
npm run dev        # watch + webpack dev server
npm run build      # production build into assets/dist
```

## License

GPL-2.0-or-later.
