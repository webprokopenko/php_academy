<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 25.09.2017
 * Time: 20:42
 */
#Сортировка массива
/**
 * SORT_NUMERIC - числовове сравнение элементов
 * SORT_STRING - строковое сравнение элементов
 * SORT_NATURAL - строковое с учетом цифр
 * SORT_REGULAR - сортировка с сохранение ключа
 */

$states = array('Delware','Pennsylvania','New Jersey', 'Danwer');
//var_dump($states);
sort($states, SORT_REGULAR);
//var_dump($states);

$scores = array(1,3,5,10,13,9,8);
//var_dump($scores);
//sort($scores,SORT_NUMERIC);
//var_dump($scores);

sort($scores);
print_r($scores);


//rsort($scores);
//print_r($scores);

arsort($scores);
print_r($scores);


