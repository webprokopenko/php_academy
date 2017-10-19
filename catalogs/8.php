<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:04
 * Получение списка файлов по шаблону
 */

class ImageFilter extends FilterIterator{
    public function accept()
    {
        return preg_match('@\.(gif|jpe?g|png)$@i',$this->current());
    }
}

foreach (new ImageFilter(new DirectoryIterator(__DIR__ . '/../')) as $img) {
    print "<img src='".htmlentities($img)."' />\n";
}
