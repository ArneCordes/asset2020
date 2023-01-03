<?php if( $roof = get_sub_field( 'roof' ) ): ?>
  <div class="section section--topspace-none section--bottomspace-halve" data-css-animate>
    <div class="container">
      <h2 class="section__title section__title--text-left section__title--arrow">
        <span class="section__title-text">
          <?php echo $roof; ?>
        </span>
      </h2>
    </div>
  </div>
<?php endif; ?>

<div class="section section--bg-lightgray" data-css-animate>
  <div class="container">
    <div class="text-cite" data-css-animate>
      <div class="text-cite__content">
        <?php if( $title = get_sub_field( 'title' ) ): ?>
          <div class="text-cite__roof">
            <?php echo $title; ?>
          </div>
        <?php endif; ?>
        <?php if( $headline = get_sub_field( 'headline' ) ): ?>
          <h2 class="text-cite__headline">
            <?php echo format_text( $headline ); ?>
          </h2>
        <?php endif; ?>
        <div class="text-cite__text text">
          <?php the_sub_field( 'text' ); ?>
        </div>
      </div>
      <div class="text-cite__cite">
        <?php echo format_text( get_sub_field( 'cite' ) ); ?>
      </div>
    </div>
  </div>
</div>