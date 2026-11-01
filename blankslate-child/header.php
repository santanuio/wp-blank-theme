<?php
$asset_img_uri = get_stylesheet_directory_uri() . '/assets/img/';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="tattoo studio" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php wp_head(); ?>
</head>

<body id="js-body" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="wrapper" class="hfeed">
  <header>
    <nav class="nav nav--fixed nav--autohide" aria-label="Primary Navigation">
      <div class="o-container">
        <div class="nav__flex">
          <div class="nav__option1">
            <div class="logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Spinner Ink Tattoos home">
                <img src="<?php echo esc_url( $asset_img_uri . 'spinnerinktattoos-logo.png' ); ?>" width="180" height="40" alt="Spinner Ink Tattoos" />
              </a>
            </div>
          </div>
          <div class="nav__option2 o-d-none o-d-md-block">
            <ul class="nav__ul">
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Work</a></li>
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></li>
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/events/' ) ); ?>">Promo &amp; Events</a></li>
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/aftercare/' ) ); ?>">Aftercare</a></li>
              <li><a class="nav__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact us</a></li>
            </ul>
          </div>
          <div class="nav__option3 o-d-flex o-gap-15 o-items-center">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
              class="o-btn o-btn-primary o-btn-sm o-d-none o-d-md-block weight500 text-uppercase">
              Book Now
            </a>
            <div class="hamburger-icon o-d-block o-d-md-none" id="js-hamburger-icon">
              <div>
                <span class="hamburger-icon__area">
                  <span class="hamburger-icon__span"></span>
                  <span class="hamburger-icon__span"></span>
                  <span class="hamburger-icon__span"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div id="container">
  <main id="content" role="main">
