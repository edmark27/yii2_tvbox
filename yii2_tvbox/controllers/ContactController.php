<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.09.2017
 * Time: 10:31
 */

namespace app\controllers;


use app\models\ContactForm;
use Yii;


class ContactController extends AppController
{

    public function actionContact()
    {
        $model = new ContactForm();
        $this->setMeta('myTvbox | Партнёрам');
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', compact('model'));
    }

}