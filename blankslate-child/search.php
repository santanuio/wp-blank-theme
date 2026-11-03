<?php get_header(); ?>

<section class="o-container section-padding" aria-labelledby="page-title">
  <h1 class="title-h2" id="page-title">
    <?php
    printf(
      esc_html__( 'Search results for: %s', 'blankslate-child' ),
      esc_html( get_search_query() )
    );
    ?>
  </h1>

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
    <p class="o-mt-30"><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate-child' ); ?></p>
    <div class="o-mt-15"><?php get_search_form(); ?></div>
  <?php } ?>
</section>

<?php get_footer(); ?>
