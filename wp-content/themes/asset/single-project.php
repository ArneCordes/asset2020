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

<?php get_footer(); ?>
