<?php // Template name: Kontakt ?>

<?php get_header(); ?>

<?php if( $site_title = get_field( 'site-title' ) ): ?>
  <div class="site-header site-header--bg-lightgray" data-css-animate>
    <div class="site-header__content">
      <h1 class="site-header__headline">
        <?php echo format_text( $site_title ); ?>
      </h1>
    </div>
  </div>
<?php endif; ?>

<main>
  <?php if( have_rows( 'contents' ) ) : while( have_rows( 'contents' ) ) : the_row(); ?>
    <?php get_template_part( 'partials/content/' . get_row_layout() ); ?>
  <?php endwhile; endif; ?>

  <div class="section section--topspace-none" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title">
        <span class="section__title-text">
          Anfahrt
        </span>
      </h2>
      <div class="single-project__microlage">
        <div class="single-project__microlage-image-wrapper">
          <a href="https://goo.gl/maps/RB6df3kw1AUHjXtm8" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/microlage.png" class="single-project__microlage-image" alt="Karte">
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
