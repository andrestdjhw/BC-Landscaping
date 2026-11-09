import React, { useEffect, useRef, useState } from "react"

// ================================================================
// CookieConsent.js — banner + modal de preferencias de cookies.
// Se monta desde footer.php en <div id="bc-cookie-consent"></div>.
// Cualquier elemento con la clase .js-bc-cookie-settings abre el modal
// (link "Cookie Settings" del footer, botón en Privacy Policy, etc.).
//
// La preferencia se guarda en la cookie "bc_cookie_consent" (1 año) y se
// envía a Google Consent Mode v2. Los defaults ("denied") se declaran en
// functions.php (bc_consent_mode_defaults) antes de que cargue GTM.
// En GTM, cada cambio dispara el evento "bc_consent_update".
// ================================================================

const COOKIE_NAME = "bc_cookie_consent"
// Subir la versión obliga a todos a volver a elegir (p. ej. si se agrega una categoría nueva).
const CONSENT_VERSION = 1
const MAX_AGE_SECONDS = 60 * 60 * 24 * 365
const OPEN_SELECTOR = ".js-bc-cookie-settings"

const CATEGORIES = [
  {
    key: "necessary",
    title: "Strictly Necessary",
    description: "Required for the website to work properly and to remember your cookie choices. These cannot be turned off.",
    locked: true,
  },
  {
    key: "analytics",
    title: "Analytics",
    description: "Help us understand how visitors find and use our site (for example, Google Analytics) so we can improve it.",
  },
  {
    key: "marketing",
    title: "Marketing",
    description: "Help us measure our advertising and show relevant ads on other platforms such as Google and Meta.",
  },
]

const DEFAULT_PREFS = { analytics: false, marketing: false }

function readConsent() {
  try {
    const match = document.cookie.match(new RegExp("(?:^|; )" + COOKIE_NAME + "=([^;]*)"))
    if (!match) return null
    const value = JSON.parse(decodeURIComponent(match[1]))
    return value && value.v === CONSENT_VERSION ? value : null
  } catch (e) {
    return null
  }
}

function writeConsent(prefs) {
  const value = {
    v: CONSENT_VERSION,
    analytics: !!prefs.analytics,
    marketing: !!prefs.marketing,
    ts: Date.now(),
  }
  const secure = window.location.protocol === "https:" ? "; Secure" : ""
  document.cookie =
    COOKIE_NAME + "=" + encodeURIComponent(JSON.stringify(value)) +
    "; Max-Age=" + MAX_AGE_SECONDS + "; Path=/; SameSite=Lax" + secure
  return value
}

function applyConsent(consent) {
  window.dataLayer = window.dataLayer || []
  // gtag() tiene que empujar el objeto "arguments", no un array, para que Consent Mode lo reconozca
  const gtag = window.gtag || function () { window.dataLayer.push(arguments) }
  const marketing = consent.marketing ? "granted" : "denied"

  gtag("consent", "update", {
    analytics_storage: consent.analytics ? "granted" : "denied",
    ad_storage: marketing,
    ad_user_data: marketing,
    ad_personalization: marketing,
  })

  window.dataLayer.push({
    event: "bc_consent_update",
    bc_consent_analytics: consent.analytics,
    bc_consent_marketing: consent.marketing,
  })
}

function getFocusable(container) {
  return Array.from(
    container.querySelectorAll('button:not([disabled]), a[href], input:not([disabled]), [tabindex]:not([tabindex="-1"])')
  )
}

function Toggle(props) {
  return (
    <button
      type="button"
      role="switch"
      id={props.id}
      aria-checked={props.checked}
      aria-labelledby={props.labelledBy}
      aria-describedby={props.describedBy}
      disabled={props.disabled}
      className={"bc-cookie-switch" + (props.checked ? " is-on" : "")}
      onClick={props.onChange}
    >
      <span className="bc-cookie-switch__thumb" aria-hidden="true" />
    </button>
  )
}

function CookieConsent() {
  const [consent, setConsent] = useState(readConsent)
  const [modalOpen, setModalOpen] = useState(false)
  const [draft, setDraft] = useState(DEFAULT_PREFS)
  const dialogRef = useRef(null)
  const lastFocusRef = useRef(null)

  function openModal() {
    const current = readConsent()
    setDraft(current ? { analytics: current.analytics, marketing: current.marketing } : DEFAULT_PREFS)
    lastFocusRef.current = document.activeElement
    setModalOpen(true)
  }

  function closeModal() {
    setModalOpen(false)
  }

  function save(prefs) {
    const value = writeConsent(prefs)
    applyConsent(value)
    setConsent(value)
    setModalOpen(false)
  }

  // delegación: abre el modal desde cualquier .js-bc-cookie-settings, aunque se agregue después
  useEffect(() => {
    function onClick(e) {
      const trigger = e.target.closest && e.target.closest(OPEN_SELECTOR)
      if (!trigger) return
      e.preventDefault()
      openModal()
    }
    document.addEventListener("click", onClick)
    return () => document.removeEventListener("click", onClick)
  }, [])

  // modal: foco inicial, Escape, focus trap, bloquear scroll y devolver el foco al cerrar
  useEffect(() => {
    if (!modalOpen) return
    const dialog = dialogRef.current
    const root = document.documentElement
    const prevOverflow = root.style.overflow
    root.style.overflow = "hidden"

    const focusables = getFocusable(dialog)
    ;(focusables[0] || dialog).focus()

    function onKeyDown(e) {
      if (e.key === "Escape") {
        e.preventDefault()
        closeModal()
        return
      }
      if (e.key !== "Tab") return
      const items = getFocusable(dialog)
      if (!items.length) return
      const first = items[0]
      const last = items[items.length - 1]
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault()
        last.focus()
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault()
        first.focus()
      }
    }

    document.addEventListener("keydown", onKeyDown)
    return () => {
      document.removeEventListener("keydown", onKeyDown)
      root.style.overflow = prevOverflow
      const last = lastFocusRef.current
      if (last && typeof last.focus === "function" && document.contains(last)) last.focus()
    }
  }, [modalOpen])

  function toggleDraft(key) {
    setDraft((prev) => ({ ...prev, [key]: !prev[key] }))
  }

  function renderCategory(cat) {
    const titleId = "bc-cookie-cat-" + cat.key
    const descId = titleId + "-desc"
    const checked = cat.locked ? true : !!draft[cat.key]

    return (
      <li key={cat.key} className="bc-cookie-cat">
        <div className="bc-cookie-cat__head">
          <h3 id={titleId} className="bc-cookie-cat__title">{cat.title}</h3>
          {cat.locked ? (
            <span className="bc-cookie-cat__always">Always active</span>
          ) : (
            <Toggle
              checked={checked}
              labelledBy={titleId}
              describedBy={descId}
              onChange={() => toggleDraft(cat.key)}
            />
          )}
        </div>
        <p id={descId} className="bc-cookie-cat__desc">{cat.description}</p>
      </li>
    )
  }

  const showBanner = !consent && !modalOpen

  return (
    <>
      {showBanner && (
        <section className="bc-cookie-banner" role="region" aria-label="Cookie consent">
          <p className="bc-cookie-banner__title">We value your privacy</p>
          <p className="bc-cookie-banner__text">
            We use cookies to keep our site working, understand how it&rsquo;s used, and measure our marketing.
            You can accept all cookies, reject non-essential ones, or choose your preferences.{" "}
            <a href="/privacy-policy">Privacy Policy</a>
          </p>
          <div className="bc-cookie-banner__actions">
            <button type="button" className="bc-cookie-btn bc-cookie-btn--link" onClick={openModal}>
              Customize
            </button>
            <button type="button" id="gtm-cookie-reject" className="bc-cookie-btn bc-cookie-btn--outline" onClick={() => save(DEFAULT_PREFS)}>
              Reject All
            </button>
            <button type="button" id="gtm-cookie-accept" className="bc-cookie-btn bc-cookie-btn--primary" onClick={() => save({ analytics: true, marketing: true })}>
              Accept All
            </button>
          </div>
        </section>
      )}

      {modalOpen && (
        <div className="bc-cookie-modal" onMouseDown={(e) => { if (e.target === e.currentTarget) closeModal() }}>
          <div
            ref={dialogRef}
            className="bc-cookie-modal__dialog"
            role="dialog"
            aria-modal="true"
            aria-labelledby="bc-cookie-modal-title"
            aria-describedby="bc-cookie-modal-intro"
            tabIndex="-1"
          >
            <div className="bc-cookie-modal__header">
              <div>
                <p className="bc-cookie-modal__eyebrow">Privacy</p>
                <h2 id="bc-cookie-modal-title" className="bc-cookie-modal__title">Cookie Settings</h2>
              </div>
              <button type="button" className="bc-cookie-modal__close" aria-label="Close cookie settings" onClick={closeModal}>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" aria-hidden="true">
                  <path d="M6 6l12 12M18 6L6 18" />
                </svg>
              </button>
            </div>

            <div className="bc-cookie-modal__body">
              <p id="bc-cookie-modal-intro" className="bc-cookie-modal__intro">
                Choose which cookies you allow. You can change these settings at any time from the
                &ldquo;Cookie Settings&rdquo; link in the footer. Learn more in our{" "}
                <a href="/privacy-policy">Privacy Policy</a>.
              </p>
              <ul className="bc-cookie-cats">
                {CATEGORIES.map(renderCategory)}
              </ul>
            </div>

            <div className="bc-cookie-modal__footer">
              <button type="button" className="bc-cookie-btn bc-cookie-btn--outline-dark" onClick={() => save(DEFAULT_PREFS)}>
                Reject All
              </button>
              <button type="button" className="bc-cookie-btn bc-cookie-btn--outline-dark" onClick={() => save({ analytics: true, marketing: true })}>
                Accept All
              </button>
              <button type="button" id="gtm-cookie-save" className="bc-cookie-btn bc-cookie-btn--primary" onClick={() => save(draft)}>
                Save Preferences
              </button>
            </div>
          </div>
        </div>
      )}
    </>
  )
}

export default CookieConsent
