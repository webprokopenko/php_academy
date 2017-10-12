<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.10.2017
 * Time: 20:43
 */
$arr = [
    'hello',
    2,
    [
        1,
        'fio',
        15
    ]
];

//Конвертируем в строку и сериализуем
$string = serialize($arr);
echo $string;
echo "<br>";
//Cохранили в БД или файл


//Получаем исходное значение(выводим пользователю)
$string2 = unserialize($string);
var_dump($string2);

//JSON
//Конвертируем строку
$str_json = json_encode($arr);
echo "<br>";
echo $str_json;

//Восстанавливаем значение
$new_var = json_decode($str_json);
