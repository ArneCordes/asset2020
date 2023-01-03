<?php
$alignment = get_sub_field( 'alignment' );
$classes = [ 'text-image' ];

if( $alignment != 'default' ) {
  $classes[] = "text-image--{$alignment}";
}

if( get_sub_field( 'offset-image' ) ) {
  $classes[] = "text-image--image-offset";
}

$classes = join( " ", $classes );
?>
<div class="<?php echo section_classes(); ?>">
  <div class="container">
    <div class="<?php echo $classes; ?>" data-css-animate>
      <div class="text-image__content">
        <?php if( $roof = get_sub_field( 'roof' ) ): ?>
          <div class="text-image__roof text-image__roof--simple">
            <?php echo $roof; ?>
          </div>
        <?php endif; ?>
        <?php if( $headline = get_sub_field( 'headline' ) ): ?>
          <h2 class="text-image__headline">
            <?php echo format_text( $headline ); ?>
          </h2>
        <?php endif; ?>
        <div class="text-image__text text">
          <?php the_sub_field( 'text' ); ?>
        </div>
        <?php if( get_sub_field( 'add-button' ) ): ?>
          <?php
          get_template_part( 'partials/button', null, [
            'button' => get_sub_field( 'button' ),
            'class' => 'text-image__button button button--arrow'
          ] ); ?>
        <?php endif; ?>
      </div>
      <div class="text-image__media">
        <div class="text-image__image-wrapper responsive-image-wrapper">
          <?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'large', null, [ 'class' => 'text-image__image responsive-image' ] ); ?>
        </div>
      </div>
    </div>
  </div>
</div>