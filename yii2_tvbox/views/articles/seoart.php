<?php

/**
 * @var $this yii\web\View
 * @var array $result;
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<main>

    <div class="container articles-container">

        <!--Blog-->
                <!--Section: Post-->
                <section class="section section-blog-fw">

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <!--Featured image-->

                            <div class="card card-cascade wider reverse">
                                <div class="view p-5">
                                    <?= Html::img("@web/img/{$seo->image}", ['alt' => $seo->name, 'class' => 'img-fluid mx-auto'])?>

                                </div>

                                <!--Post data-->
                                <div class="card-body text-center h6-responsive mb-5">
                                    <h2 class="h2"><?= $seo->name?></h2>
                                    <p>Автор Иван Обзоров, опубликовано <?= $seo->date?></p>

                                </div>
                                <!--Post data-->
                            </div>

                            <!--Excerpt-->
                            <div class="mt-5 lead">
                                <?= $seo->message?>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                </section>
                <!--/.Section: Post-->

                <!--Related posts-->
                <section class="related-posts-carousel mt-5" >

                    <div class="row">

                        <div class="col-md-12 mb-5">

                            <h2 class="text-center mb-5">Еще интересные статьи:</h2>

                            <!--Carousel Wrapper-->
                            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators h1">
                                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->

                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">

                                        <div class="col-md-4 ">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid " src="../img/for-whom-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Кому и зачем нужен ТВбокс?</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/smarttv-or-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Сравнение смарттв и ТВбокс.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/how-to-choose-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Как правильно выбрать ТВбокс</h5>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <!--/.First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/best-tv-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Лучший ТВбокс в 2017</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/old-tvbox.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Апгрейд старого телевизора.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/tv-operators.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Зачем оператороам ТВбоксы?</h5>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <!--/.Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/interractive-tv.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Что такое интерактивное тв?</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/best-brands.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Лучшие бренды из Китая.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="../img/iptv-or-tvbox.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">IPTV или ТВбокс?</h5>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <!--/.Third slide-->
                                </div>
                                <!--/.Slides-->

                            </div>
                            <!--/.Carousel Wrapper-->

                        </div>

                    </div>

                </section>
                <!--/.Related posts-->

            </div>
            <!--/.Main listing-->

</main>
<!--/ Main layout -->