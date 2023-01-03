<?php
$button = $args['button'];
$button_type = $button['type'];

// Build element attributes
$button_attrs = [];

$href = build_link_url( $button );

$button_attrs[] = 'href="' . $href . '"';

// Build classes
$classes = [];

if( isset( $args['class'] ) ) {
  $classes = array_merge( $classes, explode( ' ', $args['class'] ) );
} else {
  $classes =  [ 'button' ];
}

$classes_attr = $classes ? 'class="' . join( ' ', $classes ) . '"' : null;
$button_attrs[] = $classes_attr;

// Target
if( $button['target-blank'] ) {
  $button_attrs[] = 'target="_blank"';
}

// Scroll-to
if( $button['type'] == 'scroll' ) {
  $button_attrs[] = 'data-scroll-to';
}

// Dialog
if( $button['type'] == 'dialog' ) {
  $button_attrs[] = 'data-form-dialog="' . $href . '"';
}

$button_attrs = $button_attrs ? ' ' . join( ' ', $button_attrs ) : '';
?>

<a<?php echo $button_attrs; ?><?php echo $button_type == 'scroll-to' ? ' data-scroll-to' : ''; ?>>
  <?php echo $button['text']; ?>
  <lottie-player
    src="<?php echo get_template_directory_uri(); ?>/src/json/Scroll-Pfeile.json"
    background="transparent"
    speed="1"
    style="width: 30px; height: 30px; transform: rotate(-90deg) translateX(1px);" loop autoplay
  ></lottie-player>
</a>