<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_page".
 *
 * @property int $id
 * @property string $value
 */
class LogUrl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
        ];
    }

    public static function getPageId($value) {
        $logPage = LogUrl::findOne(['value' => $value]);
        if ($logPage) {
            return $logPage->id;
        }

        $logPage = new LogUrl(['value' => $value]);
        if ($logPage->save()) {
            return $logPage->id;
        }

        return $logPage->getErrors();
    }
}
