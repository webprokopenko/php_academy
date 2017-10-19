<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:12
 * Удаление каталога и всего содержимого в нем
 */
function delete_directory($dir){
    $iter = new RecursiveDirectoryIterator($dir);
    foreach (new RecursiveIteratorIterator($iter,RecursiveIteratorIterator::CHILD_FIRST) as $f ) {
        if ($f->isDir()){
            rmdir($f->getPathname());
        } else {
            unlink($f->getPathname());
        }
    }
    rmdir($dir);
}
