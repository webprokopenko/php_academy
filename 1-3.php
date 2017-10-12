<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 19:26
 */
$arr = [
    'html',
    'css',
    'php',
    'js',
    'jq'
];
foreach ($arr as $item) {
    echo $item."<p>";
}

$arr2 = [
    1,
    20,
    15
    ,17
    ,24,
    35
];
$sum1=0;

foreach ($arr2 as $item) {
    $sum1+=$item;
}
echo $sum1;

$arr3 = [
    26,
    17,
    136,
    12,
    79,
    15
];
$result = 0;
foreach ($arr3 as $item) {
    $result+=($item**2);
}
echo '<br>'.$result;