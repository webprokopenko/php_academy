<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:01
 */
$old = '1.php';
$new = '1v1.php';
copy($old,$new) or die("couldnt copy $old to $new $php_errormsg");

$old = '1v1.php';
$new = '1v2.php';
rename($old,$new) or die("couldnt move $old to $new $php_errormsg");
