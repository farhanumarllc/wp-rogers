<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wprogers
 */

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Home &#8211; WP Rogers</title>
    <meta name="robots" content="noindex, nofollow" />
    <style>
      img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px;
      }
    </style>
    <noscript
      ><style>
        #preloader {
          display: none;
        }
      </style></noscript
    >
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link
      rel="alternate"
      type="application/rss+xml"
      title="Daisy &raquo; Feed"
      href="https://radiustheme.com/demo/wordpress/themes/daisy/feed/"
    />
    <link
      rel="alternate"
      type="application/rss+xml"
      title="Daisy &raquo; Comments Feed"
      href="https://radiustheme.com/demo/wordpress/themes/daisy/comments/feed/"
    />
	
    <script>
      /* <![CDATA[ */
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2",
        },
      };
      /*! This file is auto-generated */
      !(function (i, n) {
        var o, s, e;
        function c(e) {
          try {
            var t = { supportTests: e, timestamp: new Date().valueOf() };
            sessionStorage.setItem(o, JSON.stringify(t));
          } catch (e) {}
        }
        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          var t = new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
            ),
            r =
              (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
              ));
          return t.every(function (e, t) {
            return e === r[t];
          });
        }
        function u(e, t, n) {
          switch (t) {
            case "flag":
              return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
              )
                ? !1
                : !n(
                    e,
                    "\ud83c\uddfa\ud83c\uddf3",
                    "\ud83c\uddfa\u200b\ud83c\uddf3"
                  ) &&
                    !n(
                      e,
                      "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                      "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                    );
            case "emoji":
              return !n(
                e,
                "\ud83d\udc26\u200d\u2b1b",
                "\ud83d\udc26\u200b\u2b1b"
              );
          }
          return !1;
        }
        function f(e, t, n) {
          var r =
              "undefined" != typeof WorkerGlobalScope &&
              self instanceof WorkerGlobalScope
                ? new OffscreenCanvas(300, 150)
                : i.createElement("canvas"),
            a = r.getContext("2d", { willReadFrequently: !0 }),
            o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
          return (
            e.forEach(function (e) {
              o[e] = t(a, e, n);
            }),
            o
          );
        }
        function t(e) {
          var t = i.createElement("script");
          (t.src = e), (t.defer = !0), i.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
          ((o = "wpEmojiSettingsSupports"),
          (s = ["flag", "emoji"]),
          (n.supports = { everything: !0, everythingExceptFlag: !0 }),
          (e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, { once: !0 });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                      "postMessage(" +
                      f.toString() +
                      "(" +
                      [JSON.stringify(s), u.toString(), p.toString()].join(
                        ","
                      ) +
                      "));",
                    r = new Blob([e], { type: "text/javascript" }),
                    a = new Worker(URL.createObjectURL(r), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (a.onmessage = function (e) {
                    c((n = e.data)), a.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = f(s, u, p)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                    (n.supports.everythingExceptFlag =
                      n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                (e = n.source || {}).concatemoji
                  ? t(e.concatemoji)
                  : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
      })((window, document), window._wpemojiSettings);
      /* ]]> */
    </script>
    <link
      rel="stylesheet"
      id="fluent-form-styles-css"
      href="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/plugins/fluentform/assets/css/fluent-forms-public.css?ver=5.2.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="fluentform-public-default-css"
      href="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/plugins/fluentform/assets/css/fluentform-public-default.css?ver=5.2.2"
      media="all"
    />
    <style id="wp-emoji-styles-inline-css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <style id="classic-theme-styles-inline-css">
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
      }
      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
      }
    </style>
    <style id="global-styles-inline-css">
      :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--daisy-primary: #f85c70;
        --wp--preset--color--daisy-secondary: #061526;
        --wp--preset--color--daisy-light: #ffffff;
        --wp--preset--color--daisy-black: #000000;
        --wp--preset--color--daisy-dark: #101213;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
        --wp--preset--font-size--small: 12px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 50px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
          6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }
      :where(.is-layout-flex) {
        gap: 0.5em;
      }
      :where(.is-layout-grid) {
        gap: 0.5em;
      }
      body .is-layout-flex {
        display: flex;
      }
      .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }
      .is-layout-flex > :is(*, div) {
        margin: 0;
      }
      body .is-layout-grid {
        display: grid;
      }
      .is-layout-grid > :is(*, div) {
        margin: 0;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }
      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
      }
      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-border-color {
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }
      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }
      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }
      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }
      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
      }
      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }
      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }
      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }
      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }
      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }
      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }
      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }
      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }
      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }
      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    
    <link
      rel="stylesheet"
      id="daisy-gfonts-css"
      href="//fonts.googleapis.com/css?family=Roboto%3A300%2C500%2C700%2C400%7CPoppins%3A300%2C500%2C600%2C700%2C600&#038;display=fallback&#038;ver=1.0"
      media="all"
    />
    
    <style id="daisy-dynamic-inline-css">
      .inner-banner {
        background-image: url(../../../wp-content/themes/wprogers/assets/img/blog-1-bg.webp);
      }
      .inner-banner:after {
        background-color: #000000;
      }
      .inner-banner:after {
        opacity: 0.7;
      }
      body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        line-height: 1.75;
        font-weight: normal;
        font-style: normal;
      }
      .main-menu ul li > a {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        line-height: 1.75;
        font-weight: 500;
        font-style: normal;
      }
      .main-menu ul li ul.sub-menu li a {
        font-family: "Roboto", sans-serif;
        font-size: 15px;
        line-height: 1.75;
        font-weight: 500;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h1 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h1 {
        font-size: 48px;
        line-height: 1.4;
        font-style: normal;
      }
      h2 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h2 {
        font-size: 40px;
        line-height: 1.4;
        font-style: normal;
      }
      h3 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h3 {
        font-size: 32px;
        line-height: 1.4;
        font-style: normal;
      }
      h4 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h4 {
        font-size: 24px;
        line-height: 1.4;
        font-style: normal;
      }
      h5 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h5 {
        font-size: 20px;
        line-height: 1.4;
        font-style: normal;
      }
      h6 {
        font-family: "Poppins", serif;
        font-weight: 600;
      }
      h6 {
        font-size: 18px;
        line-height: 1.4;
        font-style: normal;
      }
    </style>
    
    <meta
      name="generator"
      content="Elementor 3.24.2; settings: css_print_method-external, google_font-enabled, font_display-auto"
    />
    <style>
      .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
      .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload)
        * {
        background-image: none !important;
      }
      @media screen and (max-height: 1024px) {
        .e-con.e-parent:nth-of-type(n
            + 3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n
            + 3):not(.e-lazyloaded):not(.e-no-lazyload)
          * {
          background-image: none !important;
        }
      }
      @media screen and (max-height: 640px) {
        .e-con.e-parent:nth-of-type(n
            + 2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n
            + 2):not(.e-lazyloaded):not(.e-no-lazyload)
          * {
          background-image: none !important;
        }
      }
    </style>
    <link
      rel="icon"
      href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
      sizes="192x192"
    />
    <link
      rel="apple-touch-icon"
      href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
    />
    <meta
      name="msapplication-TileImage"
      content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
    />
  </head>

  <body
    class="page-template page-template-templates page-template-blank page-template-templatesblank-php page page-id-8128 wp-embed-responsive sticky-header transparent-header-disable page-banner-disable header-style-2 has-sidebar elementor-default elementor-kit-5 elementor-page elementor-page-8128"
  >
    <!-- Main Wrapper Start -->
    <div id="wrapper" class="wrapper">
      <a href="javascript:void(0)" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
      </a>

      <!-- Main Content Start -->
      <div id="main-content" class="main-content main-homeTwo">
        <div class="rt-header-menu mobile-sticky-on" id="meanmenu">
          <div id="mobile-sticky-placeholder"></div>
          <div class="rt-mobile-menn-bar" id="mobile-menu-bar-wrap">
            <div class="mean-bar">
              <div class="logo">
                <a href="https://radiustheme.com/demo/wordpress/themes/daisy/">
                  <img
                    width="180"
                    height="48"
					src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-dark.svg" 
                    alt="Daisy"
                  />
                </a>
              </div>
              <span class="sidebarBtn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </span>
            </div>
            <div class="rt-slide-nav">
              <div class="offscreen-navigation">
                <nav class="menu-main-primary-container">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu',
						'menu_class' => 'mobile-menu',
						'container' => 'ul',
						'container_id' => 'menu-main-menu',
						'walker' => new Custom_Walker_Nav_Menu() // Custom Walker for structure
					));
					?>
                </nav>
              </div>
            </div>
          </div>
        </div>
		<?php get_header(); ?>
        <div id="primary" class="content-area">
          <div
            data-elementor-type="wp-page"
            data-elementor-id="8128"
            class="elementor elementor-8128"
          >
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-0871ff5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
              data-id="0871ff5"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4645992"
                  data-id="4645992"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-e75927e elementor-widget elementor-widget-rt-elements"
                      data-id="e75927e"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-2f35dce">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-e2e03b3">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-70f3592">
                            <span>
                              <img
                                decoding="async"
                                width="66"
                                height="77"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_89.png"
                                class="animation-spin"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-da8bce8">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="83"
                                height="44"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_90.png"
                                class="animation-zoomeffect2"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-52f1fe9">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_91.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-244bfb6">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_92.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-f06243e">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="1692"
                                height="613"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_99.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-674516e">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="118"
                                height="118"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_100.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-10c91c6">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="66"
                                height="77"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_89.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-7bd7a2d">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="66"
                                height="77"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_89.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-13e2650 elementor-widget elementor-widget-rt-slider1"
                      data-id="13e2650"
                      data-element_type="widget"
                      data-widget_type="rt-slider1.default"
                    >
                      <div class="elementor-widget-container">
                        <section
                          class="banner banner--style-2 position-relative overflow-hidden rt-slide-wrap"
                        >
                          <div class="rt-slider-style-2 swiper">
                            <div
                              class="swiper-wrapper"
                              data-carousel-options='{"autoplay":false,"speed":"2000","allowSlideNext":true,"allowSlidePrev":true}'
                            >
                              <div class="swiper-slide">
                                <div
                                  class="banner-slide-item banner-slide-item--style-1"
                                >
                                  <div
                                    class="banner-img banner-img--style-2 d-none d-lg-block"
                                    data-bg-image="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/banner-img_2.jpg"
                                  ></div>
                                  <div class="container">
                                    <div class="row align-items-center">
                                      <div class="col-lg-7">
                                        <div
                                          class="banner-content banner-content--style-2"
                                        >
                                          <div class="banner-content__inner">
                                            <span
                                              class="banner-content__sub-title"
                                              >CREATIVE MIND, CREATIVE
                                              WORKS</span
                                            >
                                            <h2 class="banner-content__title">
                                              WE ARE CREATIVE
                                              <span class="text-ex2"
                                                >DIGITAL AGENCY</span
                                              >
                                            </h2>
                                            <p>
                                              Morbi sed lacus nec risus finibus
                                              feugiat et fermentum nibh.
                                              Pellentesque vitae ante at elit
                                              fringilla ac at purus
                                            </p>
                                            <div
                                              class="banner-content__btn-list"
                                            >
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--6"
                                              >
                                                CONTACT US
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--7"
                                              >
                                                GET QUOTE
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="banner-slide-item banner-slide-item--style-1"
                                >
                                  <div
                                    class="banner-img banner-img--style-2 d-none d-lg-block"
                                    data-bg-image="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/banner-img_3.jpg"
                                  ></div>
                                  <div class="container">
                                    <div class="row align-items-center">
                                      <div class="col-lg-7">
                                        <div
                                          class="banner-content banner-content--style-2"
                                        >
                                          <div class="banner-content__inner">
                                            <span
                                              class="banner-content__sub-title"
                                              >CREATIVE MIND, CREATIVE
                                              WORKS</span
                                            >
                                            <h2 class="banner-content__title">
                                              WE ARE CREATIVE
                                              <span class="text-ex2"
                                                >DIGITAL AGENCY</span
                                              >
                                            </h2>
                                            <p>
                                              Morbi sed lacus nec risus finibus
                                              feugiat et fermentum nibh.
                                              Pellentesque vitae ante at elit
                                              fringilla ac at purus
                                            </p>
                                            <div
                                              class="banner-content__btn-list"
                                            >
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--6"
                                              >
                                                CONTACT US
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--7"
                                              >
                                                GET QUOTE
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="banner-slide-item banner-slide-item--style-1"
                                >
                                  <div
                                    class="banner-img banner-img--style-2 d-none d-lg-block"
                                    data-bg-image="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/banner-img_2.jpg"
                                  ></div>
                                  <div class="container">
                                    <div class="row align-items-center">
                                      <div class="col-lg-7">
                                        <div
                                          class="banner-content banner-content--style-2"
                                        >
                                          <div class="banner-content__inner">
                                            <span
                                              class="banner-content__sub-title"
                                              >CREATIVE MIND, CREATIVE
                                              WORKS</span
                                            >
                                            <h2 class="banner-content__title">
                                              WE ARE CREATIVE
                                              <span class="text-ex2"
                                                >DIGITAL AGENCY</span
                                              >
                                            </h2>
                                            <p>
                                              Morbi sed lacus nec risus finibus
                                              feugiat et fermentum nibh.
                                              Pellentesque vitae ante at elit
                                              fringilla ac at purus
                                            </p>
                                            <div
                                              class="banner-content__btn-list"
                                            >
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--6"
                                              >
                                                CONTACT US
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                                class="rt-btn--7"
                                              >
                                                GET QUOTE
                                                <div class="icon--4">
                                                  <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="10"
                                                    height="12"
                                                    viewBox="0 0 10 12"
                                                  >
                                                    <path
                                                      data-name="Polygon 8"
                                                      d="M6,0l6,10H0Z"
                                                      transform="translate(10) rotate(90)"
                                                      fill="#fff"
                                                    />
                                                  </svg>
                                                </div>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div
                              class="slider-navigation-box slider-navigation-box--style-1"
                            >
                              <ul class="element-list">
                                <li>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30.438"
                                    height="28.067"
                                    viewBox="0 0 30.438 28.067"
                                  >
                                    <path
                                      data-name="Path 561"
                                      d="M0,0H30.438L0,28.067Z"
                                      fill="#fff"
                                    />
                                  </svg>
                                </li>
                              </ul>
                              <div class="inner">
                                <div class="pagination-area">
                                  <div class="rt-swiper-pagination"></div>
                                </div>
                                <div class="navigation-area">
                                  <div class="navigation-box">
                                    <i
                                      class="fas fa-arrow-left slider-btn btn-prev"
                                    ></i>
                                    <i
                                      class="fas fa-arrow-right slider-btn btn-next"
                                    ></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <a
                            class="rt-scroll-spy-btn rt-scroll-spy-btn--style-2"
                            href="#aboutSection1"
                          >
                            <span class="spy-dot"></span>
                          </a>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-c028b28 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="c028b28"
              data-element_type="section"
              id="aboutSection1"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-056fa78"
                  data-id="056fa78"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-5e12c0b animation-spin d-none d-xl-block elementor-absolute elementor-widget elementor-widget-image"
                      data-id="5e12c0b"
                      data-element_type="widget"
                      data-settings='{"_position":"absolute"}'
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="960"
                          height="960"
                          src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47.png"
                          class="attachment-full size-full wp-image-2298"
                          alt=""
                          srcset="
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47.png         960w,
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47-300x300.png 300w,
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47-150x150.png 150w,
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47-768x768.png 768w,
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_47-800x800.png 800w
                          "
                          sizes="(max-width: 960px) 100vw, 960px"
                        />
                      </div>
                    </div>
                    <section
                      class="elementor-section elementor-inner-section elementor-element elementor-element-3a89660 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                      data-id="3a89660"
                      data-element_type="section"
                    >
                      <div
                        class="elementor-container elementor-column-gap-default"
                      >
                        <div
                          class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-826bf35"
                          data-id="826bf35"
                          data-element_type="column"
                        >
                          <div
                            class="elementor-widget-wrap elementor-element-populated"
                          >
                            <div
                              class="elementor-element elementor-element-759cc65 elementor-invisible elementor-widget elementor-widget-rt-video-button"
                              data-id="759cc65"
                              data-element_type="widget"
                              data-widget_type="rt-video-button.default"
                            >
                              <div class="elementor-widget-container">
                                <div class="video-box">
                                  <div
                                    class="wow fadeInUp"
                                    data-wow-delay="200ms"
                                    data-wow-duration="2000ms"
                                  >
                                    <div
                                      class="about-img-wrapper about-img-wrapper--style-1"
                                    >
                                      <div class="about-img-list">
                                        <div class="item">
                                          <img
                                            loading="lazy"
                                            decoding="async"
                                            width="400"
                                            height="400"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/about-img_2.jpg"
                                            class="attachment-full size-full"
                                            alt=""
                                          />
                                        </div>
                                        <div class="item">
                                          <img
                                            loading="lazy"
                                            decoding="async"
                                            width="400"
                                            height="400"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/about-img_3.jpg"
                                            class="attachment-full size-full"
                                            alt=""
                                          />
                                        </div>
                                        <div class="item">
                                          <img
                                            loading="lazy"
                                            decoding="async"
                                            width="400"
                                            height="400"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/about-img_4.jpg"
                                            class="attachment-full size-full"
                                            alt=""
                                          />
                                        </div>
                                        <div class="item">
                                          <a
                                            href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                                            class="rt-play-btn--1 play-btn"
                                          >
                                            <i class="fas fa-play"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-547b83d"
                          data-id="547b83d"
                          data-element_type="column"
                        >
                          <div
                            class="elementor-widget-wrap elementor-element-populated"
                          >
                            <div
                              class="elementor-element elementor-element-affc015 elementor-invisible elementor-widget elementor-widget-rt-title-text-button"
                              data-id="affc015"
                              data-element_type="widget"
                              data-widget_type="rt-title-text-button.default"
                            >
                              <div class="elementor-widget-container">
                                <div
                                  class="wow fadeInRight"
                                  data-wow-delay="400ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div
                                    class="section-headingTwo section-headingTwo--style-1 mb-0"
                                  >
                                    <span class="section-headingTwo__sub-title">
                                      ABOUT US
                                      <span
                                        class="section-headingTwo__sub-title__bar"
                                      ></span>
                                    </span>
                                    <h2 class="section-headingTwo__title">
                                      We Bring Your Ideas to Life
                                    </h2>
                                    <p class="desc1">
                                      Since 2007 we have been a visionary and a
                                      reliable software engineering partner for
                                      world-class brands. We are a boutique
                                      digital transformation consultancy and
                                      software development company that provides
                                      cutting edge engineering solutions. We are
                                      a boutique digital transformation.
                                    </p>
                                    <div class="section-headingTwo__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                        class="rt-btn--7"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <i class="fas fa-caret-right"></i>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-ea6fc13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="ea6fc13"
              data-element_type="section"
              data-settings='{"background_background":"classic"}'
            >
              <div class="elementor-background-overlay"></div>
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-43a4f89"
                  data-id="43a4f89"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-d70d3c7 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-rt-watermark-title"
                      data-id="d70d3c7"
                      data-element_type="widget"
                      data-widget_type="rt-watermark-title.default"
                    >
                      <div class="elementor-widget-container">
                        <span
                          class="section-watermark--2 d-none d-xl-block rotate-m-90"
                          >Services</span
                        >
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-f7b5a8c elementor-invisible elementor-widget elementor-widget-rt-title"
                      data-id="f7b5a8c"
                      data-element_type="widget"
                      data-widget_type="rt-title.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="wow fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-2"
                          >
                            <span class="section-headingTwo__sub-title"
                              >SERVICES</span
                            >
                            <h2 class="section-headingTwo__title">
                              What We Do
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-48ab64d elementor-invisible elementor-widget elementor-widget-rt-service-slider"
                      data-id="48ab64d"
                      data-element_type="widget"
                      data-widget_type="rt-service-slider.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="service-section-style-2 rt-slide-wrap">
                          <div class="row align-items-center">
                            <div class="col-12">
                              <div class="slider-nav slider-nav--style-1">
                                <span class="slider-btn btn-prev"
                                  ><i class="fas fa-chevron-left"></i
                                ></span>
                                <span class="slider-btn btn-next"
                                  ><i class="fas fa-chevron-right"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div class="rt-slider-style-3 swiper">
                            <div
                              class="swiper-wrapper"
                              data-carousel-options='{"col_xl":"3","autoplay":false,"speed":"5000","col_lg":"3","col_md":"2","col_sm":"1","col_xs":"1"}'
                            >
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="200ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-branding"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/product-design/"
                                          >Product Design</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/product-design/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="400ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-sketch"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/ux-ui-design/"
                                          >UX / UI Design</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/ux-ui-design/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="600ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-page-1"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/branding-design/"
                                          >Branding Design</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/branding-design/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="800ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-development"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/web-development/"
                                          >Web Development</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/web-development/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="1000ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-web-programming"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/apps-development/"
                                          >Apps Development</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/apps-development/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div
                                  class="single-item wow fadeInUp"
                                  data-wow-delay="1200ms"
                                  data-wow-duration="1500ms"
                                >
                                  <div class="service service--style-2">
                                    <div class="service__icon">
                                      <i class="icon-advertising"></i>
                                    </div>
                                    <div class="service__content">
                                      <h3 class="service__title">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/service/digital-marketing/"
                                          >Digital Marketing</a
                                        >
                                      </h3>
                                      <p>
                                        Fusce consectetur erat enim elementum
                                        tincidunt. Vestibulum accumsan elementum
                                        leo, et viverra justo
                                      </p>
                                    </div>
                                    <div class="service__btn-wrap">
                                      <a
                                        href="https://radiustheme.com/demo/wordpress/themes/daisy/service/digital-marketing/"
                                        class="rt-btn--8"
                                      >
                                        READ MORE
                                        <div class="icon--4">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="10"
                                            height="12"
                                            viewBox="0 0 10 12"
                                          >
                                            <path
                                              data-name="Polygon 8"
                                              d="M6,0l6,10H0Z"
                                              transform="translate(10) rotate(90)"
                                              fill="#fff"
                                            />
                                          </svg>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-90856a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="90856a2"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6e1c91f"
                  data-id="6e1c91f"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-8a96e4f elementor-invisible elementor-widget elementor-widget-rt-title-text-button"
                      data-id="8a96e4f"
                      data-element_type="widget"
                      data-widget_type="rt-title-text-button.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="wow fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-1 mb-0"
                          >
                            <span class="section-headingTwo__sub-title">
                              OUR SUCCESS STORY
                              <span
                                class="section-headingTwo__sub-title__bar"
                              ></span>
                            </span>
                            <h2 class="section-headingTwo__title">
                              We Bring Your Ideas to Life
                            </h2>
                            <p class="desc1">
                              Since 2007 we have been a visionary and a reliable
                              software engineering partner for world-class
                              brands.<br /><br />

                              We are a boutique digital transformation
                              consultancy and software development company that
                              provides cutting edge engineering solutions. We
                              are a boutique digital transformation.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <section
                      class="elementor-section elementor-inner-section elementor-element elementor-element-b89a95c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                      data-id="b89a95c"
                      data-element_type="section"
                    >
                      <div
                        class="elementor-container elementor-column-gap-default"
                      >
                        <div
                          class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-87d58dd"
                          data-id="87d58dd"
                          data-element_type="column"
                        >
                          <div
                            class="elementor-widget-wrap elementor-element-populated"
                          >
                            <div
                              class="elementor-element elementor-element-d45cdb1 elementor-invisible elementor-widget elementor-widget-rt-counter"
                              data-id="d45cdb1"
                              data-element_type="widget"
                              data-widget_type="rt-counter.default"
                            >
                              <div class="elementor-widget-container">
                                <div
                                  class="rt-list rt-list--style-1 d-flex align-items-center flex-wrap gap-4"
                                >
                                  <div class="rt-list__item">
                                    <span class="rt-list__icon">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="rt-list__count"
                                      ><span
                                        class="counterUp"
                                        data-num="75"
                                        data-rtspeed="2000"
                                        data-rtsteps="5"
                                        >75</span
                                      >%</span
                                    >
                                    Work Done
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bc6a7f0"
                          data-id="bc6a7f0"
                          data-element_type="column"
                        >
                          <div
                            class="elementor-widget-wrap elementor-element-populated"
                          >
                            <div
                              class="elementor-element elementor-element-b92747f elementor-invisible elementor-widget elementor-widget-rt-counter"
                              data-id="b92747f"
                              data-element_type="widget"
                              data-widget_type="rt-counter.default"
                            >
                              <div class="elementor-widget-container">
                                <div
                                  class="rt-list rt-list--style-1 d-flex align-items-center flex-wrap gap-4"
                                >
                                  <div class="rt-list__item">
                                    <span class="rt-list__icon">
                                      <i class="far fa-user"></i>
                                    </span>
                                    <span class="rt-list__count"
                                      ><span
                                        class="counterUp"
                                        data-num="95"
                                        data-rtspeed="2000"
                                        data-rtsteps="5"
                                        >95</span
                                      >%</span
                                    >
                                    Client&#039;s Satifaction
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <div
                      class="elementor-element elementor-element-bf946ec elementor-widget elementor-widget-rt-button"
                      data-id="bf946ec"
                      data-element_type="widget"
                      data-widget_type="rt-button.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="section-headingTwo__btn-wrap">
                          <a
                            href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                            class="rt-btn--7"
                          >
                            READ MORE
                            <div class="icon--4">
                              <i class="fas fa-caret-right"></i>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5247b15"
                  data-id="5247b15"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-835a9c7 elementor-invisible elementor-widget elementor-widget-rt-image-box"
                      data-id="835a9c7"
                      data-element_type="widget"
                      data-widget_type="rt-image-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="wow fadeInUp"
                          data-wow-delay="300ms"
                          data-wow-duration="2000ms"
                        >
                          <div class="success-img success-img--style-1">
                            <img
                              loading="lazy"
                              decoding="async"
                              width="597"
                              height="541"
                              src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/success-img_1.png"
                              class="attachment-full size-full"
                              alt=""
                              srcset="
                                https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/success-img_1.png         597w,
                                https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/success-img_1-300x272.png 300w
                              "
                              sizes="(max-width: 597px) 100vw, 597px"
                            />
                            <ul class="element-list d-none d-md-block">
                              <li>
                                <span
                                  class="d-block wow zoomIn"
                                  data-wow-delay="300ms"
                                  data-wow-duration="2000ms"
                                >
                                  <img
                                    loading="lazy"
                                    decoding="async"
                                    width="680"
                                    height="680"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_48.png"
                                    class="attachment-full size-full"
                                    alt=""
                                    srcset="
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_48.png         680w,
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_48-300x300.png 300w,
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_48-150x150.png 150w
                                    "
                                    sizes="(max-width: 680px) 100vw, 680px"
                                  />
                                </span>
                              </li>
                              <li>
                                <span
                                  class="d-block wow zoomIn"
                                  data-wow-delay="300ms"
                                  data-wow-duration="2000ms"
                                >
                                  <img
                                    loading="lazy"
                                    decoding="async"
                                    width="492"
                                    height="492"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_49.png"
                                    class="attachment-full size-full"
                                    alt=""
                                    srcset="
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_49.png         492w,
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_49-300x300.png 300w,
                                      https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_49-150x150.png 150w
                                    "
                                    sizes="(max-width: 492px) 100vw, 492px"
                                  />
                                </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-fa18b59 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="fa18b59"
              data-element_type="section"
              data-settings='{"background_background":"classic"}'
            >
              <div class="elementor-background-overlay"></div>
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f94a9c0"
                  data-id="f94a9c0"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-f0bd43a elementor-widget elementor-widget-rt-elements"
                      data-id="f0bd43a"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-f85017c">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-f625768">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="83"
                                height="44"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_90.png"
                                class="animation-topBottom50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-5b902f4">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_92.png"
                                class="animation-spin"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-73508be elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="73508be"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a61de6"
                  data-id="6a61de6"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-769a485 elementor-invisible elementor-widget elementor-widget-rt-portfolio"
                      data-id="769a485"
                      data-element_type="widget"
                      data-widget_type="rt-portfolio.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="project-section project-section--style-1 pb-0 position-relative overflow-hidden rt-slide-wrap"
                        >
                          <div class="row align-items-center">
                            <div class="col-12">
                              <div
                                class="section-title-wrapper section-title-wrapper--style-1"
                              >
                                <div
                                  class="section-headingTwo section-headingTwo--style-3"
                                >
                                  <span class="section-headingTwo__sub-title">
                                    OUR SUCCESSFUL PROJECTS
                                    <span
                                      class="section-headingTwo__sub-title__bar"
                                    ></span>
                                  </span>
                                  <h2 class="section-headingTwo__title">
                                    Project Gallery
                                  </h2>
                                </div>
                                <div
                                  class="slider-nav slider-nav--style-2 d-none d-lg-block"
                                >
                                  <span class="slider-btn btn-prev"
                                    ><i class="fas fa-chevron-left"></i
                                  ></span>
                                  <span class="slider-btn btn-next"
                                    ><i class="fas fa-chevron-right"></i
                                  ></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="project-slider-wrapper project-slider-wrapper--style-1"
                          >
                            <div class="rt-slider-style-4 swiper">
                              <div
                                class="swiper-wrapper"
                                data-carousel-options='{"col_xl":"3","autoplay":false,"speed":"2000","allowSlideNext":true,"allowSlidePrev":true,"col_lg":"2","col_md":"2","col_sm":"1","col_xs":"1"}'
                              >
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="200ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/digital-marketing/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_01-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/digital-marketing/"
                                                >Digital Marketing</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="400ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/mobile-application/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_02-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/mobile-application/"
                                                >Mobile Application</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="600ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/brand-promotion/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_03-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/brand-promotion/"
                                                >Brand Promotion</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="800ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/digital-marketing-3/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_04-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/digital-marketing-3/"
                                                >Digital Marketing</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="1000ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/web-development-3/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_06-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/web-development-3/"
                                                >Web Development</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide">
                                  <div
                                    class="single-item hide fadeInUp"
                                    data-wow-delay="1200ms"
                                    data-wow-duration="1500ms"
                                  >
                                    <div class="project project--style-1">
                                      <div class="project__img">
                                        <a
                                          href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/web-design/"
                                          ><img
                                            loading="lazy"
                                            decoding="async"
                                            width="538"
                                            height="472"
                                            src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/port_05-538x472.jpg"
                                            class="attachment-daisy-thumb6 size-daisy-thumb6 wp-post-image"
                                            alt=""
                                        /></a>
                                        <div class="project__content">
                                          <h3 class="project__title">
                                            <span class="anim-overflow-1">
                                              <a
                                                href="https://radiustheme.com/demo/wordpress/themes/daisy/portfolio/web-design/"
                                                >Web Design</a
                                              >
                                            </span>
                                          </h3>
                                          <p>
                                            <span class="anim-overflow-2">
                                              We are a boutique digital
                                              transformation consultancy and
                                              software development
                                            </span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-59ba365 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="59ba365"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c690d98"
                  data-id="c690d98"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-8a1be3a elementor-invisible elementor-widget elementor-widget-rt-title-text-button"
                      data-id="8a1be3a"
                      data-element_type="widget"
                      data-widget_type="rt-title-text-button.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="hide fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-1 mb-0"
                          >
                            <span class="section-headingTwo__sub-title">
                              MEET OUR TEAM
                              <span
                                class="section-headingTwo__sub-title__bar"
                              ></span>
                            </span>
                            <h2 class="section-headingTwo__title">
                              Meet Our<br />
                              Successful People
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-580b2d8"
                  data-id="580b2d8"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-d91ff3b elementor-widget elementor-widget-text-editor"
                      data-id="d91ff3b"
                      data-element_type="widget"
                      data-widget_type="text-editor.default"
                    >
                      <div class="elementor-widget-container">
                        <p>
                          Since 2007 we have been a visionary and a reliable
                          software engineering partner for world-class brands.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-4c18be6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="4c18be6"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bec96ac"
                  data-id="bec96ac"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-768bb99 elementor-widget elementor-widget-rt-watermark-title"
                      data-id="768bb99"
                      data-element_type="widget"
                      data-widget_type="rt-watermark-title.default"
                    >
                      <div class="elementor-widget-container">
                        <span
                          class="section-watermark--2 d-none d-xl-block rotate-90"
                          >Team</span
                        >
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-7126249 elementor-widget elementor-widget-rt-elements"
                      data-id="7126249"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-0fa5310">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="22"
                                height="22"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_93.png"
                                class="animation-animationFramesOne"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-494dae5">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="12"
                                height="12"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_94.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-ced3b0e">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="53"
                                height="52"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_95.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-f8c0a25">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="28"
                                height="28"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_96.png"
                                class="animation-animationFramesThree"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-273b335">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="53"
                                height="52"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_95.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-71975dd">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="83"
                                height="44"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_97.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-90ee999">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="53"
                                height="52"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_95.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-7e327ca">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="492"
                                height="492"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_54.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-4b663ca elementor-invisible elementor-widget elementor-widget-rt-team"
                      data-id="4b663ca"
                      data-element_type="widget"
                      data-widget_type="rt-team.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="row gutter-30 align-items-center">
                          <div
                            class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="team team--style-1">
                              <div class="team__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/team/john-gonzalez/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="551"
                                    height="680"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/t_1-551x680.jpg"
                                    class="attachment-daisy-thumb4 size-daisy-thumb4 wp-post-image"
                                    alt=""
                                /></a>
                                <ul class="team-shape-list">
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="54.863"
                                        height="150.996"
                                        viewBox="0 0 54.863 150.996"
                                      >
                                        <g
                                          data-name="Group 2156"
                                          transform="translate(-366 -4954.004)"
                                        >
                                          <g
                                            data-name="Intersection 3"
                                            transform="translate(366 4988.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                          <g
                                            data-name="Intersection 4"
                                            transform="translate(366 4954.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="54.863"
                                        height="134.501"
                                        viewBox="0 0 54.863 134.501"
                                      >
                                        <defs>
                                          <linearGradient
                                            id="linear-gradient-0"
                                            x1="0.411"
                                            y1="0.312"
                                            x2="0"
                                            y2="1"
                                            gradientUnits="objectBoundingBox"
                                          >
                                            <stop
                                              offset="0"
                                              stop-color="#ff8345"
                                            />
                                            <stop
                                              offset="1"
                                              stop-color="#f85c70"
                                            />
                                          </linearGradient>
                                        </defs>
                                        <g
                                          data-name="Group 2157"
                                          transform="translate(-594.069 -4892)"
                                        >
                                          <path
                                            data-name="Intersection 2"
                                            d="M0,0,43.324,65.1c4.886,7.341,2.508,17.011-5.311,21.6L0,109Z"
                                            transform="translate(644.863 5000.996) rotate(180)"
                                            fill="url(#linear-gradient-1)"
                                          />
                                          <g
                                            data-name="Intersection 5"
                                            transform="translate(648.932 5026.502) rotate(180)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999996185302734 6.053703308105469 L 1.999996185302734 113.6825332641602 L 44.54079437255859 91.28760528564453 C 46.69362640380859 90.15422058105469 48.49222946166992 88.69570159912109 49.88664627075195 86.95256805419922 C 51.21084594726562 85.29721832275391 52.10806274414062 83.46681976318359 52.55335998535156 81.51222229003906 C 53.37392807006836 77.9105224609375 52.54502868652344 74.20024108886719 50.2193603515625 71.0648193359375 L 1.999996185302734 6.053703308105469 M -3.814697265625e-06 0 L 51.82572937011719 69.87335205078125 C 57.67076110839844 77.75348663330078 54.82596206665039 88.133056640625 45.47249603271484 93.05733489990234 L -3.814697265625e-06 116.99560546875 L -3.814697265625e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                </ul>
                                <div class="team-social-area">
                                  <ul class="social social--style-1">
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-facebook-f"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-twitter"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-linkedin-in"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-dribbble"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="team__content">
                                <h3 class="team__author-name">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/team/john-gonzalez/"
                                    >John Gonzalez</a
                                  >
                                </h3>
                                <span class="team__author-designation"
                                  >Sr. Web Developer</span
                                >
                              </div>
                            </div>
                          </div>

                          <div
                            class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="400ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="team team--style-1">
                              <div class="team__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/team/nevine-acotanza-4-3/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="551"
                                    height="680"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/t_2-551x680.jpg"
                                    class="attachment-daisy-thumb4 size-daisy-thumb4 wp-post-image"
                                    alt=""
                                /></a>
                                <ul class="team-shape-list">
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="54.863"
                                        height="150.996"
                                        viewBox="0 0 54.863 150.996"
                                      >
                                        <g
                                          data-name="Group 2156"
                                          transform="translate(-366 -4954.004)"
                                        >
                                          <g
                                            data-name="Intersection 3"
                                            transform="translate(366 4988.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                          <g
                                            data-name="Intersection 4"
                                            transform="translate(366 4954.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="54.863"
                                        height="134.501"
                                        viewBox="0 0 54.863 134.501"
                                      >
                                        <defs>
                                          <linearGradient
                                            id="linear-gradient-1"
                                            x1="0.411"
                                            y1="0.312"
                                            x2="0"
                                            y2="1"
                                            gradientUnits="objectBoundingBox"
                                          >
                                            <stop
                                              offset="0"
                                              stop-color="#ff8345"
                                            />
                                            <stop
                                              offset="1"
                                              stop-color="#f85c70"
                                            />
                                          </linearGradient>
                                        </defs>
                                        <g
                                          data-name="Group 2157"
                                          transform="translate(-594.069 -4892)"
                                        >
                                          <path
                                            data-name="Intersection 2"
                                            d="M0,0,43.324,65.1c4.886,7.341,2.508,17.011-5.311,21.6L0,109Z"
                                            transform="translate(644.863 5000.996) rotate(180)"
                                            fill="url(#linear-gradient-1)"
                                          />
                                          <g
                                            data-name="Intersection 5"
                                            transform="translate(648.932 5026.502) rotate(180)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999996185302734 6.053703308105469 L 1.999996185302734 113.6825332641602 L 44.54079437255859 91.28760528564453 C 46.69362640380859 90.15422058105469 48.49222946166992 88.69570159912109 49.88664627075195 86.95256805419922 C 51.21084594726562 85.29721832275391 52.10806274414062 83.46681976318359 52.55335998535156 81.51222229003906 C 53.37392807006836 77.9105224609375 52.54502868652344 74.20024108886719 50.2193603515625 71.0648193359375 L 1.999996185302734 6.053703308105469 M -3.814697265625e-06 0 L 51.82572937011719 69.87335205078125 C 57.67076110839844 77.75348663330078 54.82596206665039 88.133056640625 45.47249603271484 93.05733489990234 L -3.814697265625e-06 116.99560546875 L -3.814697265625e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                </ul>
                                <div class="team-social-area">
                                  <ul class="social social--style-1">
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-facebook-f"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-twitter"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-linkedin-in"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-dribbble"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="team__content">
                                <h3 class="team__author-name">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/team/nevine-acotanza-4-3/"
                                    >Nevine Acotanza</a
                                  >
                                </h3>
                                <span class="team__author-designation"
                                  >Web Developer</span
                                >
                              </div>
                            </div>
                          </div>

                          <div
                            class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="600ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="team team--style-1">
                              <div class="team__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/team/albert-coleman/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="551"
                                    height="680"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/t_4-551x680.jpg"
                                    class="attachment-daisy-thumb4 size-daisy-thumb4 wp-post-image"
                                    alt=""
                                /></a>
                                <ul class="team-shape-list">
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="54.863"
                                        height="150.996"
                                        viewBox="0 0 54.863 150.996"
                                      >
                                        <g
                                          data-name="Group 2156"
                                          transform="translate(-366 -4954.004)"
                                        >
                                          <g
                                            data-name="Intersection 3"
                                            transform="translate(366 4988.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                          <g
                                            data-name="Intersection 4"
                                            transform="translate(366 4954.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="54.863"
                                        height="134.501"
                                        viewBox="0 0 54.863 134.501"
                                      >
                                        <defs>
                                          <linearGradient
                                            id="linear-gradient-2"
                                            x1="0.411"
                                            y1="0.312"
                                            x2="0"
                                            y2="1"
                                            gradientUnits="objectBoundingBox"
                                          >
                                            <stop
                                              offset="0"
                                              stop-color="#ff8345"
                                            />
                                            <stop
                                              offset="1"
                                              stop-color="#f85c70"
                                            />
                                          </linearGradient>
                                        </defs>
                                        <g
                                          data-name="Group 2157"
                                          transform="translate(-594.069 -4892)"
                                        >
                                          <path
                                            data-name="Intersection 2"
                                            d="M0,0,43.324,65.1c4.886,7.341,2.508,17.011-5.311,21.6L0,109Z"
                                            transform="translate(644.863 5000.996) rotate(180)"
                                            fill="url(#linear-gradient-1)"
                                          />
                                          <g
                                            data-name="Intersection 5"
                                            transform="translate(648.932 5026.502) rotate(180)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999996185302734 6.053703308105469 L 1.999996185302734 113.6825332641602 L 44.54079437255859 91.28760528564453 C 46.69362640380859 90.15422058105469 48.49222946166992 88.69570159912109 49.88664627075195 86.95256805419922 C 51.21084594726562 85.29721832275391 52.10806274414062 83.46681976318359 52.55335998535156 81.51222229003906 C 53.37392807006836 77.9105224609375 52.54502868652344 74.20024108886719 50.2193603515625 71.0648193359375 L 1.999996185302734 6.053703308105469 M -3.814697265625e-06 0 L 51.82572937011719 69.87335205078125 C 57.67076110839844 77.75348663330078 54.82596206665039 88.133056640625 45.47249603271484 93.05733489990234 L -3.814697265625e-06 116.99560546875 L -3.814697265625e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                </ul>
                                <div class="team-social-area">
                                  <ul class="social social--style-1">
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-facebook-f"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-twitter"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-linkedin-in"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-dribbble"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="team__content">
                                <h3 class="team__author-name">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/team/albert-coleman/"
                                    >Albert Coleman</a
                                  >
                                </h3>
                                <span class="team__author-designation"
                                  >Sr. Web Developer</span
                                >
                              </div>
                            </div>
                          </div>

                          <div
                            class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="800ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="team team--style-1">
                              <div class="team__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/team/pull-maradona/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="551"
                                    height="680"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/t_3-551x680.jpg"
                                    class="attachment-daisy-thumb4 size-daisy-thumb4 wp-post-image"
                                    alt=""
                                /></a>
                                <ul class="team-shape-list">
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="54.863"
                                        height="150.996"
                                        viewBox="0 0 54.863 150.996"
                                      >
                                        <g
                                          data-name="Group 2156"
                                          transform="translate(-366 -4954.004)"
                                        >
                                          <g
                                            data-name="Intersection 3"
                                            transform="translate(366 4988.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                          <g
                                            data-name="Intersection 4"
                                            transform="translate(366 4954.004)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999992370605469 6.053695678710938 L 1.999992370605469 113.6825256347656 L 44.54080963134766 91.28759765625 C 46.69364166259766 90.15421295166016 48.49224472045898 88.69570159912109 49.88666152954102 86.95256805419922 C 51.21087646484375 85.29721832275391 52.10809326171875 83.46681213378906 52.55339431762695 81.51221466064453 C 53.37396240234375 77.91051483154297 52.54505920410156 74.20023345947266 50.21939468383789 71.0648193359375 L 1.999992370605469 6.053695678710938 M -7.62939453125e-06 0 L 51.82575988769531 69.87335205078125 C 57.67079544067383 77.75347900390625 54.82599258422852 88.13304901123047 45.47251129150391 93.05733489990234 L -7.62939453125e-06 116.9955978393555 L -7.62939453125e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                  <li>
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="54.863"
                                        height="134.501"
                                        viewBox="0 0 54.863 134.501"
                                      >
                                        <defs>
                                          <linearGradient
                                            id="linear-gradient-3"
                                            x1="0.411"
                                            y1="0.312"
                                            x2="0"
                                            y2="1"
                                            gradientUnits="objectBoundingBox"
                                          >
                                            <stop
                                              offset="0"
                                              stop-color="#ff8345"
                                            />
                                            <stop
                                              offset="1"
                                              stop-color="#f85c70"
                                            />
                                          </linearGradient>
                                        </defs>
                                        <g
                                          data-name="Group 2157"
                                          transform="translate(-594.069 -4892)"
                                        >
                                          <path
                                            data-name="Intersection 2"
                                            d="M0,0,43.324,65.1c4.886,7.341,2.508,17.011-5.311,21.6L0,109Z"
                                            transform="translate(644.863 5000.996) rotate(180)"
                                            fill="url(#linear-gradient-1)"
                                          />
                                          <g
                                            data-name="Intersection 5"
                                            transform="translate(648.932 5026.502) rotate(180)"
                                            fill="none"
                                          >
                                            <path
                                              d="M0,0,51.826,69.873c5.845,7.88,3,18.26-6.353,23.184L0,117Z"
                                              stroke="none"
                                            />
                                            <path
                                              d="M 1.999996185302734 6.053703308105469 L 1.999996185302734 113.6825332641602 L 44.54079437255859 91.28760528564453 C 46.69362640380859 90.15422058105469 48.49222946166992 88.69570159912109 49.88664627075195 86.95256805419922 C 51.21084594726562 85.29721832275391 52.10806274414062 83.46681976318359 52.55335998535156 81.51222229003906 C 53.37392807006836 77.9105224609375 52.54502868652344 74.20024108886719 50.2193603515625 71.0648193359375 L 1.999996185302734 6.053703308105469 M -3.814697265625e-06 0 L 51.82572937011719 69.87335205078125 C 57.67076110839844 77.75348663330078 54.82596206665039 88.133056640625 45.47249603271484 93.05733489990234 L -3.814697265625e-06 116.99560546875 L -3.814697265625e-06 0 Z"
                                              stroke="none"
                                              fill="#fff"
                                            />
                                          </g>
                                        </g>
                                      </svg>
                                    </span>
                                  </li>
                                </ul>
                                <div class="team-social-area">
                                  <ul class="social social--style-1">
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-facebook-f"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-twitter"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-linkedin-in"></i
                                      ></a>
                                    </li>
                                    <li class="social__item">
                                      <a href="#" class="social__link"
                                        ><i class="fab fa-dribbble"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                              <div class="team__content">
                                <h3 class="team__author-name">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/team/pull-maradona/"
                                    >Pull Maradona</a
                                  >
                                </h3>
                                <span class="team__author-designation"
                                  >Sr. Web Developer</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-757918c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="757918c"
              data-element_type="section"
              data-settings='{"background_background":"classic"}'
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc19020"
                  data-id="dc19020"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-9359b30 elementor-invisible elementor-widget elementor-widget-rt-title"
                      data-id="9359b30"
                      data-element_type="widget"
                      data-widget_type="rt-title.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="hide fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-4"
                          >
                            <span
                              class="section-headingTwo__sub-title dobule-bar"
                            >
                              <span
                                class="section-headingTwo__sub-title__bar left"
                              ></span>
                              CLIENT'S FEEDBACK
                              <span
                                class="section-headingTwo__sub-title__bar"
                              ></span>
                            </span>
                            <h2 class="section-headingTwo__title">
                              Client's Say About Us
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-2418ea8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="2418ea8"
              data-element_type="section"
              data-settings='{"background_background":"classic"}'
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6855f66 elementor-hidden-tablet elementor-hidden-mobile"
                  data-id="6855f66"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-612f693 elementor-widget elementor-widget-rt-image-box"
                      data-id="612f693"
                      data-element_type="widget"
                      data-widget_type="rt-image-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="test-thumb-gallery test-thumb-gallery--style-1"
                        >
                          <ul
                            class="test-thumbs-list test-thumbs-list--style-1"
                          >
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_5.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_5.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_5-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_6.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_6.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_6-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                            <li>
                              <span
                                ><img
                                  loading="lazy"
                                  decoding="async"
                                  width="200"
                                  height="200"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_8.jpg"
                                  class="attachment-full size-full"
                                  alt=""
                                  srcset="
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_8.jpg         200w,
                                    https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_8-150x150.jpg 150w
                                  "
                                  sizes="(max-width: 200px) 100vw, 200px"
                              /></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aa6addc"
                  data-id="aa6addc"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-f40b500 elementor-widget elementor-widget-rt-testimonial"
                      data-id="f40b500"
                      data-element_type="widget"
                      data-widget_type="rt-testimonial.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="testimonial-wrapper testimonial-wrapper--style-2"
                        >
                          <div class="rt-slider-style-1 swiper">
                            <div
                              class="swiper-wrapper"
                              data-carousel-options='{"col_xl":"1","autoplay":true,"speed":"5000","allowSlideNext":true,"allowSlidePrev":true,"col_lg":"1","col_md":"1","col_sm":"1","col_xs":"1"}'
                            >
                              <div class="swiper-slide">
                                <div class="testimonial testimonial--style-2">
                                  <div class="testimonial__content">
                                    <p class="testimonial__text">
                                      Fusce consectetur erat id enim elementum
                                      tincidunt. Vestibulum accumsan elementum
                                      leo, et viverra justo ultricies ac.
                                      Vivamus quis dolor ac orci tempus ornare.
                                      In volutpat vitae ligula vitae lacinia.
                                    </p>
                                  </div>
                                  <div class="author">
                                    <div class="author__img">
                                      <img
                                        loading="lazy"
                                        decoding="async"
                                        width="200"
                                        height="200"
                                        src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3.jpg"
                                        class="attachment-full size-full"
                                        alt=""
                                        srcset="
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3.jpg         200w,
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_3-150x150.jpg 150w
                                        "
                                        sizes="(max-width: 200px) 100vw, 200px"
                                      />
                                    </div>
                                    <div class="author__info">
                                      <h4 class="author__name">Marian Chris</h4>
                                      <span class="author__designation"
                                        >CEO founder</span
                                      >
                                    </div>
                                    <span class="quote-right">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="64.576"
                                        height="57"
                                        viewBox="0 0 64.576 57"
                                      >
                                        <g transform="translate(0.001 -57.197)">
                                          <path
                                            data-name="Path 631"
                                            d="M580.628,57.2H560.494a3.313,3.313,0,0,0-3.311,3.311V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.949,19.949,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.643,4.444l2.384,5.033a3.311,3.311,0,0,0,4.312,1.616,36.817,36.817,0,0,0,11.107-7.206,27.959,27.959,0,0,0,7.57-12.047q2.047-6.716,2.047-18.332V60.508A3.313,3.313,0,0,0,580.628,57.2Z"
                                            transform="translate(-519.364)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                          <path
                                            data-name="Path 632"
                                            d="M7.022,113.909a37.438,37.438,0,0,0,11.054-7.192,27.81,27.81,0,0,0,7.616-12q2.046-6.666,2.046-18.379V60.508A3.313,3.313,0,0,0,24.427,57.2H4.293A3.313,3.313,0,0,0,.981,60.508V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.95,19.95,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.642,4.444l2.378,5.02A3.321,3.321,0,0,0,7.022,113.909Z"
                                            transform="translate(0 0)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                        </g>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="testimonial testimonial--style-2">
                                  <div class="testimonial__content">
                                    <p class="testimonial__text">
                                      Fusce consectetur erat id enim elementum
                                      tincidunt. Vestibulum accumsan elementum
                                      leo, et viverra justo ultricies ac.
                                      Vivamus quis dolor ac orci tempus ornare.
                                      In volutpat vitae ligula vitae lacinia.
                                    </p>
                                  </div>
                                  <div class="author">
                                    <div class="author__img">
                                      <img
                                        loading="lazy"
                                        decoding="async"
                                        width="200"
                                        height="200"
                                        src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4.jpg"
                                        class="attachment-full size-full"
                                        alt=""
                                        srcset="
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4.jpg         200w,
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_4-150x150.jpg 150w
                                        "
                                        sizes="(max-width: 200px) 100vw, 200px"
                                      />
                                    </div>
                                    <div class="author__info">
                                      <h4 class="author__name">Jack Mudson</h4>
                                      <span class="author__designation"
                                        >Marketing Manager</span
                                      >
                                    </div>
                                    <span class="quote-right">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="64.576"
                                        height="57"
                                        viewBox="0 0 64.576 57"
                                      >
                                        <g transform="translate(0.001 -57.197)">
                                          <path
                                            data-name="Path 631"
                                            d="M580.628,57.2H560.494a3.313,3.313,0,0,0-3.311,3.311V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.949,19.949,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.643,4.444l2.384,5.033a3.311,3.311,0,0,0,4.312,1.616,36.817,36.817,0,0,0,11.107-7.206,27.959,27.959,0,0,0,7.57-12.047q2.047-6.716,2.047-18.332V60.508A3.313,3.313,0,0,0,580.628,57.2Z"
                                            transform="translate(-519.364)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                          <path
                                            data-name="Path 632"
                                            d="M7.022,113.909a37.438,37.438,0,0,0,11.054-7.192,27.81,27.81,0,0,0,7.616-12q2.046-6.666,2.046-18.379V60.508A3.313,3.313,0,0,0,24.427,57.2H4.293A3.313,3.313,0,0,0,.981,60.508V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.95,19.95,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.642,4.444l2.378,5.02A3.321,3.321,0,0,0,7.022,113.909Z"
                                            transform="translate(0 0)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                        </g>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="testimonial testimonial--style-2">
                                  <div class="testimonial__content">
                                    <p class="testimonial__text">
                                      Fusce consectetur erat id enim elementum
                                      tincidunt. Vestibulum accumsan elementum
                                      leo, et viverra justo ultricies ac.
                                      Vivamus quis dolor ac orci tempus ornare.
                                      In volutpat vitae ligula vitae lacinia.
                                    </p>
                                  </div>
                                  <div class="author">
                                    <div class="author__img">
                                      <img
                                        loading="lazy"
                                        decoding="async"
                                        width="200"
                                        height="200"
                                        src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7.jpg"
                                        class="attachment-full size-full"
                                        alt=""
                                        srcset="
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7.jpg         200w,
                                          https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/author-img_7-150x150.jpg 150w
                                        "
                                        sizes="(max-width: 200px) 100vw, 200px"
                                      />
                                    </div>
                                    <div class="author__info">
                                      <h4 class="author__name">
                                        Michael Brian
                                      </h4>
                                      <span class="author__designation"
                                        >Vice President</span
                                      >
                                    </div>
                                    <span class="quote-right">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="64.576"
                                        height="57"
                                        viewBox="0 0 64.576 57"
                                      >
                                        <g transform="translate(0.001 -57.197)">
                                          <path
                                            data-name="Path 631"
                                            d="M580.628,57.2H560.494a3.313,3.313,0,0,0-3.311,3.311V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.949,19.949,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.643,4.444l2.384,5.033a3.311,3.311,0,0,0,4.312,1.616,36.817,36.817,0,0,0,11.107-7.206,27.959,27.959,0,0,0,7.57-12.047q2.047-6.716,2.047-18.332V60.508A3.313,3.313,0,0,0,580.628,57.2Z"
                                            transform="translate(-519.364)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                          <path
                                            data-name="Path 632"
                                            d="M7.022,113.909a37.438,37.438,0,0,0,11.054-7.192,27.81,27.81,0,0,0,7.616-12q2.046-6.666,2.046-18.379V60.508A3.313,3.313,0,0,0,24.427,57.2H4.293A3.313,3.313,0,0,0,.981,60.508V80.642a3.313,3.313,0,0,0,3.311,3.311h9.636q-.189,7.908-3.669,12.663a19.95,19.95,0,0,1-8.3,6.212,3.307,3.307,0,0,0-1.642,4.444l2.378,5.02A3.321,3.321,0,0,0,7.022,113.909Z"
                                            transform="translate(0 0)"
                                            fill="rgba(72,183,116,0.15)"
                                          />
                                        </g>
                                      </svg>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="slider-nav slider-nav--style-3">
                              <span class="slider-btn btn-prev">
                                <i class="fas fa-chevron-left"></i>
                              </span>
                              <span class="slider-btn btn-next">
                                <i class="fas fa-chevron-right"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-6b7ebc6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="6b7ebc6"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-57c052c"
                  data-id="57c052c"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-bf2fc54 elementor-widget elementor-widget-rt-elements"
                      data-id="bf2fc54"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-4179697">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="50"
                                height="43"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_55.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-d4a1b8a">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="415"
                                height="684"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_58.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-6b20092">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="50"
                                height="43"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_56.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-48652f5">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="50"
                                height="43"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_56.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-9539025">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="50"
                                height="43"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_57.png"
                                class="none"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-8c410fe elementor-invisible elementor-widget elementor-widget-rt-cta"
                      data-id="8c410fe"
                      data-element_type="widget"
                      data-widget_type="rt-cta.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="cta-content cta-content--style-2 hide fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div class="cta-content__inner">
                            <div class="cta-content__logo">
                              <a
                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                              >
                                <img
                                  loading="lazy"
                                  decoding="async"
                                  width="193"
                                  height="193"
                                  src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/cta-logo.png"
                                  class="attachment-full size-full"
                                  alt=""
                                />
                              </a>
                            </div>
                            <h2 class="cta-content__title">
                              Any Project on Your Mind
                            </h2>
                            <div class="cta-content__btn-wrap">
                              <a
                                href="https://radiustheme.com/demo/wordpress/themes/daisy/contact/"
                                class="rt-btn--9"
                              >
                                Contact Us
                                <div class="icon--4">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="10"
                                    height="12"
                                    viewBox="0 0 10 12"
                                  >
                                    <path
                                      data-name="Polygon 8"
                                      d="M6,0l6,10H0Z"
                                      transform="translate(10) rotate(90)"
                                      fill="#fff"
                                    />
                                  </svg>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-c386f57 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="c386f57"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cb4340"
                  data-id="7cb4340"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-3cd9d9e elementor-widget elementor-widget-rt-elements"
                      data-id="3cd9d9e"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-38164af">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-fe4f8e6">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_92.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-8590ce1">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="66"
                                height="77"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_89.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-7de1268">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="83"
                                height="44"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_97.png"
                                class="animation-zoomeffect"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-2a71029">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-81accd0 elementor-invisible elementor-widget elementor-widget-rt-title-text-button"
                      data-id="81accd0"
                      data-element_type="widget"
                      data-widget_type="rt-title-text-button.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="hide fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-1 mb-0"
                          >
                            <span class="section-headingTwo__sub-title">
                              LATEST NEWS
                              <span
                                class="section-headingTwo__sub-title__bar"
                              ></span>
                            </span>
                            <h2 class="section-headingTwo__title">
                              News &amp; Blog
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-086c5cc elementor-invisible elementor-widget elementor-widget-rt-post"
                      data-id="086c5cc"
                      data-element_type="widget"
                      data-widget_type="rt-post.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="row gutter-24 justify-content-center">
                          <div
                            class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="blog blog--style-2">
                              <div class="blog__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-12/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="570"
                                    height="420"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/blog2-570x420.jpg"
                                    class="attachment-daisy-thumb3 size-daisy-thumb3 wp-post-image"
                                    alt=""
                                /></a>
                                <div class="blog__date">
                                  <span class="date">
                                    <span>15 Feb</span>
                                    <span>2022</span>
                                  </span>
                                </div>
                              </div>
                              <div class="blog__content">
                                <div class="blog__tag">
                                  <span
                                    ><a
                                      href="https://radiustheme.com/demo/wordpress/themes/daisy/category/marketing/"
                                      rel="category tag"
                                      >Marketing</a
                                    ></span
                                  >
                                </div>
                                <h3 class="blog__title">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-12/"
                                    >Every business owner must be able to
                                    answer</a
                                  >
                                </h3>
                                <p class="blog__desc">
                                  We are a boutique digital transformation
                                  consultancy and software development Fusce
                                  consectetur erat id enim element Fusce
                                </p>
                              </div>
                            </div>
                          </div>
                          <div
                            class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="400ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="blog blog--style-2">
                              <div class="blog__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-11/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="570"
                                    height="420"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/02/blog12-570x420.jpg"
                                    class="attachment-daisy-thumb3 size-daisy-thumb3 wp-post-image"
                                    alt=""
                                /></a>
                                <div class="blog__date">
                                  <span class="date">
                                    <span>15 Feb</span>
                                    <span>2022</span>
                                  </span>
                                </div>
                              </div>
                              <div class="blog__content">
                                <div class="blog__tag">
                                  <span
                                    ><a
                                      href="https://radiustheme.com/demo/wordpress/themes/daisy/category/cryptocurrency/"
                                      rel="category tag"
                                      >Cryptocurrency</a
                                    ></span
                                  >
                                </div>
                                <h3 class="blog__title">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-11/"
                                    >Every business owner must be able to
                                    answer</a
                                  >
                                </h3>
                                <p class="blog__desc">
                                  We are a boutique digital transformation
                                  consultancy and software development Fusce
                                  consectetur erat id enim element Fusce
                                </p>
                              </div>
                            </div>
                          </div>
                          <div
                            class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 wow fadeInUp"
                            data-wow-delay="600ms"
                            data-wow-duration="1500ms"
                          >
                            <div class="blog blog--style-2">
                              <div class="blog__img">
                                <a
                                  href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-10/"
                                  ><img
                                    loading="lazy"
                                    decoding="async"
                                    width="570"
                                    height="420"
                                    src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2021/12/blog01-1-570x420.jpg"
                                    class="attachment-daisy-thumb3 size-daisy-thumb3 wp-post-image"
                                    alt=""
                                /></a>
                                <div class="blog__date">
                                  <span class="date">
                                    <span>15 Feb</span>
                                    <span>2022</span>
                                  </span>
                                </div>
                              </div>
                              <div class="blog__content">
                                <div class="blog__tag">
                                  <span
                                    ><a
                                      href="https://radiustheme.com/demo/wordpress/themes/daisy/category/business/"
                                      rel="category tag"
                                      >Business</a
                                    ></span
                                  >
                                </div>
                                <h3 class="blog__title">
                                  <a
                                    href="https://radiustheme.com/demo/wordpress/themes/daisy/every-business-owner-must-be-able-to-answer-correctly-10/"
                                    >Every business owner must be able to
                                    answer</a
                                  >
                                </h3>
                                <p class="blog__desc">
                                  We are a boutique digital transformation
                                  consultancy and software development Fusce
                                  consectetur erat id enim element Fusce
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-41baef4a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
              data-id="41baef4a"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-no">
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44d757e8 elementor-hidden-tablet elementor-hidden-mobile"
                  data-id="44d757e8"
                  data-element_type="column"
                  data-settings='{"background_background":"classic"}'
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div class="elementor-background-overlay"></div>
                    <div
                      class="elementor-element elementor-element-2df7034 elementor-widget elementor-widget-rt-elements"
                      data-id="2df7034"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-74dee83">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_98-1.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-ddefaec">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_98-1.png"
                                class="animation-spin"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-4de6826">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-9f6b61c">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-a9581c6">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-spin"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-22609e5">
                            <span>
                              <img
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animation-animationFramesTwo"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-4eaba6db elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                      data-id="4eaba6db"
                      data-element_type="widget"
                      data-settings='{"_position":"absolute"}'
                      data-widget_type="image.default"
                    >
                      <div class="elementor-widget-container">
                        <img
                          loading="lazy"
                          decoding="async"
                          width="131"
                          height="320"
                          src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/contact-shape.png"
                          class="attachment-full size-full wp-image-4332"
                          alt=""
                          srcset="
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/contact-shape.png         131w,
                            https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/contact-shape-123x300.png 123w
                          "
                          sizes="(max-width: 131px) 100vw, 131px"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-20d642bf contact-padding-right"
                  data-id="20d642bf"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-3b11b3e7 elementor-invisible elementor-widget elementor-widget-rt-title-text-button"
                      data-id="3b11b3e7"
                      data-element_type="widget"
                      data-widget_type="rt-title-text-button.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="wow fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1500ms"
                        >
                          <div
                            class="section-headingTwo section-headingTwo--style-1 mb-0"
                          >
                            <span class="section-headingTwo__sub-title">
                              CONTACT US
                              <span
                                class="section-headingTwo__sub-title__bar"
                              ></span>
                            </span>
                            <h2 class="section-headingTwo__title">
                              Get In Touch
                            </h2>
                            <p class="desc1">
                              Since 2007 we have been a visionary and a reliable
                              software engineering partner for world-class
                              brands.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-element elementor-element-332f67b animated-slow elementor-invisible elementor-widget elementor-widget-shortcode"
                      data-id="332f67b"
                      data-element_type="widget"
                      data-settings='{"_animation":"fadeInUp"}'
                      data-widget_type="shortcode.default"
                    >
                      <div class="elementor-widget-container">
                        <div class="elementor-shortcode">
                          <div
                            class="fluentform ff-default fluentform_wrapper_4 ffs_default_wrap"
                          >
                            <form
                              data-form_id="4"
                              id="fluentform_4"
                              class="frm-fluent-form fluent_form_4 ff-el-form-top ff_form_instance_4_1 ff-form-loading ffs_default"
                              data-form_instance="ff_form_instance_4_1"
                              method="POST"
                            >
                              <fieldset
                                style="
                                  border: none !important;
                                  margin: 0 !important;
                                  padding: 0 !important;
                                  background-color: transparent !important;
                                  box-shadow: none !important;
                                  outline: none !important;
                                  min-inline-size: 100%;
                                "
                              >
                                <legend
                                  class="ff_screen_reader_title"
                                  style="
                                    display: block;
                                    margin: 0 !important;
                                    padding: 0 !important;
                                    height: 0 !important;
                                    text-indent: -999999px;
                                    width: 0 !important;
                                    overflow: hidden;
                                  "
                                >
                                  Contact Form 1
                                </legend>
                                <input
                                  type="hidden"
                                  name="__fluent_form_embded_post_id"
                                  value="8128"
                                /><input
                                  type="hidden"
                                  id="_fluentform_4_fluentformnonce"
                                  name="_fluentform_4_fluentformnonce"
                                  value="cf54ad234b"
                                /><input
                                  type="hidden"
                                  name="_wp_http_referer"
                                  value="/demo/wordpress/themes/daisy/home-2/"
                                />
                                <div
                                  data-name="ff_cn_id_1"
                                  class="ff-t-container ff-column-container ff_columns_total_1 contact-form"
                                >
                                  <div
                                    class="ff-t-cell ff-t-column-1"
                                    style="flex-basis: 100%"
                                  >
                                    <div class="ff-el-group form-group">
                                      <div class="ff-el-input--content">
                                        <input
                                          type="text"
                                          name="input_text"
                                          class="ff-el-form-control form-control rt-form-control"
                                          placeholder="Name"
                                          data-name="input_text"
                                          id="ff_4_input_text"
                                          aria-invalid="false"
                                          aria-required="true"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-name="ff_cn_id_2"
                                  class="ff-t-container ff-column-container ff_columns_total_1 contact-form"
                                >
                                  <div
                                    class="ff-t-cell ff-t-column-1"
                                    style="flex-basis: 100%"
                                  >
                                    <div class="ff-el-group form-group">
                                      <div class="ff-el-input--content">
                                        <input
                                          type="email"
                                          name="email"
                                          id="ff_4_email"
                                          class="ff-el-form-control form-control rt-form-control"
                                          placeholder="E-mail"
                                          data-name="email"
                                          aria-invalid="false"
                                          aria-required="true"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-name="ff_cn_id_3"
                                  class="ff-t-container ff-column-container ff_columns_total_1 contact-form"
                                >
                                  <div
                                    class="ff-t-cell ff-t-column-1"
                                    style="flex-basis: 100%"
                                  >
                                    <div class="ff-el-group form-group">
                                      <div class="ff-el-input--content">
                                        <input
                                          type="text"
                                          name="input_text_1"
                                          class="ff-el-form-control form-control rt-form-control"
                                          placeholder="Subject"
                                          data-name="input_text_1"
                                          id="ff_4_input_text_1"
                                          aria-invalid="false"
                                          aria-required="true"
                                        />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  data-name="ff_cn_id_4"
                                  class="ff-t-container ff-column-container ff_columns_total_1 contact-form"
                                >
                                  <div
                                    class="ff-t-cell ff-t-column-1"
                                    style="flex-basis: 100%"
                                  >
                                    <div class="ff-el-group form-group">
                                      <div class="ff-el-input--content">
                                        <textarea
                                          aria-invalid="false"
                                          aria-required="true"
                                          name="description"
                                          id="ff_4_description"
                                          class="ff-el-form-control form-control rt-form-control rt-textarea"
                                          placeholder="Message"
                                          rows="3"
                                          cols="2"
                                          data-name="description"
                                        ></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="ff-el-group ff-text-left rt-btn--5 ff_submit_btn_wrapper"
                                >
                                  <button
                                    type="submit"
                                    class="ff-btn ff-btn-submit ff-btn-md ff_btn_style wpf_has_custom_css"
                                  >
                                    SEND
                                  </button>
                                </div>
                              </fieldset>
                            </form>
                            <div
                              id="fluentform_4_errors"
                              class="ff-errors-in-stack ff_form_instance_4_1 ff-form-loading_errors ff_form_instance_4_1_errors"
                            ></div>
                          </div>
                          <script>
                            window.fluent_form_ff_form_instance_4_1 = {
                              id: "4",
                              settings: {
                                layout: {
                                  labelPlacement: "top",
                                  helpMessagePlacement: "with_label",
                                  errorMessagePlacement: "inline",
                                  asteriskPlacement: "asterisk-right",
                                },
                                restrictions: {
                                  denyEmptySubmission: { enabled: false },
                                },
                              },
                              form_instance: "ff_form_instance_4_1",
                              form_id_selector: "fluentform_4",
                              rules: {
                                input_text: {
                                  required: {
                                    value: true,
                                    message: "Name field is required",
                                  },
                                },
                                email: {
                                  required: {
                                    value: true,
                                    message: "Email field is required",
                                  },
                                  email: {
                                    value: true,
                                    message:
                                      "This field must contain a valid email",
                                  },
                                },
                                input_text_1: {
                                  required: {
                                    value: true,
                                    message: "Subject field is required",
                                  },
                                },
                                description: {
                                  required: {
                                    value: true,
                                    message: "Message field is required",
                                  },
                                },
                              },
                            };
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-f5bae2e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="f5bae2e"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f29919f"
                  data-id="f29919f"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-14660fc elementor-widget elementor-widget-rt-elements"
                      data-id="14660fc"
                      data-element_type="widget"
                      data-widget_type="rt-elements.default"
                    >
                      <div class="elementor-widget-container">
                        <ul class="element-list d-none d-xl-block">
                          <li class="elementor-repeater-item-b4c9167">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="83"
                                height="44"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_90.png"
                                class="animation-leftRight50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-a7e2e88">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="30"
                                height="29"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_98-1.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                          <li class="elementor-repeater-item-68b38d2">
                            <span>
                              <img
                                loading="lazy"
                                decoding="async"
                                width="38"
                                height="31"
                                src="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/uploads/2022/01/element_88.png"
                                class="animate-left50"
                                alt=""
                              />
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-5e29939 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="5e29939"
              data-element_type="section"
            >
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9d1c08a"
                  data-id="9d1c08a"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-6ab10ad elementor-invisible elementor-widget elementor-widget-rt-contact-box"
                      data-id="6ab10ad"
                      data-element_type="widget"
                      data-widget_type="rt-contact-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="contact-widget contact-widget--style-1 wow fadeInUp"
                          data-wow-delay="200ms"
                          data-wow-duration="1200ms"
                        >
                          <h4 class="contact-widget__title">Melborne</h4>
                          <ul class="contact-widget__list">
                            <li>
                              Cecilia Chapman<br />
                              711-2880 Nulla St.<br />
                              Mankato Mississippi 96522
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-42ad9b0"
                  data-id="42ad9b0"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-f90cc64 elementor-invisible elementor-widget elementor-widget-rt-contact-box"
                      data-id="f90cc64"
                      data-element_type="widget"
                      data-widget_type="rt-contact-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="contact-widget contact-widget--style-1 wow fadeInUp"
                          data-wow-delay="300ms"
                          data-wow-duration="1200ms"
                        >
                          <h4 class="contact-widget__title">Sydne</h4>
                          <ul class="contact-widget__list">
                            <li>
                              Iris Watson<br />
                              P.O. Box 283 8562 Fusce Rd.<br />
                              Frederick Nebraska 20620
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4cf01b2"
                  data-id="4cf01b2"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-86cbaf3 elementor-invisible elementor-widget elementor-widget-rt-contact-box"
                      data-id="86cbaf3"
                      data-element_type="widget"
                      data-widget_type="rt-contact-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="contact-widget contact-widget--style-1 wow fadeInUp"
                          data-wow-delay="400ms"
                          data-wow-duration="1200ms"
                        >
                          <h4 class="contact-widget__title">South Africa</h4>
                          <ul class="contact-widget__list">
                            <li>
                              Hiroko Potter<br />
                              P.O. Box 887 2508 Dolor. Av.<br />
                              Muskegon KY 12482
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5abdc4a"
                  data-id="5abdc4a"
                  data-element_type="column"
                >
                  <div
                    class="elementor-widget-wrap elementor-element-populated"
                  >
                    <div
                      class="elementor-element elementor-element-0c818d4 elementor-invisible elementor-widget elementor-widget-rt-contact-box"
                      data-id="0c818d4"
                      data-element_type="widget"
                      data-widget_type="rt-contact-box.default"
                    >
                      <div class="elementor-widget-container">
                        <div
                          class="contact-widget contact-widget--style-1 wow fadeInUp"
                          data-wow-delay="500ms"
                          data-wow-duration="1200ms"
                        >
                          <h4 class="contact-widget__title">Newzeland</h4>
                          <ul class="contact-widget__list">
                            <li>
                              Melvin Porter<br />
                              P.O. Box 132 1599 Curabitur Rd .<br />
                              Bandera South Dakota 45149
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php get_footer(); ?>
      </div>
      <!-- Main Content End -->
    </div>
    <!-- Main Wrapper End -->

    <!-- Offcanvas Menu -->

    <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">
      <div class="offcanvas-content">
        <div class="offcanvas-header">
          <div class="offcanvas-logo">
            <a href="https://radiustheme.com/demo/wordpress/themes/daisy/">
              <img
                width="180"
                height="48"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-dark.svg" 

                alt="WP Rogers"
              />
            </a>
          </div>
          <div class="close-btn offcanvas-close">
            <a href="javascript:void(0)">
              <i class="fas fa-times"></i>
            </a>
          </div>
        </div>
        <div class="offcanvas-widget">
          <h3 class="offcanvas-widget-title">About Us</h3>
          <p>
		  At WP Rogers, we are passionate about crafting digital experiences that elevate brands and drive results. With expertise in website development, social media management, and graphic design, we transform ideas into reality.
          </p>
        </div>
        <div
          id="meks_instagram-4"
          class="widget offcanvas-widget widget_meks_instagram"
        >
          
        </div>
        <div class="offcanvas-widget footer-widget">
          <h3 class="offcanvas-widget-title">Contact Info</h3>
          <ul class="contact-info-list widget-list">
            <li class="widget-list-item">
              <i class="fas fa-map-marker-alt list-icon"></i>
              Chicago 12,Melborne City,USA
            </li>
            <li class="widget-list-item">
              <i class="fas fa-phone-alt list-icon"></i>
              <a href="tel:+1485-048-1995" class="widget-list-link">
                +1 485-048-1995
              </a>
            </li>
            <li class="widget-list-item">
              <i class="fas fa-envelope list-icon"></i>
              <a href="mailto:info@wprogers.com" class="widget-list-link">
                info@wprogers.com
              </a>
            </li>
          </ul>
          <ul class="social social--style-3">
            <li class="social__item">
              <a href="#" class="social__link fb" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="social__item">
              <a href="#" class="social__link fb" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="social__item">
              <a href="#" class="social__link fb" target="_blank">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
            <li class="social__item">
              <a href="#" class="social__link fb" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script>
      const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(
          `.e-con.e-parent:not(.e-lazyloaded)`
        );
        const lazyloadBackgroundObserver = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                let lazyloadBackground = entry.target;
                if (lazyloadBackground) {
                  lazyloadBackground.classList.add("e-lazyloaded");
                }
                lazyloadBackgroundObserver.unobserve(entry.target);
              }
            });
          },
          { rootMargin: "200px 0px 200px 0px" }
        );
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
          lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
      };
      const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
      events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
      });
    </script>
    <link
      rel="stylesheet"
      id="fluentform-elementor-widget-css"
      href="https://radiustheme.com/demo/wordpress/themes/daisy/wp-content/plugins/fluentform/assets/css/fluent-forms-elementor-widget.css?ver=5.2.2"
      media="all"
    />
    <script type="text/javascript" id="fluent-form-submission-js-extra">
      /* <![CDATA[ */
      var fluentFormVars = {
        ajaxUrl:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-admin\/admin-ajax.php",
        forms: [],
        step_text: "Step %activeStep% of %totalStep% - %stepTitle%",
        is_rtl: "",
        date_i18n: {
          previousMonth: "Previous Month",
          nextMonth: "Next Month",
          months: {
            shorthand: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            longhand: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
          },
          weekdays: {
            longhand: [
              "Sunday",
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
            ],
            shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
          },
          daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
          rangeSeparator: " to ",
          weekAbbreviation: "Wk",
          scrollTitle: "Scroll to increment",
          toggleTitle: "Click to toggle",
          amPM: ["AM", "PM"],
          yearAriaLabel: "Year",
          firstDayOfWeek: 1,
        },
        pro_version: "",
        fluentform_version: "5.2.2",
        force_init: "",
        stepAnimationDuration: "350",
        upload_completed_txt: "100% Completed",
        upload_start_txt: "0% Completed",
        uploading_txt: "Uploading",
        choice_js_vars: {
          noResultsText: "No results found",
          loadingText: "Loading...",
          noChoicesText: "No choices to choose from",
          itemSelectText: "Press to select",
          maxItemText: "Only %%maxItemCount%% options can be added",
        },
        input_mask_vars: { clearIfNotMatch: false },
      };
      var fluentFormVars = {
        ajaxUrl:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-admin\/admin-ajax.php",
        forms: [],
        step_text: "Step %activeStep% of %totalStep% - %stepTitle%",
        is_rtl: "",
        date_i18n: {
          previousMonth: "Previous Month",
          nextMonth: "Next Month",
          months: {
            shorthand: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            longhand: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
          },
          weekdays: {
            longhand: [
              "Sunday",
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
            ],
            shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
          },
          daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
          rangeSeparator: " to ",
          weekAbbreviation: "Wk",
          scrollTitle: "Scroll to increment",
          toggleTitle: "Click to toggle",
          amPM: ["AM", "PM"],
          yearAriaLabel: "Year",
          firstDayOfWeek: 1,
        },
        pro_version: "",
        fluentform_version: "5.2.2",
        force_init: "",
        stepAnimationDuration: "350",
        upload_completed_txt: "100% Completed",
        upload_start_txt: "0% Completed",
        uploading_txt: "Uploading",
        choice_js_vars: {
          noResultsText: "No results found",
          loadingText: "Loading...",
          noChoicesText: "No choices to choose from",
          itemSelectText: "Press to select",
          maxItemText: "Only %%maxItemCount%% options can be added",
        },
        input_mask_vars: { clearIfNotMatch: false },
      };
      /* ]]> */
    </script>
    
    <script type="text/javascript" id="daisy-main-js-extra">
      /* <![CDATA[ */
      var DaisyObj = {
        ajaxurl:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-admin\/admin-ajax.php",
        hasAdminBar: "0",
        headerStyle: "2",
        siteLogo:
          '<div class="mobile-menu-nav-back"><a class="logo-mobile" href="https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/" alt="WP Rogers" class="img-fluid"><img width=\'180\' height=\'48\' src=\'<?php echo get_stylesheet_directory_uri(); ?>/assets\/img\/logo-dark.svg\' alt=\'Daisy\'><\/a><\/div>',
        ajaxURL:
          "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-admin\/admin-ajax.php",
        nonce: "2a3488fc63",
        rtl: "",
      };
      /* ]]> */
    </script>
    
    <script type="text/javascript" id="elementor-frontend-js-before">
      /* <![CDATA[ */
      var elementorFrontendConfig = {
        environmentMode: {
          edit: false,
          wpPreview: false,
          isScriptDebug: false,
        },
        i18n: {
          shareOnFacebook: "Share on Facebook",
          shareOnTwitter: "Share on Twitter",
          pinIt: "Pin it",
          download: "Download",
          downloadImage: "Download image",
          fullscreen: "Fullscreen",
          zoom: "Zoom",
          share: "Share",
          playVideo: "Play Video",
          previous: "Previous",
          next: "Next",
          close: "Close",
          a11yCarouselWrapperAriaLabel:
            "Carousel | Horizontal scrolling: Arrow Left & Right",
          a11yCarouselPrevSlideMessage: "Previous slide",
          a11yCarouselNextSlideMessage: "Next slide",
          a11yCarouselFirstSlideMessage: "This is the first slide",
          a11yCarouselLastSlideMessage: "This is the last slide",
          a11yCarouselPaginationBulletMessage: "Go to slide",
        },
        is_rtl: false,
        breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
        responsive: {
          breakpoints: {
            mobile: {
              label: "Mobile Portrait",
              value: 767,
              default_value: 767,
              direction: "max",
              is_enabled: true,
            },
            mobile_extra: {
              label: "Mobile Landscape",
              value: 880,
              default_value: 880,
              direction: "max",
              is_enabled: false,
            },
            tablet: {
              label: "Tablet Portrait",
              value: 1024,
              default_value: 1024,
              direction: "max",
              is_enabled: true,
            },
            tablet_extra: {
              label: "Tablet Landscape",
              value: 1200,
              default_value: 1200,
              direction: "max",
              is_enabled: false,
            },
            laptop: {
              label: "Laptop",
              value: 1366,
              default_value: 1366,
              direction: "max",
              is_enabled: false,
            },
            widescreen: {
              label: "Widescreen",
              value: 2400,
              default_value: 2400,
              direction: "min",
              is_enabled: false,
            },
          },
        },
        version: "3.24.2",
        is_static: false,
        experimentalFeatures: {
          container_grid: true,
          e_swiper_latest: true,
          e_nested_atomic_repeaters: true,
          e_onboarding: true,
          home_screen: true,
          "ai-layout": true,
          "link-in-bio": true,
          "floating-buttons": true,
        },
        urls: {
          assets:
            "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-content\/plugins\/elementor\/assets\/",
          ajaxurl:
            "https:\/\/radiustheme.com\/demo\/wordpress\/themes\/daisy\/wp-admin\/admin-ajax.php",
        },
        nonces: { floatingButtonsClickTracking: "9f9abc6497" },
        swiperClass: "swiper",
        settings: { page: [], editorPreferences: [] },
        kit: {
          active_breakpoints: ["viewport_mobile", "viewport_tablet"],
          global_image_lightbox: "yes",
          lightbox_enable_counter: "yes",
          lightbox_enable_fullscreen: "yes",
          lightbox_enable_zoom: "yes",
          lightbox_enable_share: "yes",
          lightbox_title_src: "title",
          lightbox_description_src: "description",
        },
        post: {
          id: 8128,
          title: "Home%202%20%E2%80%93%20Daisy",
          excerpt: "",
          featuredImage: false,
        },
      };
      /* ]]> */
    </script>
   
  </body>
</html>

