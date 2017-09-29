<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName(){
        return 'article';
    }
    public function getComments(){
        return $this->hasMany(Comments::className(),['id_article' => 'id']);
    }
    public function getUser(){
        return $this->hasMany(User::className(), ['id' => 'id_user'])->viaTable('comments', ['id_article' => 'id']);
    }
}