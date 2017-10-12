<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 20:43
 */
/**
 * Обращение к подстрокам
 * Задача Узнать содержит ли строка заданную подстроку
 */
$email = "test@php.com";
if (strpos($email,'@') == false)
    echo "There was no @ in e-mail address!!";
else
    echo strpos($email,'@');

/**
 * Выделение подстрок
 */
echo "<br>".substr($email,0,-1);
echo "<br>".substr($email,0,2);
echo "<br>".substr($email,-10,5);

/**
 * Замена подстрок
 * Требуется заменить подстроку другой строкой
 * скрыть цифры номер карты кроме четырех последних
 */

$old_str = '4444 1111 2222 3333';
$new_str = 'XXXX XXXX XXXX ';
echo "<br>";
echo substr_replace($old_str,$new_str,0,strlen($old_str)-5);

/**
 * Обработка строки по одному байту
 */
$test_string = "This weekend I'm going shopping for a pet chicken.";
for ($i=0;$i<strlen($test_string);$i++){
    echo "<br>".$test_string[$i];
}
/**
 * Обратная перестановка строки по словам
 */
$str1 = "This is not a palindrome";
echo strrev($str1);
echo "<br>";

/**
 * Обратная перестановка строки по словам
 */
echo $str1;
echo "<br>";
$words = explode(' ',$str1);
$words = array_reverse($words);
echo implode(' ', $words);

/**
 * Генерация случайной строки
 */
function str_rand($length = 32, $characters = '0123456789asdfghjklqwertyuiopxzcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'){
    if (!is_int($length) or $length<=0)
        return false;

    $characters_length = strlen($characters)-1;
    $str = '';
    for ($i = $length;$i>0;$i--){
        $str.= $characters[mt_rand(0,$characters_length)];
    }
    return $str;
}
echo "<br>";
print str_rand(4,'0123456789');
echo "<br>";

/**
 * Управление регистром символов
 */

$str = "test string thi is";
echo ucfirst($str); #Перевое слово первая буква к верхнему регистру
echo "<br>";
echo ucwords($str); #Все слова первая буква к верхнему регистру
echo "<br>";
echo strtoupper($str); #Все слова к верхнему регистру
echo "<br>";
echo strtolower($str); #Все слова к нижнему регистру

/**
 * Удаление начальных или конечных пропусков в строке
 */
echo "<br>";
echo ltrim($str); # Удаляет пропуск в начале строки
echo "<br>";
echo rtrim($str); # Удалет пропуск в конце строки
echo "<br>";
echo trim($str); #Удаляет вначале и в конце
echo "<br>";

