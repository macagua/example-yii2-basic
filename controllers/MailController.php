<?php

namespace app\controllers;

use \Yii;
use \yii\web\Controller;

/**
 * Mail Controller
 */
class MailController extends Controller
{
    public function actionSend()
    {
        $params = ["content" => "Testing of send a email from a Yii2 webapp!", 'logo' =>\Yii::getAlias('@app/web/imgs/yii2framework.jpg')];
        Yii::$app->mailer->compose([
            "html" => "@app/views/mails/main"
        ], $params)
        ->attachContent("Archivo adjunto al vuelo", ['fileName' => 'notas.txt', 'contentType' => 'text/plain'])
        ->attach('imgs/yii2framework.jpg')
        ->setFrom('FROM_MAIL_ACCOUNT@gmail.com')
        ->setTo('TO_MAIL_ACCOUNT@gmail.com')
        ->setSubject('Mensaje subject')
        ->send();
    }
}
