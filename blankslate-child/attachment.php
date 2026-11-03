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
          <?php if ( wp_attachment_is_image( get_the_ID() ) ) { ?>
            <a href="<?php echo esc_url( wp_get_attachment_url( get_the_ID() ) ); ?>">
              <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
            </a>
          <?php } else { ?>
            <a href="<?php echo esc_url( wp_get_attachment_url( get_the_ID() ) ); ?>">
              <?php echo esc_html( get_the_title() ); ?>
            </a>
          <?php } ?>
        </div>
        <?php if ( get_the_content() ) { ?>
          <div class="o-mt-15"><?php the_content(); ?></div>
        <?php } ?>
        <?php if ( comments_open() && ! post_password_required() ) {
          comments_template();
        } ?>
      </article>
    <?php }
  } ?>
</section>

<?php get_footer(); ?>
