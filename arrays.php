<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 25.09.2017
 * Time: 19:06
 */
$array = array();
//var_dump($array);
$array1 = [];
//var_dump($array1);
/**
 * Числовые массивы
 */
$fruits = array('Apples','Bananas','Cantaloupes','Dates');
//var_dump($fruits);
//echo $fruits[1];

$fruits1[1] = 'Apples';
$fruits1[2] = 'Bananas';
$fruits1[3] = 'Cantaloupes';
$fruits1[4] = 'Dates';

//var_dump($fruits1);

$fruits2[] = 'Apples';
$fruits2[16] = 'Bananas';
$fruits2[] = 'Cantaloupes';
$fruits2[] = 'Dates';

$fruits2[24] = 'Bananas';
$fruits2[] = 'Cantaloupes';
$fruits2[] = 'Dates';

//var_dump($fruits2);

//echo count($fruits);
$keys = array_keys($fruits2);
//var_dump($keys);
//for ($i=0;$i<=(count($fruits)-1);$i++){
//    echo 'key: '.$keys[$i].' value: '.$fruits[$i]."<br>";
//}

//foreach ($fruits2 as $key=>$value) {
//    echo 'key: '.$key.' value: '.$value."<div>";
//}

/**
 * Ассоциативные
 */
$fruits3['red']= 'Apples';
$fruits3['yellow'] = 'Bananas';
$fruits3['beige'] = 'Cantaloupes';
$fruits3['brown'] = 'Dates';

foreach ($fruits3 as $color => $fruit) {
    //print "$color are $fruit <br>";
}

/**
 * Cмешанные
 */
$fruits4[-3]        =       'Apples';
$fruits4[]           =       'Bananas';
$fruits4[16]        =       'Cantaloupes';
$fruits4['fruits']  =        'Dates';
$fruits4[]          =           'Pineapple';
$fruits4[-300]        =       'Apples';
$fruits4[]          =           'Pineapple';

foreach ($fruits4 as $key => $value) {
    //print "Key: $key, value: $value <br>";
}

/**
 * Инициализация массива диапазоном целых чисел
 */
$cards = range(0,10,1);
//print_r($cards);
//var_dump($cards);

/**
 * Проверка является ли данные массивом
 */
$not_array = 1;

if (is_array($not_array))
{
    foreach ($not_array as $item) {
//        echo $item;
    }
}else{
    //Код для обычного скалярно значения
//    echo  "NOT ARRAY";
}
/**
 * Преобразование всех переменных в массив
 */
$var  = 123;
//var_dump($var);
//echo settype($var,'array');
//var_dump($var);

/**
 * Удаление элементов из массива
 */
//var_dump($cards);

unset($cards[1]);
//var_dump($cards);
/**
 * Удаление первого элемента массива
 */
array_shift($cards);
/**
 * Удаление последнего элемента массива
 */
array_pop($cards);

unset($cards[4]);
//var_dump($cards);

/**
 * Проиндексировать массив, сделать числовым, удалить пропущенные элементы
 */

$fruits4[-3]        =       'Apples';
$fruits4[]           =       'Bananas';
$fruits4[16]        =       'Cantaloupes';
$fruits4['fruits']  =        'Dates';
$fruits4[]          =           'Pineapple';
$fruits4[-300]        =       'Apples';
$fruits4[]          =           'Pineapple';

$fruits5 = (array_values($fruits4));
//var_dump($fruits5);

unset($fruits5[3]);
//var_dump($fruits5);
//$fruits5 = (array_values($fruits5));
//var_dump($fruits5);

unset($fruits5[3]);

array_splice($fruits5, 2,10); // Удалить 3-й элемент массива
/**
 * Изменение размера массива
 */
$fruits7[-3]        =       'Apples';
$fruits7[]           =       'Bananas';
$fruits7[16]        =       'Cantaloupes';
$fruits7['fruits']  =        'Dates';
$fruits7[]          =           'Pineapple';
$fruits7[-300]        =       'Apples';
$fruits7[]          =           'Pineapple';

//echo count($fruits7);

$fruits8 = array_pad($fruits7,(count($fruits7)+10),''); # Увеличение размера массива  на 1
//echo count($fruits8);
//var_dump($fruits8);

/**
 * Усечение массива
 */
$fruits8 = array_slice($fruits8,2); #Усечение массива кроме первых 2-х
$fruits8 = array_slice($fruits8,-1); #Удаление последнего элемента массива

/**
 * Слияние массивов
 */
$fruits10[13]        =       'Apples';
$fruits10[]           =       'Bananas';
$fruits10[]        =       'Cantaloupes';
$fruits10[]  =        'Dates';
$fruits10[]          =           'Pineapple';
$fruits10[]        =       'Apples';
$fruits10['test']          =           'Pineapple';

$vegitables[11] = 'Tomato';
$vegitables[13] = 'Cucumber';
$vegitables[] = 'Potatoes';
$vegitables[10] = 'Bow';
$vegitables['test'] = 'Carrots';

$garden  = array_merge($fruits10,$vegitables);
var_dump($garden);

/**
 * Преобразование массива в строку
 */
$string = join('; ',$garden);

$str='';
foreach ($garden as $value) {
    $str.=$value.',';
}
//echo $str;

/**
 * Проверка присутствия ключа в массиве
 */
var_dump(array_key_exists('test',$garden));

$count = 0;
foreach ($garden as $key=>$value){
    if ($value=='test'){
        $count++;
    }
}
//echo $count;
/**
 * Проверка присутствия значения в массиве
 */
//var_dump(in_array('Apples',$garden));

//var_dump(in_array('Apples',$garden,true)); #Строгое сравнение по типу

if (0===false)
{
    echo "0 = false";
}
//echo gettype(0);
//echo gettype(false);


//Определение позиции значения в массве
$position = array_search('Applesss',$garden);
var_dump( $position);
//echo $garden[$position];

//Поиск элемента с наибольшим или наименьшим значением
$movies[] = 100;
$movies[] = 200;
$movies[] = 300;
$movies[] = 983;
$movies[] = 81;
$largest = max($movies); #Наибольшее
$smallest = min($movies); #Наименьшее
echo $largest;
echo "<br>";
echo $smallest;

$arr = array('Zero','One','Two');
$reversed = array_reverse($arr); # В обратном порядке
echo "<p>";
var_dump($arr);
echo "<p>";
var_dump($reversed);