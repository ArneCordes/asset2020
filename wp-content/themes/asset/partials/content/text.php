<div class="<?php echo section_classes(); ?>" data-css-animate>
  <div class="container">
    <?php if( $title = get_sub_field( 'title' ) ): ?>
      <h2 class="section__title section__title--text-center">
        <span class="section__title-text">
          <?php echo $title; ?>
        </span>
      </h2>
    <?php endif; ?>
    <div class="text-section">
      <?php if( $roof = get_sub_field( 'roof' ) ): ?>
        <div class="text-section__roof">
          <?php echo $roof; ?>
        </div>
      <?php endif; ?>
      <?php if( $headline = get_sub_field( 'headline' ) ): ?>
        <div class="text-section__headline text-section__headline--<?php the_sub_field( 'headline-size' ); ?>">
          <?php echo format_text( $headline ); ?>
        </div>
      <?php endif; ?>
      <?php if( $text = get_sub_field( 'text' ) ): ?>
        <div class="text-section__text text">
          <?php echo $text; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>