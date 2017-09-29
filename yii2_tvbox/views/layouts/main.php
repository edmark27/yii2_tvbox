<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark  fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= Url::home()?>">myTVbox</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::home()?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-change" href="<?=Url::to(['site/add']) ?>">Сравнение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/sale']) ?>">Скидки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/seoarticles']) ?>">Статьи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/contact']) ?>">Партнёрам</a>
                    </li>
                </ul>
                <form class="form-inline" method="get" action="<?= Url::to(['site/search'])?>">
                    <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search" name="search">
                </form>
            </div>
        </div>
    </nav>
</header>
<?= $content; ?>
<footer class="page-footer center-on-small-only">
    <!--Footer links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">О сайте myTVbox</h5>
                <p>Сайт myTVbox.ru не является интернет магазином и не занимаеся продажей телевизионных приставок.</p>
                <p>Все ссылки на сторонние интернет магазины приводятся в ознакомительных ценах.</p>
            </div>
            <!--/.First column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">Наши партнеры</h5>
                <ul>
                    <li>
                        <a href="#!">Gearbest.com</a>
                    </li>
                    <li>
                        <a href="#!">Banggood.com</a>
                    </li>
                    <li>
                        <a href="#!">Tomtop.com</a>
                    </li>
                    <li>
                        <a href="#!">Zapals.com</a>
                    </li>
                    <li>
                        <a href="#!">Aliexpress.com</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">Популярные статьи</h5>
                <ul>
                    <li>
                        <a href="#!">- Зачем нужен твбокс</a>
                    </li>
                    <li>
                        <a href="#!">- Сравнение смарттв и твбокс</a>
                    </li>
                    <li>
                        <a href="#!">- Как выбрать твбокс</a>
                    </li>
                    <li>
                        <a href="#!">- Лучший твбокс 2017 года</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title font-bold mt-3 mb-4">Мы в соцсетях</h5>
                <ul>
                    <li>
                        <a href="#!"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                    </li>
                    <li>
                        <a href="#!"><i class="fa fa-vk" aria-hidden="true"></i> VKontakte</a>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer links-->
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="containter-fluid">
            © 2017 Copyright: <a href="#!"> myTVbox.ru </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>