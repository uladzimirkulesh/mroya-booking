/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/animations/index.js"
/*!************************************!*\
  !*** ./src/js/animations/index.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initAnimations: () => (/* binding */ initAnimations)
/* harmony export */ });
/* harmony import */ var _patterns__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./patterns */ "./src/js/animations/patterns/index.js");


/*-------------------------------------------------------
Init Animations
-------------------------------------------------------*/

function initAnimations() {
  // Patterns
  _patterns__WEBPACK_IMPORTED_MODULE_0__.sectionHero5();
  _patterns__WEBPACK_IMPORTED_MODULE_0__.sectionAbout2();
  _patterns__WEBPACK_IMPORTED_MODULE_0__.sectionInformation1();
}

/***/ },

/***/ "./src/js/animations/patterns/index.js"
/*!*********************************************!*\
  !*** ./src/js/animations/patterns/index.js ***!
  \*********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sectionAbout2: () => (/* reexport safe */ _section_about_2__WEBPACK_IMPORTED_MODULE_1__.sectionAbout2),
/* harmony export */   sectionHero5: () => (/* reexport safe */ _section_hero_5__WEBPACK_IMPORTED_MODULE_0__.sectionHero5),
/* harmony export */   sectionInformation1: () => (/* reexport safe */ _section_information_1__WEBPACK_IMPORTED_MODULE_2__.sectionInformation1)
/* harmony export */ });
/* harmony import */ var _section_hero_5__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./section-hero-5 */ "./src/js/animations/patterns/section-hero-5.js");
/* harmony import */ var _section_about_2__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./section-about-2 */ "./src/js/animations/patterns/section-about-2.js");
/* harmony import */ var _section_information_1__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./section-information-1 */ "./src/js/animations/patterns/section-information-1.js");




/***/ },

/***/ "./src/js/animations/patterns/section-about-2.js"
/*!*******************************************************!*\
  !*** ./src/js/animations/patterns/section-about-2.js ***!
  \*******************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sectionAbout2: () => (/* binding */ sectionAbout2)
/* harmony export */ });
/*-------------------------------------------------------
Section "About" (style 2)
-------------------------------------------------------*/

function sectionAbout2() {
  const sections = gsap.utils.toArray('.section--about-2');
  sections.forEach(section => {
    const sectionTitle = section.querySelector('.section__header .wp-block-heading');
    const advantageItems = section.querySelectorAll('.advantages__item');
    const sectionBlockElements = section.querySelectorAll('.block--text > .wp-block-group > *');
    const sectionBlockText = section.querySelector('.block--text > .wp-block-group > p');

    // Let's animate
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: sectionTitle,
        start: ScrollTrigger.defaults().start,
        toggleActions: 'play none none none',
        once: true
      }
    });

    // Animations
    sectionTitle && tl.fadeInUp(sectionTitle);
    advantageItems?.length && tl.fadeInUp(advantageItems, '<0.12');
    sectionBlockElements?.length && tl.fadeInUp(sectionBlockElements, '<0.12');
    sectionBlockText && tl.splitTextWords(sectionBlockText);
  });
}

/***/ },

/***/ "./src/js/animations/patterns/section-hero-5.js"
/*!******************************************************!*\
  !*** ./src/js/animations/patterns/section-hero-5.js ***!
  \******************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sectionHero5: () => (/* binding */ sectionHero5)
/* harmony export */ });
/*-------------------------------------------------------
Section "Hero" (style 5)
-------------------------------------------------------*/

function sectionHero5() {
  const sections = gsap.utils.toArray('.section--hero-5');
  sections.forEach(section => {
    const sectionTitle = section.querySelector('.section__block--left .wp-block-heading');
    const sectionElements = section.querySelectorAll('.section__block--right > *');

    // Let's animate
    const tl = gsap.timeline({
      delay: 0.3
    });
    sectionTitle && tl.set(sectionTitle, {
      autoAlpha: 1
    });

    // Animations
    sectionTitle && tl.splitTextLinesMask(sectionTitle, {
      revert: false
    });
    sectionElements?.length && tl.fadeInUp(sectionElements, '<0.42');
  });
}

/***/ },

/***/ "./src/js/animations/patterns/section-information-1.js"
/*!*************************************************************!*\
  !*** ./src/js/animations/patterns/section-information-1.js ***!
  \*************************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   sectionInformation1: () => (/* binding */ sectionInformation1)
/* harmony export */ });
/*-------------------------------------------------------
Section "Information" (style 1)
-------------------------------------------------------*/

function sectionInformation1() {
  const sections = gsap.utils.toArray('.section--information-1');
  sections.forEach(section => {
    const sectionBlocks = section.querySelectorAll('.section__content > *');

    // Let's animate
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: ScrollTrigger.defaults().start,
        toggleActions: 'play none none none',
        once: true
      }
    });

    // Blocks animations
    sectionBlocks?.length && tl.fadeInUp(sectionBlocks, '<0.12');
  });
}

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
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
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**************************!*\
  !*** ./src/js/screen.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _animations__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./animations */ "./src/js/animations/index.js");


/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/

window.addEventListener('load', () => {
  // Init Animations
  _animations__WEBPACK_IMPORTED_MODULE_0__.initAnimations();
});
})();

/******/ })()
;
//# sourceMappingURL=screen.js.map