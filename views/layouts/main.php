<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title="Навоийский государственный горный институт") ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <div class="header__top-inner-left">
                    <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span>info@ndki.uz</a>
                    <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span>+998 79 223 49 66</a>
                </div>
                <div class="header__top-inner-right">
                    <div class="dropdown symbols">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/symbols/symbol.svg" alt="">
                            Гос. символы
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                        </div>
                    </div>
                    <div class="dropdown special">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-eye"></span>
                            Специальные возможности
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                            <a class="dropdown-item" href="#">Option</a>
                        </div>
                    </div>
                    <div class="dropdown languages">
                        <button class="btn btn-outline-white btn-sm dropdown-toggle" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/languages/russian.svg" alt="">
                            Русский
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="#">
                                <img src="/images/languages/uzbek.svg" alt="">
                                O'zbek
                            </a>
                            <a class="dropdown-item" href="#">
                                <img src="/images/languages/english.svg" alt="">
                                English
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__middle">
        <div class="container">
            <div class="header__middle-inner">
                <div class="logo">
                    <a href="index.html">
                        <img src="/images/assets/logo.svg" alt="Навоийский государственный горный институт">
                        <span>Навоийский государственный <br> горный институт</span>
                    </a>
                </div>
                <div class="search">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm" type="button" id="search">
                                    <i class="icon icon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="header__buttons">
                    <a href="#" class="btn btn-info btn-lg"><span class="icon icon-book"></span>Moodle</a>
                    <a href="#" class="btn btn-warning btn-lg"><span class="icon icon-list"></span>Education</a>
                </div>

                <!-- Mobile menu -->
                <a href="javascript:;" class="btn btn-primary btn-lg mobile-menu-toggle">
                    <span class="icon icon-bars"></span>
                </a>
                <div class="mobile-menu">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex">    
                            <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span></a>
                            <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span></a>
                        </div>
                        <div class="d-flex mobile-languages">
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/uzbek.svg" alt="">
                            </a>
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/russian.svg" alt="">
                            </a>
                            <a href="javascript:;" class="btn">
                                <img src="/images/languages/english.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="search mb-3">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="button" id="search">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="header__buttons mb-3">
                        <a href="#" class="btn btn-info"><span class="icon icon-book"></span>Moodle</a>
                        <a href="#" class="btn btn-warning"><span class="icon icon-list"></span>Education</a>
                    </div>

                    <div class="mobile-menu__nav">
                        <ul>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Институт</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#" class="active">Структура</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#" class="active">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Деятельность</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Студентам</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Абитуриент</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Новости</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="has-arrow">
                                    <a href="#">Интерактивные услуги</a>
                                    <span class="icon icon-arrow-down"></span>
                                </div>
                                <ul>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                    <li><a href="#">Menu dropdown item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">

        <div class="container">
            <div class="menu">
                <nav>
                    <ul>
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
<!--                        <li class="menu-item-has-dropdown active">-->
<!--                            <a href="#">Структура</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li class="active"><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item-has-dropdown">-->
<!--                            <a href="#">Деятельность</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item-has-dropdown">-->
<!--                            <a href="#">Студентам</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item-has-dropdown">-->
<!--                            <a href="#">Абитуриент</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item-has-dropdown">-->
<!--                            <a href="#">Новости</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Новости</a></li>-->
<!--                                <li><a href="#">Объявление</a></li>-->
<!--                                <li><a href="#">Тендеры</a></li>-->
<!--                                <li><a href="#">Фотогалерея</a></li>-->
<!--                                <li><a href="#">Видеогалерея</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item-has-dropdown">-->
<!--                            <a href="#">Интерактивные услуги</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                                <li><a href="#">Menu dropdown item</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
                       <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

    <?= $content ?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer__row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <h5>Институт</h5>
                <ul>
                    <li><a href="#">Нормативные документы</a></li>
                    <li><a href="#">Общая информация</a></li>
                    <li><a href="#">Прямое обращение к ректору НГГИ</a></li>
                    <li><a href="#">Интерактивные услуги</a></li>
                    <li><a href="#">Карта сайта</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Деятельность</a></li>
                    <li><a href="#">Структура</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <h5>Ресурсы</h5>
                <ul>
                    <li><a href="#">Расписание занятий</a></li>
                    <li><a href="#">UNISYS</a></li>
                    <li><a href="#">Электронное правительство</a></li>
                    <li><a href="#">Вопросы и ответы</a></li>
                    <li><a href="#">Moodle</a></li>
                    <li><a href="#">Министерство среднего и выcшего образования</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5>Контакты</h5>
                <div class="footer-icony">
                    <div class="icony"><span class="icon icon-mapmarker"></span>Улица Галаба шох, Навои</div>
                    <a href="tel:+998792234966" class="icony"><span class="icon icon-phone"></span>+998 79 223 49 66</a>
                    <a href="mailto:info@ndki.uz" class="icony"><span class="icon icon-envelope"></span>info@ndki.uz</a>
                </div>
                <h4 class="fs-20 text-white mb-4" style="line-height: 1.5;">Навоийский государственный горный институт</h4>
                <p class="text-white m-0">© 2021 Все права защищены.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Video modal -->
<div class="modal fade modal-style-1" id="youtubeVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="icon icon-remove"></span>
            </button>
            <div class="modal-body p-0 d-flex">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/R-O6z1PaChE" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/main.js"></script> -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
