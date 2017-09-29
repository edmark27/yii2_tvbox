<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName(){
        return 'user';
    }
    public function getReview(){
        return $this->hasMany(Review::className(),['id_user' => 'id']);
    }
    public function getComments(){
        return $this->hasMany(Comments::className(),['id_user' => 'id']);
    }
}