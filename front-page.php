<?php
get_header();
?>
    <section class="hero hero--full hero--home" style="background-image: url(http://localhost:8888/mycaribbeanchic/wp-content/uploads/2021/11/hero-home-scaled.jpg)">
        <div class="container"></div>
    </section>



    <main class="main">
        <section class="slider-product">
            <div class="container">
                <h2 class="heading-primary">Shop Our Trending Looks</h2>

                <div class="slider" >
                    <div class="slider__arrows">
                        <button class="slider__arrow slider__arrow--prev" type="button" data-goto="-1">
                            <i class="fas fa-angle-left"></i>
                        </button>
                        <button class="slider__arrow slider__arrow--next" type="button" data-goto="1">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>
                    <div class="slider__items">
                        <?php
                        $trending_products = new WP_Query(array(
                            'posts_per_page'    => 12,
                            'post_type'         => 'product',
                            'meta_key'          => 'trending_looks',
                            'orderby'           => 'meta_value',
                            'order'             => 'ASC',
                        ));
                        while($trending_products->have_posts()) {
                            $trending_products->the_post();
                            $brand = get_field('add_brand');
                            $product = wc_get_product(get_the_ID());
                            $thumbnail = wp_get_attachment_image_src($product->get_image_id(), 'product-list');

                            ?>
                                <div class="slider__item"
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
        </section>

        <?php
        the_category_section(18);
        the_category_section(19, 'right');
        the_category_section(20);

        $about_us = new WP_Query(array(
                'page_id' => '21',
        ));

        while ($about_us->have_posts()) {
            $about_us->the_post();
            ?>
            <section class="home-category">
                <div class="container">
                    <div class="category__container right-side">
                        <div class="home-category__image-container">
                            <figure class="home-category__image-box">
                                <img class="img home-category__image" src="<?php echo esc_url(the_field('image_home')); ?>" alt="">
                            </figure>
                        </div>
                        <div class="home-category__content home-category__about">
                            <h3 class="heading-tertiary"><?php echo get_the_title() ?></h3>
                            <p><?php if (the_field('home_content') ) echo the_field('home_content') ?> <br>
                                <img src="<?php echo esc_url(the_field('sign')); ?>" style="max-width: 200px" alt=""></p>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }

        ?>


    </main>
<?php

get_footer();