<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error container mt-5">
    <div class="row wow fadeIn" data-wow-delay="0.2s">
        <div class="col-md-12">
            <div class="jumbotron">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Эта ошибка произошла во время обработки запроса сервером.
    </p>

            </div>
        </div>
    </div>
</div>
