<?php

/**
 * @var $this yii\web\View
 * @var array $result;
 */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


?>

<main id="mainContainer">
    <!-- Main Container -->
    <div class="container">
        <section id="productDetails">
            <div class="row">
                <div class="col-lg-5">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <?= Html::img("@web/img/{$media->slider[0]->image}", ['alt' => $media->name, 'class' => 'img-fluid']) ?>

                            </div>
                            <div class="carousel-item">
                                <?= Html::img("@web/img/{$media->slider[1]->image}", ['alt' => $media->name, 'class' => 'img-fluid']) ?>
                            </div>
                            <div class="carousel-item">
                                <?= Html::img("@web/img/{$media->slider[2]->image}", ['alt' => $media->name, 'class' => 'img-fluid']) ?>
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Thumbnails-->
                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Назад</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Вперёд</span>
                        </a>
                        <!--/.Thumbnails-->

                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-lg-7">
                    <h2 class="h2-responsive center-on-small-only product-name"><strong><?=$media->name?></strong></h2>

                    <!--Accordion wrapper-->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h5 class="mb-0">
                                        Описание <i class="fa fa-angle-down"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p><?=$media->description?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0">
                                        Технические характеристики <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>Процессор</td>
                                                <td><?=$media->chipset->core?> <?=$media->chipset->cpu?></td>
                                            </tr>
                                            <tr>
                                                <td>Графический процессор</td>
                                                <td><?=$media->chipset->gpu?></td>
                                            </tr>
                                            <tr>
                                                <td>Оперативная память</td>
                                                <td><?=$media->specification->ram?></td>
                                            </tr>
                                            <tr>
                                                <td>Накопитель</td>
                                                <td><?=$media->specification->rom?></td>
                                            </tr>
                                            <tr>
                                                <td>Версия OS Android</td>
                                                <td><?=$media->specification->android?></td>
                                            </tr>
                                            <tr>
                                                <td>Wi-Fi</td>
                                                <td><?=$media->specification->wifi?></td>
                                            </tr>
                                            <tr>
                                                <td>Bluetooth</td>
                                                <td><?=$media->specification->bluetooth?></td>
                                            </tr>
                                            <tr>
                                                <td>Разъёмы</td>
                                                <td><?=$media->specification->socket?></td>
                                            </tr>
                                            <tr>
                                                <td>Доступные кодеки</td>
                                                <td><?=$media->chipset->codec?></td>
                                            </tr>
                                            <tr>
                                                <td>Воспроизводимые форматы видео</td>
                                                <td><?=$media->chipset->video?></td>
                                            </tr>
                                            <tr>
                                                <td>Воспроизводимые форматы аудио</td>
                                                <td><?=$media->chipset->audio?></td>
                                            </tr>
                                            <tr>
                                                <td>Воспроизводимые форматы фото</td>
                                                <td><?=$media->chipset->photo?></td>
                                            </tr>
                                            <tr>
                                                <td>Размеры</td>
                                                <td><?=$media->specification->dimension?></td>
                                            </tr>
                                            <tr>
                                                <td>Масса</td>
                                                <td><?=$media->specification->weight?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h5 class="mb-0">
                                        Где купить <i class="fa fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <div class="row">
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[0]->name?> - <span class="text-primary h6"><?=$media->partners[0]->price?> USD</span></button>
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[3]->name?> - <span class="text-primary h6"><?=$media->partners[3]->price?> USD</span></button>
                                </div>
                                    <div class="row">
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[1]->name?> - <span class="text-primary h6"><?=$media->partners[1]->price?> USD</span></button>
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[4]->name?> - <span class="text-primary h6"><?=$media->partners[4]->price?> USD</span></button>
                                    </div>
                                    <div class="row">
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[2]->name?> - <span class="text-primary h6"><?=$media->partners[2]->price?> USD</span></button>
                                        <button type="button" class="col btn btn-outline-default"><?=$media->shop[5]->name?> - <span class="text-primary h6"><?=$media->partners[5]->price?> USD</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Accordion wrapper-->
                </div>
            </div>
        </section>

        <div class="divider-new">
            <h2 class="h2-responsive">Отзывы пользователей</h2>
        </div>

        <!-- Product Reviews -->
        <section id="reviews">
            <div class="row mb-5">
                <div class="col-md-12">

                   <?php foreach ($revs as $rev): ?>
                        <!--First review-->
                        <div class="media mb-3">
                            <a class="media-left waves-light">
                                <img class="rounded-circle" src="img/<?=$rev->image?>" alt="аватарка">
                            </a>
                            <div class="media-body m-3">
                                <h4 class="media-heading"><?=$rev->name?></h4>
                                <div class="row">
                                    <div class="col text-right"><span><?=$rev->date?></span></div>
                                </div>
                                <p><?=$rev->message?></p>
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

                <h1 class="text-center mb-5">Оставьте отзыв</h1>

                <!-- Third row -->
                <div class="row">

                    <!-- Image column -->
                    <div class="col-sm-2 col-12">
                        <img id="rounded" class="img-fluid" src="img/Anonymus.jpg">
                    </div>
                    <!-- /.Image column -->
                    <?php if (Yii::$app->session->hasFlash('reviewFormSubmitted')): ?>

                        <div class="alert alert-success text-center h5 p-5">
                            Спасибо за оставленный отзыв. Ваше мнение важно.
                        </div>

                    <?php else: ?>
                    <!-- Content column -->
                    <div class="col-sm-10 col-12">
<!--                       <div class="md-form">-->
<!--                            <textarea type="text" id="form8" class="md-textarea white-text"></textarea>-->
<!--                            <label class="white-text" for="form8">Ваше сообщение:</label>-->
<!--                        </div>-->
<!--                        <div class="col text-center">-->
<!--                            <button class="btn btn-primary">Отправить</button>-->
<!--                        </div>-->
                        <?php $form = ActiveForm::begin(['id' => 'review-form']); ?>
                        <div class="row">

                            <!-- First column -->
                            <div class="col-md-6">
                                <?= $form->field($model, 'name') ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'email') ?>
                            </div>
                        </div>
                        <div class="row">
                            <!-- First column -->
                            <div class="col-12">
                                <?= $form->field($model, 'message') ?>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <?= $form->field($model, 'image')->fileInput(['class' => 'ml-4']) ?>
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'review-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>

                    <?php endif; ?>
                    <!-- /.Content column -->

                </div>
                <!-- /.Third row -->

            </div>
            <!-- /.Leave a reply form -->

        </section>
        <!-- /.Section: Leave a reply (Logged In User) -->

        <div class="divider-new">
            <h2 class="h2-responsive">Популярные ТВбоксы</h2>
        </div>

        <!--Section: Products-->
        <section id="products">

            <p class="section-description text-center">*Условная популярность нижепредставленных твбоксов определена с помощью открытой статистки, размещенной на сайтах магазинов партнеров.</p>

            <!--First row-->
            <div class="row mt-5 wow">
                <!--First column-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                    <h4 class="card-title text-center">Более 40 тыс продаж на Алиэкспресс</h4>
                    <!--Card Dark 1-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <?= Html::img("@web/img/beelink-gt1.jpg", ['alt' => 'beelink gt1', 'class' => 'img-fluid']) ?>
                             <a href="<?=Url::to(['site/box', 'id' => 7]) ?>">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Beelink GT1</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Недорогой и мощный твбокс для повседневных задач.</p>
                            <div class="row">
                                <div class="col">
                                    <div><i class="fa fa-microchip fa-1x fa-fw" aria-hidden="true"></i> Amlogic S912</div>
                                    <div><i class="fa fa-database fa-1x fa-fw" aria-hidden="true"></i> 2GB RAM</div>
                                </div>
                                <div class="col">
                                    <div><i class="fa fa-hdd-o fa-1x fa-fw" aria-hidden="true"></i> 16/32GB ROM</div>
                                    <div><i class="fa fa-android fa-1x fa-fw" aria-hidden="true"></i> 6.0</div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="col flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Сравнить <i class="fa fa-plus"></i></div>
                                </a>
                                <a href="<?=Url::to(['site/box', 'id' => 7]) ?>" class="col d-flex flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Подробнее <i class="fa fa-chevron-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Dark-->

                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <h4 class="card-title text-center">Более 65 тыс продаж на Алиэкспресс</h4>
                    <!--Card Dark 2-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <?= Html::img("@web/img/mi-box-3-pro.jpg", ['alt' => 'mi box 3 pro', 'class' => 'img-fluid']) ?>
                            <a href="<?=Url::to(['site/box', 'id' => 6]) ?>">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Xiaomi Mi Box 3 Pro</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Мощный твбокс для тех, кто не приемлет компромисы.</p>
                            <div class="row">
                                <div class="col">
                                    <div><i class="fa fa-microchip fa-1x fa-fw" aria-hidden="true"></i> MT8693</div>
                                    <div><i class="fa fa-database fa-1x fa-fw" aria-hidden="true"></i> 2GB RAM</div>
                                </div>
                                <div class="col">
                                    <div><i class="fa fa-hdd-o fa-1x fa-fw" aria-hidden="true"></i> 8GB ROM</div>
                                    <div><i class="fa fa-android fa-1x fa-fw" aria-hidden="true"></i> 5.1</div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="col flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Сравнить <i class="fa fa-plus"></i></div>
                                </a>
                                <a href="<?=Url::to(['site/box', 'id' => 6]) ?>" class="col d-flex flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Подробнее <i class="fa fa-chevron-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Dark-->

                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                    <h4 class="card-title text-center">Более 30 тыс продаж на Алиэкспресс</h4>
                    <!--Card Dark 3-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <?= Html::img("@web/img/nexbox-a95x.jpg", ['alt' => 'nexbox a95x', 'class' => 'img-fluid']) ?>
                            <a href="<?=Url::to(['site/box', 'id' => 5]) ?>">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Nexbox A95X</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Один из самых популярных твбоксов на процессоре S905.</p>
                            <div class="row">
                                <div class="col">
                                    <div><i class="fa fa-microchip fa-1x fa-fw" aria-hidden="true"></i> Amlogic S905X</div>
                                    <div><i class="fa fa-database fa-1x fa-fw" aria-hidden="true"></i> 1/2GB RAM</div>
                                </div>
                                <div class="col">
                                    <div><i class="fa fa-hdd-o fa-1x fa-fw" aria-hidden="true"></i> 8/16GB ROM</div>
                                    <div><i class="fa fa-android fa-1x fa-fw" aria-hidden="true"></i> 6.0</div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="col flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Сравнить <i class="fa fa-plus"></i></div>
                                </a>
                                <a href="<?=Url::to(['site/box', 'id' => 5]) ?>" class="col d-flex flex-row-reverse">
                                    <div class="mbottom waves-effect waves-light p-2">Подробнее <i class="fa fa-chevron-right"></i></div>
                                </a>
                            </div>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card Dark-->

                </div>
                <!--/.Third column-->
            </div>
            <!--/.First row-->

        </section>
        <!--Section: Products v.5-->
    </div>
    <!-- /.Main Container -->
</main>
