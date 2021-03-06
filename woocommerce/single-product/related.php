<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( $related_products ) : ?>

    <section class="related products slider-product">
        <div class="container">
            <?php
            $heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

            if ( $heading ) :
                ?>
                <h2 class="heading-primary"><?php echo esc_html( $heading ); ?></h2>
            <?php endif; ?>
            <div class="slider">
                <div class="slider__arrows">
                    <button class="slider__arrow slider__arrow--prev" type="button" data-goto="-1">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="slider__arrow slider__arrow--next" type="button" data-goto="1">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>

                <div class="slider__items">
                    <?php woocommerce_product_loop_start(); ?>

                    <?php foreach ( $related_products as $related_product ) : ?>

                        <?php
                        $post_object = get_post( $related_product->get_id() );
                        setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                        product_template('slider__item');
                        //wc_get_template_part( 'content', 'product' );
                        ?>

                    <?php endforeach; ?>

                    <?php woocommerce_product_loop_end(); ?>
                </div>
            </div>
        </div>
    </section>
<?php
endif;

wp_reset_postdata();
