<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);
?>


<main>
    <div class="container articles-container">

        <div class="divider-new divider-big">
            <h2>Скидки и распродажи</h2>
        </div>

        <!--Section: Blog v.1-->
        <section class="section pb-3 text-center text-lg-left">
            <?php $i=1; foreach ($goods as $good): ?>
                <?php if($i % 2 != 0): ?>
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-5 pb-3">
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight z-depth-1">
                        <?= Html::img("@web/img/{$good->image}", ['alt' => $good->name, 'class' => 'img-fluid']) ?>
                        <a href="<?=$good->link?>">
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-7">
                    <!--Excerpt-->
                    <div href="" class="green-text"><h6 class="font-bold pb-1"><i class="fa fa-shopping-basket"></i> <?=$good->shop->name?></h6></div>
                    <h4 class="mb-4"><strong><?=$good->name?></strong></h4>
                    <p><?=$good->conditions?></p>
                    <div class="row">
                        <div class="col text-left"><strong>Цена со скидкой: <?=$good->price?> USD</strong></div>
                        <div class="col text-right">Стандартная цена: <?=$good->oldprice?> USD </div>
                    </div>
                    <p class="badge btn-info">Код скидки: <?=$good->coupon?></p>
                    <div class="row">
                        <div class="col text-left"><p>Опубликовано: <?=$good->date?></p></div>
                        <div class="col text-right"><a href="<?=$good->link?>" class="btn btn-success mb-3">Перейти в магазин</a></div>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr class="mb-5 mt-5 pb-3">

                <?php else:?>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-7">
                        <!--Excerpt-->
                        <div href="" class="green-text"><h6 class="font-bold pb-1"><i class="fa fa-shopping-basket"></i> <?=$good->shop->name?></h6></div>
                        <h4 class="mb-4"><strong><?=$good->name?></strong></h4>
                        <p><?=$good->conditions?></p>
                        <div class="row">
                            <div class="col text-left"><strong>Цена со скидкой: <?=$good->price?> USD</strong></div>
                            <div class="col text-right">Стандартная цена: <?=$good->oldprice?> USD </div>
                        </div>
                        <p class="badge btn-info">Код скидки: <?=$good->coupon?></p>
                        <div class="row">
                            <div class="col text-left"><p>Опубликовано: <?=$good->date?></p></div>
                            <div class="col text-right"><a href="<?=$good->link?>" class="btn btn-success mb-3">Перейти в магазин</a></div>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-5 pb-3">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight z-depth-1">
                            <?= Html::img("@web/img/{$good->image}", ['alt' => $good->name, 'class' => 'img-fluid']) ?>
                            <a href="<?=$good->link?>">
                                <div class="mask"></div>
                            </a>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <hr class="mb-5 mt-5 pb-3">
                <?php endif?>
                <?php $i++?>
            <?php endforeach;?>

        </section>
        <!--Section: Blog v.1-->


    </div>

</main>
<!--/ Main layout -->