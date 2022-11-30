<?php
$gallery = get_field( 'gallery' );
$show_text_image = get_field( 'show-text-image' );
$text_image = get_field( 'text-image' );
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

<div class="section section--bottomspace-halve">
  <div class="container container--wide">
    <h1 class="section__title section__title--arrow">
      <span class="section__title-text">
        <?php the_title() ?>
      </span>
    </h1>
    <div class="single-project__info row">
      <div class="single-project__datalist-col col col--1-3">
        <?php get_template_part( 'partials/project-key-data' ); ?>
      </div>
      <div class="single-project__text-col col col--2-3">
        <div class="single-project__text text">
          <?php the_field( 'text' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section section--topspace-none <?php echo get_field( 'microlage' ) ? ' section--bottomspace-halve' : ' section--bottomspace-x2'; ?>" data-css-animate>
  <div class="container container--wide">
    <h2 class="section__title section__title--text-left">
      <span class="section__title-text">
        Location
      </span>
    </h2>
    <?php if( $maps_url = get_field( 'maps-url' ) ): ?>
      <a href="<?php echo $maps_url; ?>" class="location-map" target="_blank">
        <div class="location-map__image-wrapper responsive-image-wrapper">
          <lottie-player
            src="<?php echo get_template_directory_uri(); ?>/src/json/Location.json"
            background="transparent"
            speed="1"
            class="location-map__marker"
            style="width: 140px; height: 140px;" loop autoplay
            ></lottie-player>
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/map.jpg" class="location-map__image responsive-image" alt="Karte">
        </div>
      </a>
    <?php endif; ?>
  </div>
</div>

<?php if( $microlage = get_field( 'microlage' ) ): ?>
  <div class="section section--topspace-none<?php echo !$show_text_image ? ' section--bottomspace-none' : ''; ?>" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title">
        <span class="section__title-text">
          Microlage
        </span>
      </h2>
      <div class="single-project__microlage">
        <div class="single-project__microlage-image-wrapper">
          <?php echo wp_get_attachment_image( $microlage, 'large', null, [ 'class' => 'single-project__microlage-image' ] ); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if( $show_text_image ): ?>
  <div class="single-project__sales-section section section--bg-lightgray section--topspace-halve">
    <div class="container">
      <div class="text-image text-image--image-offset text-image--image-offset-lg" data-css-animate>
        <div class="text-image__content">
          <?php if( !empty( $text_image['headline'] ) ): ?>
            <h2 class="text-image__roof text-image__roof--outside">
              <div class="text-image__roof-text section__title-text">
                <?php echo $text_image['headline']; ?>
              </div>
            </h2>
          <?php endif; ?>
          <div class="text-image__text text">
            <?php echo $text_image['text']; ?>
          </div>
          <a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="text-image__button button hover-text">
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
            <?php echo wp_get_attachment_image( $text_image['image'], 'large', null, [ 'class' => 'text-image__image responsive-image' ] ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="single-project__back-section section section--bg-lightgray section--topspace-halve">
    <div class="container">
      <a href="<?php echo get_post_type_archive_link( 'project' ); ?>" class="text-image__button button hover-text">
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
  </div>
<?php endif; ?>

<div class="section section--topspace-none" data-css-animate>
  <div class="container">
    <div class="text-section">
      <h2 class="text-section__headline text-section__headline--alt">
        Haben Sie Fragen<br>
        zu diesem Projekt?
      </h2>
      <div class="text-section__text text-section__text--narrow">
        <p>
          Wenn Sie Interesse an diesem Objekt haben, mehr erfahren wollen, oder über den weiteren Projektverlauf werden wollen, dann melden Sie sich doch! Wir beantworten Ihre Fragen gerne!
        </p>
      </div>
      <?php get_template_part( 'partials/contact-section-buttons' ); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
