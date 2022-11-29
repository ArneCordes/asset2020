<?php
$projects = get_posts( [
  'post_type' => 'project',
  'posts_per_page' => 3
] );
?>

<div class="container">
  <ul class="image-grid">
    <?php foreach( $projects as $i => $project ): ?>
      <li class="image-grid__item image-grid__item--<?php echo $i == 0 ? 'highlight' : 'default'; ?>">
        <a href="<?php echo get_permalink( $project ); ?>" class="image-grid__item-inner">
          <div class="image-grid__content image-grid__content--<?php echo $i == 0 ? 'vertical' : 'overlay'; ?>">
            <div class="image-grid__headline">
              <?php echo get_the_title( $project->ID ); ?>
              <?php if( $i == 0 ): ?>
                /<br><?php the_field( 'location', $project->ID ); ?>
              <?php endif; ?>
            </div>
            <span class="image-grid__more">
              <span class="image-grid__more-text">
                Zum Projekt
              </span>
            </span>
          </div>
          <div class="image-grid__image-wrapper">
            <?php echo get_the_post_thumbnail( $project->ID, 'large', [ 'class' => 'image-grid__image' ] ); ?>
          </div>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
