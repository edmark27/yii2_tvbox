<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Specification extends ActiveRecord
{
    public static function tableName(){
        return 'specification';
    }
    public function getTvbox(){
        return $this->hasOne(Tvbox::className(),['id_specification' => 'id']);
    }

    public function getChipset(){
        return $this->hasOne(Chipset::className(),['id' => 'id_chipset']);
    }
}

