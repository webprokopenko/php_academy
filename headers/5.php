<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:15
 */
//Заголовок User_agent
echo $_SERVER['HTTP_USER_AGENT'];
#Для получения всех заголовоков
$headers = getallheaders();
var_dump($headers);

$_SERVER['HTTP_ETAG'];