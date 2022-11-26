<?php
$gallery = get_field( 'gallery' );
?>

<?php get_header(); ?>

<?php if( $gallery ): ?>
  <div class="container">
    <div class="single-slider">
      <div class="single-slider__wrapper swiper">
        <ul class="single-slider__items swiper-wrapper">
          <?php foreach( $gallery as $item ): ?>
            <li class="single-slider__item swiper-slide">
              <a href="<?php echo array_shift( wp_get_attachment_image_src( $item, 'large' ) ); ?>" class="single-slider__link">
                <div class="single-slider__image-wrapper responsive-image-wrapper">
                  <?php echo wp_get_attachment_image( $item, 'large', null, array( 'class' => 'single-slider__image responsive-image' ) ); ?>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="single-slider__nav-buttons slider__nav-buttons slider__nav-buttons--centered">
        <button class="single-slider__nav-button slider__button slider__button--prev swiper-button-prev">
          <span class="sr-only">Zurück</span>
        </button>
        <button class="single-slider__nav-button slider__button slider__button--next swiper-button-next">
          <span class="sr-only">Vor</span>
        </button>
      </div>
    </div>
    <div class="single-slider__thumb-slider thumb-slider">
      <div class="thumb-slider__wrapper swiper">
        <ul class="thumb-slider__items swiper-wrapper">
          <?php foreach( $gallery as $item ): ?>
            <li class="thumb-slider__item swiper-slide">
              <div class="thumb-slider__image-wrapper responsive-image-wrapper">
                <?php echo wp_get_attachment_image( $item, 'thumbnail', null, array( 'class' => 'thumb-slider__image responsive-image' ) ); ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="section section--bottomspace-halve" data-css-animate>
  <div class="container container--wide">
    <h1 class="section__title section__title--arrow">
      <span class="section__title-text">
        <?php the_title() ?>
      </span>
    </h1>
    <div class="single-project__info row">
      <div class="single-project__datalist-col col col--1-3">
        <ul class="single-project__datalist datalist">
          <?php
          get_template_part( 'partials/datalist', null, [ 'items' =>  [
            'Verkaufbare Fläche' => get_field( 'saleable-area' ),
            'Projektvolumen' => get_field( 'volume' ),
            'Wohneinheiten' => get_field( 'units' ),
            'Vertriebsbeginn' => get_field( 'sales-start' )
          ] ] );
          ?>
        </ul>
      </div>
      <div class="single-project__text-col col col--2-3">
        <div class="single-project__text text">
          <?php the_field( 'text' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section--topspace-none section--bottomspace-halve" data-css-animate>
  <div class="container container--wide">
    <h2 class="section__title section__title--text-left">
      <span class="section__title-text">
        Location
      </span>
    </h2>
    <div class="location-map">
      <div class="location-map__image-wrapper responsive-image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/map.jpg" class="location-map__image responsive-image" alt="Karte">
      </div>
    </div>
  </div>
</div>

<div class="section section--topspace-none" data-css-animate>
  <div class="container container--wide">
    <h2 class="section__title">
      <span class="section__title-text">
        Microlage
      </span>
    </h2>
    <div class="single-project__microlage">
      <div class="single-project__microlage-image-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/microlage.png" class="single-project__microlage-image" alt="Karte">
      </div>
    </div>
  </div>
</div>

<div class="single-project__sales-section section section--bg-lightgray section--topspace-halve">
  <div class="container">
    <div class="text-image text-image--image-offset text-image--image-offset-lg" data-css-animate>
      <div class="text-image__content">
        <h2 class="text-image__roof text-image__roof--outside">
          <div class="text-image__roof-text section__title-text">
            Vertrieb
          </div>
        </h2>
        <div class="text-image__text text">
          <p>
            Vertriebspartner für dieses Projekt ist Bremische Volksbank Immobilien GmbH. Weitere Informationen finden Sie hier:
          </p>
          <p>
            <a href="#">Bremische Volksbank Immobilien GmbH – Objekte</a>
          </p>
        </div>
        <a href="#" class="text-image__button button hover-text">
          <span class="hover-text__text">
            Zur Übersicht
          </span>
          <span class="hover-text__overlay">
            <span class="hover-text__overlay-text">
              Zur Übersicht
            </span>
          </span>
        </a>
      </div>
      <div class="text-image__media">
        <div class="text-image__image-wrapper responsive-image-wrapper responsive-image-wrapper--16-9">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/asset-spascher-gaerten-05.jpg" class="text-image__image responsive-image" alt="Dummy">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section--topspace-none" data-css-animate>
  <div class="container">
    <div class="contact">
      <h2 class="contact__headline contact__headline--alt">
        Haben Sie Fragen<br>
        zu diesem Projekt?
      </h2>
      <div class="contact__text contact__text--narrow">
        <p>
          Wenn Sie Interesse an diesem Objekt haben, mehr erfahren wollen, oder über den weiteren Projektverlauf werden wollen, dann melden Sie sich doch! Wir beantworten Ihre Fragen gerne!
        </p>
      </div>
      <ul class="contact__buttons">
        <li class="contact__buttons-item">
          <a href="tel:+493040048714" class="contact__buttons-anchor">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/phone.png" class="contact__buttons-icon" alt="Dummy">
            <div class="contact__buttons-text">
              <span class="hover-text hover-text--fade">
                <span class="hover-text__text">
                  Jetzt anrufen
                </span>
                <span class="hover-text__overlay">
                  <span class="hover-text__overlay-text">
                    T: 030 / 40 04 87 – 14
                  </span>
                </span>
              </span>
            </div>
          </a>
        </li>
        <li class="contact__buttons-item">
          <a href="mailto:service@asset-firmengruppe.de" class="contact__buttons-anchor">
            <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/plane.png" class="contact__buttons-icon" alt="Dummy">
            <div class="contact__buttons-text">
              <span class="hover-text hover-text--fade">
                <span class="hover-text__text">
                  Mail schreiben
                </span>
                <span class="hover-text__overlay">
                  <span class="hover-text__overlay-text">
                    service@asset-firmengruppe.de
                  </span>
                </span>
              </span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>
