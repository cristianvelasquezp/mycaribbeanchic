<?php
get_header();
?>
    <section class="hero hero--full hero--home" style="overflow: hidden; height: auto">
        <div class="bg-video" style="opacity: 0.5">
        <video class="" autoplay muted loop style="max-width: 100%">
            <source src="https://www.mycaribbeanchic.com/wp-content/uploads/2021/11/IMG_0833.mp4" type="video/mp4">
        </video>
        </div>
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
                            product_template('slider__item');
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