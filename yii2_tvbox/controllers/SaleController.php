<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.09.2017
 * Time: 10:31
 */

namespace app\controllers;


use app\models\Sale;
use yii\web\Controller;

class SaleController extends AppController
{
    public function actionSale(){
        $goods = Sale::find()
            ->joinWith('shop')
            ->all();
        $this->setMeta('myTvbox | Скидки');
        return $this->render('discount', compact('goods'));
    }

}