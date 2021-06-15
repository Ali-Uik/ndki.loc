<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- Main -->
<main class="main">

    <!-- Section Category Menu & Slider -->
    <section class="section bg-light pt-3 pt-sm-6">
        <div class="container">
            <div class="row row-menu-slider">
                <div class="col order-lg-2 col-right">
                    <div class="slider-main slider-style-1 box-shadow-1">
                        <div class="owl-carousel" id="slider_main">
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="slider-main__item" style="background-image: url('images/slider/slider-1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="position-relative w-100">
                                        <div class="slider-main__item-inner">
                                            <h2>Приёмная <br> Комиссия - 2021</h2>
                                            <a href="#" class="btn btn-warning btn-lg">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container">
                            <div class="owl-nav" id="slider_main_nav"></div>
                        </div>
                    </div>
                </div>
                <div class="col order-lg-1 col-left">
                    <div class="category-menu box-shadow-1">
                        <ul>
                            <li><a href="#"><img src="/images/category-menu/1.svg" alt=""><span>Институт</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/2.svg" alt=""><span>Образование</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/3.svg" alt=""><span>Наука</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/4.svg" alt=""><span>Международное сотрудничество</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/5.svg" alt=""><span>Институт повышения <br> квалификации и переподготовки</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/6.svg" alt=""><span>Студенческая жизнь</span></a></li>
                            <li><a href="#"><img src="/images/category-menu/7.svg" alt=""><span>Воспитательная работа</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="section bg-light pt-2 pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title">
                        <h2>Новости</h2>
                        <div class="title__border right"></div>
                        <a href="#" class="btn btn-primary btn-sm text-nowrap px-7">Все новости</a>
                    </div>
    <?if(!empty($articles)): ?>
                    <div class="row row-min">
        <?php foreach ($articles as $article):?>
                        <div class="col-sm-6 col-row-min">
                            <div class="news">
                                <a href="#" class="news__image">
                                    <img src="<?= $article->image?>" alt="">
                                </a>
                                <div class="news__caption">
                                    <a href="#"><?= $article->description?></a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span><?= $article->adding_date?>
                                            </div>
                                        </div>
                                        <a href="#">Подробнее <span class="icon icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
        <?php endforeach;?>
                    </div>
    <?php endif;?>
                </div>
                <div class="col-lg-5">
                    <div class="news-list box-shadow-1 bg-white p-4">
                        <div class="title">
                            <h3>Анонсы событий</h3>
                            <a href="#" class="btn btn-primary btn-sm px-7">Все</a>
                        </div>
                        <div class="news-list-items">
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">XIX республиканская выставка научно-методической литературы, педагогического выставка научно методической литературы</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>21 - 28 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Министерство информации приглашает принять участие в открытом дистанционном</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>19 - 30 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Повышение квалификации по программе «Естественнонаучное знание в системе</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>10 - 24 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Республиканская акция МЧС «За безопасность вместе» стартовала сегодня</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>12 - 18 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="news news--list">
                                <div class="news__caption">
                                    <a href="#">Министерство информации приглашает принять участие в открытом дистанционном</a>
                                    <div class="news__caption-bottom">
                                        <div class="news__info">
                                            <div class="news__info-item">
                                                <span class="icon icon-calendar"></span>19 - 30 апреля
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Video Gallery -->
    <section class="section section-videos">
        <div class="container">
            <div class="title title--center title--border">
                <div class="title__border left"></div>
                <h2>Видеогалерея</h2>
                <div class="title__border right"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/1.jpg" alt="">
                        <div class="video__caption">
                            <p>Навоий давлат кончилик институти устоз ва мураббийларни байрам билан табриклайди</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/2.jpg" alt="">
                        <div class="video__caption">
                            <p>Навоий давлат кончилик институти Нукус филиали директори Ф.Худойбердиевнинг интервьюси</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/3.jpg" alt="">
                        <div class="video__caption">
                            <p>Давлат тест марказининг расмий веб сайти орқали рўйхатдан ўтиш бўйича батафсил видеоқўлланма</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="video" data-toggle="modal" data-target="#youtubeVideo">
                        <i class="icon icon-play"></i>
                        <img src="/images/video-images/4.jpg" alt="">
                        <div class="video__caption">
                            <p>Янги Навоий Давлат Кончилик Институти</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Recommendations & Faculties -->
    <section class="section bg-light py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="title title--left title--border">
                        <h2>Рекомендации</h2>
                    </div>
                    <div class="row row-min">
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/1.svg" alt="">
                                <div><span>Приём 2021</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/2.svg" alt="">
                                <div><span>Прямое обращение к ректору НГГИ</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/3.svg" alt="">
                                <div><span>Наука 2020</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/4.svg" alt="">
                                <div><span>Интерактивные услуги</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/5.svg" alt="">
                                <div><span>Онлайн библиотека</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/6.svg" alt="">
                                <div><span>Указы</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/7.svg" alt="">
                                <div><span>Моя идея</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/8.svg" alt="">
                                <div><span>Виртуальная приемная</span></div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-row-min">
                            <a href="#" class="recommendation">
                                <img src="/images/recommendations/9.svg" alt="">
                                <div><span>Scopus</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="faculty-menu box-shadow-1 bg-white p-4">
                        <div class="title">
                            <h3>Кафедры</h3>
                        </div>
                        <ul>
                            <li><a href="#">Технология машиностроение</a></li>
                            <li><a href="#">Общая физика</a></li>
                            <li><a href="#">Автоматизация и управление</a></li>
                            <li><a href="#">Электро-энергетика</a></li>
                            <li><a href="#">Горное электро-механика</a></li>
                            <li><a href="#">Горное дела</a></li>
                            <li><a href="#">Безопасность жизнедеятельности</a></li>
                            <li><a href="#">Узбекский и иностранные языки</a></li>
                            <li><a href="#">Металлургия</a></li>
                            <li><a href="#">Химия технология</a></li>
                            <li><a href="#">Социальные и гуманитарные науки</a></li>
                            <li><a href="#">Экономика и менеджмент</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info in Numbers -->
    <section class="section section-info-numbers">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>3279</strong>
                        <span>Студентов</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>83</strong>
                        <span>Магистров</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>704</strong>
                        <span>Выпускников</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="info-number">
                        <strong>91</strong>
                        <span>Профессоров, кандидатов наук</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
