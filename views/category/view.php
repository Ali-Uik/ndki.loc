<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<!-- Main -->
<main class="main">
    <?php if (!empty($articles)):?>
    <!-- Section Subheader -->
        <?php foreach ($articles as $article):?>
<!--    <section class="section section-subheader">-->
<!--        <div class="container">-->
<!--            <div class="breadcrumbs">-->
<!--                <ul>-->
<!--                    <li><a href="#">Главная</a></li>-->
<!--                    <li><a href="#">Страница</a></li>-->
<!--                    <li>Название страницы</li>-->
<!--                </ul>-->
<!--            </div>-->

<!--        </div>-->
<!--    </section>-->

    <!-- Section Blog -->

    <section class="section">
        <div class="container">
            <div>
                <h2><?= $article->title ;?></h2>
                <p><?= $article->content ;?></p>


            </div>
        </div>
    </section>
    <?php endforeach;?>
    <?php endif;?>
</main>