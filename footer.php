<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__title">
                <a href="#">
                    vital <span>Computer</span>
                </a>
            </div>
            <div class="footer__menu">
                <div class="footer__subtitle">
                    Меню
                </div>
                <ul>
                    <li>
                        <a href="#">Услуги</a>
                    </li>
                    <li>
                        <a href="#">Товары</a>
                    </li>
                    <li>
                        <a href="#">Обо мне</a>
                    </li>
                    <li>
                        <a href="#">Гарантия</a>
                    </li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer__subtitle">
                    <h3>
                        Контакты
                    </h3>
                </div>
                <ul>
                    <li>
                        <a href="#">+7 999 600 00 00</a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/Like.svg"
                                alt=""> Телеграм</a>
                    </li>
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/Like.svg"
                                alt=""> VK</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__subinfo">
            <span>2024</span>
            <span>
                ИП ВИТАЛИЙ
            </span>
            <span>инн: 0000000 <br>
                JUHYBG: 0000000</span>
        </div>
    </div>
</footer>
</div>

<div class="popup-wrap">
    <div class="popup__body">
        <div id="popup_1" class="popup__item">
            <button class="close-popup"></button>
            <div class="title">
                <h4>
                    <span>Оставить заявку</span>
                </h4>
            </div>
            <form id="my-form" action="#">
                <label>
                    <input placeholder="Ваше имя" type="text" name="username">
                </label>
                <label>
                    <input type="text" placeholder="Ваш телефон" name="userphone">
                </label>
                <span>или</span>
                <label>
                    <input type="text" name="userid" placeholder="ID в социальных сетях">
                </label>
                <label>
                    <select name="user-select">
                        <option value="default">Ваша цель</option>
                        <option value="upgrade">Обновить ПК</option>
                        <option value="create">Собрать с нуля</option>
                    </select>
                </label>
                <div class="action">
                    <button type="submit" class="main-btn">Оставить заявку</button>
                </div>
            </form>
            <div id="response-message"></div>
            <div class="popup-more">
                <span>Вы также можете связаться со мной напрямую</span>
                <div class="popup-more__wrap">
                    <a href="#">
                        Telegram
                    </a>
                    <a href="#">
                        Vk
                    </a>
                    <a href="#">
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
        <!-- <div id="popup_2" class="popup__item">

            </div> -->
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/'; ?>assets/js/app.js?ver=2"></script>
<?php wp_footer(); ?>

</html>