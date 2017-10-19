<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:33
 */
//Процедурный подход
$d = opendir(__DIR__.'/../') or die($php_errormsg);
while (false !== ($f = readdir($d))){
    print $f . "\n";
}
closedir($d);

//ООП подход
foreach (new DirectoryIterator(__DIR__.'/../') as $file){
    print $file->getPathname();
}