<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Sale extends ActiveRecord
{
    public static function tableName(){
        return 'sale';
    }
    public function getShop(){
        return $this->hasOne(Shop::className(),['id' => 'id_shop']);
    }

}