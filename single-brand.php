<?php
get_header();
$hero = get_field('background_image');
the_hero($hero, get_the_title());
?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="product-list">
            <?php
            $products = new WP_Query( array(
                'post_type'         => 'product',
                'posts_per_page'    => -1,
                'meta_key'          => 'add_brand',
                'orderby'           => 'meta_value',
                'meta_query'        => array(
                    'key'     => 'add_brand',
                    'value'   => get_the_ID(),
                    'compare' => '=='
                ),
            ));
            while ($products->have_posts()) {
                $products->the_post();
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

            }
            wp_reset_query();
            ?>
            </div>
        </div>
    </div>
</main>

<?php

get_footer();