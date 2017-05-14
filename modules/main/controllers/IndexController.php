<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 14.05.17
 * Time: 17:39
 */

namespace app\modules\main\controllers;




class IndexController extends ParentController
{
    public function actionIndex() {
        return $this->render('@app/web/src/index');
    }
}