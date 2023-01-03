<div class="section section--bottomspace-none section--topspace-none" data-css-animate>
    <div class="container">
      <div class="quote">
        <div class="quote__content">
          <div class="quote__text">
            <?php foreach( get_sub_field( 'lines' ) as $line ): ?>
              <span class="quote__text-line">
                <?php echo $line['text']; ?>
              </span>
            <?php endforeach; ?>
          </div>
          <?php if( $source = get_sub_field( 'source' ) ): ?>
            <div class="quote__text-source">
              &mdash; <?php echo $source; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>