
        <footer class="footer w-100 py-4 d-flex">
            <div class="footer__container block container footer-text d-grid">
                <div class="footer__content row d-flex">
                    <div class="footer__nav col-3">
                        <ul class="footer__nav-body container">
                            <li class="footer__nav-item">
                                <a href="#">
                                    Главная
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#">
                                    Фулфилмент
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#">
                                    Ответственное хранение
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#">
                                    О нас
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__company col-5">
                        <div class="footer__company-body d-flex">
                            <div class="footer__company-info align-text-center">
                                <span class="footer__company-name footer-header">
                                    OOO “Лагерлогистик”
                                </span> <br>
                                <span class="footer__company-desc">
                                    Универсальные складские решения для Вашего бизнеса!
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="footer__contacs col">
                        <div class="footer__contacs-text footer-header">
                            Свяжитесь с нами:
                        </div>
                        <div class="footer__contacs-container container">
                            <div class="footer__phone row">
                                <div class="row">
                                    <div class="footer__phone-icon col-1"></div>
                                    <span class="footer__phone-header contacts-header col-9">
                                        Телефон:
                                    </span> 
                                </div>
                                <div class="row mt-2">
                                    <div class="footer__white-space col-1"></div>
                                    <div class="footer__phone-text col-9">
                                        <span class="contacts-text">
                                            <a aria-current="page" href="tel:<?php the_field('phone_number_#1') ?>">
                                                <?php the_field('phone_number_#1') ?> 
                                            </a> <br>
                                            <a aria-current="page" href="tel:<?php the_field('phone_number_#2') ?>">
                                                <?php the_field('phone_number_#2') ?>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="footer__mail-icon col-1"></div>
                                    <span class="footer__mail-header contacts-header col-9">
                                        Почта:
                                    </span> 
                                </div>
                                <div class="row mt-2">
                                    <div class="footer__white-space col-1"></div>
                                    <div class="footer__mail-text col-9">
                                        <span class="contacts-text">
                                            <a aria-current="page" href="mailto:<?php the_field('mail') ?>">
                                                <?php the_field('mail') ?>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>