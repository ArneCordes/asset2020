<div class="section section--bottomspace-x2" data-css-animate>
    <div class="container container--wide">
      <?php if( $title = get_sub_field( 'title' ) ): ?>
        <h2 class="section__title section__title--text-left">
          <span class="section__title-text">
            <?php echo $title; ?>
          </span>
        </h2>
      <?php endif; ?>
    </div>
  </div>

  <div class="section section--bg-lightgray section--topspace-none section--bottomspace-none">
    <div class="container container--wide">
      <ul class="person-grid" data-css-animate>
        <?php foreach( get_sub_field( 'persons' ) as $person ): ?>
          <li class="person-grid__item">
            <div class="person">
              <div class="person__image-wrapper responsive-image-wrapper">
                <?php echo wp_get_attachment_image( $person['image'], 'medium', null, [ 'class' => 'person__image responsive-image' ] ); ?>
              </div>
              <div class="person__name">
                <?php echo $person['name']; ?>
              </div>
              <?php if( !empty( $person['position'] ) ): ?>
                <div class="person__position">
                  <?php echo $person['position']; ?>
                </div>
              <?php endif; ?>
              <div class="person__contact">
                <?php if( !empty( $person['email'] ) ): ?>
                  <div class="person__contact-item">
                    <a href="mailto:<?php echo $person['email']; ?>" class="person__email">
                      <?php echo $person['email']; ?>
                    </a>
                  </div>
                <?php endif; ?>
                <?php if( !empty( $person['phone'] ) && !empty( $person['phone-readable'] ) ): ?>
                  <div class="person__contact-item">
                    <a href="tel:<?php echo $person['phone']; ?>" class="person__phone">
                      <?php echo $person['phone-readable']; ?>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>