    <div class="page-footer">
      <div class="container container--wide">
        <div class="page-footer__inner">
          <div class="page-footer__row">
            <div class="page-footer__col">
              <?php echo wp_get_attachment_image( get_theme_mod( 'logo_brand' ), 'full', null, array( 'class' => 'page-footer__logo' ) ); ?>
            </div>
            <div class="page-footer__col">
              <strong><i>Asset Wohnimmobilien GmbH</i></strong><br>
              Kadiner Str. 20<br>
              10243 Berlin
            </div>
            <?php foreach( [1,2,3,4] as $i ): ?>
              <div class="page-footer__col">
                <?php
                wp_nav_menu( array(
                  'theme_location' => "footer-{$i}",
                  'menu_class' => 'page-footer__menu',
                  'container' => '',
                  'depth' => 1
                ) );
                ?>
              </div>
            <?php endforeach; ?>
          </div>
          <a href="#" class="page-footer__scroll">
            <span class="page-footer__scroll-text">
              Zurück nach oben
            </span>
          </a>
        </div>
      </div>
    </div>
  </body>
  <?php wp_footer(); ?>
</html>
