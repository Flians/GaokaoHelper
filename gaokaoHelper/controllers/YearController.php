<?php

namespace app\controllers;

use Yii;
use app\models\Config;

class YearController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $model = Config::findOne(["id"=>"CURRENT_YEAR"]);
        if($model == null){
            $model = new Config();
            $model->id = "CURRENT_YEAR";
        }
        $model->load(Yii::$app->request->post());
        $model->save();
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
