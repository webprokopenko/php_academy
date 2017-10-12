<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 20:27
 */
$str = 'apple,cherry,apple,cherry,mango,bananas';
$arr = explode(',',$str);
var_dump($arr);
$rez_array = [];
foreach ($arr as $key1 => $value1) {
    foreach ($arr as $key2 => $value2) {
        if ($value1 == $value2){
            if (!isset($rez_array[$value1]))
                $rez_array[$value1]= 0;

            $rez_array[$value1]++;
            unset($arr[$key2]);
        }
    }
}
echo "<br>";
print_r($rez_array);