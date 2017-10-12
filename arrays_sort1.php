<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 18:59
 */
$arr_files = [
    'test1.php',
    'test2.php',
    'test41.php',
    'test64.php',
    'test5.php'
];
sort($arr_files);
print_r($arr_files);
/**
 * Формирует массив в случайном порядке. Рандомно.
 */
shuffle($arr_files);
print_r($arr_files);

$complex_arr = array();
$complex_arr[] = array('id'=>32);
$complex_arr[] = array('id'=>11);
$complex_arr[] = array('id'=>27);
print_r($complex_arr);

function myCamp($a,$b){
    if (isset($a['id']) && $b['id']){
        if($a['id'] == $b['id'])
            return 0;
        return $a['id'] < $b['id'] ? 1 : -1;
    }else{
       return false;
    }
}

usort($complex_arr,'myCamp');
print_r($complex_arr);

/**
 * uksort - аналог usort. Исключение - сортирует по ключу
 */
$complex_arr2 = array();
$complex_arr2[2] = array('c'=>'ivan');
$complex_arr2[3] = array('a'=>'igor');
$complex_arr2[4] = array('b'=>'nadezda');
print_r($complex_arr2);

function myCamp2($a,$b){
    if ($a == $b)
        return 0;
    return $a > $b ?1:-1;
}
uksort($complex_arr2,'myCamp2');

print_r($complex_arr2);


