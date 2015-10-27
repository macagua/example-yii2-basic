<?php

use \yii\helpers\Html;

echo Html::a('Español', ['change-lang', 'lang'=>'es']);
echo "<br>";
echo Html::a('Ingles', ['change-lang', 'lang'=>'en']);
echo "<br>";

echo "<br>";
$username = 'Leonardo';
// display a translated message with username being "Leonardo"
echo \Yii::t('app', 'Hola, {username}!', [
    'username' => $username
]);

echo "<br>";
$age = 24;
echo \Yii::t('app', 'Tu edad es {age}', ['age' => $age]);

echo "<br>";

$price = 100;
$count = 2;
$subtotal = 200;
echo \Yii::t('app', 'Precio: {0}, Conteo: {1}, Subtotal: {2}', [$price, $count, $subtotal]);

echo "<br>";
echo \Yii::t('app', 'Precio: {0}', $price);

$price = 100;
echo "<br>";
echo \Yii::t('app', 'Precio: {0, number, integer}', $price);

echo "<br>";
echo \Yii::t('app', 'Hoy: {0, date, dd-M-yyyy}', time());

echo "<br>";
$cats = 2;
echo \Yii::t('app', 'Aquí {cats, plural, =0{no hay gatos} =1{hay un gato} other{hay # gatos}}!', ['cats' => $cats]);
