<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprogers
 */

?>

<footer
          class="footer footer--style-2 position-relative overflow-hidden"
        >
          <div
            class="footer-top footer-top--style-2 position-relative overflow-hidden"
          >
            <ul class="element-list d-none d-xl-block">
              <li>
                <span
                  class="d-block wow fadeInDown"
                  data-wow-delay="300ms"
                  data-wow-duration="1500ms"
                >
                  <img
                    width="902"
                    height="367"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer2-bg1.svg"
                    alt="Daisy"
                  />
                </span>
              </li>
              <li>
                <span
                  class="d-block wow fadeInUp"
                  data-wow-delay="600ms"
                  data-wow-duration="1500ms"
                >
                  <img
                    width="902"
                    height="367"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer2-bg2.svg"
                    alt="Daisy"
                  />
                </span>
              </li>
            </ul>

            <div class="container">
              <div class="row gutter-30 justify-content-between">
                <div
                  class="col-xl-4 col-md-6 wow fadeInUp footer-widget--style-1"
                  data-wow-delay="200ms"
                  data-wow-duration="1500ms"
                >
                  <div
                    id="daisy_about-4"
                    class="footer-widget widget_daisy_about"
                  >
                    <div class="footer-widget__logo logo logo--style-2">
                      <a
                        class="footer-logo"
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        ><img
                          width="500"
                          height="134"
                          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-logo.png"
                          class="attachment-full size-full"
                          alt=""
                      /></a>
                    </div>
                    <p class="footer-widget__text">
                      We are a boutique digital transformation consultancy and
                      software development Fusce consectetur erat id enim
                      element tincidunt. Vestibulum
                    </p>

                    <ul class="social social--style-2">
                      <li class="social__item">
                        <a class="social__link" href="#" target="_blank"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                      </li>
                      <li class="social__item">
                        <a class="social__link" href="#" target="_blank"
                          ><i class="fab fa-twitter"></i
                        ></a>
                      </li>
                      <li class="social__item">
                        <a class="social__link" href="#" target="_blank"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>
                      </li>
                      <li class="social__item">
                        <a class="social__link" href="#" target="_blank"
                          ><i class="fa fa-rss"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="col-xl-2 col-md-6 wow fadeInUp footer-widget--style-1"
                  data-wow-delay="400ms"
                  data-wow-duration="1500ms"
                >
                  <div id="nav_menu-2" class="footer-widget widget_nav_menu">
                    <h3 class="footer-widget__title">OUR SERVICE</h3>
                    <div class="menu-our-service-container">

					<?php
					wp_nav_menu(array(
						'theme_location' => 'services-menu',
						'menu_class' => 'menu',
						'container' => 'ul',
						'container_id' => 'menu-our-service',
					));
					?>

                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-2 col-md-6 wow fadeInUp footer-widget--style-1"
                  data-wow-delay="600ms"
                  data-wow-duration="1500ms"
                >
                  <div id="nav_menu-3" class="footer-widget widget_nav_menu">
                    <h3 class="footer-widget__title">OTHERS LINK</h3>
                    <div class="menu-our-service-container">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'other-menu',
						'menu_class' => 'menu',
						'container' => 'ul',
						'container_id' => 'menu-our-service-1',
					));
					?>
                    
                    </div>
                  </div>
                </div>
                <div
                  class="col-xl-3 col-md-6 wow fadeInUp footer-widget--style-1"
                  data-wow-delay="800ms"
                  data-wow-duration="1500ms"
                >
                  <div
                    class="contact-form contact-form--style-3 rt-contact-form"
                  >
                    <div id="text-2" class="footer-widget widget_text">
                      <h3 class="footer-widget__title">SUBSCRIBE NOW</h3>
                      <div class="textwidget">
                        <div
                          class="fluentform ff-default fluentform_wrapper_3 ffs_default_wrap"
                        >
                          <form
                            data-form_id="3"
                            id="fluentform_3"
                            class="frm-fluent-form fluent_form_3 ff-el-form-top ff_form_instance_3_2 ff-form-loading ffs_default"
                            data-form_instance="ff_form_instance_3_2"
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
                                Subscribe Form
                              </legend>
                              <input
                                type="hidden"
                                name="__fluent_form_embded_post_id"
                                value="8128"
                              /><input
                                type="hidden"
                                id="_fluentform_3_fluentformnonce"
                                name="_fluentform_3_fluentformnonce"
                                value="cf54ad234b"
                              /><input
                                type="hidden"
                                name="_wp_http_referer"
                                value="/demo/wordpress/themes/daisy/home-2/"
                              />
                              <div class="ff-el-group form-group">
                                <div class="ff-el-input--content">
                                  <input
                                    type="email"
                                    name="email"
                                    id="ff_3_2_email"
                                    class="ff-el-form-control form-control rt-form-control"
                                    placeholder="E-mail"
                                    data-name="email"
                                    aria-invalid="false"
                                    aria-required="true"
                                  />
                                </div>
                              </div>
                              <div
                                class="ff-el-group ff-text-center ff_submit_btn_wrapper"
                              >
                                <button
                                  type="submit"
                                  class="ff-btn ff-btn-submit ff-btn-md rt-btn--10 ff_btn_style wpf_has_custom_css"
                                >
                                  SUBSCRIBE NOW
                                </button>
                              </div>
                            </fieldset>
                          </form>
                          <div
                            id="fluentform_3_errors"
                            class="ff-errors-in-stack ff_form_instance_3_2 ff-form-loading_errors ff_form_instance_3_2_errors"
                          ></div>
                        </div>
                        <script>
                          window.fluent_form_ff_form_instance_3_2 = {
                            id: "3",
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
                            form_instance: "ff_form_instance_3_2",
                            form_id_selector: "fluentform_3",
                            rules: {
                              email: {
                                required: {
                                  value: true,
                                  message: "This field is required",
                                },
                                email: {
                                  value: true,
                                  message:
                                    "This field must contain a valid email",
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
          </div>
          <div class="footer-bottom footer-bottom--style-2">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <p
                    class="copyright-text mb-0 wow fadeInUp"
                    data-wow-delay="600ms"
                    data-wow-duration="1500ms"
                  >
                    Copyright © 2025 <a href="#" rel="nofollow">WP Rogers</a> All
                    Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>

<?php wp_footer(); ?>

</body>
</html>
