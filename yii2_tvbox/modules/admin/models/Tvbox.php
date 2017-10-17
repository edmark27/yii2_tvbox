<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tvbox".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_specification
 * @property string $image
 * @property string $snippet
 * @property string $description
 *
 * @property Partners[] $partners
 * @property Review[] $reviews
 * @property Slider[] $sliders
 * @property Specification $idSpecification
 */
class Tvbox extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tvbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_specification', 'image', 'snippet', 'description'], 'required'],
            [['id_specification'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 50],
            [['snippet'], 'string', 'max' => 255],
            [['id_specification'], 'exist', 'skipOnError' => true, 'targetClass' => Specification::className(), 'targetAttribute' => ['id_specification' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_specification' => 'Id Specification',
            'image' => 'Image',
            'snippet' => 'Snippet',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartners()
    {
        return $this->hasMany(Partners::className(), ['id_tvbox' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['id_tvbox' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSliders()
    {
        return $this->hasMany(Slider::className(), ['id_tvbox' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSpecification()
    {
        return $this->hasOne(Specification::className(), ['id' => 'id_specification']);
    }
}
