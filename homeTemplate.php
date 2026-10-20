<?php
/**
 * Template Name: Home Template
 *
 * BC Landscaping & Hardscape, Homepage
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-home bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS, todas las rutas relativas desde /wp-content/...
    // ------------------------------------------------------------
    $hero_video = '/wp-content/uploads/2026/07/HeroPanel.mp4';
    $isotipo    = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';

    // Estampados (line-art wine), motivo decorativo recurrente de la marca
    $swirl_a = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b = '/wp-content/uploads/2026/07/Graficos-10.png';
    $swirl_c = '/wp-content/uploads/2026/07/Graficos-11.png';

    // Iconos ilustrados del manual, se recolorean vía CSS mask
    $icon_arboles    = '/wp-content/uploads/2026/07/Graficos_Servicios-de-arboles-.png';
    $icon_limpieza   = '/wp-content/uploads/2026/07/Graficos_Limpieza-y-mantenimiento-de-jardines.png';
    $icon_concreto   = '/wp-content/uploads/2026/07/Graficos_Concreto.png';
    $icon_lightscape = '/wp-content/uploads/2026/07/Graficos_Lightscape.png';
    $icon_hardscape  = '/wp-content/uploads/2026/07/Graficos_Hardscape.png';

    $service_options = [
      'Xeriscaping & Desert Design', 'Grass & Turf Installation', 'Hardscaping',
      'Irrigation Systems', 'Lightscape Installation', 'Tree Services',
      'Lawn & Garden Maintenance', 'Concrete & Retaining Walls', 'Other',
    ];

    // ------------------------------------------------------------
    // ESTIMATE FORM, corto: nombre, teléfono, email, zip, servicio
    // ------------------------------------------------------------
    $render_estimate_form = function ($form_id, $variant = 'dark') use ($service_options, $swirl_b) {
      $name_id = "{$form_id}_name"; $phone_id = "{$form_id}_phone"; $email_id = "{$form_id}_email";
      $service_id = "{$form_id}_service"; $zip_id = "{$form_id}_zip"; $policy_id = "{$form_id}_policy";
      $submit_id = "{$form_id}_submit"; $success_id = "{$form_id}_success"; $error_id = "{$form_id}_error";
      ob_start(); ?>
      <div class="bc-formcard bc-formcard--<?php echo esc_attr($variant); ?> bc-tilt">
        <img src="<?php echo esc_url($swirl_b); ?>" alt="" class="bc-formcard__ornament" aria-hidden="true">
        <form
          id="<?php echo esc_attr($form_id); ?>"
          class="bc-estimate-form js-bc-email-form"
          method="post" action="#"
          data-success-id="<?php echo esc_attr($success_id); ?>"
          data-error-id="<?php echo esc_attr($error_id); ?>"
          data-policy-id="<?php echo esc_attr($policy_id); ?>"
          data-submit-id="<?php echo esc_attr($submit_id); ?>"
        >
          <p class="bc-estimate-form__eyebrow">Request a Free Estimate</p>
          <h3 class="bc-estimate-form__title">Tell us about your property.</h3>
          <p class="bc-estimate-form__trust">15+ Years in Arizona &middot; HOA-Approved &middot; 100% Satisfaction Guaranteed</p>

          <div class="bc-estimate-form__grid">
            <div class="bc-estimate-form__field">
              <label for="<?php echo esc_attr($name_id); ?>">Full Name *</label>
              <input id="<?php echo esc_attr($name_id); ?>" type="text" name="full_name" placeholder="Your full name" required>
            </div>
            <div class="bc-estimate-form__field">
              <label for="<?php echo esc_attr($phone_id); ?>">Phone Number *</label>
              <input id="<?php echo esc_attr($phone_id); ?>" type="tel" name="phone" placeholder="(480) 229-4950" required>
            </div>
            <div class="bc-estimate-form__field">
              <label for="<?php echo esc_attr($email_id); ?>">Email Address *</label>
              <input id="<?php echo esc_attr($email_id); ?>" type="email" name="email" placeholder="you@example.com" required>
            </div>
            <div class="bc-estimate-form__field">
              <label for="<?php echo esc_attr($zip_id); ?>">Property ZIP *</label>
              <input id="<?php echo esc_attr($zip_id); ?>" type="text" name="zip" placeholder="85268" inputmode="numeric" maxlength="5" required>
            </div>
            <div class="bc-estimate-form__field bc-estimate-form__field--full">
              <label for="<?php echo esc_attr($service_id); ?>">Service Needed *</label>
              <select id="<?php echo esc_attr($service_id); ?>" name="service" required>
                <option value="">Select a service</option>
                <?php foreach ($service_options as $option) : ?>
                  <option value="<?php echo esc_attr($option); ?>"><?php echo esc_html($option); ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <p class="bc-estimate-form__micro">We'll review your request and reach out within 24&ndash;48 hours.</p>

          <div id="<?php echo esc_attr($success_id); ?>" class="bc-form-message bc-form-message--success" aria-live="polite"></div>
          <div id="<?php echo esc_attr($error_id); ?>" class="bc-form-message bc-form-message--error" aria-live="polite"></div>

          <label class="bc-estimate-form__check">
            <input id="<?php echo esc_attr($policy_id); ?>" type="checkbox" required>
            <span>I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-and-conditions">Terms &amp; Conditions</a>.</span>
          </label>

          <button id="<?php echo esc_attr($submit_id); ?>" type="submit" class="bc-btn bc-btn-green bc-magnetic bc-estimate-form__submit">
            <span>Get My Free Estimate</span>
          </button>
        </form>
      </div>
      <?php
      return ob_get_clean();
    };

    // ------------------------------------------------------------
    // SERVICIO ESTRELLA + resto de servicios (rail horizontal)
    // ------------------------------------------------------------
    $xeriscaping = [
      'title' => 'Xeriscaping &amp; Desert Design',
      'copy'  => 'Native, water-wise landscapes that cut your water bill and stay HOA-compliant. It&rsquo;s the specialty BC was built on, desert-smart beauty that thrives through Arizona&rsquo;s harshest summers.',
      'link'  => '/services/xeriscaping-desert-design',
      'image' => '/wp-content/uploads/2026/07/IMAGE-P2-Backyard-remodel-in-Tempe-Az-Grading-turf-and-gravel-19.jpg',
    ];

    $more_services = [
      ['title' => 'Grass &amp; Turf', 'copy' => 'Natural and synthetic turf engineered for Arizona heat.', 'link' => '/services/grass-and-turf-installation', 'image' => '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-5.webp', 'icon' => null, 'tone' => '#BCBF60'],
      ['title' => 'Hardscaping', 'copy' => 'Pavers, patios, and walkways built to live in.', 'link' => '/services/hardscaping', 'image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp', 'icon' => $icon_hardscape, 'tone' => '#8B0333'],
      ['title' => 'Irrigation Systems', 'copy' => 'Efficient design, install, and repair that cut waste.', 'link' => '/services/irrigation-systems', 'image' => '/wp-content/uploads/2026/07/Irrigation-Systems.webp', 'icon' => null, 'tone' => '#84CAC9'],
      ['title' => 'Lightscape', 'copy' => 'Premium LED lighting for patios, paths, and gardens.', 'link' => '/services/lightscape-installation', 'image' => '/wp-content/uploads/2026/07/Lightscape-installation.webp', 'icon' => $icon_lightscape, 'tone' => '#117682'],
      ['title' => 'Tree Services', 'copy' => 'Pruning, removal, and planting that protect curb appeal.', 'link' => '/services/tree-services', 'image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-6.webp', 'icon' => $icon_arboles, 'tone' => '#117682'],
      ['title' => 'Lawn &amp; Garden', 'copy' => 'Scheduled care that keeps every yard inspection-ready.', 'link' => '/services/lawn-and-garden-maintenance', 'image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-27.jpg', 'icon' => $icon_limpieza, 'tone' => '#BCBF60'],
      ['title' => 'Concrete &amp; Walls', 'copy' => 'Durable structures that manage drainage and last for years.', 'link' => '/services/concrete-and-retaining-walls', 'image' => '/wp-content/uploads/2026/07/Retaining-Walls.webp', 'icon' => $icon_concreto, 'tone' => '#8B0333'],
    ];

    $stats = [
      ['to' => 15, 'suffix' => '+', 'label' => 'Years in Arizona'],
      ['to' => 8,  'suffix' => '',  'label' => 'Services In-House'],
      ['to' => 5,  'suffix' => '',  'label' => 'Premium Service Areas'],
    ];

    $pillars = [
      ['title' => 'One Partner, Zero Coordination', 'copy' => 'Landscaping, hardscaping, irrigation, lighting, trees, and maintenance, all handled by one accountable team.'],
      ['title' => 'HOA Peace of Mind', 'copy' => 'We understand HOA regulations and city ordinances, so your property stays compliant and fine-free.'],
      ['title' => 'Desert-Smart Savings', 'copy' => 'Xeriscaping and efficient irrigation lower your water bill without sacrificing beauty.'],
      ['title' => '15+ Years, In-House Crew', 'copy' => 'A real company with history, a face, and a reputation earned one HOA at a time.'],
    ];

    $projects = [
      ['image' => '/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg', 'title' => 'Backyard Remodel', 'tag' => 'Xeriscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp', 'title' => 'Backyard Remodel, Peoria AZ', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P6-Front-yard-removed-sod-and-installed-turf-9.jpg', 'title' => 'Front Yard Turf Conversion', 'tag' => 'Turf'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-5.jpg', 'title' => 'Full Yard Clean-Up', 'tag' => 'Maintenance'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-BA-5-2.webp', 'title' => 'Backyard Remodel', 'tag' => 'Hardscaping'],
      ['image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-26.webp', 'title' => 'Yard Clean-Up &amp; Turf', 'tag' => 'Grass &amp; Turf'],
    ];

    $maps_link = function ($city) {
      return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($city . ', AZ');
    };
    $areas = [
      ['title' => 'Goodyear', 'copy' => 'Flawless curb appeal and HOA compliance: xeriscaping, front-yard lighting, routine maintenance.', 'link' => $maps_link('Goodyear'), 'image' => '/wp-content/uploads/2026/07/IMAGE-P9-Yard-clean-up-27.jpg', 'tone' => '#117682'],
      ['title' => 'Waddell', 'copy' => 'The backyard becomes the place everyone gathers: pavers, synthetic turf, lighting, irrigation.', 'link' => $maps_link('Waddell'), 'image' => '/wp-content/uploads/2026/07/IMAGE-P4-Ficus-columns-and-turf-11.webp', 'tone' => '#8B0333'],
      ['title' => 'Fountain Hills', 'copy' => 'Low-maintenance, high-impact desert landscaping with luxury lighting and certified tree care.', 'link' => $maps_link('Fountain Hills'), 'image' => '/wp-content/uploads/2026/07/Lightscape-installation.webp', 'tone' => '#BCBF60'],
      ['title' => 'Rio Verde', 'copy' => 'All-inclusive peace of mind, smart irrigation and full-service, prestige maintenance.', 'link' => $maps_link('Rio Verde'), 'image' => '/wp-content/uploads/2026/07/Irrigation-Systems.webp', 'tone' => '#84CAC9'],
      ['title' => 'Scottsdale', 'copy' => 'High-end desert-smart design and dependable maintenance to Scottsdale&rsquo;s standards.', 'link' => $maps_link('Scottsdale'), 'image' => '/wp-content/uploads/2026/07/IMAGE-BA-5-2.webp', 'tone' => '#117682'],
    ];

    $faqs = [
      ['q' => 'Do you work with HOAs and follow community guidelines?', 'a' => 'Yes. We specialize in HOA-compliant landscaping, ensuring every project meets community standards and design requirements while maintaining a premium look.'],
      ['q' => 'Do you offer eco-friendly, water-efficient options?', 'a' => 'Absolutely. Xeriscaping, native plant design, and efficient irrigation are core to how we build, aligned with Arizona&rsquo;s climate and water rules.'],
      ['q' => 'Can you handle landscaping and hardscaping under one contract?', 'a' => 'Yes. Landscaping, hardscaping, irrigation, lighting, and maintenance are delivered by one in-house team, no juggling contractors.'],
      ['q' => 'Which areas do you serve?', 'a' => 'Phoenix, Scottsdale, Paradise Valley, Tempe, Mesa, Gilbert, Goodyear, Waddell, Fountain Hills, Rio Verde, and surrounding communities.'],
      ['q' => 'Do you offer long-term maintenance contracts?', 'a' => 'Yes. Scheduled maintenance plans give homeowners and HOAs ongoing compliance assurance and reliable, worry-free care.'],
    ];
  ?>

  <!-- ============================================================ -->
  <!-- HERO                                                          -->
  <!-- ============================================================ -->
  <section class="bc-hero relative min-h-[760px] w-full overflow-hidden lg:min-h-[880px]">
    <video class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline poster="<?php echo esc_url($projects[0]['image']); ?>">
      <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
    </video>

    <div class="absolute inset-0 bg-[radial-gradient(120%_120%_at_15%_15%,rgba(42,1,17,0.35)_0%,rgba(42,1,17,0.82)_58%,rgba(42,1,17,0.94)_100%)]"></div>

    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-hero-swirl bc-parallax pointer-events-none absolute -right-20 top-10 h-[520px] w-[520px]" data-speed="0.15">

    <svg class="bc-hero-edge absolute -bottom-1 left-0 w-full" viewBox="0 0 1440 90" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,90 L0,40 C360,90 1080,0 1440,50 L1440,90 Z" fill="#E6DACF"></path>
    </svg>

    <div class="relative z-10 mx-auto grid min-h-[760px] max-w-7xl gap-10 px-4 py-20 lg:min-h-[880px] lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:gap-14">
      <div class="text-center lg:text-left">

        <p class="bc-fade-in-0 bc-hero-badge inline-flex items-center gap-2 text-xs font-black uppercase tracking-[0.28em] text-[#BCBF60]">
          <span class="bc-hero-badge__dot"></span>Quality with Purpose
        </p>

        <h1 class="mt-5 text-4xl font-black leading-[1.05] tracking-[-0.03em] text-white md:text-6xl">
          <?php
            $hero_words = explode(' ', 'Desert-Smart Landscaping That Protects Your Home and Your Peace of Mind');
            foreach ($hero_words as $i => $word) : ?>
              <span class="bc-word"><span class="bc-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
            <?php endforeach; ?>
        </h1>

        <p class="bc-fade-in-2 mt-6 max-w-2xl text-base leading-7 text-white/85 md:text-lg lg:max-w-xl">
          For 15+ years, Maricopa&rsquo;s finest communities have trusted BC Landscaping &amp; Hardscape for
          HOA-compliant, water-wise outdoor spaces, designed, built, and maintained by one team. Backed by
          a satisfaction guarantee, with 100% quality artificial turf and expert irrigation systems built to last.
        </p>

        <div class="bc-fade-in-3 bc-cursor-glow mt-10 flex flex-col gap-4 sm:flex-row lg:justify-start">
          <a href="/estimate" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get a Free Estimate</span></a>
          <a href="/projects" class="bc-btn bc-btn-outline bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"><span>See Our Work</span></a>
        </div>

        <div class="bc-fade-in-4 mt-8 inline-flex flex-wrap items-center gap-4 lg:justify-start">
          <a href="tel:+14802294950" class="inline-flex items-center gap-2 text-sm font-bold text-white/90">
            <span class="bc-pulse-dot inline-block h-2 w-2 rounded-full bg-[#BCBF60]"></span>
            Call (480) 229-4950
          </a>
          <span class="bc-hero-chip">★★★★★ <strong>4.9</strong> Google Rating</span>
        </div>
      </div>

      <div class="bc-fade-in-3">
        <?php echo $render_estimate_form('bc-home-hero-form', 'dark'); ?>
      </div>
    </div>

    <div class="bc-scroll-cue absolute bottom-10 left-1/2 -translate-x-1/2 text-white/70">
      <span class="bc-scroll-cue__line"></span>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- TRUST MARQUEE                                                 -->
  <!-- ============================================================ -->
  <section class="bc-marquee relative bg-[#E6DACF]">
    <svg class="bc-marquee-edge absolute -top-px left-0 w-full" viewBox="0 0 1440 24" preserveAspectRatio="none" aria-hidden="true">
      <path d="M0,0 C480,22 960,2 1440,18 L1440,0 Z" fill="#E6DACF"></path>
    </svg>

    <div class="bc-marquee__track">
      <?php for ($i = 0; $i < 2; $i++) :
        $trust = [
          ['15+ Years in Arizona', '#117682'], ['HOA-Approved', '#BCBF60'], ['100% Satisfaction Guaranteed', '#8B0333'],
          ['A+ BBB Rated', '#117682'], ['In-House Crew &amp; Equipment', '#BCBF60'], ['Xeriscaping Specialists', '#8B0333'],
        ]; ?>
        <div class="bc-marquee__group" <?php echo $i === 1 ? 'aria-hidden="true"' : ''; ?>>
          <?php foreach ($trust as $t) : ?>
            <span class="bc-marquee__item"><span class="bc-marquee__dot" style="background: <?php echo esc_attr($t[1]); ?>;"></span><?php echo $t[0]; ?></span>
          <?php endforeach; ?>
        </div>
      <?php endfor; ?>
    </div>

    <span class="bc-marquee__base" aria-hidden="true"></span>
  </section>

  <!-- ============================================================ -->
  <!-- ONE TRUSTED PARTNER + STATS                                   -->
  <!-- ============================================================ -->
  <section class="bc-pattern-section relative overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <div class="bc-pattern-section__texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-swirl-draw pointer-events-none absolute -left-28 top-10 h-[420px] w-[420px]" style="--bc-mask:url('<?php echo esc_url($swirl_a); ?>'); filter: none;">

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.88fr_1.12fr] lg:items-start">
        <div class="bc-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Why Homeowners Choose BC</p>
          <h2 class="mt-5 max-w-[11ch] text-3xl font-black leading-[0.98] tracking-[-0.03em] text-[#2A0111] md:text-5xl">
            One Trusted Partner for Your Entire Outdoor Space
          </h2>
        </div>

        <div class="bc-reveal-right grid gap-8 sm:grid-cols-[1fr_auto] sm:items-start">
          <div>
            <p class="text-base leading-8 text-[#2A0111]/80">
              You shouldn&rsquo;t have to juggle contractors or worry about an HOA notice. BC Landscaping &amp;
              Hardscape handles it all in-house: xeriscaping, hardscaping, irrigation, lighting, trees, and
              maintenance, so your property stays compliant, beautiful, and worth more, season after season.
            </p>
            <a href="/about-us" class="mt-6 inline-flex items-center gap-2 border-b-2 border-[#117682] pb-1 text-sm font-black uppercase tracking-[0.12em] text-[#117682] transition hover:gap-3">
              Learn Our Story <span>&rarr;</span>
            </a>
          </div>

          <div class="bc-partner-collage mx-auto sm:mx-0">
            <span class="bc-partner-collage__block" aria-hidden="true"></span>
            <div class="bc-partner-collage__main">
              <img src="/wp-content/uploads/2026/07/IMAGE-BA-4-2.jpg" alt="BC Landscaping & Hardscape completed project" class="h-full w-full object-cover">
            </div>
            <span class="bc-signature-pop absolute -left-3 top-4 z-10 rounded-[6px] bg-[#117682] px-3 py-1 text-[10px] font-black uppercase leading-tight tracking-[0.06em] text-white shadow-lg">Artificial Turf 100%</span>
            <div class="bc-partner-collage__badge">
              <img src="<?php echo esc_url($isotipo); ?>" alt="BC Landscaping & Hardscape">
              <span>15+ yrs</span>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-16 grid gap-0 sm:grid-cols-3 bc-stat-row">
        <?php
          $stat_tones = ['#117682', '#8B0333', '#BCBF60'];
          $stat_icons_img = [$icon_hardscape, $icon_arboles, $icon_limpieza];
          foreach ($stats as $i => $stat) : ?>
          <div class="bc-reveal-stagger bc-stat-card" style="--bc-stat-tone:<?php echo esc_attr($stat_tones[$i]); ?>;">
            <span class="bc-stat-card__icon" style="background-color: <?php echo esc_attr($stat_tones[$i]); ?>1a;">
              <span class="bc-icon-mask h-5 w-5" style="--bc-icon:url('<?php echo esc_url($stat_icons_img[$i]); ?>'); background-color: <?php echo esc_attr($stat_tones[$i]); ?>;"></span>
            </span>
            <div class="bc-stat-card__num">
              <span class="bc-count" style="color: <?php echo esc_attr($stat_tones[$i]); ?>;" data-count-to="<?php echo (int) $stat['to']; ?>">0</span><span style="color: <?php echo esc_attr($stat_tones[$i]); ?>;"><?php echo esc_html($stat['suffix']); ?></span>
            </div>
            <p class="bc-stat-card__label"><?php echo esc_html($stat['label']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- SERVICES, feature + rail horizontal                          -->
  <!-- ============================================================ -->
  <section id="services" class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-28 -top-20 h-[420px] w-[420px] opacity-[0.05]" data-speed="0.08">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -bottom-16 -left-16 h-[260px] w-[260px] opacity-[0.05]" data-speed="-0.06">

    <div class="relative mx-auto max-w-7xl px-4">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">Our Services</p>
      <h2 class="bc-reveal-up mt-5 max-w-2xl text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">
        Complete Outdoor Solutions, One Trusted Team
      </h2>

      <!-- Feature: Xeriscaping -->
      <div class="mt-14 grid gap-10 lg:grid-cols-2 lg:items-center">
        <div class="bc-wipe bc-reveal-left group relative aspect-[4/3] overflow-hidden rounded-[10px]">
          <img src="<?php echo esc_url($xeriscaping['image']); ?>" alt="Xeriscaping and desert-smart design, BC Landscaping & Hardscape" class="bc-wipe__img h-full w-full object-cover transition duration-700 group-hover:scale-[1.06]" loading="lazy">
          <span class="bc-signature-pop absolute left-4 top-4 rounded-[6px] bg-[#BCBF60] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-[#2A0111]">Signature</span>
        </div>
        <div class="bc-reveal-right">
          <h3 class="text-2xl font-black tracking-[-0.02em] text-[#2A0111] md:text-3xl"><?php echo $xeriscaping['title']; ?></h3>
          <p class="mt-4 text-base leading-7 text-[#2A0111]/75"><?php echo $xeriscaping['copy']; ?></p>
          <a href="<?php echo esc_url($xeriscaping['link']); ?>" class="mt-6 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#117682] transition hover:gap-3">
            Explore Desert-Smart Design <span>&rarr;</span>
          </a>
        </div>
      </div>

      <!-- Rail: resto de servicios, carrusel dinámico -->
      <div class="mt-16 flex items-center justify-between gap-4">
        <h4 class="text-sm font-black uppercase tracking-[0.16em] text-[#2A0111]/60">More Services</h4>
        <div class="flex items-center gap-2">
          <button type="button" class="js-bc-rail-prev bc-rail-nav" data-rail="services" aria-label="Previous services">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
          </button>
          <button type="button" class="js-bc-rail-next bc-rail-nav" data-rail="services" aria-label="Next services">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="js-bc-rail-viewport bc-services-marquee mt-6" data-rail="services">
      <div class="js-bc-rail-track bc-services-marquee__track">
        <?php for ($r = 0; $r < 2; $r++) : ?>
          <?php foreach ($more_services as $service) : ?>
            <article class="bc-rail__card bc-tilt group relative shrink-0 overflow-hidden rounded-[8px] border border-[#2A0111]/10 bg-[#E6DACF]/40" <?php echo $r === 1 ? 'aria-hidden="true"' : ''; ?>>
              <a href="<?php echo esc_url($service['link']); ?>" class="block">
                <div class="bc-wipe relative h-[190px] overflow-hidden">
                  <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($service['title'])); ?>, BC Landscaping & Hardscape" class="bc-wipe__img h-full w-full object-cover transition duration-700 group-hover:scale-[1.06]" loading="lazy">
                  <?php if (!empty($service['icon'])) : ?>
                    <span class="bc-icon-mask absolute bottom-3 right-3 h-9 w-9" style="--bc-icon:url('<?php echo esc_url($service['icon']); ?>'); --bc-icon-color: <?php echo esc_attr($service['tone']); ?>; background-color:#fff;"></span>
                  <?php endif; ?>
                </div>
                <div class="p-5">
                  <h3 class="text-base font-black tracking-[-0.01em] text-[#2A0111]"><?php echo $service['title']; ?></h3>
                  <p class="mt-2 text-[13px] leading-5 text-[#2A0111]/70"><?php echo $service['copy']; ?></p>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>

    <div class="mx-auto mt-4 max-w-7xl px-4">
      <div class="bc-rail-progress">
        <span class="js-bc-rail-progress-fill bc-rail-progress__fill" data-rail="services"></span>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- TESTIMONIAL                                                   -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-swirl-draw pointer-events-none absolute left-1/2 top-8 h-[260px] w-[260px] -translate-x-1/2 rotate-180 opacity-30">

    <div class="relative mx-auto max-w-6xl px-4 text-center">
      <div class="bc-reveal-up">
        <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-testimonial-mark mx-auto h-14 w-auto">
        <div class="mt-4 flex items-center justify-center gap-2 text-xs font-black uppercase tracking-[0.16em] text-[#8B0333]">
          <span>What Our Clients Say</span>
        </div>
        <div class="bc-trustindex-widget mt-6">
          <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
        </div>

        <a href="https://share.google/zZ0sZSDsEjN143mQX" target="_blank" rel="noopener noreferrer" class="bc-btn bc-btn-dark bc-magnetic mt-10 inline-flex items-center justify-center gap-2 px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 6.35 6.98.7-5.24 4.73 1.53 6.85L12 17.77l-6.17 3.36 1.53-6.85L2.12 9.55l6.98-.7L12 2.5z"/></svg>
          <span>Leave a Review</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- WHY CHOOSE US                                                 -->
  <!-- ============================================================ -->
  <section class="relative bg-[#8B0333] py-20 text-white lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="bc-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#84CAC9]">Why Choose Us</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">Compliance, Craftsmanship, and Lasting Value</h2>
      </div>

      <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <?php
          $pillar_icons = [$icon_hardscape, $icon_concreto, $icon_lightscape, $icon_arboles];
          $pillar_tones = ['#117682', '#2A0111', '#BCBF60', '#84CAC9'];
          foreach ($pillars as $idx => $pillar) :
            $tone = $pillar_tones[$idx % 4];
        ?>
          <article class="bc-pillar-card bc-tilt bc-reveal-stagger relative overflow-hidden p-6" style="--bc-pillar-tone: <?php echo esc_attr($tone); ?>;">
            <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-pillar-card__mark pointer-events-none absolute -bottom-6 -right-6 h-32 w-32">

            <div class="relative z-10 flex items-center justify-between">
              <span class="bc-pillar-card__badge" style="background: <?php echo esc_attr($tone); ?>1a; border-color: <?php echo esc_attr($tone); ?>55;">
                <span class="bc-icon-mask h-6 w-6" style="--bc-icon:url('<?php echo esc_url($pillar_icons[$idx % 4]); ?>'); background-color: <?php echo esc_attr($tone); ?>;"></span>
              </span>
              <span class="bc-pillar-card__num" style="color: <?php echo esc_attr($tone); ?>;"><?php echo str_pad($idx + 1, 2, '0', STR_PAD_LEFT); ?></span>
            </div>

            <h3 class="relative z-10 mt-5 text-lg font-black tracking-[-0.02em]"><?php echo esc_html($pillar['title']); ?></h3>
            <p class="relative z-10 mt-3 text-[14px] leading-7 text-white/76"><?php echo esc_html($pillar['copy']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- REAL PROJECTS, carrusel                                      -->
  <!-- ============================================================ -->
  <section class="overflow-hidden bg-[#E6DACF] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="bc-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">Real Projects</p>
          <h2 class="mt-3 text-3xl font-black tracking-[-0.03em] text-[#2A0111] md:text-5xl">Real Yards. Real Results.</h2>
        </div>
        <p class="bc-reveal-right max-w-xl text-sm leading-7 text-[#2A0111]/70 md:text-right">No stock photos. Every image is a BC Landscaping &amp; Hardscape project across the Phoenix metro.</p>
      </div>

      <div class="mt-8 flex items-center justify-end gap-2">
        <button type="button" class="js-bc-rail-prev bc-rail-nav" data-rail="projects" aria-label="Previous projects">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button type="button" class="js-bc-rail-next bc-rail-nav" data-rail="projects" aria-label="Next projects">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>

    <div class="js-bc-rail-viewport bc-projects-rail mt-6" data-rail="projects">
      <div class="js-bc-rail-track bc-projects-rail__track">
        <?php for ($r = 0; $r < 2; $r++) : ?>
          <?php foreach ($projects as $project) : ?>
            <figure class="bc-wipe bc-tilt bc-projects-rail__card group relative shrink-0 overflow-hidden rounded-[10px] border border-[#2A0111]/10 bg-white shadow-[0_14px_34px_rgba(42,1,17,0.06)]" <?php echo $r === 1 ? 'aria-hidden="true"' : ''; ?>>
              <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>, BC Landscaping & Hardscape" class="bc-wipe__img h-full w-full rounded-[10px] object-cover transition duration-700 group-hover:scale-105" loading="lazy">
              <figcaption class="absolute inset-x-0 bottom-0 translate-y-full rounded-b-[10px] bg-[#2A0111]/85 px-4 py-3 text-white transition duration-500 group-hover:translate-y-0">
                <span class="text-[10px] font-black uppercase tracking-[0.14em] text-[#BCBF60]"><?php echo $project['tag']; ?></span>
                <p class="text-sm font-bold"><?php echo $project['title']; ?></p>
              </figcaption>
            </figure>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>

    <div class="mx-auto mt-4 max-w-7xl px-4">
      <div class="bc-rail-progress">
        <span class="js-bc-rail-progress-fill bc-rail-progress__fill" data-rail="projects"></span>
      </div>
    </div>

    <div class="mx-auto mt-8 max-w-7xl px-4 text-center">
      <a href="/projects" class="bc-btn bc-btn-dark bc-magnetic inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"><span>View All Projects &rarr;</span></a>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- SERVICE AREAS, lista interactiva con panel                   -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden border-y border-[#2A0111]/10 bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_c); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-24 -bottom-24 h-[380px] w-[380px] opacity-[0.05]" data-speed="0.07">

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="bc-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Service Areas</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Serving Maricopa County&rsquo;s Most Valued Communities</h2>
      </div>

      <div class="js-bc-areas mt-14 grid gap-2 lg:grid-cols-[1fr_1.1fr] lg:gap-10">
        <div class="flex flex-col divide-y divide-[#2A0111]/10 border-y border-[#2A0111]/10">
          <?php foreach ($areas as $idx => $area) : ?>
            <button
              type="button"
              class="js-bc-area-trigger bc-reveal-stagger group relative flex items-center justify-between gap-4 py-6 pl-6 text-left transition <?php echo $idx === 0 ? 'is-active' : ''; ?>"
              data-image="<?php echo esc_url($area['image']); ?>"
              data-tone="<?php echo esc_attr($area['tone']); ?>"
              data-title="<?php echo esc_attr($area['title']); ?>"
              data-link="<?php echo esc_url($area['link']); ?>"
              style="--bc-area-tone: <?php echo esc_attr($area['tone']); ?>;"
            >
              <div>
                <span class="bc-area-trigger__num"><?php echo esc_html(str_pad((string) ($idx + 1), 2, '0', STR_PAD_LEFT)); ?></span>
                <h3 class="mt-1 text-xl font-black tracking-[-0.02em] text-[#2A0111] transition group-[.is-active]:text-[#117682] md:text-2xl"><?php echo esc_html($area['title']); ?></h3>
                <p class="mt-2 max-w-md text-sm leading-6 text-[#2A0111]/65"><?php echo $area['copy']; ?></p>
              </div>
              <a href="<?php echo esc_url($area['link']); ?>" target="_blank" rel="noopener noreferrer" class="shrink-0 text-xl text-[#117682] transition group-hover:translate-x-1">&rarr;</a>
            </button>
          <?php endforeach; ?>
        </div>

        <div class="bc-area-panel relative hidden overflow-hidden lg:block" style="--bc-area-tone: <?php echo esc_attr($areas[0]['tone']); ?>;">
          <?php foreach ($areas as $idx => $area) : ?>
            <img src="<?php echo esc_url($area['image']); ?>" alt="BC Landscaping & Hardscape service area photo" class="bc-area-panel__img absolute inset-0 h-full w-full object-cover transition-opacity duration-700 <?php echo $idx === 0 ? 'opacity-100' : 'opacity-0'; ?>" loading="lazy">
          <?php endforeach; ?>
          <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(42,1,17,0.08)_0%,rgba(42,1,17,0.15)_55%,rgba(42,1,17,0.72)_100%)]"></div>
          <span class="bc-area-panel__corner bc-area-panel__corner--tl" aria-hidden="true"></span>
          <span class="bc-area-panel__corner bc-area-panel__corner--br" aria-hidden="true"></span>
          <span class="bc-area-panel__seal">
            <img src="<?php echo esc_url($isotipo); ?>" alt="">
          </span>
          <div class="bc-area-panel__info">
            <div>
              <span class="bc-area-panel__eyebrow">Now Viewing</span>
              <span class="js-bc-area-panel-title bc-area-panel__title"><?php echo esc_html($areas[0]['title']); ?></span>
            </div>
            <a href="<?php echo esc_url($areas[0]['link']); ?>" target="_blank" rel="noopener noreferrer" class="js-bc-area-panel-link bc-area-panel__link">Explore Area <span>&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- OUR STORY                                                     -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-[#E6DACF] py-20 text-[#2A0111] lg:py-24">
    <img src="<?php echo esc_url($swirl_c); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -bottom-24 -right-24 h-[420px] w-[420px] opacity-[0.08]" data-speed="0.1">

    <div class="relative z-10 mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[1fr_1fr] lg:items-center">
      <div class="bc-wipe bc-reveal-left order-2 relative overflow-hidden rounded-[10px] lg:order-1">
        <img src="/wp-content/uploads/2026/07/IMAGE-P1-Backyard-remodel-in-Peoria-Az-40.webp" alt="BC Landscaping & Hardscape completed backyard remodel" class="bc-wipe__img h-full w-full object-cover" loading="lazy">
      </div>

      <div class="bc-reveal-right order-1 lg:order-2">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Our Story</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">Built on Hard Work, Roots, and a Promise of Quality</h2>
        <p class="mt-6 max-w-xl text-base leading-8 text-[#2A0111]/75">
          BC Landscaping &amp; Hardscape was founded by Oscar after years of mastering the craft for others , 
          and a determination to deliver the highest standard of professionalism, with pride. More than 15
          years later, that promise still drives every project: real craftsmanship, an in-house team you can
          count on, and outdoor spaces built to last. That&rsquo;s what Quality with Purpose means to us.
        </p>
        <a href="/about-us" class="bc-btn bc-btn-green bc-magnetic mt-8 inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Read Our Full Story</span></a>
      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FAQ, acordeón                                                -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-24 top-10 h-[360px] w-[360px] opacity-[0.05]" data-speed="0.06">

    <div class="relative mx-auto max-w-4xl px-4">
      <div class="bc-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">FAQs</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Common Questions</h2>
      </div>

      <div class="js-bc-accordion mt-12 space-y-4">
        <?php foreach ($faqs as $i => $faq) :
          $faq_tone = ['#117682', '#8B0333', '#BCBF60', '#84CAC9'][$i % 4];
        ?>
          <div class="bc-accordion__item bc-reveal-stagger" style="--bc-faq-tone: <?php echo esc_attr($faq_tone); ?>;">
            <button type="button" class="js-bc-accordion-trigger flex w-full cursor-pointer items-center gap-5 py-6 text-left">
              <span class="bc-accordion__num"><?php echo esc_html(str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT)); ?></span>
              <span class="flex-1 text-base font-black tracking-[-0.01em] text-[#2A0111] md:text-lg"><?php echo esc_html($faq['q']); ?></span>
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
  <section class="bc-final-cta relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -left-20 -top-20 h-[380px] w-[380px] opacity-[0.12]" data-speed="0.2">

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
      <div class="lg:max-w-xl">
        <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Get Started</p>
        <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">Ready for an Outdoor Space You Never Have to Worry About?</h2>
        <p class="bc-reveal-up mt-6 max-w-xl text-base leading-8 text-white/80">Get a free, no-pressure estimate from the team Maricopa trusts for compliant, water-wise, lasting landscaping.</p>
        <div class="bc-reveal-up mt-8 flex flex-wrap items-center gap-3">
          <a href="tel:+14802294950" class="bc-btn bc-btn-outline bc-magnetic inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"><span>Call (480) 229-4950</span></a>
          <a href="mailto:info@bclandscapingaz.com" class="text-sm font-bold text-white/75 underline underline-offset-4">info@bclandscapingaz.com</a>
        </div>
      </div>
      <div class="bc-reveal-right"><?php echo $render_estimate_form('bc-home-final-form', 'dark'); ?></div>
    </div>
  </section>

</main>

<style>
  /* ================================================================
     FONTS, Brandon Grotesque (títulos/cuerpo) + Museo Slab (acentos)
     Ajustá la ruta base si tus .otf viven en otra carpeta del theme.
     ================================================================ */
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_thin.otf') format('opentype'); font-weight: 100; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_light.otf') format('opentype'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_reg.otf') format('opentype'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_med.otf') format('opentype'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_bld.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Brandon'; src: url('/wp-content/uploads/2026/07/fonts/Brandon_blk.otf') format('opentype'); font-weight: 900; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Museo Slab'; src: url('/wp-content/uploads/2026/07/fonts/Museo_Slab_700.otf') format('opentype'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'BC Museo Slab'; src: url('/wp-content/uploads/2026/07/fonts/Museo_Slab_700italic.otf') format('opentype'); font-weight: 700; font-style: italic; font-display: swap; }

  .bc-home {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-home h1,.bc-home h2,.bc-home h3,.bc-home h4{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }
  .bc-home blockquote{ font-family:'BC Museo Slab',Georgia,serif; }

  /* ---- Hero: capas con profundidad real ---- */
  .bc-hero-swirl{ opacity:.22; mix-blend-mode:soft-light; animation:bcSwirlDrift 34s linear infinite; }
  @keyframes bcSwirlDrift{ from{ transform:rotate(0deg);} to{ transform:rotate(360deg);} }

  .bc-hero-edge{ height:74px; z-index:5; }
  @media (min-width:1024px){ .bc-hero-edge{ height:94px; } }

  .bc-hero-badge{ position:relative; padding-left:0; }
  .bc-hero-badge__dot{ display:inline-block; width:6px; height:6px; border-radius:999px; background:var(--bc-green); box-shadow:0 0 0 4px rgba(188,191,96,.18); }

  .bc-hero-chip{
    display:inline-flex; align-items:center; gap:.4rem; font-size:.72rem; font-weight:800;
    letter-spacing:.04em; color:#fff; padding:.45rem .9rem; border:1px solid rgba(255,255,255,.22);
    background:rgba(255,255,255,.08); backdrop-filter:blur(6px); border-radius:999px;
  }

  /* ---- Marquee: continúa el gesto de la curva del hero, sin línea dura ---- */
  .bc-marquee{ overflow:hidden; padding-top:14px; }
  .bc-marquee-edge{ height:22px; z-index:2; }
  .bc-marquee__track{ position:relative; z-index:1; display:flex; width:max-content; animation:bcMarquee 26s linear infinite; }
  .bc-marquee__group{ display:flex; align-items:center; flex-shrink:0; gap:1.75rem; padding:.4rem 2rem 1.1rem; }
  .bc-marquee__item{ display:inline-flex; align-items:center; gap:.85rem; white-space:nowrap; font-size:.9rem; font-weight:800; color:var(--bc-wine); }
  .bc-marquee__dot{ display:inline-block; width:10px; height:10px; border-radius:50%; flex:0 0 auto; }
  .bc-marquee:hover .bc-marquee__track{ animation-play-state:paused; }
  .bc-marquee__base{
    position:absolute; left:0; right:0; bottom:0; height:1px;
    background:linear-gradient(90deg, transparent, rgba(42,1,17,.14) 20%, rgba(42,1,17,.14) 80%, transparent);
  }
  @keyframes bcMarquee{ 0%{ transform:translateX(0);} 100%{ transform:translateX(-50%);} }

  @media (max-width:768px){ .bc-marquee__group{ gap:1.25rem; padding:.4rem 1.25rem 1.1rem; } .bc-marquee__item{ font-size:.8rem; } }

  /* ---- Patterned section, textura diagonal anclada al viewport (no se mueve al scrollear) ---- */
  .bc-pattern-section{ position:relative; }
  .bc-pattern-section__texture{
    position:absolute; inset:0; pointer-events:none; z-index:0;
    background-image: repeating-linear-gradient(45deg, rgba(42,1,17,0.055) 0, rgba(42,1,17,0.055) 1.5px, transparent 1.5px, transparent 16px);
    background-attachment: fixed;
  }

  /* ---- Collage de foto: corrige el "seal" roto y le da profundidad real ---- */
  .bc-partner-collage{ position:relative; width:190px; height:230px; flex-shrink:0; }
  .bc-partner-collage__block{
    position:absolute; top:18px; left:18px; width:100%; height:100%; border-radius:8px;
    background:var(--bc-teal); opacity:.9; z-index:0;
  }
  .bc-partner-collage__main{
    position:absolute; top:0; left:0; width:170px; height:210px; overflow:hidden; border-radius:8px;
    z-index:1; box-shadow:0 20px 44px rgba(42,1,17,.22);
  }
  .bc-partner-collage__badge{
    position:absolute; bottom:-16px; right:-16px; z-index:2; display:flex; flex-direction:column;
    align-items:center; gap:.15rem; width:68px; height:68px; border-radius:999px; background:var(--bc-wine);
    box-shadow:0 10px 24px rgba(42,1,17,.3); border:3px solid #E6DACF;
  }
  .bc-partner-collage__badge img{ height:16px; width:auto; filter:brightness(0) invert(1); margin-top:10px; }
  .bc-partner-collage__badge span{ font-size:.55rem; font-weight:800; color:var(--bc-green); letter-spacing:.02em; }

  /* ---- Stat row: tarjetas unidas con divisores, no cajas sueltas ---- */
  .bc-stat-row{ border:1px solid rgba(42,1,17,.1); border-radius:8px; overflow:hidden; background:#fff; box-shadow:0 14px 32px rgba(42,1,17,.06); }
  .bc-stat-card{
    position:relative; z-index:1; padding:2rem 1.75rem; border-right:1px solid rgba(42,1,17,.08);
    transition:background-color .3s ease;
  }
  .bc-stat-card:last-child{ border-right:none; }
  .bc-stat-card::before{
    content:""; position:absolute; top:0; left:0; width:3px; height:0; background:var(--bc-stat-tone);
    transition:height .4s cubic-bezier(.16,1,.3,1);
  }
  .bc-stat-card:hover::before{ height:100%; }
  .bc-stat-card:hover{ background:rgba(42,1,17,.015); }
  .bc-stat-card__icon{ display:inline-flex; align-items:center; justify-content:center; width:40px; height:40px; border-radius:999px; margin-bottom:1rem; }
  .bc-stat-card__num{ font-size:2.75rem; font-weight:900; letter-spacing:-0.03em; line-height:1; }
  .bc-stat-card__label{ margin-top:.5rem; font-size:.8rem; font-weight:800; text-transform:uppercase; letter-spacing:.1em; color:rgba(42,1,17,.6); }

  @media (max-width:640px){
    .bc-stat-card{ border-right:none; border-bottom:1px solid rgba(42,1,17,.08); }
    .bc-stat-card:last-child{ border-bottom:none; }
  }

  /* ---- Icon mask (recolorea los Graficos_*.png con mask-image) ---- */
  .bc-icon-mask{
    -webkit-mask-image: var(--bc-icon); mask-image: var(--bc-icon);
    -webkit-mask-size: contain; mask-size: contain;
    -webkit-mask-repeat: no-repeat; mask-repeat: no-repeat;
    -webkit-mask-position: center; mask-position: center;
    border-radius: 999px; padding: 6px;
  }

  /* ---- Hero word-reveal ---- */
  .bc-word{ display:inline-block; overflow:hidden; vertical-align:top; }
  .bc-word__inner{
    display:inline-block; transform:translateY(115%); opacity:0;
    animation: bcWordUp .9s cubic-bezier(.16,1,.3,1) forwards;
    animation-delay: calc(var(--i) * 70ms + 200ms);
  }
  @keyframes bcWordUp{ to{ transform:translateY(0); opacity:1; } }

  .bc-fade-in-0,.bc-fade-in-2,.bc-fade-in-3,.bc-fade-in-4{ opacity:0; transform:translateY(18px); animation: bcFadeUp .9s cubic-bezier(.16,1,.3,1) forwards; }
  .bc-fade-in-0{ animation-delay:.1s; } .bc-fade-in-2{ animation-delay:1.1s; }
  .bc-fade-in-3{ animation-delay:1.3s; } .bc-fade-in-4{ animation-delay:1.5s; }
  @keyframes bcFadeUp{ to{ opacity:1; transform:translateY(0); } }

  .bc-pulse-dot{ animation: bcPulse 2s ease-in-out infinite; }
  @keyframes bcPulse{ 0%,100%{ box-shadow:0 0 0 0 rgba(188,191,96,.55);} 50%{ box-shadow:0 0 0 6px rgba(188,191,96,0);} }

  .bc-scroll-cue{ opacity:.8; }
  .bc-scroll-cue__line{ display:block; width:1px; height:38px; background:linear-gradient(180deg,rgba(255,255,255,.9),rgba(255,255,255,0)); animation:bcScrollCue 1.8s ease-in-out infinite; }
  @keyframes bcScrollCue{ 0%{ transform:translateY(-6px); opacity:0;} 40%{ opacity:1;} 100%{ transform:translateY(18px); opacity:0;} }

  /* ---- Buttons ---- */
  .bc-btn{ position:relative; border:1px solid transparent; border-radius:8px; transition:box-shadow .25s ease,background-color .25s ease,color .25s ease; overflow:hidden; }
  .bc-btn span{ position:relative; z-index:1; }
  .bc-btn-green{ background:var(--bc-green); color:var(--bc-wine); box-shadow:0 16px 34px rgba(188,191,96,.28); }
  .bc-btn-green:hover{ background:#a9ac52; }
  .bc-btn-dark{ background:var(--bc-wine); border-color:var(--bc-wine); box-shadow:0 16px 34px rgba(42,1,17,.24); }
  .bc-btn-dark:hover{ background:var(--bc-burgundy); border-color:var(--bc-burgundy); }
  .bc-btn-outline{ background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.28); backdrop-filter:blur(6px); }
  .bc-btn-outline:hover{ background:#fff; color:var(--bc-wine); }
  .bc-magnetic{ will-change:transform; transition:transform .25s cubic-bezier(.16,1,.3,1); }

  /* ---- Reveal on scroll ---- */
  .bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-left{ transform:translateX(-46px); }
  .bc-reveal-right{ transform:translateX(46px); } .bc-reveal-stagger{ transform:translateY(32px); }
  .bc-reveal-up.is-visible,.bc-reveal-left.is-visible,.bc-reveal-right.is-visible,.bc-reveal-stagger.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }

  /* ---- Swirl decorative draw-in ---- */
  .bc-swirl-draw{ opacity:0; transform:scale(.8) rotate(-8deg); filter:blur(4px); transition:opacity 1.4s cubic-bezier(.16,1,.3,1),transform 1.4s cubic-bezier(.16,1,.3,1),filter 1.4s cubic-bezier(.16,1,.3,1); }
  .bc-swirl-draw.is-visible{ opacity:.22; transform:scale(1) rotate(0deg); filter:blur(0); }

  /* ---- Image wipe reveal ---- */
  .bc-wipe{ position:relative; }
  .bc-wipe__img{ clip-path:inset(0 100% 0 0); transform:scale(1.14); transition:clip-path 1.15s cubic-bezier(.65,0,.35,1) .05s, transform 1.4s cubic-bezier(.16,1,.3,1); }
  .bc-wipe.is-visible .bc-wipe__img{ clip-path:inset(0 0 0 0); transform:scale(1.02); }

  /* ---- Count up ---- */
  .bc-count{ font-variant-numeric:tabular-nums; }

  /* ---- Tilt cards ---- */
  .bc-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  /* ---- Why Choose Us pillar cards, mucho más carácter ---- */
  .bc-pillar-card{
    background: linear-gradient(160deg, rgba(255,255,255,.09) 0%, rgba(255,255,255,.03) 100%);
    border: 1px solid rgba(255,255,255,.12); border-radius:8px;
    transition: border-color .35s ease, box-shadow .35s ease, transform .35s cubic-bezier(.16,1,.3,1);
  }
  .bc-pillar-card:hover{
    border-color: var(--bc-pillar-tone);
    box-shadow: 0 22px 46px rgba(0,0,0,.32), 0 0 0 1px var(--bc-pillar-tone) inset;
  }
  .bc-pillar-card__mark{ opacity:.16; filter:brightness(0) invert(1); transform:rotate(-8deg); transition:opacity .5s ease, transform .6s cubic-bezier(.16,1,.3,1); }
  .bc-pillar-card:hover .bc-pillar-card__mark{ opacity:.28; transform:rotate(0deg) scale(1.08); }
  .bc-pillar-card__badge{
    display:inline-flex; align-items:center; justify-content:center; width:44px; height:44px;
    border-radius:999px; border:1px solid; transition:transform .4s cubic-bezier(.16,1,.3,1);
  }
  .bc-pillar-card:hover .bc-pillar-card__badge{ transform:scale(1.1) rotate(-6deg); }
  .bc-pillar-card__num{ font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:1.4rem; opacity:.7; }

  /* ---- Services auto-marquee → carrusel dinámico (drag + flechas + progreso) ---- */
  .bc-services-marquee{ overflow:hidden; cursor:grab; }
  .bc-services-marquee.is-dragging{ cursor:grabbing; }
  .bc-services-marquee__track{ display:flex; width:max-content; gap:1.25rem; padding:0 1rem .5rem; will-change:transform; }
  .bc-rail__card{ width:260px; user-select:none; }
  .bc-rail__card img{ -webkit-user-drag:none; }
  .bc-rail-nav{
    display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; flex-shrink:0;
    border:1px solid rgba(42,1,17,.18); border-radius:8px; color:var(--bc-wine); background:#fff; cursor:pointer;
    transition:background-color .25s ease, color .25s ease, transform .2s ease;
  }
  .bc-rail-nav svg{ width:16px; height:16px; }
  .bc-rail-nav:hover{ background:var(--bc-wine); color:#fff; }
  .bc-rail-nav:active{ transform:scale(.92); }
  .js-bc-rail-next.bc-rail-nav{ animation:bcRailNudge 2.6s ease-in-out .8s infinite; }
  .js-bc-rail-next.bc-rail-nav:hover{ animation-play-state:paused; }
  @keyframes bcRailNudge{ 0%,100%{ transform:translateX(0); } 50%{ transform:translateX(4px); } }
  .bc-rail-progress{ height:3px; width:100%; max-width:260px; background:rgba(42,1,17,.1); overflow:hidden; }
  .bc-rail-progress__fill{ display:block; height:100%; width:30%; background:linear-gradient(90deg,var(--bc-teal),var(--bc-green)); transition:transform .1s linear; transform-origin:left; }

  /* ---- Real Projects carrusel ---- */
  .bc-projects-rail{ overflow:hidden; cursor:grab; }
  .bc-projects-rail.is-dragging{ cursor:grabbing; }
  .bc-projects-rail__track{ display:flex; width:max-content; gap:1.5rem; padding:0 1rem .5rem; will-change:transform; }
  .bc-projects-rail__card{ width:300px; height:380px; user-select:none; }
  .bc-projects-rail__card img{ -webkit-user-drag:none; }
  @media (max-width:640px){ .bc-projects-rail__card{ width:250px; height:320px; } }

  /* ---- Dot texture + badge pop (Our Services) ---- */
  .bc-dot-texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image: radial-gradient(rgba(42,1,17,0.05) 1px, transparent 1px);
    background-size: 22px 22px;
  }
  .bc-signature-pop{ opacity:0; transform:scale(.6) rotate(-8deg); animation:bcSignaturePop .6s cubic-bezier(.34,1.56,.64,1) .5s forwards; }
  @keyframes bcSignaturePop{ to{ opacity:1; transform:scale(1) rotate(0deg); } }

  /* ---- Service areas list, barra + número por ciudad ---- */
  .js-bc-area-trigger{ position:relative; cursor:pointer; background:none; border:none; width:100%; }
  .js-bc-area-trigger.is-active{ background:linear-gradient(90deg,color-mix(in srgb, var(--bc-area-tone) 10%, transparent),transparent); }
  .bc-area-trigger__num{
    display:inline-block; font-family:'BC Museo Slab',Georgia,serif; font-weight:700; font-size:.7rem;
    color:var(--bc-area-tone); opacity:.65; transition:opacity .3s ease, transform .3s cubic-bezier(.16,1,.3,1);
  }
  .js-bc-area-trigger:hover .bc-area-trigger__num{ transform:scale(1.25) translateX(-2px); }
  .js-bc-area-trigger.is-active .bc-area-trigger__num,
  .js-bc-area-trigger:hover .bc-area-trigger__num{ opacity:1; }

  /* ---- Service areas panel, marco pro, sello, info dinámica ---- */
  .bc-area-panel{ min-height:520px; border:1px solid rgba(42,1,17,.1); border-radius:8px; box-shadow:0 26px 54px rgba(42,1,17,.14); }
  .bc-area-panel__corner{ position:absolute; z-index:3; width:30px; height:30px; pointer-events:none; opacity:.8; }
  .bc-area-panel__corner--tl{ top:20px; left:20px; border-top:2px solid rgba(255,255,255,.8); border-left:2px solid rgba(255,255,255,.8); }
  .bc-area-panel__corner--br{ bottom:108px; right:20px; border-bottom:2px solid rgba(255,255,255,.8); border-right:2px solid rgba(255,255,255,.8); }
  .bc-area-panel__seal{
    position:absolute; top:20px; right:20px; z-index:3; width:46px; height:46px; border-radius:999px;
    background:rgba(255,255,255,.14); border:1px solid rgba(255,255,255,.4); backdrop-filter:blur(6px);
    display:flex; align-items:center; justify-content:center;
  }
  .bc-area-panel__seal img{ width:20px; height:auto; filter:brightness(0) invert(1); opacity:.9; }
  .bc-area-panel__info{
    position:absolute; left:0; right:0; bottom:0; z-index:3;
    display:flex; align-items:flex-end; justify-content:space-between; gap:1rem;
    padding:1.85rem 2rem; border-top:1px solid rgba(255,255,255,.14);
  }
  .bc-area-panel__eyebrow{ display:block; font-size:.65rem; font-weight:800; text-transform:uppercase; letter-spacing:.18em; color:var(--bc-area-tone); }
  .bc-area-panel__title{
    display:block; margin-top:.4rem; font-family:'BC Museo Slab',Georgia,serif; font-weight:700;
    font-size:1.65rem; color:#fff; letter-spacing:-0.01em;
  }
  .bc-area-panel__link{
    display:inline-flex; align-items:center; gap:.45rem; flex-shrink:0; padding-bottom:.3rem;
    font-size:.72rem; font-weight:800; text-transform:uppercase; letter-spacing:.1em; color:#fff;
    text-decoration:none; border-bottom:1px solid rgba(255,255,255,.4); transition:gap .25s ease, border-color .25s ease;
  }
  .bc-area-panel__link:hover{ gap:.7rem; border-color:var(--bc-area-tone); }

  /* ---- Accordion, cards con número, ícono +/− y tono por pregunta ---- */
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
  .bc-accordion__answer{ padding-bottom:1.75rem; padding-right:2.5rem; font-size:15px; line-height:1.7; color:rgba(42,1,17,.72); }

  /* ---- Testimonial brand mark ---- */
  .bc-testimonial-mark{ opacity:0; transform:scale(.6) rotate(-6deg); animation:bcMarkPop .7s cubic-bezier(.34,1.56,.64,1) forwards; animation-delay:.15s; }
  @keyframes bcMarkPop{ to{ opacity:1; transform:scale(1) rotate(0deg); } }

  /* ---- Trustindex widget: ancho completo para garantizar las 3 reviews ---- */
  .bc-trustindex-widget{ max-width:100%; margin-left:auto; margin-right:auto; }

  /* ---- Estimate form card ---- */
  .bc-formcard{ position:relative; overflow:hidden; }
  .bc-formcard__ornament{ position:absolute; top:-40px; right:-40px; width:180px; height:180px; opacity:.15; transform:rotate(20deg); pointer-events:none; }
  .bc-estimate-form{ position:relative; border:1px solid rgba(255,255,255,.14); border-radius:8px; background:rgba(255,255,255,.08); box-shadow:0 24px 60px rgba(0,0,0,.20); padding:1.5rem; border-top:3px solid var(--bc-green); }
  .bc-estimate-form__eyebrow{ margin:0; font-size:.68rem; font-weight:800; letter-spacing:.16em; text-transform:uppercase; color:rgba(255,255,255,.72); }
  .bc-estimate-form__title{ margin:.5rem 0 0; font-size:1.3rem; font-weight:800; line-height:1.1; letter-spacing:-.02em; color:#fff; }
  .bc-estimate-form__trust{ margin-top:.6rem; margin-bottom:1rem; font-size:.68rem; font-weight:800; letter-spacing:.1em; text-transform:uppercase; color:var(--bc-green); }
  .bc-estimate-form__grid{ display:grid; gap:.9rem; grid-template-columns:1fr; }
  .bc-estimate-form__field{ display:grid; gap:.4rem; } .bc-estimate-form__field--full{ grid-column:1/-1; }
  .bc-estimate-form__field label{ font-size:.7rem; font-weight:800; letter-spacing:.08em; text-transform:uppercase; color:rgba(255,255,255,.78); }
  .bc-estimate-form__field input,.bc-estimate-form__field select{ width:100%; min-height:50px; border:1px solid rgba(255,255,255,.16); border-radius:8px; background:rgba(255,255,255,.08); padding:.9rem 1rem; font-size:.95rem; color:#fff; outline:none; transition:border-color .2s ease,background-color .2s ease,box-shadow .2s ease; }
  .bc-estimate-form__field input::placeholder{ color:rgba(255,255,255,.55); }
  .bc-estimate-form__field input:focus,.bc-estimate-form__field select:focus{ border-color:var(--bc-green); box-shadow:0 0 0 3px rgba(188,191,96,.22); background:rgba(255,255,255,.12); }
  .bc-estimate-form__field select option{ color:#2A0111; }
  .bc-estimate-form__micro{ font-size:.74rem; line-height:1.6; color:rgba(255,255,255,.62); margin-top:.9rem; }
  .bc-form-message{ display:none; margin-top:.75rem; padding:.9rem 1rem; border:1px solid transparent; border-radius:8px; font-size:.82rem; line-height:1.6; }
  .bc-form-message.is-visible{ display:block; }
  .bc-form-message--success{ background:rgba(188,191,96,.14); border-color:rgba(188,191,96,.30); color:#eef0d8; }
  .bc-form-message--error{ background:rgba(180,55,55,.14); border-color:rgba(180,55,55,.28); color:#ffd7d7; }
  .js-bc-recaptcha{ margin-top:1rem; }
  .bc-estimate-form__check{ display:flex; gap:.7rem; margin-top:1rem; font-size:.76rem; line-height:1.6; color:rgba(255,255,255,.76); }
  .bc-estimate-form__check input{ margin-top:.15rem; accent-color:var(--bc-green); }
  .bc-estimate-form__check a{ color:var(--bc-mist); text-decoration:underline; }
  .bc-estimate-form__submit{ width:100%; margin-top:1rem; min-height:54px; }
  .bc-estimate-form__submit[disabled]{ cursor:not-allowed; opacity:.75; }

  @media (min-width:768px){ .bc-estimate-form__grid{ grid-template-columns:1fr 1fr; } }

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger,.bc-swirl-draw,.bc-wipe__img,
    .bc-word__inner,.bc-fade-in-0,.bc-fade-in-2,.bc-fade-in-3,.bc-fade-in-4,.bc-btn,.bc-marquee__track,
    .bc-pulse-dot,.bc-scroll-cue__line,.bc-testimonial-mark,.bc-tilt{ opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important; clip-path:none!important; }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Le1SIstAAAAAMpvWWIvOsnq4Jj488h6SmhTffRe"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    const revealItems = document.querySelectorAll(".bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-reveal-stagger,.bc-swirl-draw,.bc-wipe");
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("bc-reveal-stagger") ? (idx % 6) * 70 : 0;
          setTimeout(() => entry.target.classList.add("is-visible"), delay);
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
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

    /* ---------- Rails (Services + Projects): auto-scroll + drag + flechas + progreso ---------- */
    function initRail(railId) {
      const viewport = document.querySelector('.js-bc-rail-viewport[data-rail="' + railId + '"]');
      const track = viewport ? viewport.querySelector(".js-bc-rail-track") : null;
      const progressFill = document.querySelector('.js-bc-rail-progress-fill[data-rail="' + railId + '"]');
      const prevBtn = document.querySelector('.js-bc-rail-prev[data-rail="' + railId + '"]');
      const nextBtn = document.querySelector('.js-bc-rail-next[data-rail="' + railId + '"]');
      if (!viewport || !track) return;

      const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
      let loopWidth = track.scrollWidth / 2;
      let pos = 0;
      let autoSpeed = reducedMotion ? 0 : 0.4;
      let dragging = false;
      let dragStartX = 0;
      let dragStartPos = 0;
      let resumeTimer = null;

      function recalc() { loopWidth = track.scrollWidth / 2; }
      window.addEventListener("resize", recalc);

      function applyTransform() {
        if (pos <= -loopWidth) pos += loopWidth;
        if (pos > 0) pos -= loopWidth;
        track.style.transform = `translateX(${pos}px)`;
        if (progressFill) {
          const pct = Math.min(100, (Math.abs(pos) / loopWidth) * 100 + 6);
          progressFill.style.transform = `scaleX(${pct / 100})`;
        }
      }

      function tick() {
        if (!dragging) pos -= autoSpeed;
        applyTransform();
        requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);

      function pauseThenResume() {
        autoSpeed = 0;
        if (resumeTimer) clearTimeout(resumeTimer);
        resumeTimer = setTimeout(() => { autoSpeed = reducedMotion ? 0 : 0.4; }, 2200);
      }

      prevBtn?.addEventListener("click", () => {
        pos += 280;
        pauseThenResume();
      });
      nextBtn?.addEventListener("click", () => {
        pos -= 280;
        pauseThenResume();
      });

      viewport.addEventListener("pointerdown", (e) => {
        dragging = true;
        dragStartX = e.clientX;
        dragStartPos = pos;
        viewport.classList.add("is-dragging");
        viewport.setPointerCapture(e.pointerId);
      });
      viewport.addEventListener("pointermove", (e) => {
        if (!dragging) return;
        pos = dragStartPos + (e.clientX - dragStartX);
      });
      function endDrag() {
        if (!dragging) return;
        dragging = false;
        viewport.classList.remove("is-dragging");
        pauseThenResume();
      }
      viewport.addEventListener("pointerup", endDrag);
      viewport.addEventListener("pointerleave", endDrag);
      viewport.addEventListener("mouseenter", pauseThenResume);
    }
    initRail("services");
    initRail("projects");

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

    /* ---------- Service areas interactive panel ---------- */
    const areaTriggers = document.querySelectorAll(".js-bc-area-trigger");
    const areaImages = document.querySelectorAll(".bc-area-panel__img");
    const areaPanel = document.querySelector(".bc-area-panel");
    const areaPanelTitle = document.querySelector(".js-bc-area-panel-title");
    const areaPanelLink = document.querySelector(".js-bc-area-panel-link");
    areaTriggers.forEach((trigger, idx) => {
      trigger.addEventListener("mouseenter", () => {
        areaTriggers.forEach((t) => t.classList.remove("is-active"));
        trigger.classList.add("is-active");
        areaImages.forEach((img, i) => img.style.opacity = i === idx ? "1" : "0");
        if (areaPanel) areaPanel.style.setProperty("--bc-area-tone", trigger.dataset.tone);
        if (areaPanelTitle) areaPanelTitle.textContent = trigger.dataset.title;
        if (areaPanelLink) areaPanelLink.href = trigger.dataset.link;
      });
      trigger.addEventListener("focus", () => trigger.dispatchEvent(new Event("mouseenter")));
    });

    /* ---------- FAQ accordion ---------- */
    document.querySelectorAll(".js-bc-accordion-trigger").forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const item = trigger.closest(".bc-accordion__item");
        const wasOpen = item.classList.contains("is-open");
        document.querySelectorAll(".bc-accordion__item").forEach((el) => el.classList.remove("is-open"));
        if (!wasOpen) item.classList.add("is-open");
      });
    });

    /* ---------- Estimate forms: validation + EmailJS ---------- */
    const BC_EMAILJS_SERVICE_ID = "service_g0f8bxk";
    const BC_EMAILJS_TEMPLATE_ID = "template_vjswkmr";
    const BC_EMAILJS_AUTOREPLY_TEMPLATE_ID = "template_8omszme";
    const BC_RECAPTCHA_SITE_KEY = "6Le1SIstAAAAAMpvWWIvOsnq4Jj488h6SmhTffRe";

    if (window.emailjs) emailjs.init({ publicKey: "jouOOfXfhaIpXnqML" });

    document.querySelectorAll(".js-bc-email-form").forEach((form) => {
      const successBox = document.getElementById(form.dataset.successId);
      const errorBox = document.getElementById(form.dataset.errorId);
      const policyCheck = document.getElementById(form.dataset.policyId);
      const submitBtn = document.getElementById(form.dataset.submitId);
      if (!successBox || !errorBox || !policyCheck || !submitBtn) return;

      const resetMessages = () => { [successBox, errorBox].forEach((b) => { b.textContent = ""; b.classList.remove("is-visible"); }); };
      const showSuccess = (msg) => { successBox.textContent = msg; successBox.classList.add("is-visible"); };
      const showError = (msg) => { errorBox.textContent = msg; errorBox.classList.add("is-visible"); };

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        resetMessages();
        if (!policyCheck.checked) return showError("Please accept the Privacy Policy and Terms & Conditions before submitting.");
        if (typeof grecaptcha === "undefined") return showError("reCAPTCHA failed to load. Please refresh the page and try again.");

        submitBtn.disabled = true;
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = "<span>Sending...</span>";

        const restoreBtn = () => { submitBtn.disabled = false; submitBtn.innerHTML = originalText; };

        grecaptcha.ready(function () {
          grecaptcha.execute(BC_RECAPTCHA_SITE_KEY, { action: "submit" }).then(function (captchaResponse) {
            const formData = {
              name: form.querySelector('input[name="full_name"]').value.trim(),
              phone: form.querySelector('input[name="phone"]').value.trim(),
              email: form.querySelector('input[name="email"]').value.trim(),
              zip: form.querySelector('input[name="zip"]').value.trim(),
              service: form.querySelector('select[name="service"]').value,
              "g-recaptcha-response": captchaResponse
            };

            Promise.all([
              emailjs.send(BC_EMAILJS_SERVICE_ID, BC_EMAILJS_TEMPLATE_ID, formData),
              emailjs.send(BC_EMAILJS_SERVICE_ID, BC_EMAILJS_AUTOREPLY_TEMPLATE_ID, formData)
            ])
              .then(() => { form.reset(); showSuccess("Thank you. Your request has been sent successfully. We'll be in touch soon."); })
              .catch(() => showError("Something went wrong while sending your request. Please try again."))
              .finally(restoreBtn);
          }).catch(() => {
            showError("reCAPTCHA verification failed. Please try again.");
            restoreBtn();
          });
        });
      });
    });
  });
</script>

<?php get_footer(); ?>