<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends ParentController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
