<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property integer $id
 * @property integer $id_shop
 * @property string $name
 * @property string $conditions
 * @property string $price
 * @property string $oldprice
 * @property string $coupon
 * @property string $date
 * @property string $link
 * @property string $image
 *
 * @property Shop $idShop
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_shop', 'name', 'conditions', 'price', 'oldprice', 'coupon', 'date', 'link', 'image'], 'required'],
            [['id_shop'], 'integer'],
            [['conditions'], 'string'],
            [['date'], 'safe'],
            [['name', 'image'], 'string', 'max' => 30],
            [['price', 'oldprice', 'coupon'], 'string', 'max' => 20],
            [['link'], 'string', 'max' => 255],
            [['id_shop'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['id_shop' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'id_shop' => 'Магазин',
            'name' => 'Название',
            'conditions' => 'Условия',
            'price' => 'Цена',
            'oldprice' => 'Старая цена',
            'coupon' => 'Купон',
            'date' => 'Дата',
            'link' => 'Ссылка',
            'image' => 'Изображение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'id_shop']);
    }
}
