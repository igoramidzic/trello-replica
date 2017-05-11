/* global $*/

$(document).ready(function () {
  // Add smooth scrolling to all links
  $('a').on('click', function (event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== '') {
      event.preventDefault()

      // Store hash
      var hash = this.hash

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {
      })
    }
  })

  // Change navbar css
  function changeNavbar () {
    // Height of the main hero
    var heroHeight = $('.main-hero').outerHeight()

    // First scroll
    if ($(window).scrollTop() > 100) {
      $('.index-navbar').addClass('first-scroll-navbar')
    } else if ($(window).scrollTop() < 50) {
      $('.index-navbar').removeClass('first-scroll-navbar')
    }

    // Second scroll
    if ($(window).scrollTop() > heroHeight - 125) {
      $('.index-navbar').addClass('second-scroll-navbar')
    } else if ($(window).scrollTop() < heroHeight) {
      $('.index-navbar').removeClass('second-scroll-navbar')
    }
  }
  // Functions to run on scroll
  $(window).scroll(function () {
    changeNavbar()
  })
  // Functions to run on resize
  $(window).resize(function () {
    changeNavbar()
  })
  // On page loag
  changeNavbar()
})
