<header class="page-header">
  <div class="container">
    <div class="page-header__inner">
      <a href="<?php echo home_url(); ?>" class="page-header__logo-link">
        <?php echo get_template_part( 'partials/logo' ); ?>
      </a>
      <nav class="page-header__nav">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class' => 'page-header__nav-menu',
          'container' => '',
          'depth' => 1
        ) );
        ?>
      </nav>
      <span class="page-header__nav-toggle">
        <span class="sr-only">Navigation anzeigen</span>
      </span>
    </div>
  </div>
</header>
