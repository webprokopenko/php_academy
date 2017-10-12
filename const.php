<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.10.2017
 * Time: 20:26
 */

namespace namespace1;

echo __LINE__ ; # Номер текущей строки
echo "<br>";
echo __FILE__; #Путь к файлу
echo "<br>";
echo __DIR__; #Путь к каталогу
echo "<br>";
function test_func(){
    echo __FUNCTION__; #Имя функции
    echo "<br>";
}
test_func();
class User{
    public static function stat_method()
    {
        return "stat";
    }
    public function test()
    {
        echo __CLASS__; #Имя класса
        echo "<br>";

        echo __METHOD__; #Имя метода
        echo "<br>";
    }
}
$testObj = new User();
$testObj->test();
echo __NAMESPACE__; #Пространство имем
echo "<br>";
