    <div class="page-footer<?php echo get_field( 'footer-bg' ) ? ' page-footer--bg-' . get_field( 'footer-bg' ) : ''; ?>">
      <div class="container container--wide">
        <div class="page-footer__inner">
          <div class="page-footer__row">
            <div class="page-footer__col">
              <?php echo wp_get_attachment_image( get_theme_mod( 'logo_brand' ), 'full', null, array( 'class' => 'page-footer__logo' ) ); ?>
            </div>
            <div class="page-footer__col">
              <strong><i>ASSET Berlin Wohnimmobilien GmbH</i></strong><br>
              Am Waller Freihafen 1 a<br>
              28217 Bremen<br>
              Deutschland
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
            <lottie-player
              src="<?php echo get_template_directory_uri(); ?>/src/json/Back-To-Top-Arrow.json"
              background="transparent"
              speed="1"
              style="width: 40px; height: 40px; transform:rotate(90deg);" loop autoplay
            ></lottie-player>
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
