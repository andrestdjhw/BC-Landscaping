export default function initNavbar() {
  const body = document.body
  const header = document.querySelector(".js-bc-header")
  const navToggle = document.querySelector(".js-bc-nav-toggle")
  const mobilePanel = document.querySelector(".js-bc-mobile-panel")
  const desktopDropdowns = document.querySelectorAll(".js-bc-dropdown")
  const desktopDropdownToggles = document.querySelectorAll(".js-bc-dropdown-toggle")
  const mobileGroups = document.querySelectorAll(".js-bc-mobile-group")
  const mobileGroupToggles = document.querySelectorAll(".js-bc-mobile-group-toggle")

  if (!header) return

  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach((item) => {
      item.classList.remove("is-open")
      const toggle = item.querySelector(".js-bc-dropdown-toggle")
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false")
      }
    })
  }

  const closeMobileGroups = () => {
    mobileGroups.forEach((group) => {
      group.classList.remove("is-open")
      const toggle = group.querySelector(".js-bc-mobile-group-toggle")
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false")
      }
    })
  }

  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return

    mobilePanel.setAttribute("hidden", "")
    navToggle.setAttribute("aria-expanded", "false")
    body.classList.remove("bc-mobile-open")
    closeMobileGroups()
    publishHeaderHeight()
  }

  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return

    mobilePanel.removeAttribute("hidden")
    navToggle.setAttribute("aria-expanded", "true")
    body.classList.add("bc-mobile-open")
    publishHeaderHeight()
  }

  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return

    const isExpanded = navToggle.getAttribute("aria-expanded") === "true"

    if (isExpanded) {
      closeMobileMenu()
    } else {
      openMobileMenu()
    }
  }

  const handleHeaderState = () => {
    if (window.scrollY > 16) {
      header.classList.add("is-scrolled")
    } else {
      header.classList.remove("is-scrolled")
    }
  }

  const publishHeaderHeight = () => {
    document.documentElement.style.setProperty("--bc-nav-h", header.offsetHeight + "px")
  }

  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu)
  }

  desktopDropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", (event) => {
      event.preventDefault()

      const parent = toggle.closest(".js-bc-dropdown")
      if (!parent) return

      const isOpen = parent.classList.contains("is-open")

      closeDesktopDropdowns()

      if (!isOpen) {
        parent.classList.add("is-open")
        toggle.setAttribute("aria-expanded", "true")
      }
    })
  })

  mobileGroupToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-bc-mobile-group")
      if (!parent) return

      const isOpen = parent.classList.contains("is-open")

      closeMobileGroups()

      if (!isOpen) {
        parent.classList.add("is-open")
        toggle.setAttribute("aria-expanded", "true")
      }
    })
  })

  document.addEventListener("click", (event) => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-bc-dropdown")
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns()
    }

    const clickedInsideMobilePanel = event.target.closest(".js-bc-mobile-panel")
    const clickedToggle = event.target.closest(".js-bc-nav-toggle")

    if (
      mobilePanel &&
      navToggle &&
      !mobilePanel.hasAttribute("hidden") &&
      !clickedInsideMobilePanel &&
      !clickedToggle
    ) {
      closeMobileMenu()
    }
  })

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeDesktopDropdowns()
      closeMobileMenu()
    }
  })

  handleHeaderState()
  publishHeaderHeight()
  window.addEventListener("scroll", handleHeaderState)
  window.addEventListener("resize", () => {
    publishHeaderHeight()
    if (window.innerWidth > 980) {
      closeMobileMenu()
    }
  })
}