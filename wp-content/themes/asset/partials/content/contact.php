<div class="<?php echo section_classes(); ?>" data-css-animate>
  <div class="container">
    <?php if( $title = get_sub_field( 'title' ) ): ?>
      <h2 class="section__title <?php echo is_page_template( 'page-templates/contact.php' ) ? 'section__title--text-left section__title--arrow' : 'section__title--text-center'; ?>">
        <span class="section__title-text">
          <?php echo $title; ?>
        </span>
      </h2>
    <?php endif; ?>
    <div class="text-section">
      <?php if( $headline = get_sub_field( 'headline' ) ): ?>
        <div class="text-section__headline">
          <?php echo format_text( $headline ); ?>
        </div>
      <?php endif; ?>
      <?php if( $text = get_sub_field( 'text' ) ): ?>
        <div class="text-section__text text">
          <?php echo $text; ?>
        </div>
      <?php endif; ?>
      <?php get_template_part( 'partials/contact-section-buttons' ); ?>
    </div>
  </div>
</div>