<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 20:36
 */
$fh = fopen('http://www.exaple.com/robots.txt') or die($php_errormsg);

$fh1 = fopen('ftp://username:password@ftp.example.com/pub/Index','r');