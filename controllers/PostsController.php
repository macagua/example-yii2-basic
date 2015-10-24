<?php

namespace app\controllers;

use Yii;

class PostsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Post();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
        } else {
            return $this->render("add", ["model" => $model]);
        }
    }
}
