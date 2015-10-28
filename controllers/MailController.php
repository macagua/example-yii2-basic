<?php

namespace app\controllers;

use \Yii;
use \yii\web\Controller;

/**
 * Mail Controller
 */
class MailController extends Controller
{
    public $to = 'TO_MAIL_ACCOUNT@example.com';
    public $from = 'no-reply@example.com';

    public function actionSend()
    {
        $params = [
            "content" => "Testing of send a email from a Yii2 basic webapp!",
            'logo' =>\Yii::getAlias('@app/web/imgs/yii2framework.jpg')
        ];
        $aMessage = Yii::$app->mailer->compose([
            "html" => "@app/views/mails/main"
        ], $params)
        ->attachContent("Archivo adjunto al vuelo", ['fileName' => 'notas.txt', 'contentType' => 'text/plain'])
        ->attach('imgs/yii2framework.jpg')
        ->setFrom($this->from)
        ->setTo($this->to)
        ->setSubject('Mensaje subject from ' . \Yii::$app->name);
        $aSendMsg = $aMessage->send();
        if (!$aSendMsg) {
            \Yii::error("Error send email to [MailController::actionSend()] " . $this->to);
        }
        return $aSendMsg;
    }
}
