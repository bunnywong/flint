<?php
  // enqueue the child theme stylesheet
  function wp_schools_enqueue_scripts() {
    wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
    wp_enqueue_style( 'childstyle' );
  }
  add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

  // add price tag below short descriptioin in Product detail page
  // remove_action('thegem_woocommerce_single_product_right', 'woocommerce_template_single_price', 30);
  add_action('thegem_woocommerce_single_product_right', 'woocommerce_template_single_price', 40);

  // change `add to cart` text
  add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text');
  function woo_custom_single_add_to_cart_text() {
    return __('ADD TO BAG', 'woocommerce');
  }

  // custom currency symbol
  add_filter('woocommerce_currency_symbol', 'currency_symbol', 30, 2);
  function currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
      case 'USD':
        $currency_symbol = 'USD ';
        break;
    }
    return $currency_symbol;
  }

  // custom text in chceckout
  add_filter( 'gettext', 'custom_paypal_button_text', 20, 3 );
  function custom_paypal_button_text( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
      case 'Proceed to PayPal' :
        $translated_text = __( 'PLACE ORDER', 'woocommerce' );
        break;
    }
    return $translated_text;
  }















