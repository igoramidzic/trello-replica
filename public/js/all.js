/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

/* global $*/

$(document).ready(function () {
  // Add smooth scrolling to all links
  $('a').on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== '') {
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {});
    }
  });

  // - - - - - - - - - - - - Change navbar css - - - - - - - - - - - - - - - - //
  function changeNavbar() {
    if ($(window).width() > 480) {
      // Height of the main hero
      var heroHeight = $('.main-hero').outerHeight();

      // First scroll
      if ($(window).scrollTop() > 100) {
        $('.index-navbar').addClass('first-scroll-navbar');
      } else if ($(window).scrollTop() < 50) {
        $('.index-navbar').removeClass('first-scroll-navbar');
      }

      // Second scroll
      if ($(window).scrollTop() > heroHeight - 125) {
        $('.index-navbar').addClass('second-scroll-navbar');
      } else if ($(window).scrollTop() < heroHeight) {
        $('.index-navbar').removeClass('second-scroll-navbar');
      }
    }
  }
  // Functions to run on scroll
  $(window).scroll(function () {
    changeNavbar();
  });
  // Functions to run on resize
  $(window).resize(function () {
    changeNavbar();
  });
  // On page loag
  changeNavbar();
  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

  // - - - - - - - - - - - Remove navbar on mobile- - - - - - - - - - - - - - //
  function removeFixedNavbar() {
    if ($(window).width() < 480) {
      $('.index-navbar').removeClass('navbar-fixed-top');
      $('.index-navbar').addClass('navbar-default');
      $('.index-navbar').addClass('mobile-navbar');
    } else {
      $('.index-navbar').addClass('navbar-fixed-top');
      $('.index-navbar').removeClass('navbar-default');
      $('.index-navbar').removeClass('mobile-navbar');
    }
  }
  // Functions to run on resize
  $(window).resize(function () {
    removeFixedNavbar();
  });
  // On page loag
  removeFixedNavbar();

  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 7 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 8 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 9 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
__webpack_require__(8);
__webpack_require__(9);
__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);
__webpack_require__(6);
module.exports = __webpack_require__(7);


/***/ })
/******/ ]);