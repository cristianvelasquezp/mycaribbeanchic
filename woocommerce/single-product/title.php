<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
global $product;
$brand = get_field('add_brand', $product->get_id());
?>
<h4 class="brand brand--detail"><?php echo $brand->post_title ?></h4>
<?php
the_title( '<h3 class="product__title">', '</h3>' );
