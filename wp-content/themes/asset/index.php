<?php get_header(); ?>

<?php if( $site_title = get_field( 'site-title' ) ): ?>
  <div class="site-header" data-css-animate>
    <div class="site-header__content">
      <h1 class="site-header__headline">
        <?php echo format_text( $site_title ); ?>
      </h1>
    </div>
  </div>
<?php endif; ?>

<main>
  <?php if( have_posts()) : while ( have_posts() ) : the_post(); ?>
    <?php if( have_rows( 'contents' ) ) : while( have_rows( 'contents' ) ) : the_row(); ?>
      <?php get_template_part( 'partials/content/' . get_row_layout() ); ?>
    <?php endwhile; endif; ?>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
