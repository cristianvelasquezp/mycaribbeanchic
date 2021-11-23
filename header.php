<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header <?php if (is_front_page()) echo '' ?>">
    <div class="container">
        <input type="checkbox" class="header__checkbox" id="bar-menu">
        <label for="bar-menu" class="header__bar-menu">
            <span class="header__bar-menu-icon"></span>
        </label>
        <div class="header__logo-box">
            <a href="<?php echo site_url(); ?>"><img class="img header__logo" src="http://localhost:8888/mycaribbeanchic/wp-content/uploads/2021/11/logo.svg" alt="logo"></a>
        </div>
        <div class="header__mobile-menu-background"></div>
        <div class="header__menus">
            <div class="header__menu--tools">
                <ul class="menu menu--tools">
                    <li class="menu__item menu__item--tools menu__item--search">
                        <form class="form form--search" name="search" action="#">
                            <input class="input input--search" type="text" placeholder="Search...">
                            <span class="input__search-bottom">
                                <input class="input input--search-bottom" type="submit" value="Search">
                                <i class="input__search-icon icon fas fa-search"></i>
                            </span>
                        </form>
                        <i class="icon icon__search--desktop fas fa-search"></i>
                    </li>
                    <li class="menu__item menu__item--tools"><i class="icon far fa-user"></i></li>
                    <li class="menu__item menu__item--tools"><i class="icon fas fa-shopping-bag"></i></li>
                </ul>
            </div>
            <nav class="header__menu--main" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <ul class="menu">
                    <li class="menu__item" ><a class="menu__item-link <?php if ( is_tax('product_cat', 'clothing') ) echo 'menu__item-link--active'?>" href="<?php echo site_url('/product-category/clothing/') ?>" itemprop="url"><span itemprop="name">Clothing</span></a></li>
                    <li class="menu__item" ><a class="menu__item-link <?php if ( is_tax('product_cat', 'jewelry') ) echo 'menu__item-link--active'?>" href="<?php echo site_url('/product-category/jewelry/')?>" itemprop="url"><span itemprop="name">Jewelry</span></a></li>
                    <li class="menu__item" ><a class="menu__item-link <?php if ( is_tax('product_cat', 'accessories') ) echo 'menu__item-link--active'?>" href="<?php echo site_url('/product-category/accessories/') ?>" itemprop="url"><span itemprop="name">Accessories</span></a></li>
                    <li class="menu__item" ><a class="menu__item-link" href="#" itemprop="url"><span itemprop="name">Brands</span></a></li>
                    <li class="menu__item" ><a class="menu__item-link" href="#" itemprop="url"><span itemprop="name">Sale</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
</header>