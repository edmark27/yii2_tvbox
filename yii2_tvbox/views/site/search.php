<?php

/**
 * @var $this yii\web\View
 * @var array $result;
 */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<main>
    <!--Main layout-->
    <div class="container">

        <!--Page heading-->
        <div class="row wow fadeIn" data-wow-delay="0.2s">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2 class="h2-responsive">Хотите сделать старый телевизор умным?</h2>
                    <h3 class="title font-bold">Тогда вам нужен твбокс.</h3>
                    <br>
                    <p>
                        <i class="fa fa-gamepad fa-5x fa-fw" aria-hidden="true"></i>
                        <i class="fa fa-youtube fa-5x fa-fw" aria-hidden="true"></i>
                        <i class="fa fa-film fa-5x fa-fw" aria-hidden="true"></i>
                        <i class="fa fa-music  fa-5x fa-fw" aria-hidden="true"></i>
                        <i class="fa fa-internet-explorer  fa-5x fa-fw" aria-hidden="true"></i>
                    </p>
                    <hr>
                    <div class="col-md-12 mt-5">
                        <h2 class="h2-responsive">Результаты поиска по запросу "<?=$search?>" :</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Page heading-->

        <!--First row-->
        <div class="row mt-5 wow">
            <?php foreach ($query as $q): ?>
            <!--First column-->
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

                <!--Card Dark 1-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <?= Html::img("@web/img/{$q->image}", ['alt' => $q->name, 'class' => 'img-fluid']) ?>
                        <a href="<?=Url::to(['site/box', 'id' => $q->id]) ?>">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title"><?= $q->name?></h4>
                        <hr>
                        <!--Text-->
                        <p class="card-text"><?= $q->snippet?></p>
                        <div class="row">
                            <div class="col-7">
                                <div><i class="fa fa-microchip fa-1x fa-fw" aria-hidden="true"></i> <?= $q->chipset->cpu?></div>
                                <div><i class="fa fa-database fa-1x fa-fw" aria-hidden="true"></i> <?= $q->specification->ram?> RAM</div>
                            </div>
                            <div class="col-5">
                                <div><i class="fa fa-hdd-o fa-1x fa-fw" aria-hidden="true"></i> <?= $q->specification->rom?> ROM</div>
                                <div><i class="fa fa-android fa-1x fa-fw" aria-hidden="true"></i> <?= $q->specification->android?> vers.</div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="#" class="col flex-row-reverse">
                                <div class="mbottom waves-effect waves-light p-2">Сравнить <i class="fa fa-plus"></i></div>
                            </a>
                            <a href="<?=Url::to(['site/box', 'id' => $q->id]) ?>" class="col d-flex flex-row-reverse">
                                <div class="mbottom waves-effect waves-light p-2">Подробнее <i class="fa fa-chevron-right"></i></div>
                            </a>
                        </div>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card Dark-->

            </div>
            <!--/.First column-->
            <?php endforeach;?>

        </div>
        <!--/.First row-->



    </div>
    <!--/.Main layout-->
</main>