<div class="section" data-css-animate>
  <div class="container container--wide">
    <?php if( $headline = get_sub_field( 'headline' ) ): ?>
      <h2 class="section__title section__title--text-left">
        <span class="section__title-text">
          <?php echo $headline; ?>
        </span>
      </h2>
    <?php endif; ?>
    <ul class="facts">
      <?php foreach( get_sub_field( 'facts' ) as $fact ): ?>
        <li class="facts__item">
          <div class="facts__number" data-count="<?php echo $fact['value']; ?>">
            <?php echo $fact['value']; ?>
          </div>
          <div class="facts__caption">
            <?php echo $fact['text-bottom']; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>