<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quest".
 *
 * @property int $id
 * @property string $title
 * @property int $img
 * @property string $description
 * @property int $price
 * @property int $likes
 */
class Quest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['img', 'price', 'likes'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'description' => 'Description',
            'price' => 'Price',
            'likes' => 'Likes',
        ];
    }
}
