<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:17
 */
$fh = fopen('tmp/tmp1.txt','a+') or die("cant open file");
if (-1  == fwrite($fh,"Hello world")){ die("cant write data to file");}
fclose($fh);

//$fh = fopen('tmp/tmp1.txt','w') or die("cant open file");
//if (-1  == fwrite($fh,"Hello world")){ die("cant write data to file");}
//fclose($fh) or die("cant close: $php_errormsg");
