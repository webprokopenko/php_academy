<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:41
 */
$people = file_get_contents('1.php');

$image_directory = __DIR__.'/img/';
if (preg_match('/^[a-zA-Z0-9]+\.(gif|jpe?g|png)$/',$image,$matches) && is_readable($image_directory."/$image")){
    if (filemtime($image_directory."/$image") >=(time() - 86400 * 7)){
        header("Content-Type: image/".$matches[1]);
        header('Content-Length: '.filesize($image_directory."/$image"));
        readfile($image_directory,"/$image");
    }
}else{
    error_log("Cant serve imgae: $image");
}