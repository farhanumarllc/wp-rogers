<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprogers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	 <header class="header header--style-2 d-none d-xl-block sticky-on">
          <div class="sticky-placeholder" id="sticky-placeholder"></div>
          <div class="navbar-wrap" id="navbar-wrap">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div
                    class="menu-area style-1 d-flex align-items-center justify-content-between flex-wrap"
                  >
                    <div class="logo logo--style-2">
                      <a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        class="logo logo-dark"
                      >
                        <img
                          width="180"
                          height="48"
                          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-dark.svg"
                          alt="WP Rogers"
                      /></a>

                      <a
                        href="https://radiustheme.com/demo/wordpress/themes/daisy/"
                        class="logo logo-light"
                      >
                        <img
                          width="180"
                          height="48"
                          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-light.svg"
                          alt="WP Rogers"
                        />
                      </a>
                    </div>
                    <!-- end logo -->
                    <nav class="main-menu main-menu--style--2">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu',
						'menu_class' => 'menu nav',
						'container' => 'ul',
						'container_id' => 'menu-main-menu-1',
						'walker' => new Custom_Walker_Nav_Menu() // Custom Walker for structure
					));
					?>
                      
                      <ul class="header-action header-action--style-2">
                        <li
                          class="header-action__item header-action__item--search"
                        >
                          <a href="#template-search">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="18.344"
                              height="19"
                              viewBox="0 0 18.344 19"
                            >
                              <path
                                data-name="search (5)"
                                d="M19.049,17.306l-4.522-4.7a7.668,7.668,0,1,0-5.872,2.74,7.589,7.589,0,0,0,4.395-1.388l4.556,4.739a1,1,0,1,0,1.442-1.387ZM8.655,2a5.67,5.67,0,1,1-5.67,5.67A5.676,5.676,0,0,1,8.655,2Z"
                                transform="translate(-0.984)"
                                fill="#0f285f"
                                opacity="0.85"
                              />
                            </svg>
                          </a>
                        </li>
                        <li
                          class="header-action__item humburger humburger--style-2 offcanvas-menu-btn menu-status-open"
                        >
                          <div class="inner-box">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>

            <div id="template-search" class="template-search">
              <button type="button" class="close">×</button>
              <form
                class="search-form"
                method="get"
                action="https://radiustheme.com/demo/wordpress/themes/daisy/"
              >
                <input
                  type="search"
                  name="s"
                  value=""
                  placeholder="Enter Your Search....."
                />
                <button type="submit" class="search-btn btn-ghost style-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18.344"
                    height="19"
                    viewBox="0 0 18.344 19"
                  >
                    <path
                      data-name="search (5)"
                      d="M19.049,17.306l-4.522-4.7a7.668,7.668,0,1,0-5.872,2.74,7.589,7.589,0,0,0,4.395-1.388l4.556,4.739a1,1,0,1,0,1.442-1.387ZM8.655,2a5.67,5.67,0,1,1-5.67,5.67A5.676,5.676,0,0,1,8.655,2Z"
                      transform="translate(-0.984)"
                      fill="#0f285f"
                      opacity="0.85"
                    />
                  </svg>
                </button>
              </form>
            </div>
          </div>
	</header><!-- #masthead -->
