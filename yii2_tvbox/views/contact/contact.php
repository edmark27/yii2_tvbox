<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<main id="mainContainer">

    <!-- Contact Form -->
    <section class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center m-4">Информация для магазинов</h1>
                <div class="text-center mb-3">
                    Уважаемые представители интернет магазинов. Сайт myTVbox.ru предлагает следующие формы размещения рекламы:
                    <ul class="mt-3">
                        <li class="d-inline m-3 lead"> - баннер на главной странице;</li>
                        <li class="d-inline m-3 lead"> - ссылка в карточке товара;</li>
                        <li class="d-inline m-3 lead"> - рекламные посты о скидках.</li>
                    </ul>
                </div>
                <div class="text-center mb-5">
                    Если у вас есть вопросы или пожелания, вы всегда можете связаться снами по указанным контактам.
                </div>
            </div>
        </div>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success text-center h5 p-5">
            Спасибо, что связались с нами. Мы вам ответим, как можно скорее.
        </div>

    <?php else: ?>


        <div class="row">
            <div class="col-md-8 mb-r">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label("Имя") ?>
                    </div>
                    <div class="col-md-6">
                    <?= $form->field($model, 'email')->label("Почта") ?>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                    <?= $form->field($model, 'subject')->label("Тема") ?>
                    </div>
                </div>
                <div class="row">

                    <!-- First column -->
                    <div class="col-md-12">
                    <?= $form->field($model, 'body')->label("Сообщение") ?>
                    </div>
                </div>


                    <div class="form-group text-center">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>

            <!-- Second column -->
            <div class="col-md-4 mt-5">

                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>Минск, Беларусь</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>+ 375 29 11 22 333</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>contact@mytvbox.ru</p>
                    </li>
                </ul>

            </div>
            <!-- /.Second column -->

        </div>

    <?php endif; ?>

    </div>

    </section>
    <!-- /.Contact Form -->


</main>
