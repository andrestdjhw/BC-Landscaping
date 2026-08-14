import React from "react"
import {
  SERVICES, SOCIAL_LINKS, NAV_LOGO, ISOTIPO, PHONE_DISPLAY, PHONE_HREF, EMAIL,
  IconPhone, IconMail, IconPin, SOCIAL_ICON_MAP,
} from "./shared"

const HELPFUL_LINKS = [
  { label: "Services", href: "/services" },
  { label: "Get an Estimate", href: "/estimate" },
  { label: "Projects", href: "/projects" },
  { label: "Service Areas", href: "/locations" },
  { label: "Sitemap", href: "/sitemap" },
]

function Footer() {
  const currentYear = new Date().getFullYear()

  function renderServiceLink(item) {
    return <a key={item.href} href={item.href}>{item.label}</a>
  }

  function renderHelpfulLink(item) {
    return <a key={item.href} href={item.href}>{item.label}</a>
  }

  function renderSocialLink(item) {
    const IconComponent = SOCIAL_ICON_MAP[item.icon]
    return (
      <a key={item.href} href={item.href} target="_blank" rel="noopener noreferrer" className="bc-footer__social-link" aria-label={item.label}>
        <IconComponent className="bc-footer__social-icon" />
      </a>
    )
  }

  return (
    <footer className="bc-footer">
      <div className="bc-footer__top">
        <div className="bc-footer__brand">
          <a href="/" className="bc-footer__logo-link">
            <img src={NAV_LOGO} alt="BC Landscaping & Hardscape" className="bc-footer__logo" />
          </a>
          <p className="bc-footer__tagline">
            Quality with Purpose. Desert-smart, HOA-compliant landscaping and hardscaping for Maricopa
            County&rsquo;s finest communities.
          </p>
          <div className="bc-footer__social">
            {SOCIAL_LINKS.map(renderSocialLink)}
          </div>
        </div>

        <div className="bc-footer__col">
          <h3>Services</h3>
          {SERVICES.map(renderServiceLink)}
        </div>

        <div className="bc-footer__col">
          <h3>Helpful Links</h3>
          {HELPFUL_LINKS.map(renderHelpfulLink)}
        </div>

        <div className="bc-footer__col">
          <h3>Contact Us</h3>
          <a href={PHONE_HREF} className="bc-footer__contact-item">
            <IconPhone className="bc-footer__contact-icon" />
            <span>{PHONE_DISPLAY}</span>
          </a>
          <a href={"mailto:" + EMAIL} className="bc-footer__contact-item">
            <IconMail className="bc-footer__contact-icon" />
            <span>{EMAIL}</span>
          </a>
          <p className="bc-footer__address bc-footer__contact-item">
            <IconPin className="bc-footer__contact-icon bc-footer__contact-icon--top" />
            <span>11201 N. Tatum Blvd, Suite 300<br />Phoenix, AZ 85028</span>
          </p>

          <h3 className="bc-footer__hours-title">Business Hours</h3>
          <p className="bc-footer__hours">
            Mon&ndash;Fri: 7am &ndash; 4pm<br />
            Sat&ndash;Sun: Closed
          </p>
        </div>
      </div>

      <div className="bc-footer__bottom">
        <div className="bc-footer__bottom-inner">
          <img src={ISOTIPO} alt="" aria-hidden="true" className="bc-footer__isotipo" />
          <p className="bc-footer__copyright">&copy; {currentYear} BC Landscaping &amp; Hardscape, LLC</p>
          <div className="bc-footer__legal">
            <a href="/privacy-policy">Privacy Policy</a>
            <span aria-hidden="true">|</span>
            <a href="/terms-and-conditions">Terms &amp; Conditions</a>
          </div>
        </div>
      </div>
    </footer>
  )
}

export default Footer