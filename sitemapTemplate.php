<?php
/**
 * Template Name: Sitemap Template
 *
 * BC Landscaping & Hardscape - Sitemap
 * Directorio completo de las paginas del sitio, agrupado por categoria.
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-sitemap bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo    = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $swirl_a    = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b    = '/wp-content/uploads/2026/07/Graficos-10.png';
    $hero_image = '/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp';

    // ------------------------------------------------------------
    // ESTRUCTURA DEL SITIO, agrupada por categoria
    // ------------------------------------------------------------
    $sitemap_groups = [
      [
        'title' => 'Main Pages',
        'tone'  => '#117682',
        'icon'  => '<path d="M3 11.5 12 4l9 7.5"/><path d="M5 10v9a1 1 0 0 0 1 1h4v-6h4v6h4a1 1 0 0 0 1-1v-9"/>',
        'links' => [
          ['label' => 'Home', 'href' => '/'],
          ['label' => 'About Us', 'href' => '/about-us'],
          ['label' => 'All Services', 'href' => '/services'],
          ['label' => 'Projects', 'href' => '/projects'],
          ['label' => 'Service Areas', 'href' => '/locations'],
          ['label' => 'Contact Us', 'href' => '/contact-us'],
        ],
      ],
      [
        'title' => 'Our Services',
        'tone'  => '#8B0333',
        'icon'  => '<path d="M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11Z"/>',
        'links' => [
          ['label' => 'Xeriscaping &amp; Desert Design', 'href' => '/services/xeriscaping-desert-design'],
          ['label' => 'Grass &amp; Turf Installation', 'href' => '/services/grass-and-turf-installation'],
          ['label' => 'Hardscaping', 'href' => '/services/hardscaping'],
          ['label' => 'Irrigation Systems', 'href' => '/services/irrigation-systems-2'],
          ['label' => 'Lightscape Installation', 'href' => '/services/lightscape-installation-2'],
          ['label' => 'Tree Services', 'href' => '/services/tree-services'],
          ['label' => 'Lawn &amp; Garden Maintenance', 'href' => '/services/lawn-and-garden-maintenance'],
          ['label' => 'Concrete &amp; Retaining Walls', 'href' => '/services/concrete-and-retaining-walls'],
        ],
      ],
      [
        'title' => 'Service Areas',
        'tone'  => '#BCBF60',
        'icon'  => '<path d="M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"/><circle cx="12" cy="9.8" r="2.4"/>',
        'links' => [
          ['label' => 'Phoenix, AZ', 'href' => '/locations#area-phoenix-az'],
          ['label' => 'Scottsdale, AZ', 'href' => '/locations#area-scottsdale-az'],
          ['label' => 'Paradise Valley, AZ', 'href' => '/locations#area-paradise-valley-az'],
          ['label' => 'Tempe, AZ', 'href' => '/locations#area-tempe-az'],
          ['label' => 'Mesa, AZ', 'href' => '/locations#area-mesa-az'],
          ['label' => 'Gilbert, AZ', 'href' => '/locations#area-gilbert-az'],
          ['label' => 'Goodyear, AZ', 'href' => '/locations#area-goodyear-az'],
          ['label' => 'Waddell, AZ', 'href' => '/locations#area-waddell-az'],
          ['label' => 'Fountain Hills, AZ', 'href' => '/locations#area-fountain-hills-az'],
          ['label' => 'Rio Verde, AZ', 'href' => '/locations#area-rio-verde-az'],
          ['label' => 'Arcadia, AZ', 'href' => '/locations#area-arcadia-az'],
        ],
      ],
      [
        'title' => 'Legal &amp; More',
        'tone'  => '#84CAC9',
        'icon'  => '<rect x="5" y="3" width="14" height="18" rx="1.5"/><path d="M9 8h6M9 12h6M9 16h3"/>',
        'links' => [
          ['label' => 'Privacy Policy', 'href' => '/privacy-policy'],
          ['label' => 'Terms &amp; Conditions', 'href' => '/terms-and-conditions'],
          ['label' => 'Sitemap', 'href' => '/sitemap'],
        ],
      ],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="relative min-h-[380px] w-full overflow-hidden lg:min-h-[420px]">
    <img src="<?php echo esc_url($hero_image); ?>" alt="BC Landscaping & Hardscape completed project" class="absolute inset-0 h-full w-full object-cover bc-hero-kb">
    <div class="absolute inset-0 bg-[#2A0111]/80"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-20 -top-10 h-[380px] w-[380px] opacity-[0.12]" data-speed="0.14">

    <div class="relative z-10 mx-auto flex min-h-[380px] max-w-4xl flex-col items-center justify-center px-4 py-20 text-center lg:min-h-[420px]">
      <p class="bc-fade-in-0 text-xs font-black uppercase tracking-[0.28em] text-[#BCBF60]">Sitemap</p>
      <h1 class="mt-5 text-4xl font-black leading-[1.05] tracking-[-0.03em] text-white md:text-5xl">
        <?php
          $hero_words = explode(' ', 'Every Page, One Place');
          foreach ($hero_words as $i => $word) : ?>
            <span class="bc-word"><span class="bc-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="bc-fade-in-2 mt-6 max-w-xl text-base leading-7 text-white/85">
        A complete directory of BC Landscaping &amp; Hardscape online, every service, every service area,
        every page, in one place.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- DIRECTORY GRID                                                -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -left-28 bottom-0 h-[380px] w-[380px] opacity-[0.05]">

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="bc-reveal-up mx-auto max-w-2xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Site Directory</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Browse by Category</h2>
        <div class="mx-auto mt-6 h-1.5 w-20 bg-[linear-gradient(90deg,#117682_0%,#BCBF60_100%)]"></div>
      </div>

      <div class="mt-16 grid gap-6 md:grid-cols-2">
        <?php foreach ($sitemap_groups as $group) : ?>
          <div class="bc-reveal-stagger bc-sitemap-card" style="--bc-sm-tone: <?php echo esc_attr($group['tone']); ?>;">
            <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-sitemap-card__mark">
            <div class="bc-sitemap-card__head">
              <span class="bc-sitemap-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?php echo $group['icon']; ?></svg>
              </span>
              <h2><?php echo esc_html($group['title']); ?></h2>
            </div>
            <ul class="bc-sitemap-card__list">
              <?php foreach ($group['links'] as $link) : ?>
                <li>
                  <a href="<?php echo esc_url($link['href']); ?>">
                    <span class="bc-sitemap-card__dot"></span>
                    <?php echo $link['label']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FINAL CTA                                                     -->
  <!-- ============================================================ -->
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-16 -top-16 h-[300px] w-[300px] opacity-[0.06]" data-speed="0.12">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Can&rsquo;t Find Something?</p>
      <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Reach Out and We&rsquo;ll Point You in the Right Direction
      </h2>
      <p class="bc-reveal-up mt-6 text-base leading-8 text-white/80">
        If you can&rsquo;t find what you&rsquo;re looking for, our team is happy to help, call, email,
        or send us a message.
      </p>
      <div class="bc-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Contact Us</span></a>
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

  .bc-sitemap {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-sitemap h1,.bc-sitemap h2,.bc-sitemap h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

  /* ---- Hero ken-burns + word reveal (mismo sistema del sitio) ---- */
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
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }

  /* ---- Reveal on scroll ---- */
  .bc-reveal-up,.bc-reveal-stagger{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-stagger{ transform:translateY(30px); }
  .bc-reveal-up.is-visible,.bc-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }

  .bc-parallax{ will-change:transform; }

  /* ---- Dot texture (mismo criterio que otras paginas) ---- */
  .bc-dot-texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image: radial-gradient(rgba(42,1,17,0.05) 1px, transparent 1px);
    background-size: 22px 22px;
  }

  /* ---- Sitemap directory cards ---- */
  .bc-sitemap-card{
    position:relative; overflow:hidden; background:#fff; border-radius:12px;
    border:1px solid rgba(42,1,17,0.08); box-shadow:0 24px 56px rgba(42,1,17,0.08);
    padding:2rem;
  }
  .bc-sitemap-card__mark{ position:absolute; bottom:-2rem; right:-2rem; height:9rem; width:9rem; opacity:.05; pointer-events:none; z-index:0; }
  .bc-sitemap-card__head{ position:relative; z-index:1; display:flex; align-items:center; gap:.85rem; margin-bottom:1.25rem; }
  .bc-sitemap-card__icon{
    display:inline-flex; align-items:center; justify-content:center; width:44px; height:44px; flex-shrink:0;
    border-radius:10px; background:color-mix(in srgb, var(--bc-sm-tone) 14%, white); color:var(--bc-sm-tone);
  }
  .bc-sitemap-card__icon svg{ width:22px; height:22px; }
  .bc-sitemap-card__head h2{ font-size:1.3rem; font-weight:900; letter-spacing:-0.01em; color:#2A0111; }
  .bc-sitemap-card__list{ position:relative; z-index:1; display:flex; flex-direction:column; }
  .bc-sitemap-card__list li{ border-bottom:1px solid rgba(42,1,17,0.07); }
  .bc-sitemap-card__list li:last-child{ border-bottom:0; }
  .bc-sitemap-card__list a{
    display:flex; align-items:center; gap:.65rem; padding:.75rem .1rem; font-size:14.5px; font-weight:700;
    color:rgba(42,1,17,0.78); text-decoration:none; transition:color .2s ease, gap .2s ease;
  }
  .bc-sitemap-card__list a:hover{ color:var(--bc-sm-tone); gap:.9rem; }
  .bc-sitemap-card__dot{ flex-shrink:0; width:6px; height:6px; border-radius:999px; background:var(--bc-sm-tone); opacity:.55; transition:opacity .2s ease, transform .2s ease; }
  .bc-sitemap-card__list a:hover .bc-sitemap-card__dot{ opacity:1; transform:scale(1.3); }

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-stagger,.bc-word__inner,.bc-fade-in-0,.bc-fade-in-2,
    .bc-btn,.bc-hero-kb,.bc-parallax{
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
    }, { threshold: 0.15 });
    revealItems.forEach((item) => revealObserver.observe(item));

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
  });
</script>

<?php get_footer(); ?>
