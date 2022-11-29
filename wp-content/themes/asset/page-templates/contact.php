<?php // Template name: Legal ?>

<?php get_header(); ?>

<div class="site-header site-header--bg-lightgray" data-css-animate>
  <div class="site-header__content">
    <h1 class="site-header__headline">
      Wir sind <span class="color-main">für Sie da.</span>
    </h1>
  </div>
</div>

<main>
  <div class="section section--topspace-none" data-css-animate>
    <div class="container">
      <h2 class="section__title section__title--text-left section__title--arrow">
        <span class="section__title-text">
          Kontakt
        </span>
      </h2>
      <div class="text-section">
        <h2 class="text-section__headline">
          <span class="color-main">Sprechen sie uns an!</span>
        </h2>
        <div class="text-section__text">
          <p>
            Sie haben Fragen zu unserem Unternehmen oder interessieren sich für ein spezielles Objekt? Sprechen Sie uns an, oder schreiben Sie uns eine Mail! Wir helfen Ihnen gerne!
          </p>
        </div>
        <?php get_template_part( 'partials/contact-section-buttons' ); ?>
      </div>
    </div>
  </div>

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
