<?php

namespace app\models;

class Post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return "posts";
    }

    public function rules()
    {
        return [
            [["title", "content"], "required"],
            [["title"], "string", "max" => 255],
            [["content"], "string"]
        ];
    }

    public function attributeLabels()
    {
        return [
            "id" => "Id",
            "title" => "Titulo",
            "content" => "Contenido"
        ];
    }
}
