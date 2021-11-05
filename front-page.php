<?php
get_header();
?>
    <section class="hero hero--full hero--home" style="background-image: url(http://localhost:8888/mycaribbeanchic/wp-content/uploads/2021/11/hero-home-scaled.jpg)">
        <div class="container"></div>
    </section>

    <?php
        $cc_products = new WP_Query(array(
            'posts_per_page'    => -1,
            'post_type'         => 'product',
            'meta_key'          => 'trending_looks',
            'orderby'           => 'meta_value',
            'order'             => 'ASC',
        ));

        var_dump($cc_products);
    ?>

    <main class="main">
        <section class="slider-product">
            <div class="container">
                <h2 class="heading-primary">Shop Our Trending Looks</h2>

                <div class="splide splide--loop splide--ltr splide--draggable is-active is-initialized" id="splide01">
                    <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide01-track" aria-label="Go to last slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide01-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button></div><div class="splide__track" id="splide01-track" style="padding-left: 0px; padding-right: 0px;">
                        <ul class="splide__list" id="splide01-list" style="transform: translateX(-2310px);">
                            <li class="splide__slide splide__slide--clone" id="splide01-clone01" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone02" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone03" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone04" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone05" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone is-prev" id="splide01-clone06" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide is-active is-visible" id="splide01-slide01" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" tabindex="0">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible is-next" id="splide01-slide02" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" tabindex="0">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible" id="splide01-slide03" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" tabindex="0">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" id="splide01-slide04" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" id="splide01-slide05" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" id="splide01-slide06" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide01-clone07" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone08" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone09" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone10" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone11" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li><li class="splide__slide splide__slide--clone" id="splide01-clone12" style="margin-right: 15px; width: calc(((100% + 15px) / 3) - 15px);" aria-hidden="true">
                                <div class="item-container">
                                    <div class="item-container__image-box">
                                        <figure>
                                            <img class="img item-container__image" src="images/carousel-1.jpg" alt="category img">
                                        </figure>
                                    </div>
                                    <div class="item-container__content-box">
                                        <h3 class="item-container__brand"><a class="item-container__link" href="#" tabindex="-1">MAYGEL CORONEL</a></h3>
                                        <h4 class="item-container__title"><a class="carousel-item__link" href="#" tabindex="-1">Blas Body</a></h4>
                                        <h5 class="item-container__price">$210.00</h5>
                                    </div>
                                </div>
                            </li></ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-category">
            <div class="container">
                <div class="category__container left-side">
                    <div class="home-category__image-container">
                        <figure class="home-category__image-box">
                            <img class="img home-category__image" src="images/home-clothing.jpg" alt="">
                        </figure>
                    </div>
                    <div class="home-category__content">
                        <h3 class="heading-tertiary">Clothing</h3>
                        <p><a class="btn-text btn-text--category-home" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-category">
            <div class="container">
                <div class="category__container right-side">
                    <div class="home-category__image-container">
                        <figure class="home-category__image-box">
                            <img class="img home-category__image" src="images/home-jewelry.jpg" alt="">
                        </figure>
                    </div>
                    <div class="home-category__content">
                        <h3 class="heading-tertiary">Jewelry</h3>
                        <p><a class="btn-text btn-text--category-home" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-category">
            <div class="container">
                <div class="category__container left-side">
                    <div class="home-category__image-container">
                        <figure class="home-category__image-box">
                            <img class="img home-category__image" src="images/home-accessories.jpg" alt="">
                        </figure>
                    </div>
                    <div class="home-category__content">
                        <h3 class="heading-tertiary">Accessories</h3>
                        <p><a class="btn-text btn-text--category-home" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-category">
            <div class="container">
                <div class="category__container right-side">
                    <div class="home-category__image-container">
                        <figure class="home-category__image-box">
                            <img class="img home-category__image" src="images/about-img.jpg" alt="">
                        </figure>
                    </div>
                    <div class="home-category__content home-category__about">
                        <h3 class="heading-tertiary">About Us</h3>
                        <p><strong>Caribbean Chic</strong> works in partnership with designers and entrepreneurs across latin american to promote local art and talent globally. We are a multibrand store that dreams to make latin american talent visible to the world. <br>
                            <img src="images/about-us-firma2.png" alt=""></p>
                    </div>
                </div>
            </div>
        </section>

    </main>
<?php

get_footer();