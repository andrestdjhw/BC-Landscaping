<?php
/**
 * Template Name: Service Template
 *
 * BC Landscaping & Hardscape, plantilla única para las 8 páginas de servicio.
 * Se crea una WP Page por servicio (mismo slug que usa el navbar/footer) y se
 * le asigna esta plantilla. El contenido se resuelve automáticamente según
 * el slug de la página (post_name) contra el array $services de abajo.
 *
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-service bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo      = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $swirl_a      = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b      = '/wp-content/uploads/2026/07/Graficos-10.png';
    $icon_arboles    = '/wp-content/uploads/2026/07/Graficos_Servicios-de-arboles-.png';
    $icon_limpieza   = '/wp-content/uploads/2026/07/Graficos_Limpieza-y-mantenimiento-de-jardines.png';
    $icon_concreto   = '/wp-content/uploads/2026/07/Graficos_Concreto.png';
    $icon_lightscape = '/wp-content/uploads/2026/07/Graficos_Lightscape.png';
    $icon_hardscape  = '/wp-content/uploads/2026/07/Graficos_Hardscape.png';

    // ------------------------------------------------------------
    // LOS 8 SERVICIOS, copy del brief (sección 13, tabla de intros)
    // ------------------------------------------------------------
    $services = [

      'xeriscaping-desert-design' => [
        'title'     => 'Xeriscaping &amp; Desert Design',
        'signature' => true,
        'benefit'   => 'Native, water-wise landscapes that cut your water bill and stay HOA-compliant.',
        'hero'      => '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg',
        'intro'     => [
          'Xeriscaping is our signature. We design desert-smart landscapes with native plants and efficient irrigation that lower your water bill, meet HOA standards, and stay stunning through Arizona&rsquo;s harshest summers.',
          'It&rsquo;s not gravel-and-cactus minimalism. It&rsquo;s a designed landscape that looks intentional year-round, with the plant palette and irrigation engineered specifically for your property.',
        ],
        'includes'  => ['Native &amp; drought-tolerant plant selection', 'Decorative rock &amp; mulch beds', 'Drip irrigation design &amp; install', 'HOA-compliant layout &amp; permitting support'],
        'gallery'   => ['/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg'],
      ],

      'grass-and-turf-installation' => [
        'title'     => 'Grass &amp; Turf Installation',
        'signature' => false,
        'benefit'   => 'Natural and synthetic turf engineered to stay green and lush in Arizona&rsquo;s heat.',
        'hero'      => '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-5.webp',
        'intro'     => [
          'Whether you want real sod or a synthetic lawn that never browns, we grade, prep, and install turf built to handle Arizona summers, not just survive them.',
          'Synthetic turf means no mowing, no water bill spikes, and an HOA-approved green lawn every day of the year.',
        ],
        'includes'  => ['Sod installation &amp; removal', 'Synthetic turf installation', 'Soil prep &amp; grading', 'Edging &amp; border cleanup'],
        'gallery'   => ['/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-9.jpg'],
      ],

      'hardscaping' => [
        'title'     => 'Hardscaping',
        'signature' => false,
        'benefit'   => 'Pavers, patios, and walkways that turn your yard into a place to live.',
        'hero'      => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp',
        'icon'      => $icon_hardscape,
        'intro'     => [
          'A hardscape is the bones of your outdoor space, the patio you entertain on, the walkway that guides guests to your door, the structure that makes the rest of the landscape work.',
          'We build with drainage, grading, and long-term durability in mind, not just how it photographs on day one.',
        ],
        'includes'  => ['Paver patios &amp; walkways', 'Decorative columns &amp; seating walls', 'Gravel &amp; flagstone accents', 'Drainage-aware grading'],
        'gallery'   => ['/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp', '/wp-content/uploads/2026/07/IMAGE-BA-5-2.webp'],
      ],

      'irrigation-systems-2' => [
        'title'     => 'Irrigation Systems',
        'signature' => false,
        'benefit'   => 'Efficient design, installation, and repair that cut waste and lower your bills.',
        'hero'      => '/wp-content/uploads/2026/07/Irrigation-Systems.webp',
        'intro'     => [
          'An inefficient irrigation system wastes water and money quietly, month after month. We design and install systems sized correctly for your plants, your soil, and Arizona&rsquo;s climate.',
          'Already have a system that&rsquo;s underperforming or leaking? We diagnose and repair existing irrigation, not just install new.',
        ],
        'includes'  => ['Drip &amp; sprinkler system design', 'New installation &amp; retrofits', 'Leak detection &amp; repair', 'Smart controller setup'],
        'gallery'   => [],
      ],

      'lightscape-installation-2' => [
        'title'     => 'Lightscape Installation',
        'signature' => false,
        'benefit'   => 'Premium LED lighting that brings patios, paths, and gardens to life after dark.',
        'hero'      => '/wp-content/uploads/2026/07/Lightscape-installation.webp',
        'icon'      => $icon_lightscape,
        'intro'     => [
          'Good lightscaping is the difference between a yard that stops existing at sunset and one that becomes the best part of your evening.',
          'We design low-voltage LED lighting that highlights architecture, trees, and walkways, safely, efficiently, and built to run for years.',
        ],
        'includes'  => ['Path &amp; step lighting', 'Uplighting for trees &amp; architecture', 'Low-voltage transformer setup', 'Timer &amp; smart control integration'],
        'gallery'   => [],
      ],

      'tree-services' => [
        'title'     => 'Tree Services',
        'signature' => false,
        'benefit'   => 'Pruning, removal, and planting that protect your property and its curb appeal.',
        'hero'      => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-6.webp',
        'icon'      => $icon_arboles,
        'intro'     => [
          'Mature trees add real value to a property, and real risk when they&rsquo;re neglected. We keep yours healthy, shaped, and safe.',
          'From a single overgrown ficus to a full property assessment, our crews handle it with the right equipment, not a ladder and a prayer.',
        ],
        'includes'  => ['Pruning &amp; shaping', 'Removal &amp; stump grinding', 'New tree planting', 'Health &amp; pest assessment'],
        'gallery'   => [],
      ],

      'lawn-and-garden-maintenance' => [
        'title'     => 'Lawn &amp; Garden Maintenance',
        'signature' => false,
        'benefit'   => 'Scheduled, reliable care that keeps every yard sharp and inspection-ready.',
        'hero'      => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-27.jpg',
        'icon'      => $icon_limpieza,
        'intro'     => [
          'HOA inspections don&rsquo;t wait, and neither should your maintenance. Scheduled service means your property looks the same in week 40 as it did on installation day.',
          'One team, one schedule, no chasing down a mower guy and a separate weed guy.',
        ],
        'includes'  => ['Mowing, edging &amp; blowing', 'Weed control &amp; fertilization', 'Seasonal clean-ups', 'Shrub &amp; hedge trimming'],
        'gallery'   => ['/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-5.jpg', '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp'],
      ],

      'concrete-and-retaining-walls' => [
        'title'     => 'Concrete &amp; Retaining Walls',
        'signature' => false,
        'benefit'   => 'Durable structures that stabilize terrain, manage drainage, and last for years.',
        'hero'      => '/wp-content/uploads/2026/07/Retaining-Walls.webp',
        'icon'      => $icon_concreto,
        'intro'     => [
          'Sloped or uneven lots need real engineering, not a pile of stacked block. We build retaining walls and concrete work that solve the actual drainage and grading problem.',
          'Built right the first time means no erosion, no shifting, and no redoing it in three years.',
        ],
        'includes'  => ['Engineered retaining walls', 'Curbing &amp; garden borders', 'Concrete patios &amp; footings', 'Drainage integration'],
        'gallery'   => [],
      ],

    ];

    // ------------------------------------------------------------
    // RESOLVER, qué servicio mostrar según el slug de la página
    // ------------------------------------------------------------
    $current_slug = get_post_field('post_name');
    if (!isset($services[$current_slug])) {
      $current_slug = 'xeriscaping-desert-design'; // fallback de seguridad
    }
    $service = $services[$current_slug];

    $process_steps = [
      ['n' => '01', 'title' => 'Free Consultation', 'copy' => 'We walk your property, listen to your goals, and assess scope, no pressure, no obligation.'],
      ['n' => '02', 'title' => 'Custom Proposal', 'copy' => 'A clear, written scope with transparent pricing and an HOA-ready plan before we touch anything.'],
      ['n' => '03', 'title' => 'Expert Installation', 'copy' => 'Our in-house crew executes on schedule, with a final walkthrough before we call it done.'],
    ];
    if (!empty($service['signature'])) {
      $process_steps[] = ['n' => '04', 'title' => 'Ongoing Care', 'copy' => 'Optional maintenance plans keep your desert landscape thriving long after installation.'];
    }

    $related = array_filter($services, function ($slug) use ($current_slug) {
      return $slug !== $current_slug;
    }, ARRAY_FILTER_USE_KEY);
    $related = array_slice($related, 0, 4, true);

    $faqs = [
      ['q' => 'Do you work with HOAs and follow community guidelines?', 'a' => 'Yes. We specialize in HOA-compliant landscaping, ensuring every project meets community standards and design requirements while maintaining a premium look.'],
      ['q' => 'Do you offer eco-friendly, water-efficient options?', 'a' => 'Absolutely. Xeriscaping, native plant design, and efficient irrigation are core to how we build, aligned with Arizona&rsquo;s climate and water rules.'],
      ['q' => 'Can you handle landscaping and hardscaping under one contract?', 'a' => 'Yes. Landscaping, hardscaping, irrigation, lighting, and maintenance are delivered by one in-house team, no juggling contractors.'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO, split asimétrico + cinta con los includes reales        -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#2A0111] pb-14 pt-14 lg:pb-0 lg:pt-0">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-24 -top-16 h-[420px] w-[420px] opacity-[0.08]" data-speed="0.1">

    <div class="relative z-10 mx-auto grid max-w-7xl gap-10 px-4 lg:min-h-[600px] lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:gap-6">
      <div class="text-center lg:text-left">
        <p class="bc-fade-in-0 flex items-center justify-center gap-2 text-xs font-black uppercase tracking-[0.28em] text-[#BCBF60] lg:justify-start">
          Services
          <?php if (!empty($service['signature'])) : ?>
            <span class="bc-signature-badge">Signature</span>
          <?php endif; ?>
        </p>

        <h1 class="bc-mask-heading mt-5">
          <?php
            $hero_words = explode(' ', wp_strip_all_tags($service['title']));
            foreach ($hero_words as $i => $word) : ?>
              <span class="bc-mask-word"><span style="animation-delay: calc(<?php echo (int) $i; ?> * 90ms + 150ms)"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
            <?php endforeach; ?>
        </h1>

        <p class="bc-fade-in-2 mx-auto mt-6 max-w-lg text-base leading-7 text-white/75 lg:mx-0 md:text-lg"><?php echo $service['benefit']; ?></p>

        <div class="bc-fade-in-3 mt-9 flex flex-wrap items-center justify-center gap-4 lg:justify-start">
          <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get a Free Estimate</span></a>
          <a href="tel:+14802294950" class="text-sm font-bold text-white/75">Call (480) 229-4950</a>
        </div>
      </div>

      <div class="bc-fade-in-2 mx-auto w-full max-w-sm lg:mx-0 lg:max-w-none">
        <div class="bc-hero-photo">
          <div class="bc-hero-photo__frame">
            <img src="<?php echo esc_url($service['hero']); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($service['title'])); ?>, BC Landscaping & Hardscape" class="bc-hero-photo__img">
          </div>
          <span class="bc-hero-photo__tag"><?php echo esc_html(explode(' ', wp_strip_all_tags($service['title']))[0]); ?></span>
        </div>
      </div>
    </div>

    <div class="bc-includes-ribbon">
      <div class="bc-includes-ribbon__track">
        <?php for ($r = 0; $r < 3; $r++) : ?>
          <?php foreach ($service['includes'] as $item) : ?>
            <span class="bc-includes-ribbon__item"><?php echo wp_strip_all_tags($item); ?></span>
            <span class="bc-includes-ribbon__dot"></span>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- INTRO + WHAT'S INCLUDED                                       -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -left-28 top-10 h-[420px] w-[420px] opacity-[0.05]">

    <div class="relative mx-auto grid max-w-6xl gap-12 px-4 lg:grid-cols-[1.1fr_0.9fr] lg:items-start">
      <div class="bc-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Why It Matters</p>
        <div class="mt-4 h-1.5 w-16 bg-[linear-gradient(90deg,#117682_0%,#BCBF60_100%)]"></div>
        <?php foreach ($service['intro'] as $idx => $para) : ?>
          <p class="<?php echo $idx === 0 ? 'mt-5 text-lg leading-8 text-[#2A0111]/85' : 'mt-4 text-base leading-7 text-[#2A0111]/72'; ?>"><?php echo $para; ?></p>
        <?php endforeach; ?>

        <a href="/contact-us" class="mt-6 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#117682] transition hover:gap-3">
          Get Your Free Estimate <span>&rarr;</span>
        </a>
      </div>

      <div class="bc-reveal-right bc-tilt bc-includes-card">
        <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-includes-card__mark">
        <p class="relative z-10 text-xs font-black uppercase tracking-[0.2em] text-[#BCBF60]">What&rsquo;s Included</p>
        <ul class="relative z-10 mt-5 space-y-4">
          <?php foreach ($service['includes'] as $idx => $item) :
            $tone_cycle = ['#BCBF60', '#84CAC9', '#8B0333', '#117682'][$idx % 4];
          ?>
            <li class="bc-reveal-stagger flex items-start gap-3">
              <span class="bc-includes-icon" style="background: <?php echo esc_attr($tone_cycle); ?>;">
                <svg viewBox="0 0 24 24" fill="none" stroke="#2A0111" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg>
              </span>
              <span class="mt-1 text-[14px] leading-6 text-white/90"><?php echo $item; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <?php if (!empty($service['signature'])) : ?>
  <!-- ============================================================ -->
  <!-- SIGNATURE ONLY, Xeriscaping vs. Traditional Lawn             -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#2A0111] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-breathe pointer-events-none absolute -right-24 -top-24 h-[420px] w-[420px] opacity-[0.10]">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-breathe pointer-events-none absolute -left-20 -bottom-20 h-[360px] w-[360px] opacity-[0.08]" style="animation-delay:-4s;">

    <div class="relative mx-auto max-w-4xl px-4">
      <div class="bc-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">The Desert-Smart Difference</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-4xl">Xeriscaping vs. Traditional Lawn</h2>
      </div>

      <div class="bc-compare bc-reveal-up mt-12">
        <div class="bc-compare__row bc-compare__row--head">
          <span></span>
          <span class="bc-compare__head-label">Traditional Lawn</span>
          <span class="bc-compare__head-label bc-compare__head-label--win">
            <svg class="bc-compare__win-badge" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 13 4 4L19 7"/></svg>
            BC Xeriscaping
          </span>
        </div>
        <?php
          $compare_rows = [
            ['Water Use', 'High, year-round', 'Low, drip-efficient'],
            ['Maintenance', 'Weekly mowing', 'Seasonal upkeep only'],
            ['HOA Compliance', 'Varies', 'Designed to meet standards'],
            ['Summer Resilience', 'Stresses &amp; browns', 'Built for Arizona heat'],
          ];
          foreach ($compare_rows as $ridx => $row) : ?>
            <div class="bc-compare__row bc-reveal-stagger">
              <span class="bc-compare__label"><?php echo $row[0]; ?></span>
              <span class="bc-compare__no">
                <span class="bc-compare__icon bc-compare__icon--no">&#10005;</span>
                <?php echo $row[1]; ?>
              </span>
              <span class="bc-compare__yes">
                <span class="bc-compare__icon bc-compare__icon--yes">&#10003;</span>
                <?php echo $row[2]; ?>
              </span>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================================ -->
  <!-- OUR PROCESS                                                   -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -right-32 top-1/4 h-[480px] w-[480px] opacity-[0.06]">

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="bc-reveal-up mx-auto max-w-2xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">Our Process</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">From First Call to Final Walkthrough</h2>
        <div class="mx-auto mt-6 h-1.5 w-16 bg-[linear-gradient(90deg,#8B0333_0%,#BCBF60_100%)]"></div>
      </div>

      <div class="bc-process-track bc-reveal-up mt-20 grid gap-x-6 gap-y-14 <?php echo count($process_steps) === 4 ? 'md:grid-cols-4' : 'md:grid-cols-3'; ?>" style="--cols: <?php echo (int) count($process_steps); ?>;">
        <?php foreach ($process_steps as $idx => $step) :
          $tone_cycle = ['#117682', '#8B0333', '#BCBF60', '#2A0111'][$idx % 4];
        ?>
          <div class="bc-process-step bc-reveal-stagger" style="--bc-step-tone: <?php echo esc_attr($tone_cycle); ?>;">
            <div class="bc-process-step__node">
              <svg class="bc-process-step__ring" viewBox="0 0 56 56" aria-hidden="true">
                <circle cx="28" cy="28" r="24" fill="none" stroke="rgba(42,1,17,.12)" stroke-width="2"></circle>
                <circle class="bc-process-step__ring-fill" cx="28" cy="28" r="24" fill="none" stroke="<?php echo esc_attr($tone_cycle); ?>" stroke-width="2" stroke-linecap="round"></circle>
              </svg>
              <span class="bc-process-step__num"><?php echo esc_html($step['n']); ?></span>
            </div>
            <article class="bc-tilt bc-process-step__card relative overflow-hidden rounded-[8px] bg-[#E6DACF] p-6">
              <h3 class="text-lg font-black tracking-[-0.02em] text-[#2A0111]"><?php echo esc_html($step['title']); ?></h3>
              <p class="mt-3 text-[14px] leading-6 text-[#2A0111]/72"><?php echo $step['copy']; ?></p>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php if (!empty($service['gallery'])) : ?>
  <!-- ============================================================ -->
  <!-- GALLERY TEASER                                                -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-6xl gap-14 px-4 lg:grid-cols-[0.82fr_1.18fr] lg:items-center">
      <div class="bc-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Real Work</p>
        <h2 class="mt-3 text-2xl font-black tracking-[-0.02em] text-[#2A0111] md:text-3xl">See It Done Right</h2>
        <p class="mt-4 text-[15px] leading-7 text-[#2A0111]/72">Every project starts with a plan and ends with a final walkthrough, here&rsquo;s the kind of craftsmanship we bring to properties across Maricopa County.</p>

        <ul class="mt-6 space-y-3">
          <?php
            $gallery_trust = [
              '100% Satisfaction Guaranteed',
              'Installed by our in-house crew, no subcontractors',
              'Backed by our workmanship guarantee',
            ];
            foreach ($gallery_trust as $tidx => $trust) :
              $trust_tone = ['#117682', '#8B0333', '#BCBF60'][$tidx % 3];
          ?>
            <li class="bc-reveal-stagger flex items-start gap-3">
              <span class="bc-includes-icon" style="background: <?php echo esc_attr($trust_tone); ?>;">
                <svg viewBox="0 0 24 24" fill="none" stroke="#2A0111" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg>
              </span>
              <span class="mt-1 text-[14px] leading-6 text-[#2A0111]/80"><?php echo $trust; ?></span>
            </li>
          <?php endforeach; ?>
        </ul>

        <a href="/projects" class="mt-8 inline-flex items-center gap-2 border border-[#2A0111]/15 px-7 py-3.5 text-sm font-black uppercase tracking-[0.12em] text-[#2A0111] transition hover:border-[#117682] hover:text-[#117682]">
          View All Projects <span>&rarr;</span>
        </a>
      </div>

      <div class="bc-gallery-frame bc-reveal-right relative">
        <div class="bc-wipe bc-gallery-frame__main relative overflow-hidden">
          <img src="<?php echo esc_url($service['gallery'][0]); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($service['title'])); ?> project, BC Landscaping & Hardscape" class="bc-wipe__img h-[420px] w-full object-cover" loading="lazy">
          <span class="bc-gallery-frame__corner" aria-hidden="true"></span>
          <span class="bc-gallery-frame__seal">
            <img src="<?php echo esc_url($isotipo); ?>" alt="">
          </span>
          <span class="bc-gallery-frame__caption"><?php echo esc_html(wp_strip_all_tags($service['title'])); ?> Project</span>
        </div>

        <?php if (!empty($service['gallery'][1])) : ?>
          <div class="bc-wipe bc-gallery-frame__accent overflow-hidden">
            <img src="<?php echo esc_url($service['gallery'][1]); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($service['title'])); ?> project detail, BC Landscaping & Hardscape" class="bc-wipe__img h-full w-full object-cover" loading="lazy">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================================ -->
  <!-- EXPLORE OTHER SERVICES                                        -->
  <!-- ============================================================ -->
  <section class="bc-pattern-section relative overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <div class="bc-pattern-section__texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-24 -bottom-24 h-[420px] w-[420px] opacity-[0.08]" data-speed="0.1">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-20 top-10 h-[300px] w-[300px] opacity-[0.06]" data-speed="-0.08">

    <div class="relative mx-auto max-w-6xl px-4">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">Explore More</p>
      <h2 class="bc-reveal-up mt-3 text-2xl font-black tracking-[-0.02em] text-[#2A0111] md:text-3xl">Other Services You Might Need</h2>

      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($related as $slug => $item) :
          $tone_cycle = ['#117682', '#8B0333', '#BCBF60', '#2A0111'][array_search($slug, array_keys($related)) % 4];
          $card_icon = !empty($item['icon']) ? $item['icon'] : $isotipo;
        ?>
          <a href="/services/<?php echo esc_attr($slug); ?>" class="bc-related-card bc-tilt group relative overflow-hidden bg-white" style="--bc-related-tone: <?php echo esc_attr($tone_cycle); ?>;">
            <div class="bc-wipe relative h-[150px] overflow-hidden">
              <img src="<?php echo esc_url($item['hero']); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($item['title'])); ?>, BC Landscaping & Hardscape" class="bc-wipe__img h-full w-full object-cover transition duration-700 group-hover:scale-[1.08]" loading="lazy">
              <span class="bc-related-card__tint" aria-hidden="true"></span>
            </div>
            <span class="bc-related-card__badge">
              <span class="bc-icon-mask h-5 w-5" style="--bc-icon:url('<?php echo esc_url($card_icon); ?>'); background-color: <?php echo esc_attr($tone_cycle); ?>;"></span>
            </span>
            <div class="relative z-10 bg-white p-5 pt-6">
              <h3 class="text-sm font-black tracking-[-0.01em] text-[#2A0111]"><?php echo $item['title']; ?></h3>
              <span class="mt-2 inline-flex items-center gap-1 text-[11px] font-black uppercase tracking-[0.1em] transition group-hover:gap-2" style="color: <?php echo esc_attr($tone_cycle); ?>;">Learn More <span>&rarr;</span></span>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FAQ                                                           -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -right-24 top-10 h-[340px] w-[340px] opacity-[0.05]">

    <div class="relative mx-auto max-w-3xl px-4">
      <div class="bc-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">FAQs</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-4xl">Common Questions</h2>
      </div>

      <div class="js-bc-accordion mt-10 space-y-4">
        <?php foreach ($faqs as $i => $faq) :
          $faq_tone = ['#117682', '#8B0333', '#BCBF60', '#84CAC9'][$i % 4];
        ?>
          <div class="bc-accordion__item" style="--bc-faq-tone: <?php echo esc_attr($faq_tone); ?>;">
            <button type="button" class="js-bc-accordion-trigger flex w-full cursor-pointer items-center gap-5 py-5 text-left">
              <span class="bc-accordion__num"><?php echo esc_html(str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT)); ?></span>
              <span class="flex-1 text-base font-black tracking-[-0.01em] text-[#2A0111]"><?php echo esc_html($faq['q']); ?></span>
              <span class="bc-accordion__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round">
                  <path d="M5 12h14"/>
                  <path class="bc-accordion__icon-v" d="M12 5v14"/>
                </svg>
              </span>
            </button>
            <div class="bc-accordion__panel">
              <p class="bc-accordion__answer"><?php echo $faq['a']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FINAL CTA                                                     -->
  <!-- ============================================================ -->
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-16 -top-16 h-[300px] w-[300px] opacity-[0.06]" data-speed="0.12">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Get Started</p>
      <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Ready to Talk About Your <?php echo wp_strip_all_tags($service['title']); ?>?
      </h2>
      <p class="bc-reveal-up mt-6 text-base leading-8 text-white/80">
        Get a free, no-pressure estimate from the team Maricopa trusts for compliant, lasting outdoor work.
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

  .bc-service {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-service h1,.bc-service h2,.bc-service h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

  /* ---- Hero: mask-sweep heading ---- */
  .bc-mask-heading{ font-weight:900; font-size:clamp(2.3rem,5.5vw,4rem); line-height:1.02; letter-spacing:-0.03em; color:#fff; }
  .bc-mask-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .bc-mask-word span{ display:inline-block; clip-path:inset(0 100% 0 0); animation:bcMaskSweep .85s cubic-bezier(.65,0,.35,1) forwards; }
  @keyframes bcMaskSweep{ to{ clip-path:inset(0 0 0 0); } }

  /* ---- Hero: foto recortada, como en About ---- */
  .bc-hero-photo{ position:relative; }
  .bc-hero-photo::before{
    content:""; position:absolute; inset:0; background:var(--bc-green); border-radius:12px;
    transform:rotate(-1.5deg) translate(14px,14px); z-index:0;
  }
  .bc-hero-photo__frame{
    position:relative; z-index:1; aspect-ratio:4/5; overflow:hidden; border-radius:12px;
    transform:rotate(-1.5deg); box-shadow:0 30px 60px rgba(0,0,0,.35);
  }
  .bc-hero-photo__img{ width:100%; height:100%; object-fit:cover; display:block; }
  .bc-hero-photo__tag{
    position:absolute; z-index:2; bottom:-12px; left:-10px; background:var(--bc-wine); color:#fff;
    padding:.55rem 1.1rem; border-radius:6px; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.85rem;
    transform:rotate(-3deg); box-shadow:0 12px 26px rgba(0,0,0,.3);
  }

  /* ---- Hero: cinta con los "includes" reales del servicio ---- */
  .bc-includes-ribbon{
    position:relative; margin-top:2.5rem; overflow:hidden;
    border-top:1px solid rgba(255,255,255,.14); border-bottom:1px solid rgba(255,255,255,.14);
    background:rgba(255,255,255,.03); padding:.85rem 0;
  }
  .bc-includes-ribbon__track{ display:flex; width:max-content; align-items:center; gap:1.5rem; animation:bcRibbonScroll 26s linear infinite; }
  .bc-includes-ribbon__item{ font-size:.78rem; font-weight:800; text-transform:uppercase; letter-spacing:.1em; color:rgba(255,255,255,.55); white-space:nowrap; }
  .bc-includes-ribbon__dot{ width:5px; height:5px; border-radius:999px; background:var(--bc-green); opacity:.7; flex-shrink:0; }
  @keyframes bcRibbonScroll{ 0%{ transform:translateX(0); } 100%{ transform:translateX(-33.333%); } }
  .bc-fade-in-0,.bc-fade-in-2,.bc-fade-in-3{ opacity:0; transform:translateY(18px); animation: bcFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .bc-fade-in-0{ animation-delay:.1s; } .bc-fade-in-2{ animation-delay:1s; } .bc-fade-in-3{ animation-delay:1.2s; }
  @keyframes bcFadeUp{ to{ opacity:1; transform:translateY(0); } }

  .bc-signature-badge{
    display:inline-flex; align-items:center; padding:0.2rem 0.6rem; border-radius:6px; font-size:0.62rem; font-weight:900;
    text-transform:uppercase; letter-spacing:.06em; color:var(--bc-wine); background:var(--bc-green);
  }

  /* ---- Buttons ---- */
  .bc-btn{ position:relative; border:1px solid transparent; border-radius:8px; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; overflow:hidden; }
  .bc-btn span{ position:relative; z-index:1; }
  .bc-btn-green{ background:var(--bc-green); color:var(--bc-wine); box-shadow:0 16px 34px rgba(188,191,96,.28); }
  .bc-btn-green:hover{ background:#a9ac52; }
  .bc-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .bc-btn-outline:hover{ background:#fff; color:var(--bc-wine); }
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }

  /* ---- Reveal on scroll ---- */
  .bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-left{ transform:translateX(-46px); }
  .bc-reveal-right{ transform:translateX(46px); } .bc-reveal-stagger{ transform:translateY(32px); }
  .bc-reveal-up.is-visible,.bc-reveal-left.is-visible,.bc-reveal-right.is-visible,.bc-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }
  .bc-parallax{ will-change:transform; }
  .bc-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  /* ---- Patterned section, misma textura diagonal que el home ---- */
  .bc-pattern-section{ position:relative; }
  .bc-pattern-section__texture{
    position:absolute; inset:0; pointer-events:none; z-index:0;
    background-image: repeating-linear-gradient(45deg, rgba(42,1,17,0.055) 0, rgba(42,1,17,0.055) 1.5px, transparent 1.5px, transparent 16px);
    background-attachment: fixed;
  }

  /* ---- Related service cards, badge de ícono flotante, sin franja plana ---- */
  .bc-related-card{
    position:relative; z-index:1; border-radius:8px; box-shadow:0 14px 32px rgba(42,1,17,0.08);
    transition:box-shadow .35s ease, transform .35s cubic-bezier(.16,1,.3,1);
  }
  .bc-related-card:hover{ box-shadow:0 26px 50px rgba(42,1,17,0.18), 0 0 0 2px var(--bc-related-tone); }
  .bc-related-card__tint{
    position:absolute; inset:0; opacity:0;
    background:linear-gradient(180deg, transparent 40%, var(--bc-related-tone) 160%);
    transition:opacity .4s ease;
  }
  .bc-related-card:hover .bc-related-card__tint{ opacity:.35; }
  .bc-related-card__badge{
    position:absolute; z-index:2; top:120px; left:16px; display:flex; align-items:center; justify-content:center;
    width:42px; height:42px; border-radius:999px; background:#fff;
    box-shadow:0 10px 22px rgba(42,1,17,0.22); transform:translateY(0) rotate(0deg);
    transition:transform .4s cubic-bezier(.16,1,.3,1);
  }
  .bc-related-card:hover .bc-related-card__badge{ transform:translateY(-4px) rotate(-8deg); }
  .bc-icon-mask{
    -webkit-mask-image: var(--bc-icon); mask-image: var(--bc-icon);
    -webkit-mask-size: contain; mask-size: contain;
    -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat;
    -webkit-mask-position: center; mask-position: center;
    border-radius: 999px; padding: 5px;
  }

  /* ---- Dot texture (identidad de fondo, igual criterio que About) ---- */
  .bc-dot-texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image: radial-gradient(rgba(42,1,17,0.05) 1px, transparent 1px);
    background-size: 22px 22px;
  }

  /* ---- Gallery teaser, foto enmarcada con sello, caption y accent photo ---- */
  .bc-gallery-frame__main{ border-radius:8px; box-shadow:0 26px 54px rgba(42,1,17,.16); }
  .bc-wipe.bc-gallery-frame__main .bc-wipe__img{ transition:clip-path 1s cubic-bezier(.65,0,.35,1) .05s, transform .7s cubic-bezier(.16,1,.3,1); }
  .bc-wipe.bc-gallery-frame__main:hover .bc-wipe__img{ transform:scale(1.1); }
  .bc-gallery-frame__main::after{
    content:""; position:absolute; inset:0; z-index:1; pointer-events:none;
    background:linear-gradient(180deg,rgba(42,1,17,0) 55%,rgba(42,1,17,.7) 100%);
  }
  .bc-gallery-frame__corner{
    position:absolute; z-index:2; top:16px; left:16px; width:28px; height:28px; pointer-events:none; opacity:.85;
    border-top:2px solid rgba(255,255,255,.85); border-left:2px solid rgba(255,255,255,.85);
  }
  .bc-gallery-frame__seal{
    position:absolute; z-index:2; top:16px; right:16px; width:42px; height:42px; border-radius:999px;
    background:rgba(255,255,255,.16); border:1px solid rgba(255,255,255,.4); backdrop-filter:blur(6px);
    display:flex; align-items:center; justify-content:center;
  }
  .bc-gallery-frame__seal img{ width:18px; height:auto; filter:brightness(0) invert(1); opacity:.9; }
  .bc-gallery-frame__caption{
    position:absolute; z-index:2; left:20px; bottom:16px; font-family:'BC Museo Slab',Georgia,serif;
    font-weight:700; font-size:1.05rem; color:#fff; letter-spacing:-0.01em;
  }
  .bc-gallery-frame__accent{
    position:absolute; z-index:3; right:-1rem; bottom:-1.5rem; width:40%; aspect-ratio:4/3;
    border:5px solid #fff; border-radius:8px; box-shadow:0 20px 40px rgba(42,1,17,.24); transform:rotate(4deg);
    transition:transform .35s cubic-bezier(.16,1,.3,1);
  }
  .bc-gallery-frame__accent:hover{ transform:rotate(0deg) scale(1.05); z-index:4; }

  /* ---- What's Included card, vino, no sandstone: mucho más contraste ---- */
  .bc-includes-card{
    position:relative; overflow:hidden; border-radius:8px; background:var(--bc-wine); padding:2.25rem;
    box-shadow:0 22px 46px rgba(42,1,17,0.20);
  }
  .bc-includes-card__mark{ position:absolute; bottom:-2.5rem; right:-2.5rem; height:12rem; width:12rem; opacity:.08; pointer-events:none; }
  .bc-includes-icon{
    display:inline-flex; align-items:center; justify-content:center; width:28px; height:28px; flex-shrink:0;
    border-radius:999px; box-shadow:0 6px 14px rgba(0,0,0,0.25);
  }
  .bc-includes-icon svg{ width:15px; height:15px; }

  /* ---- Our Process, roadmap con línea que se dibuja + anillo de progreso ---- */
  .bc-process-track{ position:relative; }
  @media (min-width:768px){
    .bc-process-track::before{
      content:""; position:absolute; top:28px; left:calc(50% / var(--cols,3)); right:calc(50% / var(--cols,3));
      height:2px; background:rgba(42,1,17,.14); transform-origin:left center; transform:scaleX(0);
      transition:transform 1.3s cubic-bezier(.16,1,.3,1) .1s; z-index:0;
    }
    .bc-process-track.is-visible::before{ transform:scaleX(1); }
  }
  .bc-process-step{ position:relative; z-index:1; text-align:center; }
  .bc-process-step__node{ position:relative; z-index:2; width:56px; height:56px; margin:0 auto; }
  .bc-process-step__ring{ position:absolute; inset:0; transform:rotate(-90deg); }
  .bc-process-step__ring-fill{
    stroke-dasharray:151; stroke-dashoffset:151;
    transition:stroke-dashoffset 1s cubic-bezier(.16,1,.3,1) .3s;
  }
  .bc-reveal-stagger.is-visible .bc-process-step__ring-fill{ stroke-dashoffset:0; }
  .bc-process-step__num{
    position:absolute; inset:0; display:flex; align-items:center; justify-content:center;
    font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:1.05rem; color:var(--bc-step-tone);
    background:#fff; border-radius:999px; margin:5px; transition:transform .35s cubic-bezier(.16,1,.3,1);
  }
  .bc-process-step:hover .bc-process-step__num{ transform:scale(1.12); }
  .bc-process-step__card{
    margin-top:1.5rem; text-align:left; transition:transform .35s cubic-bezier(.16,1,.3,1), box-shadow .35s ease;
    box-shadow:0 16px 34px rgba(42,1,17,0.08);
  }
  .bc-process-step:hover .bc-process-step__card{
    transform:translateY(-6px);
    box-shadow:0 26px 50px color-mix(in srgb, var(--bc-step-tone) 30%, rgba(42,1,17,0.16));
  }

  /* ---- Ambient breathing motion para los swirls decorativos ---- */
  @keyframes bcBreathe{ 0%,100%{ transform:scale(1) rotate(0deg); } 50%{ transform:scale(1.06) rotate(4deg); } }
  .bc-breathe{ animation:bcBreathe 9s ease-in-out infinite; }

  /* ---- Compare table (signature only), columna ganadora resaltada, íconos reales ---- */
  .bc-compare{
    border:1px solid rgba(255,255,255,0.14); border-radius:14px; overflow:hidden;
    background:rgba(255,255,255,0.03);
  }
  .bc-compare__row{
    display:grid; grid-template-columns:1.1fr 1fr 1fr; gap:0.5rem;
    padding:1.1rem 1.35rem; border-top:1px solid rgba(255,255,255,0.10); align-items:center;
    transition:background-color .3s ease;
  }
  .bc-compare__row:hover{ background:rgba(255,255,255,0.035); }
  .bc-compare__row:first-child{ border-top:none; }
  .bc-compare__row--head{ padding-top:.9rem; padding-bottom:.9rem; background:rgba(255,255,255,0.03); }
  .bc-compare__head-label{ display:flex; align-items:center; gap:.35rem; font-size:0.7rem; font-weight:900; text-transform:uppercase; letter-spacing:.08em; color:rgba(255,255,255,0.55); }
  .bc-compare__head-label--win{ position:relative; color:var(--bc-green); animation:bcWinPulse 2.6s ease-in-out infinite; }
  @keyframes bcWinPulse{ 0%,100%{ text-shadow:0 0 0 rgba(188,191,96,0); } 50%{ text-shadow:0 0 14px rgba(188,191,96,.65); } }
  .bc-compare__win-badge{ width:13px; height:13px; flex-shrink:0; animation:bcWinPop .6s cubic-bezier(.34,1.56,.64,1) .4s both; }
  @keyframes bcWinPop{ from{ transform:scale(0) rotate(-45deg); opacity:0; } to{ transform:scale(1) rotate(0deg); opacity:1; } }
  .bc-compare__label{ font-weight:800; font-size:0.95rem; color:#fff; }
  .bc-compare__no,.bc-compare__yes{ display:flex; align-items:center; gap:0.55rem; font-size:0.88rem; }
  .bc-compare__no{ color:rgba(255,255,255,0.68); font-weight:600; }
  .bc-compare__yes{
    position:relative; overflow:hidden; font-weight:800; color:var(--bc-wine); background:var(--bc-green);
    margin:-0.4rem -0.7rem; padding:0.55rem 0.7rem; border-radius:8px;
  }
  .bc-compare__yes::after{
    content:""; position:absolute; inset:0; transform:translateX(-120%);
    background:linear-gradient(115deg,transparent 30%,rgba(255,255,255,.55) 50%,transparent 70%);
  }
  .bc-compare__row:hover .bc-compare__yes::after{ transform:translateX(120%); transition:transform .9s ease; }
  .bc-compare__icon{
    display:inline-flex; align-items:center; justify-content:center; width:20px; height:20px; flex-shrink:0;
    border-radius:50%; font-size:0.68rem; font-weight:900; transform:scale(0); transition:transform .5s cubic-bezier(.34,1.56,.64,1);
  }
  .bc-compare__row.is-visible .bc-compare__icon{ transform:scale(1); }
  .bc-compare__row.is-visible .bc-compare__icon--yes{ transition-delay:.15s; }
  .bc-compare__icon--no{ background:rgba(255,255,255,0.12); color:rgba(255,255,255,0.7); }
  .bc-compare__icon--yes{ background:var(--bc-wine); color:var(--bc-green); }

  /* ---- Image wipe reveal ---- */
  .bc-wipe__img{ clip-path:inset(0 100% 0 0); transform:scale(1.1); transition:clip-path 1s cubic-bezier(.65,0,.35,1) .05s, transform 1.3s cubic-bezier(.16,1,.3,1); }
  .bc-wipe.is-visible .bc-wipe__img{ clip-path:inset(0 0 0 0); transform:scale(1.02); }

  /* ---- FAQ accordion, cards con número, ícono +/− y tono por pregunta ---- */
  .bc-accordion__item{
    position:relative; background:#fff; border:1px solid rgba(42,1,17,.1); border-radius:8px; padding:0 1.5rem;
    transition:border-color .3s ease, box-shadow .3s ease, background-color .3s ease;
  }
  .bc-accordion__item:hover{ border-color:var(--bc-faq-tone); box-shadow:0 14px 30px rgba(42,1,17,.08); }
  .bc-accordion__item.is-open{
    background:color-mix(in srgb, var(--bc-faq-tone) 5%, white);
    border-color:var(--bc-faq-tone); box-shadow:0 18px 38px rgba(42,1,17,.1);
  }
  .bc-accordion__num{
    flex-shrink:0; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.85rem;
    color:var(--bc-faq-tone); opacity:.5; transition:opacity .3s ease;
  }
  .bc-accordion__item.is-open .bc-accordion__num,
  .bc-accordion__item:hover .bc-accordion__num{ opacity:1; }
  .bc-accordion__icon{
    flex-shrink:0; display:flex; align-items:center; justify-content:center; width:34px; height:34px;
    border-radius:999px; border:1.5px solid rgba(42,1,17,.16); color:var(--bc-wine);
    transition:transform .4s cubic-bezier(.16,1,.3,1), background-color .3s ease, border-color .3s ease, color .3s ease;
  }
  .bc-accordion__icon svg{ width:16px; height:16px; }
  .bc-accordion__icon-v{ transition:opacity .3s ease, transform .3s cubic-bezier(.16,1,.3,1); transform-origin:center; }
  .bc-accordion__item.is-open .bc-accordion__icon{ background:var(--bc-faq-tone); border-color:var(--bc-faq-tone); color:#fff; transform:rotate(180deg); }
  .bc-accordion__item.is-open .bc-accordion__icon-v{ opacity:0; transform:scaleY(0); }
  .bc-accordion__panel{ max-height:0; overflow:hidden; transition:max-height .5s cubic-bezier(.16,1,.3,1); }
  .bc-accordion__item.is-open .bc-accordion__panel{ max-height:280px; }
  .bc-accordion__answer{ padding-bottom:1.5rem; padding-right:2.5rem; font-size:15px; line-height:1.7; color:rgba(42,1,17,.72); }

  @media (max-width:640px){
    .bc-compare__row{ grid-template-columns:0.9fr 1fr 1fr; font-size:0.85rem; padding:0.85rem 1rem; }
  }

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger,.bc-mask-word span,
    .bc-fade-in-0,.bc-fade-in-2,.bc-fade-in-3,.bc-btn,.bc-tilt,.bc-parallax,.bc-wipe__img,
    .bc-breathe,.bc-compare__head-label--win,.bc-compare__win-badge,.bc-compare__icon,.bc-compare__yes::after,
    .bc-process-track::before,.bc-process-step__ring-fill,.bc-process-step__num,.bc-process-step__card{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important; clip-path:none!important;
    }
    .bc-process-step__ring-fill{ stroke-dashoffset:0!important; }
    .bc-includes-ribbon__track{ animation:none!important; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    const revealItems = document.querySelectorAll(".bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger,.bc-wipe");
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("bc-reveal-stagger") ? (idx % 4) * 80 : 0;
          setTimeout(() => entry.target.classList.add("is-visible"), delay);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealItems.forEach((item) => revealObserver.observe(item));

    /* ---------- Tilt cards ---------- */
    document.querySelectorAll(".bc-tilt").forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const r = card.getBoundingClientRect();
        const px = (e.clientX - r.left) / r.width - 0.5;
        const py = (e.clientY - r.top) / r.height - 0.5;
        card.style.transform = `perspective(700px) rotateX(${(-py * 5).toFixed(2)}deg) rotateY(${(px * 5).toFixed(2)}deg)`;
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

    /* ---------- FAQ accordion ---------- */
    document.querySelectorAll(".js-bc-accordion-trigger").forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const item = trigger.closest(".bc-accordion__item");
        const wasOpen = item.classList.contains("is-open");
        document.querySelectorAll(".bc-accordion__item").forEach((el) => el.classList.remove("is-open"));
        if (!wasOpen) item.classList.add("is-open");
      });
    });
  });
</script>

<?php get_footer(); ?>