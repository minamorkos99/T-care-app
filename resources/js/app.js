require('./bootstrap');
(function ($) {
    'use strict';
  
    // ----------------------------
    // AOS
    // ----------------------------
    AOS.init({
      once: true
    });
  
    
    $(window).on('scroll', function () {
          //.Scroll to top show/hide
      var scrollToTop = $('.scroll-top-to'),
        scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollToTop.fadeIn(200);
      } else {
        scrollToTop.fadeOut(100);
      }
    });
      // scroll-to-top
    $('.scroll-top-to').on('click', function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  
    $(document).ready(function() {
  
      // navbarDropdown
      if ($(window).width() < 992) {
        $('.main-nav .dropdown-toggle').on('click', function () {
          $(this).siblings('.dropdown-menu').animate({
            height: 'toggle'
          }, 300);
        });
      }
      // scroll
      // $('.scrollTo').on('click', function (e) {
      //   e.preventDefault();
      //   var target = $(this).attr('href');
      //   $('html, body').animate({
      //     scrollTop: ($(target).offset().top)
      //   }, 500);
      // });
  
    });
  
  })(jQuery);