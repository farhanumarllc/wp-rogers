(function ($) {
  "use strict";

  /*----------------------------------
    //TweenMax Mouse Effect
    -----------------------------------*/
  $(".motion-effects-wrap").mousemove(function (e) {
    parallaxIt(e, ".motion-effects1", -100);
    parallaxIt(e, ".motion-effects2", -200);
    parallaxIt(e, ".motion-effects3", 100);
    parallaxIt(e, ".motion-effects4", 200);
    parallaxIt(e, ".motion-effects5", -50);
    parallaxIt(e, ".motion-effects6", 50);
  });

  function parallaxIt(e, target_class, movement) {
    let $wrap = $(e.target).parents(".motion-effects-wrap");
    if (!$wrap.length) return;
    let $target = $wrap.find(target_class);
    let relX = e.pageX - $wrap.offset().left;
    let relY = e.pageY - $wrap.offset().top;
    TweenMax.to($target, 1, {
      x: ((relX - $wrap.width() / 2) / $wrap.width()) * movement,
      y: ((relY - $wrap.height() / 2) / $wrap.height()) * movement,
    });
  }

  /*----------------------------------
    // Tilt js Effect
    -----------------------------------*/
  $(window).on("load resize", function () {
    if ($(window).width() >= 992) {
      const aboutImg1 = $(".about-img--style-1").tilt();
    }
  });
})(jQuery);
