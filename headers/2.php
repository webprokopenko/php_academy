<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 19:54
 */
/**
 * Чтение  cookie
 */
filter_has_var(INPUT_COOKIE,'flavor');

setcookie('flavor','value');

if (isset($_COOKIE['flavor'])){
    print "You flvor is a {$_COOKIE['flavor']} cookie.";
}else{
    print "Coockie is empty";
}
