<?php

namespace app\controllers;

class PostsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //echo 1;
        $posts = \app\models\Post::find()->all();
        foreach($posts as $post)
        {
            //print_r($post);
            echo $post->id . ", " . $post->title . ", " . $post->content . "<br><br> ";
        }
    }
}
