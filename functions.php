<?php
/**
 * Electro Child
 *
 * @package electro-child
 */

/**
 * Include all your custom code here
 */
 
add_filter( 'woocommerce_get_price_html', 'contact_for_price_logic', 100, 2 );
function contact_for_price_logic( $price, $product ) {
    if ( '' === $product->get_price() || 0 == $product->get_price() ) {
        return 'Contact for price';
    }
    return $price;
}