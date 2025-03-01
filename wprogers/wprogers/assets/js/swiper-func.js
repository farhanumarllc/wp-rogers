(function ($) {
  "use strict";

  //function Load
  function daisy_swiper_scripts_load() {
    var $ = jQuery;
    /*---------------------------------------
        // rt-slider-style-1
        ----------------------------------------*/
    $(".rt-slider-style-1").each(function (i) {
      let opt1 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyle1 = $(this).get(0);
      let prev = $(this).children().find(".btn-prev").get(0);
      let next = $(this).children().find(".btn-next").get(0);

      let swiper1 = new Swiper(rtSliderStyle1, {
        slidesPerView: opt1["col_xl"],
        spaceBetween: 24,
        loop: true,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt1["col_xs"],
          },
          575: {
            slidesPerView: opt1["col_sm"],
          },
          768: {
            slidesPerView: opt1["col_md"],
          },
          1200: {
            slidesPerView: opt1["col_lg"],
          },
        },
      });

      if (opt1["autoplay"]) {
        swiper1.params.autoplay.delay = opt1["speed"];
      }

      if (opt1["autoplay"] == true) {
        swiper1.autoplay.start();
      } else {
        swiper1.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-2
        ---------------------------------------*/
    $(".rt-slider-style-2").each(function (i) {
      let opt2 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyle2 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".rt-swiper-pagination")
        .get(0);

      let swiper2 = new Swiper(rtSliderStyle2, {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 30,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
          renderBullet: function (index, className) {
            return (
              '<span class="' + className + '">' + "0" + (index + 1) + "</span>"
            );
          },
        },
        speed: 2000,
      });

      if (opt2["autoplay"] == true) {
        swiper2.autoplay.start();
      } else {
        swiper2.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-3
        ---------------------------------------*/
    $(".rt-slider-style-3").each(function (i) {
      let opt3 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyle3 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);

      let swiper3 = new Swiper(rtSliderStyle3, {
        slidesPerView: opt3["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt3["col_xs"],
          },
          575: {
            slidesPerView: opt3["col_sm"],
          },
          768: {
            slidesPerView: opt3["col_md"],
          },
          1200: {
            slidesPerView: opt3["col_lg"],
          },
        },
      });

      if (opt3["autoplay"]) {
        swiper3.params.autoplay.delay = opt3["speed"];
      }

      if (opt3["autoplay"] == true) {
        swiper3.autoplay.start();
      } else {
        swiper3.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-4
        ---------------------------------------*/
    $(".rt-slider-style-4").each(function (i) {
      let options = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyle4 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);

      let swiper4 = new Swiper(rtSliderStyle4, {
        slidesPerView: options["col_xl"],
        loop: true,
        spaceBetween: 15,
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
          1200: {
            slidesPerView: options["col_lg"],
          },
        },
      });

      if (options["autoplay"]) {
        swiper4.params.autoplay.enabled = true;
        swiper4.params.autoplay.delay = options["speed"];
      }

      if (options["autoplay"] == true) {
        swiper4.autoplay.start();
      } else {
        swiper4.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-5
        ---------------------------------------*/
    $(".rt-slider-style-5").each(function (i) {
      let opt5 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyle5 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper5 = new Swiper(rtSliderStyle5, {
        slidesPerView: opt5["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt5["col_xs"],
          },
          575: {
            slidesPerView: opt5["col_sm"],
          },
          768: {
            slidesPerView: opt5["col_md"],
          },
          992: {
            slidesPerView: opt5["col_md"],
          },
          1200: {
            slidesPerView: opt5["col_lg"],
          },
        },
      });

      if (opt5["autoplay"]) {
        swiper5.params.autoplay.enabled = true;
        swiper5.params.autoplay.delay = opt5["speed"];
      }

      if (opt5["autoplay"] == true) {
        swiper5.autoplay.start();
      } else {
        swiper5.autoplay.stop();
      }
    });

    /*---------------------------------------
        // rt-slider-style-6
        ----------------------------------------*/
    $(".rt-slider-style-6").each(function (i) {
      let opt6 = $(this).find(".swiper-wrapper").data("carousel-options");

      let rtSliderStyle6 = $(this).get(0);
      let prev = $(this).children().find(".btn-prev").get(0);
      let next = $(this).children().find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".testimonial-wrapper--style-3")
        .find(".swiper-pagination")
        .get(0);

      let swiper6 = new Swiper(rtSliderStyle6, {
        slidesPerView: opt6["col_xl"],
        spaceBetween: 24,
        loop: true,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt6["col_xs"],
          },
          575: {
            slidesPerView: opt6["col_sm"],
          },
          768: {
            slidesPerView: opt6["col_md"],
          },
          1200: {
            slidesPerView: opt6["col_lg"],
          },
        },
      });

      if (opt6["autoplay"]) {
        swiper6.params.autoplay.delay = opt6["speed"];
      }

      if (opt6["autoplay"] == true) {
        swiper6.autoplay.start();
      } else {
        swiper6.autoplay.stop();
      }
    });
    /*---------------------------------------
        // rt-slider-style-7
        ----------------------------------------*/
    $(".rt-slider-style-7").each(function (i) {
      let opt7 = $(this).find(".swiper-wrapper").data("carousel-options");

      let rtSliderStyle7 = $(this).get(0);
      let swiper7 = new Swiper(rtSliderStyle7, {
        slidesPerView: opt7["col_xl"],
        spaceBetween: 24,
        loop: true,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt7["col_xs"],
          },
          575: {
            slidesPerView: opt7["col_sm"],
          },
          768: {
            slidesPerView: opt7["col_md"],
          },
          992: {
            slidesPerView: opt7["col_md"],
          },
          1200: {
            slidesPerView: opt7["col_lg"],
          },
        },
      });

      if (opt7["autoplay"]) {
        swiper7.params.autoplay.delay = opt7["speed"];
      }

      if (opt7["autoplay"] == true) {
        swiper7.autoplay.start();
      } else {
        swiper7.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-8
        ---------------------------------------*/
    $(".rt-slider-style-8").each(function (i) {
      let opt8 = $(this).find(".swiper-wrapper").data("carousel-options");

      let rtSliderStyle8 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper8 = new Swiper(rtSliderStyle8, {
        slidesPerView: opt8["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt8["col_xs"],
          },
          575: {
            slidesPerView: opt8["col_sm"],
          },
          768: {
            slidesPerView: opt8["col_md"],
          },
          992: {
            slidesPerView: opt8["col_md"],
          },
          1200: {
            slidesPerView: opt8["col_lg"],
          },
        },
      });

      if (opt8["autoplay"]) {
        swiper8.params.autoplay.delay = opt8["speed"];
      }

      if (opt8["autoplay"] == true) {
        swiper8.autoplay.start();
      } else {
        swiper8.autoplay.stop();
      }
    });

    /*---------------------------------------
        // rt-slider-style-1
        ----------------------------------------*/
    $(".rt-slider-style-15").each(function (i) {
      let opt15 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtsliderstyle15 = $(this).get(0);
      let prev = $(this).children().find(".btn-prev").get(0);
      let next = $(this).children().find(".btn-next").get(0);

      let swiper15 = new Swiper(rtsliderstyle15, {
        slidesPerView: opt15["col_xl"],
        spaceBetween: 24,
        loop: true,
        slideToClickedSlide: true,
        autoplay: {
          delay: 4000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt15["col_xs"],
          },
          768: {
            slidesPerView: opt15["col_sm"],
          },
          992: {
            slidesPerView: opt15["col_md"],
          },
          1200: {
            slidesPerView: opt15["col_lg"],
          },
        },
      });

      if (opt15["autoplay"]) {
        swiper15.params.autoplay.delay = opt15["speed"];
      }

      if (opt15["autoplay"] == true) {
        swiper15.autoplay.start();
      } else {
        swiper15.autoplay.stop();
      }
    });

    // Banner Slider
    const bannerSliderActive = new Swiper(".bannerSliderActive", {
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
          slidesPerView: 1.8,
        },
      },
    });

    /*---------------------------------------
        //  rt-slider-style-10
        ---------------------------------------*/
    $(".rt-slider-style-10").each(function (i) {
      let opt10 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyler10 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper10 = new Swiper(rtSliderStyler10, {
        slidesPerView: opt10["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt10["col_xs"],
          },
          575: {
            slidesPerView: opt10["col_sm"],
          },
          768: {
            slidesPerView: opt10["col_md"],
          },
          992: {
            slidesPerView: opt10["col_md"],
          },
          1200: {
            slidesPerView: opt10["col_lg"],
          },
        },
      });

      if (opt10["autoplay"]) {
        swiper10.params.autoplay.delay = opt10["speed"];
      }

      if (opt10["autoplay"] == true) {
        swiper10.autoplay.start();
      } else {
        swiper10.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-11
        ---------------------------------------*/
    $(".rt-slider-style-11").each(function (i) {
      let opt11 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyler11 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper11 = new Swiper(rtSliderStyler11, {
        slidesPerView: opt11["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt11["col_xs"],
          },
          575: {
            slidesPerView: opt11["col_sm"],
          },
          768: {
            slidesPerView: opt11["col_md"],
          },
          992: {
            slidesPerView: opt11["col_md"],
          },
          1200: {
            slidesPerView: opt11["col_lg"],
          },
        },
      });

      if (opt11["autoplay"]) {
        swiper11.params.autoplay.delay = opt11["speed"];
      }

      if (opt11["autoplay"] == true) {
        swiper11.autoplay.start();
      } else {
        swiper11.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-12
        ---------------------------------------*/
    $(".rt-slider-style-12").each(function (i) {
      let opt12 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyler12 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper12 = new Swiper(rtSliderStyler12, {
        slidesPerView: opt12["col_xl"],
        loop: true,
        spaceBetween: 0,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt12["col_xs"],
          },
          575: {
            slidesPerView: opt12["col_sm"],
          },
          768: {
            slidesPerView: opt12["col_md"],
          },
          992: {
            slidesPerView: opt12["col_md"],
          },
          1200: {
            slidesPerView: opt12["col_lg"],
          },
        },
      });

      if (opt12["autoplay"]) {
        swiper12.params.autoplay.delay = opt12["speed"];
      }

      if (opt12["autoplay"] == true) {
        swiper12.autoplay.start();
      } else {
        swiper12.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-13
        ---------------------------------------*/
    $(".rt-slider-style-13").each(function (i) {
      let opt13 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyler13 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper13 = new Swiper(rtSliderStyler13, {
        slidesPerView: opt13["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt13["col_xs"],
          },
          575: {
            slidesPerView: opt13["col_sm"],
          },
          768: {
            slidesPerView: opt13["col_md"],
          },
          992: {
            slidesPerView: opt13["col_md"],
          },
          1300: {
            slidesPerView: opt13["col_lg"],
          },
        },
      });

      if (opt13["autoplay"]) {
        swiper13.params.autoplay.delay = opt13["speed"];
      }

      if (opt13["autoplay"] == true) {
        swiper13.autoplay.start();
      } else {
        swiper13.autoplay.stop();
      }
    });

    /*---------------------------------------
        //  rt-slider-style-14
        ---------------------------------------*/
    $(".rt-slider-style-14").each(function (i) {
      let opt14 = $(this).find(".swiper-wrapper").data("carousel-options");
      let rtSliderStyler14 = $(this).get(0);
      let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
      let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);
      let pagination = $(this)
        .parents(".rt-slide-wrap")
        .find(".swiper-pagination")
        .get(0);
      let swiper14 = new Swiper(rtSliderStyler14, {
        slidesPerView: opt14["col_xl"],
        loop: true,
        spaceBetween: 24,
        slideToClickedSlide: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
        speed: 800,
        breakpoints: {
          0: {
            slidesPerView: opt14["col_xs"],
          },
          575: {
            slidesPerView: opt14["col_sm"],
          },
          768: {
            slidesPerView: opt14["col_md"],
          },
          1200: {
            slidesPerView: opt14["col_lg"],
          },
        },
      });

      if (opt14["autoplay"]) {
        swiper14.params.autoplay.delay = opt14["speed"];
      }

      if (opt14["autoplay"] == true) {
        swiper14.autoplay.start();
      } else {
        swiper14.autoplay.stop();
      }
    });

    /*-------------------------------------
          // rt-thumbnail-slider-thumb-style-1
          ------------------------------------*/

    (function thumbnailSlider1() {
      let rtThumbnailTliderThumbStyle1 = new Swiper(
        ".rt-thumbnail-slider-thumb-style-1",
        {
          loop: true,
          spaceBetween: 15,
          slidesPerView: 6,
          watchSlidesVisibility: true,
          watchSlidesProgress: true,
          speed: 800,
        }
      );
      $(".rt-thumbnail-slider-style-1").each(function (i) {
        let rtThumbnailTliderStyle1 = $(this).get(0);
        let prev = $(this).parents(".rt-slide-wrap").find(".btn-prev").get(0);
        let next = $(this).parents(".rt-slide-wrap").find(".btn-next").get(0);

        new Swiper(rtThumbnailTliderStyle1, {
          slidesPerView: 1,
          loop: true,
          spaceBetween: 24,
          slideToClickedSlide: true,
          autoplay: {
            delay: 5000,
          },
          navigation: {
            nextEl: next,
            prevEl: prev,
          },
          speed: 800,
          thumbs: {
            swiper: rtThumbnailTliderThumbStyle1,
          },
        });
      });
    })();
  }

  // Window Load+Resize
  $(window).on("load resize", function () {
    // Elementor Frontend Load
    $(window).on("elementor/frontend/init", function () {
      if (elementorFrontend.isEditMode()) {
        elementorFrontend.hooks.addAction(
          "frontend/element_ready/widget",
          function () {
            daisy_swiper_scripts_load();
          }
        );
      }
    });
  });

  $(document).ready(function () {
    daisy_swiper_scripts_load();
  });
})(jQuery);
