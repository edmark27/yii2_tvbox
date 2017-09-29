<?php

/* @var $this \yii\web\View */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;


?>
<main id="mainContainer">

    <!-- Main Container -->
    <div class="container">

        <section class="section">

            <!-- Shopping Cart table -->
            <div class="table-responsive product-table table-hover">

                <table class="table mb-5">

                    <!-- Table head -->
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Модель</th>
                        <th>Процессор</th>
                        <th>Графика</th>
                        <th>Память</th>
                        <th>Накопитель</th>
                        <th>Интерфейсы</th>
                        <th>Кодек</th>
                        <th>Android</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <!--/.Table head -->
                    <!-- Table body -->
                    <tbody>
                    <?php foreach($session['specs'] as $id => $spec): ?>
                        <?php if($id>0):?>
                        <!-- First row -->
                    <tr>
                        <th scope="row">
                            <?= Html::img("@web/img/{$spec['image']}", ['alt' => $spec->name, 'class' => 'img-fluid z-depth-0']) ?>
                        </th>
                        <td>
                            <h5><strong><?= $spec['name']?></strong></h5>

                        </td>
                        <td><?= $spec['core']?> <?= $spec['cpu']?></td>
                        <td><?= $spec['gpu']?></td>
                        <td><?= $spec['rom']?></td>
                        <td><?= $spec['ram']?></td>
                        <td><?= $spec['wifi']?>, <?= $spec['bluetooth']?></td>
                        <td><?= $spec['codec']?></td>
                        <td><?= $spec['android']?></td>
                        <td>
                            <a href="<?=Url::to(['site/del', 'id' => $id]) ?>" class="btn btn-sm btn-primary text-danger del-item" title="Удалить">X
                            </a>
                        </td>
                    </tr>
                            <?php endif;?>
                    <!-- /.First row -->
                    <?php endforeach;?>
                    </tbody>
                </table>

<!--                <div class="row">-->
<!--                    <div class="col-12 text-center">-->
<!--                <button type="button" class="btn btn-primary"><i class="fa fa-plus left"></i> Добавить модель </button>-->
<!--                    </div>-->
<!--                </div>-->
                </div>
            <!-- /.Shopping Cart table -->
            <div class="row mb-5">
                <div class ="col text-center">
            <?php $items = ArrayHelper::map($it,'id','name');?>
            <?php $param = ['class' => 'form-control-lg'];?>
                    <?php if(Url::to() == '/tvbox/web/site/add?id=' . Yii::$app->request->get('id') ) $link = ''; else $link = 'site/add'?>
            <form method="GET" action="<?=$link;?>">
           <?= Html::dropDownList('id', 'null', $items, $param);?>
            <?= Html::submitButton('Добавить ТВбокс', ['class' => 'btn btn-primary mb-3']);?>
            </form>
                </div>
            </div>
        </section>
    </div>
    <!-- /.Main Container -->

</main>