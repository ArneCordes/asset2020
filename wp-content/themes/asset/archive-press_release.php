<?php get_header(); ?>

<div class="site-header site-header--bg-lightgray">
  <div class="site-header__content site-header__content--centered">
    <h1 class="site-header__headline">
      Aktuelle Medienberichte<br>
      <span class="color-main">auf einen Blick</span>
    </h1>
  </div>
</div>


<main>
  <div class="container">
    <div class="post-list">
      <?php if( have_posts()) : $i = 0; while ( have_posts() ) : the_post(); ?>
        <div class="post-list__item post-list__item--image-<?php echo $i % 2 == 0 ? 'left' : 'right'; ?>">
          <div class="section section--topspace-none section--bottomspace-none" data-css-animate>
            <h2 class="section__title<?php echo $i % 2 == 0 ? ' section__title--text-left section__title--arrow' : ''; ?>">
              <span class="section__title-text">
                <?php the_field( 'medium' ); ?>
              </span>
            </h2>
            <div class="post-list__content">
              <div class="text-image<?php echo $i % 2 == 0 ? ' text-image--reverse' : ''; ?>" data-css-animate>
                <div class="text-image__content">
                  <div class="text-image__roof--simple">
                    <?php the_field( 'date' ); ?>
                  </div>
                  <h3 class="text-image__headline text-image__headline--bottomspace-lg">
                    <?php the_title(); ?>
                  </h3>
                  <div class="text-image__text text">
                    <?php the_field( 'short-text' ); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="text-image__button button hover-text">
                    <span class="hover-text__text">
                      Mehr efahren
                    </span>
                    <span class="hover-text__overlay">
                      <span class="hover-text__overlay-text">
                        Zum Artikel
                      </span>
                    </span>
                  </a>
                </div>
                <div class="text-image__media">
                  <div class="text-image__image-wrapper responsive-image-wrapper">
                    <a href="<?php the_permalink(); ?>" class="text-image__media-link">
                      <?php the_post_thumbnail( 'large', [ 'class' => 'text-image__image responsive-image' ] ); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; endif; ?>
      <?php if( function_exists( 'wp_paginate' ) ): ?>
        <div class="pagination">
          <?php wp_paginate(); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="section section--topspace-none" data-css-animate>
    <div class="container">
      <div class="text-section">
        <h2 class="text-section__headline color-main">
          Sprechen sie uns an!
        </h2>
        <div class="text-section__text">
          <p>
            Sie haben Fragen zu unserem Unternehmen oder interessieren sich für ein spezielles Objekt? Sprechen Sie uns an, oder schreiben Sie uns eine Mail! Wir helfen Ihnen gerne!
          </p>
        </div>
        <ul class="text-section__buttons">
          <li class="text-section__buttons-item">
            <a href="#" class="text-section__buttons-anchor">
              <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/phone.png" class="text-section__buttons-icon" alt="Dummy">
              <div class="text-section__buttons-text">
                Jetzt anrufen
              </div>
            </a>
          </li>
          <li class="text-section__buttons-item">
            <a href="#" class="text-section__buttons-anchor">
              <img src="<?php echo get_template_directory_uri(); ?>/src/images/_tmp/plane.png" class="text-section__buttons-icon" alt="Dummy">
              <div class="text-section__buttons-text">
                Mail schreiben
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
