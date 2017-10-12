<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 19:33
 */
$arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
    echo "<br>".$key;
}
foreach ($arr as $bla_bla_bla) {
    echo "<br>".$bla_bla_bla;
}

$arr2['Коля'] = 200;
$arr2['Вася'] = 300;
$arr2['Петя'] = 400;

foreach ($arr2 as $key => $value) {
    if($key == 'Коля')
    echo "<br>".$key." - зарплата ".$value.' долларов';
}

$arr3 = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr3 as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
//print_r($en);
//print_r($ru);
$arr4 = array(2,5,9,15,0,4);
foreach ($arr4 as $value) {
    if($value>3 and $value<18)
        echo "<br>".$value;
}

$arr5 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);
'-1-2-3-4-5-6-7-8-9-';
$count_arr = count($arr5);
$arr5 = array_pad($arr5,$count_arr+1,'');
$str='';
foreach ($arr5 as $value) {
    $str.='-'.$value;
}
echo "<br>".$str;