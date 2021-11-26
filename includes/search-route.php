<?php

add_action('rest_api_init', 'cc_register_search');

function cc_register_search(){
    register_rest_route('cc/v1', 'search', array(
        'methods'   => WP_REST_Server::READABLE,
        'callback'  => 'cc_search_results',
    ));
}

function cc_search_results($data) {
    $products = new WP_Query( array(
        'post_type'         => 'product',
        'posts_per_page'    => 5,
        's'                 => $data['term'],
    ));

    $products_array = array();

    while ($products->have_posts()) {
        $products->the_post();

        $brand = get_field('add_brand');
        $product = wc_get_product(get_the_ID());
        $thumbnail = wp_get_attachment_image_src($product->get_image_id(), 'product-search');

        $obj = array(
            'name'      => get_the_title(),
            'id'        => get_the_ID(),
            'image'     => $thumbnail,
            'link'      => $product->get_permalink(),
            'brand'     => ($brand) ? $brand->post_title : '',
        );

        array_push($products_array, $obj);
    }

    return $products_array;
}
