<?php get_header(); ?>

<?php if( have_posts()) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'partials/projects-grid' ); ?>
  <?php get_template_part( 'partials/news-slider' ); ?>
  <div class="section section--bg-lightgray section--topspace-halve section--bottomspace-halve">
    <div class="container">
      <div class="text-image text-image--image-offset" data-css-animate>
        <div class="text-image__content">
          <h2 class="text-image__headline">
            Das Unternehmen und<br>
            <span class="color-main">die Menschen dahinter</span>
          </h2>
          <div class="text-image__text text">
            <p>
              Die ASSET Firmengruppe wurde 1998 in Bremen gegründet. Seit dem haben wir uns mit solide geplanten Immobilienprojekten einen guten Namen gemacht . Unsere Bandbreite reichte von hochwertigen Wohnimmobilien, Verbraucher-märkten und Einkaufszentren bis hin zur Sanierung von historischen Baudenkmälern. 2016 wurde unser Unternehmen gemäß DIN ISO 9001:2015 zertifiziert. ASSET bedeutet »Vermögenswert«. Die Schaffung und Betreuung Ihrer Vermögenswerte ist uns eine Verpflichtung.
            </p>
          </div>
          <a href="/unternehmen/" class="text-image__button button">
            Mehr über uns
          </a>
        </div>
        <div class="text-image__media">
          <div class="text-image__image-wrapper responsive-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/bank-natur.jpg" class="text-image__image responsive-image" alt="Dummy">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title section__title--text-left">
        <span class="section__title-text">
          Unternehmen
        </span>
      </h2>
      <ul class="facts">
        <li class="facts__item">
          <div class="facts__number" data-count="5000">
            5.000
          </div>
          <div class="facts__caption">
            Wohn- und Geschäftseinheiten saniert oder gebaut
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="730">
            730
          </div>
          <div class="facts__caption">
            Millionen Euro<br>
            Projektvolumen insgesamt
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="180">
            180
          </div>
          <div class="facts__caption">
            Millionen Euro Projektvolumen In Bau und Entwicklung
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="6">
            06
          </div>
          <div class="facts__caption">
            Aktuelle Projekte
          </div>
        </li>
        <li class="facts__item">
          <div class="facts__number" data-count="13">
            13
          </div>
          <div class="facts__caption">
            Projekte Insgesamt
          </div>
        </li>
      </ul>
    </div>
  </div>

  <?php get_template_part( 'partials/references-slider' ); ?>

  <div class="section" data-css-animate>
    <div class="container">
      <h2 class="section__title section__title--text-center">
        <span class="section__title-text">
          Kontakt
        </span>
      </h2>
      <div class="text-section">
        <h2 class="text-section__headline">
          Sprechen sie uns an!
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
<?php endwhile; endif; ?>

<?php get_footer(); ?>
