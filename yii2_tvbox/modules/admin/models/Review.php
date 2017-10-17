<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "review".
 *
 * @property integer $id
 * @property string $message
 * @property string $date
 * @property integer $id_tvbox
 * @property string $name
 * @property string $email
 * @property string $image
 *
 * @property Tvbox $idTvbox
 */
class Review extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'id_tvbox', 'name', 'email'], 'required'],
            [['message'], 'string'],
            [['date'], 'safe'],
            [['id_tvbox'], 'integer'],
            [['name', 'email', 'image'], 'string', 'max' => 100],
            [['id_tvbox'], 'exist', 'skipOnError' => true, 'targetClass' => Tvbox::className(), 'targetAttribute' => ['id_tvbox' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Сообщение',
            'date' => 'Дата',
            'id_tvbox' => 'Твбокс',
            'name' => 'Имя',
            'email' => 'Email',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTvbox()
    {
        return $this->hasOne(Tvbox::className(), ['id' => 'id_tvbox']);
    }
}
