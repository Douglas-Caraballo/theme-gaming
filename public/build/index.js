/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/channel-change.js":
/*!**********************************!*\
  !*** ./src/js/channel-change.js ***!
  \**********************************/
/***/ (() => {

eval("let iframe = document.querySelector('.wrapper-transmition__embed-twitch iframe');\nlet channels = document.querySelector('#channels');\nconst source = \"https://player.twitch.tv/?channel=\";\nconst parent =\"&parent=localhost\";\n\nif(iframe){\n    channels.addEventListener('change', (e)=>{\n        iframe.setAttribute('src', source+channels.value+parent)\n    })\n}\n\n\n//# sourceURL=webpack://underscores/./src/js/channel-change.js?");

/***/ }),

/***/ "./src/js/fullscreen-search.js":
/*!*************************************!*\
  !*** ./src/js/fullscreen-search.js ***!
  \*************************************/
/***/ (() => {

eval("function openSearch(){\n    document.getElementById('my-search').style.display=\"block\";\n    document.body.classList.toggle('scroll-desactivate');\n}\n\nfunction closeSearch(){\n    document.getElementById('my-search').style.display=\"none\";\n    document.body.classList.toggle('scroll-desactivate');\n}\n\nlet openBtn = document.querySelector('.open-search');\nlet closeBtn = document.querySelector('.overlay__close-search');\n\nif(openBtn){\n    openBtn.addEventListener('click', ()=>{\n        openSearch();\n    });\n}\n\nif(closeBtn){\n    closeBtn.addEventListener('click', ()=>{\n        closeSearch();\n    });\n}\n\n//# sourceURL=webpack://underscores/./src/js/fullscreen-search.js?");

/***/ }),

/***/ "./src/js/hambuger.js":
/*!****************************!*\
  !*** ./src/js/hambuger.js ***!
  \****************************/
/***/ (() => {

eval("const hamburger = document.querySelector('#hamburger'),\n    menu = document.querySelector('#menu-mobile'),\n    close = document.querySelector('#close-menu');\n\nif(hamburger){\n    hamburger.addEventListener('click', (e)=>{\n        menu.classList.toggle('aside-desactivate');\n    });\n\n    close.addEventListener('click', (e)=>{\n        menu.classList.toggle('aside-desactivate');\n    });\n}\n\n//# sourceURL=webpack://underscores/./src/js/hambuger.js?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _hambuger__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hambuger */ \"./src/js/hambuger.js\");\n/* harmony import */ var _hambuger__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_hambuger__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _fullscreen_search__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./fullscreen-search */ \"./src/js/fullscreen-search.js\");\n/* harmony import */ var _fullscreen_search__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_fullscreen_search__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _channel_change__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./channel-change */ \"./src/js/channel-change.js\");\n/* harmony import */ var _channel_change__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_channel_change__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n//# sourceURL=webpack://underscores/./src/js/index.js?");

/***/ })

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
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;