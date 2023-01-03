<div class="section section--topspace-none section--bottomspace-none" data-css-animate>
  <div class="container">
    <div class="link-list">
      <ul class="link-list__items">
        <?php foreach( get_sub_field( 'links' ) as $link ): ?>
          <li class="link-list__item">
            <a href="<?php echo $link['url'] ?>" class="link-list__link" target="_blank">
              <?php echo $link['linktext'] ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>