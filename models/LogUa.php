<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_ua".
 *
 * @property int $id
 */
class LogUa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_ua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    public static function getUaId($value) {
        $logUa = LogUa::findOne(['value' => $value]);
        if ($logUa) {
            return $logUa->id;
        }

        $logUa = new LogUa(['value' => $value]);
        if ($logUa->save()) {
            return $logUa->id;
        }

        return $logUa->getErrors();
    }
}
