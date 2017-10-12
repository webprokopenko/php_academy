<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.10.2017
 * Time: 20:14
 */
//print_r(getrusage());

//Отдыхаем 3 секунды
//sleep(3);

for ($i=0;$i<100000;$i++){
    $arr[] = md5('123');
}

$data = getrusage();
echo "User time: ". ($data['ru_utime.tv_sec'] + $data['ru_utime.tv_usec'] / 1000000);
echo "<br>";
echo "System time: ".($data['ru_stime.tv_sec'] + $data['ru_stime.tv_usec'] / 1000000);
