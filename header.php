<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blueflowermedia' ); ?></a>

      <header id="masthead" class="site-header">

        <section class="top-heading">
          <div class="container flex-row">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img id="pic-logo" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-logo-animated-final.gif" alt=""></a>
          </div>

          <!-- Social media ----->
          <div class="heading-right">
            <a href="https://www.facebook.com/Toronto-Astrology-1126213817542255/?modal=admin_todo_tour"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-facebook.png" alt=""></a>
            <a href="https://www.youtube.com/"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/toronto-astrology-youtube-icon.png" alt=""></a>
          </div>
        </section>

        <section class="menu-heading flex-row">
          <nav id="site-navigation" class="main-navigation container-navbar">
            <div class="nav-middle">
              <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            ) );
          ?>
            </div>
          </nav>
            <div class="hamburger" id="hamburger-9">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
            <div id="dropdown-menu" class="dropdown">
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path( ‘about’ )); ?>">About</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path( ‘services’ )); ?>">Services</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path( ‘page-blog’ )); ?>">Blog</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path( ‘booking’ )); ?>">Book An Appointment</a>
              </ul>
            </div>
        </section>

        <!-- <nav id="site-navigation" class="main-navigation container-navbar">
          <div class="nav-middle">
            <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
        ?>
          </div>
          <!-- navbar right -->
          <!-- <div class="nav-right">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blueflowermedia' ); ?></button>
            <a href=""><button class="nav-contact" type="button" name="button">Contact Us</button></a>
          </div> -->
        <!-- </nav> -->
      </header>
    </div>
  </body>
