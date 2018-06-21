<?php
  // enqueue the child theme stylesheet
  function thegem_child_enqueue_css() {
    wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css' );
    wp_register_style( 'subscription', get_stylesheet_directory_uri() . '/subscription.css' );
    wp_enqueue_style( 'childstyle' );
    wp_enqueue_style( 'subscription' );
  }
  add_action( 'wp_enqueue_scripts', 'thegem_child_enqueue_css', 11);

  function thegem_child_enqueue_js() {
    wp_enqueue_script('child_js', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), false, true);
    wp_enqueue_style( 'childstyle' );
  }
  add_action( 'wp_enqueue_scripts', 'thegem_child_enqueue_js', 6);

  // add price tag below short descriptioin in Product detail page
  add_action('thegem_woocommerce_single_product_right', 'woocommerce_template_single_price', 40);

  // change `add to cart` text
  add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text');
  function woo_custom_single_add_to_cart_text() {
    return __('ADD TO BAG', 'woocommerce');
  }

  // custom currency symbol
  add_filter('woocommerce_currency_symbol', 'thegem_child_currency_symbol', 30, 2);
  function thegem_child_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
      case 'USD':
        $currency_symbol = 'USD ';
        break;
    }
    return $currency_symbol;
  }

  // custom text in chceckout
  add_filter( 'gettext', 'thegem_child_paypal_button_text', 20, 3 );
  function thegem_child_paypal_button_text( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
      case 'Proceed to PayPal' :
        $translated_text = __( 'PLACE ORDER', 'woocommerce' );
        break;
    }
    return $translated_text;
  }









