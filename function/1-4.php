<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 19:45
 */
$string = 'abcde';

function reverse_string(&$str){
    $str2 = '';
    for ($i=0;$i<strlen($str);$i++){
        $str2.=$str[strlen($str)-1-$i];
    }
    $str = $str2;
    return $str2;
}
echo reverse_string($string);
echo "<br>";
echo $string;