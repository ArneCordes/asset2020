<?php
$projects = get_posts( [
  'post_type' => 'project',
  'posts_per_page' => 3,
  'meta_key' => 'add-to-references',
  'meta_value' => '1'
] );
?>

<?php if( $projects ): ?>
  <div class="section section--half-bg" data-css-animate>
    <div class="container container--wide">
      <h2 class="section__title">
        <span class="section__title-text">
          Referenzen
        </span>
      </h2>
    </div>
    <div class="container">
      <div class="image-slider">
        <div class="image-slider__wrapper">
          <div class="image-slider__swiper swiper">
            <ul class="image-slider__slides swiper-wrapper">
              <?php foreach( $projects as $i => $project ): ?>
                <li class="image-slider__slide swiper-slide">
                  <a href="<?php echo get_permalink( $project ); ?>" class="image-slider__anchor">
                    <div class="image-slider__image-wrapper responsive-image-wrapper">
                      <?php echo get_the_post_thumbnail( $project->ID, 'medium', [ 'class' => 'image-grid__image' ] ); ?>
                    </div>
                    <div class="image-slider__caption">
                      <?php echo str_pad( $i+1 , 2, '0', STR_PAD_LEFT ); ?>.<br>
                      <?php echo get_the_title( $project->ID ); ?>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="image-slider__nav">
            <div class="image-slider__nav-buttons slider__nav-buttons slider__nav-buttons--white">
              <button class="image-slider__nav-button slider__button slider__button--prev swiper-button-prev">
                <span class="sr-only">Zurück</span>
              </button>
              <button class="image-slider__nav-button slider__button slider__button--next swiper-button-next">
                <span class="sr-only">Vor</span>
              </button>
            </div>
          </div>
        </div>
        <div class="image-slider__footer footer-button__wrapper">
          <a href="/projekte/" class="footer-button__button button button--white hover-text">
            <span class="hover-text__text">
              Weitere Referenzen
            </span>
            <span class="hover-text__overlay">
              <span class="hover-text__overlay-text">
                Zu den Projekten
              </span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
