<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php is_front_page() ? bloginfo('name') : wp_title(''); ?> </title>
    <?php wp_head(); ?> 
</head>

<body>
    <header class="block">
        <section class="d-flex selector-block">
            <div class="nav-menu container-gallery mt-0" >
                <nav class="nav-menu__body main-menu navbar navbar-expand-lg ">
                    <div class="nav-menu__container container-fluid">
                      <button class="nav-menu__toggler navbar-toggler collapsed" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#navbar-content">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="nav-menu__collapse collapse navbar-collapse" id="navbar-content">
                        <ul class="nav-menu__content navbar-nav mr-auto mb-2 mb-lg-0 ft-2">

                          <li class="nav-menu__logo nav-item">
                            <a aria-current="page" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Logo">
                            </a>
                          </li>

                          <li class="nav-item">
                            <a aria-current="page" href="#">
                                Главная
                            </a>
                          </li>

                          <li class="nav-item">
                            <a aria-current="page" href="#">
                                Фулфилмент
                            </a>
                          </li>
                          <li class="nav-item">
                            <a aria-current="page" href="#">
                                Ответственное хранение
                            </a> 
                          </li> 

                          <li class="nav-item active">
                            <a aria-current="page" href="#">
                                О нас
                            </a>
                          </li>

                          <li class="nav-item">
                            <a aria-current="page" href="#">
                                Контакты
                            </a>
                          </li>

                          <li class="nav-item">
                            <a aria-current="page" href="tel:<?php the_field('phone_number_#1') ?>">
                                <?php the_field('phone_number_#1') ?> 
                            </a> <br>
                            <a aria-current="page" href="tel:<?php the_field('phone_number_#2') ?>">
                                <?php the_field('phone_number_#2') ?>
                            </a>
                          </li>

                          <li class="nav-menu__insta nav-item">
                            <a aria-current="page" href="#">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png" alt="Instagram">
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>
            </div>
        </section>
    </header>