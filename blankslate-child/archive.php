<?php get_header(); ?>

<section class="o-container section-padding" aria-labelledby="page-title">
  <header>
    <h1 class="title-h2" id="page-title"><?php echo esc_html( get_the_archive_title() ); ?></h1>
    <?php if ( get_the_archive_description() ) { ?>
      <div class="o-mt-15"><?php echo wp_kses_post( get_the_archive_description() ); ?></div>
    <?php } ?>
  </header>

  <?php if ( have_posts() ) { ?>
    <div class="o-mt-30">
      <?php while ( have_posts() ) {
        the_post(); ?>
        <article <?php post_class( 'o-mt-30' ); ?>>
          <h2 class="title-h3">
            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
          </h2>
          <div class="o-mt-15"><?php the_excerpt(); ?></div>
        </article>
      <?php } ?>
    </div>
    <div class="o-mt-30"><?php the_posts_pagination(); ?></div>
  <?php } else { ?>
    <p class="o-mt-30"><?php esc_html_e( 'No content found.', 'blankslate-child' ); ?></p>
  <?php } ?>
</section>

<?php get_footer(); ?>
