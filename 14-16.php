<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 20:02
 */
$arr = array(4,2,5,19,13,0,10);
foreach ($arr as $value) {
    if ($value ==2 || $value == 3 or $value == 4){
        //echo "Есть!!";
        break;
    }else{
        echo "Нет";
        break;
    }
}
$count = 0;
foreach ($arr as $value) {
    $count++;
}
//echo $count;

$arr2 = array(1,2,3,4,5,6,7,8,9);
/**
 * 1,2,3
 * 4,5,6
 * 7,8,9
 */
$co = 0;
foreach ($arr2 as $key=>$value) {
    echo "$value";
    if (($key+1)%3 == 0 )
        echo "<br>";
    else
        echo ",";
}