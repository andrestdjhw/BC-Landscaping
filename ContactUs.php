<?php
/**
 * Template Name: Contact Us Template
 *
 * BC Landscaping & Hardscape - Contact Us
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="bc-contact bg-[#E6DACF] text-[#2A0111] overflow-hidden">

  <?php
    // ------------------------------------------------------------
    // ASSETS
    // ------------------------------------------------------------
    $isotipo    = '/wp-content/uploads/2026/07/BC_Isotipo-scaled.png';
    $swirl_a    = '/wp-content/uploads/2026/07/Graficos-09.png';
    $swirl_b    = '/wp-content/uploads/2026/07/Graficos-10.png';
    $swirl_c    = '/wp-content/uploads/2026/07/Graficos-11.png';
    $hero_image = '/wp-content/uploads/2026/07/IMAGE-BA-5-2.webp';

    $maps_link = 'https://www.google.com/maps/search/?api=1&query=9410+N+31st+Ave,+Phoenix,+AZ+85051';

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
  <section class="relative min-h-[420px] w-full overflow-hidden lg:min-h-[480px]">
    <img src="<?php echo esc_url($hero_image); ?>" alt="BC Landscaping & Hardscape completed project" class="absolute inset-0 h-full w-full object-cover bc-hero-kb">
    <div class="absolute inset-0 bg-[#2A0111]/78"></div>
    <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-20 -top-10 h-[380px] w-[380px] opacity-[0.12]" data-speed="0.14">

    <div class="relative z-10 mx-auto flex min-h-[420px] max-w-4xl flex-col items-center justify-center px-4 py-20 text-center lg:min-h-[480px]">
      <p class="bc-fade-in-0 text-xs font-black uppercase tracking-[0.28em] text-[#BCBF60]">Contact Us</p>
      <h1 class="mt-5 text-4xl font-black leading-[1.05] tracking-[-0.03em] text-white md:text-5xl">
        <?php
          $hero_words = explode(' ', "Let's Build Something Exceptional Together");
          foreach ($hero_words as $i => $word) : ?>
            <span class="bc-word"><span class="bc-word__inner" style="--i:<?php echo (int) $i; ?>"><?php echo esc_html($word); ?></span></span><?php echo ' '; ?>
          <?php endforeach; ?>
      </h1>
      <p class="bc-fade-in-2 mt-6 max-w-xl text-base leading-7 text-white/85">
        Get in touch with our team for questions, scheduling, or expert guidance on your landscaping
        and hardscaping needs.
      </p>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FORM + INFO PANEL                                             -->
  <!-- ============================================================ -->
  <section class="bc-pattern-section relative px-4 pb-20 lg:pb-28">
    <div class="bc-pattern-section__texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_c); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-28 top-10 h-[420px] w-[420px] opacity-[0.06]" data-speed="0.1">

    <div class="bc-contact-grid relative mx-auto -mt-16 max-w-6xl md:-mt-20">

      <!-- Form card -->
      <div class="bc-reveal-left bc-tilt bc-contact-card">
        <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-contact-card__mark">
        <p class="relative z-10 text-xs font-black uppercase tracking-[0.22em] text-[#117682]">Send a Message</p>
        <h2 class="relative z-10 mt-3 text-2xl font-black tracking-[-0.02em] text-[#2A0111] md:text-3xl">We&rsquo;ll Get Back to You Fast</h2>

        <form id="bc-contact-form" class="bc-float-form js-bc-email-form relative z-10 mt-8" method="post" action="#"
          data-success-id="bc-contact-success" data-error-id="bc-contact-error"
          data-policy-id="bc-contact-policy" data-submit-id="bc-contact-submit">

          <div class="bc-float-field">
            <input id="bc-contact-name" type="text" name="full_name" placeholder=" " required>
            <label for="bc-contact-name">Full Name *</label>
          </div>

          <div class="bc-float-field">
            <input id="bc-contact-phone" type="tel" name="phone" placeholder=" " required>
            <label for="bc-contact-phone">Phone Number *</label>
          </div>

          <div class="bc-float-field">
            <input id="bc-contact-email" type="email" name="email" placeholder=" " required>
            <label for="bc-contact-email">Email Address *</label>
          </div>

          <div class="bc-float-field">
            <textarea id="bc-contact-message" name="message" rows="4" placeholder=" "></textarea>
            <label for="bc-contact-message">Message</label>
          </div>

          <!-- honeypot anti-spam, mantener oculto -->
          <div class="bc-hp-field" aria-hidden="true">
            <label for="bc-contact-hp">Leave this field empty</label>
            <input id="bc-contact-hp" type="text" name="hp_name" tabindex="-1" autocomplete="off">
          </div>

          <label class="bc-float-check">
            <input id="bc-contact-policy" type="checkbox" required>
            <span>I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-and-conditions">Terms &amp; Conditions</a>.</span>
          </label>

          <div id="bc-contact-success" class="bc-form-message bc-form-message--success" aria-live="polite"></div>
          <div id="bc-contact-error" class="bc-form-message bc-form-message--error" aria-live="polite"></div>

          <button id="bc-contact-submit" type="submit" class="bc-btn bc-btn-green bc-magnetic mt-2 inline-flex w-full items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]">
            <span>Send Message</span>
          </button>
        </form>

        <p class="relative z-10 mt-5 text-center text-[13px] text-[#2A0111]/60">
          Looking for a project quote instead? <a href="/contact-us" class="font-bold text-[#117682] underline underline-offset-2">Get an Estimate &rarr;</a>
        </p>
      </div>

      <!-- Info panel -->
      <div class="bc-reveal-right flex flex-col gap-5">

        <div class="bc-tilt bc-contact-card bc-contact-card--dark">
          <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-contact-card__mark bc-contact-card__mark--light">
          <div class="relative z-10 flex items-center gap-4">
            <span class="bc-contact-info__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.46-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/></svg>
            </span>
            <div>
              <p class="text-[11px] font-black uppercase tracking-[0.14em] text-white/60">Call Us</p>
              <a href="tel:+14802294950" class="text-xl font-black tracking-[-0.01em] text-white">(480) 229-4950</a>
            </div>
          </div>
          <div class="relative z-10 mt-5 flex items-center gap-4 border-t border-white/12 pt-5">
            <span class="bc-contact-info__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3.5" y="5.5" width="17" height="13" rx="2"/><path d="m4.5 7 7.5 6 7.5-6"/></svg>
            </span>
            <div>
              <p class="text-[11px] font-black uppercase tracking-[0.14em] text-white/60">Email Us</p>
              <a href="mailto:info@bclandscapingaz.com" class="text-base font-black tracking-[-0.01em] text-white break-all">info@bclandscapingaz.com</a>
            </div>
          </div>
        </div>

        <a href="<?php echo esc_url($maps_link); ?>" target="_blank" rel="noopener noreferrer" class="bc-tilt bc-contact-card bc-contact-card--map group">
          <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="bc-contact-card__mark">
          <div class="flex items-center gap-4">
            <span class="bc-contact-info__icon bc-contact-info__icon--pin">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"/><circle cx="12" cy="9.8" r="2.4"/></svg>
            </span>
            <div>
              <p class="text-[11px] font-black uppercase tracking-[0.14em] text-[#2A0111]/55">Visit / Service Area</p>
              <p class="text-base font-black tracking-[-0.01em] text-[#2A0111]">9410 N 31st Ave<br>Phoenix, AZ 85051</p>
            </div>
          </div>
          <span class="mt-4 inline-flex items-center gap-2 text-xs font-black uppercase tracking-[0.12em] text-[#117682] transition group-hover:gap-3">
            Open in Google Maps <span>&rarr;</span>
          </span>
        </a>

        <div class="bc-tilt bc-contact-card">
            <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-contact-card__mark">
          <div class="relative z-10 flex items-center justify-between">
            <p class="text-[11px] font-black uppercase tracking-[0.14em] text-[#2A0111]/55">Business Hours</p>
            <span class="js-bc-open-status bc-open-status">
              <span class="bc-open-status__dot"></span>
              <span class="js-bc-open-status-label">Checking&hellip;</span>
            </span>
          </div>
          <div class="relative z-10 mt-3 flex items-center justify-between text-sm">
            <span class="font-bold text-[#2A0111]/75">Monday &ndash; Friday</span>
            <span class="font-black text-[#2A0111]">7:00 AM &ndash; 4:00 PM</span>
          </div>
          <div class="relative z-10 mt-2 flex items-center justify-between text-sm">
            <span class="font-bold text-[#2A0111]/75">Saturday &ndash; Sunday</span>
            <span class="font-black text-[#2A0111]/50">Closed</span>
          </div>
        </div>

        <div class="bc-tilt bc-contact-card">
          <img src="<?php echo esc_url($swirl_a); ?>" alt="" aria-hidden="true" class="bc-contact-card__mark">
          <p class="relative z-10 text-[11px] font-black uppercase tracking-[0.14em] text-[#2A0111]/55">Follow Us</p>
          <div class="relative z-10 mt-4 flex flex-wrap gap-2.5">
            <a href="https://www.facebook.com/bclandscapingandhardscape/" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="Facebook">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"/></svg>
            </a>
            <a href="https://www.instagram.com/bc_landscapingllc/" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="Instagram">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/></svg>
            </a>
            <a href="https://www.tiktok.com/@bclandscaping" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="TikTok">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M15.5 3.2c.55 1.9 1.86 3.24 3.9 3.5v2.72c-1.42.06-2.7-.4-3.9-1.24v6.4c0 3.34-2.5 5.4-5.35 5.4-2.8 0-5.35-2-5.35-5.32 0-3.3 2.7-5.3 5.35-5.3.35 0 .78.03 1.1.1v2.85a2.7 2.7 0 0 0-1.1-.22 2.5 2.5 0 0 0-2.5 2.55 2.5 2.5 0 0 0 2.5 2.55c1.42 0 2.62-1.03 2.62-2.9V3.2Z"/></svg>
            </a>
            <a href="https://www.yelp.com/biz/bc-landscaping-and-hardscape-phoenix" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="Yelp">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M11.1 3.4c-.32-.1-.66.1-.72.43L9 11.2c-.06.4.28.75.68.66l4.9-1.1c.4-.1.55-.58.28-.88-1.1-1.2-2.5-2.3-3.75-6.4Z"/><path fill="currentColor" d="M8.4 13.1c.2-.34.66-.4.94-.14l3.55 3.3c.3.28.24.76-.12.96l-4.4 2.44c-.37.2-.82-.06-.85-.48l-.3-5.4c-.02-.28.06-.5.18-.68Z"/><path fill="currentColor" d="M15.2 12.5c-.14-.35.06-.75.44-.83l5.2-1.14c.4-.1.77.27.65.66l-1.5 4.9c-.12.4-.63.5-.9.18l-3.9-3.77Z"/><path fill="currentColor" d="M13.4 14.6c.32-.16.72-.02.86.3l2.28 4.9c.17.38-.13.8-.54.75l-5.28-.6c-.4-.05-.6-.5-.38-.83l3.06-4.52Z"/></svg>
            </a>
            <a href="https://share.google/zZ0sZSDsEjN143mQX" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="Google Reviews">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"/><path fill="currentColor" d="M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"/><path fill="currentColor" d="M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"/><path fill="currentColor" d="M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"/></svg>
            </a>
            <a href="https://www.bbb.org/us/az/phoenix/profile/landscape-maintenance/bc-landscaping-hardscape-llc-1126-1000131043" target="_blank" rel="noopener noreferrer" class="bc-social-chip" aria-label="BBB Accreditation">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"/><path d="m9.2 12.1 2 2 3.6-4"/></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================ -->
  <!-- FAQ                                                           -->
  <!-- ============================================================ -->
  <section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="bc-dot-texture" aria-hidden="true"></div>
    <img src="<?php echo esc_url($swirl_b); ?>" alt="" aria-hidden="true" class="pointer-events-none absolute -left-24 bottom-0 h-[340px] w-[340px] opacity-[0.05]">
    <div class="relative mx-auto max-w-4xl px-4">
      <div class="bc-reveal-up text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#8B0333]">FAQs</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.03em] text-[#2A0111] md:text-5xl">Common Questions</h2>
      </div>

      <div class="js-bc-accordion mt-12 space-y-4">
        <?php foreach ($faqs as $i => $faq) :
          $faq_tone = ['#117682', '#8B0333', '#BCBF60', '#84CAC9'][$i % 4];
        ?>
          <div class="bc-accordion__item" style="--bc-faq-tone: <?php echo esc_attr($faq_tone); ?>;">
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
  <section class="relative isolate overflow-hidden bg-[#8B0333] py-20 text-white lg:py-24">
    <img src="<?php echo esc_url($isotipo); ?>" alt="" aria-hidden="true" class="bc-parallax pointer-events-none absolute -right-16 -top-16 h-[300px] w-[300px] opacity-[0.06]" data-speed="0.12">

    <div class="relative mx-auto max-w-3xl px-4 text-center">
      <p class="bc-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#BCBF60]">Get Started</p>
      <h2 class="bc-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.03em] md:text-5xl">
        Landscaping That Delivers Compliance, Confidence, and Lasting Value
      </h2>
      <p class="bc-reveal-up mt-6 text-base leading-8 text-white/80">
        Partner with BC Landscaping &amp; Hardscape for premium, HOA-compliant solutions designed to
        protect your property&rsquo;s value and eliminate the worry.
      </p>
      <div class="bc-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us" class="bc-btn bc-btn-green bc-magnetic inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]"><span>Get an Estimate</span></a>
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

  .bc-contact {
    --bc-wine:#2A0111; --bc-burgundy:#8B0333; --bc-green:#BCBF60;
    --bc-sandstone:#E6DACF; --bc-mist:#84CAC9; --bc-teal:#117682;
    font-family:'BC Brandon','Segoe UI',Arial,sans-serif;
  }
  .bc-contact h1,.bc-contact h2,.bc-contact h3{ font-family:'BC Brandon','Segoe UI',Arial,sans-serif; }

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
  .bc-reveal-up,.bc-reveal-left,.bc-reveal-right{ opacity:0; filter:blur(6px); will-change:opacity,transform,filter; transition:opacity 1s cubic-bezier(.16,1,.3,1),transform 1s cubic-bezier(.16,1,.3,1),filter 1s cubic-bezier(.16,1,.3,1); }
  .bc-reveal-up{ transform:translateY(40px); } .bc-reveal-left{ transform:translateX(-46px); } .bc-reveal-right{ transform:translateX(46px); }
  .bc-reveal-up.is-visible,.bc-reveal-left.is-visible,.bc-reveal-right.is-visible{ opacity:1; transform:translate(0,0); filter:blur(0); }

  .bc-parallax{ will-change:transform; }
  .bc-tilt{ transform-style:preserve-3d; transition:transform .3s cubic-bezier(.16,1,.3,1); will-change:transform; }

  /* ---- Patterned section — misma textura diagonal del resto del sitio ---- */
  .bc-pattern-section{ position:relative; }
  .bc-pattern-section__texture{
    position:absolute; inset:0; pointer-events:none; z-index:0;
    background-image: repeating-linear-gradient(45deg, rgba(42,1,17,0.05) 0, rgba(42,1,17,0.05) 1.5px, transparent 1.5px, transparent 16px);
    background-attachment: fixed;
  }

  /* ---- Dot texture (para FAQ, mismo criterio que otras páginas) ---- */
  .bc-dot-texture{
    position:absolute; inset:0; pointer-events:none; opacity:.5;
    background-image: radial-gradient(rgba(42,1,17,0.05) 1px, transparent 1px);
    background-size: 22px 22px;
  }

  /* ---- Contact grid + cards ---- */
  .bc-contact-grid{ position:relative; z-index:1; display:grid; gap:1.75rem; grid-template-columns:1fr; align-items:start; }
  @media (min-width:900px){ .bc-contact-grid{ grid-template-columns:1.2fr 1fr; } }

  .bc-contact-card{
    position:relative; display:block; overflow:hidden; background:#fff; border-radius:12px;
    border:1px solid rgba(42,1,17,0.08); box-shadow:0 24px 56px rgba(42,1,17,0.10);
    padding:2rem;
  }
  .bc-contact-card--dark{ background:var(--bc-wine); color:#fff; }
  .bc-contact-card--map{ transition:transform .3s cubic-bezier(.16,1,.3,1), box-shadow .3s ease; }
  .bc-contact-card--map:hover{ transform:translateY(-3px); box-shadow:0 30px 60px rgba(42,1,17,0.16); }
  .bc-contact-card__mark{ position:absolute; bottom:-2rem; right:-2rem; height:9rem; width:9rem; opacity:.06; pointer-events:none; z-index:0; }
  .bc-contact-card__mark--light{ opacity:.08; filter:brightness(0) invert(1); }

  .bc-contact-info__icon{
    display:inline-flex; align-items:center; justify-content:center; width:44px; height:44px; flex-shrink:0;
    border-radius:999px; background:rgba(255,255,255,0.10); color:var(--bc-green);
  }
  .bc-contact-info__icon svg{ width:20px; height:20px; }
  .bc-contact-info__icon--pin{ background:rgba(139,3,51,0.08); color:var(--bc-burgundy); }

  .bc-social-chip{
    display:inline-flex; align-items:center; justify-content:center; width:38px; height:38px; border-radius:8px;
    border:1px solid rgba(42,1,17,0.14); color:var(--bc-wine); transition:background-color .2s ease, color .2s ease, transform .2s ease;
  }
  .bc-social-chip svg{ width:17px; height:17px; }
  .bc-social-chip:hover{ background:var(--bc-teal); border-color:var(--bc-teal); color:#fff; transform:translateY(-2px); }

  /* ---- Open/Closed live status ---- */
  .bc-open-status{ display:inline-flex; align-items:center; gap:.4rem; font-size:.68rem; font-weight:900; text-transform:uppercase; letter-spacing:.08em; }
  .bc-open-status__dot{ width:8px; height:8px; border-radius:999px; background:#9aa0a6; }
  .bc-open-status.is-open .bc-open-status__dot{ background:var(--bc-green); animation:bcOpenPulse 2s ease-in-out infinite; }
  .bc-open-status.is-open{ color:#5c7a1f; }
  .bc-open-status.is-closed .bc-open-status__dot{ background:var(--bc-burgundy); }
  .bc-open-status.is-closed{ color:var(--bc-burgundy); }
  @keyframes bcOpenPulse{ 0%,100%{ box-shadow:0 0 0 0 rgba(188,191,96,.5);} 50%{ box-shadow:0 0 0 5px rgba(188,191,96,0);} }

  /* ---- Floating-label form (nuevo, propio de esta página) ---- */
  .bc-float-form{ display:flex; flex-direction:column; gap:1.4rem; }
  .bc-float-field{ position:relative; }
  .bc-float-field input,
  .bc-float-field textarea{
    width:100%; border:0; border-bottom:2px solid rgba(42,1,17,0.16); background:transparent;
    padding:0.65rem 0.1rem; font-size:0.98rem; color:var(--bc-wine); outline:none;
    transition:border-color .25s ease;
  }
  .bc-float-field textarea{ resize:vertical; min-height:90px; }
  .bc-float-field label{
    position:absolute; left:0.1rem; top:0.65rem; font-size:0.98rem; color:rgba(42,1,17,0.45);
    pointer-events:none; transition:transform .22s cubic-bezier(.16,1,.3,1), font-size .22s ease, color .22s ease;
    transform-origin:left top;
  }
  .bc-float-field input:focus,
  .bc-float-field textarea:focus{ border-color:var(--bc-teal); }
  .bc-float-field input:focus + label,
  .bc-float-field input:not(:placeholder-shown) + label,
  .bc-float-field textarea:focus + label,
  .bc-float-field textarea:not(:placeholder-shown) + label{
    transform:translateY(-1.3rem) scale(0.78); color:var(--bc-teal); font-weight:800;
  }
  .bc-hp-field{ position:absolute !important; left:-9999px; width:1px; height:1px; overflow:hidden; }
  .bc-float-check{ display:flex; gap:0.65rem; font-size:0.82rem; line-height:1.6; color:rgba(42,1,17,0.68); }
  .bc-float-check input{ margin-top:0.2rem; accent-color:var(--bc-teal); }
  .bc-float-check a{ color:var(--bc-teal); text-decoration:underline; }
  .bc-form-message{ display:none; padding:0.85rem 1rem; border:1px solid transparent; border-radius:8px; font-size:0.82rem; line-height:1.6; }
  .bc-form-message.is-visible{ display:block; }
  .bc-form-message--success{ background:rgba(188,191,96,.14); border-color:rgba(188,191,96,.32); color:#4c611c; }
  .bc-form-message--error{ background:rgba(180,55,55,.10); border-color:rgba(180,55,55,.24); color:#8b2f2f; }

  /* ---- FAQ accordion — cards con número, ícono +/− y tono por pregunta ---- */
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

  @media (prefers-reduced-motion: reduce){
    .bc-reveal-up,.bc-reveal-left,.bc-reveal-right,.bc-word__inner,.bc-fade-in-0,.bc-fade-in-2,
    .bc-btn,.bc-hero-kb,.bc-parallax,.bc-open-status__dot,.bc-float-field label,.bc-tilt{
      opacity:1!important; transform:none!important; transition:none!important; animation:none!important; filter:none!important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    /* ---------- Reveal on scroll ---------- */
    const revealItems = document.querySelectorAll(".bc-reveal-up,.bc-reveal-left,.bc-reveal-right");
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
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
        card.style.transform = `perspective(800px) rotateX(${(-py * 4).toFixed(2)}deg) rotateY(${(px * 4).toFixed(2)}deg)`;
      });
      card.addEventListener("mouseleave", () => { card.style.transform = "perspective(800px) rotateX(0) rotateY(0)"; });
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

    /* ---------- Live open/closed status ----------
       Asume horario de Arizona = hora local del visitante (mercado 100% local). */
    const statusEl = document.querySelector(".js-bc-open-status");
    const statusLabel = document.querySelector(".js-bc-open-status-label");
    if (statusEl && statusLabel) {
      const now = new Date();
      const day = now.getDay(); // 0 Sun ... 6 Sat
      const hour = now.getHours();
      const isWeekday = day >= 1 && day <= 5;
      const isDuringHours = hour >= 7 && hour < 16;
      const isOpen = isWeekday && isDuringHours;
      statusEl.classList.add(isOpen ? "is-open" : "is-closed");
      statusLabel.textContent = isOpen ? "Open Now" : "Closed Now";
    }

    /* ---------- Contact form: validation + EmailJS ---------- */
    if (window.emailjs) emailjs.init({ publicKey: "REPLACE_WITH_EMAILJS_PUBLIC_KEY" });

    const form = document.getElementById("bc-contact-form");
    if (form) {
      const successBox = document.getElementById(form.dataset.successId);
      const errorBox = document.getElementById(form.dataset.errorId);
      const policyCheck = document.getElementById(form.dataset.policyId);
      const submitBtn = document.getElementById(form.dataset.submitId);

      const resetMessages = () => { [successBox, errorBox].forEach((b) => { b.textContent = ""; b.classList.remove("is-visible"); }); };
      const showSuccess = (msg) => { successBox.textContent = msg; successBox.classList.add("is-visible"); };
      const showError = (msg) => { errorBox.textContent = msg; errorBox.classList.add("is-visible"); };

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        resetMessages();

        // honeypot: si el campo oculto viene lleno, es un bot -> cortar en silencio
        const honeypot = form.querySelector('input[name="hp_name"]');
        if (honeypot && honeypot.value) return;

        if (!policyCheck.checked) return showError("Please accept the Privacy Policy and Terms & Conditions before submitting.");

        submitBtn.disabled = true;
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = "<span>Sending...</span>";

        const formData = {
          name: form.querySelector('input[name="full_name"]').value.trim(),
          phone: form.querySelector('input[name="phone"]').value.trim(),
          email: form.querySelector('input[name="email"]').value.trim(),
          message: form.querySelector('textarea[name="message"]').value.trim(),
        };

        // Reemplazar con el service_id / template_id reales de EmailJS del cliente
        emailjs.send("REPLACE_SERVICE_ID", "REPLACE_TEMPLATE_ID", formData)
          .then(function () {
            form.reset();
            showSuccess("Thank you. Your message has been sent successfully. We'll be in touch soon.");
          })
          .catch(function () {
            showError("Something went wrong while sending your message. Please try again, or call us directly.");
          })
          .finally(function () {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          });
      });
    }
  });
</script>

<?php get_footer(); ?>