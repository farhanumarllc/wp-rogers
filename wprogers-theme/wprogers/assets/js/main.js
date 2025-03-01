(function ($) {
  "use strict";

  // Daisy Functions
  function daisy_content_load_scripts() {
    /*------------------------------------
    	// Header
    	------------------------------------*/
    // Fixed header
    $(window).on("scroll", function () {
      if ($("header").hasClass("sticky-on")) {
        let stickyPlaceHolder = $("#sticky-placeholder"),
          menu = $("#navbar-wrap"),
          menuH = menu.outerHeight(),
          topbarH = $("#topbar-wrap").outerHeight() || 0,
          targrtScroll = topbarH,
          header = $("header");
        if ($(window).scrollTop() > 400) {
          header.addClass("sticky");
          stickyPlaceHolder.height(menuH);
        } else {
          header.removeClass("sticky");
          stickyPlaceHolder.height(0);
        }
      }
    });

    // Fixed header mobile
    $(window).on("scroll", function () {
      const stickyPlaceHolder = $("#mobile-sticky-placeholder"),
        menu = $("#mobile-menu-bar-wrap"),
        menuH = menu.outerHeight(),
        topbarH = $("#mobile-top-bar").outerHeight() || 0,
        topAdminH = $("#wpadminbar").outerHeight() || 0,
        targrtScroll = topbarH + topAdminH;
      if ($(window).scrollTop() > targrtScroll) {
        $("#meanmenu").addClass("mobile-sticky");
        stickyPlaceHolder.height(menuH);
      } else {
        $("#meanmenu").removeClass("mobile-sticky");
        stickyPlaceHolder.height(0);
      }
    });

    /* Counter */
    var counterContainer = $(".counterUp");
    if (counterContainer.length) {
      counterContainer.counterUp({
        delay: counterContainer.data("rtsteps"),
        time: counterContainer.data("rtspeed"),
      });
    }

    // humburger
    $(".humburger").on("click", function () {
      $(".humburger").toggleClass("active");
    });

    // Home pages body class
    function addHomePageBodyClass() {
      $(".main-homeOne").parents().find("body").addClass("homeOne");
      $(".main-homeTwo").parents().find("body").addClass("homeTwo");
      $(".main-homeThree").parents().find("body").addClass("homeThree");
      $(".main-homeFour").parents().find("body").addClass("homeFour");
    }
    addHomePageBodyClass();

    // pricing swithces
    let pricingWrapper = $(".pricing-wrapper");
    if (pricingWrapper) {
      $(".pricing-wrapper").each(function () {
        $(".pricing-switch-container").on("click", function () {
          $(".pricing-switch")
            .parents(".price-switch-box")
            .toggleClass("price-switch-box--active"),
            $(".pricing-switch").toggleClass("pricing-switch-active"),
            $(".price-box").toggleClass("price-box-show price-box-hide");
        });
      });
    }

    /*-------------------------------------
          Mobile Menu Toggle
          -------------------------------------*/
    $(".sidebarBtn").on("click", function (e) {
      e.preventDefault();
      if ($(".rt-slide-nav").is(":visible")) {
        $(".rt-slide-nav").slideUp();
        $("body").removeClass("slidemenuon");
      } else {
        $(".rt-slide-nav").slideDown();
        $("body").addClass("slidemenuon");
      }
    });

    /*-------------------------------------
          Mobile Menu Dropdown
          -------------------------------------*/
    let rtMobileMenu = $(".offscreen-navigation .mobile-menu");

    if (rtMobileMenu.length) {
      rtMobileMenu.children("li").addClass("menu-item-parent");
      rtMobileMenu
        .find(".menu-item-has-children > a")
        .on("click", function (e) {
          e.preventDefault();
          $(this).toggleClass("opened");
          let n = $(this).next(".sub-menu"),
            s = $(this).closest(".menu-item-parent").find(".sub-menu");
          rtMobileMenu
            .find(".sub-menu")
            .not(s)
            .slideUp(250)
            .prev("a")
            .removeClass("opened"),
            n.slideToggle(250);
        });
      rtMobileMenu
        .find(".menu-item:not(.menu-item-has-children) > a")
        .on("click", function (e) {
          $(".rt-slide-nav").slideUp();
          $("body").removeClass("slidemenuon");
        });
    }

    // menuActiveClass
    function menuActiveClass() {
      let currentPage = location.pathname.split("/"),
        current = currentPage[1];
      $(".menu li a").each(function () {
        let $this = $(this);
        if ($this.attr("href") === current) {
          $this.addClass("menu__link--active");
          $this
            .parents(".menu__item--has-child")
            .addClass("menu__item--active");
        }
      });
    }
    menuActiveClass();

    /*-----------------------------------
        // counter 
        ----------------------------------*/
    let counter = true;
    $(".counter-appear").appear();
    $(".counter-appear").on("appear", function () {
      if (counter) {
        counter = false;
      }
    });

    /*-------------------------------------
    	// count down
    	------------------------------------*/
    let eventCounter1 = $("#count-down-1");
    if (eventCounter1.length) {
      eventCounter1.countdown("2021/09/23", function (e) {
        $(this).html(
          e.strftime(
            '<div class="count-down-block"><span>%D</span> :</div> <div class="count-down-block"> <span>%H</span> :</div><div class="count-down-block"> <span>%M </span>:</div><div class="count-down-block"> <span> %S </span></div>'
          )
        );
      });
    }

    /* Theia Side Bar */
    if (typeof $.fn.theiaStickySidebar !== "undefined") {
      $(".has-sidebar .fixed-bar-coloum").theiaStickySidebar({
        additionalMarginTop: 120,
      });
    }

    /*================================== start Utilities ========================================*/

    /*------------------------------------
        //  Offcanvas Menu activation code
        -----------------------------------*/
    $("#wrapper").on("click", ".offcanvas-menu-btn", function (e) {
      e.preventDefault();
      let $this = $(this),
        wrapper = $(this).parents("body").find(">#wrapper"),
        wrapMask = $("<div />").addClass("offcanvas-mask"),
        offCancas = $("#offcanvas-wrap"),
        position = offCancas.data("position") || "left";

      if ($this.hasClass("menu-status-open")) {
        wrapper.addClass("open").append(wrapMask);
        $this.removeClass("menu-status-open").addClass("menu-status-close");
        offCancas.css({
          transform: "translateX(0)",
        });
      } else {
        removeOffcanvas();
      }

      function removeOffcanvas() {
        wrapper.removeClass("open").find("> .offcanvas-mask").remove();
        $this.removeClass("menu-status-close").addClass("menu-status-open");
        if (position === "left") {
          offCancas.css({
            transform: "translateX(-105%)",
          });
        } else {
          offCancas.css({
            transform: "translateX(105%)",
          });
        }
      }
      $(".offcanvas-mask, .offcanvas-close").on("click", function () {
        removeOffcanvas();
      });

      return false;
    });

    /*-------------------------------------
        //	Offcanvas cart  activation code
        -------------------------------------*/
    $("#wrapper").on("click", ".cart-menu-btn", function (e) {
      e.preventDefault();
      let $this = $(this),
        wrapper = $(this).parents("body").find(">#wrapper"),
        wrapMask = $("<div />").addClass("offcanvas-mask"),
        offCancas = $("#cart-wrap"),
        position = offCancas.data("position") || "left";

      if ($this.hasClass("menu-open-btn")) {
        wrapper.addClass("open-cart").append(wrapMask);
        offCancas.css({
          transform: "translateX(0)",
        });
      } else {
        removeOffcanvas();
      }

      function removeOffcanvas() {
        wrapper.removeClass("open-cart").find("> .offcanvas-mask").remove();
        if (position === "left") {
          offCancas.css({
            transform: "translateX(-105%)",
          });
        } else {
          offCancas.css({
            transform: "translateX(105%)",
          });
        }
      }
      $(".offcanvas-mask, .offcanvas-close").on("click", function () {
        removeOffcanvas();
      });

      return false;
    });

    /*-----------------------------------
        //	Jquery Serch Box
        -----------------------------------*/
    $('a[href="#template-search"]').on("click", function (event) {
      event.preventDefault();
      let target = $("#template-search");
      target.addClass("open");
      setTimeout(function () {
        target.find("input").focus();
      }, 600);
      return false;
    });

    $("#template-search, #template-search button.close").on(
      "click keyup",
      function (event) {
        if (
          event.target === this ||
          event.target.className === "close" ||
          event.keyCode === 27
        ) {
          $(this).removeClass("open");
        }
      }
    );

    /*------------------------------
        // Tooltip
        ------------------------------*/
    $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip({
        offset: [0, 5],
      });
    });

    /*-------------------------------
         //  WOW
        -------------------------------*/
    let wow = new WOW({
      boxClass: "wow",
      animateClass: "animated",
      offset: 0,
      mobile: false,
      live: true,
      scrollContainer: null,
    });
    wow.init();

    /*-------------------------------
         //  Back to Top
        -------------------------------*/
    const backToTop = document.getElementById("back-to-top");
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (backToTop !== null) {
        if (
          document.body.scrollTop > 80 ||
          document.documentElement.scrollTop > 80
        ) {
          backToTop.style.display = "block";
        } else {
          backToTop.style.display = "none";
        }
      }
    }
    if (backToTop !== null) {
      backToTop.addEventListener("click", (e) => {
        e.preventDefault();
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      });
    }

    /*-------------------------------------
          Window Load and Resize
          -------------------------------------*/
    $(window).on("load", function () {
      // Page Preloader
      let preloader = $("#preloader");
      preloader &&
        $("#preloader").fadeOut("slow", function () {
          $(this).remove();
        });
    });

    // video pop up
    let videoPopUp = $(".play-btn");
    if (videoPopUp.length) {
      videoPopUp.magnificPopup({
        type: "iframe",
        iframe: {
          markup:
            '<div class="mfp-iframe-scaler">' +
            '<div class="mfp-close"></div>' +
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
            "</div>",
          patterns: {
            youtube: {
              index: "youtube.com/",
              id: "v=",
              src: "https://www.youtube.com/embed/%id%?autoplay=1",
            },
            vimeo: {
              index: "vimeo.com/",
              id: "/",
              src: "//player.vimeo.com/video/%id%?autoplay=1",
            },
            gmaps: {
              index: "//maps.google.",
              src: "%id%&output=embed",
            },
          },
          srcAction: "iframe_src",
        },
      });
    }

    /*-----------------------------------
    	 // Section background image 
    	----------------------------------*/
    imageFunction();

    function imageFunction() {
      $("[data-bg-image]").each(function () {
        let img = $(this).data("bg-image");
        $(this).css({
          backgroundImage: "url(" + img + ")",
        });
      });
    }
    /*================================== end Utilities ========================================*/

    /*--------------------------------
        // currentYear
        -------------------------------*/
    let currentYear = document.querySelectorAll(".currentYear");
    if (currentYear) {
      let date = new Date();
      let currYear = date.getFullYear();
      currentYear.forEach((ele) => (ele.innerHTML = currYear));
    }

    let rtCount = document.querySelector(".rt-countdown");

    if (rtCount) {
      const rtCountDown = new Countdown({
        cont: rtCount,
        countdown: true,
        date: 1636811434399,
        outputTranslation: {
          year: "Years",
          week: "Weeks",
          day: "Days",
          hour: "Hours",
          minute: "Minutes",
          second: "Seconds",
        },
        endCallback: "Hello",
        outputFormat: "day|hour|minute|second",
      });
      rtCountDown.start();
    }

    // with skill bar
    $(".skill__per").each(function () {
      let $this = $(this);
      let per = $this.attr("data-per");
      $this.css("width", per + "%");
      $({
        animatedValue: 0,
      }).animate(
        {
          animatedValue: per,
        },
        {
          duration: 1000,
          step: function () {
            $this.attr("data-per", Math.floor(this.animatedValue) + "%");
          },
          complete: function () {
            $this.attr("data-per", Math.floor(this.animatedValue) + "%");
          },
        }
      );
    });

    // Banner Slider
    const bannerSliderActiveStyleTwo = new Swiper(
      ".bannerSliderActive--style2",
      {
        slidesPerView: 2,
        centeredSlides: true,
        loop: true,
        spaceBetween: 30,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
          pauseOnMouseEnter: true,
        },
        speed: 1200,
        navigation: {
          nextEl: ".bannerSliderActive__next",
          prevEl: ".bannerSliderActive__prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1,
          },
          992: {
            slidesPerView: 1.3,
          },
          1200: {
            slidesPerView: 2,
          },
        },
      }
    );

    /*-------------------------------------
        // rt-thumbnail-slider-thumb-style-2
        ------------------------------------*/
    let rtThumbnailTliderThumbStyle2 = new Swiper(
      ".rt-thumbnail-slider-thumb-style-2",
      {
        loop: true,
        spaceBetween: 0,
        slidesPerView: 3,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: 1,
            direction: "horizontal",
            autoHeight: true,
          },
          576: {
            slidesPerView: 1,
            direction: "horizontal",
            autoHeight: true,
          },
          768: {
            slidesPerView: 2,
            direction: "horizontal",
            autoHeight: true,
          },
          1200: {
            slidesPerView: 3,
            direction: "vertical",
            autoHeight: false,
          },
        },
      }
    );
    let rtThumbnailTliderStyle2 = new Swiper(".rt-thumbnail-slider-style-2", {
      loop: true,
      spaceBetween: 0,
      speed: 800,
      thumbs: {
        swiper: rtThumbnailTliderThumbStyle2,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    /*---------------------------------------
        //  rt-slider-style-9
        ---------------------------------------*/
    $(".rt-slider-style-9").each(function (i) {
      let options = $(this).find(".swiper-wrapper").data("carousel-options");

      let rtSliderStyler9 = $(this).get(0);
      let prev = $(this).children().find(".btn-prev").get(0);
      let next = $(this).children().find(".btn-next").get(0);

      let swiper9 = new Swiper(rtSliderStyler9, {
        slidesPerView: options["col_xl"],
        loop: true,
        spaceBetween: 0,
        slideToClickedSlide: true,
        allowSlideNext: options["allowSlideNext"],
        allowSlidePrev: options["allowSlidePrev"],
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: options["col_xs"],
          },
          575: {
            slidesPerView: options["col_sm"],
          },
          768: {
            slidesPerView: options["col_md"],
          },
          992: {
            slidesPerView: options["col_lg"],
          },
          1200: {
            slidesPerView: options["col_lg"],
          },
        },
      });

      if (options["autoplay"]) {
        swiper9.params.autoplay.enabled = true;
        swiper9.params.autoplay.delay = options["speed"];
      }

      if (options["autoplay"] == true) {
        swiper9.autoplay.start();
      } else {
        swiper9.autoplay.stop();
      }
    });
  }

  // Window Load+Resize
  $(window).on("load resize", function () {
    // Elementor Frontend Load
    $(window).on("elementor/frontend/init", function () {
      if (elementorFrontend.isEditMode()) {
        elementorFrontend.hooks.addAction(
          "frontend/element_ready/widget",
          function () {
            daisy_content_load_scripts();
          }
        );
      }
    });
  });

  // Window Load
  $(window).on("load", function () {
    daisy_content_load_scripts();
  });

  $(window).scroll(function () {});
})(jQuery);
