<?php 

add_action('after_setup_theme', function() {
  add_theme_support('woocommerce');
  add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('wooeshop-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
  wp_enqueue_style('wooeshop-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
  wp_enqueue_style('wooeshop-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
  wp_enqueue_style('wooeshop-owl', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.css');
  wp_enqueue_style('wooeshop-owl-theme', get_template_directory_uri() . '/assets/owlcarousel/owl.theme.default.min.css');
  wp_enqueue_style('wooeshop-main', get_template_directory_uri() . '/assets/css/main.css');

  wp_enqueue_script('jquery');
  wp_enqueue_script('wooeshop-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), false, true);
  wp_enqueue_script('wooeshop-owl', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js', array(), false, true);
  wp_enqueue_script('wooeshop-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
});

require_once get_template_directory() . '/incs/woocommerce-hooks.php';