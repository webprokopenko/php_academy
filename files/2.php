<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:31
 */
$temp_fh = tmpfile();
//Запсь данных во временный файл
fputs($temp_fh,"Current time is ".strftime('%c'));
//Уничожаем файл при завершении сценария
exit(1);

$tempfilename = tempnam('/tmp','data-');
$temp_fh = fopen($tempfilename,'w') or die($php_errormsg);
fputs($temp_fh, "The current time is", strftime('%c'));
fclose($temp_fh) or die ($php_errormsg);