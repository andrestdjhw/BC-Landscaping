import React, { useId, useRef, useState } from "react"
import emailjs from "@emailjs/browser"
import { SERVICES } from "./Shared"

// ================================================================
// ContactForm.js — formulario reutilizable (EmailJS + reCAPTCHA v3).
// Se monta desde PHP con:
//   <div class="js-bc-contact-form" data-variant="estimate|contact" data-id="..."></div>
// "estimate": tarjeta oscura de la Home (zip + servicio).
// "contact":  floating labels de Contact Us (mensaje libre).
// ================================================================

const EMAILJS_PUBLIC_KEY = "jouOOfXfhaIpXnqML"
const EMAILJS_SERVICE_ID = "service_g0f8bxk"
const EMAILJS_TEMPLATE_ID = "template_vjswkmr"
const EMAILJS_AUTOREPLY_TEMPLATE_ID = "template_8omszme"
const RECAPTCHA_SITE_KEY = "6Le1SIstAAAAAMpvWWIvOsnq4Jj488h6SmhTffRe"

const FORM_ORNAMENT = "/wp-content/uploads/2026/07/Graficos-10.png"
const SERVICE_OPTIONS = [...SERVICES.map((s) => s.label), "Other"]

const COPY = {
  estimate: {
    success: "Thank you. Your request has been sent successfully. We'll be in touch soon.",
    error: "Something went wrong while sending your request. Please try again.",
  },
  contact: {
    success: "Thank you. Your message has been sent successfully. We'll be in touch soon.",
    error: "Something went wrong while sending your message. Please try again, or call us directly.",
  },
}

emailjs.init({ publicKey: EMAILJS_PUBLIC_KEY })

// carga el script de reCAPTCHA una sola vez, aunque haya varios formularios en la página
let recaptchaPromise = null
function loadRecaptcha() {
  if (!recaptchaPromise) {
    recaptchaPromise = new Promise((resolve, reject) => {
      const script = document.createElement("script")
      script.src = "https://www.google.com/recaptcha/api.js?render=" + RECAPTCHA_SITE_KEY
      script.async = true
      script.onload = () => window.grecaptcha.ready(() => resolve(window.grecaptcha))
      script.onerror = () => { recaptchaPromise = null; reject(new Error("recaptcha")) }
      document.head.appendChild(script)
    })
  }
  return recaptchaPromise
}

function ContactForm(props) {
  const variant = props.variant === "contact" ? "contact" : "estimate"
  const autoId = useId()
  const baseId = props.id || autoId
  const formRef = useRef(null)
  const [sending, setSending] = useState(false)
  const [status, setStatus] = useState(null) // { type: "success" | "error", message }

  // precargar reCAPTCHA cuando el usuario empieza a interactuar, no en cada page load
  function warmUp() {
    loadRecaptcha().catch(() => {})
  }

  async function handleSubmit(e) {
    e.preventDefault()
    setStatus(null)
    const form = formRef.current
    const data = new FormData(form)

    // honeypot: si el campo oculto viene lleno, es un bot -> cortar en silencio
    if (data.get("hp_name")) return

    if (!data.get("policy")) {
      return setStatus({ type: "error", message: "Please accept the Privacy Policy and Terms & Conditions before submitting." })
    }

    setSending(true)

    let captchaResponse
    try {
      const grecaptcha = await loadRecaptcha()
      captchaResponse = await grecaptcha.execute(RECAPTCHA_SITE_KEY, { action: "submit" })
    } catch {
      setSending(false)
      return setStatus({ type: "error", message: "reCAPTCHA failed to load. Please refresh the page and try again." })
    }

    const formData = {
      name: String(data.get("full_name") || "").trim(),
      phone: String(data.get("phone") || "").trim(),
      email: String(data.get("email") || "").trim(),
      "g-recaptcha-response": captchaResponse,
    }
    if (variant === "estimate") {
      formData.zip = String(data.get("zip") || "").trim()
      formData.service = data.get("service")
    } else {
      formData.message = String(data.get("message") || "").trim()
    }

    try {
      await emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, formData)
    } catch {
      setSending(false)
      return setStatus({ type: "error", message: COPY[variant].error })
    }

    // el auto-reply al cliente es secundario: si falla, el mensaje al negocio ya llegó
    emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_AUTOREPLY_TEMPLATE_ID, formData).catch(() => {})

    form.reset()
    setSending(false)
    setStatus({ type: "success", message: COPY[variant].success })
  }

  // Los mensajes solo existen en el DOM después del submit: Google Tag Manager detecta el lead
  // con un trigger "Element Visibility" sobre #gtm-form-success (con "Observe DOM changes").
  // Al montarse solo tras el envío, el ID no se duplica aunque haya varios formularios en la página.
  function renderMessages() {
    if (!status) return null
    return (
      <div
        id={status.type === "success" ? "gtm-form-success" : "gtm-form-error"}
        className={"bc-form-message bc-form-message--" + status.type + " is-visible"}
        role={status.type === "error" ? "alert" : "status"}
      >
        {status.message}
      </div>
    )
  }

  function renderHoneypot() {
    return (
      <div className="bc-hp-field" aria-hidden="true">
        <label htmlFor={baseId + "_hp"}>Leave this field empty</label>
        <input id={baseId + "_hp"} type="text" name="hp_name" tabIndex="-1" autoComplete="off" />
      </div>
    )
  }

  function renderPolicyText() {
    return (
      <span>I agree to the <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-and-conditions">Terms &amp; Conditions</a>.</span>
    )
  }

  if (variant === "contact") {
    return (
      <form id={baseId} ref={formRef} className="bc-float-form relative z-10 mt-8" onSubmit={handleSubmit} onFocus={warmUp}>
        <div className="bc-float-field">
          <input id={baseId + "_name"} type="text" name="full_name" placeholder=" " required />
          <label htmlFor={baseId + "_name"}>Full Name *</label>
        </div>

        <div className="bc-float-field">
          <input id={baseId + "_phone"} type="tel" name="phone" placeholder=" " required />
          <label htmlFor={baseId + "_phone"}>Phone Number *</label>
        </div>

        <div className="bc-float-field">
          <input id={baseId + "_email"} type="email" name="email" placeholder=" " required />
          <label htmlFor={baseId + "_email"}>Email Address *</label>
        </div>

        <div className="bc-float-field">
          <textarea id={baseId + "_message"} name="message" rows="4" placeholder=" "></textarea>
          <label htmlFor={baseId + "_message"}>Message</label>
        </div>

        {renderHoneypot()}

        <label className="bc-float-check">
          <input type="checkbox" name="policy" required />
          {renderPolicyText()}
        </label>

        {renderMessages()}

        <button type="submit" disabled={sending} className="bc-btn bc-btn-green bc-magnetic mt-2 inline-flex w-full items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]">
          <span>{sending ? "Sending..." : "Send Message"}</span>
        </button>
      </form>
    )
  }

  return (
    <div className="bc-formcard bc-tilt">
      <img src={FORM_ORNAMENT} alt="" className="bc-formcard__ornament" aria-hidden="true" />
      <form id={baseId} ref={formRef} className="bc-estimate-form" onSubmit={handleSubmit} onFocus={warmUp}>
        <p className="bc-estimate-form__eyebrow">Request a Free Estimate</p>
        <h3 className="bc-estimate-form__title">Tell us about your property.</h3>
        <p className="bc-estimate-form__trust">15+ Years in Arizona &middot; HOA-Approved &middot; 100% Satisfaction Guaranteed</p>

        <div className="bc-estimate-form__grid">
          <div className="bc-estimate-form__field">
            <label htmlFor={baseId + "_name"}>Full Name *</label>
            <input id={baseId + "_name"} type="text" name="full_name" placeholder="Your full name" required />
          </div>
          <div className="bc-estimate-form__field">
            <label htmlFor={baseId + "_phone"}>Phone Number *</label>
            <input id={baseId + "_phone"} type="tel" name="phone" placeholder="(480) 229-4950" required />
          </div>
          <div className="bc-estimate-form__field">
            <label htmlFor={baseId + "_email"}>Email Address *</label>
            <input id={baseId + "_email"} type="email" name="email" placeholder="you@example.com" required />
          </div>
          <div className="bc-estimate-form__field">
            <label htmlFor={baseId + "_zip"}>Property ZIP *</label>
            <input id={baseId + "_zip"} type="text" name="zip" placeholder="85268" inputMode="numeric" maxLength="5" required />
          </div>
          <div className="bc-estimate-form__field bc-estimate-form__field--full">
            <label htmlFor={baseId + "_service"}>Service Needed *</label>
            <select id={baseId + "_service"} name="service" required defaultValue="">
              <option value="">Select a service</option>
              {SERVICE_OPTIONS.map((option) => <option key={option} value={option}>{option}</option>)}
            </select>
          </div>
        </div>

        {renderHoneypot()}

        <p className="bc-estimate-form__micro">We'll review your request and reach out within 24&ndash;48 hours.</p>

        {renderMessages()}

        <label className="bc-estimate-form__check">
          <input type="checkbox" name="policy" required />
          {renderPolicyText()}
        </label>

        <button type="submit" disabled={sending} className="bc-btn bc-btn-green bc-magnetic bc-estimate-form__submit">
          <span>{sending ? "Sending..." : "Get My Free Estimate"}</span>
        </button>
      </form>
    </div>
  )
}

export default ContactForm
