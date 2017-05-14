<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_oper".
 *
 * @property int $id
 * @property string $value
 */
class LogOper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_oper';
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

    public static function getOperId($value) {
        $logOper = LogOper::findOne(['value' => $value]);
        if ($logOper) {
            return $logOper->id;
        }

        $logOper = new LogOper(['value' => $value]);
        if ($logOper->save()) {
            return $logOper->id;
        }

        return $logOper->getErrors();
    }
}
