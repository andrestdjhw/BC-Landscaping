import React from "react"
import { createRoot } from "react-dom/client"
import { flushSync } from "react-dom"
import initNavbar from "./scripts/navbar"
import ContactForm from "./scripts/ContactForm"
import CookieConsent from "./scripts/CookieConsent"

// Los formularios se montan de inmediato (este bundle va al final del <body>, el DOM ya existe)
// y de forma síncrona, para que estén en el DOM antes de que los scripts de cada página
// busquen .bc-tilt / .bc-magnetic en su DOMContentLoaded.
document.querySelectorAll(".js-bc-contact-form").forEach((el) => {
  const root = createRoot(el)
  flushSync(() => {
    root.render(<ContactForm variant={el.dataset.variant} id={el.dataset.id} />)
  })
})

// Banner / modal de cookies (punto de montaje en footer.php)
const cookieConsentEl = document.getElementById("bc-cookie-consent")
if (cookieConsentEl) {
  createRoot(cookieConsentEl).render(<CookieConsent />)
}

document.addEventListener("DOMContentLoaded", function () {
  initNavbar()
})
