<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

?>
<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

    <p itemprop="price" class="echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>

    <meta itemprop="priceCurrency" content="USD">

    <meta itemprop="availability" content="http://schema.org/InStock">
</div>
