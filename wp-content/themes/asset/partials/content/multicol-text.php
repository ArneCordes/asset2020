<div class="section section--topspace-none section--bottomspace-none" data-css-animate>
  <div class="container">
    <?php if( $title = get_sub_field( 'title' ) ): ?>
      <h2 class="section__title section__title--text-left">
        <span class="section__title-text">
          <?php echo $title; ?>
        </span>
      </h2>
    <?php endif; ?>
    <div class="multicol-text" data-css-animate>
      <?php if( $headline = get_sub_field( 'headline' ) ): ?>
        <h2 class="multicol-text__headline text-section__headline text-section__headline--lg">
          <?php echo format_text( $headline ); ?>
        </h2>
      <?php endif; ?>
      <div class="multicol-text__text text">
        <?php the_sub_field( 'text' ); ?>
      </div>
    </div>
  </div>
</div>