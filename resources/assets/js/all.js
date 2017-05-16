/* global $ */

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

  // Set height of item to height of board/task item
  $('.create-new-item').css('height', $('.board-task-item').outerHeight())

  var hasClassCloseIt = false

  // When user clicks + button, change to X button
  $('.create-new-item-action-btn').click(function () {
    if ($('.create-new-item-input-field').val().length === 0) {
      if (hasClassCloseIt) {
        $(this).removeClass('close-it')
        $('.create-new-item-input-field').removeClass('open-input')
        $('.create-new-item-input-field').blur()
        $('.create-new-item-cancel').css('opacity', 0)
        hasClassCloseIt = false
      } else {
        $(this).addClass('close-it')
        $('.create-new-item-input-field').addClass('open-input')
        $('.create-new-item-input-field').focus()
        $('.create-new-item-cancel').css('opacity', 1)
        hasClassCloseIt = true
      }
    }
  })

  // If user types something in text box, allow them to submit form
  $('.create-new-item-input-field').on('input', function () {
    if ($(this).val().length > 0) {
      $('.create-new-item-action-btn').removeClass('close-it')
      $('.create-new-item-action-btn').addClass('submit-it')
      $('.create-new-item-action-btn').attr('type', 'submit')
      $('.create-new-item-cancel').css('opacity', 0)
      $('.create-new-item-create').css('opacity', 1)
    } else {
      $('.create-new-item-action-btn').addClass('close-it')
      $('.create-new-item-action-btn').removeClass('submit-it')
      $('.create-new-item-action-btn').attr('type', 'button')
      $('.create-new-item-cancel').css('opacity', 1)
      $('.create-new-item-create').css('opacity', 0)
    }
  })

  // Prevent Enter key from submitting form if textbox is empty
  $('.create-new-board-title-field').keydown(function (event) {
    if (event.keyCode === 13 && $('.create-new-board-title-field').val().length === 0) {
      event.preventDefault()
      return false
    }
  })

  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

  // - - - - - - - - - - - - - - - Delete Item - - - - - - - - - - - - - - - - //
  $('.task-delete-btn').click(function () {
    $('.delete-item-form').css('z-index', '-10')
    $(this).parent().parent().find('.delete-item-form').css('z-index', '10')
  })

  $('.cancel-btn').click(function () {
    $(this).parent().parent().css('z-index', '-10')
  })
  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
})
