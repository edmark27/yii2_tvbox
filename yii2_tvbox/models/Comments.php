<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.09.2017
 * Time: 21:32
 */

namespace app\models;
use yii\db\ActiveRecord;

class Comments extends ActiveRecord
{
    public static function tableName(){
        return 'comments';
    }
    public function getArticle(){
        return $this->hasOne(Article::className(),['id' => 'id_article']);
    }
    public function getUser(){
        return $this->hasOne(User::className(),['id' => 'id_user']);
    }
}