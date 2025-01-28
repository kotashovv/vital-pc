<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/fancybox.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/css/style.css?ver=2">
   <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrap">
                    <div class="mobile-btn">
                        <button class="menu-btn">
                            <span>

                            </span>
                        </button>
                    </div>
                    <div class="title">
                        <a href="#">
                            <span>Vital</span> <br> Computers
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li>
                                <a data-goto="#a-works" href="#">
                                    Готовые сборки
                                </a>
                            </li>
                            <li>
                                <a data-goto="#a-servs" href="#">
                                    Услуги
                                </a>
                            </li>
                            <li>
                                <a data-goto="#a-revs" href="#">
                                    Отзывы
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__action">
                        <div class="header__phone">
                            <a href="+79533477883"></a>
                        </div>
                        <div class="header__button">
                            <button data-popup="popup-1" class="main-btn call-popup">
                                Заказать пк
                            </button>
                        </div>
                    </div>

                    <div class="header__mobile-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a data-goto="#a-works" href="#">
                                        Готовые сборки
                                    </a>
                                </li>
                                <li>
                                    <a data-goto="#a-servs" href="#">
                                        Услуги
                                    </a>
                                </li>
                                <li>
                                    <a data-goto="#a-revs" href="#">
                                        Отзывы
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="mobile-action">
                            <a class="main-btn" href="tel:+79996000000">Позвонить</a>
                            <button class="main-btn trans-btn">Оставить заявку</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>