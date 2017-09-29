<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Shop extends ActiveRecord
{
    public static function tableName(){
        return 'shop';
    }
    public function getPartners(){
        return $this->hasMany(Partners::className(),['id_shop' => 'id']);
    }
    public function getSale(){
        return $this->hasMany(Sale::className(),['id_shop' => 'id']);
    }
}