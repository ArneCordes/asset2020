<?php // Template name: Rechtliche Seite ?>

<?php get_header(); ?>

<div class="site-header site-header--bg-lightgray" data-css-animate>
  <div class="site-header__content">
    <h1 class="site-header__headline">
      Impressum <span class="color-main">Datenschutz</span>
    </h1>
  </div>
</div>

<main>
  <?php foreach( get_field( 'section' ) as $i => $section ): ?>
    <div class="section section--topspace-none">
      <div class="container">
        <h2 class="section__title<?php echo $i % 2 == 0 ? ' section__title--text-left section__title--arrow' : ''; ?>">
          <span class="section__title-text">
            <?php echo $section['headline']; ?>
          </span>
        </h2>
        <div class="legal">
          <?php foreach( $section['blocks'] as $block ): ?>
            <div class="legal__block">
              <h3 class="legal__headline">
                <?php echo $block['headline'] ?>
              </h3>
              <div class="legal__text text">
                <?php echo $block['text']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</main>

<?php get_footer(); ?>
