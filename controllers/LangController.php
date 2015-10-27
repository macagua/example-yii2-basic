<?php

namespace app\controllers;

use \Yii;
use \yii\web\Controller;

/**
 * Language Controller
 */
class LangController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionChangeLang($lang)
    {
        $session = \Yii::$app->session;
        $session->set('lang', $lang);
        \Yii::$app->language = \Yii::$app->session['lang'];
        return $this->render('index');
    }
}
