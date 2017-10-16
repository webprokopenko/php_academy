<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:42
 */
?>
Hello <?= htmlentities($_SESSION['name'])?>.
You are <?=htmlentities($_SESSION['age'])?> years old.
You are favorite color is <?=htmlentities($_SESSION['color'])?>.
and your favorite food is <?=htmlentities($_SESSION['food'])?>.
