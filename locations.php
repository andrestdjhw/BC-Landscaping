<?php
/**
 * Template Name: Locations Template
 *
 * BC Landscaping & Hardscape, Locations / Service Areas hub
 * Grid con mapa embebido por zona. Las páginas individuales por ciudad
 * ("Explore [City]") se construyen en una siguiente etapa, por ahora
 * ese botón ya apunta a la URL final /location/{slug}-az/.
 *
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-locations bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo    = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $swirl_a    = '/wp-content/uploads/2026/07/Graficos-09.png';
    $hero_image = '/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg';

    // ------------------------------------------------------------
    // ZONAS, las 5 premium (copy diferenciado del brief) + el resto
    // ------------------------------------------------------------
    $areas = [
      [
        'slug' => 'goodyear-az', 'name' => 'Goodyear', 'tone' => '#117682',
        'copy' => 'Flawless curb appeal and HOA compliance are non-negotiable here. We deliver xeriscaping, front-yard lighting, and routine maintenance that keep your community approval on file, season after season.',
        'communities' => 'Estrella Mountain Ranch, PebbleCreek, Palm Valley, Canyon Trails',
      ],
      [
        'slug' => 'waddell-az', 'name' => 'Waddell', 'tone' => '#BCBF60', 'zoom' => 12,
        'copy' => 'The backyard becomes the place everyone gathers. We build with pavers, synthetic turf, lighting, and automatic irrigation designed for family life on larger lots.',
        'communities' => 'Verrado, Sun City West area, Dysart Ranch',
      ],
      [
        'slug' => 'fountain-hills-az', 'name' => 'Fountain Hills', 'tone' => '#8B0333',
        'copy' => 'Low-maintenance, high-impact desert landscaping, ordinance-approved plantings, luxury lighting, and certified tree care for properties with serious mountain and desert views.',
        'communities' => 'Eagle Mountain, FireRock, CopperWynd area',
      ],
      [
        'slug' => 'rio-verde-az', 'name' => 'Rio Verde', 'tone' => '#84CAC9', 'zoom' => 12,
        'copy' => 'All-inclusive peace of mind for larger acreage, smart irrigation, full-service maintenance, and prestige landscaping that protects your property&rsquo;s value out here.',
        'communities' => 'Rio Verde Foothills, Tonto Verde, Trilogy at Verde River',
      ],
      [
        'slug' => 'scottsdale-az', 'name' => 'Scottsdale', 'tone' => '#BCBF60',
        'copy' => 'High-end desert-smart design and dependable maintenance, delivered to the standard Scottsdale&rsquo;s master-planned communities expect from a single, accountable partner.',
        'communities' => 'DC Ranch, Silverleaf, Grayhawk, McDowell Mountain Ranch',
      ],
      [
        'slug' => 'phoenix-az', 'name' => 'Phoenix', 'tone' => '#117682',
        'copy' => 'Complete outdoor solutions for Phoenix&rsquo;s high-value neighborhoods and managed communities, compliant, professional, and built for the desert climate.',
        'communities' => 'Biltmore, Ahwatukee, Desert Ridge, Arcadia Lite',
      ],
      [
        'slug' => 'tempe-az', 'name' => 'Tempe', 'tone' => '#BCBF60',
        'copy' => 'Reliable landscaping and hardscaping for Tempe homeowners and HOAs who expect a consistent, professional look year-round near the lake and the ASU corridor.',
        'communities' => 'South Tempe, Kyrene Corridor, Riverbend',
      ],
      [
        'slug' => 'mesa-az', 'name' => 'Mesa', 'tone' => '#8B0333',
        'copy' => 'From xeriscaping to full-property maintenance, we serve Mesa&rsquo;s established and growing communities with in-house crews and clear communication.',
        'communities' => 'Las Sendas, Eastmark, Red Mountain Ranch',
      ],
      [
        'slug' => 'gilbert-az', 'name' => 'Gilbert', 'tone' => '#84CAC9',
        'copy' => 'HOA-compliant landscaping designed for Gilbert&rsquo;s family-focused, design-conscious neighborhoods, built to last and easy to maintain.',
        'communities' => 'Val Vista Lakes, Power Ranch, Seville',
      ],
      [
        'slug' => 'paradise-valley-az', 'name' => 'Paradise Valley', 'tone' => '#84CAC9', 'zoom' => 12,
        'copy' => 'Premium, detail-driven landscaping for one of Arizona&rsquo;s most exclusive markets, where the standard for craftsmanship and discretion is simply higher.',
        'communities' => 'Camelback Mountain area, Mummy Mountain, Clearwater Hills',
      ],
      [
        'slug' => 'arcadia-az', 'name' => 'Arcadia', 'tone' => '#117682',
        'copy' => 'Classic Arcadia curb appeal, protected, mature tree care, clean hardscape lines, and maintenance that respects the character of the neighborhood.',
        'communities' => 'Arcadia Lite, Camelback East Village, Biltmore-adjacent',
      ],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="relative min-h-[420px] w-full overflow-hidden lg:min-h-[480px]">
    <img src="<?php echo esc_url($hero_image); ?>" alt="BC Landscaping & Hardscape service area" class="absolute inset-0 h-full w-full object-cover bc-hero-kb">
    <div class="absolute inset-0 bg-[#2A0111]/78"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-20 -top-10 h-[380px] w-[380px] opacity-[0.12]" data-speed="0.14">

    <div class="relative z-10 mx-auto flex min-h-[420px] max-w-4xl flex-col items-center justify-center px-4 py-20 text-center lg:min-h-[480px]">
      <p class="bc-fade-in-0 text-xs font-black uppercase tracking-[0.28em] text-[#BCBF60]">Locations</p>
      <h1 class="mt-5 text-4xl font-black leading-[1.05] tracking-[-0.03em] text-white md:text-5xl">
        <?php
          $hero_words = explode(' ', "Serving Maricopa County's Most Valued Communities");
          foreach ($hero_words as $i => $word) : ?>
            <span class="bc-word"><span class="bc-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="bc-fade-in-2 mt-6 max-w-xl text-base leading-7 text-white/85">
        HOA-compliant, desert-smart landscaping and hardscaping, one accountable in-house team,
        across every zone we serve.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- GRID DE ZONAS CON MAPA                                        -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -left-32 top-1/3 h-[560px] w-[560px] opacity-[0.05]">

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="bc-reveal-up mx-auto max-w-2xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Where We Work</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Find Your Service Area</h2>
        <div class="mx-auto mt-6 h-1.5 w-20 bg-[linear-gradient(90deg,#117682_0%,#BCBF60_100%)]"></div>
      </div>

      <div class="mt-24 lg:grid lg:grid-cols-[200px_1fr] lg:items-start lg:gap-12">

        <nav class="bc-line-sidebar bc-reveal-up hidden lg:sticky lg:top-40 lg:block" aria-label="Jump to a service area">
          <p class="mb-6 text-[10px] font-black uppercase tracking-[0.2em] text-[#2A0111]/40">Jump to Your City</p>
          <ul class="bc-line-sidebar__list" id="bcLineSidebarList">
            <?php foreach ($areas as $i => $area) : ?>
              <li class="bc-line-sidebar__item" data-target="#area-<?php echo esc_attr($area['slug']); ?>" style="--bc-ls-tone: <?php echo esc_attr($area['tone']); ?>;">
                <button type="button" class="bc-line-sidebar__btn">
                  <span class="bc-line-sidebar__tick" aria-hidden="true"></span>
                  <span class="bc-line-sidebar__label">
                    <span class="bc-line-sidebar__index"><?php echo esc_html(str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                    <?php echo esc_html($area['name']); ?>
                  </span>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>

        <div class="grid gap-x-8 gap-y-14 sm:grid-cols-2 xl:grid-cols-3">
          <?php foreach ($areas as $i => $area) :
            $communities = array_map('trim', explode(',', $area['communities']));
            $offset_class = ($i % 3 === 1) ? 'xl:mt-10' : '';
          ?>
            <article id="area-<?php echo esc_attr($area['slug']); ?>" class="bc-area-card bc-tilt bc-reveal-stagger <?php echo esc_attr($offset_class); ?>">
              <a
                href="https://www.google.com/maps/search/?api=1&query=<?php echo rawurlencode($area['name'] . ', AZ'); ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="bc-area-card__oval"
                style="--bc-area-tone: <?php echo esc_attr($area['tone']); ?>;"
                aria-label="Open <?php echo esc_attr($area['name']); ?>, AZ in Google Maps"
              >
                <iframe
                  src="https://maps.google.com/maps?q=<?php echo rawurlencode($area['name'] . ', AZ'); ?>&z=<?php echo isset($area['zoom']) ? (int) $area['zoom'] : 8; ?>&output=embed"
                  title="Map of <?php echo esc_attr($area['name']); ?>, AZ service area"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  tabindex="-1"
                ></iframe>
                <span class="bc-area-card__seal">
                  <img src="<?php echo esc_url($isotipo); ?>" alt="">
                </span>
              </a>

              <div class="bc-area-card__heading">
                <p class="text-[10px] font-black uppercase tracking-[0.16em] text-[#2A0111]/45">Service Area</p>
                <h3 class="bc-area-card__city" style="color: <?php echo esc_attr($area['tone']); ?>;"><?php echo esc_html($area['name']); ?></h3>
              </div>

              <p class="mt-6 text-[14px] leading-6 text-[#2A0111]/72"><?php echo $area['copy']; ?></p>

              <div class="mt-5 flex flex-wrap gap-1.5">
                <?php foreach ($communities as $community) : ?>
                  <span class="bc-area-chip"><?php echo esc_html($community); ?></span>
                <?php endforeach; ?>
              </div>

              <a
                href="https://www.google.com/maps/search/?api=1&query=<?php echo rawurlencode($area['name'] . ', AZ'); ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="mt-6 inline-flex items-center gap-2 text-xs font-black uppercase tracking-[0.12em] transition hover:gap-3"
                style="color: <?php echo esc_attr($area['tone']); ?>;"
              >
                Explore <?php echo esc_html($area['name']); ?> <span>&rarr;</span>
              </a>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FINAL CTA                                                     -->
  <!-- ============================================================ -->
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp" alt="" aria-hidden="true" class="absolute inset-0 h-full w-full object-cover opacity-25">
    <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(139,3,51,0.85)_0%,rgba(139,3,51,0.94)_100%)]"></div>
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-16 -top-16 h-[300px] w-[300px] opacity-[0.08]" data-speed="0.12">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Not Sure If We Cover Your Area?</p>
      <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Ask Us, We Probably Do.
      </h2>
      <p class="bc-reveal-up mt-6 text-base leading-8 text-white/80">
        We serve Phoenix, Scottsdale, Paradise Valley, Tempe, Mesa, Gilbert, and surrounding high-value
        communities including Goodyear, Waddell, Fountain Hills, and Rio Verde.
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

  .bc-locations {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-locations h1,.bc-locations h2,.bc-locations h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

  /* ---- Hero ken-burns + word reveal ---- */
  .bc-hero-kb{ animation: bcHeroZoom 12s ease-out forwards; transform: scale(1.1); }
  @keyframes bcHeroZoom{ to{ transform: scale(1); } }
  .bc-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .bc-word__inner{ display:inline-block; transform:translateY(115%); opacity:0; animation: bcWordUp .9s cubic-bezier(.16,1,.3,1) forwards; animation-delay: calc(var(--i) * 70ms + 200ms); }
  @keyframes bcWordUp{ to{ transform:translateY(0); opacity:1; } }
  .bc-fade-in-0,.bc-fade-in-2{ opacity:0; transform:translateY(18px); animation: bcFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .bc-fade-in-0{ animation-delay:.1s; } .bc-fade-in-2{ animation-delay:1s; }
  @keyframes bcFadeUp{ to{ opacity:1; transform:translateY(0); } }

  /* ---- Buttons ---- */
  .bc-btn{ position:relative; border:1px solid transparent; border-radius:8px; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; overflow:hidden; }
  .bc-btn span{ position:relative; z-index:1; }
  .bc-btn-green{ background:var(--bc-green); color:var(--bc-wine); box-shadow:0 16px 34px rgba(188,191,96,.28); }
  .bc-btn-green:hover{ background:#a9ac52; }
  .bc-btn-dark{ background:var(--bc-wine); border-color:var(--bc-wine); box-shadow:0 12px 26px rgba(42,1,17,.2); }
  .bc-btn-dark:hover{ background:var(--bc-burgundy); border-color:var(--bc-burgundy); }
  .bc-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .bc-btn-outline:hover{ background:#fff; color:var(--bc-wine); }
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }

  /* ---- Reveal on scroll ---- */
  .bc-reveal-up,.bc-reveal-stagger{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-stagger{ transform:translateY(32px); }
  .bc-reveal-up.is-visible,.bc-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }
  .bc-parallax{ will-change:transform; }

  /* ---- Area cards, el mapa rompe el borde de la card, protagonista ---- */
  .bc-area-card{
    position:relative; overflow:visible; min-width:0; border-radius:8px;
    background:#fff; border:1px solid rgba(42,1,17,0.08); padding:2.25rem 1.75rem 1.75rem;
    box-shadow:0 16px 36px rgba(42,1,17,0.06); transition:box-shadow .35s ease;
  }
  .bc-area-card:hover{ box-shadow:0 26px 52px rgba(42,1,17,0.12); }

  .bc-area-card__oval{
    display:block; cursor:pointer;
    position:absolute; top:-2.75rem; left:-1.5rem; z-index:5;
    width:150px; height:150px; border-radius:999px; overflow:hidden;
    border:4px solid #fff; outline:3px solid var(--bc-area-tone);
    box-shadow:0 18px 34px rgba(42,1,17,0.24);
    transition:transform .3s cubic-bezier(.16,1,.3,1), box-shadow .3s ease;
  }
  .bc-area-card__oval:hover{ transform:scale(1.05); box-shadow:0 24px 44px rgba(42,1,17,0.32); }
  .bc-area-card__oval iframe{
    position:absolute; top:50%; left:50%; width:142%; height:142%; transform:translate(-50%,-50%);
    border:0; filter:saturate(0.9) contrast(1.02); pointer-events:none;
  }
  .bc-area-card__seal{
    position:absolute; bottom:4px; right:4px; width:38px; height:38px; border-radius:999px;
    background:#fff; border:2px solid var(--bc-area-tone); display:flex; align-items:center; justify-content:center;
    box-shadow:0 4px 10px rgba(42,1,17,0.2); z-index:2;
  }
  .bc-area-card__seal img{ width:19px; height:auto; }

  .bc-area-card__heading{ margin-left:8.5rem; min-height:3.25rem; padding-top:.5rem; overflow-wrap:break-word; min-width:0; }

  .bc-area-card__city{
    font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:1.15rem; letter-spacing:-0.01em; line-height:1.15;
  }

  @media (max-width:420px){
    .bc-area-card__oval{ width:130px; height:130px; top:-2.25rem; left:-1.25rem; }
    .bc-area-card__heading{ margin-left:6.75rem; }
  }

  .bc-area-chip{
    display:inline-flex; align-items:center; padding:0.3rem 0.7rem; font-size:0.68rem; font-weight:700;
    color:var(--bc-wine); background:var(--bc-sandstone); border:1px solid rgba(42,1,17,0.08); border-radius:6px;
  }

  .bc-area-card{ scroll-margin-top:calc(var(--bc-nav-h, 128px) + 28px); }

  /* ---- Line sidebar, jump-to-city nav, ticks react to cursor proximity ---- */
  .bc-line-sidebar__list{ display:flex; flex-direction:column; gap:1.05rem; margin:0; padding:0; list-style:none; }
  .bc-line-sidebar__btn{ all:unset; box-sizing:border-box; cursor:pointer; display:flex; align-items:center; gap:.7rem; width:100%; }
  .bc-line-sidebar__tick{
    flex:0 0 auto; display:inline-block; width:20px; height:1px;
    background:color-mix(in srgb, var(--bc-ls-tone) calc(var(--effect, 0) * 100%), rgba(42,1,17,.22));
    transform:scaleX(calc(0.55 + var(--effect, 0) * 0.75)); transform-origin:left;
    transition:transform .35s cubic-bezier(.16,1,.3,1), background-color .35s ease;
  }
  .bc-line-sidebar__label{
    display:inline-flex; align-items:baseline; gap:.5rem; font-size:.92rem; font-weight:800; letter-spacing:-0.01em;
    color:color-mix(in srgb, var(--bc-ls-tone) calc(var(--effect, 0) * 100%), rgba(42,1,17,.42));
    transform:translateX(calc(var(--effect, 0) * 7px));
    transition:transform .35s cubic-bezier(.16,1,.3,1), color .35s ease;
  }
  .bc-line-sidebar__index{
    font-family:'BC Museo Slab',Georgia,serif; font-size:.66rem;
    opacity:calc(.4 + var(--effect, 0) * .6); transition:opacity .35s ease;
  }
  .bc-line-sidebar__item.is-active .bc-line-sidebar__tick{ background:var(--bc-ls-tone); transform:scaleX(1.35); }
  .bc-line-sidebar__item.is-active .bc-line-sidebar__label{ color:var(--bc-ls-tone); }

  /* ---- Tilt cards (mismo sistema del resto del sitio) ---- */
  .bc-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-stagger,.bc-word__inner,.bc-fade-in-0,.bc-fade-in-2,
    .bc-btn,.bc-hero-kb,.bc-parallax,.bc-area-card,
    .bc-line-sidebar__tick,.bc-line-sidebar__label{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    const revealItems = document.querySelectorAll(".bc-reveal-up,.bc-reveal-stagger");
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("bc-reveal-stagger") ? (idx % 4) * 90 : 0;
          setTimeout(() => entry.target.classList.add("is-visible"), delay);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealItems.forEach((item) => revealObserver.observe(item));

    /* ---------- Line sidebar (jump-to-city nav) ---------- */
    const lsList = document.getElementById("bcLineSidebarList");
    if (lsList) {
      const lsItems = Array.from(lsList.querySelectorAll(".bc-line-sidebar__item"));
      const proximityRadius = 90;

      lsList.addEventListener("mousemove", (e) => {
        lsItems.forEach((item) => {
          const r = item.getBoundingClientRect();
          const distance = Math.abs(e.clientY - (r.top + r.height / 2));
          const raw = Math.max(0, 1 - distance / proximityRadius);
          const eased = raw * raw * (3 - 2 * raw); // smoothstep falloff
          item.style.setProperty("--effect", eased.toFixed(3));
        });
      });

      lsList.addEventListener("mouseleave", () => {
        lsItems.forEach((item) => item.style.setProperty("--effect", 0));
      });

      lsItems.forEach((item) => {
        item.querySelector(".bc-line-sidebar__btn").addEventListener("click", () => {
          const target = document.querySelector(item.dataset.target);
          if (target) target.scrollIntoView({ behavior: "smooth", block: "start" });
        });
      });

      const areaCards = lsItems
        .map((item) => document.querySelector(item.dataset.target))
        .filter(Boolean);
      const scrollSpy = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const idx = areaCards.indexOf(entry.target);
            lsItems.forEach((item, i) => item.classList.toggle("is-active", i === idx));
          });
        },
        { rootMargin: "-45% 0px -45% 0px" }
      );
      areaCards.forEach((card) => scrollSpy.observe(card));
    }

    /* ---------- Tilt cards ---------- */
    document.querySelectorAll(".bc-tilt").forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const r = card.getBoundingClientRect();
        const px = (e.clientX - r.left) / r.width - 0.5;
        const py = (e.clientY - r.top) / r.height - 0.5;
        card.style.transform = `perspective(700px) rotateX(${(-py * 4).toFixed(2)}deg) rotateY(${(px * 4).toFixed(2)}deg)`;
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
  });
</script>

<?php get_footer(); ?>