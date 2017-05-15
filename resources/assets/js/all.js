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

  // - - - - - - - - - - - - Change navbar css - - - - - - - - - - - - - - - - //
  function changeNavbar () {
    if ($(window).width() > 480) {
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
  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

  // - - - - - - - - - - - Remove navbar on mobile- - - - - - - - - - - - - - //
  function removeFixedNavbar () {
    if ($(window).width() < 480) {
      $('.index-navbar').removeClass('navbar-fixed-top')
      $('.index-navbar').addClass('navbar-default')
      $('.index-navbar').addClass('mobile-navbar')
    } else {
      $('.index-navbar').addClass('navbar-fixed-top')
      $('.index-navbar').removeClass('navbar-default')
      $('.index-navbar').removeClass('mobile-navbar')
    }
  }
  // Functions to run on resize
  $(window).resize(function () {
    removeFixedNavbar()
  })
  // On page loag
  removeFixedNavbar()

  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

  // - - - - - - - - - - - - - Create new board - - - - - - - - - - - - - - - //
  var hasClassCloseIt = false

  $('.create-new-board-action-btn').click(function () {
    if (hasClassCloseIt) {
      $(this).removeClass('close-it')
      $('.title-field').removeClass('open-input')
      hasClassCloseIt = false
    } else {
      $(this).addClass('close-it')
      $('.title-field').addClass('open-input')
      $('.title-field').focus()
      hasClassCloseIt = true
    }
  })

  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
})
