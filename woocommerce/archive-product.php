<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$cc_term = get_queried_object();
if ( !$cc_term->parent ) {
    $id_field = $cc_term->term_id;
}else {
    $id_field = $cc_term->parent;
}
$hero = get_field('background_image', "product_cat_" . $id_field);
the_hero($hero, $cc_term->name);
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

do_action( 'woocommerce_before_main_content' );
?>

    <div class="container">
        <div class="row">
            <header class="woocommerce-products-header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
            <?php endif; ?>

            <?php
            /**
             * Hook: woocommerce_archive_description.
             *
             * @hooked woocommerce_taxonomy_archive_description - 10
             * @hooked woocommerce_product_archive_description - 10
             */
            do_action( 'woocommerce_archive_description' );
            ?>
            </header>
        </div>
    </div>
<?php
if ( woocommerce_product_loop() ) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    ?>
    <div class="container">
        <div class="row">
    <?php
    do_action( 'woocommerce_before_shop_loop' );

    //woocommerce_product_loop_start();
?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="product-list">
<?php
    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            $brand = get_field('add_brand');
            $product = wc_get_product(get_the_ID());
            $thumbnail = wp_get_attachment_image_src($product->get_image_id(), 'product-list');

            ?>
            <div class="product__item"
                 data-id="<?php echo $product->get_id() ?>"
                 data-link ="<?php echo $product->get_permalink() ?>"
                 data-name="<?php echo $product->get_name(); ?>"
                 data-image = "<?php echo $thumbnail[0] ?>"
                 data-price = "<?php echo wc_get_price_to_display($product) ?>"
                 data-brand = "<?php if ($brand) echo $brand->post_title; ?>"
                 data-brand-link = "<?php if ($brand) echo get_permalink($brand->ID); ?>"
            ></div>
            <?php
            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action( 'woocommerce_shop_loop' );

            //wc_get_template_part( 'content', 'product' );
        }
    }

    //woocommerce_product_loop_end();
    ?>
            </div>
        </div>
    </div>
    <?php


    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_after_shop_loop' );
} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
