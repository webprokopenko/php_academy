<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 05.10.2017
 * Time: 19:04
 */
/**
 * Обращение к глобальной переменной внутри функции
 */
$food = 'pizza';
$drink = 'water';

function party(){
    global $food;
    global $drink;

    unset($food);
    unset($GLOBALS['drink']);
}
print "$food : $drink\n";
party();
print "$food : $drink\n";

/**
 * Создание динамических функций
 * Требуется создать и определить функцию во время выполнения программы
 */
$add = function($i,$j){
    return $i + $j;
};

echo "<br>".$add(16,2);

/**
 * Использование динамической функции
 */
$increment1 = 7;
$increment2 = 10;
$add2 = function ($i,$j) use ($increment1,$increment2){
    return $i + $j + $increment1 + $increment2;
};
echo "<br>".$add2(2,2);

//$add3 = function ($i,$j){
//    return $i + $j + $increment1 + $increment2;
//};
/**
 * Второй вариант использования динамической функции
 */
$increment3 = 10;
$add4 = create_function('$i,$j','return $i+$j+'.$increment3.';');

echo $add4(10,10);

/**
 * callables functions
 */
function callables($text=''){
    echo $text."<br>";
}

$res = call_user_func('callables','SEND TEXT IN FUNCTION');

function callables2(){
    $count = func_num_args();
    foreach (func_get_args() as $key => $value) {
        echo "ID Argument: ".$key." Value: ".$value."<br>";
    }
    echo "Count of Arguments: ".$count;
    return $count;
}

$array = [11=>'test',1=>16,'Key ' => 'Value'];
$counts = call_user_func_array('callables2',$array);
