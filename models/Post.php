<?php

namespace app\models;

class Post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return "posts";
    }
}
