<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 20:37
 */

$str = "Sentence 1. Sentence 2. Sentence 3";
$arr = explode('.',$str);
var_dump($arr);
$arr = array_reverse($arr);
var_dump($arr);
$str = implode('.',$arr);
echo $str;