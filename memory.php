<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.10.2017
 * Time: 19:59
 */

$soul = ';alsdfkj;alsdkjf;lasdfkjP*(UPO';
$password = '123';
$hash_password = md5($password.$soul);

echo $password;
echo "<br>";
echo $hash_password;
echo "<br>";

$auth_password = '123';
if (md5($auth_password.$soul) === $hash_password){
    echo "Авторизован";
}


echo "Initial memory:". memory_get_usage(). "bytes \n";

for ($i=0;$i<10000;$i++){
    $array[] = md5($i);
}

for ($i=0;$i<10000;$i++){
  //unset($array[$i]);
}

echo "Final:". memory_get_usage(). "bytes \n";

echo "Max memory".memory_get_peak_usage();



