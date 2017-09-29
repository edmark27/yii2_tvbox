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
        <div class="row mt-1">
            <!--Main listing-->
            <div class="col-md-12">

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

                        <div class="col-md-12">

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
                                                <img class="img-fluid " src="img/for-whom-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Кому и зачем нужен ТВбокс?</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/smarttv-or-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Сравнение смарттв и ТВбокс.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/how-to-choose-box.jpg" alt="Card image cap">
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
                                                <img class="img-fluid" src="img/best-tv-box.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Лучший ТВбокс в 2017</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/old-tvbox.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Апгрейд старого телевизора.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/tv-operators.jpg" alt="Card image cap">
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
                                                <img class="img-fluid" src="img/interractive-tv.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Что такое интерактивное тв?</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/best-brands.jpg" alt="Card image cap">
                                                <div class="carousel-text mt-3">
                                                    <h5 class="h5">Лучшие бренды из Китая.</h5>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4 hidden-sm-down">
                                            <a href="#!" class="black-text">
                                                <img class="img-fluid" src="img/iptv-or-tvbox.jpg" alt="Card image cap">
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
                <div class="divider-new mt-5">
                    <h2 class="h2-responsive ">Комментарии к статье</h2>
                </div>

                <!-- Product Reviews -->
                <section id="reviews">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <?php foreach ($comments as $comment): ?>
                            <!--First review-->
                            <div class="media mb-5">
                                <a class="media-left waves-light">
                                    <?= Html::img("@web/img/{$comment->user->image}", ['alt' => 'Аватарка', 'class' => 'rounded-circle'])?>
                                </a>
                                <div class="media-body ml-5">
                                    <h4 class="media-heading"><?= $comment->user->name?></h4>
                                    <div class="row">
                                        <div class="col text-right"><span><?= $comment->date?></span></div>
                                    </div>
                                    <p class="mr-5"><?= $comment->message?></p>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </section>
                <!-- /.Product Reviews -->
                <section>

                    <!-- Leave a reply form -->
                    <div class="reply-form p-5 white-text">

                        <h1 class="text-center">Оставьте комментарий</h1>
                        <p class="text-center">
                            <!--Grid row-->
                        <div class="row pb-4 d-flex justify-content-center mb-4">
                            <h4 class="mt-3 mr-4"><strong>Авторизируйтесь с помощью:</strong></h4>
                            <div class="inline-ul text-center d-flex justify-content-center">
                                <a class="ic"><i class="fa fa-twitter fa-3x fa-fw"></i></a>
                                <a class="ic"><i class="fa fa-facebook fa-3x fa-fw"> </i></a>
                                <a class="ic"><i class="fa fa-vk fa-3x fa-fw"> </i></a>
                            </div>
                        </div>
                        <!--/Grid row-->
                        </p>

                        <!-- Third row -->
                        <div class="row">

                            <!-- Image column -->
                            <div class="col-sm-2 col-12">
                                <img id="rounded" class="img-fluid" src="img/Anonymus.jpg">
                            </div>
                            <!-- /.Image column -->

                            <!-- Content column -->
                            <div class="col-sm-10 col-12">
                                <div class="md-form">
                                    <textarea type="text" id="form8" class="md-textarea white-text"></textarea>
                                    <label class="white-text" for="form8">Ваше сообщение:</label>
                                </div>

                            </div>

                            <div class="col text-center">
                                <button class="btn btn-primary">Отправить</button>
                            </div>
                            <!-- /.Content column -->

                        </div>
                        <!-- /.Third row -->

                    </div>
                    <!-- /.Leave a reply form -->

                </section>
                <!-- /.Section: Leave a reply (Logged In User) -->

            </div>
            <!--/.Main listing-->

        </div>
        <!--/.Blog-->

    </div>

</main>
<!--/ Main layout -->