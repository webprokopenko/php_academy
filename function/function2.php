<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 19:23
 */
/**
 * Рекурсии - пишем аналог функции print_r
 */
$arr = [1, 2, 3, 'str', [ '2', 5, 8, 'str'], 13, 11];
function user_print_r($arg,$str=''){
    foreach ($arg as $key=>$item) {
        if (is_array($item)){
            echo "Array(";
            $str.="Array(";
            user_print_r($item);
        }else{
            echo "[".$key."]".$item."<br>";
            $str.="[".$key."]".$item."<br>";
        }
    }
    $str.=")";
    return $str;
}
echo user_print_r($arr);

/**
 * Рекурсия - пишем аналог count() c учетом вложенных массивов
 */
$arr = [1, 2, 3, 'str', [ '2', 5, 8, 'str'], 13, 11];

function user_count(array $user_arrays){
    static $i=0;
    foreach ($user_arrays as $user_array) {
        if (!is_array($user_array))
            $i++;
        else
            user_count($user_array);
    }
    return $i;
}
echo user_count($arr);