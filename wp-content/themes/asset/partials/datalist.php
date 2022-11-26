<?php $items = $args['items']; ?>

<?php foreach ($items as $label => $value): ?>
  <?php if( $value ): ?>
    <li class="datalist__item">
      <div class="datalist__label">
        <?php echo $label; ?>
      </div>
      <div class="datalist__value">
        <?php echo $value; ?>
      </div>
    </li>
  <?php endif; ?>
<?php endforeach; ?>
