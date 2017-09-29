<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Chipset extends ActiveRecord
{
    public static function tableName(){
        return 'chipset';
    }
    public function getSpecification(){
        return $this->hasMany(Specification::className(),['id_chipset' => 'id']);
    }

}