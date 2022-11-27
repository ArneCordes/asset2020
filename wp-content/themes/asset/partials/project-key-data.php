<?php
$limit = !empty( $args['limit'] ) ? $args['limit'] - 1 : null;
$location = get_field( 'location' );
?>

<?php if( $key_data = get_field( 'key-data' ) ): ?>
  <ul class="single-project__datalist datalist">
    <?php if( $location ): ?>
      <li class="datalist__item">
        <div class="datalist__label">Ort</div>
        <div class="datalist__value"><?php echo $location; ?></div>
      </li>
    <?php endif; ?>
    <?php foreach( $key_data as $i => $data ): ?>
      <li class="datalist__item">
        <div class="datalist__label">
          <?php echo $data['label']; ?>
        </div>
        <div class="datalist__value">
          <?php echo $data['value']; ?>
        </div>
      </li>
      <?php if( $i+1 == $limit ): ?>
        <?php break; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
