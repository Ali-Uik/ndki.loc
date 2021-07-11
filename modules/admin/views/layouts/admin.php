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
    <title>Админка | <?= Html::encode($this->title="Навоийский государственный горный институт") ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- Header -->
<header class="header">
    <div class="header__middle">
        <div class="container">
            <div class="header__middle-inner">
                <div class="logo">
                    <a href="index.html">
                        <img src="/images/assets/logo.svg" alt="Навоийский государственный горный институт">
                        <span>Навоийский государственный <br> горный институт</span>
                    </a>
                </div>

            </div>
        </div>
    </div>

</header>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
