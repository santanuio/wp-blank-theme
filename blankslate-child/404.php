<?php get_header(); ?>

<section class="o-container section-padding" aria-labelledby="page-title">
  <h1 class="title-h2" id="page-title"><?php esc_html_e( 'Page not found', 'blankslate-child' ); ?></h1>
  <p class="o-mt-30">
    <?php esc_html_e( 'The page you requested could not be found. Try searching for what you need.', 'blankslate-child' ); ?>
  </p>
  <div class="o-mt-30">
    <?php get_search_form(); ?>
  </div>
</section>

<?php get_footer(); ?>
