<?php get_header(); ?>

<div class="site-header">
  <div class="site-header__content">
    <div class="single-slider">
      <div class="single-slider__wrapper">
        <ul class="single-slider__items">
          <li class="single-slider__item">
            <div class="single-slider__image-wrapper responsive-image-wrapper">
              <?php the_post_thumbnail( 'large', array( 'class' => 'single-slider__image responsive-image' ) ); ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<main>
  <div class="section section--topspace-none">
    <div class="container container--wide">
      <div class="section__title section__title--text-left section__title--arrow">
        <span class="section__title-text">
          <?php the_field( 'medium' ); ?>
        </span>
      </div>
      <div class="article">
        <h1 class="article__headline">
          <?php if( $single_title = get_field( 'single-title' ) ): ?>
            <?php echo $single_title; ?>
          <?php else: ?>
            <?php the_field( 'title' ); ?>
          <?php endif; ?>
        </h1>
        <div class="article__content">
          <div class="article__text text">
            <?php the_field( 'text' ) ?>
          </div>
          <div class="article__aside">
            <ul class="datalist">
              <li class="datalist__item">
                <div class="datalist__label">Datum</div>
                <div class="datalist__value"><?php the_field( 'date' ); ?></div>
              </li>
              <?php if( $article_url = get_field( 'article-url' ) ): ?>
                <li class="datalist__item">
                  <div class="datalist__label">Link</div>
                  <div class="datalist__value">
                    <a href="<?php echo $article_url; ?>" target="_blank">
                      Zum Artikel
                    </a>
                  </div>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
