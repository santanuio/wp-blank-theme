<?php $asset_img_uri = get_stylesheet_directory_uri() . '/assets/img/'; ?>
<?php if ( ! is_front_page() ) : ?>
</main>
</div>
<footer class="footer o-mt-50">
  <div class="o-container section-padding-sm">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo-link">
      <img src="<?php echo esc_url( $asset_img_uri . 'spinnerinktattoos-logo.png' ); ?>"
        class="footer__logo" alt="Spinner Ink Tattoos" width="200" height="80" loading="lazy">
    </a>
    <p class="o-mt-15">
      1435 S La Cienega Blvd Ste D, Los Angeles, CA 90035, United States
    </p>
    <p class="o-mt-10">
      <a href="tel:+13233516963">(323) 351-6963</a>
      <span aria-hidden="true"> | </span>
      <a href="mailto:management@spinnerinktattoos.com">management@spinnerinktattoos.com</a>
    </p>
  </div>
</footer>
<?php endif; ?>
<?php if ( ! is_front_page() ) : ?>
<div class="o-side-menu" id="js-side-menu">
  <nav class="o-side-menu__nav">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></li>
      <li class="o-side-menu__dropdown">
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
        <div class="o-side-menu__dropdown-button" id="js-dropdown-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
            class="bi bi-plus-lg o-side-menu__plus" id="js-show" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
            class="bi bi-dash-lg o-side-menu__subs" id="js-hide" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8" />
          </svg>
        </div>
        <ul class="o-side-menu__dropdown-menu" id="js-mobile-dropdown">
          <li><a href="<?php echo esc_url( home_url( '/service-1/' ) ); ?>">Service 01</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service-2/' ) ); ?>">Service 02</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service-3/' ) ); ?>">Service 03</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service-4/' ) ); ?>">Service 04</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service-5/' ) ); ?>">Service 05</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
    </ul>
  </nav>
</div>
<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
