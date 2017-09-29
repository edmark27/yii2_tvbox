<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Partners extends ActiveRecord
{
    public static function tableName(){
        return 'partners';
    }
    public function getShop(){
        return $this->hasMany(Shop::className(),['id' => 'id_shop']);
    }

}