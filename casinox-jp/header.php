<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/latoregular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/PF Kids Pro Grade Five Regular.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <header>
        <div class="header-block">
            <div class="header-block-top">
                <a class="header-logo-link" href="/" aria-label="Logo">
                    <div class="header-logo" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/casinox-logo.svg)"></div>
                </a>
                <div class="header-top-right">
                    <a class="header-button" href="#">登録</a>
                    <a class="header-button reg" href="#">ログイン</a>
                    <div class="header-language">
                        <div class="head-lang-list">
                            <div class="language-title">
                                <a class="lang-title-link" href="#languages">
                                    JP
                                </a>
                            </div>
                            <div id="languages">
                                <ul class="lang-content">
                                    <li class="lang-content-item">
                                        <a href="#" class="lang-content-item-link">
                                            <div class="lang-content-item-link-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/united-kingdom.svg)"></div>
                                            <span>English</span>
                                        </a>
                                    </li>
                                    <li class="lang-content-item">
                                        <a href="#" class="lang-content-item-link active">
                                            <div class="lang-content-item-link-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/japan.svg)"></div>
                                            <span>日本語</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-block-bottom">
            <div class="header-nav-menu">
                <?php wp_nav_menu([ 'menu' => 'Main' ]); ?>
            </div>
            <div class="menu-mobile-button">
                <div class="menu-mobile-button-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/menu.svg)"></div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu-content">
                <div class="menu-content-head">
                    <div class="close-block-button" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/close.svg)"></div>
                </div>
                <div class="menu-content-logo-block">
                    <a href="/" class="menu-content-logo" aria-label="Logo">
                        <div class="header-logo" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/casinox-logo.svg)"></div>
                    </a>
                </div>
                <div class="menu-content-items">
                    <?php wp_nav_menu([ 'menu' => 'Main' ]); ?>
                </div>
                <div class="mobile-menu-buttons">
                    <a class="header-button" href="#">登録</a>
                    <a class="header-button reg" href="#">ログイン</a>
                </div>
            </div>
        </div>
    </header>
