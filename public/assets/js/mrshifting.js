!(function($) {
  "use strict";

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 400) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.overlay-content a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.overlay-content').length) {
          $('#myNav').removeClass('menu_width');
          $('.custom-btn').removeClass('custom-cross-btn');
        }
        return false;
      }
    }
  });

      // Hero images carousel (uses the Owl Carousel library)
      $(".heroimg-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        margin:20,
        responsive: {
          0: {
            items: 3
          },
          768: {
            items: 5
          },
          900: {
            items: 8
          }
        }
      });

      // Hero carousel (uses the Owl Carousel library)
      $(".hero-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        margin:20,
        animateOut: 'slideOutDown',
        animateIn: 'fadeIn',
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 1
          },
          900: {
            items: 1
          }
        }
      });

  // why us carousel (uses the Owl Carousel library)
  $('.whyus-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    nav: false,
    loop: true,
    margin:25,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        center: true,
        items: 3
      }
    }
  });

  // Social Media carousel (uses the Owl Carousel library)
  $(".socialmedia-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    margin:20,
    responsive: {
      0: {
        items: 3
      },
      768: {
        items: 5
      },
      900: {
        items: 6
      }
    }
  });

  // AOS animation
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  // Initiate the venobox plugin
  $(window).on('load', function() {
    $('.venobox').venobox();
  });

})(jQuery);