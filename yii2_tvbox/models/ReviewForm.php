<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;


class ReviewForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'review';
    }

    public function attributeLabels()
    {
        return [
            'id_tvbox' => 'id',
            'name' => 'Имя',
            'email' => 'Почта',
            'message' => 'Сообщение',
            'image' => 'Фото для аватарки: ',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'message', 'id_tvbox'], 'required'],
            ['email', 'email'],
            ['image', 'trim'],

        ];
    }

    public function upload($dir, $imageObj) {
        $name = $imageObj->baseName;
        $ext = $imageObj->extension;
        $imageObj->saveAs($dir . $name . '.' . $ext);
        return true;
    }
}
