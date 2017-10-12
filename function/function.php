<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 02.10.2017
 * Time: 19:16
 */
/**
 * Обращение к параметрам функции
 * Требуется получить доступ к значениями переданным в функции
 */
function send_message($letter,$number){
    print "This episode of Sesame Street is Brought to you by";
    print "the letter $letter and number $number. <br>";
}
$var1 = "LETTER1";
$var2 = "NUMBER1";
send_message($var1,$var2);

$var3 = $var1;
$var3.="STRING ";

$var4 = &$var1;
$var4 = "LETTER4"; //$var1 = "LETTER4"

function add_one(&$number){
    $number++;
}
$number = 1;
add_one($number);
echo "<br>";
echo $number;


/**
 * Определять значения по умолчанию для параметров функции
 */
function wrap_in_html_tag($text,$tag='strong'){
    return "<$tag>$text</$tag>";
}

$var5 = wrap_in_html_tag("HELLO WORLD");
$var6 = wrap_in_html_tag("HELLO WORLD",'em');

echo $var5;
echo "<br>";
echo $var6;

/**
 * Требуется передать переменную функции так, чтобы в енй сохранились все изменения, внесенные в ее значение внутри функции
 */
function wrap_in_html_tag2(&$text, $tag='strong'){
    $text = "<$tag>$text</$tag>";
}
$text = "Hello text";
wrap_in_html_tag2($text);
echo $text;

/**
 * Требуется передать аргументы функции по имени(а не по их позиции в списке при вызове функции
 */
function image(array $img){
    $tag = "<img src='".$img['src']."' ";
    $tag.= 'alt="'. (isset($img['alt'])? $img['alt'] : '').'"/>';
    return $tag;
}
$arr = [
    'src1'=>'wow.png',
    'alt'=>'wow is now'
];

$str = "sdaf";
$int = 1;
$float = 1.1;

$image1 = image($arr);

$image2 = image(array('src'=>'wow.png'));

echo "<br>";
echo $image1;
echo "<br>";
echo $image2;

function image2(array $img){
    if (! isset($img['src'])){$img['src'] = 'wow.png';}
    if (! isset($img['alt'])){$img['alt'] = 'wow alt';}
    if (! isset($img['height'])){$img['height'] = 100 ;}
    if (! isset($img['width'])){$img['width'] = 50 ;}

    $tag = '<img src="'.$img['src']. '" ';
    $tag.= 'alt="'.$img['alt'].'"/>';
}

function image3(array $img){
    $defaults = [
        'alt' => 'alt deffault',
        'src' => 'src deffault',
    ];
    $img = array_merge($defaults,$img);
}

Class testClass{
    private $test;
    public  $pub;

    public function testName($name)
    {
        return $name.="<br>";
    }
}


function testFunc(testClass $testClass){
    $testClass->testName("NAME ");
}

$obj = new testClass();
//$obj2->pub = "PUB1";
$obj2 = new testClass();


testFunc($obj2);


function cal_test(callable $func){
    call_user_func($func);
}

cal_test(function(){echo "callable function test!!!";});

$testFunc = function ($text = "Test text"){
    echo "$text<br>";
};
function cal_test2(callable $func,$param1){
    call_user_func($func,$param1);
}
cal_test2($testFunc,"!!!!!!!!!!!!!");

/**
 * Требуется определить функцию которая может получать переменное количество аргументов
 */
function mean($numbers){
    $sum = 0;
    $size = count($numbers);
    for ($i=0;$i<$size;$i++){
        $sum+=$numbers[$i];
    }

    $average = $sum / $size;

    return $average;
}

$mean = mean([83,91,31,1]);

function mean2(){
    $sum = 0;
    $size = func_num_args(); //

    for ($i=0;$i<$size;$i++){
        $sum+=func_get_arg($i);
    }

    return $average = $sum / $size;
}
echo "<br>";

function mean3(){
    for ($i=0;$i<func_num_args();$i++)
    {
        echo func_get_arg($i)."<br>";
    }
}

mean3(1,"str",1.1, true);


//echo $mean2 = mean2(96,31,44,61,87,114);
echo "<br>";

function mean4($arg1="",$arg2=null){
    $size = func_num_args();
    echo $size;
    echo "<br>";
    foreach (func_get_args() as $key => $arg) {
        echo "key: ".$key." value: ".$arg. "<br>";
    }
}
mean4();

function &array_find_value($needle,&$haystack){
    foreach ($haystack as $key => $value) {
        if ($needle == $value) {
            return $haystack[$key];
        }
    }
}

$arr34 = [
    'Bob Dylan',
    'F.Scott',
    'Prince',
    'Charles',
];
$prince = &array_find_value('Prince',$arr34);
var_dump($prince);
$prince = "NEW PRINCE";
var_dump($arr34);

/**
 * Задача вернуть несколько значений из функции
 */

function array_stats($values){
    $min = min($values);
    $max = max($values);
    $mean = array_sum($values) / count($values);

    return array($min,$max,$mean);
}

function time_parts($time, &$hour, &$minute, &$second){
    list($hour,$minute,$second) = explode(":", $time);
}
$hour = 14;

time_parts('12:44:31', $hour,$minute,$second);
echo $hour. "<br>";


$minutes = '123123213123';
function time_parts_blobal($time){
    global $hour,$minutes,$seconds;

    list($hour,$minute,$second) = explode(":", $time);
}

function lookup($name){
    if (empty($name)) return false;
    /**
     * Какой-то код
     */
}

if (lookup('Jack')){
    /*
     * Поиск прошел успешно
     */
}else{
    /**
     * Сохранить информацию об ошибке
     */
}