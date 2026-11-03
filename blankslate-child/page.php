<?php get_header(); ?>

<section class="o-container section-padding">
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
          <h1 class="title-h2"><?php the_title(); ?></h1>
        </header>
        <div class="o-mt-30">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) );
          } ?>
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
        </div>
      </article>
      <?php if ( comments_open() && ! post_password_required() ) {
        comments_template();
      } ?>
    <?php }
  } ?>
</section>

<?php get_footer(); ?>
