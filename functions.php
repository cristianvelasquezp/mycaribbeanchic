<?php
function cc_files() {
    wp_enqueue_style('fontawesome-style',get_template_directory_uri() . '/assets/css/all.min.css', '', '1.0.0');
    wp_enqueue_style('fonts-style',get_template_directory_uri() . '/assets/css/fonts.css', '', '1.0.0');
    wp_enqueue_style('main-styles',get_template_directory_uri() . '/assets/css/main.css', '', '1.0.27');

    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true );
}

add_action('wp_enqueue_scripts', 'cc_files');

function add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'add_mime_types');

function cc_features() {
    register_nav_menu('mainMenu', 'Main Menu');
    register_nav_menu('supportMenu', 'Support Menu');
    register_nav_menu('quickLinksMenu', 'Quick Links Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'woocommerce' );
    add_image_size('page_banner', '1500', '300', true );
    add_image_size('product-list', '495', '743', true );
}

add_action('after_setup_theme', 'cc_features');

function the_category_section ($term_id, $image_side = 'left') {
    $term = get_term($term_id);
    $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
    ?>
    <section class="home-category">
            <div class="container">
                <div class="category__container <?php echo ($image_side === 'left') ?  'left-side' : 'right-side' ?>">
                    <div class="home-category__image-container">
                        <figure class="home-category__image-box">
                            <img class="img home-category__image" src="<?php echo wp_get_attachment_url( $thumbnail_id ) ?>" alt="">
                        </figure>
                    </div>
                    <div class="home-category__content">
                        <h3 class="heading-tertiary"><?php echo $term->name ?></h3>
                        <p><a class="btn-text btn-text--category-home" href="<?php echo get_term_link($term) ?>">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </section>
    <?php

}

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options –> Reading
    // Return the number of products you wanna show per page.
    $cols = -1;
    return $cols;
}

function the_hero($image, $title) {
    if (!$image) return
    ?>
    <section class="hero hero--full hero--sections" style="background-image: linear-gradient(to right bottom,rgba(133, 117, 77, .7), rgba(119, 102, 66, .7)), url(<?php echo $image['sizes']['page_banner'] ?>)">
        <div class="container">
            <div class="row">
                <div class="text-box">
                    <h1 class="heading-primary heading--hero"><?php echo $title; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php
}

add_filter('woocommerce_breadcrumb_defaults', "cc_breadcrumb", 20);

function cc_breadcrumb($data) {
    $data['delimiter'] = "";
    $data['wrap_before']    = "<div class='container'><div class='row''><ul class='breadcrumb__box'>";
    $data['wrap_after']     = "</ul></div></div>";
    $data['before']    = "<li class='breadcrumb__item'>";
    $data['after']     = "</li>";

    return $data;
}
