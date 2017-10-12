<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 20:38
 */
$ch = 123;
settype($ch,'string'); // '123'
$sum = 0;

for($i=0;$i<strlen($ch);$i++){
    $sum+=$ch[$i];
}

$ch1 = 11134567595895474849;
$key = 5;
$count = 0;
settype($ch1,'string');
for($i=0;$i<strlen($ch1);$i++){
    if ($ch1[$i] == $key){
        $count++;
    }
}

$arr2 = array();
$arr2 = range(1,42,2);
print_r($arr2);
for($i=0;$i<50;$i++){
    $arr2[$i] = rand(1,100);
}
print_r($arr2);

$max=0;
$min = $arr2[0];

foreach ($arr2 as $key=>$value) {
    if ($value>$max){
        $max = $value;
        $key_max = $key;
    }
    if($value<$min){
        $min = $value;
        $key_min = $key;
    }
}
$arr2[$key_max] = $min;
$arr2[$key_min] = $max;

echo "<br>MAX: ".$max. " KEY: ".$key_max;
echo "<br>MIN: ".$min. "KEY: ". $key_min;

