<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 19:52
 */
$str = 'test1 test2 test3 test4 test4 test5 test5 test6';

function count_unique_words2($str){
    $words = explode(' ',$str);
    $empty_arr = [];
    $unique = 0;
    foreach ($words as $key1 => $word1) {

        echo "<br>Key1: $key1 Value1: $word1 <br>";

        foreach ($words as $key2=>$word2) {
            if ($word1 == $word2){
                $empty_arr[$word1]=+1;
            }

            echo "Key2: $key2 Value2: $word2 ";
        }        
    }

    print_r($empty_arr);
}
//count_unique_words2($str);
















function count_unique_words($str){
    $words = explode(' ',$str);

    $unique = 0;
    $unique2 = 0;
    $result_array = [];

    foreach ($words as $key1 => $word1) {
        foreach ($words as $key2 => $word2) {
            if ($word1 == $word2){
                if (!isset($result_array[$word1])){
                    $result_array[$word1]=1;
                }else{
                    $result_array[$word1]++;
                }
                unset($words[$key2]);
            }
        }
    }

    foreach ($result_array as $item) {
        if ($item===1)
            $unique++;
    }

var_dump($result_array);
    return $unique;
}
$arr_res = count_unique_words($str);
//var_dump($arr_res);