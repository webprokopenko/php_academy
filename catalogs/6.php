<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:59
 */
$file = '1.php';
unlink($file) or die("cant delete $file $php_errormsg");

//Функция  unlink может удалять только те файлы который разрешено удалять пользователю процесса PHP