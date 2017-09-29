<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Tvbox extends ActiveRecord
{
    public static function tableName(){
        return 'tvbox';
    }
    public function getSpecification(){
        return $this->hasOne(Specification::className(),['id' => 'id_specification']);
    }
    public function getChipset(){
        return $this->hasOne(Chipset::className(), ['id' => 'id_chipset'])->viaTable('specification', ['id' => 'id_specification']);
    }
    public function getPartners(){
        return $this->hasMany(Partners::className(),['id_tvbox' => 'id']);
    }
    public function getShop(){
        return $this->hasMany(Shop::className(), ['id' => 'id_shop'])->viaTable('partners', ['id_tvbox' => 'id']);
    }
    public function getSlider(){
        return $this->hasMany(Slider::className(),['id_tvbox' => 'id']);
    }
    public function getReview(){
        return $this->hasMany(Review::className(),['id_tvbox' => 'id']);
    }
    public function getUser(){
        return $this->hasMany(User::className(), ['id' => 'id_user'])->viaTable('review', ['id_tvbox' => 'id']);
    }
}
