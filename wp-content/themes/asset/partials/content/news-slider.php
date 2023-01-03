<?php
$press_releases = get_posts( [
  'post_type' => 'press_release',
  'posts_per_page' => 3,
  'meta_key' => 'date',
  'orderby' => 'meta_value',
  'order' => 'DESC'
] );
?>

<div class="section section--bottomspace-x2" data-css-animate>
  <div class="container container--wide">
    <?php if( $headline = get_sub_field( 'headline' ) ): ?>
      <h2 class="section__title section__title--arrow">
        <span class="section__title-text">
          <?php echo $headline; ?>
        </span>
      </h2>
    <?php endif; ?>
    <div class="news-slider" data-css-animate>
      <div class="news-slider__wrapper">
        <div class="news-slider__swiper swiper">
          <ul class="news-slider__items swiper-wrapper">
            <?php foreach( $press_releases as $press_release ): ?>
              <li class="news-slider__item swiper-slide">
                <div class="news-slider__roof">
                  <?php the_field( 'medium', $press_release->ID ); ?>
                </div>
                <div class="news-slider__content">
                  <h3 class="news-slider__headline">
                    <?php echo get_the_title( $press_release->ID ); ?>
                  </h3>
                  <div class="news-slider__text text">
                    <p>
                      <?php the_field( 'short-text', $press_release->ID ); ?>
                    </p>
                    <p>
                      <a href="<?php echo get_the_permalink( $press_release->ID ); ?>" class="button button--arrow">
                        Zum Artikel
                        <lottie-player
                          src="<?php echo get_template_directory_uri(); ?>/src/json/Scroll-Pfeile.json"
                          background="transparent"
                          speed="1"
                          style="width: 30px; height: 30px; transform: rotate(-90deg) translateX(2px);" loop autoplay
                        ></lottie-player>
                      </a>
                    </p>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="news-slider__pagination swiper-pagination"></div>
      </div>
      <div class="news-slider__nav">
        <div class="news-slider__nav-buttons slider__nav-buttons">
          <button class="news-slider__nav-button slider__button slider__button--prev swiper-button-prev">
            <span class="sr-only">Zurück</span>
          </button>
          <button class="news-slider__nav-button slider__button slider__button--next swiper-button-next">
            <span class="sr-only">Vor</span>
          </button>
        </div>
      </div>
      <div class="news-slider__footer footer-button__wrapper">
        <a href="/medienberichte/" class="footer-button__button button hover-text">
          <span class="hover-text__text">
            Mehr Neuigkeiten
          </span>
          <span class="hover-text__overlay">
            <span class="hover-text__overlay-text">
              Zum News-Blog
            </span>
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
