<?php get_header(); ?>

<?php if( $site_title = get_field( 'news-site-title', 'option' ) ): ?>
  <div class="site-header site-header--bg-lightgray" data-css-animate>
    <div class="site-header__content">
      <h1 class="site-header__headline">
        <?php echo format_text( $site_title['site-title'] ); ?>
      </h1>
    </div>
  </div>
<?php endif; ?>


<main>
  <div class="container">
    <div class="post-list">
      <?php if( have_posts()) : $i = 0; while ( have_posts() ) : the_post(); ?>
        <div class="post-list__item post-list__item--image-<?php echo $i % 2 == 0 ? 'left' : 'right'; ?>">
          <div class="section section--topspace-none section--bottomspace-none"<?php echo $i > 0 ? ' data-css-animate' : ''; ?>>
            <h2 class="section__title<?php echo $i % 2 == 0 ? ' section__title--text-left section__title--arrow' : ''; ?>">
              <span class="section__title-text">
                <?php the_field( 'medium' ); ?>
              </span>
            </h2>
            <div class="post-list__content">
              <div class="text-image<?php echo $i % 2 == 0 ? ' text-image--reverse' : ''; ?>"<?php echo $i > 0 ? ' data-css-animate' : ''; ?>>
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
                      Mehr erfahren
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
        <?php if( $headline = get_field( 'news-contact_headline', 'option' ) ): ?>
          <h2 class="text-section__headline color-main">
            <?php echo $headline; ?>
          </h2>
        <?php endif; ?>
        <?php if( $text = get_field( 'news-contact_text', 'option' ) ): ?>
          <div class="text-section__text">
            <?php echo $text; ?>
          </div>
        <?php endif; ?>
        <?php get_template_part( 'partials/contact-section-buttons' ); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
