/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initNavbar)
/* harmony export */ });
function initNavbar() {
  const body = document.body;
  const header = document.querySelector(".js-bc-header");
  const navToggle = document.querySelector(".js-bc-nav-toggle");
  const mobilePanel = document.querySelector(".js-bc-mobile-panel");
  const desktopDropdowns = document.querySelectorAll(".js-bc-dropdown");
  const desktopDropdownToggles = document.querySelectorAll(".js-bc-dropdown-toggle");
  const mobileGroups = document.querySelectorAll(".js-bc-mobile-group");
  const mobileGroupToggles = document.querySelectorAll(".js-bc-mobile-group-toggle");
  if (!header) return;
  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach(item => {
      item.classList.remove("is-open");
      const toggle = item.querySelector(".js-bc-dropdown-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileGroups = () => {
    mobileGroups.forEach(group => {
      group.classList.remove("is-open");
      const toggle = group.querySelector(".js-bc-mobile-group-toggle");
      if (toggle) {
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  };
  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.setAttribute("hidden", "");
    navToggle.setAttribute("aria-expanded", "false");
    body.classList.remove("bc-mobile-open");
    closeMobileGroups();
    publishHeaderHeight();
  };
  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.removeAttribute("hidden");
    navToggle.setAttribute("aria-expanded", "true");
    body.classList.add("bc-mobile-open");
    publishHeaderHeight();
  };
  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  };
  const handleHeaderState = () => {
    if (window.scrollY > 16) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };
  const publishHeaderHeight = () => {
    document.documentElement.style.setProperty("--bc-nav-h", header.offsetHeight + "px");
  };
  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu);
  }
  desktopDropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault();
      const parent = toggle.closest(".js-bc-dropdown");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeDesktopDropdowns();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  mobileGroupToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-bc-mobile-group");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeMobileGroups();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  document.addEventListener("click", event => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-bc-dropdown");
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns();
    }
    const clickedInsideMobilePanel = event.target.closest(".js-bc-mobile-panel");
    const clickedToggle = event.target.closest(".js-bc-nav-toggle");
    if (mobilePanel && navToggle && !mobilePanel.hasAttribute("hidden") && !clickedInsideMobilePanel && !clickedToggle) {
      closeMobileMenu();
    }
  });
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") {
      closeDesktopDropdowns();
      closeMobileMenu();
    }
  });
  handleHeaderState();
  publishHeaderHeight();
  window.addEventListener("scroll", handleHeaderState);
  window.addEventListener("resize", () => {
    publishHeaderHeight();
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });
}

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");

document.addEventListener("DOMContentLoaded", function () {
  (0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_0__["default"])();
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map