<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Slider extends ActiveRecord
{
    public static function tableName(){
        return 'slider';
    }
    public function getTvbox(){
        return $this->hasOne(Tvbox::className(),['id' => 'id_tvbox']);
    }

}