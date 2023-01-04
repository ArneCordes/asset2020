<?php // Template name: Projekte ?>

<?php
$the_query = new WP_Query( [
  'post_type' => 'project'
] );
?>

<?php get_header(); ?>

<div class="site-header site-header--bg-lightgray" data-css-animate>
  <div class="site-header__content">
    <h1 class="site-header__headline">
      Auch die komplexesten Projekte fangen ganz einfach an. <span class="color-main">Mit einer Idee.</span>
    </h1>
  </div>
</div>

<main>
  <div class="container">
    <div class="post-list">
      <?php if( $the_query->have_posts()) : $i = 0; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="post-list__item post-list__item--image-<?php echo $i % 2 == 0 ? 'left' : 'right'; ?>">
          <div class="section section--topspace-none section--bottomspace-none"<?php echo $i > 0 ? ' data-css-animate' : ''; ?>>
            <h2 class="section__title<?php echo $i % 2 == 0 ? ' section__title--text-left section__title--arrow' : ''; ?>">
              <span class="section__title-text">
                <?php the_title(); ?>
              </span>
            </h2>
            <div class="post-list__content">
              <div class="text-image<?php echo $i % 2 == 0 ? ' text-image--reverse' : ''; ?>"<?php echo $i > 0 ? ' data-css-animate' : ''; ?>>
                <div class="text-image__content">
                  <div class="text-image__text text">
                    <?php get_template_part( 'partials/project-key-data', null, [ 'limit' => 5 ] ); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="text-image__button button hover-text">
                    <span class="hover-text__text">
                      Mehr erfahren
                    </span>
                    <span class="hover-text__overlay">
                      <span class="hover-text__overlay-text">
                        Zum Projekt
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
          ??????
          <?php wp_paginate( [ 'query' => $the_query ] ); ?>
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
        <?php get_template_part( 'partials/contact-section-buttons' ); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
