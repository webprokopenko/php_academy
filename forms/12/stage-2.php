<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:38
 */
?>
<form action="<?= htmlentities($_SERVER['SCRIPT_NAME']);?>" method="POST" >
    Favorite color: <input type="text" name="color">
    Favorite food: <input type="text" name="food">
    <input type="hidden" name="stage" value="<?=$stage + 1?>">
    <input type="submit" value="Done">
</form>
