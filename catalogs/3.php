<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:46
 */
$last_access = fileatime('2.php');
$last_modification = filemtime('2.php');
$last_change = filectime('2.php');

echo $last_access;

echo "<br>";
echo $last_modification;
echo "<br>";
echo $last_change;
echo "<br>";
echo "Last modified :". strftime('%c', $last_access);
touch('2.php');
echo "<br>";
echo "Last modified :". strftime('%c', $last_modification);