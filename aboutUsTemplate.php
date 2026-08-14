<?php
/**
 * Template Name: About Us Template
 *
 * BC Landscaping & Hardscape, About Us / Our Story
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-about bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $graphic_lightscape = '/wp-content/uploads/2026/07/Graficos_Lightscape.png';
    $graphic_hardscape  = '/wp-content/uploads/2026/07/Graficos_Hardscape.png';
    $swirl_a = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b = '/wp-content/uploads/2026/07/Graficos-10.png';
    $swirl_c = '/wp-content/uploads/2026/07/Graficos-11.png';
    $swirl_d = '/wp-content/uploads/2026/07/Graficos-16.png';
    $swirl_e = '/wp-content/uploads/2026/07/Graficos-17.png';
    $swirl_f = '/wp-content/uploads/2026/07/Graficos-18.png';

    $hero_image = '/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp';

    $stats = [
      ['to' => 15, 'suffix' => '+', 'label' => 'Years in Arizona'],
      ['to' => 8,  'suffix' => '',  'label' => 'Services In-House'],
      ['to' => 5,  'suffix' => '',  'label' => 'Premium Service Areas'],
    ];

    // ------------------------------------------------------------
    // OUR STORY, 3 momentos, cada uno con su propia foto (scroll narrativo)
    // ------------------------------------------------------------
    $story_beats = [
      [
        'year'  => '00',
        'title' => 'Years of Working for Others',
        'copy'  => 'Before BC existed, Oscar spent years mastering the craft on other people&rsquo;s crews, learning the trade, and what it takes to do it right.',
        'image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-27.jpg',
      ],
      [
        'year'  => '01',
        'title' => 'Building Something of His Own',
        'copy'  => 'Rooted in Baja California, Oscar set out to build a company that honored where he came from, proof that the Hispanic community could compete, and win, at the highest level of professionalism.',
        'image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp',
      ],
      [
        'year'  => '15+',
        'title' => 'Growing Into a Standard',
        'copy'  => 'Step by step, with discipline and honesty, BC Landscaping &amp; Hardscape became a name Maricopa County&rsquo;s finest communities trust, not by accident, but by never cutting corners.',
        'image' => '/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp',
      ],
    ];

    $values = [
      ['title' => 'Honesty', 'copy' => 'We communicate transparently and deliver exactly what is promised.'],
      ['title' => 'Responsibility', 'copy' => 'Full ownership of every project, accountability, compliance, safety.'],
      ['title' => 'Empathy', 'copy' => 'We listen to client needs, community concerns, and project goals.'],
      ['title' => 'Integrity', 'copy' => 'Ethical standards and quality commitments, even when no one is watching.'],
      ['title' => 'Loyalty', 'copy' => 'Long-term relationships with clients, communities, and our own team.'],
      ['title' => 'Punctuality', 'copy' => 'We respect schedules, the reliability that HOAs and high-value properties require.'],
      ['title' => 'Communication', 'copy' => 'Clear, proactive updates at every stage of every project.'],
    ];

    $emotions = ['Trust', 'Peace of Mind', 'Pride', 'Inspiration', 'Satisfaction'];

    $work_strip = [
      '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg',
      '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-5.webp',
      '/wp-content/uploads/2026/07/Retaining-Walls.webp',
      '/wp-content/uploads/2026/07/Lightscape-installation.webp',
      '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp',
      '/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg',
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO, split editorial, texto grande a la izq, foto recortada  -->
  <!-- ============================================================ -->
  <section class="bg-white pb-16 pt-14 lg:pb-0 lg:pt-0">
    <div class="mx-auto grid max-w-7xl gap-12 px-4 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:min-h-[680px]">
      <div class="relative z-10 lg:py-20">
        <span class="bc-tag-rotate">Est. 15+ Years in Arizona</span>

        <h1 class="bc-mask-heading mt-5">
          <span class="bc-mask-heading__line"><span>Built on Hard Work,</span></span>
          <span class="bc-mask-heading__line"><span>Roots, and a Promise</span></span>
          <span class="bc-mask-heading__line bc-mask-heading__line--accent"><span>of Quality</span></span>
        </h1>

        <p class="bc-fade-up-delay mt-8 max-w-md text-base leading-7 text-[#2A0111]/70">
          BC Landscaping &amp; Hardscape was founded by Oscar after years of mastering the craft for
          others, and a determination to deliver the highest standard of professionalism, with
          pride.
        </p>

        <div class="bc-fade-up-delay bc-fade-up-delay--2 mt-9 flex flex-wrap items-center gap-5">
          <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get a Free Estimate</span></a>
          <a href="tel:+14802294950" class="text-sm font-bold text-[#2A0111]/70">Call (480) 229-4950</a>
        </div>
      </div>

      <div class="bc-hero-photo relative mx-auto w-full max-w-sm lg:max-w-none">
        <div class="bc-hero-photo__frame">
          <img src="<?php echo esc_url($hero_image); ?>" alt="BC Landscaping & Hardscape completed project" class="bc-hero-photo__img">
        </div>
        <span class="bc-hero-photo__tag">Quality with Purpose</span>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- STATS, con íconos, estampado en parallax, acento de color     -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden border-y border-[#2A0111]/12 bg-[#E6DACF] py-4">
    <img src="<?php echo esc_url($swirl_d); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-16 top-1/2 h-[260px] w-[260px] -translate-y-1/2 opacity-[0.07]" data-speed="0.2">
    <img src="<?php echo esc_url($swirl_e); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-16 top-1/2 h-[220px] w-[220px] -translate-y-1/2 rotate-180 opacity-[0.06]" data-speed="-0.15">

    <div class="relative mx-auto grid max-w-5xl divide-y divide-[#2A0111]/12 px-4 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
      <?php
        $stat_icons = [
          '<path d="M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"/><circle cx="12" cy="9.8" r="2.4"/>',
          '<path d="M3 12h4l3 8 4-16 3 8h4"/>',
          '<path d="M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"/><path d="m9.2 12.1 2 2 3.6-4"/>',
        ];
        $stat_tones = ['#117682', '#8B0333', '#BCBF60'];
        foreach ($stats as $i => $stat) : ?>
        <div class="bc-reveal-simple bc-stat-inline">
          <svg viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr($stat_tones[$i]); ?>" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="bc-stat-inline__icon" aria-hidden="true"><?php echo $stat_icons[$i]; ?></svg>
          <div>
            <span class="bc-count text-3xl font-black tracking-[-0.02em] md:text-4xl" style="color: <?php echo esc_attr($stat_tones[$i]); ?>;" data-count-to="<?php echo (int) $stat['to']; ?>">0</span><span class="text-3xl font-black md:text-4xl" style="color: <?php echo esc_attr($stat_tones[$i]); ?>;"><?php echo esc_html($stat['suffix']); ?></span>
            <p class="mt-1 text-[11px] font-bold uppercase tracking-[0.12em] text-[#2A0111]/60"><?php echo esc_html($stat['label']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- OUR STORY, foto estilo hero (recorte + rotación), más compacta -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-16 lg:py-20">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-32 top-10 h-[480px] w-[480px] opacity-[0.05]" data-speed="0.12">
    <img src="<?php echo esc_url($swirl_f); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-24 bottom-0 h-[320px] w-[320px] opacity-[0.05]" data-speed="-0.1">

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="bc-reveal-simple max-w-xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Our Story</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">From His Hands to Every Yard We Touch</h2>
      </div>

      <div class="js-bc-story mt-10 grid gap-x-12 gap-y-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
        <div class="bc-story-sticky">
          <div class="bc-story-sticky__frame">
            <?php foreach ($story_beats as $i => $beat) : ?>
              <img
                src="<?php echo esc_url($beat['image']); ?>"
                alt="BC Landscaping & Hardscape"
                class="bc-story-sticky__img js-bc-story-img<?php echo $i === 0 ? ' is-active' : ''; ?>"
                data-index="<?php echo (int) $i; ?>"
              >
            <?php endforeach; ?>
          </div>
          <span class="bc-story-sticky__tag">15+ Years Strong</span>
        </div>

        <div class="flex flex-col gap-8 py-1 lg:gap-12">
          <?php foreach ($story_beats as $i => $beat) : ?>
            <div class="js-bc-story-beat bc-story-beat<?php echo $i === 0 ? ' is-active' : ''; ?>" data-index="<?php echo (int) $i; ?>">
              <span class="bc-story-beat__num"><?php echo esc_html($beat['year']); ?></span>
              <h3 class="mt-2 text-xl font-black tracking-[-0.02em] text-[#2A0111] md:text-2xl"><?php echo esc_html($beat['title']); ?></h3>
              <p class="mt-3 max-w-md text-[15px] leading-7 text-[#2A0111]/68"><?php echo $beat['copy']; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- BRAND MANTRA, cinta automática de emociones                  -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#8B0333] py-14 text-white">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute left-1/2 top-1/2 h-[320px] w-[320px] -translate-x-1/2 -translate-y-1/2 opacity-[0.04]">

    <div class="relative z-10 mx-auto max-w-4xl px-4 text-center">
      <p class="bc-reveal-simple text-xs font-black uppercase tracking-[0.22em] text-[#84CAC9]">Brand Mantra</p>
      <h2 class="bc-reveal-simple mt-4 text-3xl font-black tracking-[-0.02em] md:text-4xl">&ldquo;Quality with Purpose.&rdquo;</h2>
    </div>

    <div class="bc-emotion-marquee relative mt-10">
      <div class="bc-emotion-marquee__track">
        <?php for ($r = 0; $r < 4; $r++) : ?>
          <?php foreach ($emotions as $ei => $emotion) : ?>
            <span class="bc-emotion-pill<?php echo $ei % 2 === 0 ? ' bc-emotion-pill--solid' : ''; ?>" <?php echo $r > 0 ? 'aria-hidden="true"' : ''; ?>><?php echo esc_html($emotion); ?></span>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- MISSION & VISION, la cortina tapa el título, el texto es lo    -->
  <!-- que aparece al abrirla. Sin fotos que no tienen relación.       -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-20 lg:py-28">
    <img src="<?php echo esc_url($swirl_c); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-28 top-1/3 h-[420px] w-[420px] opacity-[0.05]" data-speed="0.1">

    <div class="relative mx-auto max-w-2xl text-center">
      <p class="bc-reveal-simple text-xs font-black uppercase tracking-[0.22em] text-[#117682]">What Guides Us</p>
      <h2 class="bc-reveal-simple mt-4 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Mission &amp; Vision</h2>
      <p class="bc-reveal-simple mt-3 text-sm text-[#2A0111]/55">Tap or hover to open.</p>
    </div>

    <div class="relative mx-auto mt-14 grid max-w-4xl gap-8 px-4 md:grid-cols-2">

      <div class="js-bc-curtain bc-curtain-card bc-reveal-simple" style="background: var(--bc-teal);">
        <span class="bc-curtain-card__pattern" aria-hidden="true"></span>
        <img src="<?php echo esc_url($graphic_hardscape); ?>" alt="" aria-hidden="true" class="bc-curtain-card__texture bc-curtain-card__texture--support">
        <div class="bc-curtain-card__reveal">
          <span class="bc-curtain-card__badge" style="background: var(--bc-wine);">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.2"/><circle cx="12" cy="12" r="0.6" fill="currentColor"/></svg>
          </span>
          <span class="bc-curtain-card__eyebrow">01, Purpose</span>
          <h3 class="bc-curtain-card__title">Mission</h3>
          <span class="bc-curtain-card__rule" aria-hidden="true"></span>
          <p class="bc-curtain-card__desc">
            To deliver landscaping and hardscape services of superior quality and reliable, detail-driven
            care, combining design, function, and honest service that gives every client total
            peace of mind.
          </p>
        </div>
        <span class="js-bc-curtain-veil bc-curtain-card__veil" style="background: var(--bc-teal);">
          <span class="bc-curtain-card__veil-pattern" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-corner bc-curtain-card__veil-corner--tl" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-corner bc-curtain-card__veil-corner--br" aria-hidden="true"></span>
          <svg class="bc-curtain-card__veil-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.2"/><circle cx="12" cy="12" r="0.6" fill="currentColor"/></svg>
          <span class="bc-curtain-card__veil-eyebrow">01, Purpose</span>
          <span class="bc-curtain-card__veil-title">Mission</span>
          <span class="bc-curtain-card__veil-rule" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-hint">Tap to reveal</span>
        </span>
      </div>

      <div class="js-bc-curtain bc-curtain-card bc-reveal-simple" style="background: var(--bc-burgundy);">
        <span class="bc-curtain-card__pattern" aria-hidden="true"></span>
        <img src="<?php echo esc_url($graphic_lightscape); ?>" alt="" aria-hidden="true" class="bc-curtain-card__texture bc-curtain-card__texture--support">
        <div class="bc-curtain-card__reveal">
          <span class="bc-curtain-card__badge" style="background: var(--bc-wine);">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 12S6.5 5 12 5s9.5 7 9.5 7-4 7-9.5 7-9.5-7-9.5-7Z"/><circle cx="12" cy="12" r="2.6"/></svg>
          </span>
          <span class="bc-curtain-card__eyebrow">02, Direction</span>
          <h3 class="bc-curtain-card__title">Vision</h3>
          <span class="bc-curtain-card__rule" aria-hidden="true"></span>
          <p class="bc-curtain-card__desc">
            To become one of Arizona&rsquo;s most solid and recognized landscaping companies , 
            known for professionalism and service excellence, and for raising the standard of work done
            by the Hispanic community in this industry.
          </p>
        </div>
        <span class="js-bc-curtain-veil bc-curtain-card__veil" style="background: var(--bc-burgundy);">
          <span class="bc-curtain-card__veil-pattern" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-corner bc-curtain-card__veil-corner--tl" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-corner bc-curtain-card__veil-corner--br" aria-hidden="true"></span>
          <svg class="bc-curtain-card__veil-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><path d="M2.5 12S6.5 5 12 5s9.5 7 9.5 7-4 7-9.5 7-9.5-7-9.5-7Z"/><circle cx="12" cy="12" r="2.6"/></svg>
          <span class="bc-curtain-card__veil-eyebrow">02, Direction</span>
          <span class="bc-curtain-card__veil-title">Vision</span>
          <span class="bc-curtain-card__veil-rule" aria-hidden="true"></span>
          <span class="bc-curtain-card__veil-hint">Tap to reveal</span>
        </span>
      </div>

    </div>
  </section>

  <!-- ============================================================ -->
  <!-- OUR VALUES, Card Swap: pila 3D con fotos reales de fondo       -->
  <!-- ============================================================ -->
  <section class="bc-pattern-section relative overflow-hidden bg-[#2A0111] py-20 text-white lg:py-28">
    <div class="bc-pattern-section__texture bc-pattern-section__texture--light" aria-hidden="true"></div>
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -right-20 -top-16 h-[420px] w-[420px] opacity-[0.05]">
    <img src="<?php echo esc_url($swirl_e); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-24 bottom-0 h-[380px] w-[380px] opacity-[0.06]" data-speed="0.08">

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-end">
        <div class="bc-reveal-simple max-w-md">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Our Values</p>
          <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">What Drives Every Project</h2>
          <p class="mt-5 text-base leading-7 text-white/65">Seven things that don&rsquo;t change from job to job. Let them cycle, or click one to bring it forward.</p>
        </div>

        <div class="js-bc-value-swap bc-value-swap bc-reveal-simple">
          <?php
            $swap_images = [
              '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg',
              '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-5.webp',
              '/wp-content/uploads/2026/07/Retaining-Walls.webp',
              '/wp-content/uploads/2026/07/Lightscape-installation.webp',
              '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp',
              '/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg',
              '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp',
            ];
            foreach ($values as $i => $value) :
              $tone_cycle = ['#117682', '#BCBF60', '#84CAC9', '#117682', '#8B0333', '#BCBF60', '#117682'][$i % 7];
          ?>
            <div class="js-bc-swap-card bc-swap-card">
              <img src="<?php echo esc_url($swap_images[$i]); ?>" alt="" aria-hidden="true" class="bc-swap-card__bg">
              <span class="bc-swap-card__tint" style="background: <?php echo esc_attr($tone_cycle); ?>;"></span>
              <span class="bc-swap-card__scrim"></span>
              <div class="bc-swap-card__content">
                <span class="bc-swap-card__num">0<?php echo (int) ($i + 1); ?></span>
                <h3 class="bc-swap-card__title"><?php echo esc_html($value['title']); ?></h3>
                <p class="bc-swap-card__copy"><?php echo $value['copy']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- REAL WORK, fotos apiladas tipo polaroid, no cinta             -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-4">
      <div class="bc-reveal-simple max-w-md">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Real Work, Real Team</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-4xl">No Stock Photos. Just BC Projects.</h2>
      </div>

      <div class="bc-photo-stack mt-16">
        <?php foreach ($work_strip as $img) : ?>
          <div class="js-bc-stack-item bc-photo-stack__item">
            <img src="<?php echo esc_url($img); ?>" alt="BC Landscaping & Hardscape project" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FINAL CTA                                                     -->
  <!-- ============================================================ -->
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -left-16 -top-16 h-[300px] w-[300px] opacity-[0.06]">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-simple text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Get Started</p>
      <h2 class="bc-reveal-simple mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Landscaping That Delivers Compliance, Confidence, and Lasting Value
      </h2>
      <p class="bc-reveal-simple mt-6 text-base leading-8 text-white/80">
        Partner with BC Landscaping &amp; Hardscape for premium, HOA-compliant solutions designed to
        protect your property&rsquo;s value and eliminate the worry.
      </p>
      <div class="bc-reveal-simple mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get an Estimate</span></a>
        <a href="tel:+14802294950" class="bc-btn bc-btn-outline bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"><span>Call (480) 229-4950</span></a>
      </div>
    </div>
  </section>

  <div class="js-bc-lightbox bc-lightbox" aria-hidden="true">
    <button type="button" class="js-bc-lightbox-close bc-lightbox__close" aria-label="Close preview">&times;</button>
    <button type="button" class="js-bc-lightbox-prev bc-lightbox__nav bc-lightbox__nav--prev" aria-label="Previous photo">&larr;</button>
    <img src="" alt="" class="js-bc-lightbox-img bc-lightbox__img">
    <button type="button" class="js-bc-lightbox-next bc-lightbox__nav bc-lightbox__nav--next" aria-label="Next photo">&rarr;</button>
  </div>

</main>

<style>
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_thin.otf') format('opentype'); font-weight: 100; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_light.otf') format('opentype'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_reg.otf') format('opentype'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_med.otf') format('opentype'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_bld.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_blk.otf') format('opentype'); font-weight: 900; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Museo Slab'; src: url('/wp-content/uploads/2026/07/fonts/Museo_Slab_700.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }

  .bc-about {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-about h1,.bc-about h2,.bc-about h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

  /* ---- Buttons ---- */
  .bc-btn{ position:relative; border:1px solid transparent; border-radius:8px; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; overflow:hidden; }
  .bc-btn span{ position:relative; z-index:1; }
  .bc-btn-green{ background:var(--bc-green); color:var(--bc-wine); box-shadow:0 16px 34px rgba(188,191,96,.28); }
  .bc-btn-green:hover{ background:#a9ac52; }
  .bc-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .bc-btn-outline:hover{ background:#fff; color:var(--bc-wine); }
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }
  .bc-count{ font-variant-numeric:tabular-nums; }

  /* ---- HERO: tag + mask-sweep heading + clipped photo ---- */
  .bc-tag-rotate{
    display:inline-block; transform:rotate(-2deg); background:var(--bc-sandstone); border-radius:6px;
    border:1px solid rgba(42,1,17,.15); padding:.4rem .85rem; font-size:.68rem; font-weight:900;
    text-transform:uppercase; letter-spacing:.1em; color:var(--bc-wine);
    opacity:0; animation:bcTagIn .6s cubic-bezier(.34,1.56,.64,1) forwards; animation-delay:.1s;
  }
  @keyframes bcTagIn{ from{ opacity:0; transform:rotate(-8deg) scale(.7);} to{ opacity:1; transform:rotate(-2deg) scale(1);} }

  .bc-mask-heading{ font-weight:900; font-size:clamp(2.3rem,5.2vw,3.9rem); line-height:0.98; letter-spacing:-0.03em; color:var(--bc-wine); }
  .bc-mask-heading__line{ display:block; overflow:hidden; padding-bottom:.08em; }
  .bc-mask-heading__line span{ display:block; clip-path:inset(0 100% 0 0); animation:bcMaskSweep 0.95s cubic-bezier(.65,0,.35,1) forwards; }
  .bc-mask-heading__line:nth-child(1) span{ animation-delay:.2s; }
  .bc-mask-heading__line:nth-child(2) span{ animation-delay:.38s; }
  .bc-mask-heading__line:nth-child(3) span{ animation-delay:.56s; }
  .bc-mask-heading__line--accent span{ color:var(--bc-teal); }
  @keyframes bcMaskSweep{ to{ clip-path:inset(0 0 0 0);} }

  .bc-fade-up-delay{ opacity:0; transform:translateY(16px); animation:bcFadeUpDelay .8s cubic-bezier(.16,1,.3,1) forwards; animation-delay:.85s; }
  .bc-fade-up-delay--2{ animation-delay:1s; }
  @keyframes bcFadeUpDelay{ to{ opacity:1; transform:translateY(0);} }

  .bc-hero-photo{ position:relative; }
  .bc-hero-photo::before{
    content:""; position:absolute; inset:0; background:var(--bc-green); border-radius:12px;
    transform:rotate(-1.5deg) translate(16px,16px); z-index:0;
  }
  .bc-hero-photo__frame{
    position:relative; z-index:1; aspect-ratio:4/5; overflow:hidden; border-radius:12px;
    transform:rotate(-1.5deg); box-shadow:0 30px 60px rgba(42,1,17,.16);
    opacity:0; animation:bcPhotoIn 1s cubic-bezier(.16,1,.3,1) forwards; animation-delay:.3s;
  }
  @keyframes bcPhotoIn{ from{ opacity:0; transform:rotate(4deg) scale(.9);} to{ opacity:1; transform:rotate(-1.5deg) scale(1);} }
  .bc-hero-photo__img{ width:100%; height:100%; object-fit:cover; display:block; }
  .bc-hero-photo__tag{
    position:absolute; z-index:2; bottom:-14px; left:-10px; background:var(--bc-wine); color:#fff; border-radius:6px;
    padding:.55rem 1.1rem; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.82rem;
    transform:rotate(-3deg); box-shadow:0 12px 26px rgba(42,1,17,.28);
    opacity:0; animation:bcTagIn .6s cubic-bezier(.34,1.56,.64,1) forwards; animation-delay:1.1s;
  }

  /* ---- Stats inline strip (sin card flotante) ---- */
  .bc-stat-inline{ display:flex; flex-direction:column; align-items:center; justify-content:center; gap:.6rem; padding:2rem 1rem; text-align:center; }
  .bc-stat-inline__icon{ width:24px; height:24px; opacity:.7; }

  /* ---- Our Story: sticky image, mismo tratamiento que el hero ---- */
  .bc-story-sticky{ position:relative; }
  .bc-story-sticky::before{
    content:""; position:absolute; inset:0; background:var(--bc-teal); border-radius:12px;
    transform:rotate(1.5deg) translate(14px,14px); z-index:0;
  }
  .bc-story-sticky__frame{
    position:sticky; z-index:1; top:calc(var(--bc-nav-h, 120px) + 1.5rem);
    aspect-ratio:4/5; overflow:hidden; box-shadow:0 24px 50px rgba(42,1,17,.16); border-radius:12px;
    transform:rotate(1.5deg);
  }
  .bc-story-sticky__img{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; opacity:0; transition:opacity .7s ease; }
  .bc-story-sticky__img.is-active{ opacity:1; }
  .bc-story-sticky__tag{
    position:absolute; z-index:2; bottom:-14px; right:-8px; background:var(--bc-wine); color:#fff; border-radius:6px;
    padding:.55rem 1.05rem; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.78rem;
    transform:rotate(2.5deg); box-shadow:0 12px 26px rgba(42,1,17,.28);
  }
  .bc-story-beat{ opacity:.32; transition:opacity .5s ease; }
  .bc-story-beat.is-active{ opacity:1; }
  .bc-story-beat__num{ font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:2.6rem; color:var(--bc-green); }

  /* ---- Reveal simple (para lo que aún necesita fade-in básico) ---- */
  .bc-reveal-simple{ opacity:0; transform:translateY(24px); transition:opacity .8s cubic-bezier(.16,1,.3,1), transform .8s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-simple.is-visible{ opacity:1; transform:translateY(0); }

  /* ---- Emotion marquee ---- */
  .bc-emotion-marquee{ overflow:hidden; }
  .bc-emotion-marquee__track{ display:flex; width:max-content; gap:1rem; animation:bcEmotionMarquee 34s linear infinite; padding:0 1rem; }
  .bc-emotion-marquee:hover .bc-emotion-marquee__track{ animation-play-state:paused; }
  .bc-emotion-pill{
    display:inline-flex; align-items:center; white-space:nowrap; padding:0.6rem 1.3rem;
    border:1px solid rgba(255,255,255,0.24); border-radius:999px; background:transparent;
    font-size:0.8rem; font-weight:800; text-transform:uppercase; letter-spacing:.08em; color:var(--bc-mist);
  }
  .bc-emotion-pill--solid{ background:var(--bc-green); border-color:var(--bc-green); color:var(--bc-wine); }
  @keyframes bcEmotionMarquee{ 0%{ transform:translateX(0);} 100%{ transform:translateX(-25%);} }

  /* ---- Patterned section, misma textura diagonal y efecto "fixed" (no se mueve al hacer scroll) de Contact Us ---- */
  .bc-pattern-section{ position:relative; }
  .bc-pattern-section__texture{
    position:absolute; inset:0; pointer-events:none; z-index:0;
    background-image: repeating-linear-gradient(45deg, rgba(42,1,17,0.05) 0, rgba(42,1,17,0.05) 1.5px, transparent 1.5px, transparent 16px);
    background-attachment:fixed;
  }
  /* Variante clara: mismo patrón pero en blanco, para usar sobre fondos oscuros (ej. Our Values) */
  .bc-pattern-section__texture--light{
    background-image: repeating-linear-gradient(45deg, rgba(255,255,255,0.045) 0, rgba(255,255,255,0.045) 1.5px, transparent 1.5px, transparent 16px);
  }
  @media (max-width:820px){
    /* background-attachment:fixed es costoso/errático en móvil; se desactiva y queda el patrón estático */
    .bc-pattern-section__texture{ background-attachment:scroll; }
  }

  /* ---- Mission & Vision, Curtain Reveal: veil shows title, opening reveals text ---- */
  .bc-curtain-card{
    position:relative; overflow:hidden; border-radius:8px; min-height:340px;
    box-shadow:0 20px 46px rgba(42,1,17,.18); cursor:pointer;
  }
  /* Patrón de rombos de fondo, mismo lenguaje visual del velo, para que abrir la card se sienta continuo */
  .bc-curtain-card__pattern{
    position:absolute; inset:0; z-index:0; opacity:.5; pointer-events:none;
    background-image:
      linear-gradient(45deg, rgba(255,255,255,.07) 25%, transparent 25%, transparent 75%, rgba(255,255,255,.07) 75%),
      linear-gradient(45deg, rgba(255,255,255,.07) 25%, transparent 25%, transparent 75%, rgba(255,255,255,.07) 75%);
    background-size:34px 34px; background-position:0 0, 17px 17px;
  }
  /* Estampado de apoyo (faro para Vision, hardscape para Mission), grande, recortado en la esquina, marca de agua */
  .bc-curtain-card__texture--support{
    position:absolute; z-index:0; bottom:-3.5rem; right:-3rem; height:15rem; width:15rem;
    opacity:.16; pointer-events:none; filter:brightness(0) invert(1);
  }
  .bc-curtain-card__reveal{ position:relative; z-index:1; display:flex; height:100%; flex-direction:column; justify-content:center; padding:2.5rem 2.25rem; }
  .bc-curtain-card__badge{
    display:inline-flex; align-items:center; justify-content:center; width:46px; height:46px; border-radius:999px;
    color:#fff; margin-bottom:1.1rem; box-shadow:0 10px 22px rgba(0,0,0,.3);
  }
  .bc-curtain-card__badge svg{ width:22px; height:22px; }
  .bc-curtain-card__eyebrow{ font-size:.66rem; font-weight:900; text-transform:uppercase; letter-spacing:.2em; color:rgba(255,255,255,.6); }
  .bc-curtain-card__title{ margin-top:.4rem; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:1.7rem; color:#fff; letter-spacing:-0.01em; }
  .bc-curtain-card__rule{ display:block; width:34px; height:2px; background:rgba(255,255,255,.5); margin:.9rem 0 1.1rem; }
  .bc-curtain-card__desc{ max-width:32ch; font-size:1.02rem; line-height:1.75; color:#fff; font-weight:500; }
  .bc-curtain-card__veil{
    position:absolute; inset:0; z-index:2; overflow:hidden;
    display:flex; flex-direction:column; align-items:center; justify-content:center; gap:.5rem;
    transform-origin:top; transition:transform .75s cubic-bezier(.65,0,.35,1);
  }
  /* Patrón de rombos propio del velo, deliberadamente distinto a los estampados swirl que usa el resto del sitio */
  .bc-curtain-card__veil-pattern{
    position:absolute; inset:0; opacity:.5; pointer-events:none;
    background-image:
      linear-gradient(45deg, rgba(255,255,255,.09) 25%, transparent 25%, transparent 75%, rgba(255,255,255,.09) 75%),
      linear-gradient(45deg, rgba(255,255,255,.09) 25%, transparent 25%, transparent 75%, rgba(255,255,255,.09) 75%);
    background-size:34px 34px; background-position:0 0, 17px 17px;
  }
  .bc-curtain-card__veil-corner{ position:absolute; width:26px; height:26px; border-color:rgba(255,255,255,.4); pointer-events:none; }
  .bc-curtain-card__veil-corner--tl{ top:1.4rem; left:1.4rem; border-top:2px solid; border-left:2px solid; }
  .bc-curtain-card__veil-corner--br{ bottom:1.4rem; right:1.4rem; border-bottom:2px solid; border-right:2px solid; }
  .bc-curtain-card__veil-icon{
    position:relative; width:76px; height:76px; color:rgba(255,255,255,.22);
    margin-bottom:.35rem;
  }
  .bc-curtain-card__veil-eyebrow{
    position:relative; font-size:.66rem; font-weight:900; text-transform:uppercase;
    letter-spacing:.2em; color:rgba(255,255,255,.6);
  }
  .bc-curtain-card__veil-title{ position:relative; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:2.4rem; color:#fff; letter-spacing:-0.01em; }
  .bc-curtain-card__veil-rule{ position:relative; display:block; width:34px; height:2px; background:rgba(255,255,255,.5); margin:.2rem 0; }
  .bc-curtain-card__veil-hint{ position:relative; font-size:.68rem; font-weight:900; text-transform:uppercase; letter-spacing:.14em; color:rgba(255,255,255,.65); }
  .bc-curtain-card:hover .bc-curtain-card__veil,
  .js-bc-curtain.is-open .bc-curtain-card__veil{ transform:translateY(-100%); }

  /* ---- Our Values, Card Swap: pila 3D con foto + tinte de color ---- */
  .bc-value-swap{ position:relative; height:290px; perspective:1400px; margin-top:.25rem; }
  @media (min-width:640px){ .bc-value-swap{ height:310px; } }
  .bc-swap-card{
    position:absolute; bottom:0; left:0; width:min(420px,86vw); height:270px; border-radius:8px;
    box-shadow:0 26px 54px rgba(0,0,0,.45), 0 0 0 1px rgba(255,255,255,.1); overflow:hidden;
    will-change:transform; backface-visibility:hidden; color:#fff;
  }
  .bc-swap-card__bg{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; }
  .bc-swap-card__tint{ position:absolute; inset:0; opacity:.62; mix-blend-mode:multiply; }
  .bc-swap-card__scrim{ position:absolute; inset:0; background:linear-gradient(100deg, rgba(0,0,0,.45) 0%, rgba(0,0,0,.22) 45%, rgba(0,0,0,.05) 78%); }
  .bc-swap-card__content{ position:relative; z-index:1; height:100%; display:flex; flex-direction:column; justify-content:center; padding:2rem 2.25rem; color:#fff; }
  .bc-swap-card__num{ font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:2rem; color:#fff; opacity:.65; }
  .bc-swap-card__title{ margin-top:.4rem; font-size:1.65rem; font-weight:900; letter-spacing:-0.01em; color:#fff; text-shadow:0 2px 10px rgba(0,0,0,.4); }
  .bc-swap-card__copy{ margin-top:.75rem; max-width:32ch; font-size:.95rem; line-height:1.6; color:#fff; opacity:.95; text-shadow:0 1px 6px rgba(0,0,0,.35); }

  /* ---- Photo stack (polaroids, no marquee) ---- */
  .bc-photo-stack{ position:relative; height:380px; }
  .bc-photo-stack__item{
    position:absolute; width:200px; height:250px; border:8px solid #fff; border-radius:6px; overflow:hidden;
    box-shadow:0 18px 36px rgba(42,1,17,.18); cursor:pointer; opacity:0;
    transition:transform .4s cubic-bezier(.16,1,.3,1), box-shadow .4s ease, opacity .6s ease;
  }
  .bc-photo-stack__item.is-visible{ opacity:1; }
  .bc-photo-stack__item img{ width:100%; height:100%; object-fit:cover; display:block; }
  .bc-photo-stack__item:hover{ transform:rotate(0deg) scale(1.08) translateY(-10px) !important; z-index:20 !important; box-shadow:0 30px 58px rgba(42,1,17,.32); }
  .bc-photo-stack__item:nth-child(1){ left:0%;   top:14%; transform:rotate(-7deg); z-index:1; }
  .bc-photo-stack__item:nth-child(2){ left:15%;  top:0%;  transform:rotate(5deg);  z-index:2; }
  .bc-photo-stack__item:nth-child(3){ left:31%;  top:16%; transform:rotate(-4deg); z-index:3; }
  .bc-photo-stack__item:nth-child(4){ left:47%;  top:2%;  transform:rotate(8deg);  z-index:2; }
  .bc-photo-stack__item:nth-child(5){ left:63%;  top:14%; transform:rotate(-6deg); z-index:1; }
  .bc-photo-stack__item:nth-child(6){ left:79%;  top:0%;  transform:rotate(4deg);  z-index:2; }

  @media (max-width:820px){
    .bc-photo-stack{ height:auto; display:flex; gap:1rem; overflow-x:auto; padding-bottom:.5rem; scroll-snap-type:x proximity; }
    .bc-photo-stack__item{ position:static !important; transform:none !important; flex-shrink:0; width:170px; height:215px; scroll-snap-align:start; }
    .bc-photo-stack__item:hover{ transform:none !important; }
  }

  /* ---- Lightbox, vista previa de fotos ---- */
  .bc-lightbox{
    position:fixed; inset:0; z-index:200; display:flex; align-items:center; justify-content:center;
    background:rgba(42,1,17,.94); opacity:0; visibility:hidden; padding:2rem;
    transition:opacity .3s ease, visibility 0s linear .3s;
  }
  .bc-lightbox.is-open{ opacity:1; visibility:visible; transition:opacity .3s ease, visibility 0s linear 0s; }
  .bc-lightbox__img{
    max-width:min(920px,90vw); max-height:84vh; border-radius:8px; box-shadow:0 30px 70px rgba(0,0,0,.5);
    transform:scale(.94); transition:transform .3s cubic-bezier(.16,1,.3,1);
  }
  .bc-lightbox.is-open .bc-lightbox__img{ transform:scale(1); }
  .bc-lightbox__close{
    position:absolute; top:1.25rem; right:1.5rem; width:44px; height:44px; border-radius:999px;
    background:rgba(255,255,255,.12); border:1px solid rgba(255,255,255,.3); color:#fff; font-size:1.6rem; line-height:1;
    display:flex; align-items:center; justify-content:center; cursor:pointer; transition:background-color .2s ease, color .2s ease;
  }
  .bc-lightbox__close:hover{ background:var(--bc-green); color:var(--bc-wine); }
  .bc-lightbox__nav{
    position:absolute; top:50%; transform:translateY(-50%); width:52px; height:52px; border-radius:999px;
    background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.28); color:#fff; font-size:1.3rem;
    display:flex; align-items:center; justify-content:center; cursor:pointer; transition:background-color .2s ease, color .2s ease;
  }
  .bc-lightbox__nav:hover{ background:var(--bc-green); color:var(--bc-wine); }
  .bc-lightbox__nav--prev{ left:1.5rem; }
  .bc-lightbox__nav--next{ right:1.5rem; }
  @media (max-width:640px){
    .bc-lightbox__nav{ width:42px; height:42px; }
    .bc-lightbox__nav--prev{ left:.5rem; }
    .bc-lightbox__nav--next{ right:.5rem; }
  }

  @media (max-width:1023px){
    .bc-story-sticky__frame{ position:relative; top:0; }
  }

  @media (prefers-reduced-motion: reduce){
    .bc-tag-rotate,.bc-mask-heading__line span,.bc-fade-up-delay,.bc-hero-photo__frame,.bc-hero-photo__tag,
    .bc-reveal-simple,.bc-btn,.bc-story-sticky__img,.bc-story-beat,.bc-photo-stack__item,
    .bc-parallax{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; clip-path:none!important;
    }
    .bc-curtain-card__veil,.bc-swap-card{ transition:none!important; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Simple reveal (Mantra, Mission/Vision, CTA) ---------- */
    const simpleItems = document.querySelectorAll(".bc-reveal-simple");
    const simpleObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          simpleObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    simpleItems.forEach((item) => simpleObserver.observe(item));

    /* ---------- Count-up stats ---------- */
    const counters = document.querySelectorAll(".bc-count");
    const countObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const to = parseInt(el.dataset.countTo, 10) || 0;
        const duration = 1300;
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

    /* ---------- Ambient parallax (estampados de fondo) ---------- */
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

    /* ---------- Curtain Reveal cards: tap fallback for touch devices ---------- */
    document.querySelectorAll(".js-bc-curtain").forEach((card) => {
      card.addEventListener("click", () => {
        if (window.matchMedia("(hover: none)").matches) {
          card.classList.toggle("is-open");
        }
      });
    });

    /* ---------- Lightbox: preview de las fotos "Real Work" ---------- */
    const lbStackItems = Array.from(document.querySelectorAll(".js-bc-stack-item"));
    const lightbox = document.querySelector(".js-bc-lightbox");
    if (lbStackItems.length && lightbox) {
      const lightboxImg = lightbox.querySelector(".js-bc-lightbox-img");
      let lbIndex = 0;

      function openLightbox(idx) {
        lbIndex = idx;
        const img = lbStackItems[idx].querySelector("img");
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
        lightbox.classList.add("is-open");
        lightbox.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
      }
      function closeLightbox() {
        lightbox.classList.remove("is-open");
        lightbox.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
      }
      function showRelative(delta) {
        openLightbox((lbIndex + delta + lbStackItems.length) % lbStackItems.length);
      }

      lbStackItems.forEach((item, idx) => {
        item.setAttribute("tabindex", "0");
        item.setAttribute("role", "button");
        item.setAttribute("aria-label", "View photo full size");
        item.addEventListener("click", () => openLightbox(idx));
        item.addEventListener("keydown", (e) => {
          if (e.key === "Enter" || e.key === " ") { e.preventDefault(); openLightbox(idx); }
        });
      });

      lightbox.querySelector(".js-bc-lightbox-close").addEventListener("click", closeLightbox);
      lightbox.querySelector(".js-bc-lightbox-prev").addEventListener("click", () => showRelative(-1));
      lightbox.querySelector(".js-bc-lightbox-next").addEventListener("click", () => showRelative(1));
      lightbox.addEventListener("click", (e) => { if (e.target === lightbox) closeLightbox(); });
      document.addEventListener("keydown", (e) => {
        if (!lightbox.classList.contains("is-open")) return;
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowLeft") showRelative(-1);
        if (e.key === "ArrowRight") showRelative(1);
      });
    }

    /* ---------- Card Swap (Our Values): pila 3D que rota sola ---------- */
    const swapContainer = document.querySelector(".js-bc-value-swap");
    if (swapContainer) {
      const swapCards = Array.from(swapContainer.querySelectorAll(".js-bc-swap-card"));
      const total = swapCards.length;
      const cardDistance = 20;
      const verticalDistance = 7;
      let order = swapCards.map((_, i) => i);
      let swapTimer = null;

      function slotFor(slot) {
        return {
          x: slot * cardDistance,
          y: -slot * verticalDistance,
          z: -slot * cardDistance * 1.3
        };
      }

      function place(el, slot, animate) {
        const s = slotFor(slot);
        el.style.transition = animate ? "transform .5s cubic-bezier(.22,1,.36,1)" : "none";
        el.style.transform = "translate3d(" + s.x + "px," + s.y + "px," + s.z + "px) skewY(-2.5deg)";
        el.style.zIndex = String(total - slot);
        el.style.opacity = "1";
      }

      order.forEach(function (cardIdx, slot) { place(swapCards[cardIdx], slot, false); });

      function cycle() {
        const frontIdx = order[0];
        const rest = order.slice(1);
        const frontEl = swapCards[frontIdx];

        const front = slotFor(0);
        frontEl.style.transition = "transform .38s cubic-bezier(.5,0,.75,0), opacity .38s ease";
        frontEl.style.transform = "translate3d(" + front.x + "px," + (front.y + 280) + "px," + front.z + "px) skewY(-2.5deg)";
        frontEl.style.opacity = "0.35";

        rest.forEach(function (idx, i) { place(swapCards[idx], i, true); });

        setTimeout(function () {
          const backSlot = total - 1;
          const back = slotFor(backSlot);
          frontEl.style.transition = "none";
          frontEl.style.transform = "translate3d(" + back.x + "px," + (back.y + 220) + "px," + back.z + "px) skewY(-2.5deg)";
          void frontEl.offsetHeight;
          frontEl.style.transition = "transform .4s cubic-bezier(.22,1,.36,1), opacity .32s ease";
          frontEl.style.transform = "translate3d(" + back.x + "px," + back.y + "px," + back.z + "px) skewY(-2.5deg)";
          frontEl.style.zIndex = String(total - backSlot);
          frontEl.style.opacity = "1";
          order = rest.concat([frontIdx]);
        }, 380);
      }

      function startSwap() {
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
        swapTimer = setInterval(cycle, 2800);
      }
      function stopSwap() { if (swapTimer) { clearInterval(swapTimer); swapTimer = null; } }

      startSwap();
      swapContainer.addEventListener("mouseenter", stopSwap);
      swapContainer.addEventListener("mouseleave", startSwap);

      swapCards.forEach(function (card) {
        card.addEventListener("click", function () {
          const idx = swapCards.indexOf(card);
          if (order[0] === idx) return;
          order = [idx].concat(order.filter(function (o) { return o !== idx; }));
          order.forEach(function (cardIdx, slot) { place(swapCards[cardIdx], slot, true); });
        });
      });
    }

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

    /* ---------- Our Story: scroll-linked sticky photo swap ---------- */
    const storyBeats = document.querySelectorAll(".js-bc-story-beat");
    const storyImgs = document.querySelectorAll(".js-bc-story-img");
    if (storyBeats.length) {
      const storyObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const idx = entry.target.dataset.index;
            storyBeats.forEach((b) => b.classList.remove("is-active"));
            entry.target.classList.add("is-active");
            storyImgs.forEach((img) => img.classList.toggle("is-active", img.dataset.index === idx));
          }
        });
      }, { threshold: 0.5, rootMargin: "-15% 0px -15% 0px" });
      storyBeats.forEach((b) => storyObserver.observe(b));
    }

    /* ---------- Photo stack entrance ---------- */
    const stackRevealItems = document.querySelectorAll(".js-bc-stack-item");
    const stackObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add("is-visible"), idx * 90);
          stackObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    stackRevealItems.forEach((item) => stackObserver.observe(item));
  });
</script>

<?php get_footer(); ?>