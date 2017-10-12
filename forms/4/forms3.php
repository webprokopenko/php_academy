<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 19:56
 */
/**
 * Проверка чисел по регулярному выражению
 */
if  (!preg_match('/^-?\d+$/',$_POST['age'])){
    print "You age mys be an integer";
}
