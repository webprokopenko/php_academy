<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:00
 * Построение строки запроса
 * Требуется сгенерировать строку запроса с заданными парами имя\значение
 */
$vars = ['name'=>'Oscar','color'=>'green','favorite'=>1];

$quryString = http_build_query($vars);
$url = '/headers/select.php?'.$quryString;
$cookieString = http_build_cookie($vars);
echo $url;
echo "<br>";
echo $cookieString;