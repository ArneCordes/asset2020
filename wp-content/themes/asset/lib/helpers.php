<?php
function section_classes() {
  $space_top = get_sub_field( 'space-top' );
  $space_bottom = get_sub_field( 'space-bottom' );
  $background = get_sub_field( 'background' );

  $classes = [ "section" ];

  if( $space_top !== false && $space_top != 'default' ) {
    $classes[] = "section--topspace-{$space_top}";
  }

  if( $space_bottom !== false && $space_bottom != 'default' ) {
    $classes[] = "section--bottomspace-{$space_bottom}";
  }

  if( $background && $background != 'default' ) {
    $classes[] = "section--bg-{$background}";
  }

  return join( " ", $classes );
}

function build_link_url($link) {
  switch($link['type']) {
    case 'internal':
      $url = get_permalink( $link['post'] );
      break;
    case 'file':
      $url = wp_get_attachment_url( $link['file'] );
      break;
    case 'scroll-to':
    case 'dialog':
      $url = "#{$link['target-id']}";
      break;
    default:
      $url = $link['url'];
      break;
  }

  return $url;
}

function format_text($text) {
  $text = preg_replace('#\*{2}(.*?)\*{2}#', '<span class="color-main">$1</span>', $text);
  return $text;
}