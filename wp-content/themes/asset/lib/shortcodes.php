<?php
add_shortcode('certificates', 'certificates_shortcode');

function certificates_shortcode($args) {
  ob_start();
  include locate_template('partials/certificates.php');
  return ob_get_clean();
}