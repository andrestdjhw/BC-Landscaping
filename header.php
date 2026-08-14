<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('bc-body'); ?>>
    <?php wp_body_open(); ?>

    <header class="bc-header js-bc-header">
      <!-- Top Utility Bar -->
      <div class="bc-topbar">
        <div class="bc-shell bc-topbar__inner">
          <div class="bc-topbar__left">
            <a href="tel:+14802294950" class="bc-topbar__link">
              <span class="bc-topbar__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.46-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/>
                </svg>
              </span>
              <span>(480) 229-4950</span>
            </a>

            <a href="mailto:info@bclandscapingaz.com" class="bc-topbar__link bc-topbar__link--muted">
              <span class="bc-topbar__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                  <path d="m22 6-10 7L2 6"/>
                </svg>
              </span>
              <span>info@bclandscapingaz.com</span>
            </a>
          </div>

          <div class="bc-topbar__center">
            <a
              href="https://maps.app.goo.gl/QBHpzpkPboUburkd7"
              target="_blank"
              rel="noopener noreferrer"
              class="bc-topbar__geo"
              aria-label="View our service area on Google Maps"
            >
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M12 21s-6-5.33-6-10a6 6 0 1 1 12 0c0 4.67-6 10-6 10z"/>
                <circle cx="12" cy="11" r="2.5"/>
              </svg>
              <span>Phoenix &amp; Maricopa County</span>
            </a>
          </div>

          <div class="bc-topbar__right">
            <span class="bc-topbar__pill">HOA-Approved &middot; Licensed &amp; Insured</span>

            <div class="bc-topbar__socials" aria-label="Social media">
              <a href="https://www.facebook.com/bclandscapingandhardscape/" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="Facebook">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"/>
                </svg>
              </a>

              <a href="https://www.instagram.com/bc_landscapingllc/" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="Instagram">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                </svg>
              </a>

              <a href="https://www.tiktok.com/@bclandscaping" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="TikTok">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M15.5 3.2c.55 1.9 1.86 3.24 3.9 3.5v2.72c-1.42.06-2.7-.4-3.9-1.24v6.4c0 3.34-2.5 5.4-5.35 5.4-2.8 0-5.35-2-5.35-5.32 0-3.3 2.7-5.3 5.35-5.3.35 0 .78.03 1.1.1v2.85a2.7 2.7 0 0 0-1.1-.22 2.5 2.5 0 0 0-2.5 2.55 2.5 2.5 0 0 0 2.5 2.55c1.42 0 2.62-1.03 2.62-2.9V3.2Z"/>
                </svg>
              </a>

              <a href="https://www.yelp.com/biz/bc-landscaping-and-hardscape-phoenix" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="Yelp">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M11.1 3.4c-.32-.1-.66.1-.72.43L9 11.2c-.06.4.28.75.68.66l4.9-1.1c.4-.1.55-.58.28-.88-1.1-1.2-2.5-2.3-3.75-6.4Z"/>
                  <path fill="currentColor" d="M8.4 13.1c.2-.34.66-.4.94-.14l3.55 3.3c.3.28.24.76-.12.96l-4.4 2.44c-.37.2-.82-.06-.85-.48l-.3-5.4c-.02-.28.06-.5.18-.68Z"/>
                  <path fill="currentColor" d="M15.2 12.5c-.14-.35.06-.75.44-.83l5.2-1.14c.4-.1.77.27.65.66l-1.5 4.9c-.12.4-.63.5-.9.18l-3.9-3.77Z"/>
                  <path fill="currentColor" d="M13.4 14.6c.32-.16.72-.02.86.3l2.28 4.9c.17.38-.13.8-.54.75l-5.28-.6c-.4-.05-.6-.5-.38-.83l3.06-4.52Z"/>
                </svg>
              </a>

              <a href="https://share.google/zZ0sZSDsEjN143mQX" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="Google Reviews">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"/>
                  <path fill="currentColor" d="M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"/>
                  <path fill="currentColor" d="M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"/>
                  <path fill="currentColor" d="M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"/>
                </svg>
              </a>

              <a href="https://www.bbb.org/us/az/phoenix/profile/landscape-maintenance/bc-landscaping-hardscape-llc-1126-1000131043" target="_blank" rel="noopener noreferrer" class="bc-social-link" aria-label="BBB Accreditation">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"/>
                  <path d="m9.2 12.1 2 2 3.6-4"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Navigation -->
      <div class="bc-nav-wrap">
        <div class="bc-shell bc-nav">
          <div class="bc-brand">
            <a href="<?php echo esc_url(get_home_url()); ?>" class="bc-brand__link" aria-label="BC Landscaping & Hardscape Home">
              <img
                src="/wp-content/uploads/2026/07/BC_Imagotipo_horizontal-scaled.png"
                alt="BC Landscaping & Hardscape"
                class="bc-brand__logo"
              >
            </a>
          </div>

          <button
            class="bc-nav-toggle js-bc-nav-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="bc-mobile-nav"
            aria-label="Open menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>

          <nav class="bc-desktop-nav" aria-label="Primary navigation">
            <ul class="bc-menu">
              <li><a href="/">Home</a></li>
              <li><a href="/about-us">About Us</a></li>

              <li class="bc-menu-item-has-children js-bc-dropdown">
                <button class="bc-menu__toggle js-bc-dropdown-toggle" type="button" aria-expanded="false">
                  <span>Services</span>
                  <span class="bc-caret"></span>
                </button>

                <div class="bc-dropdown">
                  <a href="/services/xeriscaping-desert-design" class="bc-dropdown__signature">
                    Xeriscaping &amp; Desert Design
                    <span class="bc-dropdown__signature-tag">Signature</span>
                  </a>
                  <a href="/services/grass-and-turf-installation">Grass &amp; Turf Installation</a>
                  <a href="/services/hardscaping">Hardscaping</a>
                  <a href="/services/irrigation-systems-2">Irrigation Systems</a>
                  <a href="/services/lightscape-installation-2">Lightscape Installation</a>
                  <a href="/services/tree-services">Tree Services</a>
                  <a href="/services/lawn-and-garden-maintenance">Lawn &amp; Garden Maintenance</a>
                  <a href="/services/concrete-and-retaining-walls">Concrete &amp; Retaining Walls</a>
                </div>
              </li>

              <li><a href="/projects">Projects</a></li>
              <li><a href="/locations">Service Areas</a></li>
              <li><a href="/contact-us">Contact Us</a></li>
            </ul>
          </nav>

          <div class="bc-nav-cta">
            <a href="tel:+14802294950" class="bc-nav-call">
              <span class="bc-nav-call__dot"></span>Call Now
            </a>
            <a href="/contact-us" class="bc-btn bc-btn--primary">Get an Estimate</a>
          </div>
        </div>

        <div id="bc-mobile-nav" class="bc-mobile-panel js-bc-mobile-panel" hidden>
          <div class="bc-shell">
            <nav class="bc-mobile-nav" aria-label="Mobile navigation">
              <a href="/">Home</a>
              <a href="/about-us">About Us</a>

              <div class="bc-mobile-group js-bc-mobile-group">
                <button class="bc-mobile-group__toggle js-bc-mobile-group-toggle" type="button" aria-expanded="false">
                  <span>Services</span>
                  <span class="bc-caret"></span>
                </button>
                <div class="bc-mobile-group__panel">
                  <a href="/services/xeriscaping-desert-design" class="bc-dropdown__signature">
                    Xeriscaping &amp; Desert Design
                    <span class="bc-dropdown__signature-tag">Signature</span>
                  </a>
                  <a href="/services/grass-and-turf-installation">Grass &amp; Turf Installation</a>
                  <a href="/services/hardscaping">Hardscaping</a>
                  <a href="/services/irrigation-systems">Irrigation Systems</a>
                  <a href="/services/lightscape-installation">Lightscape Installation</a>
                  <a href="/services/tree-services">Tree Services</a>
                  <a href="/services/lawn-and-garden-maintenance">Lawn &amp; Garden Maintenance</a>
                  <a href="/services/concrete-and-retaining-walls">Concrete &amp; Retaining Walls</a>
                </div>
              </div>

              <a href="/projects">Projects</a>
              <a href="/locations">Service Areas</a>
              <a href="/contact-us">Contact Us</a>

              <a href="/contact-us" class="bc-btn bc-btn--primary bc-mobile-nav__cta">
                Get a Free Estimate
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>