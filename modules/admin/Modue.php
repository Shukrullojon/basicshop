<?php

namespace app\modules\admin;
use Yii;

class Modue extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();
        Yii::$app->viewPath="@app/modules/admin/views";

    }
}
