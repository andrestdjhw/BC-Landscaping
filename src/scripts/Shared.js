import React from "react"

// ================================================================
// shared.js — todo lo que comparten Navbar.js y Footer.js:
// datos (servicios, zonas, redes, contacto) e íconos SVG inline.
// Un solo archivo a propósito, para no fragmentar el theme en JS de más.
// ================================================================

export const SERVICES = [
  { label: "Xeriscaping & Desert Design", href: "/services/xeriscaping-desert-design" },
  { label: "Grass & Turf Installation", href: "/services/grass-and-turf-installation" },
  { label: "Hardscaping", href: "/services/hardscaping" },
  { label: "Irrigation Systems", href: "/services/irrigation-systems" },
  { label: "Lightscape Installation", href: "/services/lightscape-installation" },
  { label: "Tree Services", href: "/services/tree-services" },
  { label: "Lawn & Garden Maintenance", href: "/services/lawn-and-garden-maintenance" },
  { label: "Concrete & Retaining Walls", href: "/services/concrete-and-retaining-walls" },
]

export const LOCATIONS = [
  { label: "Goodyear, AZ", href: "/location/goodyear-az" },
  { label: "Waddell, AZ", href: "/location/waddell-az" },
  { label: "Fountain Hills, AZ", href: "/location/fountain-hills-az" },
  { label: "Rio Verde, AZ", href: "/location/rio-verde-az" },
  { label: "Scottsdale, AZ", href: "/location/scottsdale-az" },
  { label: "Phoenix, AZ", href: "/location/phoenix-az" },
  { label: "Tempe, AZ", href: "/location/tempe-az" },
  { label: "Mesa, AZ", href: "/location/mesa-az" },
  { label: "Gilbert, AZ", href: "/location/gilbert-az" },
  { label: "Paradise Valley, AZ", href: "/location/paradise-valley-az" },
  { label: "Arcadia, AZ", href: "/location/arcadia-az" },
]

export const SOCIAL_LINKS = [
  { label: "Facebook", href: "https://www.facebook.com/bclandscapingandhardscape/", icon: "facebook" },
  { label: "Instagram", href: "https://www.instagram.com/bc_landscapingllc/", icon: "instagram" },
  { label: "TikTok", href: "https://www.tiktok.com/@bclandscaping", icon: "tiktok" },
  { label: "Yelp", href: "https://www.yelp.com/biz/bc-landscaping-and-hardscape-phoenix", icon: "yelp" },
  { label: "Google Reviews", href: "https://share.google/zZ0sZSDsEjN143mQX", icon: "google" },
  { label: "BBB", href: "https://www.bbb.org/us/az/phoenix/profile/landscape-maintenance/bc-landscaping-hardscape-llc-1126-1000131043", icon: "bbb" },
]

export const NAV_LOGO = "/wp-content/uploads/2026/07/BC_Imagotipo_horizontal-scaled.png"
export const ISOTIPO = "/wp-content/uploads/2026/07/BC_Isotipo-scaled.png"
export const PHONE_DISPLAY = "(480) 229-4950"
export const PHONE_HREF = "tel:+14802294950"
export const EMAIL = "info@bclandscapingaz.com"
export const CITY_SHORT = "Phoenix, AZ"

// ---------------- Íconos SVG inline (sin dependencias) ----------------

export function IconFacebook(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" className={props.className} aria-hidden="true">
      <path d="M15 8.5h2.5V5.2c-.43-.06-1.9-.2-3.62-.2-3.58 0-6.03 2.24-6.03 6.36V15H4.4v3.7h3.45V29h3.9V18.7h3.32l.53-3.7h-3.85v-3.2c0-1.07.29-1.8 1.85-1.8Z"/>
    </svg>
  )
}

export function IconInstagram(props) {
  return (
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" className={props.className} aria-hidden="true">
      <rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/>
      <circle cx="12" cy="12" r="4.1"/>
      <circle cx="16.9" cy="7.1" r="0.9" fill="currentColor" stroke="none"/>
    </svg>
  )
}

export function IconTikTok(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" className={props.className} aria-hidden="true">
      <path d="M15.5 3.2c.55 1.9 1.86 3.24 3.9 3.5v2.72c-1.42.06-2.7-.4-3.9-1.24v6.4c0 3.34-2.5 5.4-5.35 5.4-2.8 0-5.35-2-5.35-5.32 0-3.3 2.7-5.3 5.35-5.3.35 0 .78.03 1.1.1v2.85a2.7 2.7 0 0 0-1.1-.22 2.5 2.5 0 0 0-2.5 2.55 2.5 2.5 0 0 0 2.5 2.55c1.42 0 2.62-1.03 2.62-2.9V3.2Z"/>
    </svg>
  )
}

export function IconYelp(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" className={props.className} aria-hidden="true">
      <path d="M11.1 3.4c-.32-.1-.66.1-.72.43L9 11.2c-.06.4.28.75.68.66l4.9-1.1c.4-.1.55-.58.28-.88-1.1-1.2-2.5-2.3-3.75-6.4Z"/>
      <path d="M8.4 13.1c.2-.34.66-.4.94-.14l3.55 3.3c.3.28.24.76-.12.96l-4.4 2.44c-.37.2-.82-.06-.85-.48l-.3-5.4c-.02-.28.06-.5.18-.68Z"/>
      <path d="M15.2 12.5c-.14-.35.06-.75.44-.83l5.2-1.14c.4-.1.77.27.65.66l-1.5 4.9c-.12.4-.63.5-.9.18l-3.9-3.77Z"/>
      <path d="M13.4 14.6c.32-.16.72-.02.86.3l2.28 4.9c.17.38-.13.8-.54.75l-5.28-.6c-.4-.05-.6-.5-.38-.83l3.06-4.52Z"/>
    </svg>
  )
}

export function IconGoogle(props) {
  return (
    <svg viewBox="0 0 24 24" fill="currentColor" className={props.className} aria-hidden="true">
      <path d="M21.6 12.23c0-.7-.06-1.36-.18-2H12v3.8h5.4a4.6 4.6 0 0 1-2 3.02v2.5h3.24c1.9-1.75 3-4.32 3-7.32Z"/>
      <path d="M12 22c2.7 0 4.96-.9 6.62-2.44l-3.24-2.5c-.9.6-2.05.96-3.38.96-2.6 0-4.8-1.76-5.58-4.12H3.06v2.6A10 10 0 0 0 12 22Z"/>
      <path d="M6.42 13.9a5.98 5.98 0 0 1 0-3.8V7.5H3.06a10 10 0 0 0 0 9l3.36-2.6Z"/>
      <path d="M12 5.98c1.47 0 2.8.5 3.83 1.5l2.87-2.87A9.96 9.96 0 0 0 12 2a10 10 0 0 0-8.94 5.5l3.36 2.6C7.2 7.74 9.4 5.98 12 5.98Z"/>
    </svg>
  )
}

export function IconShield(props) {
  return (
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round" className={props.className} aria-hidden="true">
      <path d="M12 3.2 5 5.8v5.4c0 4.6 3 7.9 7 9.6 4-1.7 7-5 7-9.6V5.8L12 3.2Z"/>
      <path d="m9.2 12.1 2 2 3.6-4"/>
    </svg>
  )
}

export function IconPhone(props) {
  return (
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" className={props.className} aria-hidden="true">
      <path d="M6.6 10.8c1.3 2.6 3.4 4.7 6 6l2-2c.25-.25.6-.33.9-.2 1 .34 2.1.53 3.2.53.5 0 .9.4.9.9v3.1c0 .5-.4.9-.9.9C10.4 20 4 13.6 4 5.5c0-.5.4-.9.9-.9H8c.5 0 .9.4.9.9 0 1.1.19 2.2.53 3.2.12.3.05.65-.2.9l-2 2Z"/>
    </svg>
  )
}

export function IconMail(props) {
  return (
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" className={props.className} aria-hidden="true">
      <rect x="3.5" y="5.5" width="17" height="13" rx="2"/>
      <path d="m4.5 7 7.5 6 7.5-6"/>
    </svg>
  )
}

export function IconPin(props) {
  return (
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" className={props.className} aria-hidden="true">
      <path d="M12 21.5s7-6.4 7-11.7A7 7 0 0 0 5 9.8c0 5.3 7 11.7 7 11.7Z"/>
      <circle cx="12" cy="9.8" r="2.4"/>
    </svg>
  )
}

export const SOCIAL_ICON_MAP = {
  facebook: IconFacebook,
  instagram: IconInstagram,
  tiktok: IconTikTok,
  yelp: IconYelp,
  google: IconGoogle,
  bbb: IconShield,
}