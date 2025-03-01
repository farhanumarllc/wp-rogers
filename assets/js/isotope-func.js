(function ($) {
  "use strict";

  //function Load
  function daisy_isotope_scripts_load() {
    var $ = jQuery;

    // isotop
    $(".grid").imagesLoaded(function () {
      // init Isotope
      var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
          // use outer width of grid-sizer for columnWidth
          columnWidth: ".grid-item",
        },
      });
      // filter items on button click
      $(".portfolio__menu").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");

        $grid.isotope({
          filter: filterValue,
        });
      });
    });

    //for menu active class
    $(".portfolio__menu button").on("click", function (event) {
      $(this).siblings(".active").removeClass("active");
      $(this).addClass("active");
      event.preventDefault();
    });

    // isotop
    $(".portfolio-masonry").imagesLoaded(function () {
      // init Isotope
      var $grid = $(".portfolio-masonry").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
          // use outer width of grid-sizer for columnWidth
          columnWidth: ".grid-item",
        },
      });
    });

    /*=======================================
        //  Isotope initialization
        ========================================*/
    let IsotopeWrap1 = $(".isotope-wrap-1");
    if (IsotopeWrap1.length > 0) {
      let $isotope;
      let blogGallerIso = $(".isotope-container-1", IsotopeWrap1).imagesLoaded(
        function () {
          $isotope = $(".isotope-container-1", IsotopeWrap1).isotope({
            filter: "*",
            transitionDuration: "1s",
            hiddenStyle: {
              opacity: 0,
              transform: "scale(0.001)",
            },
            visibleStyle: {
              transform: "scale(1)",
              opacity: 1,
            },
            percentPosition: true,
            masonry: {
              columnWidth: ".grid-item",
            },
          });
        }
      );
      IsotopeWrap1.find(".isotope-menu").on("click", "a", function () {
        let $this = $(this);
        $this
          .parent(".isotope-menu")
          .find("a")
          .removeClass("isotope-menu__item--current");
        $this.addClass("isotope-menu__item--current");
        let selector = $this.attr("data-filter");
        $isotope.isotope({
          filter: selector,
        });
        return false;
      });
    }

    /*-------------------------------------
            Masonry
        -------------------------------------*/
    jQuery(document).ready(function ($) {
      "use strict";

      var $container = $(".isotope-container-1"),
        colWidth = function () {
          var w = $container.width(),
            columnNum = 1,
            columnWidth = 0;
          if (w > 960) {
            columnNum = 3;
          } else if (w > 640) {
            columnNum = 2;
          } else if (w > 480) {
            columnNum = 1;
          }
          columnWidth = Math.floor(w / columnNum);
          $container.find(".grid-item").each(function () {
            var $item = $(this),
              multiplier_w = $item.attr("class").match(/item-w(\d)/),
              multiplier_h = $item.attr("class").match(/item-h(\d)/),
              width = multiplier_w
                ? columnWidth * multiplier_w[1] - 24
                : columnWidth - 24,
              height = multiplier_h
                ? columnWidth * multiplier_h[1] * 0.95 - 24
                : columnWidth * 0.95 - 24;
            $item.css({
              width: width,
              height: height,
            });
          });
          return columnWidth;
        },
        isotope = function () {
          $container.isotope({
            resizable: true,
            itemSelector: ".grid-item",
            masonry: {
              columnWidth: colWidth(),
              // gutterWidth: 10
            },
          });
        };
      isotope();

      $(".poretfolio-masonry-tab a").click(function () {
        $(".poretfolio-masonry-tab .current").removeClass("current");
        $(this).addClass("current");

        var selector = $(this).attr("data-filter");
        $container.isotope({
          filter: selector,
          animationOptions: {
            duration: 750,
            easing: "linear",
            queue: false,
          },
        });
        return false;
      });
    });

    /*-------------------------------------
        Masonry
        -------------------------------------*/
    var galleryIsoContainer = $("#no-equal-gallery");
    if (galleryIsoContainer.length) {
      var blogGallerIso = galleryIsoContainer.imagesLoaded(function () {
        blogGallerIso.isotope({
          itemSelector: ".no-equal-item",
          masonry: {
            columnWidth: ".no-equal-item",
            horizontalOrder: true,
          },
        });
      });
    }

    $(".grid").isotope({
      itemSelector: ".grid-item",
      masonry: {
        columnWidth: 100,
      },
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
            daisy_isotope_scripts_load();
          }
        );
      }
    });
  });

  $(document).ready(function () {
    daisy_isotope_scripts_load();
  });
})(jQuery);
