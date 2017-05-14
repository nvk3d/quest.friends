<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property int $id
 * @property string $ip
 * @property int $page
 * @property int $oper
 * @property int $ua
 * @property string $date_created
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page', 'oper', 'ua'], 'integer'],
            [['date_created'], 'safe'],
            [['ip'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'page' => 'Page',
            'oper' => 'Oper',
            'ua' => 'Ua',
            'date_created' => 'Date Created',
        ];
    }

    public static function add($action) {
        $operId = LogOper::getOperId($action->id);
        $uaId = LogUa::getUaId(Yii::$app->request->userAgent);
        $pageId = LogUrl::getPageId(Yii::$app->request->url);
        $log = new Log([
            'ip' => Yii::$app->request->userIP,
            'page' => $pageId,
            'oper' => $operId,
            'ua' => $uaId,
            'date_created' => date("Y-m-d H:i:s"),
        ]);
        if ($log->save()) {
            return $log;
        }
        return $log->getErrors();
    }
}
