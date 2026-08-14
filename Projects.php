<?php
/**
 * Template Name: Projects Template
 *
 * BC Landscaping & Hardscape, Projects / Our Work
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-projects bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo    = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $swirl_a    = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b    = '/wp-content/uploads/2026/07/Graficos-10.png';
    $hero_image = '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg';

    // ------------------------------------------------------------
    // FILTROS
    // ------------------------------------------------------------
    $filters = [
      ['key' => 'all',            'label' => 'All Projects'],
      ['key' => 'xeriscaping',    'label' => 'Xeriscaping'],
      ['key' => 'hardscaping',    'label' => 'Hardscaping'],
      ['key' => 'turf',           'label' => 'Grass & Turf'],
      ['key' => 'lighting',       'label' => 'Lightscape'],
      ['key' => 'irrigation',     'label' => 'Irrigation'],
      ['key' => 'retaining-wall', 'label' => 'Retaining Walls'],
      ['key' => 'maintenance',    'label' => 'Maintenance'],
    ];

    $filter_icons = [
      'all'            => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
      'xeriscaping'    => '<circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/>',
      'hardscaping'    => '<rect x="3" y="4" width="8" height="4"/><rect x="13" y="4" width="8" height="4"/><rect x="3" y="10" width="8" height="4"/><rect x="13" y="10" width="8" height="4"/><rect x="3" y="16" width="8" height="4"/><rect x="13" y="16" width="8" height="4"/>',
      'turf'           => '<path d="M6 21V10c0-2 1-4 2-6M12 21V7c0-2 1-4 2-6M18 21V10c0-2-1-4-2-6"/>',
      'lighting'       => '<path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.5 10.9c.4.3.5.7.5 1.1v1h6v-1c0-.4.1-.8.5-1.1A6 6 0 0 0 12 3Z"/>',
      'irrigation'     => '<path d="M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11Z"/>',
      'retaining-wall' => '<rect x="2" y="14" width="6" height="6"/><rect x="9" y="14" width="6" height="6"/><rect x="16" y="14" width="6" height="6"/><rect x="5.5" y="8" width="6" height="6"/><rect x="12.5" y="8" width="6" height="6"/>',
      'maintenance'    => '<circle cx="6" cy="6" r="2.4"/><circle cx="6" cy="18" r="2.4"/><path d="M20 4 8 14M8 10 20 20"/>',
    ];

    // ------------------------------------------------------------
    // PROYECTOS, todas las fotos reales disponibles
    // ------------------------------------------------------------
    $projects = [
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg', 'title' => 'Backyard Remodel, Tempe, AZ', 'cat' => 'xeriscaping', 'tag' => 'Xeriscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg', 'title' => 'Desert-Smart Backyard', 'cat' => 'xeriscaping', 'tag' => 'Xeriscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp', 'title' => 'Ficus Columns & Paver Patio', 'cat' => 'hardscaping', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp', 'title' => 'Backyard Remodel, Peoria, AZ', 'cat' => 'hardscaping', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-BA-5-2.webp', 'title' => 'Backyard Hardscape Remodel', 'cat' => 'hardscaping', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-6.webp', 'title' => 'Columns, Turf & Privacy Planting', 'cat' => 'hardscaping', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-5.webp', 'title' => 'Front Yard Turf Conversion', 'cat' => 'turf', 'tag' => 'Grass & Turf'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-9.jpg', 'title' => 'Sod-to-Turf Conversion', 'cat' => 'turf', 'tag' => 'Grass & Turf'],
      ['image' => '/wp-content/uploads/2026/07/Lightscape-installation.webp', 'title' => 'Architectural Lightscape', 'cat' => 'lighting', 'tag' => 'Lightscape'],
      ['image' => '/wp-content/uploads/2026/07/Irrigation-Systems.webp', 'title' => 'Efficient Irrigation Install', 'cat' => 'irrigation', 'tag' => 'Irrigation'],
      ['image' => '/wp-content/uploads/2026/07/Retaining-Walls.webp', 'title' => 'Engineered Retaining Wall', 'cat' => 'retaining-wall', 'tag' => 'Retaining Walls'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-27.jpg', 'title' => 'Full Yard Clean-Up', 'cat' => 'maintenance', 'tag' => 'Maintenance'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-5.jpg', 'title' => 'Seasonal Yard Clean-Up', 'cat' => 'maintenance', 'tag' => 'Maintenance'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp', 'title' => 'Yard Clean-Up & Turf Refresh', 'cat' => 'maintenance', 'tag' => 'Maintenance'],
    ];

    $stats = [
      ['to' => 15, 'suffix' => '+', 'label' => 'Years in Arizona'],
      ['to' => 8,  'suffix' => '',  'label' => 'Services In-House'],
      ['to' => 5,  'suffix' => '',  'label' => 'Premium Service Areas'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO, 100% gráfico, sin fotos                                -->
  <!-- ============================================================ -->
  <section class="relative min-h-[560px] w-full overflow-hidden bg-[#8B0333] lg:min-h-[620px]">
    <span class="bc-hero-ghost" aria-hidden="true"><?php echo (int) count($projects); ?></span>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-24 -top-16 h-[420px] w-[420px] opacity-[0.08]" data-speed="0.1">
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-16 bottom-10 h-[280px] w-[280px] rotate-90 opacity-[0.07]" data-speed="-0.08">

    <div class="relative z-10 mx-auto flex min-h-[560px] max-w-4xl flex-col items-center justify-center px-4 py-24 text-center lg:min-h-[620px]">
      <span class="bc-fade-in-0 bc-hero-count">
        <span class="bc-count" data-count-to="<?php echo (int) count($projects); ?>">0</span> Real Projects Documented
      </span>

      <h1 class="mt-6 text-4xl font-black leading-[1.05] tracking-[-0.03em] text-white md:text-6xl">
        <?php
          $hero_words = explode(' ', 'Real Yards. Real Results.');
          foreach ($hero_words as $i => $word) : ?>
            <span class="bc-word"><span class="bc-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="bc-fade-in-2 mt-6 max-w-xl text-base leading-7 text-white/75">
        No stock photos, no renderings. Every image on this page is a BC Landscaping &amp;
        Hardscape project completed across the Phoenix metro.
      </p>

      <a href="#gallery" class="js-bc-scroll-to-gallery bc-fade-in-3 mt-8 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#BCBF60] transition hover:gap-3">
        Browse the Full Gallery <span>&darr;</span>
      </a>
    </div>

    <div class="bc-category-ribbon" aria-hidden="true">
      <div class="bc-category-ribbon__track">
        <?php for ($r = 0; $r < 3; $r++) : ?>
          <?php foreach ($filters as $filter) : if ($filter['key'] === 'all') continue; ?>
            <span class="bc-category-ribbon__item"><?php echo esc_html($filter['label']); ?></span>
            <span class="bc-category-ribbon__dot"></span>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- STATS STRIP, tarjeta flotante con más carácter                -->
  <!-- ============================================================ -->
  <section class="relative z-20 px-4">
    <div class="bc-stats-card mx-auto -mt-16 max-w-5xl md:-mt-20">
      <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-stats-card__mark">
      <div class="grid divide-y divide-[#2A0111]/10 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
        <?php
          $stat_icons = [
            '<path d="M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"/><circle cx="12" cy="9.8" r="2.4"/>',
            '<path d="M3 12h4l3 8 4-16 3 8h4"/>',
            '<path d="M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"/><path d="m9.2 12.1 2 2 3.6-4"/>',
          ];
          $stat_tones = ['#117682', '#8B0333', '#BCBF60'];
          foreach ($stats as $i => $stat) : ?>
          <div class="bc-tilt bc-reveal-stagger bc-stats-card__item">
            <span class="bc-stats-card__icon-badge" style="background: <?php echo esc_attr($stat_tones[$i]); ?>1a; border-color: <?php echo esc_attr($stat_tones[$i]); ?>40;">
              <svg viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr($stat_tones[$i]); ?>" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="bc-stats-card__icon" aria-hidden="true"><?php echo $stat_icons[$i]; ?></svg>
            </span>
            <div>
              <span class="bc-count text-4xl font-black tracking-[-0.03em] md:text-5xl" style="color: <?php echo esc_attr($stat_tones[$i]); ?>;" data-count-to="<?php echo (int) $stat['to']; ?>">0</span><span class="text-4xl font-black md:text-5xl" style="color: <?php echo esc_attr($stat_tones[$i]); ?>;"><?php echo esc_html($stat['suffix']); ?></span>
              <p class="mt-1 text-xs font-bold uppercase tracking-[0.12em] text-[#2A0111]/65"><?php echo esc_html($stat['label']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- GALLERY + FILTROS                                             -->
  <!-- ============================================================ -->
  <section id="gallery" class="relative bg-[#E6DACF] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bc-reveal-up mx-auto max-w-2xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Our Work</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">
          Browse Projects by Type
        </h2>
        <div class="mx-auto mt-6 h-1.5 w-20 bg-[linear-gradient(90deg,#117682_0%,#BCBF60_100%)]"></div>
      </div>

      <!-- Filter tabs -->
      <div class="bc-filter-bar mt-10">
        <div class="js-bc-filters bc-filter-bar__track">
          <span class="bc-filter-bar__indicator" aria-hidden="true"></span>
          <?php foreach ($filters as $i => $filter) : ?>
            <button type="button" class="js-bc-filter-btn bc-filter-pill<?php echo $i === 0 ? ' is-active' : ''; ?>" data-filter="<?php echo esc_attr($filter['key']); ?>">
              <svg class="bc-filter-pill__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><?php echo $filter_icons[$filter['key']]; ?></svg>
              <span><?php echo esc_html($filter['label']); ?></span>
            </button>
          <?php endforeach; ?>
        </div>
      </div>

      <p class="js-bc-filter-empty mt-10 hidden text-center text-sm font-bold text-[#2A0111]/50">
        No projects in this category yet, check back soon.
      </p>

      <!-- Gallery bento grid -->
      <div class="js-bc-gallery bc-bento-grid mt-12">
        <?php foreach ($projects as $i => $project) : ?>
          <figure
            class="js-bc-gallery-item bc-art-frame bc-wipe bc-reveal-stagger group relative cursor-pointer"
            data-category="<?php echo esc_attr($project['cat']); ?>"
            data-index="<?php echo (int) $i; ?>"
          >
            <span class="bc-art-frame__index"><?php echo ($i + 1) < 10 ? '0' . ($i + 1) : (string) ($i + 1); ?></span>
            <div class="bc-art-frame__mat">
              <div class="relative h-full w-full overflow-hidden rounded-[4px]">
                <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>, BC Landscaping & Hardscape" class="js-bc-lightbox-img bc-wipe__img absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105" loading="lazy">
                <figcaption class="bc-wipe__caption absolute inset-x-0 bottom-0 px-4 py-3">
                  <span class="bc-wipe__curtain" aria-hidden="true"></span>
                  <span class="bc-wipe__caption-content">
                    <span class="block text-[10px] font-black uppercase tracking-[0.14em] text-[#BCBF60]"><?php echo esc_html($project['tag']); ?></span>
                    <span class="block text-sm font-bold text-white"><?php echo esc_html($project['title']); ?></span>
                  </span>
                </figcaption>
              </div>
            </div>
          </figure>
        <?php endforeach; ?>
      </div>

      <p class="bc-reveal-up mt-4 text-center text-[13px] text-[#2A0111]/55">
        Before/after transformations are coming soon as we document new projects in the field.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- LIGHTBOX                                                      -->
  <!-- ============================================================ -->
  <div class="js-bc-lightbox bc-lightbox" aria-hidden="true">
    <button type="button" class="js-bc-lightbox-close bc-lightbox__close" aria-label="Close">&times;</button>
    <button type="button" class="js-bc-lightbox-prev bc-lightbox__nav bc-lightbox__nav--prev" aria-label="Previous">&larr;</button>
    <div class="bc-lightbox__frame">
      <img src="" alt="" class="js-bc-lightbox-large bc-lightbox__img">
      <div class="js-bc-lightbox-caption bc-lightbox__caption"></div>
    </div>
    <button type="button" class="js-bc-lightbox-next bc-lightbox__nav bc-lightbox__nav--next" aria-label="Next">&rarr;</button>
  </div>

  <!-- ============================================================ -->
  <!-- FINAL CTA                                                     -->
  <!-- ============================================================ -->
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-16 -top-16 h-[300px] w-[300px] opacity-[0.06]" data-speed="0.12">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Get Started</p>
      <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Like What You See? Your Project Could Be Next.
      </h2>
      <p class="bc-reveal-up mt-6 text-base leading-8 text-white/80">
        Every yard on this page started with a free estimate. Tell us about your property and let&rsquo;s
        talk about what&rsquo;s possible.
      </p>
      <div class="bc-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get an Estimate</span></a>
        <a href="tel:+14802294950" class="bc-btn bc-btn-outline bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"><span>Call (480) 229-4950</span></a>
      </div>
    </div>
  </section>

</main>

<style>
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_thin.otf') format('opentype'); font-weight: 100; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_light.otf') format('opentype'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_reg.otf') format('opentype'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_med.otf') format('opentype'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_bld.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_blk.otf') format('opentype'); font-weight: 900; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Museo Slab'; src: url('/wp-content/uploads/2026/07/fonts/Museo_Slab_700.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }

  .bc-projects {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-projects h1,.bc-projects h2,.bc-projects h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

  /* ---- Hero ken-burns + word reveal ---- */
  .bc-hero-kb{ animation: bcHeroZoom 12s ease-out forwards; transform: scale(1.1); }
  @keyframes bcHeroZoom{ to{ transform: scale(1); } }
  .bc-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .bc-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation: bcWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay: calc(var(--i) * 70ms + 200ms); }
  @keyframes bcWordUp{ to{ transform:translateY(0); opacity:1; } }
  .bc-fade-in-0,.bc-fade-in-2{ opacity:0; transform:translateY(18px); animation: bcFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .bc-fade-in-0{ animation-delay:.1s; } .bc-fade-in-2{ animation-delay:1s; }
  @keyframes bcFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Hero: numeral fantasma gigante + cinta diagonal de categorías ---- */
  .bc-hero-ghost{
    position:absolute; z-index:0; top:50%; right:-2rem; transform:translateY(-50%);
    font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:min(46vw,26rem); line-height:1;
    color:var(--bc-green); opacity:.07; pointer-events:none; user-select:none;
  }
  .bc-category-ribbon{
    position:absolute; left:-10%; right:-10%; top:80%; z-index:1; overflow:hidden;
    transform:rotate(-3deg); border-top:1px solid rgba(255,255,255,.14); border-bottom:1px solid rgba(255,255,255,.14);
    background:rgba(255,255,255,.03); padding:.85rem 0;
  }
  .bc-category-ribbon__track{ display:flex; width:max-content; align-items:center; gap:1.5rem; animation:bcRibbonScroll 40s linear infinite; }
  .bc-category-ribbon__item{ font-size:.8rem; font-weight:800; text-transform:uppercase; letter-spacing:.14em; color:rgba(255,255,255,.55); white-space:nowrap; }
  .bc-category-ribbon__dot{ width:5px; height:5px; border-radius:999px; background:var(--bc-green); opacity:.6; flex-shrink:0; }
  @keyframes bcRibbonScroll{ 0%{ transform:translateX(0); } 100%{ transform:translateX(-33.333%); } }
  .bc-hero-count{
    display:inline-flex; align-items:center; gap:.5rem; padding:.5rem 1.1rem;
    border:1px solid rgba(255,255,255,.28); border-radius:999px; backdrop-filter:blur(6px);
    font-size:.72rem; font-weight:800; text-transform:uppercase; letter-spacing:.1em; color:rgba(255,255,255,.9);
  }
  .bc-hero-count .bc-count{ font-family:'BC Museo Slab',Georgia,serif; font-size:1.05rem; color:var(--bc-green); }

  /* ---- Buttons ---- */
  .bc-btn{ position:relative; border:1px solid transparent; border-radius:8px; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; overflow:hidden; }
  .bc-btn span{ position:relative; z-index:1; }
  .bc-btn-green{ background:var(--bc-green); color:var(--bc-wine); box-shadow:0 16px 34px rgba(188,191,96,.28); }
  .bc-btn-green:hover{ background:#a9ac52; }
  .bc-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .bc-btn-outline:hover{ background:#fff; color:var(--bc-wine); }
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }
  .bc-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  /* ---- Reveal on scroll ---- */
  .bc-reveal-up,.bc-reveal-stagger{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-stagger{ transform:translateY(32px); }
  .bc-reveal-up.is-visible,.bc-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }
  .bc-parallax{ will-change:transform; }
  .bc-count{ font-variant-numeric:tabular-nums; }

  /* ---- Stats floating card, con más carácter ---- */
  .bc-stats-card{ position:relative; overflow:hidden; border-radius:8px; background:#fff; box-shadow:0 30px 70px rgba(42,1,17,0.18); }
  .bc-stats-card__mark{ position:absolute; right:-3rem; top:50%; height:180px; width:180px; transform:translateY(-50%); opacity:.05; pointer-events:none; }
  .bc-stats-card__item{ position:relative; z-index:1; display:flex; align-items:center; justify-content:center; gap:1.1rem; padding:2.25rem 1.5rem; text-align:left; }
  .bc-stats-card__icon-badge{ display:inline-flex; align-items:center; justify-content:center; width:52px; height:52px; flex-shrink:0; border-radius:999px; border:1px solid; }
  .bc-stats-card__icon{ width:24px; height:24px; }

  /* ---- Image wipe reveal ---- */
  .bc-wipe{ position:relative; }
  .bc-wipe__img{ clip-path:inset(0 100% 0 0); transition:clip-path 1s cubic-bezier(.65,0,.35,1) .05s, transform .7s cubic-bezier(.16,1,.3,1); }
  .bc-wipe.is-visible .bc-wipe__img{ clip-path:inset(0 0 0 0); }

  /* ---- Project card caption, curtain reveal ---- */
  .bc-wipe__caption{ z-index:2; overflow:hidden; }
  .bc-wipe__curtain{
    position:absolute; inset:0; z-index:0;
    background:linear-gradient(0deg, rgba(42,1,17,.95) 0%, rgba(42,1,17,.82) 65%, transparent 100%);
    clip-path:polygon(50% 0,50% 0,50% 100%,50% 100%);
    transition:clip-path .55s cubic-bezier(.16,1,.3,1);
  }
  .group:hover .bc-wipe__curtain{ clip-path:polygon(0 0,100% 0,100% 100%,0 100%); }
  .bc-wipe__caption-content{
    position:relative; z-index:1; display:block; opacity:0;
    clip-path:polygon(50% 0,50% 0,50% 100%,50% 100%);
    transition:clip-path .5s cubic-bezier(.16,1,.3,1) .06s, opacity .3s ease .06s;
  }
  .group:hover .bc-wipe__caption-content{ clip-path:polygon(0 0,100% 0,100% 100%,0 100%); opacity:1; }

  /* ---- Gallery, marco tipo "print de galería" ---- */
  .bc-art-frame{ height:100%; transition:transform .4s cubic-bezier(.16,1,.3,1); }
  .bc-art-frame:hover{ transform:translateY(-4px); z-index:5; }
  .bc-art-frame__mat{
    height:100%; display:flex; flex-direction:column; border-radius:8px;
    background:#fff; padding:.6rem; border:1px solid rgba(42,1,17,.08);
    box-shadow:0 16px 36px rgba(42,1,17,.10); transition:box-shadow .4s ease;
  }
  .bc-art-frame:hover .bc-art-frame__mat{ box-shadow:0 28px 54px rgba(42,1,17,.18); }
  .bc-art-frame__mat > div{ flex:1 1 auto; }
  .bc-art-frame__index{
    position:absolute; z-index:6; top:.6rem; left:.6rem; display:flex; flex-shrink:0; align-items:center; justify-content:center;
    width:32px; height:32px; aspect-ratio:1/1; padding:0; border-radius:999px; background:var(--bc-wine); color:#fff;
    font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.68rem; line-height:1;
    font-variant-numeric:tabular-nums; letter-spacing:-0.02em; white-space:nowrap; overflow:hidden;
    box-shadow:0 8px 18px rgba(42,1,17,.28);
  }

  /* ---- Grid, todas las tarjetas exactamente del mismo tamaño ---- */
  .bc-bento-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    grid-auto-rows:280px;
    gap:1.25rem;
  }
  @media (min-width:768px){
    .bc-bento-grid{ grid-template-columns:repeat(3,1fr); grid-auto-rows:320px; gap:1.5rem; }
  }
  @media (min-width:1024px){
    .bc-bento-grid{ grid-template-columns:repeat(3,1fr); grid-auto-rows:360px; }
  }

  /* ---- Filter tabs, segmented control with sliding indicator ---- */
  .bc-filter-bar{ display:flex; justify-content:center; }
  .bc-filter-bar__track{
    position:relative; display:flex; gap:.2rem; max-width:100%; border-radius:10px;
    padding:.35rem; overflow-x:auto; scrollbar-width:none;
    background:#fff; border:1px solid rgba(42,1,17,0.1); box-shadow:0 10px 26px rgba(42,1,17,0.05);
  }
  .bc-filter-bar__track::-webkit-scrollbar{ display:none; }
  .bc-filter-bar__indicator{
    position:absolute; top:.35rem; left:0; height:calc(100% - .7rem); width:0; border-radius:6px;
    background:var(--bc-wine); z-index:0; opacity:0;
    transition:transform .45s cubic-bezier(.16,1,.3,1), width .45s cubic-bezier(.16,1,.3,1), opacity .3s ease;
    will-change:transform,width;
  }
  .bc-filter-pill{
    position:relative; z-index:1; display:inline-flex; align-items:center; gap:.55rem; flex-shrink:0;
    padding:0.7rem 1.2rem; font-size:0.76rem; font-weight:800;
    text-transform:uppercase; letter-spacing:.06em; white-space:nowrap; color:rgba(42,1,17,.55);
    border:none; background:transparent; cursor:pointer;
    transition:color .35s ease;
  }
  .bc-filter-pill:active{ transform:scale(.96); }
  .bc-filter-pill__icon{ width:15px; height:15px; flex-shrink:0; opacity:.55; transition:opacity .35s ease; }
  .bc-filter-pill:hover{ color:var(--bc-teal); }
  .bc-filter-pill:hover .bc-filter-pill__icon{ opacity:.85; }
  .bc-filter-pill.is-active{ color:#fff; }
  .bc-filter-pill.is-active .bc-filter-pill__icon{ opacity:1; }
  @media (max-width:640px){
    .bc-filter-bar{ margin-left:-1rem; margin-right:-1rem; padding:0 1rem; mask-image:linear-gradient(to right, transparent, #000 1rem, #000 calc(100% - 1rem), transparent); -webkit-mask-image:linear-gradient(to right, transparent, #000 1rem, #000 calc(100% - 1rem), transparent); }
    .bc-filter-bar__track{ width:100%; }
  }

  /* ---- Gallery item filtering transition ---- */
  .js-bc-gallery-item{ transition:opacity .3s ease, transform .3s cubic-bezier(.16,1,.3,1); }
  .js-bc-gallery-item.is-filtered-out{ opacity:0; transform:scale(.92); pointer-events:none; }

  /* ---- Lightbox ---- */
  .bc-lightbox{
    display:none; position:fixed; inset:0; z-index:200; align-items:center; justify-content:center;
    background:rgba(20,1,8,.94); padding:1.5rem;
  }
  .bc-lightbox.is-open{ display:flex; }
  .bc-lightbox__frame{ position:relative; max-width:min(900px,90vw); max-height:85vh; }
  .bc-lightbox__img{ display:block; max-width:100%; max-height:80vh; width:auto; height:auto; border-radius:8px; box-shadow:0 40px 90px rgba(0,0,0,.5); opacity:0; transform:scale(.97); transition:opacity .3s ease, transform .3s ease; }
  .bc-lightbox__img.is-loaded{ opacity:1; transform:scale(1); }
  .bc-lightbox__caption{ margin-top:1rem; text-align:center; color:#fff; }
  .bc-lightbox__close{
    position:absolute; top:1.25rem; right:1.5rem; z-index:2; width:42px; height:42px; border-radius:999px;
    border:1px solid rgba(255,255,255,.3); background:rgba(255,255,255,.08); color:#fff; font-size:1.6rem; line-height:1;
    cursor:pointer; transition:background-color .2s ease;
  }
  .bc-lightbox__close:hover{ background:rgba(255,255,255,.18); }
  .bc-lightbox__nav{
    position:relative; z-index:2; width:48px; height:48px; border-radius:999px; flex-shrink:0;
    border:1px solid rgba(255,255,255,.3); background:rgba(255,255,255,.08); color:#fff; font-size:1.2rem;
    cursor:pointer; transition:background-color .2s ease; margin:0 .75rem;
  }
  .bc-lightbox__nav:hover{ background:rgba(255,255,255,.18); }
  @media (max-width:768px){ .bc-lightbox__nav{ display:none; } }

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-stagger,.bc-word__inner,.bc-fade-in-0,.bc-fade-in-2,
    .bc-btn,.bc-hero-kb,.bc-parallax,.bc-wipe__img,.js-bc-gallery-item,
    .bc-wipe__curtain,.bc-wipe__caption-content,.bc-tilt,.bc-art-frame{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important; clip-path:none!important;
    }
    .bc-hero-count{ transform:none!important; }
    .bc-category-ribbon__track{ animation:none!important; }
    .bc-filter-bar__indicator{ transition:opacity .2s ease!important; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    const revealItems = document.querySelectorAll(".bc-reveal-up,.bc-reveal-stagger,.bc-wipe");
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("bc-reveal-stagger") ? (idx % 6) * 60 : 0;
          setTimeout(() => entry.target.classList.add("is-visible"), delay);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealItems.forEach((item) => revealObserver.observe(item));

    /* ---------- Count-up stats ---------- */
    const counters = document.querySelectorAll(".bc-count");
    const countObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const to = parseInt(el.dataset.countTo, 10) || 0;
        const duration = 1400;
        const start = performance.now();
        function tick(now) {
          const p = Math.min((now - start) / duration, 1);
          const eased = 1 - Math.pow(1 - p, 3);
          el.textContent = Math.round(eased * to);
          if (p < 1) requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);
        countObserver.unobserve(el);
      });
    }, { threshold: 0.6 });
    counters.forEach((c) => countObserver.observe(c));

    /* ---------- Smooth scroll to gallery ---------- */
    document.querySelector(".js-bc-scroll-to-gallery")?.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector("#gallery")?.scrollIntoView({ behavior: "smooth", block: "start" });
    });

    /* ---------- Tilt cards ---------- */
    document.querySelectorAll(".bc-tilt").forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const r = card.getBoundingClientRect();
        const px = (e.clientX - r.left) / r.width - 0.5;
        const py = (e.clientY - r.top) / r.height - 0.5;
        card.style.transform = `perspective(700px) rotateX(${(-py * 6).toFixed(2)}deg) rotateY(${(px * 6).toFixed(2)}deg)`;
      });
      card.addEventListener("mouseleave", () => { card.style.transform = "perspective(700px) rotateX(0) rotateY(0)"; });
    });

    /* ---------- Magnetic buttons ---------- */
    document.querySelectorAll(".bc-magnetic").forEach((btn) => {
      btn.addEventListener("mousemove", (e) => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - r.left - r.width / 2) * 0.35;
        const y = (e.clientY - r.top - r.height / 2) * 0.35;
        btn.style.transform = `translate(${x}px, ${y}px)`;
      });
      btn.addEventListener("mouseleave", () => { btn.style.transform = "translate(0,0)"; });
    });

    /* ---------- Ambient parallax ---------- */
    const parallaxEls = document.querySelectorAll(".bc-parallax");
    let ticking = false;
    function updateParallax() {
      const vh = window.innerHeight;
      parallaxEls.forEach((el) => {
        const speed = parseFloat(el.dataset.speed || "0.15");
        const rect = el.getBoundingClientRect();
        const center = rect.top + rect.height / 2 - vh / 2;
        el.style.transform = `translateY(${(center * -speed).toFixed(1)}px)`;
      });
      ticking = false;
    }
    window.addEventListener("scroll", () => {
      if (!ticking) { requestAnimationFrame(updateParallax); ticking = true; }
    }, { passive: true });
    updateParallax();

    /* ---------- Lightbox ---------- */
    const galleryData = <?php echo wp_json_encode(array_map(function ($p) {
      return ['image' => $p['image'], 'title' => $p['title'], 'tag' => $p['tag']];
    }, $projects)); ?>;
    const lightbox = document.querySelector(".js-bc-lightbox");
    const lightboxImg = document.querySelector(".js-bc-lightbox-large");
    const lightboxCaption = document.querySelector(".js-bc-lightbox-caption");
    let currentIndex = 0;

    function openLightbox(index) {
      currentIndex = index;
      renderLightbox();
      lightbox.classList.add("is-open");
      lightbox.setAttribute("aria-hidden", "false");
      document.body.style.overflow = "hidden";
    }
    function closeLightbox() {
      lightbox.classList.remove("is-open");
      lightbox.setAttribute("aria-hidden", "true");
      document.body.style.overflow = "";
    }
    function renderLightbox() {
      const item = galleryData[currentIndex];
      if (!item) return;
      lightboxImg.classList.remove("is-loaded");
      lightboxImg.src = item.image;
      lightboxImg.alt = item.title;
      lightboxImg.onload = () => lightboxImg.classList.add("is-loaded");
      lightboxCaption.innerHTML = '<span style="color:#BCBF60;font-weight:900;text-transform:uppercase;letter-spacing:.12em;font-size:.7rem;">' + item.tag + '</span><br><span style="font-weight:700;">' + item.title + '</span>';
    }
    function showNext() { currentIndex = (currentIndex + 1) % galleryData.length; renderLightbox(); }
    function showPrev() { currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length; renderLightbox(); }

    document.querySelectorAll(".js-bc-gallery-item").forEach((item) => {
      item.addEventListener("click", () => {
        const idx = parseInt(item.dataset.index, 10);
        openLightbox(idx);
      });
    });

    document.querySelector(".js-bc-lightbox-close")?.addEventListener("click", closeLightbox);
    document.querySelector(".js-bc-lightbox-next")?.addEventListener("click", showNext);
    document.querySelector(".js-bc-lightbox-prev")?.addEventListener("click", showPrev);
    lightbox?.addEventListener("click", (e) => { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener("keydown", (e) => {
      if (!lightbox.classList.contains("is-open")) return;
      if (e.key === "Escape") closeLightbox();
      if (e.key === "ArrowRight") showNext();
      if (e.key === "ArrowLeft") showPrev();
    });

    /* ---------- Gallery filters ---------- */
    const filterButtons = document.querySelectorAll(".js-bc-filter-btn");
    const filterIndicator = document.querySelector(".bc-filter-bar__indicator");
    const galleryItems = document.querySelectorAll(".js-bc-gallery-item");
    const emptyMessage = document.querySelector(".js-bc-filter-empty");

    function moveFilterIndicator(btn) {
      if (!filterIndicator || !btn) return;
      filterIndicator.style.width = `${btn.offsetWidth}px`;
      filterIndicator.style.transform = `translateX(${btn.offsetLeft}px)`;
      filterIndicator.style.opacity = "1";
    }
    moveFilterIndicator(document.querySelector(".js-bc-filter-btn.is-active"));
    window.addEventListener("resize", () => {
      moveFilterIndicator(document.querySelector(".js-bc-filter-btn.is-active"));
    });

    const FILTER_TRANSITION_MS = 300;

    function applyGalleryFilter(filter) {
      let visibleCount = 0;

      galleryItems.forEach((item) => {
        const matches = filter === "all" || item.dataset.category === filter;

        if (matches) {
          item.style.display = "";
          void item.offsetWidth; // force reflow so the fade-in transition plays
          item.classList.remove("is-filtered-out");
          visibleCount++;
        } else {
          item.classList.add("is-filtered-out");
          window.setTimeout(() => {
            if (item.classList.contains("is-filtered-out")) item.style.display = "none";
          }, FILTER_TRANSITION_MS);
        }
      });

      if (emptyMessage) {
        emptyMessage.classList.toggle("hidden", visibleCount > 0);
      }
    }

    filterButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        filterButtons.forEach((b) => b.classList.remove("is-active"));
        btn.classList.add("is-active");
        moveFilterIndicator(btn);
        btn.scrollIntoView({ behavior: "smooth", block: "nearest", inline: "center" });
        applyGalleryFilter(btn.dataset.filter);
      });
    });
  });
</script>

<?php get_footer(); ?>